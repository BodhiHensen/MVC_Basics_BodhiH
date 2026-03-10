-- Step: 01
-- *********************************************************************************
-- Doel : Maak een nieuwe database aan met de naam php-of-zuhu
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           24-02-2026      VerhoefJ            Smartphones
-- *********************************************************************************

-- Verwijder database
DROP DATABASE IF EXISTS `MVC_Basics_2509AB`;

-- Maak een nieuwe database aan
CREATE DATABASE `MVC_Basics_2509AB`;

-- Gebruik database
USE `MVC_Basics_2509AB`;

-- Step: 02
-- *********************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           24-02-2026      VerhoefJ            Tabel Smartphones
-- *********************************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem,
-- Schermgrootte, Releasedatum, MegaPixels
-- *********************************************************************************

CREATE TABLE Smartphones
(
    Id                  SMALLINT        UNSIGNED    NOT NULL    AUTO_INCREMENT
   ,Merk                VARCHAR(50)                 NOT NULL
   ,Model               VARCHAR(50)                 NOT NULL
   ,Prijs               DECIMAL(6,2)                NOT NULL
   ,Geheugen            DECIMAL(4,0)                NOT NULL
   ,Besturingssysteem   VARCHAR(25)                 NOT NULL
   ,Schermgrootte       DECIMAL(3,2)                NOT NULL
   ,Releasedatum        DATE                        NOT NULL
   ,MegaPixels          DECIMAL(3,0)                NOT NULL
   ,IsActief            BIT                         NOT NULL    DEFAULT 1
   ,Opmerking           VARCHAR(255)                    NULL    DEFAULT NULL
   ,DatumAangemaakt     DATETIME(6)                 NOT NULL    DEFAULT NOW(6)
   ,DatumGewijzigd      DATETIME(6)                 NOT NULL    DEFAULT NOW(6)
   ,CONSTRAINT          PK_Smartphones_Id           PRIMARY KEY (Id)
) ENGINE=InnoDB;

-- Step: 03
-- *********************************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           24-02-2026      VerhoefJ            Vulling Smartphones
-- *********************************************************************************

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
('OnePlus', 'OnePlus 13', 949.00, 256, 'Android 15', 6.82, '2025-01-23', 50),
('Xiaomi', '15 Ultra', 1199.00, 512, 'Android 15', 6.73, '2025-02-25', 50),
('Sony', 'Xperia 1 VII', 1349.50, 256, 'Android 15', 6.50, '2025-05-15', 48),
('Oppo', 'Find X8 Pro', 1149.00, 512, 'Android 15', 6.78, '2025-03-10', 50),
('Nothing', 'Phone (3)', 699.00, 256, 'Android 15', 6.70, '2025-07-14', 50);

-- Step: 04
-- *********************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           24-02-2026      VerhoefJ            Tabel Sneakers
-- *********************************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
-- *********************************************************************************

CREATE TABLE Sneakers
(
    Id                  SMALLINT        UNSIGNED    NOT NULL    AUTO_INCREMENT
   ,Merk                VARCHAR(50)                 NOT NULL
   ,Model               VARCHAR(50)                 NOT NULL
   ,Type                VARCHAR(25)                 NOT NULL
   ,IsActief            BIT                         NOT NULL    DEFAULT 1
   ,Opmerking           VARCHAR(255)                    NULL    DEFAULT NULL
   ,DatumAangemaakt     DATETIME(6)                 NOT NULL    DEFAULT NOW(6)
   ,DatumGewijzigd      DATETIME(6)                 NOT NULL    DEFAULT NOW(6)
   ,CONSTRAINT          PK_Sneakers_Id              PRIMARY KEY     (Id)
) ENGINE=InnoDB;

-- Step: 05
-- *********************************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-02-2026      VerhoefJ            Vulling Sneakers
-- *********************************************************************************

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
('Puma', 'Suede Classic', 'Casual'),
('Asics', 'Gel-Kayano 30', 'Hardloop'),
('Reebok', 'Club C 85', 'Casual');

-- Step: 06
-- *********************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Horloges
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-03-2026      VerhoefJ            Tabel Horloges
-- *********************************************************************************
-- Onderstaande velden toevoegen aan de tabel Horloges
-- Merk, Model, Type, Prijs, Materiaal, Gewicht, Releasedatum
-- *********************************************************************************

CREATE TABLE Horloges
(
    Id                  SMALLINT        UNSIGNED    NOT NULL    AUTO_INCREMENT
   ,Merk                VARCHAR(50)                 NOT NULL
   ,Model               VARCHAR(50)                 NOT NULL
   ,Type                VARCHAR(25)                 NOT NULL
   ,Prijs               DECIMAL(10, 2)              NOT NULL
   ,Materiaal           VARCHAR(50)                 NOT NULL
   ,Gewicht             DECIMAL(5, 2)               NOT NULL
   ,Releasedatum        DATE                        NOT NULL
   ,CONSTRAINT          PK_Horloges_Id              PRIMARY KEY     (Id)
) ENGINE=InnoDB;

-- Step: 07
-- *********************************************************************************
-- Doel : Vul de tabel Horloges met gegevens
-- *********************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           10-03-2026      VerhoefJ            Vulling Horloges
-- *********************************************************************************

INSERT INTO Horloges
(
    Merk
   ,Model
   ,Type
   ,Prijs
   ,Materiaal
   ,Gewicht
   ,Releasedatum
)
VALUES
('Rolex', 'Submariner', 'Dress', 10000.00, 'Staal', 150.00, '2023-01-01'),
('Omega', 'Speedmaster', 'Sport', 5000.00, 'Staal', 120.00, '2023-02-01'),
('Tag Heuer', 'Carrera', 'Sport', 3000.00, 'Staal', 130.00, '2023-03-01'),
('Seiko', 'Prospex', 'Sport', 800.00, 'Staal', 110.00, '2023-04-01'),
('Citizen', 'Eco-Drive', 'Casual', 200.00, 'Staal', 100.00, '2023-05-01'),
('Casio', 'G-Shock', 'Sport', 150.00, 'Kunststof', 90.00, '2023-06-01'),
('Fossil', 'Gen 5E', 'Casual', 250.00, 'Staal', 80.00, '2023-07-01'),
('Garmin', 'Fenix 6 Pro', 'Sport', 600.00, 'Staal', 140.00, '2023-08-01');