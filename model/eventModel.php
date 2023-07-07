<?php

class eventModel {
    private $PDO;
    public function __construct() {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';
        $db = new db();
        $this->PDO = $db->connexion();
    }
    public function insert($nom, $date, $adresse, $categorie_id) {
        $stmt = $this->PDO->prepare('INSERT INTO evenement VALUES(null, :nom, :date, :adresse, :category_id)');
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':category_id', $categorie_id);
        return ($stmt->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($id) {
        $stmt = $this->PDO->prepare('SELECT e.id, e.nom, date, adresse, c.nom FROM evenement e INNER JOIN categorie c ON e.categorie_id = c.id WHERE e.id = :id limit 1');
        $stmt->bindParam(':id', $id);
        return ($stmt->execute()) ? $stmt->fetch() : false;
    }
    public function indexEvents() {
        $stmt = $this->PDO->prepare('SELECT * FROM evenement');
        return ($stmt->execute()) ? $stmt->fetchAll(): false;
    }

    public function indexCategories() {
        $stmt = $this->PDO->prepare('SELECT * FROM categorie');
        return ($stmt->execute()) ? $stmt->fetchAll(): false;
    }

    public function update($id, $nom, $date, $adresse) {
        $stmt = $this->PDO->prepare('UPDATE evenement SET nom = :nom, date = :date, adresse = :adresse WHERE id = :id');
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':adresse', $adresse);
        return ($stmt->execute()) ? $id : false;
    }
    public function delete($id) {
        $stmt =  $this->PDO->prepare('DELETE FROM evenement WHERE id = :id');
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
