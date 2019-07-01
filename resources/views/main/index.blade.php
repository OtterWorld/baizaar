@extends('layouts.app')

@section('content')
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
        @foreach ($sliders as $slider)
        <!-- slide 1 -->
        <div class="main-banner__slide" style="background-image: url({{ asset('storage/'.$slider->image) }});">

            <div class="container">
    
                <div class="row">
    
                <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInLeft">
                    <div class="logo-flag">
                    <img src="images/baizaar-flag.png" alt="baizaar">
                    </div>
    
                    <div class="banner__items">
                    <h3>{{ $slider->title }}</h3>
                    <a href="{{ $slider->url }}" class="banner__btn {{ $slider->button_position }}">
                        @lang('interface.buttons.more')...
                        <span class="button__stroke"></span>
                        <span class="button-underline__horizontal"></span>
                        <span class="button-underline__vertical"></span>
                    </a>
                    </div>
    
                </div>
    
                <div class="offset-lg-4 offset-md-4 offset-sm-4"></div>
    
                <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInRight">
                    <div class="banner-utp">
                    <h3>{{ $slider->second_title }}</h3>
                    </div>
                </div>
    
                </div>
    
            </div>
    
            </div>
            <!-- slide 1 -->
    
        @endforeach
    </div>

    <!-- arrow right -->
    <a href="#" class="banner-arrows banner-arrow__right"></a>
    <!-- arrow right end -->

    </section>


    <section class="floor-map">

    <div class="autopsy-floor-map">
        <a href="#floor-map__wrap" style="{{ $styles[0] ?: '' }}">
        <img src="images/location.png" alt="Закрыть карту этажей">
        @lang('interface.buttons.floorsMap')
        </a>
    </div>

    <div class="container">

        <div class="floor-map__wrap" id="floor-map__wrap" style="display: none;">

        <div class="row wow fadeInLeft">
            <div class="col-12">
            <h1 class="floor-map__title def-title">@lang('interface.title.floorsMap')</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-right">
            <div class="floor-map__left">
                <h3 class="small__title">@lang('interface.title.floor')</h3>

                <div class="floor-map-tabs__wrap">

                <div class="floor-map-tabs__link">
                    <a href="#parking" style="{{ $styles[0] ?: '' }}">p</a>
                    <a class="floor-map-tabs__link__active" href="#floor-1" style="{{ $styles[0] ?: '' }}">1</a>
                    <a href="#floor-2" style="{{ $styles[0] ?: '' }}">2</a>
                    <a href="#floor-3" style="{{ $styles[0] ?: '' }}">3</a>
                    <a href="#floor-4" style="{{ $styles[0] ?: '' }}">4</a>
                    <a href="#floor-5" style="{{ $styles[0] ?: '' }}">5</a>
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
                    <a href="#" class="floor-plus" style="{{ $styles[0] ?: '' }}">+</a>
                    <a href="#" class="floor-minus" style="{{ $styles[0] ?: '' }}">-</a>
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
            <h1 class="floor-map__title def-title">@lang('interface.title.sales')</h1>
        </div>

        <div class="offset-lg-1"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInRight">
            <a href="{{ route('sales.page') }}" class="discounts__btn def-btn">@lang('interface.buttons.allSales')</a>
        </div>
        </div>

    </div>

    <!-- arrow left -->
        <a href="#" class="discount-arrow dicsount-arrow__left "></a>
    <!-- arrow left end -->

    <div class="discount-slide__owl owl-carousel owl-theme wow fadeInUp">
        @foreach ($sales as $sale)
            <div class="discount-slide__wrap">

                <div class="discount-slide__item" style="background-image: url({{ asset('storage/' . $sale->image) }});">
                    <div class="discount-percent" style="{{ $styles[1] ?: '' }}">
                    @lang('interface.sale') <span class="percent__item">-{{ $sale->percentage }}%</span>
                    </div>
        
                    <a href="#" class="discount__text">
                    {!! $sale->description !!}
                    </a>
                </div>
        
            </div>    
        @endforeach

    </div>
    <!-- arrow left -->
        <a href="#" class="discount-arrow dicsount-arrow__right"></a>
    <!-- arrow left end -->


    </section>


    <section class="developments">

    <div class="container">

        <div class="row">
        <div class="col-lg-4 col-md-4 wow fadeInLeft">
            <h1 class="floor-map__title def-title">@lang('interface.title.events')</h1>
        </div>

        <div class="offset-lg-5"></div>

        <div class="col-lg-3 wow fadeInRight">
            <a href="{{ route('news.all.page') }}" class="development__btn def-btn">@lang('interface.buttons.allEvents')</a>
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
            
            @foreach ($news as $newsItem)
            <!-- development slide {{ $loop->iteration }} -->
            <div class="developments-slide__item">

                <div class="developments-slide__top" style="background-image: url({{ asset('storage/'.$newsItem->image) }});">
                    <div class="developments-percent" style="{{ $styles[2] ?: '' }}">
                    {{ $newsItem->month }} <span class="percent__item">{{ $newsItem->day }}</span>
                    </div>
                </div>

                <div class="developments-slide__bottom hvr-shutter-out-horizontal">
                    <p class="developments-slide__text">{{ $newsItem->description }}</p>

                    <a href="{{ route('news.one.page', $newsItem) }}" class="developments-slide__btn">@lang('interface.buttons.more')...</a>
                </div>

            </div>
            <!-- development slide {{ $loop->iteration }} end -->
            @endforeach
        </div>

        <!-- arrow right -->
        <a href="#" class="development-arrow development-arrow__right"></a>
        <!-- arrow right end -->

        </div>

        <a href="#" class="instagram__btn def-btn wow fadeInRight">@lang('interface.buttons.instagram')</a>

    </div>

    </section>


    <section class="about-baizar">

        <div class="about-baizar__wrap">
    
          <a href="#" class="about-arrows about-arrow__left wow fadeInLeft"></a>
          
          <div class="container-fluid" style="padding: 0;">
    
            <div class="about-baizar__content owl-carousel owl-theme wow fadeInUp">
    
              @foreach ($bottomSlider as $slider)
                <!-- slide 1 -->
                <div class="about-slide__item" style="background-image: url({{ asset('storage/'.$slider->image) }});">
                    <a href="#" class="about-baizar__btn hvr-rectangle-out">{{ $slider->title }}</a>
                </div>
                <!-- slide 1 end -->              
              @endforeach
    
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
            <h1 class="def-title subscribe__title">@lang('interface.mailing.title')</h1>
            <p>@lang('interface.mailing.subtitle')</p>
            </div>
            
        </div>

        <div class="col-lg-7 col-md-7 wow fadeInRight">
            <div class="subscribe__email">
            <form action="">
                <div class="subscribe__input">
                <input type="text" placeholder="@lang('interface.form.yourEmail')">
                <button class="hvr-radial-out">@lang('interface.form.send')</button>
                </div>
            </form>

            <div class="subscribe__checkbox">
                <input type="checkbox" id="subscribe__checkbox">
                <label for="subscribe__checkbox">@lang('interface.form.agreement') <span class="underline">
                    @lang('interface.form.privateData')</span></label>
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
            <h1 class="def-title partners-title">@lang('interface.title.partners')</h1>
            </div>
        </div>

        <div class="partners__owl owl-carousel owl-theme wow fadeInUp">

            @foreach ($partners as $partner)
                <div class="partners__owl__item">
                    <img src="{{ asset('storage/'.$partner->image) }}" alt="">
                </div>
            @endforeach
            
        </div>

        </div>

        <a href="#" class="partners-arrows partners-arrow__right"></a>

    </div>
    
    </section>
@endsection