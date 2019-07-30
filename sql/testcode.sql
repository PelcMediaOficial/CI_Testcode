create database testcode;

use testcode;


create table if not exists `task`(
	id_task int AUTO_INCREMENT primary key,
    title varchar(100) not null,
    description varchar(100) not null,
    priority int not null,
    author varchar(100)
);


insert into `task` values(null,'TASK 1','Loren ipsum....','Importante','Felipe');

select * from task