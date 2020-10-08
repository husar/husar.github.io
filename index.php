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
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
      <!--<link rel="stylesheet" href="css/style.css" >-->
      <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
      
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
                        <a class="nav-link" href="#about">Kapela</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#hiw">Členovia</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#service">Posledné akcie</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#na">Najbližšie akcie</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#ukazky">Ukážky</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#booking">Rezervácia</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakty</a>
                     </li>
                     <!--<li class="nav-item .search-container">
                        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                        <form>
                           <input type="search" placeholder="Search">
                        </form>
                     </li>-->
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <section class="slide_show">
          <div id="home" class="slider">
             <div id="main_slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                   <li data-target="#main_slider" data-slide-to="1"></li>
                   <li data-target="#main_slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <img class="d-block w-100" src="imgs/slide1.jpg" alt="slider_img">
                      <div class="ovarlay_slide_cont">
                         <h2>Hudba je liek</h2>
                         <h4>Niečo málo o nás - krátke privítanie</h4>
                         <p> ( FOTO celej kapely v akciii alebo tak, potrebujeme riadne kvalitné, originálne foto, takže táto fotka tam isto nebude nepisat zbytocne dlhy text problem s responzivitou a ludia nebudu chciet citat)</p>
                         <a class="blue_bt js--scroll-to-about-us" href="#">Viac o nás</a>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <img class="d-block w-100" src="imgs/slide1.jpg" alt="slider_img">
                      <div class="ovarlay_slide_cont">
                         <h2>Naše novinky</h2>
                         <h4>Vydali sme nové single</h4>
                         <p>Tota heľpa a atd. ku kazdemu singlu nieco malo napisat. (Tu by boli stale novinky, ktore sme vydali foto zo studia?)</p>
                         <a class="blue_bt js--scroll-to-playlist" href="#ukazky">Ukážky</a>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <img class="d-block w-100" src="imgs/slide1.jpg" alt="slider_img">
                      <div class="ovarlay_slide_cont">
                         <h2>Posledné akcie</h2>
                         <h4>foto a text z poslednej akcii kde sme hrali</h4>
                         <p>Foto ktore pridavame na fb kazdu akciu s tym istym textom. (Stale by tu bola najnovsia akcia)</p>
                         <a class="blue_bt js--scroll-to-last-events" href="#service">Posledné akcie</a>
                      </div>
                   </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <img src="imgs/left.png" alt="#" />
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <img src="imgs/right.png" alt="#" />
                </a>
             </div>
          </div>
      </section>
      <section class="about_us js--section-about-us">
          <div id="about" class="about_section layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-5">
                      <h3 style="text-transform: none !important">O nás</h3>
                      <p class="js--wp-1">Sme hudobná skupina UNIX z okolia Starej Ľubovne. Zameriavame sa na ľudovú hudbu a s ňou spojené akcie svadby, plesy, rodinné oslavy, tanečné zábavy a i. Vyznačujeme sa kompletne živou produkciou. (Tie fotky rozlozim podla toho aké budú dajak pekne to nastyujem potom)</p>
                      <img class="img-responsive js--wp-1" src="imgs/gauc.jpg" alt="#" />
                   </div>
                   <div class="col-md-5 offset-md-1">
                      <div class="full ">
                         <img class="img-responsive js--wp-1" src="imgs/normal.jpg" alt="#" />
                         <p class="js--wp-1">Ci pana fest pekni sme a blaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaa</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
      </section>
      <section class="members">
          <div id="hiw" class="hiw_section layout_padding " style="background: #1a2428;">
             <div class="container">
                <div class="row">
                   <div class="col-md-7">
                      <h3 class="membersh3">Členovia</h3>
                      
                   </div>
                   <div class="col-md-5">
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-3 membershover js--wp-2">
                        <a href="#" onclick="goto('members.html#dominik')">
                            <img class="margin_top_30 img-responsive" src="imgs/dominik.jpg" alt="Dominik Mosorjak" />
                            <h3 class="blog_head">Dominik</h3>
                            
                        </a>
                    </div>
                    <div class="col-md-3 membershover js--wp-2">
                        <a href="#" onclick="goto('members.html#majo')">
                            <img class="margin_top_30 img-responsive" src="imgs/majo.jpg" alt="Marián Poliščák" />
                            <h3 class="blog_head">Marián</h3>
                        </a>
                    </div>
                    <div class="col-md-3 membershover js--wp-3">
                        <a href="#" onclick="goto('members.html#natalia')">
                            <img class="margin_top_30 img-responsive" src="imgs/natalia.jpg" alt="Natália Rybovičová" />
                            <h3 class="blog_head">Natália</h3>
                        </a>
                    </div>
                    <div class="col-md-3 membershover js--wp-3">
                        <a href="#" onclick="goto('members.html#jano')">
                            <img class="margin_top_30 img-responsive" src="imgs/jano.jpg" alt="Ján Štucka" />
                            <h3 class="blog_head">Ján</h3>
                        </a>
                    </div>
                </div>
             </div>
          </div>
      </section>
      <section class="last-events js--section-last-events">
          <div id="service" class="hiw_section layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-7">
                      <h3>Foto + popis z posledných akcií (Niečo ako fotogaléria, po rozkliknutí sa otvorí veľká fotka)</h3>
                      <p>Treba niečo pri nahrávaní obrázkov na orezávanie aby boli v takej veľkosti aby ich dobre zobrazovalo.</p>
                   </div>
                   <div class="col-md-5">
                   </div>
                </div>
                <?php
                    $query_zaznamy="SELECT * FROM `lastevents` ORDER BY dateOfEvent DESC";
				    $apply_zaznamy=mysqli_query($connect,$query_zaznamy);
                    $result_zaznamy=mysqli_fetch_array($apply_zaznamy);
                 ?>
                <div class="row">
                   <div class="col-md-8 service_blog lasteventhover">
                    <a href="#" onclick="goto('lastEvents.php#<?php echo $result_zaznamy['id']; ?>')">
                      <img class="margin_top_30 img-responsive" src="<?php echo $result_zaznamy['path']; ?>" alt="#" />
                      <h3 class="blog_head"><?php echo $result_zaznamy['name']; ?></h3>
                    </a>
                   </div>
                   <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
                   <div class="col-md-4 service_blog lasteventhover">
                     <a href="#" onclick="goto('lastEvents.php#<?php echo $result_zaznamy['id']; ?>')">
                      <img class="margin_top_30 img-responsive" src="<?php echo $result_zaznamy['path']; ?>" alt="#" />
                      <h3 class="blog_head"><?php echo $result_zaznamy['name']; ?></h3>
                     </a>
                   </div>
                   <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
                   <div class="col-md-4 service_blog lasteventhover">
                     <a href="#" onclick="goto('lastEvents.php#<?php echo $result_zaznamy['id']; ?>')">
                      <img class="margin_top_30 img-responsive" src="<?php echo $result_zaznamy['path']; ?>" alt="#" />
                      <h3 class="blog_head"><?php echo $result_zaznamy['name'];?></h3>
                     </a>
                   </div>
                   <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
                   <div class="col-md-4 service_blog lasteventhover">
                     <a href="#" onclick="goto('lastEvents.php#<?php echo $result_zaznamy['id']; ?>')">
                      <img class="margin_top_30 img-responsive" src="<?php echo $result_zaznamy['path']; ?>" alt="#" />
                      <h3 class="blog_head"><?php echo $result_zaznamy['name']; ?></h3>
                     </a>
                   </div>
                   <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
                   <div class="col-md-4 service_blog lasteventhover">
                     <a href="#" onclick="goto('lastEvents.php#<?php echo $result_zaznamy['id']; ?>')">
                      <img class="margin_top_30 img-responsive" src="<?php echo $result_zaznamy['path']; ?>" alt="#" />
                      <h3 class="blog_head"><?php echo $result_zaznamy['name']; ?></h3>
                     </a>
                   </div>
                </div>
             </div>
          </div>
      </section>
      <div id="na" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">Tu by boli 4 najbližšie akcie na ktorých hráme, a ich miesta kde by nás mohli ľudia videieť/počuť</h3>
                  <p class="white_font">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <img class="margin_top_30 img-responsive" src="imgs/blog1.jpg" alt="#" />
                  <h3 class="blog_head">Book Online</h3>
               </div>
               <div class="col-md-3">
                  <img class="margin_top_30 img-responsive" src="imgs/blog2.jpg" alt="#" />
                  <h3 class="blog_head">Confirmation</h3>
               </div>
               <div class="col-md-3">
                  <img class="margin_top_30 img-responsive" src="imgs/blog3.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
               <div class="col-md-3">
                  <img class="margin_top_30 img-responsive" src="imgs/blog1.jpg" alt="#" />
                  <h3 class="blog_head">Book Online</h3>
               </div>
            </div>
         </div>
      </div>
      <section class="playlist js--section-playlist">
          <div id="ukazky" class="hiw_section layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-7">
                      <h3>Ukážky dajaké 2 videjká a tlačidlo s presmerovaním na youtube kanál</h3>
                      <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                   </div>
                   <div class="col-md-5">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                      <img class="margin_top_30 img-responsive" src="imgs/blog1.jpg" alt="#" />
                      <h3>Book Online</h3>
                   </div>
                   <div class="col-md-6">
                      <img class="margin_top_30 img-responsive" src="imgs/blog2.jpg" alt="#" />
                      <h3>Confirmation</h3>
                   </div>
                </div>
             </div>
          </div>
      </section>
      <div id="booking" class="hiw_section layout_padding" style="background: #eeefef;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Rezervacia na aky typ akcie kde kedy ako po odoslani rezervacky nam pride mail a komunikujeme uz len mailom</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <form>
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email" />
                        <input type="text" placeholder="Phone Number" />
                        <input type="text" placeholder="Type of Service">
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="SEND">
                     </form>
                  </div>
               </div>
               <div class="col-md-5 text_align_center">
                  <img class="img-responsive" src="imgs/man_cartoon.png" alt="#" />
               </div>
            </div>
         </div>
      </div>
      <div id="wcs" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4" id="contact">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Kontakty mapka ku skusobni a dajak pekne to rozlozit</h3>
          </div>
          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Send message</label>
          </div>
          <div class="text-center">
            <button class="btn btn-light-blue">Submit</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>New York, 94126</p>
          <p class="mb-md-0">United States</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>+ 01 234 567 89</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>info@gmail.com</p>
          <p class="mb-0">sale@gmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
         </div>
      </div>
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
            document.location = $hashtag;
            }
        </script>
   </body>
</html>