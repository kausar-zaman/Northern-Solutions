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
		<title>Northern Solutions | No.1 IT Solutions in the North East</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="index.php"><img src="img/northern-logo.jpg" height="50px"></a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">Menu</span>
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
    <!--/.Navbar-->



<div class="container" id="main-container">
  <div class="container-title">
      <h1>Northern Solutions</h1>
      <p>Always helping with your computing needs</p>
  </div>
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/cloud-computing.jpeg" height="450px" width="720px">
      </div>
      <!--Second slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/IT-Office.jpeg" height="450px" width="720px">
      </div>
      <!--Third slide-->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/IT-Solutions.jpeg" height="450px" width="720px">
      </div>
    </div>
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

<div class="container-fluid">
  <div class="row">
    <div class="col bg-white">
	<h1>What We Do</h1>
	</div>
    <div class="col bg-primary" style="border-top: 2px solid white;">Northern Solutions is the leading IT Solutions company in the North East who have vast experience in working clieants to benefit from effective use of information technology. We’ve grown up with the internet revolution, and we know how to deliver on its promise of improved business efficiency.
      <br>
<button type="button" class="btn btn-outline-light" style="margin: 20px 0px;">Read More</button>  </div>
</div>

  <div class="row">
    <div class="col bg-white"><h1>How We Can Help</h1></div>
    <div class="col bg-primary">We provide support and guidance to clients on how their businesses can integrate technology and generate success. We create systems that are suitable and efficient for your everyday responsibilities and create simple methods for users to navigate the systems to provide solutions.
      <br>
<button type="button" class="btn btn-outline-light" style="margin: 20px 0px;">Read More</button>  </div>

</div>

<div class="row">
  <div class="col bg-white"><h1>Our Guarantee</h1></div>
    <div class="col bg-primary">By using our services, we will provide support to your businesses and repair any issues surrounding our products in order to restore our systems in a quick and efficient way without having to cause trouble to your schedule.
    <br>
<button type="button" class="btn btn-outline-light" style="margin: 20px 0px;">Read More</button>  </div>
    </div>
  </div>

    <div class="container-white">
      <h2>Our Sponsors</h2>
      <script src="assets/js/fade-in.js"></script>
      <div class="fade-in">
        <img src="img/hp-logo.jpg" height="100px">
        <img src="img/dxc-logo.jpg" height="80px">
        <img src="img/starbucks-logo.png" height="100px">
        <img src="img/northumbria-logo.jpg" height="100px">
      </div>

      </div>

      <section>
        <div class="container-black">
          <h2>Contact Us</h2>
            <section class="mb-4">
                <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
              a matter of hours to help you.</p>

          <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="form-process.php" method="POST">

                  <!--Grid row-->
                  <div class="row">

                                <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control" required>

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" required>

                        </div>
                    </div>
                    <!--Grid column-->

                </div><br>
                            <!--Grid row-->

                            <!--Grid row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="telephone" class="">Contact Number</label>
                          <input type="tel" id="contact_number" name="contact_number" class="form-control" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$"required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                    </div>
                </div><br>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>

                                    </div>

                                </div>
                            </div><br>
                            <!--Grid row-->
                            <div class="text-center text-md-left">
                                <input type="submit" class="btn btn-primary btn-send" value="Send Message">
                            </div>
                            <div class="status"></div>

                        </div>
                        </form>


                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center" style="margin-top: 30px;">
					 <h3>Visit Our Workplace</h3>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>14 Grey Street</p>
								<p>Newcastle upon Tyne</p>
								<p>Tyne & Wear</p>
								<p>NE1 1NE</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>0800 240 6836</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>contactus@northernsolutions.co.uk</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
      </section>

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
