<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Details </title>
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
            <a class="navbar-brand me-lg-5 me-0" href="index.php">
                <img src="images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
            </a>
        </div>
        <h1 class="title"> Detail of the Author</h1>

        <?php if (!empty($authorDetails)): ?>

            <div class="article-grid-detail">
                <?php foreach ($authorDetails as $authorDetail) : ?>

                    <div class="article-card">
                        <h2 class="article-title"><?= strtoupper($authorDetail['author']); ?></h2>
                        <p class="article-meta">
                            <span class="article-date">Born on <?= $authorDetail['dob']; ?></span>
                        </p>
                        <p class="article-content">Phone no <?= $authorDetail['phone']; ?></p>
                        <p class="article-content">Address : <?= $authorDetail['address']; ?></p>
                        <p class="article-category">Books written : <?= $authorDetail['title']; ?></p>

                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h1 class="recordError"> No Records Found</h1>
            <?php endif ?>

    </section>
</body>

</html>