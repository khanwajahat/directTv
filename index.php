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
$partner = $_SERVER['HTTP_HOST']; 
$partner = "includes/cta-partner.php"; 
include_once($partner); 
?>


<?php
$counter = $_SERVER['HTTP_HOST']; 
$counter = "includes/counter.php"; 
include_once($counter); 
?>


<?php
$struggle = $_SERVER['HTTP_HOST']; 
$struggle = "includes/struggle.php"; 
include_once($struggle); 
?>

<?php
$help = $_SERVER['HTTP_HOST']; 
$help = "includes/help.php"; 
include_once($help); 
?>





<div class="packages-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Affordable and Flexible Digital Marketing Packages</h2>
        <p>Offering customers worldwide a diverse range of flexible digital marketing solutions at budget-friendly prices.</p>
      </div>
    </div>
    <div class="row">
      <div class="tab-custom">
        <ul class="tabbing-links">
          <li class="current" data-targetit="tabs-seo">SEO</li>
          <li data-targetit="tabs-smm">SMM</li>
          <li data-targetit="tabs-lsm">Local Search Marketing</li>
          <li data-targetit="tabs-wc">Web Content</li>
          <li data-targetit="tabs-lb">Link Building</li>
        </ul>

        <ul class="tabs tabs-seo current package-slider">    
          <?php
          $seo = $_SERVER['HTTP_HOST']; 
          $seo = "includes/seo-package.php"; 
          include_once($seo); 
          ?>
        </ul>

        <ul class="tabs tabs-smm">    
          <?php
          $smm = $_SERVER['HTTP_HOST']; 
          $smm = "includes/smm-package.php"; 
          include_once($smm); 
          ?>
        </ul>

        <ul class="tabs tabs-lsm">    
          <?php
          $lsm = $_SERVER['HTTP_HOST']; 
          $lsm = "includes/lsm-package.php"; 
          include_once($lsm); 
          ?>
        </ul>

        <ul class="tabs tabs-wc">    
          <?php
          $wc = $_SERVER['HTTP_HOST']; 
          $wc = "includes/wc-package.php"; 
          include_once($wc); 
          ?>
        </ul>

        <ul class="tabs tabs-lb">    
          <?php
          $lb = $_SERVER['HTTP_HOST']; 
          $lb = "includes/lb-package.php"; 
          include_once($lb); 
          ?>
        </ul>

      </div>
    </div>
  </div>
</div>












<?php
$cta = $_SERVER['HTTP_HOST']; 
$cta = "includes/cta.php"; 
include_once($cta); 
?>

<?php
$industrylist = $_SERVER['HTTP_HOST']; 
$industrylist = "includes/industrylist.php"; 
include_once($industrylist); 
?>



<?php
$cta2 = $_SERVER['HTTP_HOST']; 
$cta2 = "includes/cta2.php"; 
include_once($cta2); 
?>

<section class="testimonial-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="test-wrap">
          <span class="icon-comment-o"></span>
          <h3>"Our Business Grew 57% With The Marketing Services <br>By The Team At SEO PRO HUB"</h3>
          <h5>Ryan Seagal, CEO <span>Houseful Cinemas Australia </span></h5>
          
        </div>
      </div>
    </div>
    
<?php
$testimonial = $_SERVER['HTTP_HOST']; 
$testimonial = "includes/testimonial.php"; 
include_once($testimonial); 
?>
  </div>
</section>



<?php
$casestudies = $_SERVER['HTTP_HOST']; 
$casestudies = "includes/casestudies.php"; 
include_once($casestudies); 
?>

<?php
$story = $_SERVER['HTTP_HOST']; 
$story = "includes/story.php"; 
include_once($story); 
?>



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