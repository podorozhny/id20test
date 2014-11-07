SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET NAMES utf8;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS news_subject;
DROP TABLE IF EXISTS news;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;

CREATE TABLE IF NOT EXISTS news_subject (
    id int unsigned not null AUTO_INCREMENT COMMENT 'ID',
    name varchar(100) not null COMMENT 'Name',
    PRIMARY KEY (id),
    UNIQUE KEY (name)
) ENGINE=InnoDB COMMENT='News subject';

CREATE TABLE IF NOT EXISTS news (
    id int unsigned not null AUTO_INCREMENT COMMENT 'ID',
    published_at timestamp not null default current_timestamp COMMENT 'Created at',
    subject_id int unsigned COMMENT 'Subject',
    title varchar(100) not null COMMENT 'Title',
    content varchar(4096) not null COMMENT 'Content',
    PRIMARY KEY (id),
    CONSTRAINT fk_news_1 FOREIGN KEY (subject_id) REFERENCES news_subject (id) ON DELETE SET null
) ENGINE=InnoDB COMMENT='News';