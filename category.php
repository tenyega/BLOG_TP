<?php

require_once('./Models/Database.class.php');
require_once('./Models/Article.class.php');



$modelArticle = new Article;

if (isset($_POST['category_name'])) {
    $articleInfos = $modelArticle->addCategory($_POST['category_name']);
}

if ($articleInfos === 'success') {
    require_once('./Views/categoryView.php');
}else {
    require_once('./Views/error.php');

}
