#include "tcpclient.h"

#include <QtNetwork>

TcpClient::TcpClient()
{
    tcpsocket = new QTcpSocket(this);
    blocksize=0;
    tcpsocket->connectToHost(tr("localhost"),6666);
}

TcpClient::~TcpClient()
{
    tcpsocket->abort();
    delete tcpsocket;
}

void TcpClient::sendms(QString ms)
{
    QByteArray block;
    QDataStream out(&block,QIODevice::WriteOnly);
    out.setVersion(QDataStream::Qt_5_6);
    out<<(quint16)0;

    out<<ms;
    out.device()->seek(0);
    out<<(quint16)(block.size()-sizeof(quint16));

    tcpsocket->write(block);

    qDebug()<<"tcpclient:sendms:"<<ms<<endl;

    dis = connect(tcpsocket,SIGNAL(readyRead()),this,SLOT(acceptanswer()));
}

void TcpClient::acceptanswer()
{

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

    QString ms;
    in>>ms;

    qDebug()<<ms;

    QJsonObject obj = str2json(ms);

    disconnect(dis);


    emit res(obj);
}

QJsonObject TcpClient::str2json(QString str)
{
    QByteArray bytearr = str.toUtf8();//QString转QByteArray
    QJsonParseError jsonError;
    QJsonDocument doc = QJsonDocument::fromJson(bytearr,&jsonError);//QByteArray转QJsonDocument
    if (jsonError.error != QJsonParseError::NoError){
        QString errdata = QString(jsonError.errorString().toUtf8().constData());
        qDebug() << errdata;
    }
    QJsonObject json(doc.object());//QJsonDocument转QJsonObject

    qDebug()<<str<<endl;
    qDebug()<<json["name"];

    return json;
}
