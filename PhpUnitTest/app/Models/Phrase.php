<?php

namespace App\Models;

class Phrase extends Model
{
    public function getAllPhrases() {

        $query = 'SELECT * FROM `strings` ORDER BY `strings`.`string_id` DESC';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();

    }

    public function store($phrase) {
        $stmt = $this->db->prepare("INSERT INTO strings (string_data) VALUES (:phrase)");
        $stmt->bindParam(':phrase', $phrase);
        $stmt->execute();
    }

}