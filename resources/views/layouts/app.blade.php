<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Baizaar')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

  <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<body>
  <section id="up"></section>
  <!-- start particles -->
  <figure id="particles-js"></figure>
  <!-- end particles -->
  <!-- HEADER -->
  <header class="header wow fadeInDown" id="my-header">

    <div class="hamburger-menu__overlay"></div>

    <div class="search__wrap">

      <div class="search__item" id="search__item">
        <form action="{{ route('search.page') }}" method="GET">
          <input type="text" name="query" placeholder="Введите слово для поиска" value="{{ \Request::input('query') }}">
          <button><img src="{{ asset('images/loupe-white.png') }}" alt="loupe"></button>
        </form>
      </div>

    </div>
    <!-- hamburger menu -->
    <div class="hamburger-menu" id="hamburger-menu">
      
      <ul class="hamburger-menu__item">
        @foreach ($sec_cat as $category)
          <li><a href="{{ url(isset($category->url) ? $category->url : '#') }}">{{ $category->name }}</a></li>
        @endforeach
      </ul>

      <div class="hamburger-menu__bottom">

        <div class="hamburger-menu__schedule hamburger-menu__flex">
          <div class="schedule__img hamburger-left__img">
            <img src="{{ asset('images/menu-clock.svg') }}" alt="">
          </div>

          <div class="schedule__text hamburger-right__text">
            <h4>График работы</h4>
            <p>с 10:00 до 22:00</p>
          </div>
        </div>

        <div class="hamburger-menu__howtoget hamburger-menu__flex">
          <div class="howtoget__img hamburger-left__img">
            <img src="{{ asset('images/menu-location.svg') }}" alt="">
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
          <img src="{{ asset('images/close-button.svg') }}" alt="Закрыть">
        </a>

        <div class="mobile-logo">
        <a href="{{ route('main.page') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
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
                              <li><a href="{{ route('shop.show.page', $shop) }}">{{ $shop->name }}</a></li>
                              @endif
                          @endforeach
                      </ul>
                    @endif
                  @endforeach
              </ul>
            @endif
          @endforeach
          <li><a href="#up" class="smoothscroll">Вверх</a></li>
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
          <a href="{{ route('main.page') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
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
                                <img src="{{ asset('storage/'.$shop->thumbnail) }}" alt="">
                              </div>
        
                              <div class="discount-img__bottom">
                                @foreach (isset($shop->sales_small) ? json_decode($shop->sales_small) : [] as $sale)
                                  <img src="{{ asset('storage/'.$sale) }}" alt="">
                                @endforeach
                              </div>
                            </div>
        
                            <div class="right-contacts">
                              <h3 class="right-contacts__title">Контакты</h3>
                              <p>Магазин <span class="black-bold">{{ $shop->name }}</span></p>
                              <p>Часы работы <span class="black-bold">{{ $shop->work_time }}</span></p>
                              <p>Телефон <span class="black-bold">{{ $shop->mobile }}</span></p>
                              <p>Сайт <span class="black-bold">{{ $shop->site }}</span></p>
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
          <a href="#search__item"><img src="{{ asset('images/loupe.png') }}" alt="Поиск"></a>
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
  @yield('content')
  <footer class="footer" id="footer">

    <div class="footer-dark wow fadeInLeft">

      <div class="container">

        <div class="footer-dark__top">

          <div class="row">

            <div class="col-lg-4 col-md-4">
              <div class="footer__item">
                <div class="footer__item-img">
                  <img src="{{ asset('images/footer-location.png') }}" alt="">
                </div>
                <p>{{ $contact->address }}</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3">
              <div class="footer__item">
                <div class="footer__item-img">
                  <img src="{{ asset('images/footer-clock.png') }}" alt="">
                </div>

                <p>График работы ТРЦ с <span class="def-bold">{{ $contact->start }}</span> до <span class="def-bold">{{ $contact->end }}</span>, <span class="def-bold">{{ $contact->weekday }}</span> дней в неделю</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-2">
              <div class="footer-v__line"></div>
            </div>

            <div class="col-lg-3 col-md-3">
              <div class="footer__social">
                <a href="#"><img src="{{ asset('images/footer-facebook.png') }}" alt=""></a>
                <a href="#"><img src="{{ asset('images/footer-instagram.png') }}" alt=""></a>
              </div>
            </div>

          </div>

        </div>


        <div class="footer-dark__bottom">
          <div class="footer__menu">
            <ul>
              @foreach ($sec_cat as $category)
                @if($loop->iteration < 9) 
                  <li><a href="#">{{ $category->name }}</a></li>
                @else
                  @break  
                @endif
              @endforeach
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
  
  <script src="{{ asset('js/superfish.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/aos.js')}}"></script>
  <script src="{{ asset('js/particles.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>