<?php

class Zangeres
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllZangeressen()
    {
        $sql = 'SELECT Id
                       ,Naam
                       ,Genre
                       ,Land
                       ,Vermogen
                       ,CONCAT("€", FORMAT(Vermogen, 2)) as VermogenFormatted
                       ,CONCAT(Leeftijd, " jaar") as Leeftijd
                FROM   Zangeressen
                ORDER BY Vermogen DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        $sql = "DELETE FROM Zangeressen WHERE Id = :Id";
        $this->db->query($sql);
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);
        return $this->db->execute();
    }

    public function create($data)
    {
        $sql = "INSERT INTO Zangeressen (Naam, Genre, Land, Leeftijd, Vermogen) 
                VALUES (:naam, :genre, :land, :leeftijd, :vermogen)";

        $this->db->query($sql);

        $this->db->bind(':naam', $data['naam'], PDO::PARAM_STR);
        $this->db->bind(':genre', $data['genre'], PDO::PARAM_STR);
        $this->db->bind(':land', $data['land'], PDO::PARAM_STR);
        $this->db->bind(':leeftijd', $data['leeftijd'], PDO::PARAM_INT);
        $this->db->bind(':vermogen', $data['vermogen'], PDO::PARAM_STR);

        return $this->db->execute();
    }

    public function getZangeresById($id)
    {
        $sql = 'SELECT Id
                       ,Naam
                       ,Genre
                       ,Land
                       ,Leeftijd
                       ,Vermogen
                FROM Zangeressen
                WHERE Id = :id';

        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);

        return $this->db->single();
    }

    public function updateZangeres($data)
    {
        $sql = "UPDATE Zangeressen SET 
                    Naam = :naam,
                    Genre = :genre,
                    Land = :land,
                    Leeftijd = :leeftijd,
                    Vermogen = :vermogen
                WHERE Id = :id";

        $this->db->query($sql);
        $this->db->bind(':id', $data['id'], PDO::PARAM_INT);
        $this->db->bind(':naam', $data['naam'], PDO::PARAM_STR);
        $this->db->bind(':genre', $data['genre'], PDO::PARAM_STR);
        $this->db->bind(':land', $data['land'], PDO::PARAM_STR);
        $this->db->bind(':leeftijd', $data['leeftijd'], PDO::PARAM_INT);
        $this->db->bind(':vermogen', $data['vermogen'], PDO::PARAM_STR);

        return $this->db->execute();
    }
}
