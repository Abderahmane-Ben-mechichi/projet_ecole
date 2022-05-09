<?php
class config{

    public static function getConnexion()
    {
        try {
            $pdo = new PDO('mysql:host=localhost:3307;dbname=', 'pronote', 'pronote');
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
        return $pdo;
    }
}
