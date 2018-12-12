
create database if not exists `L2C_KE_PHP_CMS`;
Use `L2C_KE_PHP_CMS`;

create table if not exists Users(
    `ID` int primary key not null auto_increment, 
    email varchar(128) not null,
    `password` varchar(128) not null,
    nickname varchar(128) not null
);

create table if not exists Pages(
    ID int primary key not null auto_increment,
    Title varchar(128),
    content text,
    User_ID int,
    menu_label varchar(128),
    menu_order int
);

Alter table Pages add constraint `User_IDforeign_key` foreign key Pages( `User_ID`) references Users(`ID`);

Insert into Users(email,`password`,nickname) values ("admin@adminl2c.sk","admin", "admin");

