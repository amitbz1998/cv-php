<?php

?>

<!--
 CREATE TABLE IF NOT EXISTS `users`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`first_name` varchar(20) NOT NULL,
`last_name` varchar(20) NOT NULL,
`degree` varchar(60) NOT NULL,
`phone` int(10) NOT NULL,
`area` varchar(60) NOT NULL,
`email` varchar(255) NOT NULL,
`about_me` varchar(255) NOT NULL,
`created` timestamp NOT NULL default current_timestamp(),
PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->

<!--
 CREATE TABLE IF NOT EXISTS `users_experience`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`title` varchar(60) NOT NULL,
`start_date` date NOT NULL,
`end_date` date NOT NULL,
`article_title` varchar(255) NOT NULL,
`article_text` varchar(255) NOT NULL,
`created` timestamp NOT NULL default current_timestamp(),
PRIMARY KEY(`id`),
CONSTRAINT FK_user_exp FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->

<!--
 CREATE TABLE IF NOT EXISTS `users_education`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`title` varchar(60) NOT NULL,
`start_date` date NOT NULL,
`end_date` date NOT NULL,
`article_title` varchar(255) NOT NULL,
`article_text` varchar(255) NOT NULL,
`created` timestamp NOT NULL default current_timestamp(),
PRIMARY KEY(`id`),
CONSTRAINT FK_user_edu FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->

<!--
 CREATE TABLE IF NOT EXISTS `pro_skills`(
`skill_id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`photoshp` int(3) NOT NULL,
`illustrator` int(3) NOT NULL,
`javascript` int(3) NOT NULL,
`html_css` int(3) NOT NULL,
PRIMARY KEY(`skill_id`),
CONSTRAINT FK_usres_pro_sk FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->
<!--
  CREATE TABLE IF NOT EXISTS `per_skills`(
`skill_id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`creativity` int(3) NOT NULL,
`team_work` int(3) NOT NULL,
`hard_works` int(3) NOT NULL,
`leader_ship` int(3) NOT NULL,
PRIMARY KEY(`skill_id`),
CONSTRAINT FK_usres_per_sk FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->
<!--
  CREATE TABLE IF NOT EXISTS `language`(
`lang_id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`english` int(3) NOT NULL,
`spanish` int(3) NOT NULL,
`french` int(3) NOT NULL,
PRIMARY KEY(`lang_id`),
CONSTRAINT FK_usres_language FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->
<!--
  CREATE TABLE IF NOT EXISTS `hobies`(
`hobie_id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`hobie_name` varchar(20) NOT NULL,
PRIMARY KEY(`hobie_id`),
CONSTRAINT FK_usres_hobies FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-->