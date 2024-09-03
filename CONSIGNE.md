Bonjour à tous !

Pour le TP d'aujourd'hui, vous devez créer un blog.
Vous allez donc devoir insérer des articles de blog et des catégories directement depuis PHPMyAdmin (via le bouton insérer) puis afficher la liste des articles du plus récent au plus vieux.

Vous allez devoir ajouter une recherche par titre d'article, par contenu, par catégorie auteur et date de publication.

Vous allez devoir également faire une page qui affiche l'article de blog uniquement (qui affichera le content, car il ne sera pas affiché sur la page d'accueil)

Si vous avez des questions, n'hésitez pas !

Bonne journée,

Home page only the list of article with out content.

DB Blog
-Table Article. id, title, content, category_id, author_id,date_pub
-Table Category. id, name
-Table Author. id,firstname, lastname,phone,addresse

-showArticle(recent one first) DONE
-searchTitle($title) DONE
-searchContent($content) DONE
-searchCategory($category) DONE 
-searchAuthor($author) DONE
-searchPublicationDate($date)

-getArticle(): title, content

LES COMMADES SQL POUR CREATION DES TABLE
CREATE TABLE category(
id int AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL
);

CREATE TABLE author(
id int AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL,
dob DATE,
phone INT ,
address TEXT
);

CREATE TABLE article (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50) NOT NULL,
content TEXT NOT NULL,
date_pub DATE,
category_id INT,
author_id INT,
FOREIGN KEY (category_id) REFERENCES category(id),
FOREIGN KEY (author_id) REFERENCES author(id)
);
