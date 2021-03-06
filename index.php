<?php
session_start();
if(isset($_SESSION['uname'])){
  if($_SESSION['uname'] == 'cirms_admin'){
  header('Refresh:0;url=./second/login.php');
  }
  else{
    header('Refresh:0;url=./second/st.php');
  } 
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>CIRMS</title>
    <link rel="shortcut icon" href="https://www.amrita.edu/sites/default/files/AU_logo_16.ico" type="image/vnd.microsoft.icon">
    <meta name="CIRMS" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    <!-- Preloader -->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navbar-->
    <header id="topnav">
      <div class="container">
        <div class="logo">
          <a href="index.php">
            <img src="images/2.png" alt="" class="logo-light">
            <img src="images/2.png" alt="" class="logo-dark">
          </a>
        </div>
        <div class="menu-extras">
          <div class="menu-item">
            <a class="navbar-toggle">
              <div class="lines"><span></span><span></span><span></span>
              </div>
            </a>
          </div>
        </div>
        <!-- Responsive navbar -->
        <div id="navigation" data-onepage="true">
          <ul class="navigation-menu nav">
            <li><a href="#home" data-scroll="true">Home</a>
            </li>
            <li><a href="#about" data-scroll="true">About</a>
            </li>
            <li><a href="#services" data-scroll="true">What we do</a>
            </li>
            <li><a href="#contact" data-scroll="true">Contact us</a>
            </li>
            <li><a href="#Report" data-scroll="true">Report</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- Home Section-->
    <section id="home" class="dark particles-bg">
      <div class="slide-wrap">
        <div class="slide-content">
          <div class="container">
            <div id="text-rotator" class="flexslider mt-15 mb-15">
              <ul class="slides">
                <li>
                  <h2 class="upper fw-400">Welcome to CIRMS</h2>
                </li>
            </div>
            <ul class="social-list">
              <li><a target="_blank">
                <p onclick="document.getElementById('id01').style.display='block'" class="last-elements" style="font-size:20px; cursor: pointer;">Login</p></a>
              </li>
              <!--<li><a target="_blank" href="#">
                <p class="last-elements" style="font-size:20px;">Student Login</p></a>
              </li>-->
               <li><a target="_blank">
                <p onclick="document.getElementById('id02').style.display='block'" class="last-elements" style="font-size:20px; cursor: pointer;">Register Now</p></a>
              </li>
            </ul>
            <!-- end of social icons-->
          </div>
        </div>
      </div>
    </section>
    <!-- About Section -->
    <section id="about">
      <div class="container">
        <div class="title center"><i class="icon-genius"></i>
          <h3>About CIRMS</h3>
          <hr>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <p>CIRMS is a management system solely for the placement wing of Amrita University. It is aimed to provide a better experience to the students while keeping in mind the demands of the companies visiting the university. It is designed and maintained by the university.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- end of container-->
    </section>
    <section id="services" class="dark">
      <div class="container">
        <div class="title center"><i class="icon-briefcase"></i>
          <h3>What We Do</h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div data-options="{&quot;items&quot;: 2, &quot;autoplay&quot;: true, &quot;margin&quot;: 30, &quot;mdItems&quot;: 2}" class="owl-carousel">
                <div class="item">
                  <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-piechart"></i>
                    <h4>Training Division</h4>
                    <p>This division is made to train and develop students to excel in their Campus interviews. It contains records of all the students and their proficiency in various departments. It is used by the CIR department to monitor the performance of the students.</p>
                  </div>
                </div>
                <div class="item">
                  <div class="icon-box-small boxed mb-25 mt-25"><i class="icon-presentation"></i>
                    <h4>Placement Division</h4>
                    <p>This division is used to monitor the performance of students during various rounds of the interviews. It also provides the feedback of each student after their interviews.<br><br><br></p>
                  </div>
                </div>
              </div>
        <!-- end of section content-->
      </div>
      <!-- end of container                -->
    </section>
    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <div class="title center"><i class="icon-envelope"></i>
          <h3>Contact Us</h3>
          <hr>
        </div>
          <p style = "text-align:center;"><b>Mr. Anu K Manappuram</b><br>

Manager – Corporate Relations Amrita School of Engineering, Corporate and Industry Relations,<br>

Amrita Vishwa Vidyapeetham, Amritapuri, Clappana P.O., Kollam – 690 525, Kerala.<br>

Mobile: +91 94 46 406800<br>

Phone: 0476 - 2801280<br>

Fax: 0476 - 2896178</p>

        </div>
        <!-- end of section content-->
      </div>
      <!-- end of container -->
    </section>
    <section id="Report">
      <div class="container">
        <div class="title center"><i class="icon-envelope"></i>
          <h3>Report a Bug<span class="red-dot"></span></h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="contact-form">
                <form id="contact-form" method="POST" action="report.php">
                  <div class="form-group">
                    <input name="fullname" type="text" placeholder="Your Rollno" data-required="true" class="form-control">
                  </div>
                  <div class="form-group">
                    <textarea name="message" placeholder="Bug Description" data-required="true" class="form-control"></textarea>
                  </div>
                  <div class="form-group text-center">
                    <input type="submit" class="btn btn-color">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
        <!-- end of section content-->
      </div>
     </section> 
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap b-0">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <p>© Team Echo </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-dribbble"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
       


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="log.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="images/logo_dark.png" alt="CIRMS" class="avatar">-->
      <p>Enter your login credentials</p>
    </div>

    <div class="count">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="count" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="mailgun-php/f1.php">Forgot password</a></span>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="mailgun-php/mail.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="images/logo_dark.png" alt="CIRMS" class="avatar">-->
      <p>Enter your Credentials</p>
    </div>

    <div class="count">
      <label><b>Rollno</b></label>
      <input type="text" placeholder="Username" name="uname" required>

      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email Address" name="ps" required>
        
      <button type="submit">Register</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <!--<div class="count" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>

      </div>
    </footer>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bundle.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <style>
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
    background-color: #191b1d;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #191b1d;
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

.count {
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
</style>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  </body>

</html>
