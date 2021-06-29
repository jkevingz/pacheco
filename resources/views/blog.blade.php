<!DOCTYPE html>
<html>

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
  <link rel="stylesheet" id="style-main" href="css/styles-main.css?v=3">
  <link rel="stylesheet" id="swiper-main" href="vendors/swiper/swiper.min.css">
  <link rel="stylesheet" id="lity-main" href="vendors/lity/lity.min.css">
  <link rel="stylesheet" id="mediaelementplayer" href="vendors/mediaelement/mediaelementplayer.min.css">
  <link rel="stylesheet" id="range" href="vendors/range/jquery.range.css">
  <link rel="stylesheet" id="lightgallery" href="vendors/lightgallery/lightgallery.min.css">
  <link rel="stylesheet" id="style-link" href="css/styles-15.css?v=35">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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

  <script src="https://kit.fontawesome.com/e367809d08.js" crossorigin="anonymous"></script>
</head>

<body data-anm=".anm" class="antialiased">

  @include('layouts.menu')

<div class="aheto-titlebar aheto-titlebar--height-150">
    <div class="aheto-titlebar__main   c-1">
      <div class="aheto-titlebar__content w-1200">
        <div class="aheto-titlebar__text ">
          <h3 class="aheto-titlebar__title  t-white t-light t-center  ">Blog Masonry</h3>
        </div>
      </div>
    </div>
  </div>
  
  <div class="contaiter m-5">

    <div class="card">
      <h5 class="card-header">Nota de Blog</h5>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi accusamus, fuga minima veniam perspiciatis error eaque magnam mollitia in recusandae itaque labore quia iste dicta soluta voluptatem inventore, incidunt natus.</p>
        <button type="button" data-toggle="modal" data-target="#modalVerMas" class="btn btn-outline-danger">
          Ver más
          <i class="fas fa-eye"></i>
        </button>
      </div>
    </div>

  </div> <!-- container -->



  <div class="modal" id="modalVerMas" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Nota de Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <img width="100%" height="100%" src="img/main/image-2.jpg" alt="">
            </div>
            <div class="col">
              <p>Texto Completo - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta at totam maiores in nemo quae eius pariatur amet qui rem ut culpa, tempore fuga? Veritatis inventore possimus dicta ea excepturi.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<!--Pie de Pagina-->
@include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>