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
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
#密码和用户名一样 
INSERT into app_user(username,password,email,created) values('zjjlcm168','376b90c01d249dc26c28a09b0c805634',"a@b.com",now());

CREATE TABLE app_city(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    state tinyint(1) not null default '0',
    created DATETIME NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE app_strategy(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pid INTEGER NOT NULL,
    name varchar(256) not null default '',
    content text not null,
    click_num int(12) not null default 0,
    pic VARCHAR(128) NOT NULL,
    created DATETIME not null,
    updated DATETIME not null default '0000-00-00 00:00:00'
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE app_line(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    introduce TEXT,
    include TEXT,
    uninclude TEXT,
    notice TEXT,
    price double(9,2) not null default 0,
    started VARCHAR(128) NOT NULL DEFAULT '',
    days VARCHAR(128) NOT NULL DEFAULT '',
    feature VARCHAR(256) NOT NULL DEFAULT '',
    traffic varchar(128) not NULL DEFAULT '',
    created DATETIME NOT NULL,
    updated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    praise INTEGER NOT NULL DEFAULT 0,
    pic VARCHAR(128) NOT NULL DEFAULT 'default.jpg'
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;