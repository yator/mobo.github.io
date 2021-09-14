<?php
include 'includes/constants.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Sedulous Softtech is a leading IT consulting and software development company offering complete software solutions, services and products for mobile and web platforms.">
    <link rel="canonical" href="https://seduloussofttech.in/">
    <title>ERP Company | MoboTech</title>
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

    <!--
    ========== banner area ========
    -->
    <section class="hero_section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="hero_content" data-aos="fade-right">
                        <h2 class="f_600">  CORPORATE OVERVIEW </h2>
                        <p class="f_size_18 l_height_30"> MoboTech is found on Structured methodologies of ERP experience in implementation, customization and training, that makes it possible to cater to any size of business across continents in various domains. 
                            With a remarkable footprints in the area of ERP implementation.</p>
                        <a href="services.php" class="m-btn btn-theme mt-4">Learn More <span class="ti-arrow-down"></span></a>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center">
                    <div class="hero_img" data-aos="fade-left">
                        <img src="assets/images/hero.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
     ========= section: services ==========
     -->
    <section class="section_services_area" id="services">
        <div class="container">
            <h2 class="t_color f_size_30 f_600 l_height_35 mb_70" data-aos="fade-up"><span class="t_color_blue">We create robust and</span> <br>scalable software solutions</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="service_box">
                        <div class="s_icon">
                            <img src="assets/images/icon_shape.png">
                            <img class="icon" src="assets/images/crm1.jpeg" width="40" height="40">
                        </div>
                        <h3 class="f_600">CRM</h3>
                    <!-- <p>Using the most advance tools and technologies, we build dynamic and functional web applications that helps you creates an outstanding web presence for your business growth.</p> -->
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/accounting1.jpeg" width="40" height="40">
                    </div>
                    <h3 class="f_600">Accounting</h3>
                    <!-- <p>With the help of our some data analytic products you can play with huge data and create different type of reports. Data tool can help you to get desired automatic and real-time reports.</p> -->
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/manufacturing1.jpeg" width="40" height="40">
                    </div>
                    <h3 class="f_600">Manufacturing</h3>
                    <!-- <p>Our IoT products are quite unique along with very affordable price. We are best at sensor based IoT's . You got multiple devices and tensed due to their communication? let our experts help you.</p> -->
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/sales1.jpeg" width="40" height="40">
                    </div>
                    <h3 class="f_600">Sales</h3>
                    <!-- <p>Our IoT products are quite unique along with very affordable price. We are best at sensor based IoT's . You got multiple devices and tensed due to their communication? let our experts help you.</p> -->
                </div>
                </div>
                <a href="<?= base_url; ?>services.php" class="m-btn btn-theme mt-5 mx-auto" data-aos="fade-down">All Services <span class="ti-arrow-right"></span></a>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <!--
     ======== section: about_us ========
    -->
    <section class="section_about_us text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <div class="about_img">
                        <img src="assets/images/featured_img.png" alt="featured_software_image" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 d-flex align-items-center pl-lg-0" data-aos="fade-left">
                    <div class="about_content">
                       <h2 class="f_size_30 f_600 l_height_40 mb_30">The professionals at Mobotech have a commendable ERP experience in domains such as:</h2>
                        <p>Manufacturing, contracting, sales & distribution, retail, project management, finance, services, logistics, HR & Payroll, warehouse management, and more. Mobotech follows unique implementation methodology which makes each and 
every project a great success and leads to a customer satisfaction story. Mobotech takes cares of each and every aspect and follows continuous support process to make each customer happy.</p>
                        <a href="<?= base_url; ?>contact.php" class="m-btn btn-white mt-3">Let's Talk <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    ======= section: featured_services =======
    -->
    <section class="section_featured_services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="featured_services_content">
                        <h2 class="f_size_30 f_600 l_height_30 t_color mb_50" data-aos="fade-up"><span class="t_color_blue">What can we</span> do for you ?</h2>
                        <!--Nav tabs-->
                        <ul class="nav nav-tabs mb_30" role="tablist">
                            <li class="nav-item">
                                <a href="#tab-content-1" class="nav-link active pl-0" data-toggle="tab" role="tab">ERP</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab-content-2" class="nav-link" data-toggle="tab" role="tab">Consultancy</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#tab-content-3" class="nav-link" data-toggle="tab" role="tab">Android</a>
                            </li> -->
                        </ul>

                        <!--Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-content-1" role="tabpanel">
                                <p>We design ERP  as per your need. We have developed some ERP as manufacturing, contracting, sales & distribution, retail, project management, finance, 
                                    services, logistics, HR & Payroll, warehouse management, and more.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-content-2" role="tabpanel">
                                <p>Are Your Process unstructured?do you spend much of your time on routeen activities?worry no more,we at Mobotech are specialist in business process,streamlining and automation</p>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="assets/images/featured_img2.svg" class="img-fluid rounded" data-aos="zoom-in-left">
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>


    <!--
    ===== section: clients =====
    -->
    <section class="section_clients">
        <div class="container">
            <h2 class="s_title t_color f_size_30 f_600 l_height_30 mb_50 text-center"><span class="t_color_blue">We work</span> for them</h2>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="client_logos">
                        <li>
                            <img src="assets/images/ZPCL-LOGO.png" data-aos="zoom-in">
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    ?>