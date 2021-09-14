 <?php
  include 'includes/header.php';
 ?>

 <!-- page intro -->
 <section class="intro_area">
     <div class="background_overlay"></div>
     <!-- <h2 class="f_size_35 f_600 text-white">Recent Work</h2> -->
 </section>

 <!-- current page -->
 <div class="breadcrumb_box">
     <div class="container d-flex align-items-center">
         <p class="text-capitalize"><span class="f_500">You are viewing:</span> &nbsp;<span class="ti-home"></span> <?=title;?></p>
     </div>
 </div>

 <!--
 ========= section: portfolio_gallery ========
 -->
 <section class="section_portfolio_gallery">
     <div class="container">
         <h2 class="f_size_30 f_600 l_height_40 t_color mb_70 text-center"><span class="t_color_blue">Our current</span><br> Project</h2>
         <div class="row">
         <div class="col-lg-4 col-md-6 " data-aos="fade-up" >
                <div class="service_box">
                    <div class="s_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/ZPCL-LOGO.png" width="60" height="60">
                    </div>
                    <h3 class="f_600">Zion Petrolux Consultants Ltd</h3>
                    <p>Inventory,Purchase,Accounting,Sales, CRM and E-Signature.</p>
                </div>
            </div>
             
         </div><!-- row closed -->
     </div><!-- container closed -->
 </section>

 <?php
  include 'includes/footer.php';
 ?>
