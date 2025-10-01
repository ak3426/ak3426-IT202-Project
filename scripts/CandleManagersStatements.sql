CREATE TABLE CandleManagers (
CandleManagerID  INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress        VARCHAR(255)   NOT NULL   UNIQUE,
 password            VARCHAR(64)    NOT NULL,
 pronouns            VARCHAR(60)    NOT NULL,
 firstName           VARCHAR(60)    NOT NULL,
 lastName            VARCHAR(60)    NOT NULL,
 DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (CandleManagerID)
);

INSERT INTO CandleManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('Ava@candleshop.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Ava', 'Rich');

INSERT INTO CandleManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('Thomas', SHA2('my23P@ssword', 256), 'He/His', 'Thomas', 'Parker');

INSERT INTO CandleManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('Jackie', SHA2('mySh0rt@ssword', 256), 'She/Her', 'Jackie', 'Cox');

INSERT INTO CandleManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('Fred', SHA2('myPass0123@', 256), 'He/His', 'Fred', 'Mack');




