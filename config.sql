drop database if exists n0huma00;
create database n0huma00;
use n0huma00;
create table customer (
    username varchar(64) not null,
    password varchar(64) not null,
    primary key (username)
);

create table customerinfo(
    firstname varchar(64) not null,
    lastname varchar(64) not null,
    
    primary key (firstname)
    
);