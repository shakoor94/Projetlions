<?php
require_once 'database.php';

function getProducts(): array
{
    $db = connect();

    $query = $db->query('SELECT * FROM `products`');

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

function getProductsByCategory(int $categoryId): array 
{
    $db = connect();

    $query = $db->prepare(
        'SELECT *
        FROM `products`
        WHERE `category_id` = ?'
    );

    $query->execute([$categoryId]);

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}


function getProductsBySubCategory(int $subcategoryId): array 
{
    $db = connect();

    $query = $db->prepare(
        'SELECT *
        FROM `products`
        WHERE `subcategory_id` = ?'
    );

    $query->execute([$subcategoryId]);

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

function getProductsByArticle(int $articleId): array
{$db = connect();

    $query = $db->prepare(
        'SELECT *
        FROM `products`
        WHERE `article_id` = ?'
    );

    $query->execute([$articleId]);

    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    return $data;



}