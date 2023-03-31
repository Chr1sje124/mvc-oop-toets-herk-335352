<?php

class ufcModel
{

    private $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function getUfc()
    {
        $sql = 'SELECT Id, Name, Ranking, Length, Weight, Age, WinsByKnockout FROM Voetballers;';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}