/********************************************************************************
** Form generated from reading UI file 'client.ui'
**
** Created by: Qt User Interface Compiler version 5.6.1
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_CLIENT_H
#define UI_CLIENT_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDialog>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QProgressBar>
#include <QtWidgets/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_Client
{
public:
    QPushButton *openButton;
    QLabel *label;
    QLabel *label_2;
    QLabel *clientStatusLabel;
    QPushButton *sendButton;
    QLineEdit *hostLineEdit;
    QLineEdit *portLineEdit;
    QProgressBar *clientProgressBar;

    void setupUi(QDialog *Client)
    {
        if (Client->objectName().isEmpty())
            Client->setObjectName(QStringLiteral("Client"));
        Client->resize(400, 300);
        openButton = new QPushButton(Client);
        openButton->setObjectName(QStringLiteral("openButton"));
        openButton->setGeometry(QRect(70, 230, 93, 28));
        label = new QLabel(Client);
        label->setObjectName(QStringLiteral("label"));
        label->setGeometry(QRect(100, 50, 72, 15));
        label_2 = new QLabel(Client);
        label_2->setObjectName(QStringLiteral("label_2"));
        label_2->setGeometry(QRect(100, 90, 72, 15));
        clientStatusLabel = new QLabel(Client);
        clientStatusLabel->setObjectName(QStringLiteral("clientStatusLabel"));
        clientStatusLabel->setGeometry(QRect(90, 140, 72, 15));
        sendButton = new QPushButton(Client);
        sendButton->setObjectName(QStringLiteral("sendButton"));
        sendButton->setGeometry(QRect(210, 230, 93, 28));
        hostLineEdit = new QLineEdit(Client);
        hostLineEdit->setObjectName(QStringLiteral("hostLineEdit"));
        hostLineEdit->setGeometry(QRect(180, 50, 113, 21));
        portLineEdit = new QLineEdit(Client);
        portLineEdit->setObjectName(QStringLiteral("portLineEdit"));
        portLineEdit->setGeometry(QRect(180, 90, 113, 21));
        clientProgressBar = new QProgressBar(Client);
        clientProgressBar->setObjectName(QStringLiteral("clientProgressBar"));
        clientProgressBar->setGeometry(QRect(180, 140, 118, 23));
        clientProgressBar->setValue(0);

        retranslateUi(Client);

        QMetaObject::connectSlotsByName(Client);
    } // setupUi

    void retranslateUi(QDialog *Client)
    {
        Client->setWindowTitle(QApplication::translate("Client", "Client", 0));
        openButton->setText(QApplication::translate("Client", "\346\211\223\345\274\200", 0));
        label->setText(QApplication::translate("Client", "\344\270\273\346\234\272\357\274\232", 0));
        label_2->setText(QApplication::translate("Client", "\347\253\257\345\217\243\357\274\232", 0));
        clientStatusLabel->setText(QApplication::translate("Client", "TextLabel", 0));
        sendButton->setText(QApplication::translate("Client", "\345\217\221\351\200\201", 0));
    } // retranslateUi

};

namespace Ui {
    class Client: public Ui_Client {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_CLIENT_H
