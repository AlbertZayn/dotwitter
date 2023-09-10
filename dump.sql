-- Adminer 4.8.1 MySQL 8.0.34-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET
time_zone = '+00:00';
SET
foreign_key_checks = 0;
SET
sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tweet`;
CREATE TABLE `tweet`
(
    `id`       int          NOT NULL AUTO_INCREMENT,
    `text`     varchar(280) NOT NULL,
    `likes`    bigint       NOT NULL DEFAULT '0',
    `retweets` bigint       NOT NULL DEFAULT '0',
    `user`     int          NOT NULL,
    `replies`  bigint       NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`
(
    `id`               int                                                           NOT NULL AUTO_INCREMENT,
    `full_name`        varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
    `email`            varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
    `username`         varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci  NOT NULL DEFAULT '',
    `password`         varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '',
    `tweet`            varchar(280) COLLATE utf8mb3_unicode_ci                       NOT NULL DEFAULT '',
    `follows`          bigint                                                        NOT NULL DEFAULT '0',
    `followers`        bigint                                                        NOT NULL DEFAULT '0',
    `posts`            bigint                                                        NOT NULL DEFAULT '0',
    `registrationdate` datetime                                                      NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- 2023-09-10 18:52:28