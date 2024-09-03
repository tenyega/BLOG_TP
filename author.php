<?php

require_once('./Models/Database.class.php');
require_once('./Models/Article.class.php');



$modelArticle = new Article;

if (isset($_GET['author'])) {
    $authorDetails = $modelArticle->getAuthor($_GET['author']);
}

require_once('./Views/author.php');
