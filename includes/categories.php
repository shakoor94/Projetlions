<?php
include_once 'database.php';

function getCategory(int $id): array 
{
    $db = connect();

    $query = $db->prepare(
        'SELECT *
        FROM `categories`
        WHERE `category_id` = ?'
    );

    $query->execute([$id]);

    $category = $query->fetch(PDO::FETCH_ASSOC);

    return $category;
}