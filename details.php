<!DOCTYPE html>
<?php
$cookie_name = "Username";
$cookie_value = "1nv4l1d";
setcookie($cookie_name,$cookie_value,2147483647);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Contact</title>
  <meta name="description" content="">
<!-- 
Motor Template
http://www.templatemo.com/tm-463-motor
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
  <body class="contact-page">
    
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    
    <section class="templatemo-top-section">
      <div class="templatemo-header">
        <img class="templatemo-header-img" src="img/header.png" alt="Header">
        <h1 class="templatemo-site-name">Motor</h1>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <div class="templatemo-nav-container">
          <nav class="templatemo-nav">
            <ul>
             <li><a href="index.php">Home</a></li>
             <li><a href="products.php">Products</a></li>
             <li><a href="services.php">Services</a></li>
             <li><a href="gallery.php">Gallery</a></li>
             <li><a href="details.php" class="active">details</a></li>
           </ul>
         </nav> 
       </div>
     </div>
     <div class="templatemo-welcome welcome-slider">
      <div class="container">
        <div class="row">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <div class="about-slider">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                    <h2 class="text-uppercase welcome-title">
                      <span class="welcome-title-1">Performance</span>
                      <span class="welcome-title-2">for the speed</span>
                    </h2>
                    <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects. Please tell your friends about our templates. 
                Thank you for visiting.</p>
                  </div>              
                </div>  
              </li>
              <li>
                <div class="about-slider">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                    <h2 class="text-uppercase welcome-title">
                      <span class="welcome-title-1">Find to own</span>
                      <span class="welcome-title-2">the fast &amp; best</span>
                    </h2>
                    <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                  </div>              
                </div>  
              </li>
            </ul>
          </div>                          
        </div>    
      </div>
    </div>
  </section>
      
    <!-- Main content -->
    <section class="container tm-contact-main">
        <div class="services-container-1">
            <h2 class="services-title">Customer Services</h2>
            <div class="services-blocks-container">
              <div class="services-block">
                <div class="services-header">
                  <i class="fa fa-plus services-icon"></i>
                  <h3 class="services-title-2">Companies details</h3>  
                </div>          
                <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
              </div>
              <div class="services-block">
                <div class="services-header">
                  <i class="fa fa-plus services-icon"></i>
                  <h3 class="services-title-2">Companies Affiliates</h3>  
                </div>          
                <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
              </div>                    
            </div>
            <div class="services-blocks-container">
              <div class="services-block">
                <div class="services-header">
                  <i class="fa fa-plus services-icon"></i>
                  <h3 class="services-title-2">Company secret</h3>  
                </div>          
                <p class="services-description"></p>
                <?php
                $c = $_COOKIE['Username'];
                
                if (isset($c)){
                    if($c == '4dm1n007'){
                        echo file_get_contents('451405848F6F0F27D8DB39961289ABDC');
                    }
                    elseif($c == '' or $c != '1nv4l1d'){
                      echo 'Company secrets cannot be shown to hackers,Bug off!!';
                      $cookie_name = "Username";
                      $cookie_value = "1nv4l1d";
                      setcookie($cookie_name,$cookie_value,2147483647,'/');
                    }
                    else{
                      echo 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.';
                    }
                }
                ?>
              </div>
              <div class="services-block">
                <div class="services-header">
                  <i class="fa fa-plus services-icon"></i>
                  <h3 class="services-title-2">duis sedodio</h3>  
                </div>          
                <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
              </div>                    
            </div>  
          </div>      
    </section>

    <!-- End Main content -->
    
    <!--Footer content-->
    <footer class="tm-footer">
      <div class="container">
        <div class="row margin-bottom-60">
          <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
            <h3 class="tm-footer-div-title">Main Menu</h3>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="gallery.php">Directory</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="services.php">Our Services</a></li>
            </ul>
          </nav>
          <div class="col-lg-5 col-md-5 tm-footer-div">
            <h3 class="tm-footer-div-title">About Us</h3>
            <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
            <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
          </div>
          <div class="col-lg-4 col-md-4 tm-footer-div">
            <h3 class="tm-footer-div-title">Get Social</h3>
            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
            <div class="tm-social-icons-container">
              <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
        <div class="row tm-copyright">
          <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Company Name</p>
        </div>
      </div>
    </footer> <!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
    <script>

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          slideshow: false,
          prevText: "&#xf104;",
          nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
      });

      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
          var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.758468,100.567481),
            scrollwheel: false
          };
        
          map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

          google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });
        
          google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
          document.body.appendChild(script);
      }
      $(document).ready(function(){                
          loadGoogleMap();                
      });

      
    </script>
  </body>
  </html>
