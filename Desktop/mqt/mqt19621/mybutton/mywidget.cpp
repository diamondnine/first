#include "mywidget.h"
#include "ui_mywidget.h"
#include <QDebug>
#include <QMenu>

MyWidget::MyWidget(QWidget *parent) :
    QWidget(parent),
    ui(new Ui::MyWidget)
{
    ui->setupUi(this);
    ui->pushBtnl1->setText(tr("&nihao"));
    ui->pushBtnl2->setText(tr("帮助(&H)"));
    ui->pushBtnl2->setIcon(QIcon("C:\\Users\\Administrator\\Desktop\\mqt\\mybutton\\images\\bg.jpg"));
    ui->pushBtnl3->setText(tr("z&oom"));
    QMenu* menu = new QMenu(this);
    menu->addAction(QIcon(""),tr("放大"));
    ui->pushBtnl3->setMenu(menu);
}

MyWidget::~MyWidget()
{
    delete ui;
}

void MyWidget::on_pushBtnl_toggled(bool checked)
{
    qDebug()<<tr("按钮是否按下:")<<checked;
}
