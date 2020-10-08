
<?php
include("connect.ini.php");
?>


<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BlueSky</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
      <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
               <a class="navbar-brand"><img src="imgs/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#" onclick="goto('about')">Kapela</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" onclick="goto('hiw')">Členovia</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" onclick="goto('service')">Posledné akcie</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" onclick="goto('na')">Najbližšie akcie</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" onclick="goto('ukazky')">Ukážky</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" onclick="goto('booking')">Rezervácia</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" onclick="goto('contact')">Kontakty</a>
                     </li>
                     <!--<li class="nav-item .search-container">
                        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                        <form>
                           <input type="search" placeholder="Search">
                        </form> background: #293132
                     </li>-->
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <section class="slide_show">
          <div id="home" class="slider">
             <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <img class="d-block w-100" src="imgs/slide1.jpg" alt="slider_img">
                      <div class="ovarlay_slide_cont">
                         <h2>Členovia</h2>
                         <h4>Niečo málo o nás - krátke privítanie</h4>
                         <p> Koláž naších fotiek nech to nezačína hneď konkrétnym členom. Alebo hocijake naše fotky aj z detstva a tak. aj z osobného života spraviť koláž a dať ju tu.</p>
                      </div>
                   </div>
             </div>
          </div>
        </div>
      </section>
      <?php
                    $query_zaznamy="SELECT * FROM `lastevents` ORDER BY dateOfEvent DESC";
				    $apply_zaznamy=mysqli_query($connect,$query_zaznamy);
                    $even = 1;
                   while($result_zaznamy=mysqli_fetch_array($apply_zaznamy)){
                       if($even%2==1 && $even<11){
                 ?>
      <section class="about_us js--section-about-us">
          <div id="<?php echo $result_zaznamy['id']; ?>" class="about_section layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-5">
                      <h3 style="text-transform: none !important"><?php echo $result_zaznamy['name']; ?></h3>
                      <h4><?php echo $result_zaznamy['dateOfEvent']; ?></h4>
                      <p class="js--wp-1"><?php echo $result_zaznamy['info']; ?></p>
                   </div>
                   <div class="col-md-6 offset-md-1">
                      <div class="full text_align_center">
                        <a href="#<?php echo $result_zaznamy['id']; ?>">
                         <img class="img-responsive js--wp-1" src="<?php echo $result_zaznamy['path']; ?>" alt="#" onclick="view('<?php echo $result_zaznamy['path']; ?>')"/>
                        </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
      </section>
      <?php }elseif($even<11){?>
      <section class="about_us js--section-about-us" style="background: #1a2428">
          <div id="<?php echo $result_zaznamy['id']; ?>" class="about_section layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-5">
                      <div class="full text_align_center">
                        <a href="#<?php echo $result_zaznamy['id']; ?>">
                         <img class="img-responsive js--wp-1" src="<?php echo $result_zaznamy['path']; ?>" alt="#" onclick="view('<?php echo $result_zaznamy['path']; ?>')"/>
                        </a>
                      </div>
                   </div>
                   <div class="col-md-6 offset-md-1">
                      <h3 style="text-transform: none !important; color: #d09400;"><?php echo $result_zaznamy['name']; ?></h3>
                      <h4><?php echo $result_zaznamy['dateOfEvent']; ?></h4>
                      <p class="js--wp-1" style="color: #ffffff;"><?php echo $result_zaznamy['info']; ?></p>
                   </div>
                </div>
             </div>
          </div>
      </section>
      <?php }$even++;} ?>
       
        <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img style="height: 80px; width: 200px;" src="imgs/logo.png" alt="#"/>
                     <p style="margin-top: 5px;">It is a long established fact that a reader will be distracted by the readable content..</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigation</h4>
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Features</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p><strong>Corporate Office Address:</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" /> 1234 River Street New York, NY 36524</p>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="imgs/location.png" alt="#" /> 987 654 3210</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Discover</h4>
                     <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2019  Design by <a href="https://html.design">Free Html Templates</a></p>
         </div>
      </footer>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/script.js"></script>
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
      
        <script>
            function goto($hashtag){
            document.location = "index.php#" + $hashtag;
            }
       </script>
       <script type="text/javascript">
            function view(imgsrc) {
                viewwin = window.open(imgsrc,'viewwin', 'width=1000%,height=1000%'); 
            }
       </script>
   </body>
</html>