<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php
  include "head.php";
  ?>
  <body>
    <!-- Start Navigation -->
    <?php
    include "header.php";
    ?>
    <!-- End Naviagation -->

    <section id="cta-section">    
     <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel" data-pause="false" data-interval="5000">
    <div class="carousel-inner" role="listbox">
      <!-- Slide One -->
      <div class="carousel-item active">
          <div class="img-container"><img src="img/evmwm.png"></div>
          
      </div>
      <!-- Slide Two -->
      <div class="carousel-item">
          <div class="img-container"><img src="img/blended.png"></div>
          <div class="mwm-logo"><img src="logo.png" style="width:80px; opacity:0.7;"></div>
      </div>
      <!-- Slide Three -->
      <div class="carousel-item">
          <div class="img-container"><img src="img/wheel.jpg"></div>
          <div class="mwm-logo"><img src="logo.png" style="width:80px; opacity:0.7;"></div>
      </div>

    </div>
  </div>
  </section>
    <section id="services-section">
    <!-- Start Container -->
    <div class="container">
      <div class="my-4">
      <h2>Our Services</h2>

      </div>  
      <!--Marketing Icons section -->
      <h3 class="my-4 font-grey">Management</h3>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Operation Management</h4>
            <div class="card-body">
              <img src="img/stock/operation.jpg" width="100%" height="100%">
            </div>
            <div class="card-footer">
              <a href="services.php#operation-management" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Academic Management</h4>
            <div class="card-body">
              <img src="img/stock/academic.jpg" width="100%" height="100%">
            </div>
            <div class="card-footer">
              <a href="services.php#academic-management" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Performance Management</h4>
            <div class="card-body">
              <img src="img/stock/performance.jpg" width="100%" height="100%">
            </div>
            <div class="card-footer">
              <a href="services.php#performance-management" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>  
      </div>
      <!-- End Marketing Icons section -->

      <!--Services Icons section -->
      <h3 class="my-4 font-grey">Other Services</h3>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Audit & Evaluation</h4>
            <div class="card-body">
              <img src="img/stock/audit.jpg" width="100%" height="100%">
            </div>
            <div class="card-footer">
              <a href="services.php#audit" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Affiliation & Advisory</h4>
            <div class="card-body">
              <img src="img/stock/affiliate.jpg" width="100%" height="100%">
            </div>
            <div class="card-footer">
              <a href="services.php#affiliation" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div> 
      </div>
      <!-- End Services Icons section -->

    </div>
    <!-- End Container -->
  </section>
<!-- Contact Us Start -->
<section id="contact-section">

</section>
<!--  Contact Us End -->
    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
    
  </body>
</html>
