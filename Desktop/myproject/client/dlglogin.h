#ifndef DLGLOGIN_H
#define DLGLOGIN_H

#include <QDialog>
#include <QLabel>
#include <QLineEdit>
#include <QPushButton>
#include <QFileDialog>
#include <QWidget>

class DlgLogin : public QDialog
{
    Q_OBJECT

public:
    QLabel* label1;       //欢迎登录
    QLabel* label2;       //侠名
    QLabel* label3 ;      //暗号
    QLabel* label4;      //竹破四方遥来客
    QLabel* label5;     //举杯不败古来人

    QLineEdit* lineedit2;         //侠名
    QLineEdit* lineedit21;
    QLineEdit* lineedit3;         //暗号
    QLineEdit* lineedit31;

    QPushButton* pushbutton6;           //我来了
    QPushButton* pushbutton7;           //再来一次
    QPushButton* pushbutton8;           //少侠请注册

public:
    explicit DlgLogin();
    ~DlgLogin();

signals:
    void lginforms(QString obj);

public slots:
    void lgclearme();
    void lginformss();
public:
    QString lggetms();
    //void informss();

};

#endif // DLGLOGIN_H
