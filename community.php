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
    <!--Section Two- Our Community-->

    <section>

        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-end text-success">Our Community </h1>
                    <p class="lead text-end">Collaborate with people from other fields and learn from them. This is what
                        I call a global community of writers and researchers.
                    </p>

                </div>
                <div class="col-md offset-lg-1 p-0 m-0">
                    <img src="./assets/images/community.png" alt="" width="500">
                </div>
            </div>
        </div>
    </section>

    <!--Our Community-->
        <div class="container px-3 py-5 mb-lg-5" id="featured-section2" style="border-radius:15px;">
            <h4 class="display-5 lh-1 mb-3" style="text-align:center; color:white;">Join and Collaborate us
                <br>through this platforms</h4>
            <div class="row g-4 py-5 row-cols-2 row-cols-lg-6 justify-content-center">
                <div class="col-md">
                    <a href="#">
                        <div class="card card-cover h-15 bg-white mb-3" id="social-box" style="border-radius: 50%;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-black">
                                <img src="./assets/images/discord-2.png" class="mb-4">
                            </div>
                        </div>
                    </a>
                    <h4 class="text-center text-white"><a href="#" class="text-white">Discord</a></h4>
                </div>
                <div class="col-md">
                    <a href="#">
                        <div class="card card-cover h-15 bg-white mb-3" id="social-box" style="border-radius: 50%;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-black">
                                <img src="./assets/images/linkedin-2.png" class="mb-4">

                            </div>
                        </div>
                    </a>
                    <h4 class="text-center text-white"><a href="#" class="text-white">LinkedIn</a></h4>
                </div>
                <div class="col-md">
                    <a href="#">
                        <div class="card card-cover h-15 bg-white mb-3" id="social-box" style="border-radius: 50%;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-black">
                                <img src="./assets/images/facebook-2.png" class="mb-4">

                            </div>
                        </div>
                    </a>
                    <h4 class="text-center text-white"><a href="#" class="text-white">Facebook</a></h4>
                </div>
                <div class="col-md">
                    <a href="#">
                        <div class="card card-cover h-15 bg-white mb-3" id="social-box" style="border-radius: 50%;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-black">

                                <img src="./assets/images/twitter.png" class="mb-4">
                            </div>
                        </div>
                    </a>
                    <h4 class="text-center text-white"><a href="#" class="text-white">Twitter</a></h4>
                </div>
            </div>
</main>

<!-- Script For Header -->
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');