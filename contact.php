<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact - SEOPROHUB</title>
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include_once($style); 
?>
</head>
<body class="inner-pages contactpg">
<?php
$header = $_SERVER['HTTP_HOST']; 
$header = "includes/header.php"; 
include_once($header); 
?>
<div class="slider-wrapper">
  <section class="">
    <div class="item">
      <div class="home-banner d-flex"  style="background-image:url(assets/images/banners/contact-banner.png)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <h1>SEO Agency for Startup, <br>Midsize and Enterprise Companies</h1>
                <p class="subtitle">Audit Your Site - More Sales, More Leads, More Happy Customers... </p>
                
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
<section class="sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 inner-content">
        <h2>Contact Us</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <div class="form-box-main clearfix">
          <h2>We would like to hear from you</h2>
          <form class="cmxform" id="contactForm" method="get" action="">
            <div class="row">
              <div class="col-md-6">
                <label class="field-txt">Name <span>*</span></label>
                  <input id="username" name="username" minlength="2" type="text" placeholder="Enter your name" required />
             </div>
              <div class="col-md-6">
                <label class="field-txt">Email <span>*</span></label>
                <input id="cemail" type="email" name="email" placeholder="Enter email here" required>
             </div>
             <div class="col-md-6">
                <label class="field-txt">Phone Number<span>*</span></label>
               <input id="phone-country" type="number" placeholder="Phone Number" required/>
             </div>
             <div class="col-md-6">
                <label class="field-txt">Packages Name <span>*</span></label>
                <select>
                  <option value="-1">SEO</option>
                  <option value="1">SEM</option>
                  <option value="2">Local Search Marketing</option>
                  <option value="3">Website Content</option>
                  <option value="23">Link Building</option>
                </select>
             </div>
              <div class="col-md-12">
                <label class="field-txt">Enter your URL <span>*</span></label>
                  <input id="weburl" name="weburl" minlength="10" type="text" placeholder="https://"  />
             </div>
              
             
             
              
            <div class="col-md-12">
                <label class="field-txt">Detail about your business. <span>*</span></label>
                <textarea placeholder="Enter message here" /></textarea>
             </div>
            <div class="col-md-12">
                <input class="submit" type="submit" value="Submit" />
             </div>
             </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 sidebar"> 
         
      </div>
    </div>
  </div>
</section>
<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include_once($footer); 
?>
</body>
</html>