<?php
  session_start();
  if(empty($_SESSION['uname'])){
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../index.php');
    }  
?>
<!DOCTYPE html>
<html lang="en-US">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="HTML5 Template">

  <!-- THEME CSS STYLE -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- OTHER CSS STYLE -->
  <link rel="stylesheet" type="text/css" href="css/royal_preloader.css">
  <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"><!--not working-->
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/mb-comingsoon.css">
  <link rel="stylesheet" type="text/css" href="fontastic.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <!-- FAVICON -->
  <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

    <!-- The main CSS file -->
    <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

  <!-- APPLE TOUCH ICON -->
  <link rel="apple-touch-icon" href="images/webclip.png">
</head>
<body class="royal_preloader animsition">

  <!-- ROYAL PRELOADER -->
  <div id="royal_preloader"></div>

  <!-- TOP BORDER -->
  <div class="top-border">
    <div class="w-row">
      <div class="w-col w-col-6 w-clearfix">
        <a href="st.php" class="w-inline-block brand-logo animsition-link"><img width="135" src="images/logo.png" alt="logo"></a>
      </div>
      <div class="w-col w-col-6">
        <div class="social-wrapper">
        <?php echo '<a href="#" style ="text-decoration:none ;font-size:17px">'.$_SESSION['uname'].'</a>';?> &nbsp&nbsp
         <a style="text-decoration: none;";><a onclick="document.getElementById('id02').style.display='block'""  style="font-size: 16px; cursor: pointer; text-decoration: none;">Update details</button></a> </a> &nbsp&nbsp&nbsp
          <a href="#" class="w-inline-block social-icon facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="#" class="w-inline-block social-icon twitter">
           <i class="fa fa-twitter"></i>
          </a>
          <a href="#" class="w-inline-block social-icon behance">
           <i class="fa fa-instagram"></i>
          </a>
          <a href="#" class="w-inline-block social-icon instagram">
           <i class="fa fa-behance"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- LEFT BORDER -->
  <div class="left-border">
    <div data-ix="show-overlay-menu-on-click" class="w-embed move-center-hamb">
      <button class="c-hamburger c-hamburger--htla">
        <span>toggle menu</span>
      </button>
    </div>
  </div>

  <!-- RIGHT BORDER -->
  <div class="right-border"></div>

  <!-- BOTTOM BORDER -->
  <div class="bottom-border">
    <div class="w-hidden-medium w-hidden-small w-hidden-tiny title-top-border">
      <div>Corporate &amp; Industry Relations<br><a class="college" href="https://www.amrita.edu/">Amrita Vishwa Vidyapeetham.</a></div>
    </div>
  </div>
  <div data-ix="hide-overlay-menu-on-load" class="overlay-menu">
    <div class="w-container port-contatiner">
      <!-- NAVIGATION -->
      <nav>
        <ul class="w-list-unstyled ul-nav">
          <li data-ix="close-dropdown-on-hover"><a href="st.php" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link animsition-link"><h3 class="biger">Home</h3></a>
          </li>
          <li data-ix="close-dropdown-on-hover"><a href="#" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link animsition-link"><h3 class="biger">Calender</h3></a>
          </li>
          <li data-ix="close-dropdown-on-hover"><a href="#" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link"><h3 class="biger">placments</h3></a>
            <ul data-ix="make-dropdown-height-0" class="w-list-unstyled ul-dropdown">
              <li>
                <a href="#" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Engineering</div>
                </a>
              </li>
              <li>
                <a href="#" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Arts &amp; science</div>
                </a>
              </li>
              <li>
                <a href="#" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Biotechnology</div>
                </a>
              </li>
              <li>
                <a href="#" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of Business</div>
                </a>
              </li>
              <li>
                <a href="#" class="w-inline-block nav-link nav-dd animsition-link">
                  <div>Amrita School of ayurveda</div>
                </a>
              </li>
            </ul>
          </li>

          <li data-ix="close-dropdown-on-hover"><a href="logout.php" data-ix="show-dropdown-on-hover" class="w-inline-block nav-link animsition-link"><h3 class="biger">logout</h3></a>
          </li>
        </ul>
      </nav>
      <!-- END NAVIGATION -->
    </div>
  </div>

  <!-- RESPONSIVE NAVIGATION -->
  <div class="w-hidden-main">
    <div class="responsive-menu">
      <div class="w-container">
        <a href="index.php" class="w-inline-block brand-logo more-margin animsition-link"><img width="135" src="images/logo.png" alt="logo">
        </a>
        <div data-ix="open-responsive-menu" class="hamburger">
          <div class="w-embed">
            <button class="c-hamburger c-hamburger--htx">
              <span>toggle menu</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <nav class="responsive-nav">
      <div class="w-container">
        <ul class="w-list-unstyled dd-big-res">
          <li>
            <div class="w-clearfix nav-res-link"><a href="st.php" class="res-txt animsition-link">Home</a>
            </div>
          </li>
          <li>
            <div class="w-clearfix nav-res-link"><a href="#" class="res-txt animsition-link">Calender</a>
            </div>
          </li>
          <li>
            <div data-ix="open-dd-res" class="w-clearfix nav-res-link"><a href="plac.html" class="res-txt">Placements</a>
              <a href="#" class="w-inline-block arrow-ico-res">
                <i class="fa fa-angle-down"></i>
              </a>
            </div>
            <ul class="w-list-unstyled dd-res">
              <li>
                <div class="w-clearfix nav-res-link">
                <a href="ase.html" class="res-txt change-size animsition-link">Amrita School of Engineering</a>
                </div>
              </li>
              <li>
                <div class="w-clearfix nav-res-link">
                 <a href="asas.html" class="res-txt change-size animsition-link">Amrita School of Arts &amp; science</a>
                </div>
              </li>
              <li>
                <div class="w-clearfix nav-res-link">
                 <a href="asbi.html" class="res-txt change-size animsition-link">Amrita School of Biotechnology</a>
                </div>
              </li>
              <li>
                <div class="w-clearfix nav-res-link">
                 <a href="asbu.html" class="res-txt change-size animsition-link">Amrita School of Business</a>
                </div>
              </li>
              <li>
                <div class="w-clearfix nav-res-link">
                 <a href="asay.html" class="res-txt change-size animsition-link">Amrita School of ayurveda</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <div class="w-clearfix nav-res-link"><a href="index.php" class="res-txt animsition-link">logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- END RESPONSIVE NAVIGATION -->
  <div id="id02" class="modal">
  
  <form class="modal-content animate" action="hostel.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="images/logo_dark.png" alt="CIRMS" class="avatar">-->
      <p>Enter your Credentials</p>
    </div>

    <div class="count">
      <label><b>Hostel Name</b></label>
      <input type="text" placeholder="Hostel Name" name="hname" required>

      <label><b>Room number</b></label>
      <input type="text" placeholder="Enter Room number" name="rno" required>
        
      <button type="submit">Update</button>
      
    </div>

    </form>
