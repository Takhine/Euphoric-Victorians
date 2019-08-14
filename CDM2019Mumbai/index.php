<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php
  include "head.php";
  ?>
  <body>
    <section id="login-section">
    <!-- Start Container -->
    <div class="container">
      <div class="my-4">
      <h1>Main page</h1>
      <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUsername3" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary pull-right">Proceed</button>
    </div>
  </div>
</form>
      
      </div>  
    </div>
    <!-- End Container -->
    </section>

    <!-- Footer -->
    <?php
    include "footer.php"
    ?>
  </body>
</html>
