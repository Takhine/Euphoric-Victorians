 <!-- Start Navigation -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <!-- Container -->

      <div class="container">
        <!-- Nav Brand -->

        <img class="img-responsive" id="img-logo" src="logo.png">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>
        <!-- Links -->

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="training.php" class="nav-link">Training</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link" data-toggle="modal" data-target="#quote">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    <!-- End Navigation -->
      <!-- The Quote Modal -->
  <div class="modal fade" id="quote">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header dark-blue">
          <h4 class="modal-title text-white">Request Quote</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="https://getform.io/f/87ce0796-4e02-4673-907b-dd95dfd5697f" method="post">
          <div class="row">
           <div class="control-group form-group col-lg-6 col-md-6">
             <div class="controls">
               <label>*Full Name:</label>
               <input type="text" class="form-control" id="name" required data-validation-required-message="Please Enter Your Name" placeholder="Enter Your Name">
               <p class="help-block"></p>
             </div>
           </div>

           <div class="control-group form-group col-lg-6 col-md-6">
             <div class="controls">
               <label>*Phone Number:</label>
               <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please Enter Your Phone Number" placeholder="Enter Your Number">
               <p class="help-block"></p>
             </div>
           </div>
          

           <div class="control-group form-group col-lg-12 col-md-12">
             <div class="controls">
               <label>*Email Address:</label>
               <input type="email" class="form-control" id="email" required data-validation-required-message="Please Enter Your Email Address" placeholder="Enter Your Email Address">
               <p class="help-block"></p>
             </div>
           </div>
         </div>
          <div class="row">
           <div class="control-group form-group col-lg-6 col-md-6">
             <div class="controls">
               <label>*Institution Name:</label>
               <input type="text" class="form-control" id="name" required data-validation-required-message="Please Enter Valid Name" placeholder="Enter Insitution Name">
               <p class="help-block"></p>
             </div>
           </div>

           <div class="control-group form-group col-lg-6 col-md-6">
             <div class="controls">
               <label>Enter Institution Number:</label>
               <input type="tel" class="form-control" id="phone" placeholder="Enter Insitution Number">
               <p class="help-block"></p>
             </div>
           </div>
          

           <div class="control-group form-group col-lg-12 col-md-12">
             <div class="controls">
               <label>Institution Email:</label>
               <input type="email" class="form-control" id="email" data-validation-required-message="Please Enter Valid Email Address" placeholder="Enter Institution Email">
               <p class="help-block"></p>
             </div>
           </div>
         </div>
        <div class="form-group control-group">
          <div class="controls">
        <label>Select Category:</label>
        <select name="category" class="form-control" id="category">
          <option value="0">Select</option>
          <option value="services">Service</option>
          <option value="trainings">Training/Workshop</option>
        </select>
      </div>
    </div>
        <div class="form-group control-group" id="quote-services" style="display:none;">
          <div class="controls">
        <label>Select Service:</label>
        <select name="service" class="form-control">
          <option>Operation Management</option>
          <option>Academic Management</option>
          <option>Performance Management</option>
          <option>Audit & Evaluation</option>
          <option>Affiliation & Advisory</option>
        </select>
      </div>
    </div>
        <div class="form-group control-group" id="quote-training" style="display:none;">
          <div class="controls">
        <label>Select Training:</label>
        <select name="training" class="form-control">
          <option>For Schools</option>
          <option>For Teachers</option>
          <option>For Parents</option>
          <option>For Students</option>
        </select>
      </div>
    </div>

        
        <div class="form-group control-group">
          <div class="controls">
        <label>Budget Projections</label>
        <select name="budget" class="form-control">
          <option>&lt;INR 50,000</option>
          <option>INR 50,000 - INR 1,00,000</option>
          <option>INR 1,00,000 - INR 2,00,000</option>
          <option>&gt; INR 2,00,000</option>
        </select>
      </div>
    </div>
             <button type="submit" class="btn btn-primary mb-4" id="sendMessageButton" style="float: right;">Submit</button>
         </form>
        </div>
        
      </div>
    </div>
  </div>