DROP DATABASE storyline_land;
CREATE DATABASE `storyline_land` DEFAULT CHARSET utf8;
USE `storyline_land`;

CREATE TABLE `mailing_list` (
	`id` int(11) not null auto_increment,
	`email` varchar(255), 
	`ip_address` varchar(255),
	`times` int(11) not null default 1,
	`created_at` timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	UNIQUE KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `message_box` (
	`id` int(11) not null auto_increment,
	`email` varchar(255),
	`message` text,
	`ip_address` varchar(255),
	`created_at` timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;