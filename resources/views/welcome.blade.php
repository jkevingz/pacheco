<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="img/favicon-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="img/favicon-180x180.png" />
  <meta name="msapplication-TileImage" content="img/favicon-270x270.png" />

  <title>HTL Electronics SA de CV</title>

  <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|Poppins:300,400,400i,600|Source+Sans+Pro:400,400i,600,700,900|Mukta:400,700,800|Oswald:400,600|Lato:400,400i,700|Roboto:300,400,500,700|Roboto+Slab:400,700|Playfair+Display:400,400i,700i,700|Catamaran:300,400,500,600,700,900|Merriweather:400,700|Montserrat:400,500,600|Nunito|Open+Sans:300,400,500,600|Caveat:400,700|Dancing+Script|Libre+Baskerville:400,700"
    rel="stylesheet">
  <!-- STYLES -->
  <!-- Main Style -->
   <link rel="stylesheet" id="style-link" href="css/styles-15.css?v=35">
   <link rel="stylesheet" id="style-main" href="css/styles-main.css?v=3">
   <link rel="stylesheet" id="swiper-main" href="vendors/swiper/swiper.min.css">
   <link rel="stylesheet" id="lity-main" href="vendors/lity/lity.min.css">
   <link rel="stylesheet" id="mediaelementplayer" href="vendors/mediaelement/mediaelementplayer.min.css">
   <link rel="stylesheet" id="range" href="vendors/range/jquery.range.css">
   <link rel="stylesheet" id="lightgallery" href="vendors/lightgallery/lightgallery.min.css">

  <!-- SCRIPTS -->
  <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-migrate-1.3.0.js" integrity="sha256-/Gj+NlY1u/J2UGzM/B2QrWR01trK8ZZqrD5BdqQUsac=" crossorigin="anonymous"></script>
  <!-- Swiper -->
   <script src="vendors/swiper/swiper.min.js"></script>
  <!-- Isotope -->
   <script src="vendors/isotope/isotope.pkgd.min.js"></script>
  <!-- Images loaded library -->
   <script src="vendors/lazyload/imagesloaded.pkgd.min.js"></script>
  <!-- MediaElement js library (only for Aheto HTML) -->
   <script src="vendors/mediaelement/mediaelement.min.js"></script>
   <script src="vendors/mediaelement/mediaelement-and-player.min.js"></script>
  <!-- Typed animation text -->
   <script src="vendors/typed/typed.min.js"></script>
  <!-- Lity Lightbox -->
   <script src="vendors/lity/lity.min.js"></script>
</head>

<body data-anm=".anm" class="antialiased">

@include('layouts.menu')

