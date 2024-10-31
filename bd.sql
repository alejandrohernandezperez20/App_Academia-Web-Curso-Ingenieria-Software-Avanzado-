--CREA LA BASE DE DATOS---
CREATE DATABASE academia;

--empezando a usar  la base de datos academia
USE academia;
--Se crea la tabla nontas en la base de datos academia
CREATE TABLE notas(
    nombre VARCHAR(30),
    identificacion INT(15),
    calificacion VARCHAR(15)
);
