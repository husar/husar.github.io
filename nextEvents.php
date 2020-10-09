
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
      <section class="nextEvents">
      <div id="nextEvents" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="nextEventsh3">Obsadené dátumy</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
              <?php
                    /*$query_zaznamy="SELECT * FROM `nextevents` WHERE CURDATE()<=dateOfEvent ORDER BY dateOfEvent";
				    $apply_zaznamy=mysqli_query($connect,$query_zaznamy);
                    $result_zaznamy=mysqli_fetch_array($apply_zaznamy);*/
                    $query_month="SELECT * FROM `nextevents` WHERE CURDATE()<=dateOfEvent GROUP BY Month(dateOfEvent) ORDER BY dateOfEvent";
				    $apply_month=mysqli_query($connect,$query_month);
                    /*$query_month="SELECT Month('".$result_zaznamy['dateOfEvent']."') AS month;";
				    $apply_month=mysqli_query($connect,$query_month);
                    $result_month=mysqli_fetch_array($apply_month);
                    print_r($result_month);*/
                while($result_month=mysqli_fetch_array($apply_month)){
                 ?>
               <!-- Free Tier -->
               <?php
               $query_zaznamy="SELECT * FROM `nextevents` WHERE CURDATE()<=dateOfEvent AND Month(dateOfEvent)=".date('m', strtotime($result_month['dateOfEvent']))." ORDER BY dateOfEvent";
               $apply_zaznamy=mysqli_query($connect,$query_zaznamy);
               ?>
      <div class="col-lg-6">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"><i class="fa fa-calendar"><?php echo date('M', strtotime($result_month['dateOfEvent']))." - ".date('Y', strtotime($result_month['dateOfEvent'])); ?></i></h5>
            <hr>
            <ul class="fa-ul">
             <?php while($result_zaznamy=mysqli_fetch_array($apply_zaznamy)) {?>
              <li><span class="fa-li"></span><?php echo $result_zaznamy['dateOfEvent']." - ".$result_zaznamy["place"]." (".$result_zaznamy["type"].")"; ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <?php } ?>
            </div>
         </div>
      </div>
      </section>
       
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