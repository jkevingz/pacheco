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

<div class="aheto-titlebar aheto-titlebar--height-150">
    <div class="aheto-titlebar__main   c-1">
      <div class="aheto-titlebar__content w-1200">
        <div class="aheto-titlebar__text ">
          <h3 class="aheto-titlebar__title  t-white t-light t-center  ">Blog Masonry</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="aht-page container margin-lg-100b margin-lg-120t margin-md-80t margin-md-80b margin-sm-50t margin-sm-50b
    aht-page--no-sb">
    <div class="aht-page__inner">
      <div class="aht-page__content">
        <div class="aht-page__content-inner">
          <div class="masonry">
            <div class="blog--masonry__item">
              <article class="post format-image">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/Image-one.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-image">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/Image-two.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-quote">
                <div class="content-top-wrapper">
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                  </div>
                </div>
                <div class="content-quote-wrapper">
                  <p>Follow your passion, be prepared to work hard and sacrifice, don’t let anyone limit your dreams.</p>
                  <cite>- Michale vouge</cite>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item ">
              <article class="post format-image safari-margin">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/image-9.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-standard">
                <div class="content-top-wrapper">
                  <div class="post-cats">
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-image">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/image-4.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-video">
                <div class="content-top-wrapper">
                  <div class="image-wrapper video-wrapper">
                    <a href="https://www.youtube.com/watch?v=668nUCeBHyY" data-lity>
                      <img width="1280" height="720" src="img/inner-pages/blog/image-5.jpg" class="js-bg" alt="">
                    </a>
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-image">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/image-6.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Tips</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-image">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/image-7.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-audio">
                <div class="content-top-wrapper">
                  <div class="post-cats">
                    <a href="#" rel="category tag">Music</a>
                  </div>
                  <div class="audio-wrapper">
                    <audio controls>
                      <source src="audio/audio-sample.mp3" type="audio/mpeg">
                    </audio>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-quote">
                <div class="content-top-wrapper">
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                  </div>
                </div>
                <div class="content-quote-wrapper">
                  <p>Follow your passion, be prepared to work hard and sacrifice, don’t let anyone limit your dreams.</p>
                  <cite>- Michale vouge</cite>
                </div>
              </article>
            </div>
            <div class="blog--masonry__item">
              <article class="post format-image">
                <div class="content-top-wrapper">
                  <div class="image-wrapper">
                    <img src="img/inner-pages/blog/image-8.jpg" alt="" class="js-bg">
                  </div>
                  <div class="post-cats">
                    <a href="#" rel="category tag">Web design</a>
                  </div>
                </div>
                <div class="content-wrapper">
                  <p class="post-date">25 Jul, 2019</p>
                  <h1 class="post-title"><a href="#">The road to resilient Web Design</a></h1>
                  <div class="post-content">
                    <p>Design adds clarity. Using colour, typo graphy, hierarchy, contrast, and all the other tools at their disposal, designers can take an unordered jumble of...</p>
                  </div>
                  <a href="#" class="aheto-btn aheto-btn--underline">Read full post</a>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="aht-page__content-inner">
          <div class="margin-lg-80t margin-md-60t margin-sm-30t">
            <div class="blog-pagination-wrapper blog-pagination-wrapper--without-numbers">
              <div class="pagination">
                <a href="#" class="prev page-numbers"><span><i class="icon ion-arrow-left-c"></i>PREV</span></a>
                <div class="wrap">
                  <span class="page-numbers current">1</span>
                  <a class="page-numbers" href="#">2</a>
                  <a class="page-numbers" href="#">3</a>
                  <a class="page-numbers" href="#">4</a>
                </div>
                <a href="#" class="next page-numbers"><span>NEXT<i class="icon ion-arrow-right-c"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--Pie de Pagina-->
@include('layouts.footer')

</body>

</html>