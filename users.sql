create database loginPhp;
use loginPhp;
create table users (
	id int auto_increment primary key,
    username text not null unique,
    password text not null
)engine InnoDB;
select * from users