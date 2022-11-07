<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Libra - Library on a cloud</title>
  <link rel="icon" type="image/x-icon" href="./assets/images/libra-favicon.png">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  <!-- Bootstrap core CSS -->
  <script src="./assets/js/lottie-min.js"></script>
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/css/custom.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="./assets/css/headers.css" rel="stylesheet">
  <link href="./assets/css/navbar-top-fixed.css" rel="stylesheet">
  <!--<link href="./assets/css/widgets.css" rel="stylesheet">-->
  <link href="./assets/css/sticky-footer-navbar.css" rel="stylesheet">
  <link href="./assets/css/blog.css" rel="stylesheet">
  <link href="./assets/css/cover.css" rel="stylesheet">
  <link href="./assets/css/heroes.css" rel="stylesheet">
  <link href="./assets/css/carousel.css" rel="stylesheet">
  <link href="./assets/css/features.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->

</head>

<body>
  <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

  <?php include('svg.php'); ?>