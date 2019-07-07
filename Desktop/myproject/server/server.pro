#-------------------------------------------------
#
# Project created by QtCreator 2019-07-06T09:46:46
#
#-------------------------------------------------

QT       += core gui

greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = server
TEMPLATE = app


SOURCES += main.cpp\
        tcpserver.cpp

HEADERS  += tcpserver.h

FORMS    += tcpserver.ui

QT += network

QT += sql widgets
