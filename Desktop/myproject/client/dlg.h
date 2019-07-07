#ifndef DLG_H
#define DLG_H

#include <QJsonObject>
#include <QDialog>
#include <QLabel>
#include <QPushButton>

class Dlg : public QDialog
{
    Q_OBJECT

public:
    Dlg();
    ~Dlg();

public slots:
    void dlgshow(QJsonObject mjson);

public:
    QLabel* label1;
    QPushButton* pushbutton1;


signals:
    void mlgf();
    void mrgs();
    void mrgf();


public slots:
    void loginf();
    void registers();
    void registerf();
};

#endif // DLG_H
