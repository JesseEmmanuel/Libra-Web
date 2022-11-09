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
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active" id="carousel-box">
                <img src="./assets/images/book1.png" class="d-block w-100 img-fluid" id="carousel-images" alt="...">
                <div class="container">
                    <div class="carousel-caption" id="carousel-content">
                        <h1>How to Think Like A Computer Scientist</h1>
                        <p>Fundamentals of python</p>
                        <p><a class="btn btn-lg btn-success" href="signin.php">Download</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="blog-post-title text-dark">Overview</h2>
                    <p>The goal of this book is to teach you to think like a computer scientist. This way of thinking
                        combines some of the best
                        features of mathematics, engineering, and natural science. Like mathematicians, computer
                        scientists use formal languages
                        to denote ideas (specifically computations). Like engineers, they design things, assembling
                        components into systems and
                        evaluating tradeoffs among alternatives. Like scientists, they observe the behavior of complex
                        systems, form hypotheses,
                        and test predictions. The single most important skill for a computer scientist is problem
                        solving. Problem solving
                        means the ability to formulate problems, think creatively about solutions, and express a
                        solution clearly and accurately.
                        As it turns out, the process of learning to program is an excellent opportunity to practice
                        problem solving skills.
                        That’s why this chapter is called, The Way of the Program. On one level, you will be learning to
                        program, a useful skill
                        by itself. On another level, you will use programming as a means to an end. As we go along, that
                        end will become clearer.</p>
                    <h2 class="text-dark pt-lg-5">Topics</h2>
                    <div class="row row-cols-lg-2">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li>1.1. The Way of the Program</li>
                                <li>1.2. Algorithms</li>
                                <li>1.3. The Python Programming Language</li>
                                <li>1.4. Executing Python in this Book</li>
                                <li>1.5. More About Program</li>
                                <li>1.6. What is Debugging?</li>
                                <li>1.7. Syntax errors</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li>1.8. Runtime Errors</li>
                                <li>1.9. Semantic Errors</li>
                                <li>1.10. Experimental Debugging</li>
                                <li>1.11. Formal and Natural Languages</li>
                                <li>1.12. A Typical First Program</li>
                                <li>1.13. Comments/li>
                                <li>1.14. Glossary</li>
                            </ul>
                        </div>
                    </div>
                    <a href="signin.php" class="d-grid gap-2"><button class="btn btn-success" type="button">Download</button></a>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 5rem;">
                    <div class="p-4">
                        <h4 class="fst-italic">Related Books</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Fundamentals of PHP</a></li>
                            <li><a href="#">Learning Machine learing</a></li>
                            <li><a href="#">Guides to Visual Basics</a></li>
                            <li><a href="#">CCNA Roadtrip</a></li>
                            <li><a href="#">Become Java Developer</a></li>
                            <li><a href="#">Fullstack Web Developer in 3 months</a></li>
                            <li><a href="#">Intro to System Admin</a></li>
                            <li><a href="#">Guides to Ethical Hacking</a></li>
                            <li><a href="#">Smart Web Apps with Python</a></li>
                            <li><a href="#">Get Good at Laravel</a></li>
                            <li><a href="#">Net Ninje: Become a Network Engineer</a></li>
                            <li><a href="#">Full Stack Developer's Master Course</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');