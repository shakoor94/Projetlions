<?php
function connect(): PDO
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=projet_lions;charset=utf8', 'projet_lions', 'projetlions');
    } catch (PDOException $e) {
        $db = false;
    }    

    return $db;
}