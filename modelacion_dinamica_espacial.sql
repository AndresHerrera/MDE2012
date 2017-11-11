/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     18/04/2012 05:27:56 p.m.                     */
/*==============================================================*/


drop index ind_clima_10_dias;

drop index ind_clima_dia;

drop index ind_fechas;

drop index ind_muestreo;

drop index ind_geo_puntos_muestreo;

drop index ind_puntos_muestreo;

drop table clima_10_dias;

drop table clima_dia;

drop table fechas;

drop table muestreo;

drop table puntos_muestreo;

/*==============================================================*/
/* Table: clima_10_dias                                         */
/*==============================================================*/
create table clima_10_dias (
   gid                  integer              not null,
   id_fecha             integer              not null,
   tmp_mnma             double               null,
   tmp_mdia             double               null,
   tmp_mxma             double               null,
   hmd_rel_mn           double               null,
   hmd_rel_md           double               null,
   hmd_rel_mx           double               null,
   brllo_slar           double               null,
   rdcion_sla           double               null,
   etp                  double               null,
   prcptcion            double               null,
   evp_clclad           double               null,
   constraint PK_CLIMA_10_DIAS primary key (id_fecha)
);

comment on table clima_10_dias is
'Tabla de datos que contiene la información del clima de los últimos 10 días de la fecha de muestreo de la plaga.';

comment on column clima_10_dias.id_fecha is
'Identificador de la fecha de muestreo de la plaga.';

comment on column clima_10_dias.tmp_mnma is
'Temperatura Mínima.';

comment on column clima_10_dias.tmp_mdia is
'Temperatura Media.';

comment on column clima_10_dias.tmp_mxma is
'Temperatura Máxima.';

comment on column clima_10_dias.hmd_rel_mn is
'Humedad Relativa Mínima.';

comment on column clima_10_dias.hmd_rel_md is
'Humedad Relativa Media.';

comment on column clima_10_dias.hmd_rel_mx is
'Humedad Relativa Máxima.';

comment on column clima_10_dias.brllo_slar is
'Brillo Solar.';

comment on column clima_10_dias.rdcion_sla is
'Radiacción Solar.';

comment on column clima_10_dias.etp is
'Evotranspiración.';

comment on column clima_10_dias.prcptcion is
'Precipitación.';

comment on column clima_10_dias.evp_clclad is
'Evaporación Calculada.';

/*==============================================================*/
/* Index: ind_clima_10_dias                                     */
/*==============================================================*/
create unique index ind_clima_10_dias on clima_10_dias using btree (
id_fecha
);

/*==============================================================*/
/* Table: clima_dia                                             */
/*==============================================================*/
create table clima_dia (
   gid                  integer              not null,
   id_fecha             integer              not null,
   tmp_mnma             double               null,
   tmp_mdia             double               null,
   tmp_mxma             double               null,
   hmd_rel_mn           double               null,
   hmd_rel_md           double               null,
   hmd_rel_mx           double               null,
   brllo_slar           double               null,
   rdcion_sla           double               null,
   etp                  double               null,
   prcptcion            double               null,
   evp_clclad           double               null,
   constraint PK_CLIMA_DIA primary key (id_fecha)
);

comment on table clima_dia is
'Tabla de datos que contiene la información histórica del clima de las fechas de muestreo de la plaga. ';

comment on column clima_dia.id_fecha is
'Identificador de la fecha de muestreo de la plaga.';

comment on column clima_dia.tmp_mnma is
'Temperatura Mínima.';

comment on column clima_dia.tmp_mdia is
'Temperatura Media.';

comment on column clima_dia.tmp_mxma is
'Temperatura Máxima.';

comment on column clima_dia.hmd_rel_mn is
'Humedad Relativa Mínima.';

comment on column clima_dia.hmd_rel_md is
'Humedad Relativa Media.';

comment on column clima_dia.hmd_rel_mx is
'Humedad Relativa Máxima.';

comment on column clima_dia.brllo_slar is
'Brillo Solar.';

comment on column clima_dia.rdcion_sla is
'Radiacción Solar.';

comment on column clima_dia.etp is
'Evotranspiración.';

