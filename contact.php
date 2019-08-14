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

    <!-- Container -->
    <div class="container">
      <!-- Page Title -->
      <h1 class="mt-4 mb-3">Contact</h1>
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <!-- End Breadcrumb -->

      <!-- Start Contact-->
     <div class="row">
       <div class="col-lg-8 mb-4">
         <h3>Send us a message</h3>
         <form name="sentMessage" id="contactForm" novalidate>
           <div class="control-group form-group">
             <div class="controls">
               <label>Full Name:</label>
               <input type="text" class="form-control" id="name" required data-validation-required-message="Please Enter Your Name">
               <p class="help-block"></p>
             </div>
           </div>

           <div class="control-group form-group">
             <div class="controls">
               <label>Phone Number:</label>
               <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please Enter Your Phone Number">
               <p class="help-block"></p>
             </div>
           </div>

           <div class="control-group form-group">
             <div class="controls">
               <label>Email Address:</label>
               <input type="email" class="form-control" id="email" required data-validation-required-message="Please Enter Your Email Address">
               <p class="help-block"></p>
             </div>
           </div>

           <div class="control-group form-group">
             <div class="controls">
               <label>Message:</label>
               <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please Enter Your Message" maxlength="250" style="resize: none;"></textarea>
               <p class="help-block"></p>
             </div>
           </div>

           <div id="success">
             <button type="submit" class="btn btn-primary" id="sendMessageButton" style="float: right;">Send Message</button>
           </div>
         </form>
       </div>
     </div>
       
      <!-- End Contact-->
    
    
  </div>
  <br>
    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
  </body>
</html>