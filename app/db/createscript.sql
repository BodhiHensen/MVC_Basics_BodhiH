-- Step: 01
-- ********************************************************************************
-- Doel : Maak een nieuwe database aan met de naam MVC_Basics_2509AB
-- ********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-02-2026      Arjan de Ruijter    Smartphones
-- ********************************************************************************

-- Verwijder database MVC_Basics_2509AB
DROP DATABASE IF EXISTS `MVC_Basics_2509AB`;

-- Maak een nieuwe database aan MVC_Basics_2509AB
CREATE DATABASE `MVC_Basics_2509AB`;

-- Gebruik database MVC_Basics_2509AB
USE `MVC_Basics_2509AB`;


-- Step: 02
-- ********************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-02-2026      Arjan de Ruijter    Tabel Smartphones
-- ********************************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem,
-- Schermgrootte, Releasedatum, MegaPixels
-- ********************************************************************************

CREATE TABLE Smartphones
(
    Id                  SMALLINT            UNSIGNED    NOT NULL            AUTO_INCREMENT
    ,Merk               VARCHAR(50)                     NOT NULL
    ,Model              VARCHAR(50)                     NOT NULL
    ,Prijs              DECIMAL(6,2)                    NOT NULL
    ,Geheugen           DECIMAL(4,0)                    NOT NULL
    ,Besturingssysteem  VARCHAR(25)                     NOT NULL
    ,Schermgrootte      DECIMAL(3,2)                    NOT NULL
    ,Releasedatum       DATE                            NOT NULL
    ,MegaPixels         DECIMAL(3,0)                    NOT NULL
    ,IsActief           BIT                             NOT NULL            DEFAULT 1
    ,Opmerking          VARCHAR(255)                        NULL            DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                     NOT NULL            DEFAULT NOW(6)
    ,DatumGewijzigd     DATETIME(6)                     NOT NULL            DEFAULT NOW(6)
    ,CONSTRAINT         PK_Smartphones_Id   PRIMARY KEY (Id)
) ENGINE=InnoDB;


-- Step: 03
-- ********************************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-02-2026      Arjan de Ruijter    Vulling Smartphones
-- 02			10-02-2026	 	BodhiH				Extra Telefoons toegevoegd
-- ********************************************************************************

INSERT INTO Smartphones
(
    Merk
    ,Model
    ,Prijs
    ,Geheugen
    ,Besturingssysteem
    ,Schermgrootte
    ,Releasedatum
    ,MegaPixels
)
VALUES
('Apple', 'iPhone 16 Pro', 1256.56, 64, 'iOS 18', 6.7, '2025-01-19', 50),
('Samsung', 'Galaxy S25 Ultra', 1539, 128, 'Android 15', 6.1, '2025-02-01', 200),
('Google', 'Pixel 9 Pro', 890, 1024, 'Android 15', 6.3, '2024-12-20', 100),
('Xiaomi', '15 Pro', 949.00, 256, 'Android 15', 6.73, '2024-10-29', 50),
('OnePlus', '13', 899.00, 256, 'Android 15', 6.82, '2025-01-07', 50),
('Sony', 'Xperia 1 VII', 1399.00, 256, 'Android 15', 6.5, '2025-06-04', 48),
('Asus', 'ROG Phone 9 Pro', 1199.00, 512, 'Android 15', 6.78, '2024-11-20', 50),
('Nothing', 'Phone (3)', 799.00, 256, 'Android 15', 6.7, '2025-07-15', 50);


-- Step: 04
-- ********************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- ********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-02-2026      Arjan de Ruijter    Tabel Sneakers
-- ********************************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
-- ********************************************************************************

CREATE TABLE Sneakers
(
    Id                  SMALLINT            UNSIGNED    NOT NULL            AUTO_INCREMENT
    ,Merk               VARCHAR(50)                     NOT NULL
    ,Model              VARCHAR(50)                     NOT NULL
    ,Type               VARCHAR(25)                     NOT NULL
    ,IsActief           BIT                             NOT NULL            DEFAULT 1
    ,Opmerking          VARCHAR(255)                        NULL            DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                     NOT NULL            DEFAULT NOW(6)
    ,DatumGewijzigd     DATETIME(6)                     NOT NULL            DEFAULT NOW(6)
    ,CONSTRAINT         PK_Sneakers_Id      PRIMARY KEY (Id)
) ENGINE=InnoDB;


-- Step: 05
-- ********************************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- ********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-02-2026      Arjan de Ruijter    Vulling Sneakers
-- 02			10-02-2026	 	BodhiH				Extra Sneakers toegevoegd
-- ********************************************************************************

INSERT INTO Sneakers
(
    Merk
    ,Model
    ,Type
)
VALUES
('Nike', 'Air Jordan 1', 'Hardloop'),
('Adidas', 'Yeezy Boost 350', 'Basketbal'),
('New Balance', 'Pixel 9 Pro', 'Casual'),
('Trico', 'New Age', 'Casual'),
('Overlord', 'Tristar 6', 'Hardloop'),
('Puma', 'RS-X', 'Casual'),
('Reebok', 'Nano X4', 'Hardloop'),
('Asics', 'Gel-Kayano 30', 'Hardloop');