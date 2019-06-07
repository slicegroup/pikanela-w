<!DOCTYPE html>
<html>

<head>
  <title>Pikanela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Poppins" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/medias.css">
</head>

<body>
  <header class="header-index">
    <div class="container flex-container">
      <div class="box-left-social">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </div>
      <img class="logo-initial" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="">
      <div class="box-right-social">
        <i class="fa fa-search" aria-hidden="true"></i>
        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
      </div>
    </div>
    <nav class=" navbar navbar-expand-xl navbar-light container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Calzado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Bolsos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Sombreros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Accesorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sale">Ropa de playa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=about.html>¿Quienes Somos?</a>
          </li>
          <li class="nav-item">
            <div class="box-right-social box-right-mobile">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <nav class=" fixed-2 navbar navbar-expand-xl navbar-light">
    <div class="fixed-container container">
      <a href="">
        <img class="logo-fixed" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white2.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-flex" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Calzado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Bolsos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Sombreros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Accesorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sale">Ropa de playa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">¿Quienes Somos?</a>
          </li>
        </ul>
        <i class="fa fa-search search-fixed" aria-hidden="true"></i>
      </div>
    </div>
  </nav>