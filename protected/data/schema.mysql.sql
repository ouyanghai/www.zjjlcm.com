CREATE DATABASE IF NOT EXISTS app_zjjlcm;
USE app_zjjlcm;

CREATE TABLE app_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL unique,
    password VARCHAR(128) NOT NULL,
    qq VARCHAR(12) NOT NULL DEFAULT 0,
    tel VARCHAR(11) NOT NULL DEFAULT 0,
    email VARCHAR(128) NOT NULL default '',
    created DATETIME NOT NULL,
    updated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
);
#密码和用户名一样 
INSERT into app_user(username,password,email,created) values('zjjlcm168','376b90c01d249dc26c28a09b0c805634',"a@b.com",now());