<!-- Galeria -->

  <div class="swiper swiper--banner-hp home-banner ">
    <div class="swiper-container " data-speed="2000" data-loop="true" data-spaceBetween="0" data-slidesPerView="responsive" data-add-slides="1" data-lg-slides="1" data-md-slides="1" data-sm-slides="1" data-xs-slides="1" data-effect="fade">
      <div class="swiper-wrapper ">
        <div class="swiper-slide ">
          <div class="aht-ban aht-ban--main aht-ban--main-1 t-center">
            <img class="js-bg" src="img/main/home-page/image-1.jpg" alt="Background">
            <div class="aht-ban__content">
              <h1 class="aht-ban__title">{{ __('HTL Electronics es la solución para la industria colaborativa. Nosotros ofrecemos una estrategia única a cada empresa para lograr una correcta implementación de cobots.') }}</h1>
              <h5 class="aht-ban__desc">#BeTheBest_BeHTL</h5>
              <div class="aht-ban__links">
                <div class="aht-ban__link-wrap">

                </div>
                <div class="aht-ban__link-wrap">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="aht-ban aht-ban--main t-center">
            <img class="js-bg" src="img/main/home-page/image-2.jpg" alt="Background">
            <div class="aht-ban__content">
              <a class="aht-ban__video js-mp-video" href="https://www.youtube.com/watch?v=myifiXG1WUA">
                <i class="icon ion-play"></i>
              </a>
              <h1 class="aht-ban__title">Your landing page. Reinvigorated.</h1>
              <h5 class="aht-ban__desc">Build lean, beautiful websites with a clean and contemporary</h5>
            </div>
          </div>
        </div>
        <div class="swiper-slide ">
          <div class="aht-ban aht-ban--main aht-ban--main-3 ">
            <img class="js-bg" src="img/main/home-page/image-3.jpg" alt="Background">
            <div class="aht-ban__content">

              <h1 class="aht-ban__desc">Training Center</h1>

              <h3 class="aht-ban__title">En nuestro Centro de Capacitación <br> ofrecemos cursos de todo tipo de entrenamientos <br> de automatización, desde disciplinas básicas a avanzadas <br> para que pueda aprovechar al máximo su inversión en producción.</h3>

              <div class="aht-ban__links">
                <a class="aht-ban__link aheto-btn t-uppercase margin-lg-15r" href="#">Calendario</a>
                <a class="aht-ban__link aheto-btn aheto-btn--light t-uppercase margin-xs-20t" href="#">Ver Más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-prev">
    </div>
    <div class="swiper-button-next">
    </div>
  </div>

  <!--Contenido -->

  <div class="container-fluid border-bottom">
    <div class="container">
      <div class="row margin-lg-140t margin-sm-50t margin-md-80t padding-lg-120b padding-md-80b padding-sm-50b">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12 margin-lg-30b">
              <div class="aht-headingaht-heading--main ">
                <h2 class="aht-heading__title">Acerca de <b>HTL Electronics.</b></h2>
                <p class="aht-heading__desc">HTL Electronics es una empresa dedicada a la distribución de robótica colaborativa, automatización industrial y componentes electrónicos.</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 margin-md-30b">
              <div class="aheto-btn-container  ">
                <a href="../karma/Nosotros/Nosotros.html" style="" class="aheto-btn  aheto-btn--underline    ">
                  Ver Más
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 margin-md-30b">
          <div class="aht-cb aht-cb--main main-home-cb ">
            <div class="aht-cb__img">
              <img class="js-bg" src="img/main/image-1.jpg" alt="Content block image" style="display: none;">
            </div>
            <div class="aht-cb__caption">

              <h5 class="aht-cb__title">Formación Presencial - Certificación UR</h5>
            </div>
            <p class="aht-cb__desc">HTL Training Center - El primer Centro de Capacitación autorizado en Latinoamérica de un Distribuidor (HTL Electronics) para impartir los nuevos primeros cursos de certificación de Universal Robots A/S Certifícate con el equipo de ingenieros más enfocado en la Industria Colaborativa del País.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="aht-cb aht-cb--main main-home-cb ">
            <div class="aht-cb__img">
              <img class="js-bg" src="img/main/image-2.jpg" alt="Content block image" style="display: none;">
            </div>
            <div class="aht-cb__caption">
              <i class="aht-cb__icon icon ti-pencil-alt"></i>
              <h5 class="aht-cb__title">Web Interactive</h5>
            </div>
            <p class="aht-cb__desc">We interlace our creative with solid marketing and branding principles. A
              strong brand. Our websites look great, but each page has</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="tab-gradien-wrapp padding-lg-130b padding-md-80b padding-sm-50b">
    <div class="container">
      <div class="row margin-lg-120t margin-md-80t margin-sm-60t margin-lg-45b margin-md-30b ">
        <div class="col-md-12">
          <div class="aheto-heading t-center ">
            <h2 class="aheto-heading__title          t-light ">Formación/Logros/Reconocimiento <b>HTL Electronics</b></h2>
            <p class="aheto-heading__desc   ">#BeTheBest_BeHTL</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 padding-md-0b">
          <div class="aheto-tab js-tab aheto-tab--simple ">
            <div class="aheto-tab__head margin-md-55b">
              <ul class="aheto-tab__list ">
                <li class="aheto-tab__list-item active">
                  <a href="#" class="aheto-tab__list-link js-tab-list">
                    <i class="aheto-tab__list-ico "></i>
                    Htl Electronics
                  </a>
                </li>
                <li class="aheto-tab__list-item ">
                  <a href="#" class="aheto-tab__list-link js-tab-list">
                    <i class="aheto-tab__list-ico "></i>
                    <i class="aheto-tab__list-ico "></i>Reconocimiento
                  </a>
                </li>
                <li class="aheto-tab__list-item ">
                  <a href="#" class="aheto-tab__list-link js-tab-list">
                    <i class="aheto-tab__list-ico "></i>
                    Soporte Técnico
                  </a>
                </li>
                <li class="aheto-tab__list-item ">
                  <a href="#" class="aheto-tab__list-link js-tab-list">
                    <i class="aheto-tab__list-ico "></i>
                    Training Center
                  </a>
                </li>
              </ul>
            </div>
            <div class="aheto-tab__content ">
              <div class="aheto-tab__box js-tab-box  active ">
                <div class="aheto-tab__box-inner">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="aheto-single-img t-center   ">
                        <img src="../img/inner-pages/single-img/single-img-1.png" class="   w-100" alt="single img">
                      </div>
                    </div>
                    <div class="col-md-5 margin-lg-25t margin-md-0t">
                      <div class="aheto-heading  ">
                        <h3 class="aheto-heading__title          t-light ">Training Center</h3>
                        <p class="aheto-heading__desc   ">HTL Training Center - El primer Centro de Capacitación autorizado en Latinoamérica de un Distribuidor (HTL Electronics) para impartir los nuevos primeros cursos de certificación de Universal Robots A/S Certifícate con el equipo de ingenieros más enfocado en la Industria Colaborativa del País.</p>
                      </div>
                      <div class="aheto-btn-container margin-lg-45t margin-md-25t ">
                        <a href="#" style="" class="aheto-btn      aheto-btn--shadow  ">
                          Ver Más...
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aheto-tab__box js-tab-box   ">
                <div class="aheto-tab__box-inner">
                  <div class="row">
                    <div class="col-md-6 margin-md-0t">
                      <div class="aheto-heading  ">
                        <h3 class="aheto-heading__title          t-light ">Quickly admit them quickly</h3>
                        <p class="aheto-heading__desc   ">Quickly and afforadably is important for modern startups — Stack offers massive value without looking ‘bargain-bin’.</p>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="aheto-single-img t-center">
                        <img src="img/inner-pages/single-img/single-img-1.png" class="w-100" alt="single img">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aheto-tab__box js-tab-box">
                <div class="aheto-tab__box-inner">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="aheto-single-img t-center">
                        <img src="img/inner-pages/single-img/single-img-1.png" class="   w-100" alt="single img">
                      </div>
                    </div>
                    <div class="col-md-5 margin-lg-25t margin-md-0t">
                      <div class="aheto-heading  ">
                        <h3 class="aheto-heading__title t-light ">It is best to admit</h3>
                        <p class="aheto-heading__desc   ">Launching an attractive and scalable website quickly and afforadably is important for modern startups — Stack offers massive value without looking ‘bargain-bin Launching an attractive and
                          scalable website quickly and afforadably is important for modern startups — Stack offers massive value without looking ‘bargain-bin’.</p>
                      </div>
                      <div class="aheto-btn-container  ">
                        <div class="aheto-btn-container  ">
                        <a href="#" style="" class="aheto-btn      aheto-btn--shadow  ">
                          Ver Más...
                        </a>

                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aheto-tab__box js-tab-box   ">
                <div class="aheto-tab__box-inner">
                  <div class="row">
                    <div class="col-md-6 margin-md-0t">
                      <div class="aheto-heading  ">
                        <h3 class="aheto-heading__title t-light ">Training Center</h3>
                        <p class="aheto-heading__desc   ">HTL Training Center - El primer Centro de Capacitación autorizado en Latinoamérica de un Distribuidor (HTL Electronics) para impartir los nuevos primeros cursos de certificación de Universal Robots A/S Certifícate con el equipo de ingenieros más enfocado en la Industria Colaborativa del País.</p>
                      </div>
                      <div class="aheto-btn-container  ">
                        <a href="#" style="" class="aheto-btn      aheto-btn--shadow  ">
                          Ver Más...
                        </a>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="aheto-single-img t-center   ">
                        <img src="img/inner-pages/single-img/single-img-1.png" class="   w-100" alt="single img">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!--Contenido Part-->

  <div class="container">
    <div class="row margin-lg-115t margin-md-65t margin-lg-25b">
      <div class="col-md-12">
        <div class="aheto-heading t-center ">
          <h2 class="aheto-heading__title          t-light ">Partners</h2>

        </div>
      </div>
    </div>
    <div class="row margin-lg-15t margin-lg-65b margin-lg-45b margin-sm-50b">
      <div class="col-lg-10 offset-md-1">
        <div class="aheto-clients aheto-clients--3-in-row">
          <div class="aheto-clients__holder">
            <a href="#" class="aheto-clients__link">
              <img class="aheto-clients__img" src="img/home/client1.png" alt="Clients logo image">
            </a>
          </div>
          <div class="aheto-clients__holder">
            <a href="#" class="aheto-clients__link">
              <img class="aheto-clients__img" src="img/home/client2.png" alt="Clients logo image">
            </a>
          </div>
          <div class="aheto-clients__holder">
            <a href="#" class="aheto-clients__link">
              <img class="aheto-clients__img" src="img/home/client3.png" alt="Clients logo image">
            </a>
          </div>
          <div class="aheto-clients__holder">
            <a href="#" class="aheto-clients__link">
              <img class="aheto-clients__img" src="img/home/client4.png" alt="Clients logo image">
            </a>
          </div>
          <div class="aheto-clients__holder">
            <a href="#" class="aheto-clients__link">
              <img class="aheto-clients__img" src="img/home/client5.png" alt="Clients logo image">
            </a>
          </div>
          <div class="aheto-clients__holder">
            <a href="#" class="aheto-clients__link">
              <img class="aheto-clients__img" src="img/home/client6.png" alt="Clients logo image">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Testimonio-->



  <!--Galeria-->

  <div class="container">
    <div class="row margin-lg-115t margin-md-65t margin-lg-45b">
      <div class="col-md-8 offset-md-2">
        <div class="aheto-heading t-center ">
          <h2 class="aheto-heading__title          t-light ">Galeria <b>HTL Electronics</b></h2>

        </div>
      </div>
    </div>
  </div>
  <div class="swiper swiper--websites ">
    <div class="swiper-container " data-delay="4000" data-speed="1000" data-loop="true" data-centeredSlides="true" data-spaceBetween="50" data-slidesPerView="auto" data-add-slides="3" data-lg-slides="3" data-md-slides="2" data-sm-slides="1"
      data-xs-slides="1">
      <div class="swiper-wrapper ">
        <div class="swiper-slide ">
          <img src="img/main/home-page/slider-1.jpg" alt="slider img">
        </div>
        <div class="swiper-slide ">
          <img src="img/main/home-page/slider-2.jpg" alt="slider img">
        </div>
        <div class="swiper-slide ">
          <img src="img/main/home-page/slider-3.jpg" alt="slider img">
        </div>
        <div class="swiper-slide ">
          <img src="img/main/home-page/slider-4.jpg" alt="slider img">
        </div>
      </div>
    </div>
  </div>




<!--Pie de Pagina-->
@include('layouts.footer')

</body>

</html>