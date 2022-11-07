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
    <!--Section Two- How It Works-->
    <section>
        <div class="container mb-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-end text-success">How It Works </h1>
                    <p class="lead text-end">Are you a researcher who's constantly searching for answers? Or a writer
                        looking for a place to sell your books?
                        Then this web app might come in handy. Join us and see how this works.
                    </p>
                </div>
                <div class="col-md offset-lg-1 p-0 m-0">
                    <img src="./assets/images/5060353_2647628-removebg-preview.png" alt="" width="500">
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md offset-lg-1 p-0 start-slide-from-left">
                    <img src="./assets/images/22636420_6642641-removebg-preview.png" alt="" width="100%" height="100%">
                </div>
                <div class="col-md pt-lg-3 start-slide-from-right">
                    <h1 class="display-6 fw-bold lh-1 text-start text-dark">Publish your work </h1>
                    <ol class="lead text-start lh-2" style="list-style: none" ;>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-1-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                            </svg> <small>Name your Article/Study.</small>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-2-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z" />
                            </svg> <small>Add a Description</small>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-3-circle" viewBox="0 0 16 16">
                                <path
                                    d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                            </svg> <small>Write an Overview of your book.</small>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-4-circle" viewBox="0 0 16 16">
                                <path
                                    d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                            </svg> Upload your pdf file.
                        </li><br>
                        <small>
                            <p class="text-success text-start">After that, a single page will be generated to
                                view
                                the inputed details of your book.
                                This page will let the other users to know what information will they acquire if they
                                read
                                this book.
                            </p>
                        </small>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="col-md offset-lg-1 p-0 m-0 start-slide-from-left">
                    <img src="./assets/images/17543960_2002.i515.001_modern_students_flat_icons-13-removebg-preview.png"
                        alt="" width="500">
                </div>
                <div class="col-md p-lg-5 pt-lg-3 start-slide-from-right">
                    <h1 class="display-5 fw-bold text-start text-dark ps-4">Pick a book </h1>
                    <ol class="lead text-start" style="list-style: none" ;>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-1-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                            </svg> Search for a title of a book or navigate through tabs.
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-2-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z" />
                            </svg> Click to view the book page.
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-3-circle" viewBox="0 0 16 16">
                                <path
                                    d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                            </svg> Examine the details.
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" color="green"
                                class="bi bi-4-circle" viewBox="0 0 16 16">
                                <path
                                    d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                            </svg> Download the book as pdf file.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
</main>


<!-- Script For Header -->
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include('templates/footer.php');