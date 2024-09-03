<?php
require_once('./Models/Database.class.php');
require_once('./Models/Article.class.php');

$modelArticle = new Article;
$articles = $modelArticle->getAll();
$categories = $modelArticle->getCategories();

if (!empty($_GET['title'])) {
    $articles = $modelArticle->getByTitle($_GET['title']);
} elseif (!empty($_GET['content'])) {

    header("Location: article.php?content={$_GET['content']}");
} elseif (!empty($_GET['category_id'])) {

    header("Location: article.php?category_id={$_GET['category_id']}");
} elseif (!empty($_GET['author'])) {

    header("Location: author.php?author={$_GET['author']}");
} elseif (!empty($_GET['date_pub'])) {

    header("Location: article.php?date_pub={$_GET['date_pub']}");
}

require_once('./Views/home.php');
