<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareBoard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>">Home</a>
                <a class="nav-link" href="<?php echo ROOT_URL?>/shares">Shares</a>

            </div>
            <?php if(isset($_SESSION['is_logged_in'])):?>
            <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                <a class="nav-link "  href="<?php echo ROOT_URL;?>">Welcome <?php
                    if( isset($_SESSION['user_data']))
                        echo $_SESSION['user_data']['name'];
                    ?></a>
                <a class="nav-link" href="<?php echo ROOT_URL?>/users/logout">Logout</a>

            </div>
            <?php else:?>       <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                <a class="nav-link "  href="<?php echo ROOT_URL;?>/users/login">Login</a>
                <a class="nav-link" href="<?php echo ROOT_URL?>/users/register">Register</a>

            </div>

            <?php endif;?>
        </div>
    </div>
</nav>
</header>
<main>
<section class="py-5 text-center container">
    <div class="row">
        <?php Messages::display(); ?>
        <?php require($View); ?>

    </div>
    <!-- /.row -->

<!-- /.container -->
</main>
</body>
</html>