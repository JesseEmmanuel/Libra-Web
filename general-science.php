<?php include('templates/head.php') ?>
<?php
if(isset($_SESSION['logged_in']) == 1)
{
    include('templates/signin-header.php'); 
}
else
{
    include('templates/header.php'); 
}
?>

<!--Section Two Economics-->
<section>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
      <div class="col-md p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-end text-success">General Science </h1>


      </div>
      <div class="col-md offset-lg-1 p-0 m-0">
        <img src="./assets/images/gensci.jpg" alt="Economics" width="500">
      </div>
    </div>
  </div>
</section>
<!--Section 3 Categories-->
<section class="p-5">
  <div class="container">
    <h1 class="text-center text-success fw-bold my-5 pb-5">Available Books</h1>
    <div class="row row-cols-md-3">
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="economics.html"><img src="./assets/images/economics.jpg" class="d-block w-100  "
              alt="Economics" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="engineering.html"><img src="./assets/images/engineering.jpg" class="d-block w-100  "
              alt="Engineering" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="general-science.html"><img src="./assets/images/gensci.jpg"
              class="d-block w-100  " alt="General Science" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="health.html"><img src="./assets/images/health.jpg" class="d-block w-100  "
              alt="Health" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="literature.html"><img src="./assets/images/literature.jpg" class="d-block w-100  "
              alt="Literature & Arts" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="engineering.html"><img src="./assets/images/engineering.jpg" class="d-block w-100  "
              alt="Engineering" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="general-science.html"><img src="./assets/images/gensci.jpg"
              class="d-block w-100  " alt="General Science" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="health.html"><img src="./assets/images/psycology.jpg" class="d-block w-100  "
              alt="Health" width="200" height="200"></a>
        </div>
      </div>
      <div class="col-md p-3">
        <div class="card border-secondary">
          <a href="literature.html"><img src="./assets/images/theology.jpg" class="d-block w-100  "
              alt="Literature & Arts" width="200" height="200"></a>
        </div>
    </div>
  </div>
</section>

<!-- Script For Header -->
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');