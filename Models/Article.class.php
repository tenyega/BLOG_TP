<?php
class Article extends Database
{
    protected $base = "SELECT article.*, author.id , author.phone, author.address, author.dob, CONCAT(author.firstname, ' ', author.lastname) AS author , category.id, category.name AS category
    FROM article 
    LEFT JOIN author ON article.author_id = author.id 
    LEFT JOIN category ON article.category_id = category.id ";

    public function getAll()
    {
        $request = $this->db->prepare($this->base . "ORDER BY date_pub DESC");
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getBYID($id)
    {
        $request = $this->db->prepare($this->base . "WHERE article.id = :id");
        $request->bindParam(':id', $id, PDO::PARAM_INT);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function getByTitle($title)
    {
        $request = $this->db->prepare($this->base . " WHERE LOWER(article.title) LIKE :title");
        $titleParam = '%' . strtolower($title) . '%';
        $request->bindParam(':title', $titleParam, PDO::PARAM_STR);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function getContent($content)
    {
        $request = $this->db->prepare($this->base . " WHERE LOWER(article.content) LIKE :content");
        $contentParam = '%' . strtolower($content) . '%';
        $request->bindParam(':content', $contentParam, PDO::PARAM_STR);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function getCategories()
    {
        $request = $this->db->prepare("SELECT * FROM category ORDER BY name");
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getCategory($id)
    {
        $request = $this->db->prepare($this->base . "WHERE article.category_id = :id");
        $request->bindParam(':id', $id, PDO::PARAM_INT);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function getAuthor($author)
    {
        $request = $this->db->prepare($this->base . "WHERE LOWER(author.firstname)  LIKE :author OR LOWER(author.lastname)  LIKE :author");
        $authorParam = '%' . strtolower($author) . '%';
        $request->bindParam(':author', $authorParam, PDO::PARAM_STR);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function getDate_pub($date_pub)
    {
        $request = $this->db->prepare($this->base . " WHERE article.date_pub LIKE :date_pub");
        $date_pubParam = '%' . $date_pub . '%';
        $request->bindParam(':date_pub', $date_pubParam, PDO::PARAM_STR);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function addCategory($category_name)
    {
        $request = $this->db->prepare("INSERT INTO `category` (`name`) VALUES (:cat_name)");
        $request->execute([
            'cat_name' => $category_name
        ]);
        return "success";
    }

    public function deleteArticle($deleteid)
    {
        $request = $this->db->prepare("DELETE FROM article WHERE id = :id");
        $request->bindParam(':id', $deleteid, PDO::PARAM_INT);
        $request->execute();
        header("Location: index.php");
        exit;
    }
}
