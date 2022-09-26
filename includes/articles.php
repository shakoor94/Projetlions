<?php
include_once 'database.php';

function getArticle(int $id): array 
{
    $db = connect();

    $query = $db->prepare(
        'SELECT *
        FROM `articles`
        WHERE `article_id` = ?'
    );

    $query->execute([$id]);

    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}

