/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     6/4/2022 08:52:23                            */
/*==============================================================*/


drop table if exists AUDIOLIBRO;

drop table if exists HISTORIA;

drop table if exists MUSICA;

drop table if exists PERTENECE;

drop table if exists PLAYLIST;

drop table if exists USUARIOS;

/*==============================================================*/
/* Table: AUDIOLIBRO                                            */
/*==============================================================*/
create table AUDIOLIBRO
(
   ID_AL                int auto_increment not null,
   ID_U                 int,
   NOMBRE_AL            varchar(50) not null,
   AUTOR_AL             varchar(50) not null,
   NARRADOR_AL          varchar(50) not null,
   CATEGORIA_AL         varchar(50) not null,
   FECHAPUBLICACION_AL  date not null,
   ENLACE_AL            varchar(150) not null,
   primary key (ID_AL)
);

/*==============================================================*/
/* Table: HISTORIA                                              */
/*==============================================================*/
create table HISTORIA
(
   ID_H                 int auto_increment not null,
   ID_U                 int,
   TITULO_H             varchar(50) not null,
   DESCRIPCION_H        varchar(200) not null,
   ENLACE_H             varchar(150) not null,
   primary key (ID_H)
);

/*==============================================================*/
/* Table: MUSICA                                                */
/*==============================================================*/
create table MUSICA
(
   ID_M                 int auto_increment not null,
   NOMBRE_M             varchar(50) not null,
   AUTOR_M              varchar(50) not null,
   ENLACE_M             varchar(150) not null,
   CATEGORIA_M          varchar(50) not null,
   primary key (ID_M)
);

/*==============================================================*/
/* Table: PERTENECE                                             */
/*==============================================================*/
create table PERTENECE
(
   ID_M                 int not null,
   ID_P                 int not null,
   primary key (ID_M, ID_P)
);

/*==============================================================*/
/* Table: PLAYLIST                                              */
/*==============================================================*/
create table PLAYLIST
(
   ID_P                 int auto_increment not null,
   ID_U                 int,
   NOMBRE_P             varchar(50) not null,
   DESCRIPCION_P        varchar(200),
   primary key (ID_P)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   ID_U                 int auto_increment not null,
   NOMBRE_U             char(50) not null,
   CONTRASENIA_U        varchar(20) not null,
   CORREO_U             varchar(100),
   primary key (ID_U)
);

alter table AUDIOLIBRO add constraint FK_SUBE foreign key (ID_U)
      references USUARIOS (ID_U);

alter table HISTORIA add constraint FK_CUENTA foreign key (ID_U)
      references USUARIOS (ID_U);

alter table PERTENECE add constraint FK_PERTENECE foreign key (ID_M)
      references MUSICA (ID_M);

alter table PERTENECE add constraint FK_PERTENECE2 foreign key (ID_P)
      references PLAYLIST (ID_P);

alter table PLAYLIST add constraint FK_CREA foreign key (ID_U)
      references USUARIOS (ID_U);

--INSERTS
INSERT INTO `MUSICA` (`ID_M`, `NOMBRE_M`, `AUTOR_M`, `ENLACE_M`, `CATEGORIA_M`, `FECHAPUBLICACION_M`, `TIEMPO_M`) VALUES (NULL, 'Karma Chameleon', 'Culture Club', '1pUXNDF10qDBQfcor6v5cOHRnWiSkfX1h', 'POP', '1983-01-01', '3:59'), (NULL, 'Take On', 'a ha', '1ulKfSsOLIS5e9zTPl-xGAMMsuXU_Jb8s', 'POP', '1985-01-01', '4:04'), (NULL, 'Limon y Sal', 'Julieta Venegas', '1Mfg6nHYkEq1gTyfuodfSnWgOn0qz0ACy', 'POP', '2006-05-30', '3:36');
INSERT INTO `MUSICA` (`ID_M`, `NOMBRE_M`, `AUTOR_M`, `ENLACE_M`, `CATEGORIA_M`, `FECHAPUBLICACION_M`, `TIEMPO_M`) VALUES (NULL, 'Tiempo Al Tiempo', 'Kjarkas', '1j9RFlSHilvDqy2xpxRbmvDE17HeTrHu2', 'FOLKLORE', '1985-01-01', '4:29');
INSERT INTO `MUSICA` (`ID_M`, `NOMBRE_M`, `AUTOR_M`, `ENLACE_M`, `CATEGORIA_M`, `FECHAPUBLICACION_M`, `TIEMPO_M`) VALUES (NULL, 'Cheri Cheri Lady', 'Modern Talking', '1yip3_yOFFvjeOhHyr8j4TR4lkgeGOPG-', 'POP', '1998-01-01', '3:17');
INSERT INTO `MUSICA` (`ID_M`, `NOMBRE_M`, `AUTOR_M`, `ENLACE_M`, `CATEGORIA_M`, `FECHAPUBLICACION_M`, `TIEMPO_M`) VALUES (NULL, 'You’re My Heart, You’re My Soul', 'Modern Talking', '1RksUdqxDpnClX8kwjfRO1H07MauZeawR', 'POP', '1998-01-01', '3:53');
INSERT INTO `MUSICA` (`ID_M`, `NOMBRE_M`, `AUTOR_M`, `ENLACE_M`, `CATEGORIA_M`, `FECHAPUBLICACION_M`, `TIEMPO_M`) VALUES (NULL, 'Maneater', 'Daryl Hall y Hall & Oates', '1WM3lEqOW5WvnTcUrdJwiIYj6vzZKjq4m', 'POP', '1982-01-01', '4:25'), (NULL, 'Girls Just Want to Have Fun', 'Cyndi Lauper', '1ahtIe5AMITeL2ZjDPihx8zARXxodo_c3', 'POP', '1983-01-01', '3:55'), (NULL, 'YMCA', 'Village People', '1KdJtdKNqNSvIg2Nu9vWGBLSiqzGn8gXc', 'DISCO', '1978-01-01', '4:01');
INSERT INTO `MUSICA` (`ID_M`, `NOMBRE_M`, `AUTOR_M`, `ENLACE_M`, `CATEGORIA_M`, `FECHAPUBLICACION_M`, `TIEMPO_M`) VALUES (NULL, 'Viva Mi Patria Bolivia', 'Apolinar Camacho Orellana', '1p_diIxk_pLQnRBYtPslwpZaxoOPPcZnK', 'CUECA', '1993-01-01', '2:45');
