insert into `users` set passwd='81dc9bdb52d04dc20036dbd8313ed055',user='lp',email='p_luisss@yahoo.com.ar'

ALTER TABLE `users` ADD `rol` VARCHAR(20) NOT NULL AFTER `email`;