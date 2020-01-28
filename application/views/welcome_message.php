<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo base_url();
if($this->session->has_userdata('id')){
 if ($_SESSION['fomcompleate']==1) {
  redirect(base_url().'index.php/Welcome/dashIndex');
}
if(!$this->session->has_userdata('id')){
  redirect(base_url().'index.php/Welcome/index');
}
  
}
?>
<!DOCTYPE html>
<!-- saved from url=(0059) -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Train Check -easy way to book train ticket</title>
  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url("assets/css/all.min.css"); ?>" rel="stylesheet" type="text/css">
  <!-- Google Fonts -->
  <link href="<?php echo base_url("assets/css/css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/css(1)"); ?>" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="<?php echo base_url("assets/css/magnific-popup.css"); ?>" rel="stylesheet">
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url("assets/css/creative.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/trainChgkCommon.css"); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/all.css"); ?>">
</head>
<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-scrolled" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#home"><img src="<?php echo base_url("assets/image/logoHome.png"); ?>" class="homeLogo"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead/home -->
  <header class="masthead"  id="home" style="background-image: url('<?php echo base_url("assets/image/train3.png"); ?>');opacity: 0.7">
    <div class="container h-100">
      <table style="width: 100%; " class="">
        <tbody>
          <tr>
            <td >
              <div class="col-lg-12 align-self-baseline" style="margin-top: 10%">
                <p class="text-black-75 font-weight-bold mb-8" style="font-size: 40px;color:#000000;background-color:#FFFFFF;opacity: 0.7">Welcome To Online Ticket Booking</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
              </div>
            </div>
          </div>
        </td>
        <td style="width: 50%;">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
              <div class="login-form logReg">
                <!-- for registration & login from js and contriller  -->
                <form action="<?php echo base_url('index.php/welcome/signIn')?>" method="post" id="login-form">
                  <h2 class="text-center text-muted ">Sign in</h2>
                  <?php if($this->session->flashdata('error')){ ?>
                  <b><?php echo $this->session->flashdata('error');?></b>
                  <?php }else{ ?>
                  <b><?php echo form_error("userName") ?></b>
                  <?php } ?>

                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input id="userName" name="userName" class="form-control" placeholder="User name" type="text">
                  </div>
                 

                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" id="password"  class="form-control" placeholder="Create password" type="password">
                  </div>
                  <div class="form-row mr-0 ml-0" style="color:red !important; text-height:12px !important; text-align:center !important">
                          <?php echo form_error("password") ?>
            </div>
                  <div class="form-group">
                    <button type="submit" id="logIn" name="submitlog" class="btn btn-primary login-btn btn-block">Sign in</button>
                  </div>
                  <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                  </div>
                  <div class="or-seperator"><i>or</i></div>
                  <p class="text-center text-muted small">
                    Don't have an account? <a href="#register" class="nav-link js-scroll-trigger regesterForm">Sign up here!</a>
                  </p>
                  <div class="text-center social-btn">
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</header>
<!-- About -->
<section id="about" class="about-body">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">It's all about Journey.......</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="<?php echo base_url("assets/image/indianluxurytrains.jpg"); ?>" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2016-2017</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">India has one of the largest and oldest train transportation around the globe  so we start investigation how we can make the train journey better </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="<?php echo base_url("assets/image/moment.jpg"); ?>" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2018</h4>
                <h4 class="subheading">An Agency is Born</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">We found that book ticket for train is time consuming so we develop a online platform for ticket booking </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="<?php echo base_url("assets/image/crowd-of-people-1.png"); ?>" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2018</h4>
                <h4 class="subheading">Transition to Full Service</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">20 million people traveling  daily  to control the booking system and make it available for all in a easy way we make a partnership with irctc</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="<?php echo base_url("assets/image/ticket.jpg"); ?>" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>May 2019</h4>
                <h4 class="subheading">Few step to go..</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">easy ticker booking in few step  log in to create a account  and benefit  </p>
              </div>
            </div>
          </li>
          <li class="">
            
            <a class=" js-scroll-trigger" href="#services">
              <div class="timeline-image">
                <h4 style="color: black;">See More
                <br>Click Here</h4>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">At Your Service</h2>
    <hr class="divider my-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fa fa-4x fa-tag text-primary mb-4"></i>
          <h3 class="h4 mb-2">Fast Booking</h3>
          <p class="text-muted mb-0">few step to book ticket!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
          <h3 class="h4 mb-2">Up to Date</h3>
          <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-wallet text-primary mb-4"></i>
          <h3 class="h4 mb-2">Use Wallet </h3>
          <p class="text-muted mb-0">You can use e-Wallet for Payment, or you can store money!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class=" fa fa-4x  fa-credit-card text-primary mb-4"></i>
          <h3 class="h4 mb-2">Easy Payment </h3>
          <p class="text-muted mb-0">Payment online with your credit or debit card</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fa fa-4x fa-backspace text-primary mb-4"></i>
          <h3 class="h4 mb-2">Easy Cancellation</h3>
          <p class="text-muted mb-0">One click to cancel ticket  before train schedule</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-phone text-primary mb-4"></i>
          <h3 class="h4 mb-2">Effective Support Team</h3>
          <p class="text-muted mb-0">a responsive team for customer support</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-globe text-primary mb-4"></i>
          <h3 class="h4 mb-2">Track Activity</h3>
          <p class="text-muted mb-0">track Confirmation,Cancellation,history etc..</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-user text-primary mb-4"></i>
          <h3 class="h4 mb-2">One Touch Profile</h3>
          <p class="text-muted mb-0">Effective user profile  with all activity </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Portfolio Section -->
