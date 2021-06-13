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

<div class="container-fluid border-top">
  </div>
  <div class="container">
    
  </div>
  <div class="container-fluid retreat--0">
    <div class="row">
      <div class="col-md-12">
        <div class="aheto-single-img    ">
          <img src="img/inner-pages/portfolio/image-1.png" class="w-100" alt="single img">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row margin-lg-110t margin-md-75t margin-sm-45t">
      <div class="col-md-7 col-lg-8">
        <div class="aheto-heading  aheto-heading--margin-40">
          <h2 class="aheto-heading__title t-light ">Bienvenidos a <b>HTL Electronics</b></h2>
          <p class="aheto-heading__desc   "><br>
            HTL Electronics es una empresa Norte Americana dedicada a la industria colaborativa y automatización. Nuestro equipo se enfoca en ayudar a nuestros clientes a realizar proyectos a través de nuestra consultoría y entrenamiento, nosotros somos tu socio, no un distribuidor más.
            <br>
            <br>
            Cada cliente requiere una estratega para la correcta implantación de cobots. Nuestros ingenieros que, con experiencia en diversas áreas de manufactura, ofrecen las herramientas correctas para la manipulación de objetos, cálculo de tiempos de ciclo, análisis de seguridad acorde a las normas de la industria colaborativa y capacitación en función de cada uno de los grupos de trabajo en diferentes empresas, creando una rampa de aprendizaje.</p>
        </div>
        <div class="row margin-lg-60t margin-sm-30t">
          <div class="col-md-12">
            <div class="aheto-btn-container  ">
              <a href="/contacto" style="" class="aheto-btn      aheto-btn--shadow  ">
                {{__('Contáctenos')}}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-3 offset-lg-1 margin-sm-50t margin-md-10t">
        <div class="row">
          <div class="col-md-12">
            <div class="aheto-heading  aheto-heading">
              <h6 class="aheto-heading__title          t-medium ">{{__('Ubicación')}}</h6>
              <p class="aheto-heading__desc   ">Calle Industria Naviera No. 41 Zapopan, Jal.</p>
            </div>
          </div>
        </div>
        <div class="row margin-lg-35t margin-sm-15t">
          <div class="col-md-12">
            <div class="aheto-heading  aheto-heading">
              <h6 class="aheto-heading__title          t-medium ">{{__('Correo')}}</h6>
              <p class="aheto-heading__desc   ">kfigueroa@htlelec.com</p>
            </div>
          </div>
        </div>
        <div class="row margin-lg-35t margin-sm-15t">
          <div class="col-md-12">
            <div class="aheto-heading  aheto-heading">
              <h6 class="aheto-heading__title          t-medium ">{{__('Servicio')}}</h6>
              <p class="aheto-heading__desc   ">Training Center</p>
            </div>
          </div>
        </div>
        <div class="row margin-lg-35t margin-sm-15t">
          <div class="col-md-12">
            <div class="aheto-heading  aheto-heading">
              <h6 class="aheto-heading__title t-medium ">{{__('Seguirnos')}}</h6>
            </div>
          </div>
          <div class="col-md-12 margin-lg-20t">
            <div class="aht-socials aheto-socials--circle">
              <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
                <i class="aht-socials__icon icon ion-social-facebook"></i>
              </a>
              <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
                <i class="aht-socials__icon icon ion-social-twitter"></i>
              </a>
              <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
                <i class="aht-socials__icon icon ion-social-tumblr"></i>
              </a>
              <a class="aht-socials__link aht-btn--dark aht-btn--trans " href="#">
                <i class="aht-socials__icon icon ion-social-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="wrap-1750px">
    <div class="container-fluid">
      <div class="row margin-lg-120t margin-md-75t margin-sm-45t">
        <div class="col-md-6">
          <div class="aheto-single-img t-center   ">
            <img src="img/inner-pages/portfolio/image-2.jpg" class="aheto-single-img__img--h560   w-100" alt="single img">
          </div>
        </div>
        <div class="col-md-6 margin-sm-15t">
          <div class="aheto-single-img t-center   ">
            <img src="img/inner-pages/portfolio/image-3.png" class="aheto-single-img__img--h560   w-100" alt="single img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row margin-lg-115t margin-md-80t margin-sm-50t">
      <div class="col-md-12">
        <div class="aheto-heading  ">
          <h2 class="aheto-heading__title t-light ">{{__('QUEREMOS SER TU SOLUCIÓN, ESTAMOS LISTOS PARA HACER LA DIFERENCIA.')}}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="wrap-1750px">
    <div class="container-fluid">
      <div class="row margin-lg-90t margin-lg-110b margin-md-80t margin-md-80b margin-sm-50t margin-sm-0b">
        <div class="col-md-6">
          <div class="aheto-single-img t-center   ">
            <img src="img/inner-pages/portfolio/image-13.png" class="aheto-single-img__img--h560   w-100" alt="single img">
          </div>
        </div>
        <div class="col-md-6">
          <div class="row margin-lg-60t text_margin">
            <div class="col-md-12 offset-md-0 col-lg-8 offset-lg-1 margin-md-30b margin-xs-30t">
              <p><h3>{{__('Historia')}}</h3></p>
              <p>{{__('Iniciamos operaciones en el año 2009, con ventas al por mayor de componentes electrónicos y automatización industrial, satisfaciendo cada una de las necesidades de nuestros clientes, brindándoles el mejor tiempo de entrega, precio y servicio.')}}</p>
              <p>{{__('En 2015, nos convertimos en el distribuidor líder de Robots Colaborativos y automatización industrial, destacándonos por nuestros servicios y soluciones en ingeniería, convirtiéndonos en el principal proveedor de empresas multinacionales.')}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row margin-lg-160t margin-md-80t margin-sm-20t margin-lg-70b margin-md-40b">
      <div class="col-md-12">
        <div class="aheto-heading t-center ">
          <h2 class="aheto-heading__title          t-light ">Education & Work <span>Experiences</span></h2>
          <p class="aheto-heading__desc   ">Recognised and awarded by Envato on multiple occasions</p>
        </div>
      </div>
    </div>
    <div class="row margin-lg-100b margin-md-60b">
      <div class="col-lg-10 offset-lg-1">
        <div class="aheto-time-scale">
          <div class="aheto-time-scale__item ">
            <div class="aheto-time-scale__content">
              <h6 class="aheto-time-scale__title t-bold">FOUNDING HER FIRM (2008)</h6>
              <div class="aheto-time-scale__photo"><img src="img/inner-pages/additional-page/author-timaScale-1.jpg" class="js-bg" alt="time-scale"></div>
              <p>We are idea-driven, working with a strong focus on design and user experience. Our projects should engage</p>
            </div>
            <div class="aheto-time-scale__info">
              <div class="aheto-time-scale__date">2008 - 2010</div>
            </div>
          </div>
          <div class="aheto-time-scale__item reversed">
            <div class="aheto-time-scale__content">
              <h6 class="aheto-time-scale__title t-bold">WIDEN THE WORKING SCOPE (2010)</h6>
              <div class="aheto-time-scale__photo"><img src="img/inner-pages/additional-page/author-timaScale-2.jpg" class="js-bg" alt="time-scale"></div>
              <p>We are idea-driven, working with a strong focus on design and user experience. Our projects </p>
            </div>
            <div class="aheto-time-scale__info">
              <div class="aheto-time-scale__date">2010 - 2011</div>
            </div>
          </div>
          <div class="aheto-time-scale__item ">
            <div class="aheto-time-scale__content">
              <h6 class="aheto-time-scale__title t-bold">FIRST BIG COMMISIONS (2011)</h6>
              <div class="aheto-time-scale__photo"><img src="img/inner-pages/additional-page/author-timaScale-3.jpg" class="js-bg" alt="time-scale"></div>
              <p>We are idea-driven, working with a strong focus on design and user experience. Our projects should engage</p>
            </div>
            <div class="aheto-time-scale__info">
              <div class="aheto-time-scale__date">2011 - 2015</div>
            </div>
          </div>
          <div class="aheto-time-scale__item reversed">
            <div class="aheto-time-scale__content">
              <h6 class="aheto-time-scale__title t-bold">RECEIVING AD100 AWARD (2015)</h6>
              <div class="aheto-time-scale__photo"><img src="img/inner-pages/additional-page/author-timaScale-4.jpg" class="js-bg" alt="time-scale"></div>
              <p>We are idea-driven, working with a strong focus on design and user experience. Our projects </p>
            </div>
            <div class="aheto-time-scale__info">
              <div class="aheto-time-scale__date">2015 - Now</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-wrap-c-active">
    <div class="container-fluid retreat--0">
      <div class="row">
        <div class="col-lg-6">
          <div class="aheto-single-img t-center   ">
            <img src="img/inner-pages/portfolio/image-5.png" class="aheto-single-img__img--h960   w-100" alt="single img">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aheto-blockquote aheto-blockquote--portfolio-01">
            <blockquote class="aheto-blockquote__quote">
              <h2 class="aheto-blockquote__title t-left"><ul>
                <li>EXCELENCIA</li>
                <li>RESPONSABILIDAD</li>
                <li>COLABORACIÓN</li>
                <li>SERVICIO</li>
                <li>INNOVACIÓN</li>
                <li>GRATITUD</li>
              </ul>
                </h2>
              <p class="aheto-blockquote__author t-left">Sin dejar a un lado nuestros valores que nos distinguen como empresa.</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--Pie de Pagina-->
@include('layouts.footer')

</body>

</html>