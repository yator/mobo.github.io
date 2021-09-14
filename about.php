<?php
  include "includes/header.php";
?>

<!-- page intro -->
<section class="intro_area">
    <div class="background_overlay"></div>
    <!-- <h2 class="f_size_35 f_600 text-white">Who We Are</h2> -->
</section>

<!-- current page -->
<div class="breadcrumb_box">
    <div class="container d-flex align-items-center">
        <p class="text-capitalize"><span class="f_500">You are viewing:</span>&nbsp; <span class="ti-home"></span> <?=title;?></p>
    </div>
</div>


    <!--
    ======= section: portfolio ======
    -->
    <section class="section_portfolio_gallery">
        <div class="container">
            <h2 class="f_size_30 f_600 l_height_40 t_color mb_70 text-center"><span class="t_color_blue">About Us</span></h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="assets/images/m2.jpg" width="240" height="240" class="card-img-top rounded" alt="project_1">
                        <div class="img_hover_content p-4">
                            <div class="border_shape">
                                <h6>Our Mission</h6>
                                <p>To Offer the best possible business process  solutions for all business segments , with positive orientation that align with business objectives for each and every enterprise structure.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- column -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="assets/images/v2.jpg" width="240" height="240" class="card-img-top rounded" alt="project_2">
                        <div class="img_hover_content p-4">
                            <div class="border_shape">
                                <h6>Our Vission</h6>
                                <p>Endavor to make Mobotech a Trusted Business Solutions</p>
                            </div>
                        </div>
                    </div>
                </div><!-- column -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="assets/images/goal.jpg" width="240" height="240" class="card-img-top rounded" alt="project_3">
                        <div class="img_hover_content p-4">
                            <div class="border_shape">
                                <h6>Our Goal</h6>
                                <p>Solve operations challenges, simplify workflow, help customers with more products and services and become the most trustable IT company globally.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- column -->
            </div><!-- row closed -->
        </div><!-- container closed -->
    </section>
<!--
==== section: about ====
-->
<section class="section_about_us text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about_img">
                    <img src="assets/images/featured_img.png" alt="featured_software_img" class="img-fluid" data-aos="fade-right">
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 d-flex align-items-center pl-lg-0" data-aos="fade-left">
                <div class="about_content">
                <h2 class="f_size_30 f_600 l_height_40 mb_30">The professionals at Mobotech have a commendable ERP experience in domains such as:</h2>
                        <p>Manufacturing, contracting, sales & distribution, retail, project management, finance, services, logistics, HR & Payroll, warehouse management, and more. Mobotech follows unique implementation methodology which makes each and 
every project a great success and leads to a customer satisfaction story. Mobotech takes cares of each and every aspect and follows continuous support process to make each customer happy.</p>
                       <a href="<?= base_url;?>contact.php" class="m-btn btn-white mt-3">Let's Talk <i class="lni lni-arrow-right"></i> <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
 ==== section: counter_area ====
 -->
<section class="counter_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon10.png">
                    <h3 class="t_color f_size_30 f_600">1</h3>
                    <p class="f_size_17">Partners</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon11.png">
                    <h3 class="t_color f_size_30 f_600">1</h3>
                    <p class="f_size_17">Projects Delivered</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon12.png">
                    <h3 class="t_color f_size_30 f_600">1+</h3>
                    <p class="f_size_17">Satisfied Clients</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-3 col-6 text-center">
                <div class="counter_box">
                    <img src="assets/images/icon13.png">
                    <h3 class="t_color f_size_30 f_700">2+</h3>
                    <p class="f_size_17">Meetings</p>
                </div>
            </div><!-- columns -->
        </div>
    </div>
</section>

<!--
 ===== section: team_members =====
 -->
<!-- <section class="team_members">
    <div class="container">
        <h2 class="t_color f_size_30 f_600 l_height_30 mb_70 text-center"><span class="t_color_blue">Faces behind</span> our success</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="member_box">
                    <img src="assets/images/member_1.jpeg" class="w-100">
                    <div class="member_info">
                        <h3 class="f_500 t_color">Abel Yator</h3>
                        <h5>CEO</h5>
                    </div>
                    <div class="member_hover_content">
                        <h3 class="f_500">Abel Yator</h3>
                        <h5>CEO</h5>
                        <h5>IIT, Roorkee</h5>
                    </div>
                </div>
            </div><!-- column -->

            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="member_box">
                    <img src="assets/images/member_2.jpeg" class="w-100">
                    <div class="member_info">
                        <h3 class="f_500 t_color">collins koech</h3>
                        <h5>CFO</h5>
                    </div>
                    <div class="member_hover_content">
                        <h3 class="f_500">Collins Koech</h3> 
                        <h5>CFO</h5>
                        <h5>ExCDACian</h5>
                    </div>
                </div>
            </div><!-- column -->


          
        <!-- </div>
    </div>
</section> --> 

<?php
  include "includes/footer.php";
 ?>
