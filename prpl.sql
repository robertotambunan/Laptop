/*
SQLyog v4.07
Host - 5.5.36 : Database - prpl
*********************************************************************
Server version : 5.5.36
*/


create database if not exists `prpl`;

USE `prpl`;

/*Table structure for table `t_duktek` */

drop table if exists `t_duktek`;

CREATE TABLE `t_duktek` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_duktek` */

insert into `t_duktek` values (1,'duktek','duktek123');

/*Table structure for table `t_mahasiswa` */

drop table if exists `t_mahasiswa`;

CREATE TABLE `t_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `no_loker` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `t_mahasiswa` */

insert into `t_mahasiswa` values (1,'21113025','Roberto Tambunan','D4 Teknik Informatika','A-1','Tersimpan','images/roberto.png'),(2,'21113077','Yohana Gultom','D4 Teknik Informatika','A-2','Tersimpan','images/yohana.png'),(3,'21113004','Nita Yolanda Tobing','D4 Teknik Informatika','A-3','Tersimpan','images/Nita.png'),(4,'21113078','Brams Pande Silitonga','D4 Teknik Informatika ','B-1','Belum_tersimpan','images/Brams.png'),(5,'21113037','Ester Melati','D4 Teknik Informatika','B-2','Belum_tersimpan','images/Ester.png'),(6,'21113064','Romasi Silaban','D4 Teknik Informatika','B-3','Tersimpan','images/Romasi.png'),(16,'2111','Brolyn','D3 Teknik Informatika','D-1','Belum_tersimpan','images/');
