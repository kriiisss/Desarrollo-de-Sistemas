create database dbalumnos;
use dbalumnos;

create table alumnos(
    legajo int NOT NULL AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    sexo varchar(11),
    dni int(20),
    fecha_nacimiento date,
    email varchar(200),
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
    email varchar(200),
    telefono int(20),
    user varchar(50),
    pass varchar(50),
    primary key (legajo)
);

insert into admins (nombre, apellido, sexo, dni, fecha_nacimiento, email, telefono, user, pass) values ('Christian', 'Forte', 'Masculino', 46290790, '2004-12-30', 'christian.forteet32@gmail.com', 1131782406, 'christianet32', 1234);