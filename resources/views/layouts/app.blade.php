<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Baizaar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

  <link rel="stylesheet" href="css/superfish.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/hamburgers.css">
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
  <!-- start particles -->
  <figure id="particles-js"></figure>
  <!-- end particles -->


  <!-- HEADER -->
  <header class="header wow fadeInDown" id="my-header">

    <div class="hamburger-menu__overlay"></div>

    <div class="search__wrap">

      <div class="search__item" id="search__item">
        <input type="text" placeholder="Введите слово для поиска">
        <button><img src="images/loupe-white.png" alt="loupe"></button>
      </div>

    </div>

    <!-- hamburger menu -->
    <div class="hamburger-menu" id="hamburger-menu">

      <ul class="hamburger-menu__item">
        <li><a href="#">О ТРЦ</a></li>
        <li><a href="#">Режим работы</a></li>
        <li><a href="#">Акции</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="#">Арендаторам</a></li>
        <li><a href="#">Рекламодателям</a></li>
        <li><a href="#">Вакансии</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">Корпоративные события</a></li>
        <li><a href="#">Личный кабинет арендатора</a></li>
      </ul>

      <div class="hamburger-menu__bottom">

        <div class="hamburger-menu__schedule hamburger-menu__flex">
          <div class="schedule__img hamburger-left__img">
            <img src="images/menu-clock.svg" alt="">
          </div>

          <div class="schedule__text hamburger-right__text">
            <h4>График работы</h4>
            <p>с 10:00 до 22:00</p>
          </div>
        </div>

        <div class="hamburger-menu__howtoget hamburger-menu__flex">
          <div class="howtoget__img hamburger-left__img">
            <img src="images/menu-location.svg" alt="">
          </div>

          <div class="howtoget__text hamburger-right__text">
            <h4>Как добраться?</h4>
            <a href="#">Показать на карте</a>
          </div>
        </div>

      </div>
      
    </div>
    <!-- hamburger menu end -->
    

    <div class="container">

      <!-- START mobile menu -->
      <nav class="mobile-menu__item">

        <a href="#" class="mobile-menu__close">
          <img src="images/close-button.svg" alt="Закрыть">
        </a>

        <div class="mobile-logo">
          <a href="#"><img src="images/logo.png" alt="logo"></a>
        </div>

        <ul class="mobile-menu">
          @foreach($nodes as $category)
            <li><a href="#mobileMenu{{ $category->id }}">{{ $category->name }}</a></li>
            @if($category->children->count() > 0)
              <ul id="mobileMenu{{ $category->id }}" style="display: none;">
                  @foreach ($category->children as $child)
                    <li><a href="#subMenu{{ $child->id }}">{{ $child->name }}</a></li>
                    @if(in_array($child->id, $shops_category_id))
                      <ul id="subMenu{{ $child->id }}" style="display: none">
                          @foreach ($shops as $shop)
                              @if($shop->category_id == $child->id)
                                  <li><a href="#">{{ $shop->name }}</a></li>
                              @endif
                          @endforeach
                      </ul>
                    @endif
                  @endforeach
              </ul>
            @endif
          @endforeach
        </ul>

        <div class="mobile-lang">
          <select name="" id="">
            <option value="">RU</option>
            <option value="">EN</option>
            <option value="">FR</option>
          </select>
        </div>

      </nav>
      <!-- END mobile menu -->

      <div class="cap">

        <a href="#" class="mobile-menu__btn" id="mobile-menu__btn">Меню</a>

        <div class="logo">
          <a href="#"><img src="images/logo.png" alt="logo"></a>
        </div>

        <ul class="menu" id="main-menu">
          @foreach ($nodes as $category)
            <li><a href="#my-menu{{ $category->id }}">{{ $category->name }}</a>
            @if($category->children->count() > 0)
              <ul class="open-menu__block">
                  <div class="open-menu__wrap" id="my-menu{{ $category->id }}">
                      @php $children = $category->children->split(2); $childrenIds = $category->children->pluck('id')->toArray()  @endphp
                      <!-- left -->
                      <div class="open-menu__left open-menu__link wow fadeInLeft">
                        @if($children->count() > 0)
                          @foreach ($children[0] as $child)
                            <div class="open-menu__list">
                              <h3 class="open-menu__title">{{ $child->name }}</h3>
                                @foreach ($shops as $shop)
                                    @if($shop->category_id == $child->id)
                                        <li><a href="#open-menu__tab-{{ $shop->id }}">{{ $shop->name }}</a></li>
                                    @endif
                                @endforeach
                              </div>
                          @endforeach
                        @endif
                      </div>
                      <!-- left end -->
      
                      <!-- center -->
                      <div class="open-menu__left open-menu__link wow fadeInLeft">
                        @if($children->count() > 1)
                          @foreach ($children[1] as $child)
                            <div class="open-menu__list">
                              <h3 class="open-menu__title">{{ $child->name }}</h3>
                                @foreach ($shops as $shop)
                                    @if($shop->category_id == $child->id)
                                        <li><a href="#open-menu__tab-{{ $shop->id }}">{{ $shop->name }}</a></li>
                                    @endif
                                @endforeach
                              </div>
                          @endforeach
                        @endif
                      </div>
                      <!-- center end -->
      
                      <!-- right -->
                      @foreach ($shops as $shop)
                      @if(in_array($shop->category_id, $childrenIds))
                        <div class="open-menu__tab {{ $loop->first ? 'open-menu__tab__active' : ''}} wow" id="open-menu__tab-{{ $shop->id }}">
    
                          <div class="open-menu__right open-menu__right__active">
                            <div class="discount-img__wrap">
                              <div class="discount-img__top">
                                <img src="images/menu-right-img.png" alt="">
                              </div>
        
                              <div class="discount-img__bottom">
                                <img src="images/menu-right-img1.png" alt="">
                                <img src="images/menu-right-img2.png" alt="">
                                <img src="images/menu-right-img3.png" alt="">
                              </div>
                            </div>
        
                            <div class="right-contacts">
                              <h3 class="right-contacts__title">Контакты {{ $shop->id }}</h3>
                              <p>Магазин <span class="black-bold">O'STIN</span></p>
                              <p>Часы работы <span class="black-bold">10:00 - 22:00</span></p>
                              <p>Телефон <span class="black-bold">8 (800) 777-4-999</span></p>
                              <p>Сайт <span class="black-bold">www.ostin.com</span></p>
                            </div>
                          </div>
        
                        </div>
                      @endif
                      @endforeach
                      <!-- right end -->
                    </div>
              </ul>
            @endif
          </li>
          @endforeach
        </ul>

        <div class="search">
          <a href="#search__item"><img src="images/loupe.png" alt="Поиск"></a>
        </div>

        <div class="lang">
          <select name="" id="">
            <option value="">RU</option>
            <option value="">EN</option>
            <option value="">KZ</option>
          </select>
        </div>


        <a href="#hamburger-menu" class="hamburger hamburger--spin">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </a>

      </div>

    </div>

  </header>
  <!-- HEADER END -->

  <section class="main-banner" id="main-banner">

    <!-- arrow left -->
    <a href="#" class="banner-arrows banner-arrow__left"></a>
    <!-- arrow left end -->

    <!-- dots -->
    <ul class="owl-dots custom-dots" id="custom-dots">
      <li class="owl-dot active" role="button"></li>
      <li class="owl-dot" role="button"></li>
      <li class="owl-dot" role="button"></li>
      <li class="owl-dot" role="button"></li>
      <li class="owl-dot" role="button"></li>
    </ul>
    <!-- dots end -->

    <div class="main-banner__owl owl-carousel owl-theme">

      <!-- slide 1 -->
      <div class="main-banner__slide" style="background-image: url('images/banner.jpg');">

        <div class="container">

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInLeft">
              <div class="logo-flag">
                <img src="images/baizaar-flag.png" alt="baizaar">
              </div>

              <div class="banner__items">
                <h3>Ваш специалист по разному шопингу</h3>
                <a href="#" class="banner__btn">
                  Подробнее...
                  <span class="button__stroke"></span>
                  <span class="button-underline__horizontal"></span>
                  <span class="button-underline__vertical"></span>
                </a>
              </div>

            </div>

            <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight">
              <div class="banner-utp">
                <h3>Самый <span class="black-bold">современный Развлекательный центр</span> города Атырау</h3>
              </div>
            </div>

          </div>

        </div>

      </div>
      <!-- slide 1 -->


      <!-- slide 2 -->
      <div class="main-banner__slide" style="background-image: url('images/banner.jpg');">

        <div class="container">

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="logo-flag">
                <img src="images/baizaar-flag.png" alt="baizaar">
              </div>

              <div class="banner__items">
                <h3>Ваш специалист по разному шопингу</h3>
                <a href="#" class="banner__btn">
                  Подробнее...
                  <span class="button__stroke"></span>
                  <span class="button-underline__horizontal"></span>
                  <span class="button-underline__vertical"></span>
                </a>
              </div>

            </div>

            <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="banner-utp">
                <h3>Самый <span class="black-bold">современный Развлекательный центр</span> города Атырау</h3>
              </div>
            </div>

          </div>

        </div>

      </div>
      <!-- slide 2 -->

      <!-- slide 3 -->
      <div class="main-banner__slide" style="background-image: url('images/banner.jpg');">

        <div class="container">

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="logo-flag">
                <img src="images/baizaar-flag.png" alt="baizaar">
              </div>

              <div class="banner__items">
                <h3>Ваш специалист по разному шопингу</h3>
                <a href="#" class="banner__btn">
                  Подробнее...
                  <span class="button__stroke"></span>
                  <span class="button-underline__horizontal"></span>
                  <span class="button-underline__vertical"></span>
                </a>
              </div>

            </div>

            <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="banner-utp">
                <h3>Самый <span class="black-bold">современный Развлекательный центр</span> города Атырау</h3>
              </div>
            </div>

          </div>

        </div>

      </div>
      <!-- slide 3 -->

      <!-- slide 4 -->
      <div class="main-banner__slide" style="background-image: url('images/banner.jpg');">

        <div class="container">

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="logo-flag">
                <img src="images/baizaar-flag.png" alt="baizaar">
              </div>

              <div class="banner__items">
                <h3>Ваш специалист по разному шопингу</h3>
                <a href="#" class="banner__btn">
                  Подробнее...
                  <span class="button__stroke"></span>
                  <span class="button-underline__horizontal"></span>
                  <span class="button-underline__vertical"></span>
                </a>
              </div>

            </div>

            <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="banner-utp">
                <h3>Самый <span class="black-bold">современный Развлекательный центр</span> города Атырау</h3>
              </div>
            </div>

          </div>

        </div>

      </div>
      <!-- slide 4 -->

      <!-- slide 5 -->
      <div class="main-banner__slide" style="background-image: url('images/banner.jpg');">

        <div class="container">

          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="logo-flag">
                <img src="images/baizaar-flag.png" alt="baizaar">
              </div>

              <div class="banner__items">
                <h3>Ваш специалист по разному шопингу</h3>
                <a href="#" class="banner__btn">
                  Подробнее...
                  <span class="button__stroke"></span>
                  <span class="button-underline__horizontal"></span>
                  <span class="button-underline__vertical"></span>
                </a>
              </div>

            </div>

            <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="banner-utp">
                <h3>Самый <span class="black-bold">современный Развлекательный центр</span> города Атырау</h3>
              </div>
            </div>

          </div>

        </div>

      </div>
      <!-- slide 5 -->

    </div>

    <!-- arrow right -->
    <a href="#" class="banner-arrows banner-arrow__right"></a>
    <!-- arrow right end -->

  </section>


  <section class="floor-map">

    <div class="autopsy-floor-map">
      <a  href="#floor-map__wrap">
        <img src="images/location.png" alt="Закрыть карту этажей">
        Открыть карту этажей
      </a>
    </div>

    <div class="container">

      <div class="floor-map__wrap" id="floor-map__wrap" style="display: none;">

        <div class="row wow fadeInLeft">
          <div class="col-12">
            <h1 class="floor-map__title def-title">Карта этажей</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-right">
            <div class="floor-map__left">
              <h3 class="small__title">Этаж</h3>

              <div class="floor-map-tabs__wrap">

                <div class="floor-map-tabs__link">
                  <a href="#parking">p</a>
                  <a class="floor-map-tabs__link__active" href="#floor-1">1</a>
                  <a href="#floor-2">2</a>
                  <a href="#floor-3">3</a>
                  <a href="#floor-4">4</a>
                  <a href="#floor-5">5</a>
                </div>

                <!-- 0 -->
                <div class="floor-map-tabs__accordion wow" id="parking">
                  <ul>
                    <li>
                      <a href="#">
                        Развлечение0
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Магазины0
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Фудкорт0
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Сервисы0
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Красота0</a></li>
                        <li><a href="#">Банки0</a></li>
                        <li><a href="#">Фотосалоны0</a></li>
                        <li><a href="#">Билетные кассы0</a></li>
                        <li><a href="#">Разное0</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Luxury0
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                        <li><a href="#">Подменю0</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- 0 end -->

                <!-- 1 -->
                <div class="floor-map-tabs__accordion floor-map-tabs__accordion__active wow" id="floor-1">
                  <ul>
                    <li>
                      <a href="#">
                        Развлечение
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Магазины
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Фудкорт
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Сервисы
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Красота</a></li>
                        <li><a href="#">Банки</a></li>
                        <li><a href="#">Фотосалоны</a></li>
                        <li><a href="#">Билетные кассы</a></li>
                        <li><a href="#">Разное</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Luxury
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- 1 end -->

                <!-- 2 -->
                <div class="floor-map-tabs__accordion wow" id="floor-2">
                  <ul>
                    <li>
                      <a href="#">
                        Развлечение2
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Магазины
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Фудкорт
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Сервисы
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Красота</a></li>
                        <li><a href="#">Банки</a></li>
                        <li><a href="#">Фотосалоны</a></li>
                        <li><a href="#">Билетные кассы</a></li>
                        <li><a href="#">Разное</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Luxury
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- 2 end -->


                <!-- 3 -->
                <div class="floor-map-tabs__accordion wow" id="floor-3">
                  <ul>
                    <li>
                      <a href="#">
                        Развлечение3
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Магазины
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Фудкорт
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Сервисы
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Красота</a></li>
                        <li><a href="#">Банки</a></li>
                        <li><a href="#">Фотосалоны</a></li>
                        <li><a href="#">Билетные кассы</a></li>
                        <li><a href="#">Разное</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Luxury
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- 3 end -->


                <!-- 4 -->
                <div class="floor-map-tabs__accordion wow" id="floor-4">
                  <ul>
                    <li>
                      <a href="#">
                        Развлечение4
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Магазины
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Фудкорт
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Сервисы
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Красота</a></li>
                        <li><a href="#">Банки</a></li>
                        <li><a href="#">Фотосалоны</a></li>
                        <li><a href="#">Билетные кассы</a></li>
                        <li><a href="#">Разное</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Luxury
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- 4 end -->


                <!-- 5 -->
                <div class="floor-map-tabs__accordion wow" id="floor-5">
                  <ul>
                    <li>
                      <a href="#">
                        Развлечение5
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Магазины
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Фудкорт
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Сервисы
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Красота</a></li>
                        <li><a href="#">Банки</a></li>
                        <li><a href="#">Фотосалоны</a></li>
                        <li><a href="#">Билетные кассы</a></li>
                        <li><a href="#">Разное</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        Luxury
                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                      </a>
                      <ul class="floor-map__submenu">
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                        <li><a href="#">Подменю</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <!-- 5 end -->

              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-8 col-sm-12" data-aos="fade-left">
            <div class="floor-map__right">
              <img src="images/map-floor.png" alt="">

              <div class="floor-map__zoom">
                <h3 class="floor-map__zoom__title">Zoom</h3>

                <div class="floor-map__zoom__btn">
                  <a href="#" class="floor-plus">+</a>
                  <a href="#" class="floor-minus">-</a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section>

  <section class="discounts">

    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-md-8 wow fadeInLeft">
          <h1 class="floor-map__title def-title">Акции, скидки и специальные предложения</h1>
        </div>

        <div class="offset-lg-1"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInRight">
          <a href="#" class="discounts__btn def-btn">Все новости</a>
        </div>
      </div>

    </div>

    <!-- arrow left -->
       <a href="#" class="discount-arrow dicsount-arrow__left "></a>
    <!-- arrow left end -->

    <div class="discount-slide__owl owl-carousel owl-theme wow fadeInUp">

      <!-- slide 1 -->
      <div class="discount-slide__wrap">

        <div class="discount-slide__item" style="background-image: url('images/discount-1.jpg');">
          <div class="discount-percent">
            Скидка <span class="percent__item">-25%</span>
          </div>

          <a href="#" class="discount__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
          </a>
        </div>

      </div>
      <!-- slide 1 end -->


      <!-- slide 2 -->
      <div class="discount-slide__wrap">

        <div class="discount-slide__item" style="background-image: url('images/discount-2.jpg');">
          <div class="discount-percent">
            Скидка <span class="percent__item">-25%</span>
          </div>

          <a href="#" class="discount__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
          </a>
        </div>

      </div>
      <!-- slide 2 end -->


      <!-- slide 3 -->
      <div class="discount-slide__wrap">

        <div class="discount-slide__item" style="background-image: url('images/discount-3.jpg');">
          <div class="discount-percent">
            Скидка <span class="percent__item">-25%</span>
          </div>

          <a href="#" class="discount__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
          </a>
        </div>

      </div>
      <!-- slide 3 end -->

      <!-- slide 4 -->
      <div class="discount-slide__wrap">

        <div class="discount-slide__item" style="background-image: url('images/discount-1.jpg');">
          <div class="discount-percent">
            Скидка <span class="percent__item">-25%</span>
          </div>

          <a href="#" class="discount__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
          </a>
        </div>

      </div>
      <!-- slide 4 end -->

      <!-- slide 5 -->
      <div class="discount-slide__wrap">

        <div class="discount-slide__item" style="background-image: url('images/discount-2.jpg');">
          <div class="discount-percent">
            Скидка <span class="percent__item">-25%</span>
          </div>

          <a href="#" class="discount__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
          </a>
        </div>

      </div>
      <!-- slide 5 end -->

      <!-- slide 6 -->
      <div class="discount-slide__wrap">

        <div class="discount-slide__item" style="background-image: url('images/discount-3.jpg');">
          <div class="discount-percent">
            Скидка <span class="percent__item">-25%</span>
          </div>

          <a href="#" class="discount__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
          </a>
        </div>

      </div>
      <!-- slide 6 end -->

    </div>
    <!-- arrow left -->
       <a href="#" class="discount-arrow dicsount-arrow__right"></a>
    <!-- arrow left end -->


  </section>


  <section class="developments">

    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-4 wow fadeInLeft">
          <h1 class="floor-map__title def-title">Интересные события</h1>
        </div>

        <div class="offset-lg-5"></div>

        <div class="col-lg-3 wow fadeInRight">
          <a href="#" class="development__btn def-btn">Все события</a>
        </div>
      </div>

      <div class="row">

        <div class="col-12 wow fadeInUp">
          <div class="developments__text">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
          </div>
        </div>

      </div>

      <div class="development-slide__wrap wow fadeInUp">

        <!-- arrow left -->
        <a href="#" class="development-arrow development-arrow__left"></a>
        <!-- arrow left end -->

        <div class="developments-slide owl-carousel owl-theme">

          <!-- development slide 1 -->
          <div class="developments-slide__item">

            <div class="developments-slide__top" style="background-image: url('images/developments-1.jpg');">
              <div class="developments-percent">
                Мар <span class="percent__item">15</span>
              </div>
            </div>

            <div class="developments-slide__bottom hvr-shutter-out-horizontal">
              <p class="developments-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>

              <a href="#" class="developments-slide__btn">Подробнее...</a>
            </div>

          </div>
          <!-- development slide 1 end -->

          <!-- development slide 2 -->
          <div class="developments-slide__item">

            <div class="developments-slide__top" style="background-image: url('images/developments-2.jpg');">
              <div class="developments-percent">
                Апр <span class="percent__item">01</span>
              </div>
            </div>

            <div class="developments-slide__bottom hvr-shutter-out-horizontal">
              <p class="developments-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>

              <a href="#" class="developments-slide__btn">Подробнее...</a>
            </div>

          </div>
          <!-- development slide 2 end -->

          <!-- development slide 3 -->
          <div class="developments-slide__item">

            <div class="developments-slide__top" style="background-image: url('images/developments-3.jpg');">
              <div class="developments-percent">
                Фев <span class="percent__item">30</span>
              </div>
            </div>

            <div class="developments-slide__bottom hvr-shutter-out-horizontal">
              <p class="developments-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>

              <a href="#" class="developments-slide__btn">Подробнее...</a>
            </div>

          </div>
          <!-- development slide 3 end -->

          <!-- development slide 4 -->
          <div class="developments-slide__item">

            <div class="developments-slide__top" style="background-image: url('images/developments-4.jpg');">
              <div class="developments-percent">
                Май <span class="percent__item">17</span>
              </div>
            </div>

            <div class="developments-slide__bottom hvr-shutter-out-horizontal">
              <p class="developments-slide__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>

              <a href="#" class="developments-slide__btn">Подробнее...</a>
            </div>

          </div>
          <!-- development slide 4 end -->

        </div>

        <!-- arrow right -->
        <a href="#" class="development-arrow development-arrow__right"></a>
        <!-- arrow right end -->

      </div>

      <a href="#" class="instagram__btn def-btn wow fadeInRight">Мы в инстаграм</a>

    </div>

  </section>


  <section class="about-baizar">

    <div class="about-baizar__wrap" style="background-image: url(images/about-bg.jpg)">

      <a href="#" class="about-arrows about-arrow__left wow fadeInLeft"></a>
      
      <div class="container">

        <div class="about-baizar__content owl-carousel owl-theme wow fadeInUp">

          <!-- slide 1 -->
          <div class="about-slide__item">
            <a href="#" class="about-baizar__btn hvr-rectangle-out">О торгово-развлекательном центре <span class="def-bold">Baizar</span></a>
          </div>
          <!-- slide 1 end -->

          <!-- slide 1 -->
          <div class="about-slide__item">
            <a href="#" class="about-baizar__btn hvr-rectangle-out">О торгово-развлекательном центре <span class="def-bold">Baizar</span></a>
          </div>
          <!-- slide 1 end -->

        </div>

      </div>

      <a href="#" class="about-arrows about-arrow__right wow fadeInRight"></a>

    </div>

  </section>


  <section class="subscribe">

    <div class="container">

      <div class="row">

        <div class="col-lg-5 col-md-5 wow fadeInLeft">

          <div class="subscribe__title__wrap">
            <h1 class="def-title subscribe__title">Подпишись на рассылку</h1>
            <p>И получи список <span class="def-bold">выгодных предложений</span></p>
          </div>
          
        </div>

        <div class="col-lg-7 col-md-7 wow fadeInRight">
          <div class="subscribe__email">
            <form action="">
              <div class="subscribe__input">
                <input type="text" placeholder="Ваша почта">
                <button class="hvr-radial-out">Отправить</button>
              </div>
            </form>

            <div class="subscribe__checkbox">
              <input type="checkbox" id="subscribe__checkbox">
              <label for="subscribe__checkbox">Даю согласие на обработку <span class="underline">персональных данных</span></label>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>

  <section class="partners">

    <div class="partners__wrap">

      <a href="#" class="partners-arrows partners-arrow__left"></a>

      <div class="container">

        <div class="row">
          <div class="col-12 wow fadeInLeft">
            <h1 class="def-title partners-title">Наши партнеры</h1>
          </div>
        </div>

        <div class="partners__owl owl-carousel owl-theme wow fadeInUp">

          <div class="partners__owl__item">
            <img src="images/partner-1.png" alt="">
          </div>

          <div class="partners__owl__item">
            <img src="images/partner-2.png" alt="">
          </div>

          <div class="partners__owl__item">
            <img src="images/partner-3.png" alt="">
          </div>

          <div class="partners__owl__item">
            <img src="images/partner-4.png" alt="">
          </div>

          <div class="partners__owl__item">
            <img src="images/partner-5.png" alt="">
          </div>

          <div class="partners__owl__item">
            <img src="images/partner-6.png" alt="">
          </div>
          
        </div>

      </div>

      <a href="#" class="partners-arrows partners-arrow__right"></a>

    </div>
    
  </section>


  <footer class="footer" id="footer">

    <div class="footer-dark wow fadeInLeft">

      <div class="container">

        <div class="footer-dark__top">

          <div class="row">

            <div class="col-lg-4 col-md-4">
              <div class="footer__item">
                <div class="footer__item-img">
                  <img src="images/footer-location.png" alt="">
                </div>

                <p>Республика Казахстан, г. Атырау, ул. Кулманова, Строение 111а</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3">
              <div class="footer__item">
                <div class="footer__item-img">
                  <img src="images/footer-clock.png" alt="">
                </div>

                <p>График работы ТРЦ с <span class="def-bold">10:00</span> до <span class="def-bold">24:00</span>, <span class="def-bold">7</span> дней в неделю</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-2">
              <div class="footer-v__line"></div>
            </div>

            <div class="col-lg-3 col-md-3">
              <div class="footer__social">
                <a href="#"><img src="images/footer-facebook.png" alt=""></a>
                <a href="#"><img src="images/footer-instagram.png" alt=""></a>
              </div>
            </div>

          </div>

        </div>


        <div class="footer-dark__bottom">
          <div class="footer__menu">
            <ul>
              <li><a href="#">О центре</a></li>
              <li><a href="#">Карта</a></li>
              <li><a href="#">Режим работы</a></li>
              <li><a href="#">Правовая информация</a></li>
              <li><a href="#">Контакты</a></li>
              <li><a href="#">Акции</a></li>
              <li><a href="#">Новости</a></li>
              <li><a href="#">Сотрудничество</a></li>
            </ul>
          </div>
        </div>
        
      </div>

    </div>

    <div class="footer-green wow fadeInRight">

      <div class="container">

        <div class="row footer-green__flex">

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="footer-copyright">
              <p>© 2019. “Baizaar”. Все права защищены.</p>
            </div>
          </div>

          <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="footer-green__link">
              <a href="#">Политика конфиденциальности.</a>
              <a href="#">Карта сайта</a>
            </div>
          </div>

        </div>

      </div>

    </div>

  </footer>
  
  <script src="js/superfish.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>