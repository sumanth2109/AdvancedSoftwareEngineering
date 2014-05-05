<?php
include 'connect.php';
$sql="CREATE TABLE IF NOT EXISTS assign (
  sno int(4) NOT NULL AUTO_INCREMENT,
  sid int(4) NOT NULL,
  pid int(4) NOT NULL,
  cid int(11) NOT NULL,
  rs int(1) NOT NULL,
  PRIMARY KEY (sno)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ";
$result=mysql_query($sql) or die(mysql_error());
	

$sql="INSERT INTO assign (sno, sid, pid, cid, rs) VALUES
(2, 1, 1, 1, 9),
(3, 1, 2, 1, 9),
(4, 2, 3, 1, 9),
(5, 16, 4, 1, 9),
(6, 3, 8, 1, 1),
(7, 4, 9, 1, 1),
(8, 5, 6, 1, 9),
(11, 8, 10, 1, 1),
(12, 9, 5, 1, 9),
(14, 11, 7, 1, 9),
(16, 13, 11, 1, 1),
(17, 14, 12, 1, 1),
(19, 5, 6, 1, 9),
(20, 6, 1, 1, 9)";
$result=mysql_query($sql) or die(mysql_error());


$sql="CREATE TABLE IF NOT EXISTS courses (
  ID int(4) NOT NULL AUTO_INCREMENT,
  COURSENAME varchar(64) NOT NULL DEFAULT 'COURSE',
  PRIMARY KEY (ID)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ";
$result=mysql_query($sql) or die(mysql_error());


$sql="CREATE TABLE IF NOT EXISTS dependence (
  depend1 int(4) NOT NULL,
  depend2 int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$result=mysql_query($sql) or die(mysql_error());


$sql="CREATE TABLE IF NOT EXISTS professors (
  pid int(4) NOT NULL AUTO_INCREMENT,
  pname varchar(32) NOT NULL,
  researchMode int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (pid)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ";
$result=mysql_query($sql) or die(mysql_error());


$sql="INSERT INTO professors (pid, pname, researchMode) VALUES
(1, 'Baek-Young Choi', 9),
(2, 'Kenneth Mitchell', 9),
(3, 'Praveen Rao', 9),
(4, 'Yugyung Lee', 9),
(5, 'Reza Derakhshani', 9),
(6, 'Vijay Kumar', 9),
(7, 'Yongjie Zheng', 9),
(8, 'Yijie Han', 1),
(9, 'Deendayal Dinakarpandian', 1),
(10, 'Jerome Knopp', 1),
(11, 'Xiaojun Shen', 1),
(12, 'Lein Harn', 1),
(13, 'Sumanth', 9)";
$result=mysql_query($sql) or die(mysql_error());

$sql="CREATE TABLE IF NOT EXISTS subjects (
  sid int(4) NOT NULL AUTO_INCREMENT,
  scode varchar(8) NOT NULL,
  sname varchar(64) NOT NULL,
  PRIMARY KEY (sid)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ";
$result=mysql_query($sql) or die(mysql_error());

$sql="INSERT INTO subjects (sid, scode, sname) VALUES
(1, 'CS5520', 'Network Architecture - I'),
(2, 'CS5531', 'Advanced Operating Systems'),
(3, 'CS5552A', 'Formal Software Specifications'),
(4, 'CS5566', 'Introduction to Bioinformatics'),
(5, 'CS5572', 'Mobile Computing'),
(6, 'CS5590CC', 'Cloud Computing'),
(7, 'CS5590CI', 'Computational Intelligence'),
(8, 'CS5590IP', 'Image Processing'),
(9, 'CS5590NN', 'Neural & Adaptive Networks'),
(10, 'CS5590PA', 'Parallel Algorithms'),
(11, 'CS5590SA', 'Software Architecture and Design'),
(12, 'CS5590VC', 'Mobile Cloud Computing'),
(13, 'CS5592', 'Design and Analysis of Algorithms'),
(14, 'CS5596A', 'Computer Security I: Cryptography'),
(15, 'CS5670', 'Architecture of Distributed Database systems'),
(16, 'CS5551', 'Advanced Software Engineering')";
$result=mysql_query($sql) or die(mysql_error());

$sql="CREATE TABLE IF NOT EXISTS timetable (
  sno int(2) NOT NULL AUTO_INCREMENT,
  sname varchar(32) NOT NULL,
  pname varchar(32) NOT NULL,
  hour varchar(10) NOT NULL,
  PRIMARY KEY (sno)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ";
$result=mysql_query($sql) or die(mysql_error());

$sql="INSERT INTO timetable (sno, sname, pname, hour) VALUES
(1, '1', '1', '7 - 7:50'),
(2, '2', '3', '8-8.50'),
(3, '16', '4', '9-9.50'),
(4, '3', '8', '10-10.50'),
(5, '4', '9', '11-11.50'),
(6, '5', '6', '12-12.50'),
(7, '6', '1', '1-1.50'),
(8, '7', '9', '2-2.50'),
(9, '8', '10', '3-3.50'),
(10, '9', '5', '4-5.15'),
(11, '10', '8', '5-30-6.45'),
(12, '11', '7', '7-8.15'),
(13, '14', '12', '8.30-9.45')";
$result=mysql_query($sql) or die(mysql_error());

$sql="CREATE TABLE IF NOT EXISTS users1 (
  user_id int(8) NOT NULL AUTO_INCREMENT,
  user_name varchar(30) NOT NULL,
  user_pass varchar(255) NOT NULL,
  user_email varchar(255) NOT NULL,
  user_date datetime NOT NULL,
  user_level int(8) NOT NULL,
  professorid int(4) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ";
$result=mysql_query($sql) or die(mysql_error());

$sql="INSERT INTO users1 (user_id, user_name, user_pass, user_email, user_date, user_level, professorid) VALUES
(1, 'ramu', '4dc7c9ec434ed06502767136789763ec11d2c4b7', 'ramu2514@gmail.com', '2013-12-23 22:39:01', 1, 1),
(2, 'ramu1', '4dc7c9ec434ed06502767136789763ec11d2c4b7', 'ramu2514@gmail.com', '2014-03-10 21:22:21', 9, 0),
(7, 'prof1', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:28', 1, 1),
(8, 'prof2', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:28', 1, 2),
(9, 'prof3', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:28', 1, 3),
(10, 'prof4', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:28', 1, 4),
(11, 'prof5', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 5),
(12, 'prof6', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 6),
(13, 'prof7', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 7),
(14, 'prof8', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 8),
(15, 'prof9', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 9),
(16, 'prof10', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 10),
(17, 'prof11', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 11),
(18, 'prof12', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'notdfined@mail.com', '2014-05-01 14:35:29', 1, 12),
(19, 'sumanth21', '451f2bd8ef0c7a134f8ddf736ab0b9e42e866cf0', 'sumanth2109@gmail.com', '2014-05-02 13:54:00', 0, 0),
(20, 'prof13', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'sumanth2109@gmail.com', '2014-05-03 20:50:43', 1, 13),
(21, 'Sumanth', '44a7ea05424c4bf5bc1bec9f523b1a000d73ffe2', 'sumanth2109@gmail.com', '2014-05-03 21:00:31', 9, 0)";
$result=mysql_query($sql) or die(mysql_error());
