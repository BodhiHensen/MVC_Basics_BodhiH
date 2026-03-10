<?php

class Sneaker
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllSneakers()
    {
        // Let op: 'Id' toegevoegd aan de select!
        $sql = 'SELECT  Id
                       ,Merk
                       ,Model
                       ,Type
                
                FROM   Sneakers

                ORDER BY Merk ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    // Nieuwe delete functie
    public function delete($Id)
    {
        $sql = "DELETE FROM Sneakers WHERE Id = :Id";
        $this->db->query($sql);
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}