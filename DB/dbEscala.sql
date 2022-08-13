create database bdESCALA;
use bdESCALA;
if OBJECT_ID('usuarios') is not null
drop table usuarios;
create table usuarios (
nombreDeUsuario varchar (20),
primary key (nombreDeUsuario),
nombre varchar (20),
apellido varchar (20),
correoElectronico varchar (30),
dni varchar (8),
domicilio varchar (30),
idLocalidad int,
telefono int,
idRol int,
contraseña varchar(20)
)

alter table usuarios
add constraint FK_UsuariosLocalidad
foreign key (idLocalidad)
references localidades(idLocalidad)
on update cascade
on delete cascade;

alter table usuarios
add constraint FK_UsuariosRoles
foreign key (idRol)
references roles(idRol)
on update cascade
on delete cascade;

exec sp_helpconstraint usuarios;

if OBJECT_ID('localidades') is not null
drop table localidades;
create table localidades (
idLocalidad int identity,
primary key (idLocalidad),
nombreLocalidad varchar (20),
idProvincia int
)

alter table localidades
add constraint FK_LocalidadesProvincias
foreign key (idProvincia)
references provincias(idProvincia)
on update cascade
on delete cascade;

exec sp_helpconstraint localidades;

if OBJECT_ID('provincias') is not null
drop table provincias;
create table provincias (
idProvincia int identity,
primary key (idProvincia),
nombreProvincia varchar (20)
)

if OBJECT_ID('roles') is not null
drop table roles;
create table roles (
idRol int identity,
primary key (idRol),
tipoRol varchar (20)
)

if OBJECT_ID('sexo') is not null
drop table sexo;
create table sexo (
idSexo int identity,
primary key (idSexo),
nombreSexo varchar (15)
)

if OBJECT_ID('ventas') is not null
drop table ventas;
create table ventas (
nroVenta int identity,
primary key (nroVenta),
nombreDeUsuario varchar (20),
montoTotal int
)

alter table ventas
add constraint FK_VentasUsuario
foreign key (nombreDeUsuario)
references usuarios(nombreDeUsuario)
on update cascade
on delete cascade;

if OBJECT_ID('ventasProductos') is not null
drop table ventasProductos;
create table ventasProductos (
idVentasProductos int identity,
primary key (idVentasProductos),
codProducto int,
nroVenta int
)

alter table ventasProductos
add constraint FK_ventasProductos_Productos
foreign key (codProducto)
references productos(codProducto)
on update cascade
on delete cascade;


alter table ventasProductos
add constraint FK_ventasProductos_Ventas
foreign key (nroVenta)
references ventas(nroVenta)
on update cascade
on delete cascade;

exec sp_helpconstraint ventasProductos;

if OBJECT_ID('productos') is not null
drop table productos;
create table productos (
codProducto int identity,
primary key (codProducto),
nombreProducto varchar (30),
precio float,
stock int, 
comentarios varchar (300),
idSexo int
)