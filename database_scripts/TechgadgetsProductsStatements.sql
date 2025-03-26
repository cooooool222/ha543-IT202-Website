/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
CREATE TABLE TechGadgetsProducts (
TechgadgetProductID        INT(11)        NOT NULL,
TechgadgetProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
TechgadgetProductName      VARCHAR(255)   NOT NULL,
TechgadgetDescription      TEXT           NOT NULL,
Techgadgetcolor                   VARCHAR(255)   NOT NULL,
TechgadgetCategoryID       INT(11)        NOT NULL,
TechgadgetWholesalePrice   DECIMAL(10,2)  NOT NULL,
TechgadgetListPrice        DECIMAL(10,2)  NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( TechgadgetProductID )
);
INSERT INTO TechGadgetsProducts 
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(3000, 'AVR', 'Amazon Virtual Reality', 'The  Amazon Virtual Reality is an dynamic virtual reality headset that uses 3d graphics. It contains special features that are exclusive.', 'Red', 100, 499.00, 599.00, NOW())

INSERT INTO TechGadgetsProducts 
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(6000, 'NST', 'Nest Thermostat', 'The Nest Thermostat is a highly intricate smart thermostat. It has an attractive desgin and is esaily portabler', 'Yellow', 200, 399.00, 499.00, NOW())

INSERT INTO TechGadgetsProducts 
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(9000, 'IOWC', 'iOttie Wireless Car Charger', 'The iOttie Wireless is an sizable wireless charging pad. It is a versatile car mount.', 'White', 300, 199.00, 399.00, NOW())

INSERT INTO TechGadgetsProducts
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(12000, 'BSL', 'Bose SoundLink', 'The Bose SoundLink is a speaker that contains bluetooth. Jt stylish cylinder with a sturdy aluminium body.', 'Purple', 400, 299.00, 399.00, NOW())

INSERT INTO TechGadgetsProducts
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(15000, 'WBS', 'Withings Body Scan', 'The Withingd Body Scan is a fitness scale that will accurately measure your weight!. It is packed with health-tracking features and is the brands top scale.', 'Blue', 500, 199.00, 299.00, NOW())

SELECT * FROM `TechGadgetsProducts`

DELETE FROM `TechGadgetsProducts` where `TechgadgetProductID`=11000

SHOW CREATE TABLE TechGadgetsProducts;

SHOW BINARY LOGS;
SHOW VARIABLES LIKE 'datadir';

mysql -u root -p ha543 < backup.sql;