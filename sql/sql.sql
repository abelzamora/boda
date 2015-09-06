CREATE TABLE usuarios (
ID int(8) unsigned NOT NULL auto_increment,
name varchar(20),
code varchar(25),
email varchar(40),
confirmed boolean,
colorVestido varchar(50),
tallaPie INTEGER,
PRIMARY KEY (ID)
);