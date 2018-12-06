create database instituto;
use instituto;

SET SQL_SAFE_UPDATES = 0;
set foreign_key_checks=0;

create table alumnos (rut_alum varchar(13) primary key, id_nota int, nom_alum text, id_carre int);

create table profesores (rut_prof varchar(13) primary key, nom_prof text, id_asig int, id_carre int);

create table notas (id_nota int primary key, id_carre int, id_asig int, nota1 int, nota2 int, nota3 int, nota4 int);

create table carreras (id_carre int primary key, nom_carre text, jefe_carre text, jornada text, descripcion text);

create table asignaturas (id_asig int primary key, nom_asig text, id_carre int, rut_prof varchar(13));

alter table alumnos 
add foreign key(id_nota) references notas(id_nota),
add foreign key(id_carre) references carreras(id_carre);

alter table profesores 
add foreign key(id_asig) references asignaturas(id_asig),
add foreign key(id_carre) references carreras(id_carre);

alter table notas 
add foreign key(id_carre) references carreras(id_carre),
add foreign key(id_asig) references asignaturas(id_asig);

alter table asignaturas 
add foreign key(id_carre) references carreras(id_carre),
add foreign key(rut_prof) references profesores(rut_prof);

insert into carreras values (11,'analista','matias','diurna');
insert into notas values (1,'analista programador', 'programacion', 4,5,6,7);

insert into alumnos values(12345,1,'tomas',11);

select * from alumnos

select nom_alum, nota1, nota2, nota3, nota4 from alumnos, notas
where alumnos.id_nota = notas.id_nota and notas.id_nota = 1