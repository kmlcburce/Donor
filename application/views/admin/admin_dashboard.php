<header>
  
  <style type="text/css">
    element {
}
.wrapper .container-fluid > .row [class*="col-"], .wrapper .container-fluid > .row [class*="col-"] > .row {
    padding-left: 7.5px;
    padding-right: 7.5px;
}
.col-lg-6 {
    width: 50%;
}
.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
}
.col-xs-12 {
    width: 100%;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    float: left;
}
.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
*, ::after, ::before {
    box-sizing: border-box;
}
body {
    font-family: Roboto,sans-serif;
    font-size: 13px;
    line-height: 1.42857143;
    color: #212121;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
}

  </style>
</header>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="<?php echo base_url('assets/images/favicon.png');?>" type="image/png">
  <title>Hospice Medical</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/styles/bootstrap.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/styles/vendors/linericon/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/styles/font-awesome.min.css') ;?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/owl-carousel/owl.carousel.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/lightbox/simpleLightbox.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/nice-select/css/nice-select.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/animate-css/animate.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/jquery-ui/jquery-ui.css');?>">
  <!-- main css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/styles/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/styles/responsive.css');?>">

  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #3face4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

</style>
</head>

<body>



  <!--================Header Menu Area =================-->
  <header class="header_area">
    
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="<?php echo base_url('assets/images/logo.png');?>" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row ml-0 w-100">
              <div class="col-lg-12 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('main/dashboard')?>">Dashboard</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('Welcome/search')?>">Messages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('main/login')?>" action="<?php session_destroy();?>">Signout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
<!-- <div class="col-xs-12 col-lg-6">
            
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Latest comments
                </h3>
              </div>
              <div class="panel-body">
                <div class="dashboard__comments">
                  <div class="dashboard-comments__item">
                    <div class="dashboard-comments__avatar">
                      <img src="assets/img/user_1.jpg" alt="...">
                    </div>
                    <div class="dashboard-comments__body">
                      <h5 class="dashboard-comments__sender">
                        John Doe <small>2 hours ago</small>
                      </h5>
                      <div class="dashboard-comments__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                      </div>
                      <div class="dashboard-comments__controls">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Remove</a>
                      </div>
                    </div>
                  </div>
                  <div class="dashboard-comments__item">
                    <div class="dashboard-comments__avatar">
                      <img src="assets/img/user_2.jpg" alt="...">
                    </div>
                    <div class="dashboard-comments__body">
                      <h5 class="dashboard-comments__sender">
                        Jane Roe <small>5 hours ago</small>
                      </h5>
                      <div class="dashboard-comments__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                      </div>
                      <div class="dashboard-comments__controls">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Remove</a>
                      </div>
                    </div>
                  </div>
                  <div class="dashboard-comments__item">
                    <div class="dashboard-comments__avatar">
                      <img src="assets/img/user_3.jpg" alt="...">
                    </div>
                    <div class="dashboard-comments__body">
                      <h5 class="dashboard-comments__sender">
                        Richard Roe <small>1 day ago</small>
                      </h5>
                      <div class="dashboard-comments__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                      </div>
                      <div class="dashboard-comments__controls">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <a href="#" class="btn btn-primary">View all comments</a> <a href="#" class="btn btn-link">Mark all as read</a>
              </div>
            </div>
 -->
          </div>
          <div class="col-xs-12 col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Daily feed
                </h3>
              </div>
              <div class="panel-body">
                <div class="dashboard__feed">
                  <div class="dashboard-feed__item">
                    <span class="label label-success">
                      <i class="fa fa-user"></i>
                    </span>
                    New user registered 
                    <small>3 mins ago</small>
                  </div>
                  <div class="dashboard-feed__item">
                    <span class="label label-danger">
                      <i class="fa fa-bolt"></i>
                    </span> 
                    Server overloaded
                    <small>2 hours ago</small>
                  </div>
                  <div class="dashboard-feed__item">
                    <span class="label label-warning">
                      <i class="fa fa-bell"></i>
                    </span> 
                    Server not responding 
                    <small>3 hours ago</small>
                  </div>
                  <div class="dashboard-feed__item">
                    <span class="label label-success">
                      <i class="fa fa-user"></i>
                    </span> 
                    New user registered 
                    <small>5 hours ago</small>
                  </div>
                  <div class="dashboard-feed__item">
                    <span class="label label-danger">
                      <i class="fa fa-bolt"></i>
                    </span> 
                    Database error
                    <small>12 days ago</small>
                  </div>
                  <div class="dashboard-feed__item">
                    <span class="label label-danger">
                      <i class="fa fa-bolt"></i>
                    </span> 
                    Database error
                    <small>12 days ago</small>
                  </div>
                  <div class="dashboard-feed__item">
                    <span class="label label-warning">
                      <i class="fa fa-bell"></i>
                    </span> 
                    Server not responding 
                    <small>3 hours ago</small>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <a href="#" class="btn btn-primary">View all notifications</a> <a href="#" class="btn btn-link">Mark all as read</a>
              </div>
            </div>
          </div>