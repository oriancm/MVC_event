<?php

class db
{
    private $host = "localhost";
    private $dbname = "mvc_event";
    private $user = "root";
    private $password = "";

    public function connexion()
    {
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
            return $PDO;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
            }
}

$db = new db();
print_r($db->connexion());