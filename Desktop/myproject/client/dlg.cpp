#include "dlg.h"
#include <QDebug>

Dlg::Dlg()
{
    this->setFixedSize(700,600);

    label1 = new QLabel(this);
    pushbutton1 = new QPushButton(this);

    label1->setText("");
    label1->setGeometry(200,240,300,80);
    label1->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000;font-weight:bold");

    pushbutton1->setText(tr("确认"));
    pushbutton1->setGeometry(600,540,80,40);
    pushbutton1->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000;font-weight:bold");
}

Dlg::~Dlg()
{
    delete label1;
    delete pushbutton1;
}

void Dlg::dlgshow(QJsonObject mjson)
{
    if(mjson["type"].toString() == "login")
    {
        if(mjson["result"].toString() == "True")
        {
            label1->setText("登录成功");
            label1->setGeometry(300,240,300,80);
        }
        else
        {
            label1->setText(mjson["reason"].toString());
            connect(this->pushbutton1,SIGNAL(clicked()),this,SLOT(loginf()));
        }
    }
    else if(mjson["type"] == "register")
    {
        if(mjson["result"].toString() == "True")
        {
            label1->setText("注册成功");
            connect(this->pushbutton1,SIGNAL(clicked()),this,SLOT(registers()));
        }
        else
        {
            label1->setText(mjson["reason"].toString());
            connect(this->pushbutton1,SIGNAL(clicked()),this,SLOT(registerf()));
        }
    }
    this->show();
}

void Dlg::loginf()
{
    qDebug()<<"why";
    emit mlgf();
}
void Dlg::registers()
{
    emit mrgs();
}
void Dlg::registerf()
{
    emit mrgf();
}
