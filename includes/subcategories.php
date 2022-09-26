<?php

include_once 'database.php';

function getSubCategory(int $id): array 
{
    $db = connect();

    $query = $db->prepare(
        'SELECT *
        FROM `subcategories`
        WHERE `subcategory_id` = ?'
    );

    $query->execute([$id]);

    $subcategory = $query->fetch(PDO::FETCH_ASSOC);

    return $subcategory;
}