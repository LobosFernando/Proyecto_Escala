from cProfile import label
from email.mime import base
from math import fabs
from tkinter import *
from tkinter import messagebox
from turtle import Screen, heading, onclick
from unicodedata import name
from xml.etree.ElementTree import fromstring
import pymysql 

def fun_ventana_login():
    form1=Tk()
    form1.title('Login')
    form1.geometry('925x500+300+200')
    form1.configure(bg="#fff")
    form1.resizable(False,False)

    def validar_admin(): #validar ususario login
        if (UsuarioL.get() == ""):
            messagebox.showinfo("Faltan Datos", "Ingrese Usuario")
            Usuario1.focus()
            return
        if (contraseñaL.get() == ""):
            messagebox.showinfo("Faltan Datos", "Ingrese Contraseña")
            contraseña1.focus()
            return
        basedatos = pymysql.connect(host="localhost", user="root", passwd="", db="sistemaproa") #creamos la conexion a la base de datos
        fcursor=basedatos.cursor() #objeto de acceso a datos que se puede utilizar para recorrer filas de una 

        fcursor.execute("select usuario from admin where usuario='"+ UsuarioL.get() +"'and contraseña='"+contraseñaL.get() +"' ")

        if fcursor.fetchall():
            messagebox.showinfo("inicio","bienvenido al sistema")
        else:
                messagebox.showinfo("Error","Usuario/Contraseña incorrecto")
                basedatos.close()        

    #######################    
    img = PhotoImage(file='login.jpeg')
    Label(form1,image=img,bg='white').place(x=50,y=50)

    frame=Frame(form1,width=350,height=350,bg="white")
    frame.place(x=480,y=70)

    heading=Label(frame,text='Iniciar Sesión', fg='#c70039',bg='white',font=('Microsoft TaHei UI Ligth',23,'bold'))
    heading.place(x=90,y=5)

    ################
     
    UsuarioL = StringVar()

    Usuario1 = Entry(frame,width=25,fg='black',border=0,bg='white',textvariable=UsuarioL,font=('Microsoft TaHei UI Ligth',11,))
    Usuario1.place(x=30,y=80)
    Usuario1.insert(0,'')
    Frame(frame,width=295,height=2,bg='black').place(x=25,y=107)
    ################
    
    contraseñaL = StringVar()
    contraseña1 = Entry(frame,width=25,fg='black',border=0,bg='white',font=('Microsoft TaHei UI Ligth',11,), textvariable=contraseñaL,show="*")
    contraseña1.place(x=30,y=150)
    contraseña1.insert(0,'')
    Frame(frame,width=295,height=2,bg='black').place(x=25,y=177)
    ################
   
    Button(frame,width=39,pady=7,text='Acceder',bg='#c70039',fg='white',border=0,command=validar_admin).place(x=35,y=204)
    label=Label(frame,text="¿No tienes Cuenta?",fg='black',bg='white',font=('Microsoft TaHei UI Ligth',9,))
    label.place(x=75,y=270)
    
    ################
    
    Crear_cuenta= Button(frame,width=6,text='Crear',border=0,bg='white',cursor='hand2',fg='#c70039')
    Crear_cuenta.place(x=215,y=270)

    ################


    mainloop()

fun_ventana_login()