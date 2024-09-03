<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../Assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="../Assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="../Assets/css/owl.theme.default.min.css">

    <link href="../Assets/css/templatemo-pod-talk.css" rel="stylesheet">
</head>

<body>
    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="text-center mb-5 pb-2">
                        <div class="container">
                            <a class="navbar-brand me-lg-5 me-0" href="../index.php">
                                <img src="../images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk">
                            </a>
                        </div>
                        <form action="../category.php" method="post">
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" id="category_name" name="category_name" placeholder="Enter category name" required>
                            </div>

                            <div class="form-group">
                                <button type="submit">Create Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>