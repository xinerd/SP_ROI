CREATE TABLE IF NOT EXISTS `user` (
  `id`            INT(11)     NOT NULL AUTO_INCREMENT,
  `username`      VARCHAR(30) NOT NULL
  COMMENT 'user name',
  `password`      VARCHAR(32) NOT NULL
  COMMENT 'password',
  `email`         VARCHAR(30) NOT NULL
  COMMENT 'email',
  `token`         VARCHAR(50) NOT NULL
  COMMENT 'account activate token',
  `token_exptime` INT(10)     NOT NULL
  COMMENT 'token expire time',
  `status`        TINYINT(1)  NOT NULL DEFAULT '0'
  COMMENT 'status,0-not activated,1-activated',
  `regtime`       INT(10)     NOT NULL
  COMMENT 'register time',
  PRIMARY KEY (`id`)
)
  ENGINE = MyISAM
  DEFAULT CHARSET = utf8;

ALTER TABLE user
ADD CONSTRAINT UK_T_EMAIL UNIQUE (email);