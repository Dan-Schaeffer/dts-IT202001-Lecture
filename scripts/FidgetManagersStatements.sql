
CREATE TABLE FidgetManagers (
 FidgetManagerID  INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress        VARCHAR(255)   NOT NULL   UNIQUE,
 password            VARCHAR(64)    NOT NULL,
 pronouns            VARCHAR(60)    NOT NULL,
 firstName           VARCHAR(60)    NOT NULL,
 lastName            VARCHAR(60)    NOT NULL,
 DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (FidgetManagerID)
);

INSERT INTO FidgetManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('dan@fidgetshop.com', SHA2('myPassword', 256), 'He/Him', 'Dan', 'Schaeffer');

INSERT INTO FidgetManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('allan@fidgetshop.com', SHA2('myPassword2', 256), 'They/Them', 'Allan', 'Breslov');
INSERT INTO FidgetManagers
(emailAddress, password, pronouns, firstName, lastName)
VALUES
('cris@fidgetshop.com', SHA2('myPassword3', 256), 'He/Him', 'Cristian', 'Casales');