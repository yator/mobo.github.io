<?php
  include 'includes/header.php';
?>

<!-- 404 error message -->
<section class="page-not-found">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                <img class="img-fluid" src="assets/images/error.png">
                <h3 class="f_600">Page not found.</h3>
                <a class="m-btn btn-theme" href="<?= base_url;?>"><span class="ti-angle-double-left"></span> Back to Home <i class="lni lni-arrow-right"></i></a>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>

<?php
   include 'includes/footer.php';
 ?>
