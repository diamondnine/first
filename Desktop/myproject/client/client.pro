#-------------------------------------------------
#
# Project created by QtCreator 2019-07-06T09:34:45
#
#-------------------------------------------------

QT       += core gui

greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = client
TEMPLATE = app


SOURCES += main.cpp\
        tcpclient.cpp \
    dlglogin.cpp \
    dlgregister.cpp \
    dlg.cpp

HEADERS  += tcpclient.h \
    dlglogin.h \
    dlgregister.h \
    dlg.h

FORMS    += tcpclient.ui

QT += network

RESOURCES += \
    myimages.qrc
