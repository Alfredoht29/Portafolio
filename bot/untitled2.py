# -*- coding: utf-8 -*-

################################################################################
## Form generated from reading UI file 'untitled2.ui'
##
## Created by: Qt User Interface Compiler version 5.15.2
##
## WARNING! All changes made in this file will be lost when recompiling UI file!
################################################################################

from PySide2.QtCore import *
from PySide2.QtGui import *
from PySide2.QtWidgets import *

import imagen_rc

class Ui_spam(object):
    def setupUi(self, spam):
        if not spam.objectName():
            spam.setObjectName(u"spam")
        spam.resize(400, 300)
        spam.setStyleSheet(u"background-color: rgb(81, 203, 32);")
        self.label = QLabel(spam)
        self.label.setObjectName(u"label")
        self.label.setGeometry(QRect(30, 60, 101, 151))
        self.label.setStyleSheet(u"background-image: url(:/bob/bob.png);")
        self.label.setPixmap(QPixmap(u":/bob/bob.png"))
        self.label.setScaledContents(True)
        self.busca = QPushButton(spam)
        self.busca.setObjectName(u"busca")
        self.busca.setGeometry(QRect(190, 130, 171, 23))
        font = QFont()
        font.setFamily(u"Verdana")
        self.busca.setFont(font)
        self.busca.setStyleSheet(u"background-color: rgb(81, 203, 32);")
        self.label_2 = QLabel(spam)
        self.label_2.setObjectName(u"label_2")
        self.label_2.setGeometry(QRect(230, 70, 91, 41))
        palette = QPalette()
        brush = QBrush(QColor(58, 86, 131, 255))
        brush.setStyle(Qt.SolidPattern)
        palette.setBrush(QPalette.Active, QPalette.Button, brush)
        palette.setBrush(QPalette.Active, QPalette.Base, brush)
        palette.setBrush(QPalette.Active, QPalette.Window, brush)
        palette.setBrush(QPalette.Inactive, QPalette.Button, brush)
        palette.setBrush(QPalette.Inactive, QPalette.Base, brush)
        palette.setBrush(QPalette.Inactive, QPalette.Window, brush)
        palette.setBrush(QPalette.Disabled, QPalette.Button, brush)
        palette.setBrush(QPalette.Disabled, QPalette.Base, brush)
        palette.setBrush(QPalette.Disabled, QPalette.Window, brush)
        self.label_2.setPalette(palette)
        font1 = QFont()
        font1.setFamily(u"Verdana")
        font1.setPointSize(12)
        self.label_2.setFont(font1)
        self.label_2.setStyleSheet(u"background-color: rgb(58, 86, 131);")
        self.label_2.setTextFormat(Qt.RichText)
        self.label_3 = QLabel(spam)
        self.label_3.setObjectName(u"label_3")
        self.label_3.setGeometry(QRect(170, 70, 201, 131))
        self.label_3.setStyleSheet(u"background-color: rgb(58, 86, 131);")
        self.contador = QLabel(spam)
        self.contador.setObjectName(u"contador")
        self.contador.setGeometry(QRect(220, 180, 121, 21))
        font2 = QFont()
        font2.setPointSize(11)
        self.contador.setFont(font2)
        self.contador.setStyleSheet(u"background-color: rgb(58, 86, 131);")
        self.contador.setTextFormat(Qt.AutoText)
        self.label_4 = QLabel(spam)
        self.label_4.setObjectName(u"label_4")
        self.label_4.setGeometry(QRect(10, 270, 121, 16))
        self.label_4.setFont(font)
        self.label_3.raise_()
        self.label.raise_()
        self.busca.raise_()
        self.label_2.raise_()
        self.contador.raise_()
        self.label_4.raise_()

        self.retranslateUi(spam)

        QMetaObject.connectSlotsByName(spam)
    # setupUi

    def retranslateUi(self, spam):
        spam.setWindowTitle(QCoreApplication.translate("spam", u"Spambot", None))
        self.label.setText("")
        self.busca.setText(QCoreApplication.translate("spam", u"Busca un archivo de texto", None))
        self.label_2.setText(QCoreApplication.translate("spam", u"<html><head/><body><p><span style=\" color:#639a88;\">SPAM BOT</span></p></body></html>", None))
        self.label_3.setText("")
        self.contador.setText("")
        self.label_4.setText(QCoreApplication.translate("spam", u"Por: Emilio P\u00e9rez", None))
    # retranslateUi
