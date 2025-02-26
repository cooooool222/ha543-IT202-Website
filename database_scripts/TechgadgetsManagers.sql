/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202
*/

CREATE TABLE TechgadgetsManagers (
 TechgadgetsManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,

 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (TechgadgetsManagerID)
);

INSERT INTO TechgadgetsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('johnj@gmail.com', SHA2('Interc3ption', 256), 'He/Him', 'John', 'Jackson', NOW());

INSERT INTO TechgadgetsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('gabrielk@techgadgets.com', SHA2('not0nline3', 256), 'He/Him', 'Gabriel', 'Kameron', NOW());

INSERT INTO TechgadgetsManagers
(emailAddress, password, pronouns, firstname, lastname, dateCreated) 
VALUES
('samo@techgadgets.com', SHA2('l0ved0nuts', 256), 'He/Him', 'Sam', 'Orlan', NOW());

SELECT * FROM `TechgadgetsManagers`

