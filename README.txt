nombre de la BD simulacro 

create table asistente(
dni char(8) primary key,
nombres varchar(50) not null,
apellidomaterno varchar(50) not null,
escuela varchar(80) not null,
universidad varchar(80) not null,
href varchar(80)
);