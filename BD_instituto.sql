create database instituto;
use instituto;

SET SQL_SAFE_UPDATES = 0;
set foreign_key_checks=0;
SHOW ENGINE INNODB STATUS;

create table alumnos (rut_alum varchar(13) primary key, id_nota int, nom_alum text, nom_carre text, descripcion varchar(500));

create table profesores (rut_prof varchar(13) primary key, nom_prof text, nom_asig text, nom_carre text);

create table notas (id_nota int primary key, nom_carre text, nom_asig text, nota1 int, nota2 int, nota3 int, nota4 int);

create table carreras (id_carre int auto_increment primary key, nom_carre text, jefe_carre text, jornada text);

create table asignaturas (id_asig int auto_increment primary key, nom_asig text, nom_carre text, nom_prof text);

alter table alumnos 
add foreign key(id_nota) references notas(id_nota);

insert into notas values (1,'analista programador', 'programacion', 4,5,6,7);
insert into alumnos values(12345,1,'tomas','analista programador')


select nom_alum, nota1, nota2, nota3, nota4 from alumnos, notas
where alumnos.id_nota = notas.id_nota and notas.id_nota = 1