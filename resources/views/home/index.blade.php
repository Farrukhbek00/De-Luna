<!DOCTYPE html>
<html lang="en">
  <head>
    <title>De Luna</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap js-site-navbar bg-white">

      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="/">De Luna</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">

                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="/">Home</a>
                      </li>
                      <li><a href="/rooms">Rooms</a></li>
                      <li><a href="/about">About</a></li>
                      <li><a href="/contact">Contact</a></li>
                      <li><a href="/login">Login/Register</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/background_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">

              <h1 class="mb-2">Welcome To De Luna</h1>
              <h2 class="caption">Hotel &amp; Resort</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/background_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Unique Experience</h1>
              <h2 class="caption">Enjoy With Us</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/background_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Discover the World</h1>
              <h2 class="caption">More Savings, More Perks</h2>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Rooms</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{ route('room_order') }}" class="d-block mb-0 thumbnail"><img src="images/room_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{ route('room_order') }}">Standard Room</a></h3>
                <strong class="price">$350.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{ route('room_order') }}" class="d-block mb-0 thumbnail"><img src="images/room_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{ route('room_order') }}">Family Room</a></h3>
                <strong class="price">$400.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{ route('room_order') }}" class="d-block mb-0 thumbnail"><img src="images/room_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{ route('room_order') }}">Single Room</a></h3>
                <strong class="price">$255.00 / per night</strong>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{ route('room_order') }}" class="d-block mb-0 thumbnail"><img src="images/room_4.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{ route('room_order') }}">Deluxe Room</a></h3>
                <strong class="price">$150.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{ route('room_order') }}" class="d-block mb-0 thumbnail"><img src="images/room_5.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{ route('room_order') }}">Luxury Room</a></h3>
                <strong class="price">$200.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{ route('room_order') }}" class="d-block mb-0 thumbnail"><img src="images/room_6.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{ route('room_order') }}">Single Room</a></h3>
                <strong class="price">$155.00 / per night</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
              <div class="img-border">
                  <img src="images/about_1.jpg" alt="" class="img-fluid">
                </a>
              </div>

              <img src="images/about_2.jpg" alt="Image" class="img-fluid image-absolute">
          </div>
          <div class="col-md-5 ml-auto">
            <div class="section-heading text-left">
              <h2 class="mb-5">About Us</h2>
            </div>
            <p class="mb-4">De Luna Hotel Singapore is an award-winning heritage boutique hotel situated at the heart of Tiong Bahru estate, known to be Singapore’s oldest housing estate and the most charming neighborhood.Officially opened its door in 2007,De Luna Hotel Singapore  was the first and only hotel to be converted from conserved art deco apartment blocks that were built by Singapore Housing Development Board (HDB) in the 1950s and 1960s. The hotel comprises of 2 conserved art deco apartment blocks, known as Lotus Block & Orchid Block and are connected by the Link Bridge.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Gallery</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_1.jpg" class="image-popup img-opacity"><img src="images/hotel_1.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_2.jpg" class="image-popup img-opacity"><img src="images/hotel_2.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_3.jpg" class="image-popup img-opacity"><img src="images/hotel_3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_4.jpg" class="image-popup img-opacity"><img src="images/hotel_4.jpg" alt="Image" class="img-fluid"></a>
          </div>

          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_5.jpg" class="image-popup img-opacity"><img src="images/hotel_5.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_6.jpg" class="image-popup img-opacity"><img src="images/hotel_6.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_7.jpg" class="image-popup img-opacity"><img src="images/hotel_7.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="images/hotel_8.jpg" class="image-popup img-opacity"><img src="images/hotel_8.jpg" alt="Image" class="img-fluid"></a>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section block-14 bg-light">

      <div class="container">

        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>What People Say</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">

          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Jhon Wick</h2>
                <blockquote>&ldquo;This note serves to acknowledge, compliment and thank you and your team for the translation work you have been doing for the AGA project so far!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Bruno Mars</h2>
                <blockquote>&ldquo;You’ve impressed me over and over with your knowledge, professionalism, courtesy and responsiveness!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Emily Clarke</h2>
                <blockquote>&ldquo;De Luna is a truly outstanding company and we can all agree that you have really made our work here a success!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Peter Pan</h2>
                <blockquote>&ldquo;Customer service is excellent, willingness to support our demands. Quality is very good and that is very, very important!&rdquo;</blockquote>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <footer class="site-footer">
      <div class="container">


        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>De Luna Hotel Singapore is an award-winning heritage boutique hotel situated at the heart of Tiong Bahru estate.</p>
            <p><a href="/about" class="btn btn-primary pill text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-6">

            <div class="col-lg-8">
                <h3 class="h5 text-white mb-3">Contact Info</h3>
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">203 BroadWay St. Mountain View, San Francisco, California, USA</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4">+1 232 3235 324</p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0">administrator@deluna.com</p>
            </div>

          </div>


          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Stay in touch</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>

        </div> --}}
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>


  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>
