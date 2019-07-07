#include "server.h"
#include "ui_server.h"

#include <QtNetwork>
#include <QDebug>

Server::Server(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::Server)
{
    ui->setupUi(this);
    connect(&tcpServer,SIGNAL(newConnection()),this,SLOT(acceptConnection()));

}

Server::~Server()
{
    delete ui;
}

void Server::start()
{
    if(!tcpServer.listen(QHostAddress::LocalHost,6666))
    {
        qDebug()<<tcpServer.errorString();
        close();
        return;
    }
    ui->startButton->setEnabled(false);
    totalBytes = 0;
    bytesReceived = 0;
    fileNameSize = 0;
    ui->serverStatusLabel->setText(tr("监听"));
    ui->serverProgressBar->reset();
}

void Server::acceptConnection()
{
    qDebug()<<"这是开始1";
    tcpServerConnection = tcpServer.nextPendingConnection();
    connect(tcpServerConnection,SIGNAL(readyRead()),this,SLOT(updateServerProgress()));
    connect(tcpServerConnection,SIGNAL(error(QAbstractSocket::SocketError)),this,SLOT(displayError(QAbstractSocket::SocketError)));
    ui->serverStatusLabel->setText(tr("接受连接"));
    tcpServer.close();
    qDebug()<<"这是结束1";
}

void Server::updateServerProgress()
{
    qDebug()<<"这是开始2";
    QDataStream in(tcpServerConnection);
    in.setVersion(QDataStream::Qt_4_0);
    if(bytesReceived <= sizeof(qint64)*2)
    {
        qDebug()<<"这是开始3";
        if((tcpServerConnection->bytesAvailable()>=sizeof(qint64)*2)&&(fileNameSize == 0))
        {
            in>>totalBytes>>fileNameSize;
            bytesReceived += sizeof(qint64)*2;
        }
        if((tcpServerConnection->bytesAvailable()>=fileNameSize)&&(fileNameSize != 0))
        {
            in>>fileName;
            ui->serverStatusLabel->setText(tr("接受文件 %1 ...").arg(fileName));

            bytesReceived += fileNameSize;
            localFile = new QFile(fileName);
            if(!localFile->open(QFile::WriteOnly))
            {
                qDebug()<<"server:open file error!";
                return;
            }
            else
            {
                return;
            }
        }
        qDebug()<<"这是结束3";
        qDebug()<<"这是开始4";
        if(bytesReceived<totalBytes)
        {
            qDebug()<<"这是开始5";
            bytesReceived += tcpServerConnection->bytesAvailable();
            inBlock = tcpServerConnection->readAll();
            qDebug()<<"这是开始6";
            localFile->write(inBlock);
            qDebug()<<"这是结束6";
            inBlock.resize(0);
            qDebug()<<"这是结束5";
        }
        ui->serverProgressBar->setMaximum(totalBytes);
        ui->serverProgressBar->setValue(bytesReceived);
        if(bytesReceived == totalBytes)
        {
            tcpServerConnection->close();
            localFile->close();
            ui->startButton->setEnabled(true);
            ui->serverStatusLabel->setText(tr("接受文件 %1 成功！").arg(fileName));
        }
        qDebug()<<"这是结束4";
    }
    qDebug()<<"这是结束2";

}

void Server::displayError(QAbstractSocket::SocketError socketError)
{
    qDebug()<<tcpServerConnection->errorString();
    tcpServerConnection->close();
    ui->serverProgressBar->reset();
    ui->serverStatusLabel->setText(tr("服务端就绪"));
    ui->startButton->setEnabled(true);
}


void Server::on_startButton_clicked()
{
    start();
}
