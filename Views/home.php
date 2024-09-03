<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to My Blog</title>
    <link rel="stylesheet" href="Assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./Assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="./Assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="./Assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="./Assets/css/owl.theme.default.min.css">

    <link href="./Assets/css/templatemo-pod-talk.css" rel="stylesheet">
</head>

<body>


    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="text-center mb-5 pb-2">
                        <div class="container">
                            <a class="navbar-brand me-lg-5 me-0" href="index.php">
                                <img src="images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
                            </a>
                        </div>
                        <h1 class="text-white">Welcome to My Blog</h1>
                        <div class="navbar">

                            <form action="">
                                <label>
                                    Search a Title
                                    <input type="text" name="title" value="<?= $_GET['title'] ?? '' ?>">
                                </label>
                                <button type="submit" class="btn custom-btn smoothscroll mt-3">Search</button>
                            </form>
                            <form action="">
                                <label>
                                    Search Content
                                    <input type="text" name="content" value="<?= $_GET['content'] ?? '' ?>">
                                </label>
                                <button type="submit" class="btn custom-btn smoothscroll mt-3">Search</button>
                            </form>
                            <form action="">
                                <label>
                                    Search By Category
                                    <select name="category_id">
                                        <?php foreach ($categories as $category) : ?>
                                            <option value="<?= $category['id'] ?>" <?= !empty($_GET['category_id']) && $_GET['category_id'] == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </label>
                                <button type="submit" class="btn custom-btn smoothscroll mt-3">Search</button>
                            </form>
                            <a href="Views/createCategory.php"> Create New Category ?</a>
                            <form action="">
                                <label>
                                    Search By Author
                                    <input type="text" name="author" value="<?= $_GET['author'] ?? '' ?>">
                                </label>
                                <button type="submit" class="btn custom-btn smoothscroll mt-3">Search</button>
                            </form>
                            <form action="">
                                <label for="date_pub">
                                    Search using Publication Date
                                    <input type="date" name="date_pub" value="<?= $_GET['date_pub'] ?? '' ?>">
                                </label>
                                <!-- <button type="submit"><i class="fas fa-search"></i> Search</button> -->
                                <button type="submit" class="btn custom-btn smoothscroll mt-3">Search</button>
                            </form>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php if (!empty($articles)): ?>

        <div class="article-grid">
            <?php foreach ($articles as $article) : ?>
                <a href="article.php?id=<?= $article['id'] ?>" class="article-link">
                    <div class="article-card">
                        <h3 class="article-title"><?= $article['title'] ?></h3>
                        <h3 class="article-author">Author :- <?= $article['author'] ?></h3><br>
                        <p class="article-date">Published On :- <?= $article['date_pub'] ?></p><br>
                        <p class="article-date">Category :- <?= $article['category'] ?></p>

                        <a href="article.php?deleteid=<?= $article['id'] ?>" class="article-link">Delete</a>

                    </div>
                </a>

            <?php endforeach ?>
        <?php else : ?>
            <h1 class="recordError"> No Records Found</h1>
        <?php endif ?>
        </div>
</body>

</html>