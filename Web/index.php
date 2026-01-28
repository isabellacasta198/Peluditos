<!DOCTYPE html>
<html lang="es">
  <?php 
    include_once '../View/Partials/head.php';
    include_once '../Library/helpers.php'; 
  ?>
  <body>
    <div class="hero_area">
      <!-- Header -->
      <header class="header_section">
        <div class="container-fluid">
          <?php include_once '../View/Partials/sb-topnav.php'; ?>
        </div>
      </header>
      <!-- Slider -->
      <?php include_once '../View/Partials/slider.php'; ?>
    </div> 

    <?php  
      if (isset($_GET['module'])) {
          resolve();
      } else {
          // include_once '../View/Partials/services.php';
          include_once '../View/Partials/info_section.php';
          include_once '../View/Partials/map_section.php';
      }
    ?>

    <!-- Footer -->
    <?php include_once '../View/Partials/footer.php'; ?>

    <!-- JS aquí -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    

    <!-- JS Vendor -->
    <script src="/Vet-CSII/assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery Mobile Menu --> 
    <script src="/Vet-CSII/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins --> 
    <script src="/Vet-CSII/assets/js/owl.carousel.min.js"></script>
    <script src="/Vet-CSII/assets/js/slick.min.js"></script>

    <!-- One Page, Animated-Headline --> 
    <script src="/Vet-CSII/assets/js/wow.min.js"></script>
    <script src="/Vet-CSII/assets/js/animated.headline.js"></script>
    <script src="/Vet-CSII/assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky --> 
    <script src="/Vet-CSII/assets/js/jquery.nice-select.min.js"></script>
    <script src="/Vet-CSII/assets/js/jquery.sticky.js"></script>

    <!-- Contact js --> 
    <script src="/Vet-CSII/assets/js/contact.js"></script>
    <script src="/Vet-CSII/assets/js/jquery.form.js"></script>
    <script src="/Vet-CSII/assets/js/jquery.validate.min.js"></script>
    <script src="/Vet-CSII/assets/js/mail-script.js"></script>
    <script src="/Vet-CSII/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery --> 
    <script src="/Vet-CSII/assets/js/plugins.js"></script>
    <script src="/Vet-CSII/assets/js/main.js"></script>

    <!-- DataTables y SweetAlert (agregados por ti) -->
    <script src="js/datatables.min.js"></script>
    <script src="js/sweet_alert.min.js"></script>
  </body>
</html>
