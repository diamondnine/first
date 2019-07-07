#include "tcpserver.h"

#include <QtNetwork>

TcpServer::TcpServer()
{
    l = new QLineEdit(this);
    l->setGeometry(100,200,100,100);

    tcpserver = new QTcpServer(this);
    if(!tcpserver->listen(QHostAddress::LocalHost,6666))
    {
        qDebug()<<tcpserver->errorString();
        close();
    }
    connect(tcpserver,SIGNAL(newConnection()),this,SLOT(links()));
}

TcpServer::~TcpServer()
{
    tcpsocket->disconnectFromHost();
    connect(tcpsocket,&QTcpSocket::disconnected,tcpsocket,&QTcpSocket::deleteLater);
    delete tcpserver;
}

void TcpServer::links()
{
    tcpsocket = tcpserver->nextPendingConnection();
    connect(tcpsocket,SIGNAL(readyRead()),this,SLOT(answerms()));
}

void TcpServer::answerms()
{
    QString ms;

    blocksize = 0;
    QDataStream in(tcpsocket);
    in.setVersion(QDataStream::Qt_5_6);

    if(blocksize==0)
    {
        if(tcpsocket->bytesAvailable()<blocksize)
            return;
        in>>blocksize;
    }

    if(tcpsocket->bytesAvailable()<blocksize)
        return;
    in>>ms;

    qDebug()<<ms<<endl;

    QJsonObject obj= str2json(ms);


    this->l->setText(ms);


    //tcpsocket->abort();

    QJsonObject ans = comp(obj);        //比对数据库

    QByteArray block;
    QDataStream out(&block,QIODevice::WriteOnly);
    out.setVersion(QDataStream::Qt_5_6);
    out<<(quint16)0;

    QString str = json2str(ans);
    //qDebug()<<str;
    out<<str;
    out.device()->seek(0);
    out<<(quint16)(block.size()-sizeof(quint16));

    tcpsocket->write(block);

}

QJsonObject TcpServer::str2json(QString str)
{

    QJsonObject mjsonss;
    QJsonParseError l_err;
    QJsonDocument l_doc = QJsonDocument::fromJson(str.toUtf8(), &l_err);
    if (l_err.error == QJsonParseError::NoError)
    {
        if (l_doc.isObject())
        {
            mjsonss = l_doc.object();
        }
    }

    return mjsonss;
}

QString TcpServer::json2str(QJsonObject json)
{
    QJsonDocument jsonDoc2(json);//QJsonObject转QJsonDocument
    QString str(jsonDoc2.toJson());//QJsonDocument转QString
    return str;
}

QJsonObject TcpServer::comp(QJsonObject ask)
{

    QSqlDatabase db = QSqlDatabase::addDatabase("QMYSQL");
    db.setHostName("localhost");
    db.setUserName("root");
    db.setPassword("root");
    db.setDatabaseName("perinfo");
    db.open();
    QSqlQuery query;

    QJsonObject obj;

    if(QString(ask["type"].toString())==(QString("login")))
    {
        QString f= QString("select * from personinfo where name = '%1' and passwd = '%2'").arg(QString(ask["name"].toString())).arg(QString(ask["passwd"].toString()));
        query.exec(f);

        if(query.first()!=NULL)
        {
            obj.insert("type",QJsonValue(QString("login")));
            obj.insert("result",QJsonValue(QString("True")));
            obj.insert("reason",QJsonValue(QString("noreason")));
            obj.insert("name",QJsonValue(QString(ask["name"].toString())));
            obj.insert("passwd",QJsonValue(QString(ask["passswd"].toString())));
            obj.insert("sex",QJsonValue(QString(query.value("sex").toString())));
            obj.insert("birth",QJsonValue(QString(query.value("birth").toString())));
            obj.insert("telephone",QJsonValue(QString(query.value("telephone").toString())));
            obj.insert("email",QJsonValue(QString(query.value("email").toString())));
            obj.insert("status",QJsonValue(QString(query.value("status").toString())));
        }
        else
        {
            obj.insert("type",QJsonValue(QString("login")));
            obj.insert("result",QJsonValue(QString("False")));
            obj.insert("reason",QJsonValue(QString(QObject::tr("账户或密码不对！！！"))));
            obj.insert("name",QJsonValue(QString(ask["name"].toString())));
            obj.insert("passwd",QJsonValue(QString(ask["passwd"].toString())));
            obj.insert("sex",QJsonValue(QString("")));
            obj.insert("birth",QJsonValue(QString("")));
            obj.insert("telephone",QJsonValue(QString("")));
            obj.insert("email",QJsonValue(QString("")));
            obj.insert("status",QJsonValue(QString("")));
        }

    }
    else if(QString(ask["type"].toString())==(QString("register")))
    {

        qDebug()<<"开始"<<endl;

        QString f= QString("select * from personinfo where name = '%1'").arg(QString(ask["name"].toString()));

        qDebug()<<"结束"<<endl;

        query.exec(f);


        qDebug()<<"开始2"<<endl;


        if(query.first()==NULL)
        {
            qDebug()<<"开始3"<<endl;

            QString a1 = QString((ask["name"]).toString());
            QString a2 = QString((ask["passwd"]).toString());
            QString a3 = QString((ask["sex"]).toString());
            QString a4 = QString((ask["birth"]).toString());
            QString a5 = QString((ask["telephone"]).toString());
            QString a6 = QString((ask["email"]).toString());
            QString a7 = QString("status");

            qDebug()<<"结束3"<<endl;

            QString j = QString("insert into personinfo(name,passwd,sex,birth,telephone,email,status,picture) values('%1','%2','%3','%4','%5','%6','%7',NULL)").arg(a1).arg(a2).arg(a3).arg(a4).arg(a5).arg(a6).arg(a7);
            bool ok = query.exec(j);
            db.commit();

            qDebug()<<ok<<endl;

            obj.insert("type",QJsonValue(QString("register")));
            obj.insert("result",QJsonValue(QString("True")));
            obj.insert("reason",QJsonValue(QString("noreason")));
            obj.insert("name",QJsonValue(QString(ask["name"].toString())));
            obj.insert("passwd",QJsonValue(QString(ask["passwd"].toString())));
            obj.insert("sex",QJsonValue(QString(ask["sex"].toString())));
            obj.insert("birth",QJsonValue(QString(ask["birth"].toString())));
            obj.insert("telephone",QJsonValue(QString(ask["telephone"].toString())));
            obj.insert("email",QJsonValue(QString(ask["email"].toString())));
            obj.insert("status",QJsonValue(QString(ask["status"].toString())));

        }
        else
        {
            qDebug()<<"开始4"<<endl;

            obj.insert("type",QJsonValue(QString("register")));
            obj.insert("result",QJsonValue(QString("False")));
            obj.insert("reason",QJsonValue(QString(QObject::tr("此账户已存在！！！"))));
            obj.insert("name",QJsonValue(QString(ask["name"].toString())));
            obj.insert("passwd",QJsonValue(QString(ask["passwd"].toString())));
            obj.insert("sex",QJsonValue(QString(query.value("sex").toString())));
            obj.insert("birth",QJsonValue(QString(query.value("birth").toString())));
            obj.insert("telephone",QJsonValue(QString(query.value("telephone").toString())));
            obj.insert("email",QJsonValue(QString(query.value("email").toString())));
            obj.insert("status",QJsonValue(QString(query.value("status").toString())));

            qDebug()<<"结束4"<<endl;
        }


        qDebug()<<"结束2"<<endl;
    }

    db.close();

    return obj;
}
