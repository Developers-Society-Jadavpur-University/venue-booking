CREATE TABLE IF NOT EXISTS users (
 id int(11) NOT NULL AUTO_INCREMENT,
 username varchar(100) NOT NULL,
 role varchar(50) NOT NULL,
 email varchar(100) NOT NULL,
 verified tinyint(1) NOT NULL DEFAULT '0',
 token varchar(255) DEFAULT NULL,
 password varchar(255) NOT NULL,
 PRIMARY KEY (id)
 );
 
 CREATE TABLE IF NOT EXISTS otp_expiry (
id int(11) NOT NULL,
  otp varchar(10) NOT NULL,
  is_expired int(11) NOT NULL,
  create_at datetime NOT NULL
)