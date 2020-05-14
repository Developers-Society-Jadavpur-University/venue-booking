CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(100) NOT NULL,
 `role` varchar(50) NOT NULL,
 `email` varchar(100) NOT NULL,
 `verified` tinyint(1) NOT NULL DEFAULT '0',
 `token` varchar(255) DEFAULT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
 )