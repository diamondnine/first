#include "dlgregister.h"


DlgRegister::DlgRegister()
{
    this->setFixedSize(540,600);
    this->setStyleSheet("border-image:url(:/image/images/h.png)");

    label1 = new QLabel(this);         //少侠请注册
    label2 = new QLabel(this);         //侠名
    label3 = new QLabel(this);         //暗号
    label4 = new QLabel(this);         //巾眉
    label5 = new QLabel(this);         //生辰
    label6 = new QLabel(this);         //号码
    label7 = new QLabel(this);         //飞鸽
    label8 = new QLabel(this);         //画像
    label9 = new QLabel(this);         //同宿李翱家
    label10 = new QLabel(this);        //一言如旧识

    lineedit2 = new QLineEdit(this);    //侠名
    lineedit21 = new QLineEdit(this);
    lineedit3 = new QLineEdit(this);    //暗号
    lineedit31 = new QLineEdit(this);
    combobox4 = new QComboBox(this);    //巾眉
    lineedit41 = new QLineEdit(this);
    lineedit5 = new QLineEdit(this);    //生辰
    lineedit51 = new QLineEdit(this);
    lineedit6 = new QLineEdit(this);    //号码
    lineedit61 = new QLineEdit(this);
    lineedit7 = new QLineEdit(this);    //飞鸽
    lineedit71 = new QLineEdit(this);
    lineedit81 = new QLineEdit(this);

    pushbutton1 = new QPushButton(this);      //退出江湖
    pushbutton2 = new QPushButton(this);      //注册入簿
    pushbutton8 = new QPushButton(this);

    label1->setText(tr("少侠请注册"));
    label1->setGeometry(40,30,250,40);
    label1->setStyleSheet("border-image:None;font-size:50px;font-family:hakuyoxingshu7000");

    label2->setText(tr("侠名："));
    label2->setGeometry(40,140,80,30);
    label2->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    lineedit2->setGeometry(120,140,120,30);
    lineedit2->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:23px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit21->setGeometry(120,170,120,1);
    lineedit21->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label3->setText(tr("暗号："));
    label3->setGeometry(40,180,80,30);
    label3->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    lineedit3->setGeometry(120,180,120,30);
    lineedit3->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:20px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit31->setGeometry(120,210,120,1);
    lineedit31->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label4->setText(tr("巾眉："));
    label4->setGeometry(40,220,80,30);
    label4->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    combobox4->addItem(tr("    眉"));
    combobox4->addItem(tr("    巾"));
    combobox4->setGeometry(120,220,120,30);
    //combobox4->setFlat(true);
    combobox4->setStyleSheet("border-image:None;font-size:20px;font-family:hakuyoxingshu7000;border:none;background:rgba(255,255,255,0);font-weight:bold");
    lineedit41->setGeometry(120,250,120,1);
    lineedit41->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label5->setText(tr("生辰："));
    label5->setGeometry(40,260,80,30);
    label5->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    lineedit5->setGeometry(120,260,120,30);
    lineedit5->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:20px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit51->setGeometry(120,290,120,1);
    lineedit51->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label6->setText(tr("号码："));
    label6->setGeometry(40,300,80,30);
    label6->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    lineedit6->setGeometry(120,300,120,30);
    lineedit6->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:20px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit61->setGeometry(120,330,120,1);
    lineedit61->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label7->setText(tr("飞鸽："));
    label7->setGeometry(40,340,80,30);
    label7->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    lineedit7->setGeometry(120,340,120,30);
    lineedit7->setStyleSheet("border-image:None;border:None;background:rgba(255,255,255,0);font-size:20px;font-family:hakuyoxingshu7000;font-weight:bold");
    lineedit71->setGeometry(120,370,120,1);
    lineedit71->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label8->setText(tr("画像："));
    label8->setGeometry(40,380,80,30);
    label8->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");
    lineedit81->setGeometry(120,410,120,1);
    lineedit81->setStyleSheet("border-image:url(:/image/images/x.jpg)");

    label9->setText(tr("同\n宿\n李\n翱\n家"));
    label9->setGeometry(440,40,30,180);
    label9->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");

    label10->setText(tr("一\n言\n如\n旧\n识"));
    label10->setGeometry(470,40,30,180);
    label10->setStyleSheet("border-image:None;font-size:30px;font-family:hakuyoxingshu7000");

    pushbutton1->setText(tr("注册入簿"));
    pushbutton1->setGeometry(420,530,110,30);
    pushbutton1->setFlat(true);
    pushbutton1->setStyleSheet("border-image:None;font-size:25px;font-family:hakuyoxingshu7000;font-weight:bold;text-decoration:underline");


    pushbutton2->setText(tr("退出江湖"));
    pushbutton2->setGeometry(420,560,110,30);
    pushbutton2->setFlat(true);
    pushbutton2->setStyleSheet("border-image:None;font-size:25px;font-family:hakuyoxingshu7000;font-weight:bold;text-decoration:underline");

    pushbutton8->setText(tr(""));
    pushbutton8->setGeometry(120,380,120,30);
    pushbutton8->setFlat(true);
    pushbutton8->setStyleSheet("border-image:None;font-size:25px;font-family:hakuyoxingshu7000;font-weight:bold");
}

DlgRegister::~DlgRegister()
{

    delete label1;
    delete label2;
    delete label3;
    delete label4;
    delete label5;
    delete label6;
    delete label7;
    delete label8;
    delete label9;
    delete label10;

    delete lineedit2;
    delete lineedit21;
    delete lineedit3;
    delete lineedit31;
    delete combobox4;
    delete lineedit41;
    delete lineedit5;
    delete lineedit51;
    delete lineedit6;
    delete lineedit61;
    delete lineedit7;
    delete lineedit71;
    delete lineedit81;

    delete pushbutton1;
    delete pushbutton2;
    delete pushbutton8;
}

void DlgRegister::rgclearme()
{
    lineedit2->setText("");
    lineedit3->setText("");
    combobox4->setCurrentIndex(0);
    lineedit5->setText("");
    lineedit6->setText("");
    lineedit7->setText("");
    //这里应该还清理画像
}


QString DlgRegister::rggetms()
{
    QJsonObject obj;
    obj.insert("type",QJsonValue(QString("register")));
    obj.insert("name",QJsonValue(lineedit2->text()));
    obj.insert("passwd",QJsonValue(lineedit3->text()));
    obj.insert("sex",QJsonValue(combobox4->currentText()));
    obj.insert("birth",QJsonValue(lineedit5->text()));
    obj.insert("telephone",QJsonValue(lineedit6->text()));
    obj.insert("email",QJsonValue(lineedit7->text()));
    QJsonDocument jsonDoc(obj);//QJsonObject转QJsonDocument
    QString str(jsonDoc.toJson());//QJsonDocument转QString

    qDebug()<<str<<endl;
    qDebug()<<obj<<endl;

    return str;
}

void DlgRegister::rginformss()
{
    QString ms = this->rggetms();
    emit rginforms(ms);
}
