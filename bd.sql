--CREA LA BASE DE DATOS---
CREATE DATABASE academia;

--empezando a usar  la base de datos academia
USE academia;
--Se crea la tabla notas en la base de datos academia
CREATE TABLE notas(
    nombre VARCHAR(30),
    identificacion INT(15),
    calificacion VARCHAR(15)
);
--Se crea la tabla profesores en la base de datos
CREATE TABLE profesores(
    nombre VARCHAR(30),
    curso VARCHAR(30),
    horario VARCHAR(15),
    telefono INT(9),
    observacion VARCHAR(50)
);