</div>
  <!-- COMPANYS -->
  <div id="filter" class="w-section section-imp">
  <center><h1>Welcome to CIRMS</h1></center>
 <!-- <a style="text-decoration: none;";><a onclick="document.getElementById('id02').style.display='block'""  style="font-size: 16px; cursor: pointer; text-decoration: none;">Update details</button></a> </a>
  <a target="_blank"> <button class="button button3" onclick="document.getElementById('id01')">Update Details
  </button> </a> -->
 <!-- <a target="_blank">
                <button onclick="document.getElementById('id02').style.display='block'" class="button3" style="font-size: 16px; cursor: pointer;margin: 0px 20px; padding :10px 10px 10px 10px; background-color: #008cba; ">Update details</button></a>  -->
        <style>
          .button3 {
            background-color: #008cba;
            border: none;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 16px; 
            margin: 0px 20px;
            cursor: pointer;
          }
          .button4 {
            background-color: #7fba00;
            border: none;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 16px; 
            margin: px 20px;
            cursor: pointer;
          }
        </style>
      </div>
      <div id="grid" class="w-clearfix grid">
        <div class="grid-sizer"></div>
        <!--<div class="item brand photo">
          <div data-ix="hover-portfolio-content" class="portfolio-overlay wow fadeInUp"> -->
          <?php
           include 'db_open.php';
            $query = "select * from `praneeth`.Details";
            $result = $connect->query($query);
            
            while ($row = $result->fetch_assoc()) {
                echo '<div class="item brand photo">';
                  echo '<div data-ix="hover-portfolio-content" class="portfolio-overlay wow fadeInUp">';
                    echo '<img width="500" src="display.php?id='.$row["id"].'">';
                    echo '<a href="stdisplay.php?id='.$row["id"].'" data-ix="hide-portfolio-content-on-load" class="w-inline-block portfolio-content animsition-link">';
                    

                    echo '<div  class="portfolio-cn-title">';
                      echo '<h4 data-ix="scale-portfolio-title-on-load" class="portfolio-title">'.$row["name"].'</h4>';
                      echo '<div data-ix="scale-portfolio-title-on-load-2" class="portfolio-sub-title">'.$row["category"].'</div>';
                      
                      echo '</div>';
                      echo '</a>';
                      echo '</div>';
                      echo '</div>';
            }
          ?>  
          
          </div>
     </div>
  </div>
  <!-- END COMPANYS --><!--
    <div class="w-container"> 
        <h4>Upload your Student Details Excel Sheet</h4> 
        <a href= '../../../files/Editupload.php'><img src='images/download.png'></a>
    </div>
     CALENDER -->

    <div class="w-section section-imp dark-gray more-padding">
    <div class="w-container">
      <div class="title-wrapper">
        <h2>Calender</h2>
        <div><img src="images/sub-handmade.png" alt="handmade">
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-2 w-clearfix">
          <a href="#" class="w-inline-block logo-wrapper wow fadeIn" data-wow-delay="0.3s"><img width="147" src="images/logo-1.png" alt="logo-1">
          </a>
        </div>
        <div class="w-col w-col-2 w-clearfix">
          <a href="#" class="w-inline-block logo-wrapper wow fadeIn" data-wow-delay="0.4s"><img width="147" src="images/logo-4.png" alt="logo-4">
          </a>
        </div>
        <div class="w-col w-col-2 w-clearfix">
          <a href="#" class="w-inline-block logo-wrapper wow fadeIn" data-wow-delay="0.5s"><img width="147" src="images/logo-2.png" alt="logo-2">
          </a>
        </div>
        <div class="w-col w-col-2 w-clearfix">
          <a href="#" class="w-inline-block logo-wrapper wow fadeIn" data-wow-delay="0.6s"><img width="147" src="images/logo-5.png" alt="logo-5">
          </a>
        </div>
        <div class="w-col w-col-2 w-clearfix">
          <a href="#" class="w-inline-block logo-wrapper wow fadeIn" data-wow-delay="0.7s"><img width="147" src="images/logo-3.png" alt="logo-3">
          </a>
        </div>
        <div class="w-col w-col-2 w-clearfix">
          <a href="#" class="w-inline-block logo-wrapper wow fadeIn" data-wow-delay="0.8s"><img width="147" src="images/logo-6.png" alt="logo-6">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END CALENDER -->

  <!-- FOOTER -->
  <footer class="footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="contact-wrapper">
            <div class="data-blog cont-ico">
              <i class="icon-basic-headset"></i>
            </div>
            <div class="cont-sub-txt">Phone</div>
            <p> +91 476 2801280</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="contact-wrapper">
            <div class="data-blog cont-ico">
              <i class="icon-basic-geolocalize-05"></i>
            </div>
            <div class="cont-sub-txt">Address</div>
            <p>Amrita Vishwa Vidyapeetham<br>Amritapuri, Clappana P O<br>Kollam - 690525, Kerala, India</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="contact-wrapper">
            <div class="data-blog cont-ico">
              <i class="icon-basic-mail-open-text"></i>
            </div>
            <div class="cont-sub-txt">E-mail</div>
            <p><a class="mail" href="mailto:">cir@amrita.edu</a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <!-- END FOOTER -->

   <!-- SCROLL TO TOP -->
   <a href="#0" class="cd-top">Top</a>

  <!-- JQUERY SCRIPTS -->
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Lekton:regular","Yellowtail:regular","Playfair Display:regular,italic,700"]
      }
    });
  </script>
  <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="js/jquery.animsition.min.js"></script>
  <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
  <script type="text/javascript" src="js/royal_preloader.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/tweecoolmi.js"></script>
  <script type="text/javascript" src="js/jquery.mb-comingsoon.min.js"></script>
  <script type="text/javascript" src="js/typed.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

  <!-- THEME CUSTOM -->
  <script type="text/javascript" src="js/scripts.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','js/analytics.js','ga');

  ga('create', 'UA-72514065-1', 'auto');
  ga('send', 'pageview');
  </script>

</body>
<style>
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
</html>
