<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/fonts/fonts.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/homepage.css') ?>">
    <title>Legendary</title>
</head>

<body>
    <header>
        <a href="<?= site_url('/'); ?>" class="logo"><i class="bi bi-airplane-engines-fill"></i><span> LEGENDARY</span></a>
        <ul class="navbar mt-3" id="navbar">
            <li><a href="#" class="button active">Home</a></li>
            <li><a href="#" class="button">About Us</a></li>
            <li><a href="#" class="button">Service</a></li>
            <li><a href="#" class="button">Blog</a></li>
            <li><a href="#" class="button">Contact</a></li>
        </ul>

        <div class="main">
            <a href="<?= site_url('authentication/login'); ?>" class="user"><i class="bi bi-person-fill"></i>Login</a>
            <div class="bi bi-list" id="menu-icon"></div>
        </div>
    </header>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/homepage.js') ?>"></script>
</body>

</html>