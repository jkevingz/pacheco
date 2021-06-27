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

  <script src="{{ asset('js/calendar.js') }}"></script>
</head>

<body data-anm=".anm" class="antialiased">

  @include('layouts.menu')

  <div id="menu">
    <span id="menu-navi">
      <button id="today" type="button" class="btn btn-default btn-sm move-today btn-navigation">
        {{ __('Hoy') }}
      </button>
      <button id="prev" type="button" class="btn btn-default btn-sm move-day btn-navigation">
        <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
      </button>
      <button id="next" type="button" class="btn btn-default btn-sm move-day btn-navigation">
        <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
      </button>
    </span>
    <span id="renderRange" class="render-range"></span>
  </div>

  <div
    id="calendar"
    data-days='@json($days)'
    data-events='@json($events)'
  >
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!--Pie de Pagina-->
  @include('layouts.footer')

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
