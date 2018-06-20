<!doctype html>
<html lang="en">
<head>
<title>Analyze Your Website - SEOPROHUB</title>

<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include_once($style); 
?>




</head>
<body class="analyzepg">

<section class="tphead">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="logo">
            <a href="index.php">
              <img class="img-fluid black" src="assets/images/logo-seoph-color.svg" alt="*" />
            </a>
          </div>
      </div>
      <div class="col-lg-9">
        <div class="text-right">
          <a href="index.php"><span class="icon-x-square"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="slider-wrapper black">
  <section class="">
    <div class="item">
      <div class="home-banner d-flex" style="background:#f7f9fc;">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <h1>SEO Agency for Startup, <br>Midsize and Enterprise Companies</h1>
                <p class="subtitle">Audit Your Site - More Sales, More Leads, More Happy Customers... </p>
                
                <div class="analyzeform full col-lg-8 offset-lg-2">
                  <form class="" id="banform" method="get" action="">
                    <div class="row">
                      <div class="wrap">
                        <div class="dtf">
                          <input id="cemail" class="round" type="email" name="email" placeholder="Enter email here" required>
                        </div>
                      
                      
                        <div class="dtf">
                          <input id="phone" name="phone" required type="number" rangelength="[2,8]"  placeholder="Enter phone here" />
                        </div>
                      
                      
                        <div class="dtf">
                          <input id="urlarea" name="urlarea" minlength="5" type="text" placeholder="Enter website" required />
                        </div>
                      
                      
                        <div class="dtf text-left">
                          <input class="submit " type="submit" value="Analyze" />
                        </div>
                      </div>

                    </div>
                  </form>
                </div>

                
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- <div class="slider-progress">
    <div class="progress"></div>
  </div> -->
</div>                
                
    






<script src="assets/js/mlib.js"></script> 
<script src="assets/js/functions.js"></script> 



<!-- scroll top car
<div class="car-top"><span>
<img src="assets/images/car.png" alt="Top" title="Back to top" />
</span></div>
-->
</body>
</html>