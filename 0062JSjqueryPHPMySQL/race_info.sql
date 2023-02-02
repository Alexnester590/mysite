create database race_info;
CREATE USER 'Alex'@'localhost' IDENTIFIED BY '1';
GRANT SELECT,INSERT,UPDATE,DELETE ON race_info.* TO 'Alex'@'localhost';

use race_info;
CREATE TABLE runners (
  runner_id INT not null AUTO_INCREMENT,
first_name VARCHAR(100) not null,
last_name VARCHAR(100) not null,
gender VARCHAR(1) not null,
finish_time VARCHAR(10),
PRIMARY KEY (runner_id)
);

insert into runners (first_name, last_name, gender, finish_time)
values ('John','Smith','m','25:31') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Jacob','Walker','m','25:54') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Mary','Brown','f','26:01') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Jenny','Pierce','f','26:04') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Frank','Jones','m','26:08') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Bob','Hope','m','26:38') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Jane','Smith','f','28:04') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Ryan','Rice','m','28:24') ;
insert into runners (first_name, last_name, gender, finish_time)
values ('Justin','Jones','m','29:14') ;