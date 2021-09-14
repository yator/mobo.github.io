<?php
include 'includes/constants.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <title><?= ucfirst(title); ?> |MoboTech ltd. </title>
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/logo34.png">
    <!-- CSS & libraries -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/animation/aos.css" rel="stylesheet">
    <link href="assets/icons/themify-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="header_area">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="assets/images/logo34.png" class="sticky_logo" alt="logo" height="50" width="50">
                    <img src="assets/images/logo34.png" class="sticky_logo2" alt="logo" height="50" width="50">
                    MoboTech ltd.
                </a>
                <!-- toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse"><span class="ti-menu"></span></button>
                <!-- navbar links -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= base_url; ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url; ?>about.php" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url; ?>services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url; ?>portfolio.php" class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url; ?>contact.php" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>