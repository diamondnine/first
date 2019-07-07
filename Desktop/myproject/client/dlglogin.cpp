#include "dlglogin.h"
#include "tcpclient.h"

#include <qDebug>

#include <QJsonObject>
#include<QJsonDocument>

DlgLogin::DlgLogin()
{
    this->setFixedSize(1000,618);
    this->setStyleSheet("border-image:url(:/image/images/Login_bg.png)");

    label1 = new QLabel(this);      //欢迎登录
    label2 = new QLabel(this);      //侠名
    label3 = new QLabel(this);      //暗号
    label4 = new QLabel(this);      //竹破四方遥来客
    label5 = new QLabel(this);      //举杯不败古来人

    lineedit2 = new QLineEdit(this);         //侠名
    lineedit21 = new QLineEdit(this);
    lineedit3 = new QLineEdit(this);         //暗号
    lineedit31 = new QLineEdit(this);

    pushbutton6 = new QPushButton(this);           //我来了
    pushbutton7 = new QPushButton(this);           //再来一次
    pushbutton8 = new QPushButton(this);           //少侠请注册

    label1->setText(tr("欢迎登录"));
    label1->setGeometry(30,20,300,100);
    label1->setStyleSheet("border-image:None;font-size:70px;font-family:hakuyoxingshu7000");

    label2->setText(tr("侠名："));
    label2->setGeometry(50,280,70,30);
    label2->setStyleSheet("border-image:None;font-size:28px;font-family:hakuyoxingshu7000;font-weight:bold");

    label3->setText(tr("暗号："));
    label3->setGeometry(50,330,70,30);
    label3->setStyleSheet("border-image:None;font-size:28px;font-family:hakuyoxingshu7000;font-weight:bold");

    label4->setText(tr("竹\n破\n四\n方\n遥\n来\n客"));
    label4->setGeometry(780,130,35,350);
    label4->setStyleSheet("border-image:None;font-size:40px;font-family:hakuyoxingshu7000");

    label5->setText(tr("举\n杯\n不\n败\n古\n来\n人"));
    label5->setGeometry(820,130,35,350);
    label5->setStyleSheet("border-image:None;font-size:40px;font-family:hakuyoxingshu7000");

    lineedit2->setGeometry(130,280,130,30);
    lineedit2->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:25px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit21->setGeometry(130,310,130,1);
    lineedit21->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    lineedit3->setGeometry(130,330,130,30);
    lineedit3->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:25px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit31->setGeometry(130,360,130,1);
    lineedit31->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    pushbutton6->setText(tr("我来也"));
    pushbutton6->setGeometry(55,370,100,30);
    pushbutton6->setFlat(true);
    pushbutton6->setStyleSheet("border-image:None;font-size:23px;font-family:hakuyoxingshu7000;font-weight:bold;text-decoration:underline");

    pushbutton7->setText(tr("再来一次"));
    pushbutton7->setGeometry(160,370,100,30);
    pushbutton7->setFlat(true);
    pushbutton7->setStyleSheet("border-image:None;font-size:23px;font-family:hakuyoxingshu7000;font-weight:bold;text-decoration:underline");

    pushbutton8->setText(tr("少侠请注册"));
    pushbutton8->setGeometry(810,560,180,50);
    pushbutton8->setFlat(true);
    pushbutton8->setStyleSheet("border-image:None;font-size:35px;font-family:hakuyoxingshu7000;font-weight:bold;text-decoration:underline");

}

DlgLogin::~DlgLogin()
{
    delete label1;
    delete label2;
    delete label3;
    delete label4;
    delete label5;

    delete lineedit2;
    delete lineedit21;
    delete lineedit3;
    delete lineedit31;

    delete pushbutton6;
    delete pushbutton7;
    delete pushbutton8;
}

void DlgLogin::lgclearme()
{
    this->lineedit2->setText("");
    this->lineedit3->setText("");
}

QString DlgLogin::lggetms()
{
    QJsonObject obj;

    obj.insert("type",QJsonValue(QString("login")));
    obj.insert("name",QJsonValue(lineedit2->text()));
    obj.insert("passwd",QJsonValue(lineedit3->text()));

    QJsonDocument jsonDoc(obj);//QJsonObject转QJsonDocument
    QString str(jsonDoc.toJson());//QJsonDocument转QString


    return str;
}

void DlgLogin::lginformss()
{
    QString ms= this->lggetms();
    emit lginforms(ms);
}
