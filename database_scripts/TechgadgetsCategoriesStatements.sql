/* 
Hamza Abdo
Feburary 26, 2025
ha543@njit.edu
Phase 1 Assignment: Login and Logout
IT202-004
*/
CREATE TABLE TechGadgetsCategories (
TechgadgetCategoryID       INT(11)        NOT NULL,
TechgadgetCategoryCode     VARCHAR(255)   NOT NULL   UNIQUE,
TechgadgetshelfNumber      INT(11)        NOT NULL,
TechgadgetCategoryName     VARCHAR(255)   NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( TechgadgetCategoryID )
);
INSERT INTO TechGadgetsCategories
(TechgadgetCategoryID, TechgadgetCategoryCode, TechgadgetCategoryName, TechgadgetshelfNumber, DateCreated)
VALUES
(100, 'VRH', 'Virtual Reality Headset', 1, NOW());

INSERT INTO TechGadgetsCategories
(TechgadgetCategoryID, TechgadgetCategoryCode, TechgadgetCategoryName, TechgadgetshelfNumber, DateCreated)
VALUES
(200, 'STH', 'Smart Thermostat', 2, NOW());

INSERT INTO TechGadgetsCategories
(TechgadgetCategoryID, TechgadgetCategoryCode, TechgadgetCategoryName, TechgadgetshelfNumber, DateCreated)
VALUES
(300, 'WCP', 'Wireless Charging Pad', 3, NOW());

INSERT INTO TechGadgetsCategories
(TechgadgetCategoryID, TechgadgetCategoryCode, TechgadgetCategoryName, TechgadgetshelfNumber, DateCreated)
VALUES
(400, 'BSP', 'Bluetooth Speaker', 4, NOW());

INSERT INTO TechGadgetsCategories
(TechgadgetCategoryID, TechgadgetCategoryCode, TechgadgetCategoryName, TechgadgetshelfNumber, DateCreated)
VALUES
(500, 'FSS', 'Fitness Smart Scale', 5, NOW());



SELECT * FROM TechGadgetsCategories

DROP TABLE TechGadgetsCategories;

DESCRIBE TechGadgetsCategories;

DELETE FROM TechGadgetsCategories WHERE TechgadgetCategoryID = 900