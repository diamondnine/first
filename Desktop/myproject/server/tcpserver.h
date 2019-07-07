#ifndef SERVER_H
#define SERVER_H

#include <QDialog>
#include <QAbstractSocket>

#include <QLineEdit>

#include <QJsonObject>
#include <QJsonDocument>
#include <QSqlDatabase>
#include <QSqlQuery>
#include <QString>


class QTcpServer;
class QTcpSocket;

class TcpServer : public QDialog
{
    Q_OBJECT

public:
    explicit TcpServer();
    ~TcpServer();

public slots:
    //void displayError(QAbstractSocket::SocketError);

public:
    QTcpServer* tcpserver;
    QTcpSocket* tcpsocket;

public slots:
    void links();
    void answerms();

public:
    quint16 blocksize;

public:
    QLineEdit* l;
    QJsonObject str2json(QString str);
    QString json2str(QJsonObject json);
    QJsonObject comp(QJsonObject ask);
};

#endif // SERVER_H
