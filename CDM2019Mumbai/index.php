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
      <div id="login-box" class="jumbotron">
        <h1 id="login-heading" class="text-center my-2">CDM 2019 Mumbai</h1>
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputUsername3" placeholder="Username" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
              <small id="passwordHelpBlock" class="form-text text-muted">
                Use the password provided during registration
              </small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary ">Proceed</button>
            </div>
          </div>
        </form>
      </div>
      
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
