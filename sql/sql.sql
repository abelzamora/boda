CREATE TABLE boda (
ID int(8) unsigned NOT NULL auto_increment,
name varchar(20),
code varchar(25),
email varchar(40),
confirmed boolean,
colorVestido varchar(50),
tallaPie decimal(2,2),
message varchar(500),
PRIMARY KEY (ID)
);