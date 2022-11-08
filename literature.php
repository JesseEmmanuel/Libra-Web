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
        <h1 class="display-4 fw-bold lh-1 text-end text-success">Literature and Arts </h1>
        <p class="lead text-end">Literary or literary art is something in the form of writing or stories that have
          artistic
          and cultural value that displays the beauty of speech and language to convey certain meanings. Literature is
          the language used
          in books and is not an everyday language.</p>
      </div>
      <div class="col-6 offset-lg-1 p-0 m-0" id="illustration">
        <script>
          var animation = bodymovin.loadAnimation({
            container: document.getElementById('illustration'),
            path: './assets/lottie/literature.json',
            render: 'svg',
            loop: true,
            autoplay: true,
          });
        </script>
      </div>
    </div>
  </div>
</section>
<!--Section 3 Categories-->
<section class="p-5">
  <div class="container pb-sm-5">
    <h1 class="text-center text-success fw-bold my-5">Looking For a book?</h1>
    <div class="d-flex justify-content-center">
      <form class="w-75 me-3 mb-lg-5">
        <input type="search" class="form-control" placeholder="Find a book..." aria-label="Search">
      </form>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book1.png" class="d-block w-100" alt="..." width="100%">
          <div class="card-body">
            <small>Fundamentals of python</small>
            <h5>How to think like a computer scientist</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Eric Matthes</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">General
                  Science</button>
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Technology</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book2.jpg" class="d-block w-100" alt="..." width="100%">

          <div class="card-body">
            <small>Engineering Fundamentals</small>
            <h5>Solid Geometry</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Henry Petroski</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">General
                  Science</button>
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Engineering</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book3.jpg" class="d-block w-100" alt="..." width="100%">

          <div class="card-body">
            <small>Physics</small>
            <h5>Introduction to Thermodynamics</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Carlo Rovelli</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">General
                  Science</button>
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Engineering</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book4.jpg" class="d-block w-100" alt="..." width="100%">

          <div class="card-body">
            <small>Guide for Physical Fitness</small>
            <h5>Scientific Theories to be Physically Fit</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Nick Mitchell</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">General
                  Science</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book5.jpg" class="d-block w-100" alt="..." width="100%">

          <div class="card-body">
            <small>Social Interactions</small>
            <h5>Etiquette of Work</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>John Levi Martin</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Psychology</button>
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Social
                  Study</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book6.jpg" class="d-block w-100" alt="..." width="100%">

          <div class="card-body">
            <small>Asian Recipes</small>
            <h5>Recipes for Filpino's Traditional Foods</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Henry Sison</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Foods</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book7.jpg" class="d-block w-100" alt="..." width="100%">
          <div class="card-body">
            <small>Psychology</small>
            <h5>Understanding One's Self</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Daniel Kahneman</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Psychology</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md d-flex align-items-stretch">
        <div class="card shadow-sm">
          <img src="./assets/images/book8.jpg" class="d-block w-100" alt="..." width="100%">

          <div class="card-body">
            <small>Guides for Professionalism</small>
            <h5>Etiquette for Communications</h5>
            <p class="card-text"><strong style="color:#198754;">Author: </strong>Ellaine Castillo</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">General
                  Science</button>
                <button type="button" class="btn btn-sm btn-outline-success rounded-pill">Literature</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Script For Header -->
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');