<section id="portfolio">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
          <img class="img-fluid" src="./Creative - Start Bootstrap Theme_files/1.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
          <img class="img-fluid" src="./Creative - Start Bootstrap Theme_files/2.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
          <img class="img-fluid" src="./Creative - Start Bootstrap Theme_files/3.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
          <img class="img-fluid" src="./Creative - Start Bootstrap Theme_files/4.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
          <img class="img-fluid" src="./Creative - Start Bootstrap Theme_files/5.jpg" alt="">
          <div class="portfolio-box-caption">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
          <img class="img-fluid" src="./Creative - Start Bootstrap Theme_files/6.jpg" alt="">
          <div class="portfolio-box-caption p-3">
            <div class="project-category text-white-50">
              Category
            </div>
            <div class="project-name">
              Project Name
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Call to Action Section -->
<section class=" bg-dark" id="register" style="background-image: url('<?php echo base_url("assets/image/regtrain.jpg"); ?>');opacity: 0.8;">
  <div class="container text-center">
    <table style="width: 100%; " class="">
      <tbody>
        <tr>
          <td >
            <div class="col-lg-12 align-self-baseline" style="margin-top: 10%">
              <p class="text-black-75 font-weight-bold mb-8" style="font-size: 40px;color:#000000;background-color:#FFFFFF;opacity: 0.7">New To Train Booking , Register Now</p>
            </div>
          </div>
        </div>
      </td>
      <td style="width: 50%;">
        <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
            <div class="login-form RegForm">
              <form  method="POST">
                 <span id="useralert" class="useralert">
                 
                </span>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="userNameReg" id="userNameReg" class="form-control userNameReg" placeholder="User name" type="text" required>
                </div>
                <!-- ajax user match alert -->
                <span id="usermailalert" class="useralert">

                </span>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                  </div>
                  <input name="emailReg" id="emailReg" class="form-control emailReg" placeholder="Email address" type="text" required>
                </div>
                <span id="usephonealert" class="useralert">

                </span>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                  </div>
                  <select class="custom-select" style="max-width: 120px;">
                    <option selected="">+91</option>
                  </select>
                  <input name="phone" id="phone" class="form-control phone" placeholder="Phone number" type="text" required>
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-users"></i> </span>
                  </div>
                  <select class="form-control gender" name="gender" id="gender">
                    <option selected="">Male</option>
                    <option>Female</option>
                    <option>Others</option>
                  </select>
                </div>
                 <span id="userPassalert" class="useralert">

                </span>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control passwordReg" id="passwordReg" name="passwordReg" placeholder="Create password" type="password" minlength="6" required>
                </div>
                <span id="userRePassalert" class="useralert">

                </span>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control repeatPass" id="repeatPass" name="repeatPass" placeholder="Repeat password" type="password" required>
                </div>
                <div class="form-group">
                  <button type="submit" name="submitReg" id="submitReg" class="btn btn-primary btn-block submitReg"> Create Account  </button>
                </div>
                <p class="text-center text-muted ">Have an account? <a href="#home" class=" btn btn-primary js-scroll-trigger logForm">Log In</a> </p>
              </form>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</section>
<!-- Contact Section -->
<section class="page-section" id="contact" style="padding-top:80px;">
<div class="container">
<div class="row justify-content-center">
  <div class="col-lg-12 text-center">
    <h2 class="mt-0">Let's Get In Touch!</h2>
    <hr class="divider my-4">
    <p class="text-muted mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
  </div>
</div>
<div class="row">
  <div class="col-lg-8 mr-auto text-center ">
    <form action="" method="post">
      <div class="card  rounded-4">
        <div class="card-header p-3">
          <div class="bg-info text-white text-center py-3">
            <h3><i class="fa fa-envelope"></i> Contact Us</h3>
            <p class="m-0">Sent Your Opinion </p>
          </div>
        </div>
        <div class="card-body p-3">
          <!--Body-->
          <div class="form-group ">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
              </div>
              <input type="text" class="form-control" id="nameCont" name="nameCont" placeholder="Full Name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
              </div>
              <input type="email" class="form-control" id="contMale" name="contMale" placeholder="Your@gmail.com" required>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
              </div>
              <textarea class="form-control" placeholder="Leave A message" required></textarea>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-3 text-center p-5">
    <ul class="list-unstyled mb-0">
      <li><i class="fas fa-map-marker-alt fa-2x"></i>
        <p>kolkata, Garia 700103, INDIA</p>
      </li>
      <li><i class="fas fa-phone mt-4 fa-2x"></i>
        <p>+91 98 76 54 32 10</p>
      </li>
      <li><i class="fas fa-envelope mt-4 fa-2x"></i>
        <p>contact@traincheck.com</p>
      </li>
    </ul>
  </div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-light py-5">
<div class="container">
<div class="small text-center text-muted">Copyright © <?php echo date('Y');?> - traincheck.com</div>
</div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.easing.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.magnific-popup.min.js"); ?>"></script>
<!-- Custom scripts for this template -->
<script src="<?php echo base_url("assets/js/creative.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/indexcastom.js"); ?>"></script>
</body></html>