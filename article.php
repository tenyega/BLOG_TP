<?php

require_once('./Models/Database.class.php');
require_once('./Models/Article.class.php');



$modelArticle = new Article;

if (isset($_GET['id'])) {
    $articleInfos = $modelArticle->getBYID($_GET['id']);
} elseif (isset($_GET['content'])) {
    $articleInfos = $modelArticle->getContent($_GET['content']);
} elseif (isset($_GET['category_id'])) {
    $articleInfos = $modelArticle->getCategory($_GET['category_id']);
} elseif (isset($_GET['date_pub'])) {
    $articleInfos = $modelArticle->getDate_pub($_GET['date_pub']);
}

require_once('./Views/articleView.php');
