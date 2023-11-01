create database dbalumnos;
use dbalumnos;

create table alumnos(
    legajo int NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    sexo varchar(11),
    dni int(20),
    fecha_nacimiento date,
    telefono int(20),
    anio int(11),
    division int(11),
    primary key (legajo)
);

create table admins(
    legajo int NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    sexo varchar(11),
    dni int(20),
    fecha_nacimiento date,
    telefono int(20),
    user varchar(50),
    pass varchar(50),
    primary key (legajo)
);

create table passwords_admins(
    id int NOT NULL AUTO_INCREMENT,
    email varchar(200),
    token varchar(200),
    codigo int(11),
    primary key (id)
);

insert into admins (nombre, apellido, sexo, dni, fecha_nacimiento, telefono, user, pass) values ('Christian', 'Forte', 'Masculino', 46290790, '2004-12-30', 1131782406, 'christianet32', 1234);