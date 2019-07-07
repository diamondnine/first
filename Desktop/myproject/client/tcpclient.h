#ifndef TCPCLIENT_H
#define TCPCLIENT_H

#include <QDialog>

#include <QTcpSocket>
#include <QJsonObject>

class TcpClient : public QDialog
{
    Q_OBJECT

public:
    explicit TcpClient();
    ~TcpClient();

public:
    QTcpSocket* tcpsocket;
    quint16 blocksize;

public:
    QJsonObject str2json(QString str);

public slots:
    void acceptanswer();
    void sendms(QString ms);

public:
    QMetaObject::Connection dis;

signals:
    void res(QJsonObject obj);

};

#endif // TCPCLIENT_H
