
create database if not exists `L2C_KE_PHP_CMS`;
Use `L2C_KE_PHP_CMS`;

create table if not exists Users(
    ID int primary key not null auto_increment, 
    email varchar not null,
    `password` varchar not null,
    nickname varchar not null,
);

create table if not exists Pages(
    ID int primary key not null,
    Title varchar,
    content text,
    User_ID int,
    menu_label varchar(128),
    menu_order int,
)

Alter table Pages add constraint User_ID foreign_key ,
Pages( `User_ID`) references Users(`ID`);

Insert into Users(ID,email,nickname)
values (0,`admin@adminl2c.sk`, `admin`);

