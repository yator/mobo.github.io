<?php
  include 'includes/header.php';
 ?>

<!-- page intro -->
<section class="intro_area">
    <div class="background_overlay"></div>
    <!-- <h2 class="f_size_35 f_600 text-white">Get In Touch</h2> -->
</section>

<!-- current page -->
<div class="breadcrumb_box">
    <div class="container d-flex align-items-center">
        <p class="text-capitalize"><span class="f_500">You are viewing:</span>&nbsp; <span class="ti-home"></span> <?=title;?></p>
    </div>
</div>

<!-- section: address -->
<section class="address_icons">
    <div class="container">
        <h2 class="t_color f_size_30 f_600 l_height_30 mb_50 text-center"><span class="t_color_blue">Let's</span> Meet</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="contact_icon_box">
                    <div class="c_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon8.png">
                    </div>
                    <h3 class="t_color f_size_20 f_500">Give us a call</h3>
                    <p>+254719792691,+254715672281</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact_icon_box">
                    <div class="c_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon7.png">
                    </div>
                    <h3 class="t_color f_size_20 f_500">We're on the map</h3>
                    <p> ELyon apartment, Kasarani, Nairobi</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact_icon_box">
                    <div class="c_icon">
                        <img src="assets/images/icon_shape.png">
                        <img class="icon" src="assets/images/icon9.png">
                    </div>
                    <h3 class="t_color f_size_20 f_500">Send us an Email</h3>
                    <p>info@mobotech.com</p>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>

<!--
 ===== section: contact_us =====
 -->
<section class="contact_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_info_box">
                    <h2 class="t_color f_size_20 f_500">Office Address</h2>
                    <p>P.O BOX 3224, G.P.O NAIROBI</p>
                    <h2 class="t_color f_size_20 f_500">Contact Info</h2>
                    <p>Phone: +254719792691,+254715672281</p>
                    <p>Email: info@mobotech.com, duplexltd09@gmail.com</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="message_box">
                    <form method="POST" action="#" id="form">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="*Full Name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="*Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="subject" placeholder="*Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="7" name="message" placeholder="*Write Us" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="m-btn btn-theme mt-3" type="submit" name="submit" value="Message" />
                        </div>
                    </form>
                    <?php
                 // form messages.
                   if(isset($_GET["success"])) {
                      if($_GET["success"] == -1) {
                         echo "<div class=\"alert alert-danger
                         alert-dismissible\" role=\"alert\">*All fields
                         are required. <button type=\"button\"
                         class=\"close\" data-dismiss=\"alert\"
                         aria-label=\"Close\"><span
                         aria-hidden=\"true\">&times;</span></button>
                         </div>";
                     }

                     if($_GET["success"] == 0) {
                         echo "<div class=\"alert alert-danger
                         alert-dismissible\" role=\"alert\">Invalid email
                         address. <button type=\"button\" class=\"close\"
                         data-dismiss=\"alert\" aria-label=\"Close\"><span
                         aria-hidden=\"true\">&times;</span></button>
                         </div>"; 
                    }

                    if($_GET["success"] == 1) {
                        echo "<div class=\"alert alert-success
                        alert-dismissible\" role=\"alert\">
                        <strong>Thanks!</strong> Your message has been
                        sent successfully. <button type=\"button\"
                        class=\"close\" data-dismiss=\"alert\"
                        aria-label=\"Close\"> <span
                        aria-hidden=\"true\">&times;</span> </button>
                        </div>";
                    }
                 }// end if
                ?>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>

<?php
  include 'includes/footer.php';
 ?>
