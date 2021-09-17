import sys
import os
import pyautogui,time
from PySide2 import QtCore, QtWidgets, QtGui
from PySide2.QtWidgets import QDialog
from untitled2 import *
class Mainspam(QtWidgets.QWidget):
    c=0
    def __init__(self,parent=None):
        QtWidgets.QWidget.__init__(self,parent)
        self.ui = Ui_spam()
        self.ui.setupUi(self)
        QtCore.QObject.connect(self.ui.busca,QtCore.SIGNAL('clicked()'),self.mostrarmensaje)
        QtCore.QObject.connect(self.ui.busca,QtCore.SIGNAL('clicked()'),self.get_text)
    def mostrarmensaje(self):
        self.ui.contador.setText("Tienes 5 seg")
    def get_text(self):
        file_path=QFileDialog.getOpenFileName(self,'Open Text File',r"C:\\users","Text Files (*.txt)")
        v=""
        v=file_path[0]
        with open(v,"r")as f:
            time.sleep(6)
            for word in f:
                    pyautogui.typewrite(word)
                    pyautogui.press("enter")

if __name__=="__main__":
    app=QtWidgets.QApplication(sys.argv)
    myapp=Mainspam()
    myapp.show()
    sys.exit(app.exec_())
    time.sleep(5)
