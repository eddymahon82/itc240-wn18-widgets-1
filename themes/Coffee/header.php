<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$config->title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$config->theme_virtual?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$config->theme_virtual?>css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"><?=$config->slogan?></span>
      <span class="site-heading-lower"><?=$config->banner?></span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"><?=$config->banner?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
           <?=coffee_links($config->nav1)?>
              <!--
              <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="template.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="#">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="#">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="#">Store</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="email1.php">Simple Email Form</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="email2.php">Compound Email Form</a>
            </li>
            -->
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Fresh Coffee</span>
              <span class="section-heading-lower">Worth Drinking</span>
            </h2>
            <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
                <!-- header ends here -->
        
<?php 
    function coffee_links($nav1){
    
    foreach($nav1 as $url => $text){
    //echo '<li><a href="' . $url . '">' . $text . '</a></li>';
    
    if (THIS_PAGE==$url){
        echo '<li class="nav-item active px-lg-4">
    <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '
    <span class="sr-only">(current)</span>
    </a>
</li>';
        
    }else{
        
    echo '
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
    </li>';
}

}
}
    
    ?>