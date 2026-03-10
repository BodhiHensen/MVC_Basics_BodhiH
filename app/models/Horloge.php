<?php

class Horloge
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllHorloges()
    {
        // We selecteren alle velden, inclusief Id voor de delete knop
        $sql = 'SELECT  Id
                       ,Merk
                       ,Model
                       ,Type
                       ,Prijs
                       ,Materiaal
                       ,CONCAT(Gewicht, " gram") as Gewicht
                       ,DATE_FORMAT(Releasedatum, "%d/%m/%Y") as Releasedatum
                
                FROM   Horloges

                ORDER BY Prijs DESC'; // Laten we sorteren op de duurste horloges bovenaan

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        $sql = "DELETE FROM Horloges WHERE Id = :Id";
        $this->db->query($sql);
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}