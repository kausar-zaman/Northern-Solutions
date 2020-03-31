<?php

require_once 'assets/inc/connection.inc.php';



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Popper -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
	<!-- CSS File -->
    <link href="styles/index.css" rel="stylesheet">
		<title>Northern Solutions | About Us</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="index.php"><img src="img/northern-logo.jpg" height="50px"></a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">Services</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Cloud Hosting</a>
              <a class="dropdown-item" href="#">Server Hosting</a>
              <a class="dropdown-item" href="#">Other Solutions</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.php">Contact Us</a>
          </li>



        </ul>
        <!-- Links -->

        <form class="form-inline">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </div>
      <!-- Collapsible content -->

    </nav>
    <div class="container-fluid" id="about-fluid">
      <img class="about-image" src="img/newcastle-wallpaper.jpg">
      <div class="centered"><h1>About Us</h1></div>
    </div>

    <div class="container" id="container-about">

      <div class="row">
        <div class="col-sm-4"><img src="img/comp-display.jpg"></div>
        <div class="col-sm-8">
          <h1>WHAT IS NORTHERN SOLUTIONS?</h1>
          <p>Northern Solutions is the North East's leading IT Solutions company where we offer a wide range of IT services and products to clients and business while maintaining satisfaction by providing support to our customers.</p><br>
          <h1>WHY DID WE CREATE NORTHERN SOLUTIONS?</h1>
          <p>Northern Solutions was founded in 2015 and the reason why we established this company is due the lack to IT support available in the North East and our main target is to bring quick solutions with high quality to our customers at a small price. We believe our services will also help new business who have integrated technology with their workload and providing support at all times.
          </p>
        </div>
      </div>
    </div>

  </body>
  <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="http://kausar-portfolio.co.uk/projects/northern-solutions/"> Northern Solutions LTD</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
