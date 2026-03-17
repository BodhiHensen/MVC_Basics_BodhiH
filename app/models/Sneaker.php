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
        $sql = 'SELECT  Id
                       ,Merk
                       ,Model
                       ,Type
                
                FROM   Sneakers

                ORDER BY Merk ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        $sql = "DELETE FROM Sneakers WHERE Id = :Id";
        $this->db->query($sql);
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);
        return $this->db->execute();
    }

    public function create($data)
    {
        $sql = "INSERT INTO Sneakers (Merk, Model, Type) VALUES (:merk, :model, :type)";
        $this->db->query($sql);
        $this->db->bind(':merk', $data['merk'], PDO::PARAM_STR);
        $this->db->bind(':model', $data['model'], PDO::PARAM_STR);
        $this->db->bind(':type', $data['type'], PDO::PARAM_STR);
        return $this->db->execute();
    }

    public function getSneakerById($id)
    {
        $sql = 'SELECT Id, Merk, Model, Type FROM Sneakers WHERE Id = :id';
        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateSneaker($data)
    {
        $sql = "UPDATE Sneakers SET 
                    Merk = :merk,
                    Model = :model,
                    Type = :type
                WHERE Id = :id";

        $this->db->query($sql);
        $this->db->bind(':id', $data['id'], PDO::PARAM_INT);
        $this->db->bind(':merk', $data['merk'], PDO::PARAM_STR);
        $this->db->bind(':model', $data['model'], PDO::PARAM_STR);
        $this->db->bind(':type', $data['type'], PDO::PARAM_STR);

        return $this->db->execute();
    }
}
