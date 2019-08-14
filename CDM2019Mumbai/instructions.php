<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php
  include "head.php";
  ?>
  <?php
  session_start();
  ?>
  <body>
    <section id="instructions-section">
    <!-- Start Container -->
    <div class="container">
      <div class="my-4">
      <div class="jumbotron">
        <h1 class="text-center my-2">Test Instructions</h1>
        <p>Welcome <?php echo $_SESSION['username']; ?></p>
        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-instructions-tab" data-toggle="tab" href="#instructions-tab" role="tab" aria-controls="nav-instructions" aria-selected="true">Instructions</a>
                <a class="nav-item nav-link" id="nav-rewards-tab" data-toggle="tab" href="#rewards-tab" role="tab" aria-controls="nav-rewards" aria-selected="false">Rewards</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="instructions-tab" role="tabpanel" aria-labelledby="nav-instructions-tab">
            <h2>Disclaimer</h2>
            <h3>Please read the instructions carefully before starting the test.</h3>
            <ul>
              <li>Click <b>Take test</b> on the bottom of your screen to begin the test.</li>
              <li>The clock has been set at server and count down timer at the top-right corner of the screen will display the left out time to closure from where you can monitor remaining time to complete the exam.</li>
              <li>To select an answer for each question, simply click the desired option button.</li>
              <li>Your answers will be automatically saved once selected. To change the answer, simply make a different selection.</li>
              <li>Candidate will be allowed to shuffle between questions anytime during the examination as per their convenience.</li>
              <li>All the answered questions will be counted for calculating the final score.</li>
              <li>Do not click the final <b>Submit</b> button unless you have completed the exam. In case you click the final Submit button you will not be permitted to continue the test.</li>
              <li>Score obtained will be displayed on <b>31st September, 2019</b></li>
            </ul>
            <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Number of questions</h5>
        <p class="card-text">100</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Minutes to complete</h5>
        <p class="card-text">30 minutes</p>
      </div>
    </div>
  </div>
</div>
        </div>
          <div class="tab-pane fade" id="rewards-tab" role="tabpanel" aria-labelledby="nav-rewards-tab">
            <ul>
              <li></li>
            </ul>
        </div>
        </div>
        <div class="my-4 row">
            <div class="col-sm-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary ">Take Test</button>
            </div>
          </div>
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
