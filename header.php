<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Clinic@usiu</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>WELCOME TO USIU-A CLINIC</p>
        </div>
        <div class="col-sm-6">
          <div class="social-icons"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="" style="height: 52px;"></a> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p>0736 116112<br>
            0736 008009</p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>customerclinic@usiu.ac.ke<br>
            clinc@usiu.ac.ke</p>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>USIU-A STUDENT CENTER <br>
             NAIROBI</p>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>            
            <li><a href="patientappointment.php">APPOINTMENT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="faq.php">FAQS</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminlogin.php">ADMIN</a></li>
                <li><a href="doctorlogin.php">DOCTOR</a></li>
                <li><a href="patientlogin.php">PATIENT </a></li>
                
              </ul>

            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </header>