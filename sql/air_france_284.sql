drop database if exists air_france_284; 
create database air_france_284; 
use air_france_284; 

create table pilote (
	idpilote int(3) not null auto_increment, 
	nom varchar (50),
	prenom varchar (50),
	email varchar (50),
    mdp varchar (50),
	bip varchar (50),
	statut varchar(50),
	primary key (idpilote)
);
create table avion (
	idavion int(3) not null auto_increment, 
	designation varchar (50),
	constructeur varchar (50),
	nbplaces int (3),
	primary key (idavion)
);
create table vol (
	idvol int(3) not null auto_increment, 
	designation varchar (50),
	datevol date,
	heurevol time,
	idpilote1 int(3) not null, 
	idpilote2 int(3) not null,
	idavion int(3) not null,
	primary key (idvol), 
	foreign key(idpilote1) references pilote(idpilote), 
	foreign key(idpilote2) references pilote(idpilote),
	foreign key(idavion) references avion(idavion)
);

