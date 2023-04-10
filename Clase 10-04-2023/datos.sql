-- SE ELIMINA LA DB SI ES QUE YA EXISTE
/*
dbName: epiz_33685870_DBweb1
dbUser: epiz_33685870
dbPass: 24KQBmv2BwpA0J
dbHost: sql207.epizy.com
dbPuerto: 3306
*/

drop schema if exixst 'DBweb1';

-- CREACION DE LA BASE DE DATOS

create schema if not exists 'DBweb1' default character set utf8 collate utf8_sapanish_ci;

-- sELECCIONAMOS LA DB PARA TRABAJAR SOBRE ELLA

USE 'DBweb1';

-- CREAR UNA TABLA

create table `persona`(

`numero` int(5) not null,
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar(8) not null,
`email` text not null,
`password` varchar(8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int(11) not null default '2'

) engine=Innodb default charset=utf8;

alter table `persona`
change column `numero` `numero` int(10) not null auto_increment,
add primary key(`numero`); 