comment on column clima_dia.prcptcion is
'Precipitación.';

comment on column clima_dia.evp_clclad is
'Evaporación Calculada.';

/*==============================================================*/
/* Index: ind_clima_dia                                         */
/*==============================================================*/
create unique index ind_clima_dia on clima_dia using btree (
id_fecha
);

/*==============================================================*/
/* Table: fechas                                                */
/*==============================================================*/
create table fechas (
   gid                  integer              not null,
   id_fecha             integer              not null,
   fecha                date                 null,
   constraint PK_FECHAS primary key (id_fecha)
);

comment on table fechas is
'Tabla de datos que contiene las fechas de muestreo de la plaga.';

comment on column fechas.id_fecha is
'Identificador de la fecha de muestreo de la plaga.';

comment on column fechas.fecha is
'Fecha de muestreo de la plaga.';

/*==============================================================*/
/* Index: ind_fechas                                            */
/*==============================================================*/
create unique index ind_fechas on fechas using btree (
id_fecha
);

/*==============================================================*/
/* Table: muestreo                                              */
/*==============================================================*/
create table muestreo (
   gid                  integer              not null,
   id_fecha             integer              not null,
   id_sig               character            null,
   no_adultos           integer              null,
   constraint PK_MUESTREO primary key (id_fecha)
);

comment on table muestreo is
'Tabla de datos que contiene la información de muestreo.';

comment on column muestreo.id_fecha is
'Identificador de la fecha de muestreo de la plaga.';

comment on column muestreo.id_sig is
'Identificador del punto de muestreo.';

comment on column muestreo.no_adultos is
'Cantidad de adultos de la plaga muestreados.';

/*==============================================================*/
/* Index: ind_muestreo                                          */
/*==============================================================*/
create unique index ind_muestreo on muestreo using BTREE (
id_fecha
);

/*==============================================================*/
/* Table: puntos_muestreo                                       */
/*==============================================================*/
create table puntos_muestreo (
   gid                  integer              not null,
   id_sig               character            not null,
   muestreo             character            null,
   the_geom             geometry             null,
   constraint PK_PUNTOS_MUESTREO primary key (id_sig),
   constraint enforce_dims_the_geom check (st_ndims(the_geom) = 2),
   constraint enforce_geotype_the_geom check (((geometrytype(the_geom) = 'POINT'::text) OR (the_geom IS NULL))),
   constraint enforce_srid_the_geom check ((st_srid(the_geom) = (-1)))
);

comment on table puntos_muestreo is
'Tabla geométrica que contiene los puntos de muestreo de la plaga.';

comment on column puntos_muestreo.id_sig is
'Identificador del punto de muestreo.';

comment on column puntos_muestreo.muestreo is
'Descripción del punto de muestreo.';

comment on column puntos_muestreo.the_geom is
'Campo geometrico.';

INSERT INTO geometry_columns (f_table_catalog, f_table_schema, f_table_name, f_geometry_column, coord_dimension, srid, type) VALUES ('', 'public', 'puntos_muestreo', 'the_geom', 2, -1, 'POINT');

/*==============================================================*/
/* Index: ind_geo_puntos_muestreo                               */
/*==============================================================*/
create  index ind_geo_puntos_muestreo on puntos_muestreo (
the_geom
);

/*==============================================================*/
/* Index: ind_puntos_muestreo                                   */
/*==============================================================*/
create unique index ind_puntos_muestreo on puntos_muestreo using btree (
id_sig
);

alter table clima_10_dias
   add constraint clima_10_dias_fechas_fkey foreign key (id_fecha)
      references fechas (id_fecha)
      on delete restrict on update restrict;

alter table clima_dia
   add constraint clima_dia_fechas_fkey foreign key (id_fecha)
      references fechas (id_fecha)
      on delete restrict on update restrict;

alter table muestreo
   add constraint muestreo_fechas_fkey foreign key (id_fecha)
      references fechas (id_fecha)
      on delete restrict on update restrict;

alter table muestreo
   add constraint muestreo_puntos_muestreo_fkey foreign key (id_sig)
      references puntos_muestreo (id_sig)
      on delete restrict on update restrict;

