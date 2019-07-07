#ifndef DLGREGISTER_H
#define DLGREGISTER_H

#include <QDialog>
#include <QLabel>
#include <QLineEdit>
#include <QPushButton>
#include <QFileDialog>
#include <QCombobox>
#include <QWidget>
#include <QJsonObject>
#include <QJsonDocument>
#include <QDebug>

class DlgRegister : public QDialog
{
    Q_OBJECT
public:
    QLabel* label1;         //少侠请注册
    QLabel* label2;         //侠名
    QLabel* label3;         //暗号
    QLabel* label4;         //巾眉
    QLabel* label5;         //生辰
    QLabel* label6;         //号码
    QLabel* label7;         //飞鸽
    QLabel* label8;         //画像
    QLabel* label9;         //同宿李翱家
    QLabel* label10;        //一言如旧识

    QLineEdit* lineedit2;   //侠名
    QLineEdit* lineedit21;
    QLineEdit* lineedit3;   //暗号
    QLineEdit* lineedit31;
    QComboBox* combobox4;   //巾眉
    QLineEdit* lineedit41;
    QLineEdit* lineedit5;   //生辰
    QLineEdit* lineedit51;
    QLineEdit* lineedit6;   //号码
    QLineEdit* lineedit61;
    QLineEdit* lineedit7;   //飞鸽
    QLineEdit* lineedit71;
    QLineEdit* lineedit81;

    QPushButton* pushbutton1;      //退出江湖
    QPushButton* pushbutton2;      //注册入簿
    QPushButton* pushbutton8;      //上传画像

public:
    explicit DlgRegister();
    ~DlgRegister();


signals:
    void rginforms(QString obj);

public slots:
    void rgclearme();
    void rginformss();
public:
    QString rggetms();


};

#endif // DLGREGISTER_H
