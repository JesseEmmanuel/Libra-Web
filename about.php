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
<main>
    <section>
        <div class="container mb-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-end text-success">About Us </h1>
                    <p class="lead text-end">Libra is a cloud-based application that helps researchers and writers.
                        Libra is an intuitive platform that allows users to store learning materials that can be used by
                        by other users.
                        The published learning material can then be downloaded either for free or premium.
                    </p>
                </div>
                <div class="col-md offset-lg-1 p-0 m-0">
                    <img src="./assets/images/about.png" alt="" width="500">
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md offset-lg-1 p-0">
                    <img id="image-shadow" src="./assets/images/study.png" alt="" width="500">
                </div>
                <div class="col-md p-3 p-lg-5 pt-lg-3 start-slide-from-right">
                    <h1 class="display-6 fw-bold lh-1 text-start text-dark">Resource materials should be accessable with
                        ease. </h1>
                    <p class="lead text-start">If you're a researcher/writer, you know how important resource materials
                        are. You have to have them on hand when it comes time to write an article or create an
                        infographic and study.
                        If you're one who prefers reading over writing these days, then having access to resources is
                        even more important as you don't want to run out of ideas when it is time for your next article.
                    </p>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md p-3 p-lg-5 pt-lg-3 align-middle start-slide-from-left">
                    <h1 class="display-5 fw-bold lh-1 text-end text-dark">Benefits </h1>
                    <ul class="lead text-end" style="list-style: none" ;>
                        <li>- Cloud based online storage for writers/researchers</li>
                        <li>- Stores learning materials from other professionals</li>
                        <li>- Wide and Diverse categories of lerning resources</li>
                        <li>- Get Started For Free</li>
                        <li>- Connect/Collaborate with other professionals</li>
                    </ul>
                </div>
                <div class="col-md offset-lg-1 p-0 m-0">
                    <img id="image-shadow2" src="./assets/images/benefit-photo.jpg" alt="" width="500">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-4 pb-lg-5 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md offset-lg-1 p-0">
                    <img id="image-shadow2" src="./assets/images/books.jpg" alt="" width="500">
                </div>
                <div class="col-md p-3 p-lg-5 pt-lg-3 start-slide-from-right">
                    <h1 class="display-6 fw-bold lh-1 text-start text-dark my-4">Find any books you want. </h1>
                    <p class="lead text-start">This library is designed to be general library that can be accessed by
                        any writers and researchers
                        all over the world. With wide and diversed category of books to be covered, rest assure you'll
                        find the book for you.
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="container pt-lg-5 mt-lg-5" id="featured-section">
            <h1 class="display-5 fw-bold lh-1 mb-3" style="text-align:center; color:#21AB4F;">Our Features</h1>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 justify-content-center">
                <div class="feature col col-sm-3">
                    <div class="col-md-12 px-5 py-4" id="feature-column">
                        <div class="row" id="feature-icon-row">
                            <div class="feature-icon" id="feat-icon">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#download" /></svg>
                            </div>
                        </div>
                        <h5 id="feature-title">Cloud Based Library</h5>
                        <p id="feature-content"><small>You can browse anywehre, anytime for thesis documentation,
                                resarch
                                project or
                                even
                                your favourite novel or manga online.</small></p>
                    </div>
                </div>
                <div class="feature col col-sm-3">
                    <div class="col-md-12 px-5 py-4" id="feature-column">
                        <div class="row" id="feature-icon-row">
                            <div class="feature-icon" id="feat-icon">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#book" /></svg>
                            </div>
                        </div>
                        <h5 id="feature-title">Quality Books</h5>
                        <p id="feature-content"><small>With access to Libra, researchers all over the world can store
                                their
                                works
                                with just
                                one click away just to provide your one stop learning resource on a cloud.</small></p>
                    </div>
                </div>
                <div class="feature col col-sm-3">
                    <div class="col-md-12 px-5 py-4" id="feature-column">
                        <div class="row" id="feature-icon-row">
                            <div class="feature-icon" id="feat-icon">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#search" /></svg>
                            </div>
                        </div>
                        <h5 id="feature-title">Browse for books</h5>
                        <p id="feature-content"><small>Collaboration of writers, researchers, engineers, developers, etc
                                are
                                put
                                altogether
                                in this platform just to ensure that the book your looking can be find here.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Script For Header -->
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');