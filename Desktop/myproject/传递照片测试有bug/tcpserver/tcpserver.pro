#-------------------------------------------------
#
# Project created by QtCreator 2019-07-07T16:43:06
#
#-------------------------------------------------

QT       += core gui

greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = tcpserver
TEMPLATE = app


SOURCES += main.cpp\
        server.cpp

HEADERS  += server.h

FORMS    += server.ui


QT += network
