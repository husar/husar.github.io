<?php
include("connect.ini.php");

if(isset($_POST['rezervovat'])){
    $to = "kapela.unix@gmail.com";
    $subject = $_POST['typ'];
    $message = "<b>Meno: </b>".$_POST['meno']."<br><b>Priezvisko: </b>".$_POST['priezvisko']."<br><b>Email: </b>".$_POST['mail']."<br><b>Dátum: </b>".$_POST['datum']."<br><b>Telefńne číslo: </b>".$_POST['telefon']."<br><b>Miesto konania</b>: ".$_POST['miesto']."<br><b>Ďalšie informácie: </b>".$_POST['sprava'];
    echo '<script>alert("Ďakujeme za kontaktovanie. Odpoveď na vašu správu Vám príde na uvedený email.")</script>'; 
    // send email
    mail($to,$subject,$message);
    
    header("Refresh:0");
}
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
      <section class="nextEvents">
      <div id="na" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="nextEventsh3">Najbližšie hráme</h3>
                  <p class="white_font">Ak chceš vidieť všetky obsadené dátumy, <a href="#" onclick="goto('nextEvents.php#nextEvents')" style="font-weight:bold">klikaj tu</a>.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
              <?php
                    $query_zaznamy="SELECT * FROM `nextevents` WHERE CURDATE()<=dateOfEvent ORDER BY dateOfEvent";
				    $apply_zaznamy=mysqli_query($connect,$query_zaznamy);
                    $result_zaznamy=mysqli_fetch_array($apply_zaznamy);
                 ?>
               <!-- Free Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $result_zaznamy['place']; ?></h5>
            <h6 class="card-price text-center"><?php echo $result_zaznamy['type']; ?></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"></span><?php echo $result_zaznamy['dateOfEvent']; ?></li>
            </ul>
          </div>
        </div>
      </div>
      <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $result_zaznamy['place']; ?></h5>
            <h6 class="card-price text-center"><?php echo $result_zaznamy['type']; ?></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"></span><?php echo $result_zaznamy['dateOfEvent']; ?></li>
            </ul>
          </div>
        </div>
      </div>
      <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $result_zaznamy['place']; ?></h5>
            <h6 class="card-price text-center"><?php echo $result_zaznamy['type']; ?></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"></span><?php echo $result_zaznamy['dateOfEvent']; ?></li>
            </ul>
          </div>
        </div>
      </div>
          <?php $result_zaznamy=mysqli_fetch_array($apply_zaznamy); ?>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $result_zaznamy['place']; ?></h5>
            <h6 class="card-price text-center"><?php echo $result_zaznamy['type']; ?></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"></span><?php echo $result_zaznamy['dateOfEvent']; ?></li>
            </ul>
          </div>
        </div>
      </div>
            </div>
         </div>
      </div>
      </section>
      <section class="playlist js--section-playlist">
          <div id="ukazky" class="hiw_section layout_padding">
             <div class="container">
                <div class="row">
                   <div class="col-md-7">
                      <h3>Naša tvorba</h3>
                      <p>Ak chceš vidieť a počuť viac z našej tvorby, sleduj nás našom <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCjnBCI_vDzFi3woAcP_fLEA/" style="font-weight:bold">youtube kanály</a>.</p>
                   </div>
                   <div class="col-md-5">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                      <iframe width="400" height="345" src="https://www.youtube.com/embed/ryslZKtI5rc">
</iframe>
                      <!--<h3>Book Online</h3>-->
                   </div>
                   <div class="col-md-6">
                      <iframe width="400" height="345" src="https://www.youtube.com/embed/RgozHFNPs_0">
</iframe>
                      <!--<h3>Confirmation</h3>-->
                   </div>
                </div>
             </div>
          </div>
      </section>
      <div id="booking" class="hiw_section layout_padding booking" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Rezervuj si nás:</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                 <div class="contact-form">
                     <form role="form" action="" method="post" id="mail-form">
                        <input type="text" id="meno" name="meno" placeholder="Meno" required/>
                        <input type="text" id="priezvisko" name="priezvisko" placeholder="Priezvisko" required/>
                        <input type="email" id="mail" name="mail" placeholder="Email" required/>
                        <input type="text" id="typ" name="typ" placeholder="Typ akcie (svadba, oslava, stužková...)"/>
                        <input type="date" id="datum" name="datum" placeholder="Dátum" min= "<?php
         echo date('Y-m-d');
     ?>"/>
                        <input type="text" id="telefon" name="telefon" placeholder="Telefónne číslo" />
                        <input type="text" id="miesto" name="miesto" placeholder="Miesto konania">
                        <textarea id="sprava" name="sprava" placeholder="Správa"></textarea>
                        <input type="submit" id="rezervovat" name="rezervovat" value="Rezervovať">
                     </form>
                  </div>
                </div>
                  <div class="col-md-5 text_align_center">
                  <img class="rotate" src="imgs/logo.png" alt="#"/>
               </div>
               </div>
                <div class="col-md-6">
                  
               </div>
            </div>
         </div>
      <div id="wcs" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
            <div class="col-md-7">
                      <h3>Kontakt</h3>
            </div>
       
      <div class="row text-center" style="margin:auto;">
       
        <div class="col-md-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>0917 233 088<br>0910 145 639</p>          
        </div>
        <div class="col-md-3">
          <a class="btn-floating blue accent-1">
            <i class="fab fa-facebook-f"></i>
          </a>
          <p><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/hudobnaskupinaUNIX" style="font-weight:bold;">Hudobná skupina UNIX</a></p>
        </div>
        <div class="col-md-3">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>kapela.unix@gmail.com</p>
        </div>
        <div class="col-md-3">
          <a class="btn-floating blue accent-1">
            <i class="fab fa-instagram"></i>
          </a>
          <p><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/hudobna_skupina_unix/?hl=sk" style="font-weight:bold;">hudobna_skupina_unix</a></p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.402841484244!2d20.686894815772344!3d49.28771157933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e12b30e17329f%3A0x5de56c14bba569b1!2zSmVkw6FsZcWIIFBBTE1B!5e0!3m2!1ssk!2ssk!4v1602525387335!5m2!1ssk!2ssk" width="600" height="250" frameborder="0" style="border:0; margin:auto;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
    <!-- Grid column -->

  </div>
         </div>
     
        <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img class="logo" src="imgs/logo.png" alt="#"/>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigácia</h4>
                     <ul>
                        <li><a href="#about">Kapela</a></li>
                        <li><a href="#hiw">Členovia</a></li>
                        <li><a href="#service">Posledné akcie</a></li>
                        <li><a href="#na">Najbližšie akcie</a></li>
                        <li><a href="#ukazky">Ukážky</a></li>
                        <li><a href="#booking">Rezervácia</a></li>
                        <li><a href="#contact">Kontakty</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item contact">
                     <h4 class="text-uppercase">Kontakt</h4>
                     <p><i class="fas fa-phone"></i>0917 233 088 / 0910 145 639</p>
                     <p><i class="fab fa-facebook-f"></i><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/hudobnaskupinaUNIX" style="font-weight:bold;"> Hudobná skupina UNIX</a></p>
                     <p><i class="fas fa-envelope"></i> kapela.unix@gmail.com</p>
                     <p><i class="fab fa-instagram"></i><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/hudobna_skupina_unix/?hl=sk" style="font-weight:bold;"> hudobna_skupina_unix</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>© Ján Štucka | Kapela Unix 2020  Design by <a href="https://html.design">Free Html Templates</a></p>
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