/*CREATE DATABASE NAMED josh AND CORRECT PASSWORD AND USERNAME IN SERVER FILE IF REQUIRED.*/

CREATE TABLE register (
 id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 username VARCHAR(120) NOT NULL,
 name VARCHAR(120) NOT NULL,
 college VARCHAR(128) NOT NULL,
 email VARCHAR(128) NOT NULL,
 password VARCHAR(120) NOT NULL,
 mobile BIGINT(11)
);


CREATE TABLE events (
 id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 event VARCHAR(120) NOT NULL,
  set1 INT(11) NOT NULL,
  set2 INT(11) NOT NULL,
  set1ext VARCHAR(11) NOT NULL,
  set2ext VARCHAR(11) NOT NULL
);

INSERT INTO `events`(`event`) VALUES ('volleyball');
INSERT INTO `events`(`event`) VALUES ('basketball');
INSERT INTO `events`(`event`) VALUES ('tennis');
INSERT INTO `events`(`event`) VALUES ('cricket');
INSERT INTO `events`(`event`) VALUES ('badminton');
INSERT INTO `events`(`event`) VALUES ('chess');
INSERT INTO `events`(`event`) VALUES ('carrom');
INSERT INTO `events`(`event`) VALUES ('karate');
INSERT INTO `events`(`event`) VALUES ('football');
INSERT INTO `events`(`event`) VALUES ('kabaddi');
INSERT INTO `events`(`event`) VALUES ('gym');
INSERT INTO `events`(`event`) VALUES ('tabletennis');