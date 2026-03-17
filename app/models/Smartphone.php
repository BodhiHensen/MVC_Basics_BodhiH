<?php

class Smartphone
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSmartphones()
    {
        $sql = 'SELECT  SMPS.Id
                       ,SMPS.Merk
                       ,SMPS.Model
                       ,SMPS.Prijs
                       ,SMPS.Geheugen
                       ,SMPS.Besturingssysteem
                       ,CONCAT(SMPS.Schermgrootte, " inch") as Schermgrootte
                       ,DATE_FORMAT(SMPS.Releasedatum, "%d/%m/%Y") as Releasedatum
                       ,CONCAT(SMPS.MegaPixels, " MP") as MegaPixels
                
                FROM   Smartphones as SMPS

                ORDER BY SMPS.Schermgrootte DESC
                        ,SMPS.Prijs DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        $sql = "DELETE FROM Smartphones WHERE Id = :Id";
        $this->db->query($sql);
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);
        return $this->db->execute();
    }

    public function create($data)
    {
        $sql = "INSERT INTO Smartphones (Merk, Model, Prijs, Geheugen, Besturingssysteem, Schermgrootte, Releasedatum, MegaPixels) 
                VALUES (:merk, :model, :prijs, :geheugen, :besturingssysteem, :schermgrootte, :releasedatum, :megapixels)";

        $this->db->query($sql);

        $this->db->bind(':merk', $data['merk'], PDO::PARAM_STR);
        $this->db->bind(':model', $data['model'], PDO::PARAM_STR);
        $this->db->bind(':prijs', $data['prijs'], PDO::PARAM_STR);
        $this->db->bind(':geheugen', $data['geheugen'], PDO::PARAM_INT);
        $this->db->bind(':besturingssysteem', $data['besturingssysteem'], PDO::PARAM_STR);
        $this->db->bind(':schermgrootte', $data['schermgrootte'], PDO::PARAM_STR);
        $this->db->bind(':releasedatum', $data['releasedatum'], PDO::PARAM_STR);
        $this->db->bind(':megapixels', $data['megapixels'], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function getSmartphoneById($id)
    {
        $sql = 'SELECT Id
                       ,Merk
                       ,Model
                       ,Prijs
                       ,Geheugen
                       ,Besturingssysteem
                       ,Schermgrootte
                       ,DATE_FORMAT(Releasedatum, "%Y-%m-%d") as Releasedatum
                       ,MegaPixels
                FROM Smartphones
                WHERE Id = :id';

        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);

        return $this->db->single();
    }

    public function updateSmartphone($data)
    {
        $sql = "UPDATE Smartphones SET 
                    Merk = :merk,
                    Model = :model,
                    Prijs = :prijs,
                    Geheugen = :geheugen,
                    Besturingssysteem = :besturingssysteem,
                    Schermgrootte = :schermgrootte,
                    Releasedatum = :releasedatum,
                    MegaPixels = :megapixels
                WHERE Id = :id";

        $this->db->query($sql);
        $this->db->bind(':id', $data['id'], PDO::PARAM_INT);
        $this->db->bind(':merk', $data['merk'], PDO::PARAM_STR);
        $this->db->bind(':model', $data['model'], PDO::PARAM_STR);
        $this->db->bind(':prijs', $data['prijs'], PDO::PARAM_STR);
        $this->db->bind(':geheugen', $data['geheugen'], PDO::PARAM_INT);
        $this->db->bind(':besturingssysteem', $data['besturingssysteem'], PDO::PARAM_STR);
        $this->db->bind(':schermgrootte', $data['schermgrootte'], PDO::PARAM_STR);
        $this->db->bind(':releasedatum', $data['releasedatum'], PDO::PARAM_STR);
        $this->db->bind(':megapixels', $data['megapixels'], PDO::PARAM_INT);

        return $this->db->execute();
    }
}
