<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/seoprohub/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/dev/';
  }

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<div class="mobile-nav"> <a href="/" class="logo-main"> <img src="assets/images/logo.png" alt="*" /></a>
  <nav>

    <ul class="unstyled mainnav pbpx-15">
      <li><a href="<?php echo $path;?>/">Home</a></li>
      <li><a href="javascript:;">Services <i class="xicon icon-angle-down"></i></a>
        <ul class="firstlevel unstyled">
          <li><a href="<?php echo $path;?>seo.php">Search Engine Optimization</a></li>
          <li><a href="<?php echo $path;?>social-media-services.php">Social Media</a></li>
          <li><a href="<?php echo $path;?>local-search.php">Local Search Marketing</a></li>
          <li><a href="<?php echo $path;?>web-content.php">Website Content</a></li>
          <li><a href="<?php echo $path;?>link-building.php">Link Building</a></li>
        </ul>
      </li>
      <li><a href="<?php echo $path;?>client-testimonials.php">Client Testimonials</a></li>
      <li><a href="<?php echo $path;?>about-us.php">About</a></li>
      <li><a href="<?php echo $path;?>contact.php">Contact</a></li>
      
    </ul>


  </nav>
</div>
<main class="app-container">
<!-- Mobile Navigation Button Start-->
<div class="mobile-nav-btn"> <span class="lines"></span> </div>
<!-- Mobile Navigation Button End-->

<header class="header-main">
  <!-- <div class="top-bar d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="top-info-list">
            <li><span class="icon-envelope2"></span> <a href="javascript:;">info@domain.com</a> </li>
            <li><span class="icon-phone2"></span>Call Us:  111-222-333 </li>
            <li><span class="icon-user"></span> <a href="javascript:;" onclick="setButtonURL();" target="_self">Live Chat</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
  <div class="nav-area-full">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 logo-area">
          <div class="logo">
            <a href="<?php echo $path;?>">
              <img class="img-fluid white" src="assets/images/logo-seoph-white.svg" alt="*" />
              <img class="img-fluid black" src="assets/images/logo-seoph-color.svg" alt="*" />
            </a>
          </div>
        </div>
        <div class="col-lg-9 d-flex">
          <div class="main-menu align-self-center d-none d-lg-block">
            <ul>
              <li><a href="<?php echo $path;?>">Home</a></li>
              <li><a href="<?php echo $path;?>services.php">Services</a>
                <div class="dropdown">
                  <ul>
                    <li><a href="<?php echo $path;?>seo.php">Search Engine Optimization</a></li>
                    <li><a href="<?php echo $path;?>social-media-services.php">Social Media</a></li>
                    <li><a href="<?php echo $path;?>local-search.php">Local Search Marketing</a></li>
                    <li><a href="<?php echo $path;?>web-content.php">Website Content</a></li>
                    <li><a href="<?php echo $path;?>link-building.php">Link Building</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="<?php echo $path;?>client-testimonials.php">Client Testimonials</a></li>
              <li><a href="<?php echo $path;?>about-us.php">About</a></li>
              <li><a href="<?php echo $path;?>contact.php">Contact</a></li>
              <li><a href="tel:13156700881">+1 315-670-0881</a></li>
              <li><a href="analyze-your-website.php" class="btn-main">Analyze Your Website</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticky-container">
    <ul class="sticky">
      <li><a href="https://www.facebook.com/SEO-Pro-Hub-157773991585340/"> <img alt="facebook" src="assets/images/facebook.png" />
        <p>Facebook</p>
        </a>
      </li>
      <li><a href="https://twitter.com/seoprohub"> <img alt="twitter" src="assets/images/twitter.png" />
        <p>Twitter</p>
        </a> 
      </li>
      <li><a href="https://plus.google.com/u/0/109457707691027840424"> <img alt="Google plus" src="assets/images/gplus.png" />
        <p>Google plus</p>
        </a> 
      </li>
      
      <li><a href="https://www.linkedin.com/company/seoprohub/"> <img alt="LinkedIn" src="assets/images/linkedin.png" />
        <p>LinkedIn</p>
        </a> 
      </li>
      <li><a href="https://www.instagram.com/seoprohub/"> <img alt="Instagram" src="assets/images/instagram.png" />
        <p>Instagram</p>
        </a> 
      </li>
      <li><a href="https://medium.com/@seoprohub"> <img alt="Medium" src="assets/images/medium.png" />
        <p>Medium</p>
        </a> 
      </li>
      <li><a href="https://www.pinterest.com/seoprohub/"> <img alt="Pintrest" src="assets/images/pintrest.png" />
        <p>Pintrest</p>
        </a> 
      </li>
      <li><a href="https://vimeo.com/seoprohub"> <img alt="Vimeo" src="assets/images/vimeo.png" />
        <p>Vimeo</p>
        </a> 
      </li>
    </ul>
  </div>
</header>
