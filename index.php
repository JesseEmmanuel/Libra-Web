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
<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active" id="carousel-box">
            <img src="./assets/images/feature1.png" class="d-block w-100 img-fluid" id="carousel-images" alt="...">
            <div class="container">
                <div class="carousel-caption" id="carousel-content">
                    <h1>Free Learning Materials</h1>
                    <p>Sign up today and enjoy free books made by professionals around the world</p>
                    <p><a class="btn btn-lg btn-success" href="signup.php">Sign up today</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>-->
<div class="container-sm">
    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6 start-slide-from-right" id="libra-intro2">
                <h1 class="display-5 fw-bold mb-3 text-start">What is Libra?</h1>
                <p class="lead text-start">Libra is a cloud-based application for writers and researchers.
                    Libra is an intuitive platform that allows users to store learning
                    materials that can be used by other users. The published learning material can
                    then be downloaded for free or premium</p>
            </div>
            <div class="col-lg-6 start-fade" id="libra-intro1">
                <!--<img src="./assets/images/study.gif" width="100%" class="d-block mx-lg-auto img-fluid rounded"
                    id="image-features" alt="Bootstrap Themes" loading="lazy">-->
                <script height="500px" width="500px">
                    var animation = bodymovin.loadAnimation({
                        container: document.getElementById('libra-intro1'),
                        path: './assets/lottie/knowledge.json',
                        render: 'svg',
                        loop: true,
                        autoplay: true,
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="container py-3 mt-5">
        <h1 class="display-5 fw-bold lh-1 mb-5" style="text-align:center; color:#21AB4F;">Most Popular Books</h1>
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
                                <button type="button"
                                    class="btn btn-sm btn-outline-success rounded-pill">Technology</button>
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
                                <button type="button"
                                    class="btn btn-sm btn-outline-success rounded-pill">Engineering</button>
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
                                <button type="button"
                                    class="btn btn-sm btn-outline-success rounded-pill">Engineering</button>
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
                                <button type="button"
                                    class="btn btn-sm btn-outline-success rounded-pill">Psychology</button>
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
                                <button type="button"
                                    class="btn btn-sm btn-outline-success rounded-pill">Psychology</button>
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
                                <button type="button"
                                    class="btn btn-sm btn-outline-success rounded-pill">Literature</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5" style="margin-bottom:10%;">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6 start-fade" id="collab animation">
                <!--<img src="./assets/images/join.gif" class="d-block mx-lg-auto img-fluid rounded" id="image-features"
                    alt="Bootstrap Themes" width="500" height="500">-->
                <!--<iframe src="https://embed.lottiefiles.com/animation/73386" height="500" width="500"></iframe>-->
                <script>
                    var animation = bodymovin.loadAnimation({
                        container: document.getElementById('collab animation'),
                        path: './assets/lottie/collab.json',
                        render: 'svg',
                        loop: true,
                        autoplay: true,
                    });
                </script>
            </div>
            <div class="col-lg-6 pt-5 start-slide-from-left">
                <h1 class="display-5 fw-bold lh-1 mb-3 text-end">Join us in our community</h1>
                <p class="lead text-end">Collaborate with people from other fields and learn from them.
                    This is what I call a global community of writers and researchers.</p>
                <a href="community.php" class="d-grid gap-2"><button class="btn btn-success" type="button">Join Us!</button></a>
            </div>
        </div>
    </div>
    <div class="container px-4 py-5" id="featured-section">
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
                    <p id="feature-content"><small>You can browse anywehre, anytime for thesis documentation, resarch
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
                    <p id="feature-content"><small>With access to Libra, researchers all over the world can store their
                            works
                            with just
                            one click away just to provide your one stop learning resource on a cloud.</small></p>
                </div>
            </div>
            <div class="feature col col-sm-3">
                <div class="col-sm-12 px-5 py-4" id="feature-column">
                    <div class="row" id="feature-icon-row">
                        <div class="feature-icon" id="feat-icon">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#search" /></svg>
                        </div>
                    </div>
                    <h5 id="feature-title">Browse for books</h5>
                    <p id="feature-content"><small>Collaboration of writers, researchers, engineers, developers, etc are
                            put
                            altogether
                            in this platform just to ensure that the book your looking can be find here.</small></p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Script For Header -->
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');