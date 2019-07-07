/****************************************************************************
** Meta object code from reading C++ file 'dlg.h'
**
** Created by: The Qt Meta Object Compiler version 67 (Qt 5.6.1)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "../../client/dlg.h"
#include <QtCore/qbytearray.h>
#include <QtCore/qmetatype.h>
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'dlg.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 67
#error "This file was generated using the moc from 5.6.1. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
struct qt_meta_stringdata_Dlg_t {
    QByteArrayData data[10];
    char stringdata0[61];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_Dlg_t, stringdata0) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_Dlg_t qt_meta_stringdata_Dlg = {
    {
QT_MOC_LITERAL(0, 0, 3), // "Dlg"
QT_MOC_LITERAL(1, 4, 4), // "mlgf"
QT_MOC_LITERAL(2, 9, 0), // ""
QT_MOC_LITERAL(3, 10, 4), // "mrgs"
QT_MOC_LITERAL(4, 15, 4), // "mrgf"
QT_MOC_LITERAL(5, 20, 7), // "dlgshow"
QT_MOC_LITERAL(6, 28, 5), // "mjson"
QT_MOC_LITERAL(7, 34, 6), // "loginf"
QT_MOC_LITERAL(8, 41, 9), // "registers"
QT_MOC_LITERAL(9, 51, 9) // "registerf"

    },
    "Dlg\0mlgf\0\0mrgs\0mrgf\0dlgshow\0mjson\0"
    "loginf\0registers\0registerf"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_Dlg[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
       7,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       3,       // signalCount

 // signals: name, argc, parameters, tag, flags
       1,    0,   49,    2, 0x06 /* Public */,
       3,    0,   50,    2, 0x06 /* Public */,
       4,    0,   51,    2, 0x06 /* Public */,

 // slots: name, argc, parameters, tag, flags
       5,    1,   52,    2, 0x0a /* Public */,
       7,    0,   55,    2, 0x0a /* Public */,
       8,    0,   56,    2, 0x0a /* Public */,
       9,    0,   57,    2, 0x0a /* Public */,

 // signals: parameters
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,

 // slots: parameters
    QMetaType::Void, QMetaType::QJsonObject,    6,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,

       0        // eod
};

void Dlg::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        Dlg *_t = static_cast<Dlg *>(_o);
        Q_UNUSED(_t)
        switch (_id) {
        case 0: _t->mlgf(); break;
        case 1: _t->mrgs(); break;
        case 2: _t->mrgf(); break;
        case 3: _t->dlgshow((*reinterpret_cast< QJsonObject(*)>(_a[1]))); break;
        case 4: _t->loginf(); break;
        case 5: _t->registers(); break;
        case 6: _t->registerf(); break;
        default: ;
        }
    } else if (_c == QMetaObject::IndexOfMethod) {
        int *result = reinterpret_cast<int *>(_a[0]);
        void **func = reinterpret_cast<void **>(_a[1]);
        {
            typedef void (Dlg::*_t)();
            if (*reinterpret_cast<_t *>(func) == static_cast<_t>(&Dlg::mlgf)) {
                *result = 0;
                return;
            }
        }
        {
            typedef void (Dlg::*_t)();
            if (*reinterpret_cast<_t *>(func) == static_cast<_t>(&Dlg::mrgs)) {
                *result = 1;
                return;
            }
        }
        {
            typedef void (Dlg::*_t)();
            if (*reinterpret_cast<_t *>(func) == static_cast<_t>(&Dlg::mrgf)) {
                *result = 2;
                return;
            }
        }
    }
}

const QMetaObject Dlg::staticMetaObject = {
    { &QDialog::staticMetaObject, qt_meta_stringdata_Dlg.data,
      qt_meta_data_Dlg,  qt_static_metacall, Q_NULLPTR, Q_NULLPTR}
};


const QMetaObject *Dlg::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *Dlg::qt_metacast(const char *_clname)
{
    if (!_clname) return Q_NULLPTR;
    if (!strcmp(_clname, qt_meta_stringdata_Dlg.stringdata0))
        return static_cast<void*>(const_cast< Dlg*>(this));
    return QDialog::qt_metacast(_clname);
}

int Dlg::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QDialog::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 7)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 7;
    } else if (_c == QMetaObject::RegisterMethodArgumentMetaType) {
        if (_id < 7)
            *reinterpret_cast<int*>(_a[0]) = -1;
        _id -= 7;
    }
    return _id;
}

// SIGNAL 0
void Dlg::mlgf()
{
    QMetaObject::activate(this, &staticMetaObject, 0, Q_NULLPTR);
}

// SIGNAL 1
void Dlg::mrgs()
{
    QMetaObject::activate(this, &staticMetaObject, 1, Q_NULLPTR);
}

// SIGNAL 2
void Dlg::mrgf()
{
    QMetaObject::activate(this, &staticMetaObject, 2, Q_NULLPTR);
}
QT_END_MOC_NAMESPACE
