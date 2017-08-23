<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom fonts for this template -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'> -->

    <!-- Custom styles for this template -->
    <!-- <link href="css/grayscale.min.css" rel="stylesheet"> -->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_enqueue_script("popper.min.js"); ?>
    <?php wp_enqueue_script("bootstrap.min.js"); ?>
    <?php wp_enqueue_script("jquery.easing.min.js"); ?>
    <?php wp_enqueue_script("grayscale.min.js"); ?>
        <?php wp_head(); ?>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Grayscale</h1>
              <p class="intro-text">A free, responsive, one page Bootstrap theme.
                <br>Created by Start Bootstrap.</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
