DROP DATABASE IF EXISTS clash_royale;
CREATE DATABASE clash_royale;
use clash_royale;

create table tipoUsuario(
  idTipoUsuario int not null auto_increment primary key,
  nombreTipoUsuario varchar(35)
);

create table usuario(
  idUsuario int not null auto_increment primary key,
  idTipoUsuario int not null,
  usuario varchar(20) not null,
  contrasena varchar(20) not null,
  estado bool not null,
  FOREIGN KEY (idTipoUsuario) REFERENCES tipoUsuario(idTipoUsuario) ON UPDATE CASCADE ON DELETE CASCADE
);

create table participantes(
  idParticipantes int not null auto_increment primary key,
  nombre varchar(40) not null,
  apellido varchar(40) not null,
  ci varchar(40) not null,
  nick_royale varchar(40) not null,
  id_royale varchar(40) not null,
  estado bool not null,
  habilitado bool not null,
  foto varchar(250) null
);
