<!doctype html>
<html lang="en">
<head>
<title>Home - SEOPROHUB</title>

<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include_once($style); 
?>




</head>
<body>

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = "includes/header.php"; 
include_once($header); 
?>




<div class="slider-wrapper sas">
  <section class="">
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(assets/images/banners/banner.jpg)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <h1>Show Up Where <br> It Matters The Most</h1>
                <p class="subtitle">What good is your website if your customers can’t find it? <br> We help you achieve the results you want with the best SEO services in USA</p>
                
                <div class="analyzeform col-lg-10 offset-lg-1">
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

                <h5>Confused? Discuss your project with our <a href="javascript:;" onclick="setButtonURL();">Consultant</a> </h5>
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





<?php
$bottomform = $_SERVER['HTTP_HOST']; 
$bottomform = "includes/bottomform.php"; 
include_once($bottomform); 
?>












<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include_once($footer); 
?>




<!-- scroll top car
<div class="car-top"><span>
<img src="assets/images/car.png" alt="Top" title="Back to top" />
</span></div>
-->
</body>
</html>