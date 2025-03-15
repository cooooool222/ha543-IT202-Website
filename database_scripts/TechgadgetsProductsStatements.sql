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
(1000, 'OPG', 'Optical Ghost', 'The Optical Ghost is a cool virtual reality headset that uses illusions', 'Purple', 100, 599.00, 699.00, NOW())

INSERT INTO TechGadgetsProducts 
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(2000, 'TMT', 'The Machine Thermo', 'The Machine Thermo is a highly intelligent smart thermostat', 'Red', 200, 499.00, 599.00, NOW())

INSERT INTO TechGadgetsProducts 
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(3000, 'TJP', 'The Joshner Pad', 'The Joshner Pad is a highly intelligent wireless charging pad', 'Blue', 300, 399.00, 499.00, NOW())

INSERT INTO TechGadgetsProducts
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(4000, 'SBL', 'Speaker bleaker', 'The Speaker Bleacker contains bluetooth which can be used in a 100m Radius! ', 'Yellow', 400, 299.00, 399.00, NOW())

INSERT INTO TechGadgetsProducts
(TechgadgetProductID, TechgadgetProductCode, TechgadgetProductName, TechgadgetDescription, Techgadgetcolor, TechgadgetCategoryID, TechgadgetWholesalePrice, TechgadgetListPrice, DateCreated)
VALUES
(5000, 'HSC', 'Healthy Scale', 'The Healthy scale is a fitness scale that will accurately measure your weight!', 'White', 500, 199.00, 299.00, NOW())

SELECT * FROM `TechGadgetsProducts`

DROP TABLE `TechGadgetsProducts`

DELETE FROM `TechGadgetsProducts` where `TechgadgetProductID`=3000

SHOW CREATE TABLE TechGadgetsProducts;
