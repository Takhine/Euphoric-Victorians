<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php
  include "head.php";
  ?>
  <body>
    <section id="login-section">
    <!-- Start Container -->
    <div class="container mt60">
    <div class="form-group row">
            <div class="col-sm-12 d-flex justify-content-end">
              <p id="disclaimer" class="timer">Timer</p> 
            </div>
            </a>
          </div>
      <div class="my-4 jumbotron">
      <h1 class="page-title">Test page</h1>
      <div class="quiz my-4">
        <h2 class="question-container">Question 1</h2>
          <ul data-quiz-question="1" class="questionBlock" id='1'>
            <li class="quiz-answer answer-a" data-quiz-answer="a">A. </li>
            <li class="quiz-answer answer-b" data-quiz-answer="b">B. </li>
            <li class="quiz-answer answer-c" data-quiz-answer="c">C. </li>
            <li class="quiz-answer answer-d" data-quiz-answer="d">D. </li>
          </ul>
      </div>
      <div class="quiz my-4">
        <h2 class="question-container">Question 2</h2>
          <ul data-quiz-question="2" class="questionBlock" id='2'>
            <li class="quiz-answer answer-a" data-quiz-answer="a">A. </li>
            <li class="quiz-answer answer-b" data-quiz-answer="b">B. </li>
            <li class="quiz-answer answer-c" data-quiz-answer="c">C. </li>
            <li class="quiz-answer answer-d" data-quiz-answer="d">D. </li>
          </ul>
      </div>
      </div>  
      <div class="form-group row">
            <div class="col-sm-12 d-flex justify-content-end">
              <a href="about.php">
              <button type="submit" class="btn next-btn">Submit</button>
              </a>
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
