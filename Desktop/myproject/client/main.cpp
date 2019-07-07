#include "tcpclient.h"
#include "dlglogin.h"
#include "dlgregister.h"
#include "dlg.h"
#include <QApplication>

int main(int argc, char *argv[])
{
    QApplication a(argc, argv);

    DlgLogin* dl = new DlgLogin();
    TcpClient* c = new TcpClient();
    DlgRegister* dr = new DlgRegister();
    Dlg* dlg = new Dlg();

    dl->show();

    QObject::connect(dl->pushbutton7,SIGNAL(clicked()),dl,SLOT(lgclearme()));
    QObject::connect(dl->pushbutton6,SIGNAL(clicked()),dl,SLOT(lginformss()));
    QObject::connect(dl->pushbutton6,SIGNAL(clicked()),dl,SLOT(hide()));

    QObject::connect(dl,SIGNAL(lginforms(QString)),c,SLOT(sendms(QString)));

    QObject::connect(dl->pushbutton8,SIGNAL(clicked()),dl,SLOT(hide()));
    QObject::connect(dl->pushbutton8,SIGNAL(clicked()),dr,SLOT(show()));

    QObject::connect(dr->pushbutton2,SIGNAL(clicked()),dl,SLOT(show()));
    QObject::connect(dr->pushbutton2,SIGNAL(clicked()),dr,SLOT(hide()));

    QObject::connect(dr->pushbutton1,SIGNAL(clicked()),dr,SLOT(rginformss()));
    QObject::connect(dr->pushbutton1,SIGNAL(clicked()),dr,SLOT(hide()));
    QObject::connect(dr,SIGNAL(rginforms(QString)),c,SLOT(sendms(QString)));

    QObject::connect(c,SIGNAL(res(QJsonObject)),dlg,SLOT(dlgshow(QJsonObject)));

    QObject::connect(dlg,SIGNAL(mlgf()),dl,SLOT(show()));
    QObject::connect(dlg,SIGNAL(mlgf()),dlg,SLOT(hide()));
    QObject::connect(dlg,SIGNAL(mrgs()),dl,SLOT(show()));
    QObject::connect(dlg,SIGNAL(mrgs()),dlg,SLOT(hide()));
    QObject::connect(dlg,SIGNAL(mrgf()),dr,SLOT(show()));
    QObject::connect(dlg,SIGNAL(mrgf()),dlg,SLOT(hide()));



    //connect(dl,SIGNAL(informs(QString,QString)),c,);
    return a.exec();
}
