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
                                <a class="floor-map-tabs__link__active" href="#floor-1"
                                    style="{{ $styles[0] ?: '' }}">1</a>
                                <a href="#floor-2" style="{{ $styles[0] ?: '' }}">2</a>
                                <a href="#floor-3" style="{{ $styles[0] ?: '' }}">3</a>
                            </div>

                            <!-- 0 -->
                            <div class="floor-map-tabs__accordion wow" id="parking">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Развлечение0
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                            <li><a class="fun_party" href="#">fun_party</a></li>
                                            <li><a class="detskii_mir" href="#">detskii_mir</a></li>

                                            <li><a class="" href="#">Подменю0</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Магазины0
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">

                                            <li><a class="toilet" href="#">toilet_south_w</a></li>




                                            <li><a class="cabani" href="#">cabani</a></li>






                                            <li><a class="giovane" href="#">giovane</a></li>
                                            <li><a class="glasman" href="#">glasman</a></li>

                                    </li>





                                    <li><a class="" href="#">atelie</a></li>
                                    <li><a class="" href="#">atelie</a></li>
                                    <li><a class="" href="#">atelie</a></li>
                                    <li><a class="" href="#">atelie</a></li>
                                    <li><a class="" href="#">atelie</a></li>
                                    <li><a class="" href="#">atelie</a></li>
                                    <li><a class="" href="#">atelie</a></li>
                                    


                                </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Фудкорт0
                                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png"
                                                alt="icon"></span>
                                    </a>
                                    <ul class="floor-map__submenu">
                                        <li><a class="coffee_like" href="#">coffee_like</a></li>
                                        <li><a class="coffee_like" href="#">coffee_like</a></li>
                                        <li><a class="chuchvara" href="#">chuchvara</a></li>
                                        <li><a class="chuchvara2" href="#">chuchvara2</a></li>

                                        <li><a class="travelers_coffee" href="#">travelers_coffee</a></li>
                                        <li><a class="chuchvara2" href="#">chuchvara2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Сервисы0
                                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png"
                                                alt="icon"></span>
                                    </a>
                                    <ul class="floor-map__submenu">
                                        <li><a class="lift" href="#">lift</a></li>
                                        <li><a class="wardrobe" href="#">wardrobe</a></li>
                                        
                                        <li><a class="baby_room" href="#">baby_room</a></li>
                                        
                                        <li><a class="" href="#">iclean</a></li>
                                        <li><a class="" href="#">iclean</a></li>
                                        <li><a class="" href="#">iclean</a></li>
                                        <li><a class="" href="#">iclean</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Luxury0
                                        <span class="accordion__arrow"><img src="images/map-accordeon-arrow-down.png"
                                                alt="icon"></span>
                                    </a>
                                    <ul class="floor-map__submenu">
                                            <li><a class="atelie" href="#">atelie</a></li>
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
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                            <li><a class="" href="#">Подменю</a></li>
                                            <li><a class="" href="#">Подменю</a></li>
                                            <li><a class="" href="#">Подменю</a></li>
                                            <li><a class="" href="#">Подменю</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Магазины
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                            <li><a class="respect" href="#">respect</a></li>
                                            <li><a class="iclean" href="#">iclean</a></li>
                                            <li><a class="outlet__city" href="#">outlet__city</a></li>
                                            <li><a class="intertop" href="#">intertop</a></li>
                                            <li><a class="honey" href="#">honey</a></li>
                                            <li><a class="ikki" href="#">ikki</a></li>
                                            <li><a class="mavi_jeans" href="#">mavi_jeans</a></li>
                                            <li><a class="lichi" href="#">lichi</a></li>
                                            <li><a class="ds_damat" href="#">ds_damat</a></li>
                                            <li><a class="enrico_marinelli" href="#">enrico_marinelli,</a></li>
                                            <li><a class="ltb" href="#">ltb</a></li>
                                            <li><a class="code_de_vie" href="#">code_de_vie</a></li>
                                            <li><a class="missha" href="#">missha</a></li>
                                            <li><a class="rocher" href="#">rocher</a></li>
                                            <li><a class="wycon" href="#">wycon</a></li>
                                            <li><a class="nature_republic" href="#">nature_republic</a></li>
                                            <li><a class="asian_cosmetics" href="#">asian_cosmetics</a></li>
                                            <li><a class="neri_karra" href="#">neri_karra</a></li>
                                            <li><a class="inglot" href="#">inglot</a></li>
                                            <li><a class="eyfel" href="#">eyfel</a></li>
                                            <li><a class="miniso" href="#">miniso</a></li>
                                            <li><a class="euromagia" href="#">euromagia</a></li>
                                            <li><a class="vtrende_lux" href="#">vtrende_lux</a></li>
                                            <li><a class="diva" href="#">diva</a></li>
                                            <li><a class="glo_studio" href="#">glo_studio</a></li>
                                            <li><a class="sherlock" href="#">sherlock</a></li>
                                            <li><a class="faber_castell" href="#">faber_castell</a></li>
                                         
                                            <li><a class="mama_pochitai" href="#">mama_pochitai</a></li>
                                            <li><a class="ELP" href="#">ELP</a></li>
                                            <li><a class="mix_imperia" href="#">mix_imperia</a></li>
                                            <li><a class="pandora" href="#">pandora</a></li>
                                            <li><a class="anelli" href="#">anelli</a></li>
                                            <li><a class="serebroff" href="#">serebroff</a></li>
                                            <li><a class="lalo" href="#">lalo</a></li>
                                            <li><a class="national-jewerly" href="#">national-jewerly</a></li>
                                            <li><a class="parovozik" href="#">parovozik</a></li>
                                            <li><a class="kfc" href="#">kfc</a></li>
                                            <li><a class="bambino" href="#">bambino</a></li>
                                            <li><a class="actual_optics" href="#">actual_optics</a>
                                            </li>
                                            <li><a class="trolley" href="#">trolley</a></li>
                                            <li><a class="rk-tel" href="#">rk-tel</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Фудкорт
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Сервисы
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                                <li><a class="mobile_services" href="#">mobile_services</a></li>
                                                <li><a class="kazpost" href="#">kazpost</a></li>
                                                <li><a class="terminal" href="#">terminal</a></li>
                                                <li><a class="zelenaya_apteka" href="#">zelenaya_apteka</a></li>
                                                <li><a class="administration" href="#">administration</a></li>
                                                <li><a class="beeline" href="#">beeline</a></li>
                                                <li><a class="toilet" href="#">toilet</a></li>
                                                
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Luxury
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
   
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
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                            <li><a class="play_park" href="#">play_park</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Магазины
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                            <li><a class="flo" href="#">flo</a></li>
                                            <li><a class="colins" href="#">colins</a></li>
                                            <li><a class="koton" href="#">koton</a>
                                            <li><a class="lego_qala" href="#">lego_qala</a></li>
                                            <li><a class="anawa_kids" href="#">anawa_kids</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Фудкорт
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Сервисы
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Luxury
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">

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
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
 
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Магазины
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                                
                                                
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Фудкорт
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
                                            <li><a class="pizzaro" href="#">pizzaro</a></li>
                                            <li><a class="pappas_pizza" href="#">pappas_pizza</a></li>
                                            <li><a class="redway" href="#">redway</a></li>
                                            <li><a class="burger_time" href="#">burger_time</a></li>
                                            <li><a class="best_shawarma" href="#">best_shawarma</a></li>
                                            <li><a class="zhekas_ice" href="#">zhekas_ice</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Сервисы
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Luxury
                                            <span class="accordion__arrow"><img
                                                    src="images/map-accordeon-arrow-down.png" alt="icon"></span>
                                        </a>
                                        <ul class="floor-map__submenu">
 
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- 3 end -->


                          

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12" data-aos="fade-left">
                    <div class="floor-map__right">

                        <!-- map1 -->

                        <svg class="map1 map-default map-active" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                            width="100%" height="100%" version="1.1"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 2550 3300" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <style type="text/css">
                                    <![CDATA[ 
                                    .str22 {
                                        stroke: #FEFEFE;
                                        stroke-width: 2.36;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str0 {
                                        stroke: #373435;
                                        stroke-width: 2.36;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str13 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str20 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str19 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str14 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str21 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str15 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str18 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str17 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str16 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str11 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str12 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str1 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str9 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str6 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str10 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str7 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str4 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str8 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str5 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str2 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str3 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str29 {
                                        stroke: black;
                                        stroke-width: 2;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str23 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str31 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str30 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str25 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str24 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str27 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str26 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str28 {
                                        stroke: #373435;
                                        stroke-width: 3;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .fil3 {
                                        fill: none
                                    }

                                    .fil1 {
                                        fill: none;
                                        fill-rule: nonzero
                                    }

                                    .fil0 {
                                        fill: #FEFEFE
                                    }

                                    .fil2 {
                                        fill: #D2D3D5
                                    }

                                    .fil16 {
                                        fill: #A98F71
                                    }

                                    .fil17 {
                                        fill: #D2AE6D
                                    }

                                    .fil8 {
                                        fill: #FFCC29
                                    }

                                    .fil12 {
                                        fill: #F7ADAF
                                    }

                                    .fil20 {
                                        fill: #A46080
                                    }

                                    .fil18 {
                                        fill: #ED2F59
                                    }

                                    .fil15 {
                                        fill: #ED3237
                                    }

                                    .fil7 {
                                        fill: #A8518A
                                    }

                                    .fil19 {
                                        fill: #A8CF45
                                    }

                                    .fil13 {
                                        fill: #51A8B1
                                    }

                                    .fil5 {
                                        fill: #718FC8
                                    }

                                    .fil6 {
                                        fill: #52658C
                                    }

                                    .fil4 {
                                        fill: #0098DA
                                    }

                                    .fil25 {
                                        fill: #3E4095
                                    }

                                    .fil26 {
                                        fill: #5E4F3E
                                    }

                                    .fil14 {
                                        fill: #71A72B
                                    }

                                    .fil9 {
                                        fill: #ECB4A3
                                    }

                                    .fil23 {
                                        fill: #FEFEFE;
                                        fill-rule: nonzero
                                    }

                                    .fil21 {
                                        fill: #373435;
                                        fill-rule: nonzero
                                    }

                                    .fil22 {
                                        fill: black;
                                        fill-rule: nonzero
                                    }

                                    .fil24 {
                                        fill: #78644E;
                                        fill-rule: nonzero
                                    }

                                    .fil11 {
                                        fill: url(#id0)
                                    }

                                    .fil10 {
                                        fill: url(#id1)
                                    }
                                    ]]>
                                </style>
                                <linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="1248.41" y1="2271.98"
                                    x2="1169.76" y2="2445.09">
                                    <stop offset="0" style="stop-opacity:1; stop-color:#A98F71" />
                                    <stop offset="1" style="stop-opacity:1; stop-color:#C2AA7B" />
                                </linearGradient>
                                <linearGradient id="id1" gradientUnits="userSpaceOnUse" xlink:href="#id0" x1="2160.88"
                                    y1="916.08" x2="1493.74" y2="1157.1">
                                </linearGradient>
                            </defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <polygon class="fil0 str0"
                                    points="1211.78,652.57 1276.78,652.57 1276.78,533.57 1211.78,533.57 " />
                                <polyline class="fil1 str1" points="1238.06,578.7 1238.06,625.8 1260.86,625.8 " />
                                <line class="fil1 str2" x1="1238.06" y1="625.8" x2="1211.78" y2="625.8" />
                                <line class="fil1 str3" x1="1238.06" y1="620.84" x2="1211.78" y2="620.84" />
                                <line class="fil1 str4" x1="1238.06" y1="615.39" x2="1211.78" y2="615.39" />
                                <line class="fil1 str5" x1="1238.06" y1="609.93" x2="1211.78" y2="609.93" />
                                <line class="fil1 str6" x1="1238.06" y1="604.98" x2="1211.78" y2="604.98" />
                                <line class="fil1 str7" x1="1238.06" y1="599.52" x2="1211.78" y2="599.52" />
                                <line class="fil1 str8" x1="1238.06" y1="594.07" x2="1211.78" y2="594.07" />
                                <line class="fil1 str9" x1="1238.06" y1="589.11" x2="1211.78" y2="589.11" />
                                <line class="fil1 str10" x1="1238.06" y1="583.66" x2="1211.78" y2="583.66" />
                                <line class="fil1 str11" x1="1225.16" y1="578.7" x2="1225.16" y2="625.8" />
                                <polyline class="fil1 str12" points="1218.22,620.84 1225.16,625.8 1231.61,620.84 " />
                                <line class="fil1 str1" x1="1238.06" y1="578.7" x2="1211.78" y2="578.7" />
                                <polyline class="fil1 str13" points="1237.06,577.71 1237.06,626.79 1261.85,626.79 " />
                                <line class="fil1 str14" x1="1266.31" y1="631.25" x2="1266.31" y2="652.57" />
                                <line class="fil1 str15" x1="1260.86" y1="625.8" x2="1260.86" y2="652.57" />
                                <line class="fil1 str16" x1="1255.9" y1="625.8" x2="1255.9" y2="652.57" />
                                <line class="fil1 str17" x1="1250.45" y1="625.8" x2="1250.45" y2="652.57" />
                                <line class="fil1 str18" x1="1245" y1="625.8" x2="1245" y2="652.57" />
                                <line class="fil1 str19" x1="1240.04" y1="625.8" x2="1240.04" y2="652.57" />
                                <polyline class="fil1 str20" points="1240.04,639.18 1271.27,639.18 1266.31,634.23 " />
                                <path class="fil1 str15" d="M1260.86 625.8l10.84 10.84m0 2.67l-0.43 0.87 0.43 -0.26" />
                                <line class="fil1 str21" x1="1266.31" y1="644.14" x2="1271.27" y2="639.18" />
                                <polygon class="fil2 str22"
                                    points="1272.19,1089.79 1431.4,1089.79 1431.4,1084.57 2292.72,1084.57 2292.72,795.59 1319.54,795.59 1319.54,207.39 1279.28,207.39 1279.28,316.57 1276.78,316.57 1276.78,738.89 1272.19,738.89 1272.19,795.59 " />
                                <polygon class="fil3 str0"
                                    points="519.92,847.52 579.85,847.52 579.85,740.65 519.92,740.65 " />
                                <path class="beeline fil4 str22"
                                    d="M732.08 2266.4l0 111.24c0,8.44 6.91,15.35 15.35,15.35l199.98 0 0 -126.59 -215.33 0z" />
                                <polygon class="fil5 str22"
                                    points="519.92,207.39 997.19,207.39 1160.92,207.39 1279.28,207.39 1279.28,316.57 1160.92,316.57 1160.92,738.89 954.07,738.89 954.07,749.38 836.57,749.38 836.57,738.89 836.57,711.88 836.57,640.63 519.92,640.63 " />
                                <polygon class="atelie fil4 str22"
                                    points="1272.19,738.89 1204.46,738.89 1204.46,795.59 1272.19,795.59 " />
                                <path class="respect fil6 str22"
                                    d="M1002.59 847.83l0 95.97c0,46.82 -22.45,88.63 -57.11,115.25l0 32.21 215.55 0 0 -280.93 -158.44 37.5z" />
                                <polygon class="national-jewerly fil7 str22"
                                    points="945.48,1091.26 1161.03,1091.26 1161.03,1201.58 945.48,1201.58 " />
                                <path class="miniso fil8 str22"
                                    d="M1161.03 1346.61l-194.29 -26.02c-11.58,-1.55 -21.26,-9.57 -21.26,-21.26l0 -97.75 215.55 0 0 145.03z" />
                                <polygon class=" euromagia fil8 str22"
                                    points="1319.54,1367.83 1161.03,1346.61 1161.03,1201.58 1319.54,1201.58 " />
                                <polygon class="iclean fil4 str22"
                                    points="519.92,847.52 788.6,847.52 788.6,955.65 519.92,955.65 " />
                                <polygon class="fil9 str22"
                                    points="579.85,847.52 788.6,847.52 788.6,763.4 763.95,740.65 669.38,740.65 669.38,778.93 627.35,778.93 627.35,763.14 579.85,763.14 " />
                                <path class="outlet__city fil6 str22"
                                    d="M519.92 1092.37l326.8 0 0 -32.35c-35.23,-21.72 -58.12,-58.59 -58.12,-101.78l0 -2.59 -268.68 0 0 136.72z" />
                                <path class="intertop fil6 str22"
                                    d="M752.23 1311.74l-232.31 0 0 -219.37 326.8 0 0 124.88c0,51.97 -42.52,94.49 -94.49,94.49z" />
                                <path class="administration fil10 str22"
                                    d="M1431.4 1084.57l0 -176.25 861.32 0c0,125.07 0,101.2 0,176.25l-861.32 0z" />
                                <path class="faber_castell fil11 str22"
                                    d="M1162.41 2392.99l69.65 0c17.54,0 31.89,-14.35 31.89,-31.89l0 -94.7 -101.54 0 0 126.59z" />
                                <polygon class="wycon fil12 str22"
                                    points="1055.53,2392.99 1162.41,2392.99 1162.41,2266.4 1055.53,2266.4 " />
                                <polygon class="asian_cosmetics fil12 str22"
                                    points="947.41,2392.99 1055.53,2392.99 1055.53,2266.4 947.41,2266.4 " />
                                <polygon class="glasman fil13 str22"
                                    points="732.08,2050.79 732.08,2266.4 893.66,2266.4 893.66,2050.79 " />
                                <polygon class="code_de_vie fil12 str22"
                                    points="1263.95,2266.4 1263.95,2050.79 893.66,2050.79 893.66,2266.4 " />
                                <polygon class="giovane fil13 str22"
                                    points="732.08,1733.6 732.08,1838.91 984.58,1838.91 984.58,1733.6 " />
                                <polygon class="enrico_marinelli fil13 str22"
                                    points="732.08,1838.91 732.08,2050.79 984.58,2050.79 984.58,1838.91 " />
                                <polygon class="zelenaya_apteka fil14 str22"
                                    points="1263.95,2050.79 1263.95,1945.79 984.58,1945.79 984.58,2050.79 " />
                                <polygon class="ds_damat fil13 str22"
                                    points="1263.95,1945.79 1263.95,1838.91 984.58,1838.91 984.58,1945.79 " />
                                <polygon class="actual_optics fil15 str22"
                                    points="1263.95,1838.91 1263.95,1733.6 984.58,1733.6 984.58,1838.91 " />
                                <polygon class="ikki fil13 str22"
                                    points="1053.33,1623.91 984.58,1623.91 984.58,1733.6 1263.95,1733.6 1263.95,1623.91 " />
                                <polygon class="lichi fil13 str22"
                                    points="984.58,1623.91 949.89,1623.91 732.08,1623.91 732.08,1733.6 984.58,1733.6 " />
                                <path class="glo_studio fil16 str22"
                                    d="M1245.05 1498.9l-83.59 -2.88 0 127.89 102.49 0 0 -106.11c0,-10.4 -8.52,-18.55 -18.9,-18.9z" />
                                <polygon class="anelli fil7 str22"
                                    points="1161.46,1496.02 1053.33,1492.31 1053.33,1623.91 1161.46,1623.91 " />
                                <polygon class="pandora fil7 str22"
                                    points="843.96,1485.11 843.96,1623.91 949.89,1623.91 949.89,1488.75 " />
                                <polygon class="mix_imperia fil7 str22"
                                    points="667.41,2287.96 703.66,2287.96 703.66,2356.4 667.41,2356.4 " />
                                <polygon class="vtrende_lux fil8 str22"
                                    points="663.24,1565.3 699.49,1565.3 699.49,1633.74 663.24,1633.74 " />
                                <polygon class="cabani fil6 str22"
                                    points="519.92,1516.39 629.6,1516.39 629.6,1627.02 519.92,1627.02 " />
                                <polygon class="mama_pochitai fil17 str22"
                                    points="519.92,1731.39 629.6,1731.39 629.6,1627.02 519.92,1627.02 " />
                                <polygon class="nature_republic fil12 str22"
                                    points="519.92,1731.39 629.6,1731.39 629.6,1839.83 519.92,1839.83 " />
                                <polygon class="diva fil8 str22"
                                    points="519.92,1946.08 629.6,1946.08 629.6,1839.83 519.92,1839.83 " />
                                <polygon class="missha fil12 str22"
                                    points="519.92,1946.08 629.6,1946.08 629.6,2051.08 519.92,2051.08 " />
                                <polygon class="ltb fil13 str22"
                                    points="519.92,2262.33 629.6,2262.33 629.6,2051.08 519.92,2051.08 " />
                                <polygon class="mavi_jeans fil13 str22"
                                    points="519.92,2262.33 629.6,2262.33 629.6,2374.83 519.92,2374.83 " />
                                <path class="kfc fil18 str22"
                                    d="M519.92 3021.08l214.98 0 0 -380.63c-67.31,0 -68.49,-60 -104.68,-60l-30.49 0 -69.2 0 -10.61 0 0 440.63z" />
                                <polygon class="rk-tel fil5 str22"
                                    points="734.9,2795.45 734.9,2640.45 948.03,2640.45 948.03,2904.2 841.47,2904.2 841.47,2795.45 " />
                                <polygon class="chuchvara fil18 str22"
                                    points="948.03,3021.08 734.9,3021.08 734.9,2795.45 841.47,2795.45 841.47,2904.2 948.03,2904.2 " />
                                <polygon class="ELP fil7 str22"
                                    points="948.03,2640.45 1054.59,2640.45 1054.59,2798.1 948.03,2798.1 " />
                                <polygon class="rocher fil12 str22"
                                    points="1165.84,2640.45 1054.59,2640.45 1054.59,2748.1 1165.84,2748.1 " />
                                <polygon class="coffee_like fil18 str22"
                                    points="1008.66,2476.85 1050.22,2476.85 1050.22,2472.47 1165.54,2472.47 1165.54,2587.47 1050.22,2587.47 1050.22,2558.72 1008.66,2558.72 " />
                                <polygon class="bambino fil18 str22"
                                    points="862.25,2484.06 862.25,2447.81 930.69,2447.81 930.69,2484.06 " />
                                <polygon class="trolley fil4 str22"
                                    points="862.25,2603.43 862.25,2567.18 930.69,2567.18 930.69,2603.43 " />
                                <polygon class="honey fil19 str22"
                                    points="1369.84,1368.4 1431.4,1368.4 1431.4,1470.9 1369.84,1470.9 " />
                                <polygon class="sherlock fil16 str22"
                                    points="1369.84,1519.02 1431.4,1519.02 1431.4,1648.94 1369.84,1648.94 " />
                                <polygon class="fun_party fil4 str22"
                                    points="1369.84,1519.02 1431.4,1519.02 1431.4,1470.9 1369.84,1470.9 " />
                                <polygon class="parovozik fil20 str22"
                                    points="859.45,827.31 859.45,791.06 927.89,791.06 927.89,827.31 " />
                                <polygon class="mobile_services fil5 str22"
                                    points="934.63,864.65 970.88,864.65 970.88,933.09 934.63,933.09 " />
                                <polygon class="fil2 str22"
                                    points="948.03,3021.08 985.84,3021.08 1335.49,3021.08 1335.49,2980.6 1335.49,2949.97 1335.49,2949.97 1335.49,2928.02 1335.49,2909.88 1335.49,2826.31 1268.15,2826.31 1200.81,2826.31 1200.81,2798.1 1005.84,2798.1 948.03,2798.1 948.03,2918.1 948.03,2949.97 948.03,2980.6 " />
                                <path class="fil2 str22"
                                    d="M1200.81 2758.96l134.68 0 0 -70.62 0 -9.08c0,-20.79 -17.01,-37.8 -37.8,-37.8l-96.88 0 0 46.88 0 70.62z" />
                                <polygon class="fil2 str22"
                                    points="1487.36,2925.18 1535.18,2925.18 1535.18,2903.31 1638.3,2903.31 1638.3,3013.31 1535.18,3013.31 1487.36,3013.31 1487.36,3021.08 1425.79,3021.08 1425.79,2925.18 1425.79,2849.56 1425.79,2799.56 1487.36,2799.56 1528.3,2799.56 1528.3,2849.56 1487.36,2849.56 " />
                                <polygon class="toilet fil14 str22"
                                    points="1335.49,2758.96 1268.15,2758.96 1268.15,2826.31 1335.49,2826.31 " />
                                <polygon class="toilet fil14 str22"
                                    points="1200.81,2758.96 1268.15,2758.96 1268.15,2826.31 1200.81,2826.31 " />
                                <polygon class="fil2 str22"
                                    points="1272.19,877.67 1161.03,877.67 1161.03,953.53 1272.19,953.53 " />
                                <polygon class="fil2 str22"
                                    points="1272.19,832.36 1228.97,832.36 1228.97,795.59 1272.19,795.59 " />
                                <polygon class="fil2 str22"
                                    points="1272.19,810.33 1228.37,810.33 1228.37,877.67 1272.19,877.67 " />
                                <polygon class="fil2 str22"
                                    points="1369.84,1202.06 1431.4,1202.06 1431.4,1306.67 1369.84,1306.67 " />
                                <polygon class="fil2 str22"
                                    points="1369.84,1368.4 1431.4,1368.4 1431.4,1306.67 1369.84,1306.67 " />
                                <polygon class="fil2 str22"
                                    points="1319.54,1201.58 1379.53,1201.58 1379.53,1130.19 1431.4,1130.19 1431.4,1089.79 1379.53,1089.79 1319.54,1089.79 1272.19,1089.79 1272.19,953.53 1161.03,953.53 1161.03,1201.58 1272.19,1201.58 " />
                                <path class="fil21"
                                    d="M1366.02 3041.54c-0.96,0 -1.75,-0.78 -1.75,-1.75l0 -0.04 0 -2.96c0,-0.96 0.79,-1.75 1.75,-1.75 0.97,0 1.75,0.79 1.75,1.75l0 1.25 26 0 0 -1.25c0,-0.96 0.78,-1.75 1.75,-1.75 0.97,0 1.75,0.79 1.75,1.75l0 2.96 0 0.04c0,0.97 -0.78,1.75 -1.75,1.75l-0.04 0 -29.41 0 -0.05 0z" />
                                <polyline class="fil1 str23"
                                    points="1414.77,3053.29 1407.27,3045.79 1399.77,3053.29 1414.77,3053.29 " />
                                <polyline class="fil1 str23"
                                    points="1361.77,3053.29 1354.27,3045.79 1346.77,3053.29 1361.77,3053.29 " />
                                <polygon class="fil21" points="1380.77,2972.79 1416.27,2994.79 1345.27,2994.79 " />
                                <path class="fil21"
                                    d="M1347.54 3022.29l0 -17.75 6.66 0c1.35,0 2.44,0.18 3.26,0.54 0.82,0.36 1.46,0.92 1.93,1.66 0.46,0.75 0.69,1.53 0.69,2.35 0,0.75 -0.2,1.47 -0.62,2.14 -0.41,0.67 -1.03,1.21 -1.86,1.62 1.07,0.31 1.9,0.85 2.47,1.61 0.58,0.76 0.87,1.65 0.87,2.69 0,0.83 -0.18,1.6 -0.53,2.32 -0.35,0.71 -0.78,1.26 -1.3,1.65 -0.52,0.39 -1.16,0.68 -1.94,0.88 -0.78,0.2 -1.73,0.29 -2.86,0.29l-6.77 0zm2.35 -10.29l3.83 0c1.05,0 1.79,-0.07 2.24,-0.2 0.6,-0.18 1.05,-0.48 1.35,-0.89 0.31,-0.41 0.46,-0.92 0.46,-1.55 0,-0.59 -0.14,-1.1 -0.43,-1.55 -0.28,-0.45 -0.68,-0.76 -1.21,-0.92 -0.52,-0.17 -1.42,-0.25 -2.7,-0.25l-3.54 0 0 5.36zm0 8.2l4.42 0c0.75,0 1.29,-0.03 1.59,-0.09 0.54,-0.09 1,-0.25 1.36,-0.48 0.36,-0.23 0.66,-0.56 0.9,-0.99 0.23,-0.43 0.35,-0.93 0.35,-1.49 0,-0.66 -0.17,-1.24 -0.51,-1.73 -0.34,-0.49 -0.81,-0.83 -1.41,-1.03 -0.6,-0.19 -1.47,-0.29 -2.6,-0.29l-4.1 0 0 6.1zm12.48 2.09l6.86 -9.25 -6.05 -8.5 2.8 0 3.22 4.56c0.67,0.94 1.14,1.67 1.43,2.18 0.39,-0.65 0.86,-1.32 1.4,-2.03l3.57 -4.71 2.56 0 -6.24 8.37 6.72 9.38 -2.9 0 -4.47 -6.33c-0.25,-0.36 -0.51,-0.76 -0.78,-1.18 -0.39,0.64 -0.68,1.08 -0.84,1.33l-4.46 6.18 -2.82 0zm17.63 -8.64c0,-2.95 0.79,-5.25 2.37,-6.92 1.58,-1.67 3.62,-2.5 6.13,-2.5 1.63,0 3.11,0.39 4.43,1.17 1.31,0.79 2.31,1.88 3,3.28 0.7,1.4 1.04,2.99 1.04,4.76 0,1.8 -0.36,3.41 -1.09,4.83 -0.73,1.42 -1.76,2.5 -3.09,3.23 -1.33,0.73 -2.76,1.1 -4.31,1.1 -1.67,0 -3.16,-0.41 -4.48,-1.21 -1.31,-0.81 -2.31,-1.91 -2.99,-3.31 -0.67,-1.4 -1.01,-2.87 -1.01,-4.43zm2.42 0.04c0,2.13 0.57,3.82 1.72,5.05 1.15,1.23 2.6,1.85 4.33,1.85 1.77,0 3.22,-0.62 4.37,-1.87 1.14,-1.24 1.71,-3 1.71,-5.29 0,-1.44 -0.25,-2.7 -0.73,-3.78 -0.49,-1.08 -1.21,-1.91 -2.15,-2.51 -0.94,-0.59 -1.99,-0.89 -3.16,-0.89 -1.67,0 -3.1,0.57 -4.29,1.72 -1.2,1.14 -1.8,3.04 -1.8,5.72zm19.19 -9.15l10.8 0 0 15.66 1.59 0 0 6.24 -2.09 0 0 -4.15 -11.73 0 0 4.15 -2.1 0 0 -6.24 1.38 0c1.43,-2.16 2.15,-6.51 2.15,-13.06l0 -2.6zm8.45 2.1l-6.19 0 0 0.91c0,1.51 -0.13,3.57 -0.41,6.19 -0.27,2.62 -0.8,4.77 -1.59,6.46l8.19 0 0 -13.56z" />
                                <path class="fil21"
                                    d="M500.67 2512.3c0,-0.97 0.79,-1.75 1.75,-1.75l0.05 0 2.95 0c0.97,0 1.75,0.78 1.75,1.75 0,0.97 -0.78,1.75 -1.75,1.75l-1.25 0 0 26 1.25 0c0.97,0 1.75,0.78 1.75,1.75 0,0.96 -0.78,1.75 -1.75,1.75l-2.95 0 -0.05 0c-0.96,0 -1.75,-0.79 -1.75,-1.75l0 -0.05 0 -29.41 0 -0.04z" />
                                <polyline class="fil1 str24"
                                    points="488.92,2561.05 496.42,2553.55 488.92,2546.05 488.92,2561.05 " />
                                <polyline class="fil1 str24"
                                    points="488.92,2508.05 496.42,2500.55 488.92,2493.05 488.92,2508.05 " />
                                <polygon class="fil21" points="569.42,2527.05 547.42,2562.55 547.42,2491.55 " />
                                <path class="fil21"
                                    d="M519.92 2493.82l17.75 0 0 6.65c0,1.36 -0.18,2.45 -0.54,3.27 -0.36,0.82 -0.91,1.46 -1.65,1.92 -0.75,0.47 -1.53,0.7 -2.35,0.7 -0.76,0 -1.47,-0.21 -2.14,-0.62 -0.67,-0.41 -1.21,-1.03 -1.62,-1.86 -0.32,1.07 -0.86,1.89 -1.61,2.47 -0.76,0.58 -1.66,0.87 -2.69,0.87 -0.83,0 -1.61,-0.18 -2.32,-0.53 -0.71,-0.35 -1.26,-0.78 -1.65,-1.3 -0.39,-0.52 -0.68,-1.16 -0.88,-1.94 -0.2,-0.78 -0.3,-1.74 -0.3,-2.87l0 -6.76zm10.29 2.34l0 3.84c0,1.04 0.07,1.79 0.21,2.24 0.18,0.6 0.47,1.05 0.88,1.35 0.42,0.3 0.93,0.46 1.55,0.46 0.59,0 1.11,-0.14 1.56,-0.43 0.45,-0.28 0.75,-0.68 0.92,-1.21 0.17,-0.52 0.25,-1.42 0.25,-2.7l0 -3.55 -5.37 0zm-8.19 0l0 4.42c0,0.76 0.03,1.29 0.08,1.6 0.1,0.54 0.26,0.99 0.49,1.36 0.22,0.36 0.55,0.66 0.98,0.89 0.44,0.24 0.93,0.35 1.5,0.35 0.66,0 1.24,-0.17 1.72,-0.5 0.49,-0.34 0.84,-0.81 1.03,-1.41 0.2,-0.61 0.3,-1.47 0.3,-2.6l0 -4.11 -6.1 0zm-2.1 12.49l9.25 6.86 8.5 -6.05 0 2.79 -4.55 3.22c-0.94,0.67 -1.67,1.15 -2.18,1.43 0.65,0.4 1.32,0.87 2.02,1.41l4.71 3.57 0 2.55 -8.36 -6.23 -9.39 6.72 0 -2.91 6.34 -4.47c0.36,-0.25 0.75,-0.5 1.18,-0.77 -0.64,-0.4 -1.09,-0.68 -1.33,-0.85l-6.19 -4.45 0 -2.82zm8.65 17.62c2.94,0 5.25,0.8 6.92,2.38 1.66,1.58 2.5,3.62 2.5,6.12 0,1.64 -0.39,3.12 -1.18,4.43 -0.78,1.32 -1.87,2.32 -3.27,3.01 -1.4,0.69 -2.99,1.04 -4.77,1.04 -1.8,0 -3.41,-0.37 -4.83,-1.09 -1.42,-0.73 -2.49,-1.76 -3.22,-3.09 -0.73,-1.33 -1.1,-2.77 -1.1,-4.31 0,-1.67 0.4,-3.16 1.21,-4.48 0.81,-1.31 1.91,-2.31 3.31,-2.99 1.39,-0.68 2.87,-1.02 4.43,-1.02zm-0.04 2.43c-2.14,0 -3.82,0.57 -5.05,1.72 -1.23,1.15 -1.85,2.59 -1.85,4.33 0,1.77 0.62,3.22 1.87,4.36 1.24,1.14 3,1.72 5.29,1.72 1.44,0 2.7,-0.25 3.78,-0.74 1.08,-0.48 1.91,-1.2 2.5,-2.14 0.6,-0.94 0.9,-1.99 0.9,-3.16 0,-1.67 -0.58,-3.1 -1.72,-4.3 -1.14,-1.2 -3.05,-1.79 -5.72,-1.79zm9.14 19.18l0 10.8 -15.65 0 0 1.6 -6.24 0 0 -2.09 4.14 0 0 -11.73 -4.14 0 0 -2.1 6.24 0 0 1.38c2.15,1.43 6.51,2.14 13.06,2.14l2.59 0zm-2.09 8.46l0 -6.19 -0.91 0c-1.51,0 -3.57,-0.14 -6.19,-0.41 -2.62,-0.27 -4.78,-0.8 -6.46,-1.59l0 8.19 13.56 0z" />
                                <path class="fil21"
                                    d="M500.67 2414.16c0,-0.97 0.79,-1.75 1.75,-1.75l0.05 0 2.95 0c0.97,0 1.75,0.78 1.75,1.75 0,0.96 -0.78,1.75 -1.75,1.75l-1.25 0 0 25.99 1.25 0c0.97,0 1.75,0.79 1.75,1.75 0,0.97 -0.78,1.76 -1.75,1.76l-2.95 0 -0.05 0c-0.96,0 -1.75,-0.79 -1.75,-1.76l0 -0.04 0 -29.41 0 -0.04z" />
                                <polyline class="fil1 str25"
                                    points="488.92,2462.9 496.42,2455.4 488.92,2447.9 488.92,2462.9 " />
                                <polyline class="fil1 str25"
                                    points="488.92,2409.9 496.42,2402.4 488.92,2394.9 488.92,2409.9 " />
                                <polygon class="fil21" points="569.42,2428.91 547.42,2464.41 547.42,2393.4 " />
                                <path class="fil21"
                                    d="M519.92 2395.67l17.75 0 0 6.66c0,1.36 -0.18,2.44 -0.54,3.26 -0.36,0.82 -0.91,1.46 -1.65,1.93 -0.75,0.46 -1.53,0.69 -2.35,0.69 -0.76,0 -1.47,-0.2 -2.14,-0.61 -0.67,-0.41 -1.21,-1.04 -1.62,-1.87 -0.32,1.08 -0.86,1.9 -1.61,2.48 -0.76,0.58 -1.66,0.86 -2.69,0.86 -0.83,0 -1.61,-0.17 -2.32,-0.52 -0.71,-0.35 -1.26,-0.79 -1.65,-1.3 -0.39,-0.52 -0.68,-1.17 -0.88,-1.95 -0.2,-0.78 -0.3,-1.73 -0.3,-2.86l0 -6.77zm10.29 2.35l0 3.84c0,1.04 0.07,1.79 0.21,2.24 0.18,0.59 0.47,1.04 0.88,1.35 0.42,0.3 0.93,0.45 1.55,0.45 0.59,0 1.11,-0.14 1.56,-0.42 0.45,-0.28 0.75,-0.69 0.92,-1.21 0.17,-0.53 0.25,-1.43 0.25,-2.7l0 -3.55 -5.37 0zm-8.19 0l0 4.42c0,0.76 0.03,1.29 0.08,1.6 0.1,0.54 0.26,0.99 0.49,1.35 0.22,0.37 0.55,0.67 0.98,0.9 0.44,0.23 0.93,0.35 1.5,0.35 0.66,0 1.24,-0.17 1.72,-0.51 0.49,-0.34 0.84,-0.81 1.03,-1.41 0.2,-0.6 0.3,-1.46 0.3,-2.6l0 -4.1 -6.1 0zm-2.1 12.48l9.25 6.87 8.5 -6.06 0 2.8 -4.55 3.22c-0.94,0.67 -1.67,1.15 -2.18,1.43 0.65,0.4 1.32,0.86 2.02,1.4l4.71 3.58 0 2.55 -8.36 -6.23 -9.39 6.71 0 -2.9 6.34 -4.47c0.36,-0.25 0.75,-0.51 1.18,-0.77 -0.64,-0.4 -1.09,-0.68 -1.33,-0.85l-6.19 -4.46 0 -2.82zm8.65 17.63c2.94,0 5.25,0.79 6.92,2.37 1.66,1.58 2.5,3.63 2.5,6.13 0,1.64 -0.39,3.11 -1.18,4.43 -0.78,1.32 -1.87,2.32 -3.27,3.01 -1.4,0.69 -2.99,1.03 -4.77,1.03 -1.8,0 -3.41,-0.36 -4.83,-1.09 -1.42,-0.72 -2.49,-1.75 -3.22,-3.08 -0.73,-1.33 -1.1,-2.77 -1.1,-4.31 0,-1.67 0.4,-3.17 1.21,-4.48 0.81,-1.32 1.91,-2.31 3.31,-2.99 1.39,-0.68 2.87,-1.02 4.43,-1.02zm-0.04 2.42c-2.14,0 -3.82,0.58 -5.05,1.73 -1.23,1.15 -1.85,2.59 -1.85,4.32 0,1.77 0.62,3.23 1.87,4.37 1.24,1.14 3,1.71 5.29,1.71 1.44,0 2.7,-0.24 3.78,-0.73 1.08,-0.49 1.91,-1.2 2.5,-2.14 0.6,-0.94 0.9,-2 0.9,-3.17 0,-1.66 -0.58,-3.09 -1.72,-4.29 -1.14,-1.2 -3.05,-1.8 -5.72,-1.8zm9.14 19.19l0 10.8 -15.65 0 0 1.6 -6.24 0 0 -2.1 4.14 0 0 -11.73 -4.14 0 0 -2.09 6.24 0 0 1.38c2.15,1.43 6.51,2.14 13.06,2.14l2.59 0zm-2.09 8.45l0 -6.18 -0.91 0c-1.51,0 -3.57,-0.14 -6.19,-0.41 -2.62,-0.27 -4.78,-0.8 -6.46,-1.59l0 8.18 13.56 0z" />
                                <path class="fil21"
                                    d="M500.67 1449.7c0,-0.97 0.79,-1.75 1.75,-1.75l0.05 0 2.95 0c0.97,0 1.75,0.78 1.75,1.75 0,0.96 -0.78,1.75 -1.75,1.75l-1.25 0 0 25.99 1.25 0c0.97,0 1.75,0.79 1.75,1.75 0,0.97 -0.78,1.76 -1.75,1.76l-2.95 0 -0.05 0c-0.96,0 -1.75,-0.79 -1.75,-1.76l0 -0.04 0 -29.41 0 -0.04z" />
                                <polyline class="fil1 str26"
                                    points="488.92,1498.44 496.42,1490.94 488.92,1483.44 488.92,1498.44 " />
                                <polyline class="fil1 str26"
                                    points="488.92,1445.44 496.42,1437.94 488.92,1430.44 488.92,1445.44 " />
                                <polygon class="fil21" points="569.42,1464.45 547.42,1499.95 547.42,1428.94 " />
                                <path class="fil21"
                                    d="M519.92 1431.21l17.75 0 0 6.66c0,1.36 -0.18,2.44 -0.54,3.26 -0.36,0.82 -0.91,1.46 -1.65,1.93 -0.75,0.46 -1.53,0.69 -2.35,0.69 -0.76,0 -1.47,-0.2 -2.14,-0.61 -0.67,-0.41 -1.21,-1.04 -1.62,-1.87 -0.32,1.08 -0.86,1.9 -1.61,2.48 -0.76,0.58 -1.66,0.86 -2.69,0.86 -0.83,0 -1.61,-0.17 -2.32,-0.52 -0.71,-0.35 -1.26,-0.79 -1.65,-1.3 -0.39,-0.52 -0.68,-1.17 -0.88,-1.95 -0.2,-0.78 -0.3,-1.73 -0.3,-2.86l0 -6.77zm10.29 2.35l0 3.84c0,1.04 0.07,1.79 0.21,2.24 0.18,0.6 0.47,1.05 0.88,1.35 0.42,0.3 0.93,0.45 1.55,0.45 0.59,0 1.11,-0.14 1.56,-0.42 0.45,-0.28 0.75,-0.69 0.92,-1.21 0.17,-0.53 0.25,-1.43 0.25,-2.7l0 -3.55 -5.37 0zm-8.19 0l0 4.42c0,0.76 0.03,1.29 0.08,1.6 0.1,0.54 0.26,0.99 0.49,1.35 0.22,0.37 0.55,0.67 0.98,0.9 0.44,0.23 0.93,0.35 1.5,0.35 0.66,0 1.24,-0.17 1.72,-0.51 0.49,-0.34 0.84,-0.81 1.03,-1.41 0.2,-0.6 0.3,-1.46 0.3,-2.6l0 -4.1 -6.1 0zm-2.1 12.48l9.25 6.87 8.5 -6.06 0 2.8 -4.55 3.22c-0.94,0.67 -1.67,1.15 -2.18,1.43 0.65,0.4 1.32,0.86 2.02,1.4l4.71 3.58 0 2.55 -8.36 -6.23 -9.39 6.71 0 -2.9 6.34 -4.47c0.36,-0.25 0.75,-0.51 1.18,-0.77 -0.64,-0.4 -1.09,-0.68 -1.33,-0.85l-6.19 -4.46 0 -2.82zm8.65 17.63c2.94,0 5.25,0.79 6.92,2.37 1.66,1.58 2.5,3.63 2.5,6.13 0,1.64 -0.39,3.11 -1.18,4.43 -0.78,1.32 -1.87,2.32 -3.27,3.01 -1.4,0.69 -2.99,1.03 -4.77,1.03 -1.8,0 -3.41,-0.36 -4.83,-1.09 -1.42,-0.72 -2.49,-1.75 -3.22,-3.08 -0.73,-1.33 -1.1,-2.77 -1.1,-4.31 0,-1.67 0.4,-3.17 1.21,-4.48 0.81,-1.32 1.91,-2.31 3.31,-2.99 1.39,-0.68 2.87,-1.02 4.43,-1.02zm-0.04 2.42c-2.14,0 -3.82,0.58 -5.05,1.73 -1.23,1.15 -1.85,2.59 -1.85,4.32 0,1.77 0.62,3.23 1.87,4.37 1.24,1.14 3,1.71 5.29,1.71 1.44,0 2.7,-0.24 3.78,-0.73 1.08,-0.49 1.91,-1.2 2.5,-2.14 0.6,-0.94 0.9,-2 0.9,-3.17 0,-1.66 -0.58,-3.09 -1.72,-4.29 -1.14,-1.2 -3.05,-1.8 -5.72,-1.8zm9.14 19.19l0 10.8 -15.65 0 0 1.6 -6.24 0 0 -2.1 4.14 0 0 -11.73 -4.14 0 0 -2.09 6.24 0 0 1.38c2.15,1.43 6.51,2.14 13.06,2.14l2.59 0zm-2.09 8.45l0 -6.18 -0.91 0c-1.51,0 -3.57,-0.14 -6.19,-0.41 -2.62,-0.27 -4.78,-0.8 -6.46,-1.59l0 8.18 13.56 0z" />
                                <path class="fil21"
                                    d="M500.67 1351.55c0,-0.96 0.79,-1.75 1.75,-1.75l0.05 0 2.95 0c0.97,0 1.75,0.79 1.75,1.75 0,0.97 -0.78,1.75 -1.75,1.75l-1.25 0 0 26 1.25 0c0.97,0 1.75,0.79 1.75,1.75 0,0.97 -0.78,1.75 -1.75,1.75l-2.95 0 -0.05 0c-0.96,0 -1.75,-0.78 -1.75,-1.75l0 -0.04 0 -29.41 0 -0.05z" />
                                <polyline class="fil1 str27"
                                    points="488.92,1400.3 496.42,1392.8 488.92,1385.3 488.92,1400.3 " />
                                <polyline class="fil1 str27"
                                    points="488.92,1347.3 496.42,1339.8 488.92,1332.3 488.92,1347.3 " />
                                <polygon class="fil21" points="569.42,1366.3 547.42,1401.8 547.42,1330.8 " />
                                <path class="fil21"
                                    d="M519.92 1333.07l17.75 0 0 6.66c0,1.35 -0.18,2.44 -0.54,3.26 -0.36,0.82 -0.91,1.46 -1.65,1.93 -0.75,0.46 -1.53,0.69 -2.35,0.69 -0.76,0 -1.47,-0.2 -2.14,-0.62 -0.67,-0.41 -1.21,-1.03 -1.62,-1.86 -0.32,1.07 -0.86,1.9 -1.61,2.48 -0.76,0.57 -1.66,0.86 -2.69,0.86 -0.83,0 -1.61,-0.18 -2.32,-0.53 -0.71,-0.35 -1.26,-0.78 -1.65,-1.3 -0.39,-0.51 -0.68,-1.16 -0.88,-1.94 -0.2,-0.78 -0.3,-1.73 -0.3,-2.86l0 -6.77zm10.29 2.35l0 3.83c0,1.05 0.07,1.79 0.21,2.24 0.18,0.6 0.47,1.05 0.88,1.35 0.42,0.31 0.93,0.46 1.55,0.46 0.59,0 1.11,-0.14 1.56,-0.43 0.45,-0.28 0.75,-0.68 0.92,-1.21 0.17,-0.52 0.25,-1.42 0.25,-2.7l0 -3.54 -5.37 0zm-8.19 0l0 4.42c0,0.75 0.03,1.29 0.08,1.59 0.1,0.54 0.26,1 0.49,1.36 0.22,0.36 0.55,0.66 0.98,0.9 0.44,0.23 0.93,0.35 1.5,0.35 0.66,0 1.24,-0.17 1.72,-0.51 0.49,-0.34 0.84,-0.81 1.03,-1.41 0.2,-0.6 0.3,-1.47 0.3,-2.6l0 -4.1 -6.1 0zm-2.1 12.48l9.25 6.86 8.5 -6.05 0 2.8 -4.55 3.22c-0.94,0.67 -1.67,1.14 -2.18,1.43 0.65,0.39 1.32,0.86 2.02,1.4l4.71 3.57 0 2.56 -8.36 -6.24 -9.39 6.72 0 -2.9 6.34 -4.47c0.36,-0.25 0.75,-0.51 1.18,-0.78 -0.64,-0.39 -1.09,-0.68 -1.33,-0.84l-6.19 -4.46 0 -2.82zm8.65 17.63c2.94,0 5.25,0.79 6.92,2.37 1.66,1.58 2.5,3.62 2.5,6.13 0,1.63 -0.39,3.11 -1.18,4.43 -0.78,1.31 -1.87,2.31 -3.27,3 -1.4,0.7 -2.99,1.04 -4.77,1.04 -1.8,0 -3.41,-0.36 -4.83,-1.09 -1.42,-0.73 -2.49,-1.75 -3.22,-3.09 -0.73,-1.33 -1.1,-2.76 -1.1,-4.31 0,-1.67 0.4,-3.16 1.21,-4.48 0.81,-1.31 1.91,-2.31 3.31,-2.99 1.39,-0.67 2.87,-1.01 4.43,-1.01zm-0.04 2.42c-2.14,0 -3.82,0.57 -5.05,1.72 -1.23,1.15 -1.85,2.6 -1.85,4.33 0,1.77 0.62,3.22 1.87,4.37 1.24,1.14 3,1.71 5.29,1.71 1.44,0 2.7,-0.25 3.78,-0.73 1.08,-0.49 1.91,-1.21 2.5,-2.15 0.6,-0.94 0.9,-1.99 0.9,-3.16 0,-1.67 -0.58,-3.1 -1.72,-4.29 -1.14,-1.2 -3.05,-1.8 -5.72,-1.8zm9.14 19.19l0 10.8 -15.65 0 0 1.59 -6.24 0 0 -2.09 4.14 0 0 -11.73 -4.14 0 0 -2.1 6.24 0 0 1.38c2.15,1.43 6.51,2.15 13.06,2.15l2.59 0zm-2.09 8.45l0 -6.19 -0.91 0c-1.51,0 -3.57,-0.13 -6.19,-0.4 -2.62,-0.28 -4.78,-0.81 -6.46,-1.6l0 8.19 13.56 0z" />
                                <path class="fil22"
                                    d="M920.83 2561.42l-7.24 0 -2.57 0c-0.55,0 -1,-0.45 -1,-1l0 -4.5 -32.79 0 -0.02 0c-0.55,0 -1,-0.45 -1,-1l0 -0.02 0 -59.95 0 -0.03c0,-0.55 0.45,-1 1,-1l0.02 0 32.79 0 0 -4.5c0,-0.55 0.45,-1 1,-1l44.91 0 27.27 0 8.09 0c-12.39,14.89 -23.34,27.98 -34.34,40.9 -9.18,10.77 -18.19,21.19 -27.8,32.1l-8.32 0zm15.8 -28.5l0.89 1.08 0 -1.08 -0.89 0zm2.89 3.51l1.54 1.87 3.46 -4.02 0 -1.36 -5 0 0 3.51zm-2 0.7l-3.47 -4.21 -1.53 0 0 6.5 5 0 0 -2.29zm-35.5 -33.05l-3.8 4.34 3.8 0 0 -4.34zm-3.89 6.34l3.89 4.72 0 -4.72 -3.89 0zm2.77 6.5l-3.88 -4.72 0 4.72 3.88 0zm-3.88 -10.16l3.8 -4.34 -3.8 0 0 4.34zm-18.31 -9.84l0 8.88 0 16.12 9.94 0 0 0 -0.01 -0.01 0 -0.01 0 -0.01 -0.04 -0.08 0 0 -0.02 -0.05 0 0 -0.01 -0.03 -0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 -0.01 -0.01 0 -0.01 0 0 -0.01 -0.03 0 -0.02 0 0 0 -0.02 -0.01 0 0 -0.01 0 -0.02 0 0 0 -0.01 0 -0.01 0 -0.01 -0.01 -0.02 0 -0.02 0 0 0 -0.01 0 -0.02 0 0 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -0.02 0 -1.44 0 -0.01 0 -0.02c0,-0.55 0.45,-1 1,-1l0.02 0 4.48 0 0 -1c0,-0.55 0.45,-1 1,-1l0 -7.47 0 -0.03 0 -0.03 0 -6.97c-0.55,0 -1,-0.45 -1,-1l0 -1 -4.48 0 -0.02 0c-0.54,0 -0.99,-0.43 -1,-0.97l0 -0.03 0 -0.01 0 -0.02 0 -1.47 0 -0.5 0 -0.5 -7.76 0 -2.05 0zm0 27l0 2 16.28 0 56.68 0 0.54 -0.63 1.16 -1.37 -58.35 0 -0.03 0 -16.28 0zm0 4l0 13.97 0 11.03 9.81 0 0.16 0c-0.01,-0.02 -0.06,-0.03 -0.16,-0.05l0 -0.82 0.01 0 -0.01 -0.13 0 -0.98 0 -0.02 0 -0.02c0.01,-0.54 0.46,-0.98 1,-0.98l0.02 0 4.48 0 0 -1.5c0,-0.55 0.45,-1 1,-1l0 -6.97 0 -0.03 0 -0.02 0 -7.48c-0.55,0 -1,-0.45 -1,-1l0 -0.29 -4.5 0c-0.55,0 -1,-0.61 -1,-1.35 0,-0.07 0,-0.14 0.01,-0.21 -0.01,-0.05 -0.01,-0.1 -0.01,-0.15l0 -1.47 0 -0.01 0 -0.02 0 -0.02 0 0 0 -0.01 0 -0.02 0 0 0 -0.02 0 -0.01 0 0 0 -0.02 0.01 -0.02 0 -0.01 0 0 0 -0.02 0 0 0 -0.02 0 -0.01 0.01 0 0 -0.02 0 0 0 -0.01 0.01 -0.04 0 0 0 -0.01 0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 0.01 -0.01 0.01 -0.03 0 0 0.02 -0.04 0 -0.01 0.04 -0.08 0 0 0 -0.01 0.01 -0.02 0 0 -9.94 0zm86.08 -17.5l-3.77 0 0 4.48 3.77 -4.48zm-5.77 0l-5.5 0 0 6.5 5.5 0 0 -6.5zm-7.5 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5.5 0 0 6.5 5.5 0 0 -6.5zm-7.5 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-5 -2l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5.5 0 0 -6 -5.5 0 0 6zm7.5 0l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5.5 0 0 -6 -5.5 0 0 6zm7.5 0l5 0 0 -6 -5 0 0 6zm-64 31l5 0 0 -6.5 -5 0 0 6.5zm7 0l5 0 0 -6.5 -5 0 0 6.5zm7 0l5 0 0 -6.5 -5 0 0 6.5zm7 0l5.5 0 0 -6.5 -5.5 0 0 6.5zm7.5 0l5 0 0 -6.5 -5 0 0 6.5zm12 2l-5 0 0 6 0.61 0 4.39 -5.04 0 -0.96zm-7 0l-5 0 0 6 5 0 0 -6zm-7 0l-5.5 0 0 6 5.5 0 0 -6zm-7.5 0l-5 0 0 6 5 0 0 -6zm-7 0l-5 0 0 6 5 0 0 -6zm-7 0l-5 0 0 6 5 0 0 -6zm69.49 -39l-3.49 0 0 4.16 3.49 -4.16zm-75.49 47.5l34.93 0 0.44 -0.5 -6.85 0 -0.02 0 -0.03 0 -7.45 0 -0.02 0 -0.03 0 -6.94 0 -0.03 0 -0.03 0 -6.95 0 -0.02 0 -0.03 0 -6.95 0 -0.02 0 0 0.5zm16 -56l66.59 0 2.92 -3.5 -69.51 0 0 3.5zm13.66 62l-13.66 0 0 3.5 10.58 0 3.08 -3.5z" />
                                <path class="fil22"
                                    d="M931.1 900.11l0 7.24 0 2.57c0,0.55 -0.44,1 -1,1l-4.5 0 0 32.79 0 0.02c0,0.56 -0.44,1 -1,1l-0.01 0 -59.96 0 -0.03 0c-0.55,0 -1,-0.44 -1,-1l0 -0.02 0 -32.79 -4.5 0c-0.55,0 -1,-0.45 -1,-1l0 -44.91 0 -27.26 0 -8.1c14.9,12.39 27.98,23.34 40.9,34.34 10.77,9.18 21.2,18.19 32.1,27.8l0 8.32zm-28.5 -15.8l1.08 -0.89 -1.08 0 0 0.89zm3.51 -2.89l1.87 -1.54 -4.02 -3.46 -1.36 0 0 5 3.51 0zm0.7 2l-4.21 3.47 0 1.53 6.5 0 0 -5 -2.29 0zm-33.05 35.5l4.34 3.8 0 -3.8 -4.34 0zm6.34 3.89l4.72 -3.89 -4.72 0 0 3.89zm6.5 -2.77l-4.71 3.88 4.71 0 0 -3.88zm-10.15 3.88l-4.35 -3.8 0 3.8 4.35 0zm-9.85 18.31l8.89 0 16.11 0 0 -9.94 0 0 -0.01 0.01 -0.01 0 0 0 -0.09 0.04 0 0.01 -0.04 0.01 -0.01 0 -0.03 0.01 -0.01 0.01 0 0 -0.02 0 0 0 -0.01 0.01 -0.02 0 0 0 -0.03 0.01 -0.02 0 0 0 -0.01 0.01 -0.01 0 -0.01 0 -0.01 0 0 0 -0.02 0 -0.01 0 -0.01 0.01 -0.01 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -0.01 0 -1.45 0 -0.01 0 -0.02 0c-0.55,0 -1,-0.45 -1,-1l0 -0.02 0 -4.48 -1 0c-0.55,0 -0.99,-0.45 -1,-1l-7.47 0 -0.03 0 -0.02 0 -6.98 0c0,0.55 -0.44,1 -1,1l-1 0 0 4.48 0 0.02c0,0.55 -0.43,0.99 -0.97,1l-0.03 0 -0.01 0 -0.02 0 -1.47 0 -0.5 0 -0.5 0 0 7.76 0 2.05zm27 0l2 0 0 -16.28 0 -56.68 -0.63 -0.54 -1.37 -1.16 0 58.35 0 0.03 0 16.28zm4 0l13.98 0 11.02 0 0 -9.81 0 -0.16c-0.01,0.01 -0.03,0.06 -0.05,0.16l-0.82 0 0 -0.01 -0.13 0.01 -0.98 0 -0.02 0 -0.02 0c-0.54,-0.01 -0.98,-0.45 -0.98,-1l0 -0.02 0 -4.48 -1.5 0c-0.55,0 -1,-0.45 -1,-1l-6.97 0 -0.03 0 -0.02 0 -7.48 0c0,0.55 -0.44,1 -1,1l-0.29 0 0 4.5c0,0.55 -0.6,1 -1.35,1 -0.07,0 -0.14,0 -0.21,-0.01 -0.04,0.01 -0.09,0.01 -0.15,0.01l-1.47 0 -0.01 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 0 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -0.01 -0.01 -0.01 0 -0.02 0 0 0 -0.01 0 -0.01 0 -0.01 0 -0.02 -0.01 0 0 -0.01 0 -0.03 -0.01 0 0 -0.02 0 -0.01 -0.01 0 0 -0.02 0 0 0 -0.02 -0.01 -0.03 -0.01 0 0 -0.04 -0.01 0 -0.01 -0.09 -0.04 0 0 -0.01 0 -0.01 -0.01 -0.01 0 0 9.94zm-17.5 -86.08l0 3.77 4.48 0 -4.48 -3.77zm0 5.77l0 5.5 6.5 0 0 -5.5 -6.5 0zm0 7.5l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5.5 6.5 0 0 -5.5 -6.5 0zm0 7.5l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm-2 5l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5.5 -6 0 0 5.5 6 0zm0 -7.5l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5.5 -6 0 0 5.5 6 0zm0 -7.5l0 -5 -6 0 0 5 6 0zm31 64l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5.5 -6.5 0 0 5.5 6.5 0zm0 -7.5l0 -5 -6.5 0 0 5 6.5 0zm2 -12l0 5 6 0 0 -0.61 -5.04 -4.39 -0.96 0zm0 7l0 5 6 0 0 -5 -6 0zm0 7l0 5.5 6 0 0 -5.5 -6 0zm0 7.5l0 5 6 0 0 -5 -6 0zm0 7l0 5 6 0 0 -5 -6 0zm0 7l0 5 6 0 0 -5 -6 0zm-39 -69.48l0 3.48 4.16 0 -4.16 -3.48zm47.5 75.48l0 -34.93 -0.5 -0.44 0 6.85 0 0.02 0 0.03 0 7.45 0 0.02 0 0.03 0 6.95 0 0.02 0 0.03 0 6.95 0 0.02 0 0.03 0 6.95 0 0.02 0.5 0zm-56 -16l0 -66.59 -3.5 -2.92 0 69.51 3.5 0zm62 -13.66l0 13.66 3.5 0 0 -10.58 -3.5 -3.08z" />
                                <path class="fil21"
                                    d="M500.67 680.26c0,-0.96 0.79,-1.75 1.75,-1.75l0.05 0 2.95 0c0.97,0 1.75,0.79 1.75,1.75 0,0.97 -0.78,1.75 -1.75,1.75l-1.25 0 0 26 1.25 0c0.97,0 1.75,0.79 1.75,1.75 0,0.97 -0.78,1.75 -1.75,1.75l-2.95 0 -0.05 0c-0.96,0 -1.75,-0.78 -1.75,-1.75l0 -0.04 0 -29.41 0 -0.05z" />
                                <polyline class="fil1 str28"
                                    points="488.92,729.01 496.42,721.51 488.92,714.01 488.92,729.01 " />
                                <polyline class="fil1 str28"
                                    points="488.92,676.01 496.42,668.51 488.92,661.01 488.92,676.01 " />
                                <polygon class="fil21" points="569.42,695.01 547.42,730.51 547.42,659.51 " />
                                <path class="fil21"
                                    d="M519.92 661.78l17.75 0 0 6.66c0,1.35 -0.18,2.44 -0.54,3.26 -0.36,0.82 -0.91,1.46 -1.65,1.93 -0.75,0.46 -1.53,0.69 -2.35,0.69 -0.76,0 -1.47,-0.2 -2.14,-0.62 -0.67,-0.41 -1.21,-1.03 -1.62,-1.86 -0.32,1.07 -0.86,1.9 -1.61,2.48 -0.76,0.57 -1.66,0.86 -2.69,0.86 -0.83,0 -1.61,-0.17 -2.32,-0.52 -0.71,-0.36 -1.26,-0.79 -1.65,-1.31 -0.39,-0.51 -0.68,-1.16 -0.88,-1.94 -0.2,-0.78 -0.3,-1.73 -0.3,-2.86l0 -6.77zm10.29 2.35l0 3.84c0,1.04 0.07,1.78 0.21,2.24 0.18,0.59 0.47,1.04 0.88,1.35 0.42,0.3 0.93,0.45 1.55,0.45 0.59,0 1.11,-0.14 1.56,-0.42 0.45,-0.29 0.75,-0.69 0.92,-1.22 0.17,-0.52 0.25,-1.42 0.25,-2.7l0 -3.54 -5.37 0zm-8.19 0l0 4.42c0,0.76 0.03,1.29 0.08,1.6 0.1,0.54 0.26,0.99 0.49,1.35 0.22,0.36 0.55,0.66 0.98,0.9 0.44,0.23 0.93,0.35 1.5,0.35 0.66,0 1.24,-0.17 1.72,-0.51 0.49,-0.34 0.84,-0.81 1.03,-1.41 0.2,-0.6 0.3,-1.47 0.3,-2.6l0 -4.1 -6.1 0zm-2.1 12.48l9.25 6.86 8.5 -6.05 0 2.8 -4.55 3.22c-0.94,0.67 -1.67,1.14 -2.18,1.43 0.65,0.39 1.32,0.86 2.02,1.4l4.71 3.57 0 2.56 -8.36 -6.24 -9.39 6.72 0 -2.9 6.34 -4.47c0.36,-0.25 0.75,-0.51 1.18,-0.78 -0.64,-0.39 -1.09,-0.67 -1.33,-0.84l-6.19 -4.46 0 -2.82zm8.65 17.63c2.94,0 5.25,0.79 6.92,2.37 1.66,1.58 2.5,3.62 2.5,6.13 0,1.64 -0.39,3.11 -1.18,4.43 -0.78,1.31 -1.87,2.32 -3.27,3.01 -1.4,0.69 -2.99,1.03 -4.77,1.03 -1.8,0 -3.41,-0.36 -4.83,-1.09 -1.42,-0.73 -2.49,-1.75 -3.22,-3.09 -0.73,-1.33 -1.1,-2.76 -1.1,-4.31 0,-1.67 0.4,-3.16 1.21,-4.47 0.81,-1.32 1.91,-2.32 3.31,-3 1.39,-0.67 2.87,-1.01 4.43,-1.01zm-0.04 2.42c-2.14,0 -3.82,0.57 -5.05,1.72 -1.23,1.15 -1.85,2.6 -1.85,4.33 0,1.77 0.62,3.22 1.87,4.37 1.24,1.14 3,1.71 5.29,1.71 1.44,0 2.7,-0.24 3.78,-0.73 1.08,-0.49 1.91,-1.21 2.5,-2.15 0.6,-0.94 0.9,-1.99 0.9,-3.16 0,-1.66 -0.58,-3.09 -1.72,-4.29 -1.14,-1.2 -3.05,-1.8 -5.72,-1.8zm9.14 19.19l0 10.8 -15.65 0 0 1.6 -6.24 0 0 -2.1 4.14 0 0 -11.73 -4.14 0 0 -2.09 6.24 0 0 1.38c2.15,1.42 6.51,2.14 13.06,2.14l2.59 0zm-2.09 8.45l0 -6.19 -0.91 0c-1.51,0 -3.57,-0.13 -6.19,-0.4 -2.62,-0.27 -4.78,-0.8 -6.46,-1.6l0 8.19 13.56 0z" />
                                <polyline class="fil1 str29" points="976.39,1549.41 976.39,1596.91 999.39,1596.91 " />
                                <line class="fil1 str29" x1="976.39" y1="1596.91" x2="949.89" y2="1596.91" />
                                <line class="fil1 str29" x1="976.39" y1="1591.91" x2="949.89" y2="1591.91" />
                                <line class="fil1 str29" x1="976.39" y1="1586.41" x2="949.89" y2="1586.41" />
                                <line class="fil1 str29" x1="976.39" y1="1580.91" x2="949.89" y2="1580.91" />
                                <line class="fil1 str29" x1="976.39" y1="1575.91" x2="949.89" y2="1575.91" />
                                <line class="fil1 str29" x1="976.39" y1="1570.41" x2="949.89" y2="1570.41" />
                                <line class="fil1 str29" x1="976.39" y1="1564.91" x2="949.89" y2="1564.91" />
                                <line class="fil1 str29" x1="976.39" y1="1559.91" x2="949.89" y2="1559.91" />
                                <line class="fil1 str29" x1="976.39" y1="1554.41" x2="949.89" y2="1554.41" />
                                <line class="fil1 str29" x1="963.39" y1="1549.41" x2="963.39" y2="1596.91" />
                                <polyline class="fil1 str29" points="956.39,1591.91 963.39,1596.91 969.89,1591.91 " />
                                <line class="fil1 str29" x1="976.39" y1="1549.41" x2="949.89" y2="1549.41" />
                                <polyline class="fil1 str29" points="975.39,1548.41 975.39,1597.91 1000.39,1597.91 " />
                                <line class="fil1 str29" x1="1020.89" y1="1618.41" x2="1020.89" y2="1623.91" />
                                <line class="fil1 str29" x1="1015.39" y1="1612.91" x2="1015.39" y2="1623.91" />
                                <line class="fil1 str29" x1="1010.39" y1="1607.91" x2="1010.39" y2="1623.91" />
                                <line class="fil1 str29" x1="1004.89" y1="1602.41" x2="1004.89" y2="1623.91" />
                                <line class="fil1 str29" x1="999.39" y1="1596.91" x2="999.39" y2="1623.91" />
                                <line class="fil1 str29" x1="994.39" y1="1596.91" x2="994.39" y2="1623.91" />
                                <line class="fil1 str29" x1="988.89" y1="1596.91" x2="988.89" y2="1623.91" />
                                <line class="fil1 str29" x1="983.39" y1="1596.91" x2="983.39" y2="1623.91" />
                                <line class="fil1 str29" x1="978.39" y1="1596.91" x2="978.39" y2="1623.91" />
                                <polyline class="fil1 str29" points="978.39,1610.41 1009.89,1610.41 1004.89,1605.41 " />
                                <polyline class="fil1 str29"
                                    points="999.39,1596.91 1010.39,1607.91 1011.89,1607.41 1009.89,1611.41 1012.39,1609.91 1026.39,1623.91 " />
                                <line class="fil1 str29" x1="1004.89" y1="1615.41" x2="1009.89" y2="1610.41" />
                                <path class="fil21"
                                    d="M1494.75 828.65c0.97,0 1.75,0.78 1.75,1.75l0 0.04 0 2.96c0,0.96 -0.78,1.75 -1.75,1.75 -0.97,0 -1.75,-0.79 -1.75,-1.75l0 -1.25 -26 0 0 1.25c0,0.96 -0.78,1.75 -1.75,1.75 -0.97,0 -1.75,-0.79 -1.75,-1.75l0 -2.96 0 -0.04c0,-0.97 0.78,-1.75 1.75,-1.75l0.05 0 29.41 0 0.04 0z" />
                                <polyline class="fil1 str30" points="1446,816.9 1453.5,824.4 1461,816.9 1446,816.9 " />
                                <polyline class="fil1 str30" points="1499,816.9 1506.5,824.4 1514,816.9 1499,816.9 " />
                                <polygon class="fil21" points="1480,897.4 1444.5,875.4 1515.5,875.4 " />
                                <path class="fil21"
                                    d="M1513.23 847.9l0 17.75 -6.65 0c-1.36,0 -2.45,-0.18 -3.27,-0.54 -0.82,-0.36 -1.46,-0.92 -1.92,-1.66 -0.47,-0.75 -0.7,-1.53 -0.7,-2.34 0,-0.76 0.21,-1.48 0.62,-2.15 0.41,-0.67 1.03,-1.21 1.86,-1.62 -1.07,-0.31 -1.9,-0.85 -2.47,-1.61 -0.58,-0.76 -0.87,-1.65 -0.87,-2.69 0,-0.83 0.18,-1.6 0.53,-2.32 0.35,-0.71 0.78,-1.26 1.3,-1.65 0.52,-0.39 1.16,-0.68 1.94,-0.88 0.78,-0.2 1.74,-0.29 2.87,-0.29l6.76 0zm-2.34 10.29l-3.84 0c-1.04,0 -1.79,0.07 -2.24,0.2 -0.6,0.18 -1.05,0.48 -1.35,0.89 -0.31,0.41 -0.46,0.93 -0.46,1.55 0,0.59 0.14,1.1 0.43,1.55 0.28,0.45 0.68,0.76 1.21,0.92 0.52,0.17 1.42,0.25 2.7,0.25l3.55 0 0 -5.36zm0 -8.2l-4.42 0c-0.76,0 -1.3,0.03 -1.6,0.09 -0.54,0.09 -0.99,0.25 -1.36,0.48 -0.36,0.23 -0.66,0.56 -0.89,0.99 -0.24,0.43 -0.35,0.93 -0.35,1.49 0,0.66 0.16,1.24 0.5,1.73 0.34,0.49 0.81,0.83 1.41,1.03 0.6,0.19 1.47,0.29 2.6,0.29l4.11 0 0 -6.1zm-12.49 -2.09l-6.86 9.25 6.05 8.5 -2.8 0 -3.21 -4.56c-0.68,-0.94 -1.15,-1.67 -1.43,-2.18 -0.4,0.65 -0.87,1.32 -1.41,2.03l-3.57 4.71 -2.55 0 6.23 -8.37 -6.72 -9.38 2.91 0 4.46 6.33c0.26,0.36 0.51,0.76 0.78,1.18 0.4,-0.64 0.68,-1.08 0.85,-1.33l4.45 -6.18 2.82 0zm-17.62 8.64c0,2.95 -0.8,5.25 -2.38,6.92 -1.58,1.67 -3.62,2.5 -6.12,2.5 -1.64,0 -3.12,-0.39 -4.43,-1.17 -1.32,-0.79 -2.32,-1.88 -3.01,-3.28 -0.69,-1.4 -1.04,-2.99 -1.04,-4.76 0,-1.8 0.37,-3.41 1.09,-4.83 0.73,-1.42 1.76,-2.5 3.09,-3.23 1.33,-0.73 2.77,-1.1 4.31,-1.1 1.67,0 3.16,0.41 4.48,1.22 1.31,0.8 2.31,1.9 2.99,3.3 0.68,1.4 1.02,2.87 1.02,4.43zm-2.43 -0.04c0,-2.13 -0.57,-3.82 -1.72,-5.05 -1.15,-1.23 -2.59,-1.85 -4.33,-1.85 -1.77,0 -3.22,0.62 -4.36,1.87 -1.15,1.24 -1.72,3 -1.72,5.29 0,1.44 0.25,2.7 0.74,3.78 0.48,1.08 1.2,1.92 2.14,2.51 0.94,0.59 1.99,0.89 3.16,0.89 1.67,0 3.1,-0.57 4.3,-1.72 1.2,-1.14 1.79,-3.04 1.79,-5.72zm-19.19 9.15l-10.79 0 0 -15.66 -1.6 0 0 -6.24 2.09 0 0 4.15 11.73 0 0 -4.15 2.1 0 0 6.24 -1.38 0c-1.43,2.16 -2.15,6.51 -2.15,13.06l0 2.6zm-8.45 -2.1l6.19 0 0 -0.91c0,-1.51 0.14,-3.57 0.41,-6.19 0.27,-2.62 0.8,-4.77 1.59,-6.46l-8.19 0 0 13.56z" />
                                <polyline class="fil1 str29" points="545.91,771.18 545.91,818.68 568.91,818.68 " />
                                <line class="fil1 str29" x1="545.91" y1="818.68" x2="519.41" y2="818.68" />
                                <line class="fil1 str29" x1="545.91" y1="813.68" x2="519.41" y2="813.68" />
                                <line class="fil1 str29" x1="545.91" y1="808.18" x2="519.41" y2="808.18" />
                                <line class="fil1 str29" x1="545.91" y1="802.68" x2="519.41" y2="802.68" />
                                <line class="fil1 str29" x1="545.91" y1="797.68" x2="519.41" y2="797.68" />
                                <line class="fil1 str29" x1="545.91" y1="792.18" x2="519.41" y2="792.18" />
                                <line class="fil1 str29" x1="545.91" y1="786.68" x2="519.41" y2="786.68" />
                                <line class="fil1 str29" x1="545.91" y1="781.68" x2="519.41" y2="781.68" />
                                <line class="fil1 str29" x1="545.91" y1="776.18" x2="519.41" y2="776.18" />
                                <line class="fil1 str29" x1="532.91" y1="771.18" x2="532.91" y2="818.68" />
                                <polyline class="fil1 str29" points="525.91,813.68 532.91,818.68 539.41,813.68 " />
                                <line class="fil1 str29" x1="545.91" y1="771.18" x2="519.41" y2="771.18" />
                                <polyline class="fil1 str29" points="544.91,770.18 544.91,819.68 569.91,819.68 " />
                                <line class="fil1 str29" x1="590.41" y1="840.18" x2="590.41" y2="845.68" />
                                <line class="fil1 str29" x1="584.91" y1="834.68" x2="584.91" y2="845.68" />
                                <line class="fil1 str29" x1="579.91" y1="829.68" x2="579.91" y2="845.68" />
                                <line class="fil1 str29" x1="574.41" y1="824.18" x2="574.41" y2="845.68" />
                                <line class="fil1 str29" x1="568.91" y1="818.68" x2="568.91" y2="845.68" />
                                <line class="fil1 str29" x1="563.91" y1="818.68" x2="563.91" y2="845.68" />
                                <line class="fil1 str29" x1="558.41" y1="818.68" x2="558.41" y2="845.68" />
                                <line class="fil1 str29" x1="552.91" y1="818.68" x2="552.91" y2="845.68" />
                                <line class="fil1 str29" x1="547.91" y1="818.68" x2="547.91" y2="845.68" />
                                <polyline class="fil1 str29" points="547.91,832.18 579.41,832.18 574.41,827.18 " />
                                <polyline class="fil1 str29"
                                    points="568.91,818.68 579.91,829.68 581.41,829.18 579.41,833.18 581.91,831.68 595.91,845.68 " />
                                <line class="fil1 str29" x1="574.41" y1="837.18" x2="579.41" y2="832.18" />
                                <path class="fil21"
                                    d="M2223.24 828.65c0.96,0 1.75,0.78 1.75,1.75l0 0.04 0 2.96c0,0.96 -0.79,1.75 -1.75,1.75 -0.97,0 -1.76,-0.79 -1.76,-1.75l0 -1.25 -25.99 0 0 1.25c0,0.96 -0.79,1.75 -1.75,1.75 -0.97,0 -1.75,-0.79 -1.75,-1.75l0 -2.96 0 -0.04c0,-0.97 0.78,-1.75 1.75,-1.75l0.04 0 29.41 0 0.05 0z" />
                                <polyline class="fil1 str31"
                                    points="2174.49,816.9 2181.99,824.4 2189.49,816.9 2174.49,816.9 " />
                                <polyline class="fil1 str31"
                                    points="2227.49,816.9 2234.99,824.4 2242.49,816.9 2227.49,816.9 " />
                                <polygon class="fil21" points="2208.49,897.4 2172.99,875.4 2243.99,875.4 " />
                                <path class="fil21"
                                    d="M2241.72 847.9l0 17.75 -6.66 0c-1.36,0 -2.44,-0.18 -3.26,-0.54 -0.82,-0.36 -1.46,-0.92 -1.93,-1.66 -0.46,-0.75 -0.69,-1.53 -0.69,-2.34 0,-0.76 0.2,-1.48 0.61,-2.15 0.41,-0.67 1.04,-1.21 1.87,-1.62 -1.07,-0.31 -1.9,-0.85 -2.48,-1.61 -0.57,-0.76 -0.86,-1.65 -0.86,-2.69 0,-0.83 0.17,-1.6 0.52,-2.32 0.35,-0.71 0.79,-1.26 1.3,-1.65 0.52,-0.39 1.17,-0.68 1.95,-0.88 0.78,-0.2 1.73,-0.29 2.86,-0.29l6.77 0zm-2.35 10.29l-3.84 0c-1.04,0 -1.79,0.07 -2.24,0.2 -0.59,0.18 -1.04,0.48 -1.35,0.89 -0.3,0.41 -0.45,0.93 -0.45,1.55 0,0.59 0.14,1.1 0.42,1.55 0.28,0.45 0.69,0.76 1.21,0.92 0.53,0.17 1.43,0.25 2.7,0.25l3.55 0 0 -5.36zm0 -8.2l-4.42 0c-0.76,0 -1.29,0.03 -1.6,0.09 -0.54,0.09 -0.99,0.25 -1.35,0.48 -0.37,0.23 -0.66,0.56 -0.9,0.99 -0.23,0.43 -0.35,0.93 -0.35,1.49 0,0.66 0.17,1.24 0.51,1.73 0.34,0.49 0.81,0.83 1.41,1.03 0.6,0.19 1.47,0.29 2.6,0.29l4.1 0 0 -6.1zm-12.48 -2.09l-6.87 9.25 6.06 8.5 -2.8 0 -3.22 -4.56c-0.67,-0.94 -1.15,-1.67 -1.43,-2.18 -0.39,0.65 -0.86,1.32 -1.4,2.03l-3.57 4.71 -2.56 0 6.24 -8.37 -6.72 -9.38 2.9 0 4.47 6.33c0.25,0.36 0.51,0.76 0.77,1.18 0.4,-0.64 0.68,-1.08 0.85,-1.33l4.46 -6.18 2.82 0zm-17.63 8.64c0,2.95 -0.79,5.25 -2.37,6.92 -1.58,1.67 -3.63,2.5 -6.13,2.5 -1.64,0 -3.11,-0.39 -4.43,-1.17 -1.32,-0.79 -2.32,-1.88 -3.01,-3.28 -0.69,-1.4 -1.03,-2.99 -1.03,-4.76 0,-1.8 0.36,-3.41 1.09,-4.83 0.72,-1.42 1.75,-2.5 3.08,-3.23 1.34,-0.73 2.77,-1.1 4.31,-1.1 1.67,0 3.17,0.41 4.48,1.22 1.32,0.8 2.32,1.9 2.99,3.3 0.68,1.4 1.02,2.87 1.02,4.43zm-2.42 -0.04c0,-2.13 -0.58,-3.82 -1.73,-5.05 -1.15,-1.23 -2.59,-1.85 -4.32,-1.85 -1.77,0 -3.23,0.62 -4.37,1.87 -1.14,1.24 -1.71,3 -1.71,5.29 0,1.44 0.24,2.7 0.73,3.78 0.49,1.08 1.2,1.92 2.14,2.51 0.94,0.59 2,0.89 3.17,0.89 1.66,0 3.09,-0.57 4.29,-1.72 1.2,-1.14 1.8,-3.04 1.8,-5.72zm-19.19 9.15l-10.8 0 0 -15.66 -1.6 0 0 -6.24 2.1 0 0 4.15 11.73 0 0 -4.15 2.09 0 0 6.24 -1.38 0c-1.43,2.16 -2.14,6.51 -2.14,13.06l0 2.6zm-8.45 -2.1l6.19 0 0 -0.91c0,-1.51 0.13,-3.57 0.4,-6.19 0.27,-2.62 0.8,-4.77 1.59,-6.46l-8.18 0 0 13.56z" />
                                <polygon class="chuchvara fil18 str22"
                                    points="734.9,3021.08 949.42,3021.08 949.42,3086.47 734.9,3086.47 " />
                                <path class="fil2 str22"
                                    d="M2125.79 1084.57l0 117.49 166.93 0c0,-83.38 0,-67.46 0,-117.49l-166.93 0z" />
                                <polygon class="toilet fil14 str22"
                                    points="1228.37,945.02 1161.03,945.02 1161.03,877.67 1228.37,877.67 " />
                                <path class="fil23"
                                    d="M555.08 2827.65l0 -53.7 10.87 0 0 23.79 21.91 -23.79 14.58 0 -20.27 20.92 21.32 32.78 -14.03 0 -14.77 -25.21 -8.74 8.98 0 16.23 -10.87 0zm54.01 0l0 -53.7 36.9 0 0 9.08 -26.03 0 0 12.75 22.5 0 0 9.07 -22.5 0 0 22.8 -10.87 0zm80.16 -19.8l10.5 3.23c-1.61,5.91 -4.3,10.3 -8.05,13.17 -3.75,2.87 -8.5,4.3 -14.26,4.3 -7.14,0 -13,-2.43 -17.6,-7.31 -4.59,-4.87 -6.89,-11.54 -6.89,-20 0,-8.94 2.31,-15.89 6.93,-20.84 4.61,-4.95 10.68,-7.42 18.21,-7.42 6.57,0 11.91,1.95 16.01,5.84 2.45,2.3 4.28,5.6 5.5,9.91l-10.72 2.55c-0.64,-2.78 -1.97,-4.98 -3.98,-6.59 -2.02,-1.61 -4.47,-2.41 -7.35,-2.41 -3.99,0 -7.22,1.42 -9.7,4.29 -2.49,2.85 -3.72,7.47 -3.72,13.87 0,6.78 1.22,11.61 3.66,14.49 2.45,2.89 5.62,4.32 9.54,4.32 2.88,0 5.37,-0.91 7.45,-2.74 2.07,-1.84 3.57,-4.72 4.47,-8.66z" />
                                <path class="fil23"
                                    d="M782.08 2706.21l0 -23.87 10.15 0c2.55,0 4.41,0.22 5.56,0.65 1.16,0.42 2.09,1.18 2.78,2.28 0.69,1.1 1.04,2.35 1.04,3.76 0,1.8 -0.52,3.27 -1.57,4.44 -1.05,1.17 -2.61,1.9 -4.7,2.2 1.04,0.61 1.89,1.28 2.56,2 0.68,0.73 1.59,2.03 2.74,3.88l2.91 4.66 -5.76 0 -3.46 -5.21c-1.24,-1.85 -2.09,-3.02 -2.55,-3.5 -0.45,-0.48 -0.94,-0.81 -1.45,-0.99 -0.52,-0.18 -1.33,-0.27 -2.44,-0.27l-0.98 0 0 9.97 -4.83 0zm4.83 -13.77l3.57 0c2.31,0 3.75,-0.1 4.33,-0.29 0.57,-0.2 1.03,-0.54 1.35,-1.01 0.33,-0.48 0.49,-1.08 0.49,-1.8 0,-0.8 -0.22,-1.45 -0.65,-1.95 -0.42,-0.49 -1.03,-0.8 -1.81,-0.93 -0.39,-0.06 -1.56,-0.09 -3.51,-0.09l-3.77 0 0 6.07zm19.31 13.77l0 -23.87 4.83 0 0 10.57 9.74 -10.57 6.48 0 -9.01 9.3 9.48 14.57 -6.24 0 -6.56 -11.21 -3.89 3.99 0 7.22 -4.83 0zm23.44 -6.37l0 -4.57 9 0 0 4.57 -9 0zm17.03 6.37l0 -19.84 -7.06 0 0 -4.03 18.93 0 0 4.03 -7.03 0 0 19.84 -4.84 0zm15 0l0 -23.87 17.66 0 0 4.03 -12.83 0 0 5.3 11.93 0 0 4.04 -11.93 0 0 6.46 13.3 0 0 4.04 -18.13 0zm22.36 0l0 -23.67 4.84 0 0 19.63 11.96 0 0 4.04 -16.8 0z" />
                                <path class="fil23"
                                    d="M983.33 2745.1l0 -7.47c-1.77,0.2 -3.25,0.79 -4.43,1.78 -1.18,0.99 -1.77,2.33 -1.77,4.03 0,1.29 0.36,2.37 1.08,3.24 0.72,0.88 1.67,1.5 2.86,1.85l-1.1 4.77c-2.12,-0.49 -3.81,-1.56 -5.09,-3.23 -1.27,-1.66 -1.91,-3.82 -1.91,-6.49 0,-3.46 1.15,-6.17 3.46,-8.12 2.31,-1.95 5.32,-2.93 9.04,-2.93 2.52,0 4.68,0.45 6.5,1.36 1.82,0.91 3.23,2.15 4.23,3.73 1,1.58 1.5,3.49 1.5,5.72 0,5.43 -2.57,8.77 -7.7,10.03l-1.5 -4.84c1.72,-0.25 2.99,-0.86 3.82,-1.84 0.83,-0.98 1.25,-2.14 1.25,-3.51 0,-1.41 -0.5,-2.61 -1.48,-3.61 -0.98,-1 -2.56,-1.64 -4.72,-1.94l0 7.47 -4.04 0zm-9.93 -16.52l0 -18.96 23.87 0 0 4.83 -19.84 0 0 9.3 19.84 0 0 4.83 -23.87 0zm0 -25.61l0 -16.71 23.87 0 0 4.83 -19.84 0 0 7.17 10.19 0c2.92,0 4.96,0.1 6.11,0.29 1.15,0.2 2.06,0.67 2.7,1.42 0.65,0.76 0.97,1.94 0.97,3.54 0,0.57 -0.06,1.59 -0.16,3.08l-3.74 0 0.02 -1.08c0,-1 -0.14,-1.69 -0.41,-2.03 -0.27,-0.35 -0.94,-0.52 -2,-0.52l-4.1 0.01 -13.61 0zm42.24 43.19l-3.73 0 0 0.37c0,0.57 0.08,0.97 0.25,1.21 0.17,0.23 0.68,0.63 1.53,1.2l1.95 1.3 0 2.16 -1.74 -1.09c-0.7,-0.43 -1.18,-0.78 -1.46,-1.03 -0.28,-0.26 -0.53,-0.58 -0.75,-0.96 -0.13,0.83 -0.42,1.43 -0.87,1.8 -0.45,0.37 -0.99,0.55 -1.61,0.55 -0.55,0 -1.03,-0.13 -1.45,-0.41 -0.42,-0.27 -0.71,-0.64 -0.85,-1.09 -0.14,-0.45 -0.22,-1.12 -0.22,-2.02l0 -3.8 8.95 0 0 1.81zm-7.43 0l0 1.41c0,0.72 0.01,1.19 0.04,1.41 0.04,0.23 0.15,0.42 0.33,0.59 0.19,0.16 0.44,0.24 0.74,0.24 0.31,0 0.56,-0.08 0.75,-0.23 0.18,-0.16 0.3,-0.36 0.34,-0.6 0.05,-0.24 0.07,-0.74 0.07,-1.48l0 -1.34 -2.27 0zm-1.52 -3.66l0 -1.81 3.82 0c-0.05,-0.4 -0.15,-0.68 -0.32,-0.82 -0.16,-0.14 -0.63,-0.36 -1.39,-0.66 -0.97,-0.37 -1.57,-0.75 -1.81,-1.12 -0.23,-0.38 -0.35,-0.98 -0.35,-1.81 0,-0.04 -0.01,-0.13 -0.01,-0.27l1.34 0 -0.01 0.26c0,0.37 0.05,0.64 0.14,0.81 0.09,0.17 0.23,0.31 0.42,0.42 0.19,0.1 0.57,0.26 1.15,0.47 0.31,0.11 0.57,0.22 0.78,0.35 0.21,0.13 0.41,0.36 0.59,0.68 0.11,-0.4 0.34,-0.73 0.69,-0.99 0.34,-0.27 0.83,-0.55 1.46,-0.87l2.45 -1.21 0 2.12 -2.3 1.07c-0.03,0.02 -0.1,0.06 -0.19,0.11 -0.03,0.02 -0.17,0.09 -0.42,0.22 -0.44,0.23 -0.72,0.42 -0.83,0.57 -0.11,0.14 -0.17,0.37 -0.17,0.67l3.91 0 0 1.81 -8.95 0zm0 -6.99l0 -2.04 4.64 -2.08 -4.64 -1.79 0 -1.88 6.8 3.03c0.74,0.32 1.3,0.66 1.69,1 0.38,0.34 0.58,0.78 0.58,1.32 0,0.54 -0.04,0.95 -0.11,1.25l-1.34 0c0.01,-0.25 0.02,-0.48 0.02,-0.69 0,-0.42 -0.08,-0.72 -0.23,-0.9 -0.15,-0.18 -0.48,-0.35 -0.99,-0.52l-6.42 3.3zm8.95 -10.71l-7.43 0 0 2.65 -1.52 0 0 -7.1 1.52 0 0 2.64 7.43 0 0 1.81zm-3.3 -11.35l0.54 -1.75c0.99,0.27 1.72,0.72 2.2,1.34 0.47,0.63 0.71,1.42 0.71,2.38 0,1.19 -0.4,2.17 -1.22,2.93 -0.81,0.77 -1.92,1.15 -3.33,1.15 -1.49,0 -2.65,-0.38 -3.47,-1.15 -0.83,-0.77 -1.24,-1.78 -1.24,-3.04 0,-1.09 0.33,-1.98 0.97,-2.67 0.39,-0.4 0.94,-0.71 1.66,-0.91l0.42 1.78c-0.46,0.11 -0.83,0.33 -1.1,0.67 -0.27,0.33 -0.4,0.74 -0.4,1.22 0,0.67 0.24,1.21 0.71,1.62 0.48,0.41 1.25,0.62 2.32,0.62 1.13,0 1.93,-0.2 2.41,-0.61 0.48,-0.41 0.72,-0.94 0.72,-1.59 0,-0.48 -0.15,-0.9 -0.45,-1.24 -0.31,-0.35 -0.79,-0.6 -1.45,-0.75zm-5.65 -3.33l0 -1.81 3.82 0c-0.05,-0.4 -0.15,-0.67 -0.32,-0.81 -0.16,-0.15 -0.63,-0.37 -1.39,-0.66 -0.97,-0.38 -1.57,-0.75 -1.81,-1.13 -0.23,-0.37 -0.35,-0.98 -0.35,-1.81 0,-0.04 -0.01,-0.13 -0.01,-0.26l1.34 0 -0.01 0.25c0,0.37 0.05,0.65 0.14,0.82 0.09,0.17 0.23,0.3 0.42,0.41 0.19,0.11 0.57,0.26 1.15,0.47 0.31,0.11 0.57,0.23 0.78,0.36 0.21,0.12 0.41,0.35 0.59,0.68 0.11,-0.41 0.34,-0.74 0.69,-1 0.34,-0.26 0.83,-0.55 1.46,-0.86l2.45 -1.22 0 2.13 -2.3 1.07c-0.03,0.01 -0.1,0.05 -0.19,0.1 -0.03,0.02 -0.17,0.1 -0.42,0.23 -0.44,0.23 -0.72,0.41 -0.83,0.56 -0.11,0.15 -0.17,0.37 -0.17,0.67l3.91 0 0 1.81 -8.95 0zm0 -7.62l0 -1.69 5.96 0 -5.96 -3.63 0 -1.8 8.95 0 0 1.69 -5.86 0 5.86 3.63 0 1.8 -8.95 0zm8.95 -8.96l-8.95 0 0 -6.63 1.52 0 0 4.81 1.98 0 0 -4.47 1.52 0 0 4.47 2.42 0 0 -4.98 1.51 0 0 6.8zm5.02 70.16l0 -6.69 1.51 0 0 4.88 2.07 0 0 -2.42c0,-0.66 0.09,-1.22 0.25,-1.66 0.16,-0.44 0.46,-0.81 0.9,-1.12 0.44,-0.31 0.95,-0.47 1.54,-0.47 0.61,0 1.13,0.16 1.56,0.47 0.42,0.32 0.72,0.67 0.88,1.07 0.16,0.4 0.24,0.98 0.24,1.71l0 4.23 -8.95 0zm7.43 -1.81l0 -1.76c0,-0.56 -0.02,-0.96 -0.08,-1.18 -0.05,-0.23 -0.17,-0.43 -0.37,-0.6 -0.19,-0.17 -0.43,-0.25 -0.71,-0.25 -0.41,0 -0.71,0.15 -0.89,0.44 -0.19,0.3 -0.28,0.8 -0.28,1.51l0 1.84 2.33 0zm1.52 -7.14l-8.95 0 0 -2.9c0,-1.1 0.04,-1.81 0.13,-2.14 0.14,-0.52 0.43,-0.94 0.88,-1.29 0.45,-0.35 1.03,-0.52 1.74,-0.52 0.55,0 1.01,0.1 1.39,0.3 0.37,0.2 0.66,0.45 0.88,0.76 0.21,0.3 0.35,0.62 0.42,0.93 0.09,0.43 0.13,1.06 0.13,1.87l0 1.18 3.38 0 0 1.81zm-7.44 -1.81l2.55 0 0 -0.99c0,-0.71 -0.05,-1.18 -0.14,-1.42 -0.1,-0.24 -0.24,-0.43 -0.44,-0.56 -0.2,-0.14 -0.43,-0.21 -0.7,-0.21 -0.33,0 -0.6,0.1 -0.81,0.29 -0.21,0.19 -0.35,0.43 -0.4,0.72 -0.04,0.22 -0.06,0.65 -0.06,1.3l0 0.87zm-1.51 -6.55l0 -1.69 5.96 0 -5.96 -3.62 0 -1.8 8.95 0 0 1.68 -5.86 0 5.86 3.63 0 1.8 -8.95 0zm0 -9.61l0 -6.26 8.95 0 0 1.81 -7.44 0 0 2.69 3.82 0c1.09,0 1.86,0.03 2.29,0.11 0.43,0.07 0.77,0.25 1.01,0.53 0.25,0.28 0.37,0.73 0.37,1.33 0,0.21 -0.02,0.59 -0.06,1.15l-1.41 0 0.01 -0.4c0,-0.38 -0.05,-0.64 -0.15,-0.77 -0.1,-0.13 -0.35,-0.19 -0.75,-0.19l-1.54 0 -5.1 0zm0 -8.77l0 -6.26 8.95 0 0 1.81 -7.44 0 0 2.69 3.82 0c1.09,0 1.86,0.03 2.29,0.11 0.43,0.07 0.77,0.25 1.01,0.53 0.25,0.28 0.37,0.72 0.37,1.33 0,0.21 -0.02,0.59 -0.06,1.15l-1.41 0 0.01 -0.4c0,-0.38 -0.05,-0.64 -0.15,-0.77 -0.1,-0.13 -0.35,-0.19 -0.75,-0.19l-1.54 0 -5.1 0zm0 -8.15l0 -1.69 5.96 0 -5.96 -3.62 0 -1.8 8.95 0 0 1.69 -5.86 0 5.86 3.62 0 1.8 -8.95 0zm8.95 -17.02l0 1.95 -2.04 0.77 0 3.59 2.04 0.75 0 1.91 -8.95 -3.47 0 -1.91 8.95 -3.59zm-3.55 3.31l-3.32 1.25 3.32 1.2 0 -2.45zm3.55 -4.28l-8.95 0 0 -1.81 3.52 0 0 -3.52 -3.52 0 0 -1.81 8.95 0 0 1.81 -3.91 0 0 3.52 3.91 0 0 1.81zm0 -11.03l-7.44 0 0 2.65 -1.51 0 0 -7.1 1.51 0 0 2.63 7.44 0 0 1.82zm-8.95 -5.68l0 -1.81 3.57 0 0 -2.41c0,-0.64 0.09,-1.18 0.26,-1.64 0.18,-0.46 0.48,-0.84 0.93,-1.14 0.45,-0.31 0.96,-0.46 1.54,-0.46 0.6,0 1.12,0.16 1.56,0.48 0.44,0.31 0.73,0.67 0.87,1.06 0.15,0.38 0.22,0.95 0.22,1.7l0 4.22 -8.95 0zm7.43 -1.81l0 -1.76c0,-0.56 -0.02,-0.95 -0.08,-1.18 -0.05,-0.22 -0.18,-0.42 -0.37,-0.59 -0.19,-0.17 -0.43,-0.26 -0.71,-0.26 -0.39,0 -0.69,0.15 -0.89,0.43 -0.2,0.28 -0.3,0.79 -0.3,1.53l0 1.83 2.35 0zm-7.43 -6.69l0 -1.81 8.95 0 0 1.81 -8.95 0z" />
                                <path class="fil23"
                                    d="M1091.77 2692.5l0 -5.03 -4.37 -6.91 2.82 0 2.82 4.73 2.75 -4.73 2.77 0 -4.37 6.93 0 5.01 -2.42 0zm11.04 0l-4.27 -11.94 2.61 0 3.03 8.83 2.91 -8.83 2.56 0 -4.24 11.94 -2.6 0zm8.06 0l0 -11.94 8.83 0 0 2.02 -6.41 0 0 2.65 5.96 0 0 2.02 -5.96 0 0 3.23 6.65 0 0 2.02 -9.07 0zm10.48 -3.87l2.35 -0.23c0.14,0.78 0.43,1.36 0.86,1.73 0.43,0.37 1.01,0.55 1.74,0.55 0.77,0 1.36,-0.17 1.75,-0.49 0.39,-0.33 0.59,-0.71 0.59,-1.15 0,-0.29 -0.09,-0.53 -0.25,-0.73 -0.16,-0.19 -0.45,-0.36 -0.86,-0.51 -0.28,-0.1 -0.92,-0.27 -1.92,-0.52 -1.29,-0.32 -2.19,-0.72 -2.71,-1.19 -0.73,-0.66 -1.1,-1.46 -1.1,-2.41 0,-0.6 0.18,-1.18 0.52,-1.71 0.34,-0.53 0.84,-0.93 1.48,-1.21 0.65,-0.28 1.43,-0.41 2.35,-0.41 1.49,0 2.61,0.33 3.37,0.99 0.75,0.66 1.14,1.55 1.18,2.65l-2.41 0.09c-0.11,-0.62 -0.33,-1.06 -0.66,-1.33 -0.34,-0.27 -0.84,-0.41 -1.52,-0.41 -0.69,0 -1.23,0.15 -1.63,0.44 -0.25,0.18 -0.38,0.43 -0.38,0.74 0,0.29 0.12,0.53 0.36,0.73 0.3,0.26 1.04,0.52 2.21,0.8 1.17,0.28 2.03,0.57 2.59,0.86 0.56,0.3 1,0.7 1.32,1.21 0.31,0.52 0.47,1.15 0.47,1.9 0,0.69 -0.18,1.33 -0.57,1.93 -0.38,0.59 -0.91,1.04 -1.61,1.33 -0.69,0.29 -1.56,0.43 -2.59,0.43 -1.51,0 -2.67,-0.35 -3.48,-1.04 -0.81,-0.7 -1.29,-1.71 -1.45,-3.04zm-46.59 19.36l0 -11.93 5.07 0c1.28,0 2.21,0.1 2.78,0.32 0.59,0.21 1.05,0.59 1.39,1.14 0.35,0.55 0.53,1.17 0.53,1.88 0,0.9 -0.27,1.63 -0.79,2.22 -0.53,0.58 -1.31,0.95 -2.35,1.1 0.52,0.3 0.95,0.64 1.28,1 0.34,0.37 0.8,1.01 1.37,1.94l1.45 2.33 -2.88 0 -1.73 -2.61c-0.62,-0.92 -1.04,-1.51 -1.27,-1.75 -0.23,-0.24 -0.47,-0.4 -0.72,-0.49 -0.26,-0.09 -0.67,-0.14 -1.23,-0.14l-0.48 0 0 4.99 -2.42 0zm2.42 -6.89l1.78 0c1.15,0 1.88,-0.05 2.16,-0.14 0.29,-0.1 0.52,-0.27 0.68,-0.51 0.16,-0.24 0.24,-0.54 0.24,-0.9 0,-0.4 -0.11,-0.72 -0.32,-0.97 -0.21,-0.25 -0.52,-0.4 -0.91,-0.47 -0.19,-0.02 -0.78,-0.04 -1.75,-0.04l-1.88 0 0 3.03zm9.12 0.99c0,-1.21 0.18,-2.24 0.54,-3.06 0.27,-0.61 0.64,-1.16 1.11,-1.64 0.47,-0.49 0.99,-0.84 1.54,-1.08 0.75,-0.31 1.61,-0.47 2.58,-0.47 1.76,0 3.17,0.54 4.22,1.64 1.06,1.09 1.59,2.61 1.59,4.56 0,1.93 -0.53,3.44 -1.57,4.53 -1.05,1.09 -2.45,1.63 -4.21,1.63 -1.77,0 -3.19,-0.54 -4.23,-1.62 -1.05,-1.09 -1.57,-2.58 -1.57,-4.49zm2.48 -0.08c0,1.36 0.31,2.38 0.94,3.08 0.62,0.7 1.42,1.05 2.38,1.05 0.96,0 1.75,-0.35 2.37,-1.04 0.62,-0.7 0.92,-1.73 0.92,-3.12 0,-1.37 -0.3,-2.39 -0.9,-3.06 -0.6,-0.68 -1.4,-1.02 -2.39,-1.02 -1,0 -1.8,0.35 -2.41,1.03 -0.61,0.68 -0.91,1.71 -0.91,3.08zm18.61 1.58l2.33 0.71c-0.35,1.32 -0.95,2.29 -1.78,2.93 -0.84,0.64 -1.89,0.96 -3.17,0.96 -1.59,0 -2.89,-0.54 -3.91,-1.63 -1.02,-1.08 -1.53,-2.56 -1.53,-4.44 0,-1.99 0.51,-3.53 1.53,-4.63 1.03,-1.1 2.38,-1.65 4.05,-1.65 1.46,0 2.65,0.43 3.56,1.29 0.54,0.52 0.95,1.25 1.22,2.21l-2.38 0.56c-0.14,-0.61 -0.44,-1.1 -0.88,-1.46 -0.45,-0.36 -1,-0.54 -1.64,-0.54 -0.88,0 -1.6,0.32 -2.15,0.96 -0.56,0.63 -0.83,1.66 -0.83,3.08 0,1.51 0.27,2.58 0.81,3.22 0.55,0.64 1.25,0.96 2.12,0.96 0.64,0 1.2,-0.2 1.66,-0.61 0.46,-0.41 0.79,-1.05 0.99,-1.92zm4.4 4.4l0 -11.93 2.42 0 0 4.69 4.7 0 0 -4.69 2.42 0 0 11.93 -2.42 0 0 -5.22 -4.7 0 0 5.22 -2.42 0zm12.04 0l0 -11.93 8.83 0 0 2.01 -6.41 0 0 2.65 5.96 0 0 2.02 -5.96 0 0 3.23 6.65 0 0 2.02 -9.07 0zm11.12 0l0 -11.93 5.07 0c1.28,0 2.2,0.1 2.78,0.32 0.58,0.21 1.04,0.59 1.39,1.14 0.35,0.55 0.52,1.17 0.52,1.88 0,0.9 -0.26,1.63 -0.78,2.22 -0.53,0.58 -1.31,0.95 -2.36,1.1 0.52,0.3 0.95,0.64 1.29,1 0.34,0.37 0.79,1.01 1.36,1.94l1.46 2.33 -2.88 0 -1.73 -2.61c-0.62,-0.92 -1.04,-1.51 -1.27,-1.75 -0.23,-0.24 -0.47,-0.4 -0.73,-0.49 -0.26,-0.09 -0.66,-0.14 -1.22,-0.14l-0.49 0 0 4.99 -2.41 0zm2.41 -6.89l1.79 0c1.15,0 1.87,-0.05 2.16,-0.14 0.29,-0.1 0.51,-0.27 0.68,-0.51 0.16,-0.24 0.24,-0.54 0.24,-0.9 0,-0.4 -0.11,-0.72 -0.32,-0.97 -0.22,-0.25 -0.52,-0.4 -0.91,-0.47 -0.2,-0.02 -0.78,-0.04 -1.76,-0.04l-1.88 0 0 3.03z" />
                                <path class="fil23"
                                    d="M1062.18 2520.86l3.5 1.08c-0.54,1.97 -1.43,3.43 -2.68,4.39 -1.25,0.96 -2.84,1.43 -4.76,1.43 -2.38,0 -4.33,-0.81 -5.86,-2.43 -1.53,-1.63 -2.3,-3.85 -2.3,-6.67 0,-2.98 0.77,-5.3 2.31,-6.95 1.53,-1.65 3.56,-2.47 6.07,-2.47 2.19,0 3.97,0.65 5.34,1.95 0.81,0.76 1.42,1.86 1.83,3.3l-3.58 0.85c-0.21,-0.93 -0.65,-1.66 -1.32,-2.2 -0.68,-0.53 -1.49,-0.8 -2.45,-0.8 -1.33,0 -2.41,0.47 -3.23,1.43 -0.83,0.95 -1.25,2.49 -1.25,4.62 0,2.26 0.41,3.87 1.22,4.83 0.82,0.97 1.88,1.44 3.18,1.44 0.97,0 1.8,-0.3 2.49,-0.91 0.69,-0.61 1.19,-1.57 1.49,-2.89zm5.85 -2.24c0,-1.82 0.28,-3.36 0.82,-4.6 0.41,-0.91 0.97,-1.73 1.67,-2.46 0.71,-0.72 1.48,-1.26 2.31,-1.61 1.12,-0.47 2.41,-0.71 3.87,-0.71 2.64,0 4.75,0.82 6.33,2.46 1.59,1.64 2.38,3.92 2.38,6.84 0,2.9 -0.79,5.16 -2.36,6.8 -1.57,1.63 -3.67,2.45 -6.3,2.45 -2.67,0 -4.79,-0.81 -6.36,-2.44 -1.57,-1.63 -2.36,-3.87 -2.36,-6.73zm3.73 -0.12c0,2.03 0.47,3.57 1.41,4.62 0.93,1.04 2.13,1.57 3.57,1.57 1.44,0 2.63,-0.52 3.56,-1.56 0.92,-1.04 1.38,-2.6 1.38,-4.68 0,-2.05 -0.45,-3.59 -1.35,-4.59 -0.9,-1.02 -2.1,-1.52 -3.59,-1.52 -1.49,0 -2.7,0.51 -3.61,1.53 -0.91,1.03 -1.37,2.57 -1.37,4.63zm16.47 8.96l0 -17.9 12.3 0 0 3.03 -8.68 0 0 4.25 7.5 0 0 3.02 -7.5 0 0 7.6 -3.62 0zm15.27 0l0 -17.9 12.3 0 0 3.03 -8.67 0 0 4.25 7.5 0 0 3.02 -7.5 0 0 7.6 -3.63 0zm15.27 0l0 -17.9 13.25 0 0 3.03 -9.62 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.97 0 0 3.02 -13.6 0zm16.68 0l0 -17.9 13.25 0 0 3.03 -9.63 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.98 0 0 3.02 -13.6 0zm-62.4 23.24l0 -17.75 3.63 0 0 14.73 8.97 0 0 3.02 -12.6 0zm15.05 0l0 -17.9 3.62 0 0 17.9 -3.62 0zm7.12 0l0 -17.9 3.62 0 0 7.93 7.31 -7.93 4.86 0 -6.76 6.97 7.11 10.93 -4.68 0 -4.92 -8.4 -2.92 2.99 0 5.41 -3.62 0zm18 0l0 -17.9 13.25 0 0 3.03 -9.62 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.97 0 0 3.02 -13.6 0z" />
                                <path class="fil23"
                                    d="M1116.31 2357.99l-11.93 2.81 0 -2.49 8.19 -1.77 -8.19 -2.18 0 -2.87 8.33 -2.08 -8.33 -1.82 0 -2.43 11.93 2.88 0 2.58 -8.92 2.35 8.92 2.37 0 2.65zm0 -17.22l-5.02 0 -6.91 4.37 0 -2.82 4.72 -2.83 -4.72 -2.74 0 -2.77 6.93 4.37 5 0 0 2.42zm-4.4 -15.62l0.72 -2.33c1.31,0.36 2.29,0.95 2.92,1.79 0.64,0.83 0.96,1.88 0.96,3.17 0,1.58 -0.54,2.88 -1.62,3.91 -1.09,1.02 -2.57,1.53 -4.45,1.53 -1.98,0 -3.53,-0.52 -4.63,-1.54 -1.1,-1.03 -1.65,-2.38 -1.65,-4.05 0,-1.46 0.43,-2.65 1.3,-3.56 0.51,-0.54 1.24,-0.95 2.2,-1.22l0.57 2.38c-0.62,0.15 -1.11,0.44 -1.47,0.89 -0.36,0.45 -0.53,0.99 -0.53,1.63 0,0.89 0.31,1.61 0.95,2.16 0.63,0.55 1.66,0.82 3.08,0.82 1.51,0 2.58,-0.27 3.22,-0.81 0.64,-0.55 0.96,-1.25 0.96,-2.12 0,-0.64 -0.2,-1.19 -0.61,-1.66 -0.41,-0.46 -1.04,-0.79 -1.92,-0.99zm-1.49 -3.9c-1.22,0 -2.24,-0.19 -3.07,-0.55 -0.61,-0.27 -1.16,-0.64 -1.64,-1.11 -0.48,-0.47 -0.84,-0.98 -1.08,-1.54 -0.31,-0.75 -0.47,-1.6 -0.47,-2.58 0,-1.76 0.55,-3.16 1.64,-4.22 1.09,-1.06 2.61,-1.59 4.56,-1.59 1.93,0 3.44,0.53 4.53,1.58 1.09,1.04 1.64,2.45 1.64,4.2 0,1.77 -0.54,3.19 -1.63,4.24 -1.08,1.04 -2.58,1.57 -4.48,1.57zm-0.08 -2.49c1.35,0 2.37,-0.31 3.07,-0.93 0.7,-0.63 1.05,-1.42 1.05,-2.39 0,-0.96 -0.35,-1.75 -1.04,-2.37 -0.69,-0.61 -1.73,-0.92 -3.12,-0.92 -1.37,0 -2.39,0.3 -3.06,0.9 -0.68,0.6 -1.01,1.4 -1.01,2.39 0,1 0.34,1.8 1.02,2.41 0.68,0.61 1.71,0.91 3.09,0.91zm5.97 -10.98l-11.93 0 0 -2.33 7.99 -4.92 -7.99 0 0 -2.23 11.93 0 0 2.41 -7.84 4.84 7.84 0 0 2.23z" />
                                <path class="fil23"
                                    d="M999.69 2343.63l0 2.61 -2.71 1.03 0 4.78 2.71 0.99 0 2.56 -11.93 -4.63 0 -2.56 11.93 -4.78zm-4.73 4.42l-4.42 1.66 4.42 1.61 0 -3.27zm0.87 -5.07l-0.24 -2.35c0.79,-0.14 1.36,-0.42 1.73,-0.85 0.37,-0.43 0.56,-1.02 0.56,-1.75 0,-0.77 -0.17,-1.35 -0.5,-1.74 -0.32,-0.39 -0.71,-0.59 -1.15,-0.59 -0.28,0 -0.52,0.08 -0.72,0.25 -0.2,0.16 -0.37,0.45 -0.51,0.86 -0.1,0.28 -0.27,0.92 -0.52,1.92 -0.33,1.28 -0.72,2.19 -1.19,2.71 -0.66,0.73 -1.46,1.09 -2.41,1.09 -0.61,0 -1.18,-0.17 -1.71,-0.51 -0.53,-0.35 -0.93,-0.84 -1.21,-1.49 -0.28,-0.65 -0.42,-1.42 -0.42,-2.34 0,-1.49 0.33,-2.62 1,-3.37 0.66,-0.76 1.54,-1.15 2.65,-1.19l0.09 2.42c-0.62,0.1 -1.06,0.32 -1.33,0.66 -0.27,0.33 -0.41,0.84 -0.41,1.51 0,0.69 0.15,1.24 0.44,1.63 0.18,0.25 0.43,0.38 0.74,0.38 0.28,0 0.52,-0.12 0.72,-0.36 0.26,-0.3 0.53,-1.04 0.81,-2.21 0.27,-1.16 0.56,-2.03 0.86,-2.59 0.29,-0.56 0.7,-1 1.21,-1.31 0.51,-0.32 1.15,-0.48 1.9,-0.48 0.68,0 1.32,0.19 1.92,0.57 0.6,0.38 1.04,0.92 1.33,1.61 0.29,0.7 0.44,1.56 0.44,2.6 0,1.51 -0.35,2.67 -1.05,3.47 -0.69,0.81 -1.7,1.29 -3.03,1.45zm3.86 -11.67l-11.93 0 0 -2.41 11.93 0 0 2.41zm0 -15.46l0 2.6 -2.71 1.03 0 4.79 2.71 0.99 0 2.56 -11.93 -4.64 0 -2.55 11.93 -4.78zm-4.73 4.42l-4.42 1.66 4.42 1.61 0 -3.27zm4.73 -5.71l-11.93 0 0 -2.33 8 -4.91 -8 0 0 -2.24 11.93 0 0 2.41 -7.84 4.84 7.84 0 0 2.23zm11.1 55.8l0.71 -2.33c1.32,0.36 2.29,0.95 2.93,1.79 0.64,0.83 0.95,1.89 0.95,3.17 0,1.58 -0.54,2.88 -1.62,3.91 -1.08,1.02 -2.56,1.53 -4.44,1.53 -1.99,0 -3.54,-0.52 -4.64,-1.54 -1.09,-1.03 -1.65,-2.38 -1.65,-4.05 0,-1.46 0.44,-2.65 1.3,-3.56 0.51,-0.54 1.25,-0.95 2.2,-1.22l0.57 2.39c-0.62,0.14 -1.1,0.43 -1.46,0.88 -0.36,0.45 -0.54,0.99 -0.54,1.63 0,0.89 0.32,1.61 0.95,2.16 0.64,0.55 1.67,0.82 3.09,0.82 1.5,0 2.58,-0.27 3.22,-0.81 0.64,-0.54 0.96,-1.25 0.96,-2.12 0,-0.64 -0.2,-1.19 -0.61,-1.65 -0.41,-0.46 -1.05,-0.8 -1.92,-1zm-1.5 -3.9c-1.22,0 -2.24,-0.18 -3.07,-0.55 -0.6,-0.27 -1.15,-0.64 -1.64,-1.11 -0.48,-0.47 -0.84,-0.98 -1.07,-1.54 -0.32,-0.74 -0.48,-1.6 -0.48,-2.58 0,-1.76 0.55,-3.16 1.64,-4.22 1.1,-1.06 2.62,-1.58 4.56,-1.58 1.94,0 3.45,0.52 4.53,1.57 1.1,1.05 1.64,2.45 1.64,4.2 0,1.78 -0.54,3.19 -1.63,4.24 -1.08,1.04 -2.57,1.57 -4.48,1.57zm-0.08 -2.48c1.35,0 2.38,-0.32 3.08,-0.94 0.69,-0.63 1.05,-1.42 1.05,-2.38 0,-0.97 -0.35,-1.76 -1.04,-2.38 -0.7,-0.61 -1.74,-0.92 -3.12,-0.92 -1.37,0 -2.4,0.3 -3.07,0.9 -0.67,0.6 -1.01,1.4 -1.01,2.4 0,0.99 0.34,1.79 1.02,2.4 0.69,0.61 1.71,0.92 3.09,0.92zm2.11 -10.35l-0.23 -2.35c0.78,-0.14 1.36,-0.43 1.73,-0.86 0.37,-0.43 0.55,-1.01 0.55,-1.74 0,-0.77 -0.17,-1.35 -0.49,-1.75 -0.33,-0.39 -0.71,-0.58 -1.15,-0.58 -0.29,0 -0.53,0.08 -0.73,0.24 -0.19,0.17 -0.36,0.46 -0.51,0.87 -0.1,0.28 -0.27,0.92 -0.52,1.92 -0.32,1.28 -0.72,2.19 -1.19,2.7 -0.66,0.73 -1.46,1.1 -2.41,1.1 -0.6,0 -1.18,-0.17 -1.71,-0.52 -0.53,-0.34 -0.93,-0.83 -1.21,-1.48 -0.28,-0.65 -0.42,-1.43 -0.42,-2.34 0,-1.49 0.34,-2.62 1,-3.37 0.66,-0.76 1.55,-1.15 2.65,-1.19l0.09 2.42c-0.62,0.1 -1.06,0.32 -1.33,0.65 -0.27,0.34 -0.41,0.85 -0.41,1.52 0,0.69 0.15,1.24 0.44,1.63 0.18,0.25 0.43,0.38 0.74,0.38 0.29,0 0.53,-0.12 0.73,-0.36 0.26,-0.3 0.52,-1.04 0.8,-2.21 0.28,-1.17 0.56,-2.03 0.86,-2.59 0.3,-0.56 0.7,-1 1.21,-1.32 0.52,-0.31 1.15,-0.47 1.9,-0.47 0.69,0 1.33,0.19 1.93,0.57 0.59,0.38 1.04,0.92 1.32,1.61 0.3,0.69 0.44,1.56 0.44,2.6 0,1.51 -0.35,2.66 -1.04,3.47 -0.7,0.81 -1.71,1.29 -3.04,1.45zm3.86 -11.72l-11.93 0 0 -3.62 8.14 -2.14 -8.14 -2.11 0 -3.63 11.93 0 0 2.24 -9.39 0 9.39 2.36 0 2.32 -9.39 2.34 9.39 0.01 0 2.23zm0 -13.91l-11.93 0 0 -8.84 2.02 0 0 6.42 2.65 0 0 -5.97 2.01 0 0 5.97 3.24 0 0 -6.65 2.01 0 0 9.07zm0 -13.8l-9.91 0 0 3.53 -2.02 0 0 -9.47 2.02 0 0 3.52 9.91 0 0 2.42zm0 -7.42l-11.93 0 0 -2.41 11.93 0 0 2.41zm-4.39 -12.34l0.71 -2.34c1.32,0.36 2.29,0.96 2.93,1.79 0.64,0.83 0.95,1.89 0.95,3.17 0,1.59 -0.54,2.89 -1.62,3.91 -1.08,1.02 -2.56,1.53 -4.44,1.53 -1.99,0 -3.54,-0.51 -4.64,-1.54 -1.09,-1.02 -1.65,-2.37 -1.65,-4.04 0,-1.47 0.44,-2.65 1.3,-3.56 0.51,-0.55 1.25,-0.95 2.2,-1.22l0.57 2.38c-0.62,0.14 -1.1,0.44 -1.46,0.88 -0.36,0.45 -0.54,1 -0.54,1.64 0,0.88 0.32,1.6 0.95,2.15 0.64,0.55 1.67,0.83 3.09,0.83 1.5,0 2.58,-0.27 3.22,-0.82 0.64,-0.54 0.96,-1.24 0.96,-2.11 0,-0.65 -0.2,-1.2 -0.61,-1.66 -0.41,-0.46 -1.05,-0.79 -1.92,-0.99zm0.53 -3.77l-0.23 -2.35c0.78,-0.14 1.36,-0.43 1.73,-0.86 0.37,-0.43 0.55,-1.01 0.55,-1.74 0,-0.77 -0.17,-1.36 -0.49,-1.75 -0.33,-0.39 -0.71,-0.59 -1.15,-0.59 -0.29,0 -0.53,0.09 -0.73,0.25 -0.19,0.16 -0.36,0.45 -0.51,0.86 -0.1,0.29 -0.27,0.92 -0.52,1.92 -0.32,1.29 -0.72,2.19 -1.19,2.71 -0.66,0.73 -1.46,1.1 -2.41,1.1 -0.6,0 -1.18,-0.18 -1.71,-0.52 -0.53,-0.34 -0.93,-0.84 -1.21,-1.48 -0.28,-0.65 -0.42,-1.43 -0.42,-2.35 0,-1.49 0.34,-2.61 1,-3.36 0.66,-0.76 1.55,-1.15 2.65,-1.19l0.09 2.41c-0.62,0.11 -1.06,0.33 -1.33,0.66 -0.27,0.34 -0.41,0.84 -0.41,1.52 0,0.69 0.15,1.23 0.44,1.63 0.18,0.25 0.43,0.38 0.74,0.38 0.29,0 0.53,-0.12 0.73,-0.36 0.26,-0.3 0.52,-1.04 0.8,-2.21 0.28,-1.17 0.56,-2.03 0.86,-2.59 0.3,-0.56 0.7,-1 1.21,-1.32 0.52,-0.31 1.15,-0.47 1.9,-0.47 0.69,0 1.33,0.19 1.93,0.57 0.59,0.38 1.04,0.91 1.32,1.61 0.3,0.69 0.44,1.56 0.44,2.59 0,1.51 -0.35,2.67 -1.04,3.48 -0.7,0.81 -1.71,1.29 -3.04,1.45z" />
                                <path class="fil23"
                                    d="M989.13 2161.73l4.66 1.43c-0.71,2.63 -1.91,4.58 -3.58,5.86 -1.66,1.27 -3.77,1.91 -6.33,1.91 -3.18,0 -5.78,-1.09 -7.83,-3.25 -2.04,-2.17 -3.06,-5.13 -3.06,-8.89 0,-3.97 1.03,-7.06 3.08,-9.26 2.05,-2.2 4.75,-3.3 8.1,-3.3 2.92,0 5.29,0.87 7.11,2.59 1.09,1.02 1.9,2.49 2.45,4.41l-4.77 1.13c-0.28,-1.23 -0.87,-2.21 -1.77,-2.93 -0.9,-0.71 -1.99,-1.07 -3.26,-1.07 -1.78,0 -3.21,0.64 -4.32,1.91 -1.1,1.26 -1.65,3.32 -1.65,6.16 0,3.02 0.54,5.17 1.63,6.44 1.09,1.29 2.5,1.92 4.24,1.92 1.28,0 2.38,-0.4 3.31,-1.22 0.92,-0.81 1.59,-2.09 1.99,-3.84zm7.8 -2.99c0,-2.43 0.37,-4.48 1.1,-6.13 0.53,-1.22 1.28,-2.32 2.22,-3.28 0.94,-0.97 1.96,-1.68 3.08,-2.16 1.49,-0.63 3.21,-0.94 5.15,-0.94 3.52,0 6.33,1.09 8.45,3.28 2.11,2.19 3.17,5.22 3.17,9.12 0,3.86 -1.05,6.88 -3.15,9.06 -2.09,2.18 -4.9,3.27 -8.4,3.27 -3.55,0 -6.38,-1.08 -8.47,-3.25 -2.1,-2.17 -3.15,-5.16 -3.15,-8.97zm4.97 -0.16c0,2.7 0.63,4.75 1.88,6.15 1.25,1.4 2.83,2.1 4.76,2.1 1.92,0 3.5,-0.7 4.74,-2.08 1.23,-1.39 1.85,-3.47 1.85,-6.24 0,-2.74 -0.6,-4.78 -1.8,-6.13 -1.2,-1.35 -2.8,-2.02 -4.79,-2.02 -1.99,0 -3.6,0.68 -4.81,2.05 -1.22,1.36 -1.83,3.42 -1.83,6.17zm21.96 -11.92l8.79 0c1.98,0 3.49,0.15 4.53,0.46 1.4,0.41 2.6,1.14 3.59,2.2 1,1.05 1.76,2.34 2.28,3.86 0.51,1.53 0.78,3.41 0.78,5.64 0,1.97 -0.25,3.66 -0.74,5.08 -0.59,1.74 -1.44,3.15 -2.55,4.22 -0.83,0.81 -1.96,1.45 -3.38,1.9 -1.06,0.34 -2.47,0.51 -4.25,0.51l-9.05 0 0 -23.87zm4.83 4.04l0 15.79 3.59 0c1.33,0 2.3,-0.07 2.9,-0.22 0.78,-0.2 1.42,-0.53 1.93,-1 0.52,-0.46 0.94,-1.23 1.26,-2.3 0.33,-1.06 0.49,-2.52 0.49,-4.37 0,-1.84 -0.16,-3.25 -0.49,-4.24 -0.32,-0.99 -0.78,-1.76 -1.36,-2.31 -0.58,-0.56 -1.32,-0.93 -2.22,-1.13 -0.67,-0.15 -1.99,-0.22 -3.94,-0.22l-2.16 0zm19.24 19.83l0 -23.87 17.67 0 0 4.04 -12.84 0 0 5.29 11.94 0 0 4.04 -11.94 0 0 6.46 13.3 0 0 4.04 -18.13 0zm93.17 0l-8.54 -23.87 5.22 0 6.06 17.67 5.82 -17.67 5.13 0 -8.49 23.87 -5.2 0zm15.96 0l0 -23.87 4.83 0 0 23.87 -4.83 0zm9.43 0l0 -23.87 17.66 0 0 4.04 -12.83 0 0 5.29 11.93 0 0 4.04 -11.93 0 0 6.46 13.3 0 0 4.04 -18.13 0zm-87.07 -23.87l8.79 0c1.99,0 3.5,0.15 4.54,0.46 1.39,0.41 2.59,1.14 3.59,2.2 1,1.05 1.75,2.34 2.27,3.86 0.52,1.53 0.78,3.41 0.78,5.64 0,1.97 -0.24,3.66 -0.73,5.08 -0.6,1.74 -1.45,3.15 -2.55,4.22 -0.83,0.81 -1.96,1.45 -3.38,1.9 -1.06,0.34 -2.48,0.51 -4.26,0.51l-9.05 0 0 -23.87zm4.84 4.04l0 15.79 3.58 0c1.34,0 2.31,-0.07 2.9,-0.22 0.79,-0.2 1.43,-0.53 1.94,-1 0.52,-0.46 0.93,-1.23 1.26,-2.3 0.32,-1.06 0.48,-2.52 0.48,-4.37 0,-1.84 -0.16,-3.25 -0.48,-4.24 -0.33,-0.99 -0.78,-1.76 -1.36,-2.31 -0.59,-0.56 -1.33,-0.93 -2.23,-1.13 -0.66,-0.15 -1.98,-0.22 -3.94,-0.22l-2.15 0zm19.24 19.83l0 -23.87 17.66 0 0 4.04 -12.83 0 0 5.29 11.93 0 0 4.04 -11.93 0 0 6.46 13.3 0 0 4.04 -18.13 0z" />
                                <path class="fil23"
                                    d="M809.7 2088.41l4.03 0 0 10.37 -9.52 0c-0.98,-1.01 -1.84,-2.47 -2.59,-4.39 -0.75,-1.91 -1.12,-3.85 -1.12,-5.81 0,-2.5 0.52,-4.67 1.57,-6.52 1.05,-1.85 2.56,-3.25 4.51,-4.18 1.95,-0.94 4.08,-1.4 6.37,-1.4 2.49,0 4.7,0.52 6.64,1.56 1.93,1.04 3.42,2.57 4.45,4.57 0.8,1.53 1.19,3.43 1.19,5.71 0,2.96 -0.62,5.28 -1.86,6.95 -1.25,1.66 -2.97,2.73 -5.17,3.21l-0.9 -4.8c1.17,-0.34 2.1,-0.97 2.78,-1.9 0.68,-0.92 1.02,-2.07 1.02,-3.46 0,-2.1 -0.67,-3.78 -2.01,-5.01 -1.33,-1.24 -3.32,-1.87 -5.94,-1.87 -2.84,0 -4.97,0.63 -6.39,1.89 -1.41,1.26 -2.13,2.9 -2.13,4.94 0,1.01 0.2,2.02 0.6,3.03 0.39,1.02 0.88,1.88 1.44,2.61l3.03 0 0 -5.5zm-8.77 14.96l23.67 0 0 4.84 -19.63 0 0 11.96 -4.04 0 0 -16.8zm0 41.73l0 -5.21 5.44 -2.06 0 -9.57 -5.44 -1.98 0 -5.11 23.87 9.26 0 5.11 -23.87 9.56zm9.47 -8.83l8.83 -3.32 -8.83 -3.22 0 6.54zm-1.73 10.14l0.46 4.7c-1.57,0.28 -2.72,0.85 -3.46,1.71 -0.74,0.86 -1.1,2.02 -1.1,3.48 0,1.54 0.33,2.71 0.98,3.49 0.66,0.79 1.42,1.18 2.3,1.18 0.57,0 1.04,-0.16 1.44,-0.49 0.4,-0.33 0.74,-0.91 1.03,-1.73 0.2,-0.56 0.55,-1.84 1.05,-3.84 0.64,-2.57 1.43,-4.38 2.37,-5.42 1.32,-1.46 2.92,-2.18 4.82,-2.18 1.21,0 2.36,0.34 3.42,1.02 1.06,0.69 1.86,1.68 2.42,2.97 0.56,1.3 0.83,2.85 0.83,4.69 0,2.98 -0.66,5.23 -1.99,6.74 -1.32,1.51 -3.09,2.3 -5.31,2.37l-0.16 -4.83c1.23,-0.2 2.11,-0.64 2.65,-1.32 0.54,-0.67 0.81,-1.68 0.81,-3.02 0,-1.39 -0.28,-2.48 -0.86,-3.26 -0.38,-0.51 -0.87,-0.77 -1.49,-0.77 -0.57,0 -1.05,0.24 -1.45,0.72 -0.52,0.61 -1.05,2.08 -1.61,4.42 -0.55,2.34 -1.13,4.07 -1.71,5.18 -0.6,1.12 -1.4,2 -2.43,2.64 -1.03,0.63 -2.3,0.95 -3.8,0.95 -1.37,0 -2.65,-0.38 -3.85,-1.14 -1.19,-0.77 -2.08,-1.84 -2.66,-3.23 -0.58,-1.38 -0.87,-3.12 -0.87,-5.19 0,-3.02 0.69,-5.33 2.09,-6.95 1.39,-1.62 3.42,-2.58 6.08,-2.89zm-7.74 23.43l23.87 0 0 7.24 -16.28 4.27 16.28 4.23 0 7.26 -23.87 0 0 -4.47 18.79 -0.02 -18.79 -4.7 0 -4.64 18.79 -4.69 -18.79 -0.01 0 -4.47zm0 49.33l0 -5.2 5.44 -2.07 0 -9.57 -5.44 -1.98 0 -5.11 23.87 9.27 0 5.1 -23.87 9.56zm9.47 -8.83l8.83 -3.32 -8.83 -3.22 0 6.54zm-9.47 11.4l23.87 0 0 4.68 -15.99 9.82 15.99 0 0 4.47 -23.87 0 0 -4.83 15.69 -9.67 -15.69 0 0 -4.47z" />
                                <path class="fil23"
                                    d="M585.2 2182.13l-20.71 0 0 -4.23 17.18 0 0 -10.47 3.53 0 0 14.7zm0 -20.23l-17.35 0 0 6.18 -3.53 0 0 -16.56 3.53 0 0 6.15 17.35 0 0 4.23zm-20.88 -13.12l0 -8.35c0,-1.66 0.07,-2.89 0.2,-3.7 0.14,-0.82 0.43,-1.54 0.86,-2.18 0.44,-0.65 1.02,-1.18 1.74,-1.61 0.73,-0.43 1.54,-0.64 2.44,-0.64 0.98,0 1.87,0.26 2.69,0.79 0.81,0.52 1.42,1.24 1.83,2.14 0.37,-1.27 1,-2.24 1.9,-2.93 0.89,-0.68 1.94,-1.02 3.15,-1.02 0.96,0 1.88,0.22 2.78,0.66 0.9,0.44 1.62,1.05 2.16,1.81 0.53,0.77 0.86,1.71 0.99,2.83 0.07,0.7 0.12,2.4 0.14,5.09l0 7.11 -20.88 0zm3.47 -4.23l4.81 0 0 -2.76c0,-1.64 -0.02,-2.66 -0.07,-3.06 -0.09,-0.72 -0.33,-1.29 -0.75,-1.7 -0.41,-0.41 -0.95,-0.62 -1.62,-0.62 -0.65,0 -1.17,0.18 -1.57,0.54 -0.4,0.35 -0.65,0.88 -0.73,1.58 -0.05,0.42 -0.07,1.62 -0.07,3.6l0 2.42zm8.28 0l5.6 0 0 -3.91c0,-1.51 -0.04,-2.48 -0.12,-2.89 -0.12,-0.63 -0.4,-1.14 -0.84,-1.53 -0.45,-0.39 -1.04,-0.59 -1.78,-0.59 -0.63,0 -1.16,0.15 -1.6,0.45 -0.44,0.3 -0.76,0.75 -0.96,1.32 -0.2,0.57 -0.3,1.82 -0.3,3.74l0 3.41z" />
                                <path class="fil23"
                                    d="M572.4 2342.03l-14.92 0 0 -4.53 10.18 -2.67 -10.18 -2.64 0 -4.54 14.92 0 0 2.79 -11.74 0.02 11.74 2.94 0 2.9 -11.74 2.93 11.74 0.01 0 2.79zm0 -30.83l0 3.25 -3.4 1.29 0 5.98 3.4 1.24 0 3.19 -14.92 -5.79 0 -3.19 14.92 -5.97zm-5.92 5.52l-5.52 2.07 5.52 2.01 0 -4.08zm5.92 -9.4l-14.92 5.33 0 -3.26 11.04 -3.79 -11.04 -3.63 0 -3.21 14.92 5.3 0 3.26zm0 -9.98l-14.92 0 0 -3.02 14.92 0 0 3.02zm4.45 48.76l0 -3.02 9.45 0c1.24,0 2.19,0.1 2.86,0.32 0.86,0.29 1.56,0.82 2.09,1.59 0.52,0.76 0.79,1.77 0.79,3.03 0,1.47 -0.41,2.61 -1.23,3.4 -0.83,0.79 -2.04,1.19 -3.63,1.2l-0.33 -2.86c0.85,-0.03 1.45,-0.15 1.8,-0.37 0.54,-0.32 0.8,-0.81 0.8,-1.47 0,-0.66 -0.19,-1.14 -0.57,-1.41 -0.38,-0.27 -1.18,-0.41 -2.39,-0.41l-9.64 0zm14.92 -6.24l-14.92 0 0 -11.04 2.52 0 0 8.02 3.31 0 0 -7.45 2.52 0 0 7.45 4.05 0 0 -8.31 2.52 0 0 11.33zm0 -27.33l0 3.26 -3.4 1.28 0 5.99 3.4 1.23 0 3.2 -14.92 -5.79 0 -3.19 14.92 -5.98zm-5.92 5.52l-5.52 2.08 5.52 2.01 0 -4.09zm5.92 -7.13l-14.92 0 0 -2.92 10 -6.14 -10 0 0 -2.79 14.92 0 0 3.02 -9.81 6.04 9.81 0 0 2.79zm-4.84 -14.25l-0.29 -2.94c0.98,-0.17 1.7,-0.53 2.16,-1.07 0.47,-0.53 0.7,-1.26 0.7,-2.17 0,-0.97 -0.21,-1.7 -0.62,-2.19 -0.41,-0.49 -0.89,-0.73 -1.44,-0.73 -0.35,0 -0.65,0.1 -0.9,0.31 -0.25,0.2 -0.46,0.56 -0.64,1.08 -0.13,0.35 -0.34,1.14 -0.65,2.4 -0.41,1.6 -0.9,2.73 -1.49,3.38 -0.82,0.91 -1.82,1.37 -3.01,1.37 -0.76,0 -1.47,-0.22 -2.14,-0.64 -0.66,-0.43 -1.16,-1.05 -1.51,-1.86 -0.35,-0.81 -0.52,-1.78 -0.52,-2.93 0,-1.86 0.41,-3.27 1.24,-4.21 0.83,-0.94 1.94,-1.44 3.32,-1.49l0.11 3.02c-0.77,0.13 -1.33,0.41 -1.66,0.83 -0.34,0.42 -0.51,1.05 -0.51,1.89 0,0.87 0.18,1.55 0.54,2.04 0.23,0.31 0.54,0.47 0.93,0.47 0.36,0 0.66,-0.15 0.91,-0.44 0.32,-0.38 0.65,-1.3 1,-2.76 0.34,-1.47 0.71,-2.55 1.07,-3.24 0.38,-0.71 0.88,-1.25 1.52,-1.65 0.64,-0.4 1.44,-0.59 2.38,-0.59 0.85,0 1.65,0.23 2.4,0.71 0.75,0.47 1.3,1.14 1.66,2.01 0.37,0.87 0.55,1.95 0.55,3.25 0,1.88 -0.44,3.33 -1.31,4.34 -0.87,1.01 -2.13,1.61 -3.8,1.81z" />
                                <path class="fil23"
                                    d="M535.67 2005.92l0 -14.68 4.45 0 2.63 10.01 2.6 -10.01 4.46 0 0 14.68 -2.74 0 -0.01 -11.55 -2.9 11.55 -2.85 0 -2.88 -11.55 -0.01 11.55 -2.75 0zm17.01 0l0 -14.68 2.98 0 0 14.68 -2.98 0zm5.02 -4.76l2.89 -0.28c0.18,0.96 0.52,1.67 1.05,2.13 0.53,0.45 1.25,0.67 2.15,0.67 0.95,0 1.66,-0.2 2.14,-0.6 0.49,-0.4 0.73,-0.87 0.73,-1.41 0,-0.35 -0.1,-0.65 -0.3,-0.89 -0.21,-0.25 -0.56,-0.46 -1.07,-0.63 -0.34,-0.13 -1.13,-0.34 -2.36,-0.65 -1.58,-0.39 -2.69,-0.88 -3.33,-1.46 -0.9,-0.81 -1.34,-1.79 -1.34,-2.96 0,-0.74 0.21,-1.45 0.63,-2.1 0.42,-0.65 1.03,-1.15 1.83,-1.49 0.79,-0.34 1.75,-0.51 2.87,-0.51 1.84,0 3.22,0.4 4.15,1.22 0.93,0.82 1.41,1.9 1.46,3.27l-2.97 0.1c-0.13,-0.76 -0.4,-1.3 -0.81,-1.64 -0.41,-0.33 -1.04,-0.49 -1.86,-0.49 -0.86,0 -1.53,0.17 -2.01,0.53 -0.31,0.23 -0.47,0.53 -0.47,0.91 0,0.35 0.15,0.65 0.44,0.9 0.38,0.31 1.28,0.64 2.72,0.98 1.44,0.34 2.5,0.7 3.19,1.06 0.69,0.36 1.23,0.86 1.62,1.49 0.39,0.63 0.58,1.41 0.58,2.34 0,0.84 -0.23,1.63 -0.7,2.36 -0.47,0.74 -1.13,1.28 -1.98,1.64 -0.85,0.36 -1.92,0.54 -3.19,0.54 -1.86,0 -3.28,-0.43 -4.28,-1.29 -0.99,-0.85 -1.58,-2.1 -1.78,-3.74zm13.67 0l2.89 -0.28c0.18,0.96 0.53,1.67 1.06,2.13 0.53,0.45 1.24,0.67 2.14,0.67 0.95,0 1.67,-0.2 2.15,-0.6 0.48,-0.4 0.72,-0.87 0.72,-1.41 0,-0.35 -0.1,-0.65 -0.3,-0.89 -0.2,-0.25 -0.56,-0.46 -1.06,-0.63 -0.35,-0.13 -1.14,-0.34 -2.37,-0.65 -1.58,-0.39 -2.69,-0.88 -3.33,-1.46 -0.89,-0.81 -1.34,-1.79 -1.34,-2.96 0,-0.74 0.21,-1.45 0.63,-2.1 0.42,-0.65 1.03,-1.15 1.83,-1.49 0.79,-0.34 1.75,-0.51 2.88,-0.51 1.83,0 3.22,0.4 4.14,1.22 0.93,0.82 1.42,1.9 1.46,3.27l-2.97 0.1c-0.13,-0.76 -0.39,-1.3 -0.81,-1.64 -0.41,-0.33 -1.03,-0.49 -1.86,-0.49 -0.85,0 -1.52,0.17 -2.01,0.53 -0.31,0.23 -0.46,0.53 -0.46,0.91 0,0.35 0.14,0.65 0.44,0.9 0.37,0.31 1.27,0.64 2.71,0.98 1.44,0.34 2.5,0.7 3.19,1.06 0.69,0.36 1.23,0.86 1.62,1.49 0.39,0.63 0.58,1.41 0.58,2.34 0,0.84 -0.23,1.63 -0.7,2.36 -0.46,0.74 -1.12,1.28 -1.98,1.64 -0.85,0.36 -1.92,0.54 -3.19,0.54 -1.86,0 -3.28,-0.43 -4.28,-1.29 -0.99,-0.85 -1.58,-2.1 -1.78,-3.74zm14.46 4.76l0 -14.68 2.97 0 0 5.78 5.78 0 0 -5.78 2.97 0 0 14.68 -2.97 0 0 -6.42 -5.78 0 0 6.42 -2.97 0zm28.02 0l-3.2 0 -1.27 -3.34 -5.89 0 -1.22 3.34 -3.14 0 5.7 -14.68 3.14 0 5.88 14.68zm-5.43 -5.82l-2.04 -5.43 -1.98 5.43 4.02 0z" />
                                <path class="fil23"
                                    d="M541.69 1783.72l0 -11.93 2.34 0 4.91 8 0 -8 2.24 0 0 11.93 -2.42 0 -4.83 -7.84 0 7.84 -2.24 0zm22.79 0l-2.6 0 -1.03 -2.71 -4.79 0 -0.99 2.71 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm7.15 4.73l0 -9.91 -3.53 0 0 -2.02 9.46 0 0 2.02 -3.51 0 0 9.91 -2.42 0zm7.5 -11.93l2.41 0 0 6.47c0,1.02 0.04,1.69 0.09,1.99 0.11,0.49 0.35,0.88 0.73,1.18 0.39,0.3 0.91,0.44 1.58,0.44 0.67,0 1.19,-0.14 1.53,-0.42 0.34,-0.28 0.55,-0.62 0.62,-1.03 0.07,-0.41 0.1,-1.08 0.1,-2.02l0 -6.61 2.42 0 0 6.27c0,1.44 -0.06,2.45 -0.19,3.04 -0.13,0.6 -0.37,1.09 -0.72,1.5 -0.35,0.41 -0.82,0.73 -1.4,0.98 -0.59,0.24 -1.35,0.36 -2.29,0.36 -1.13,0 -2,-0.13 -2.58,-0.4 -0.59,-0.26 -1.05,-0.6 -1.39,-1.02 -0.35,-0.42 -0.57,-0.86 -0.68,-1.33 -0.15,-0.68 -0.23,-1.69 -0.23,-3.03l0 -6.37zm12.03 11.93l0 -11.93 5.08 0c1.27,0 2.2,0.11 2.78,0.32 0.58,0.22 1.04,0.6 1.39,1.14 0.35,0.55 0.52,1.18 0.52,1.88 0,0.9 -0.26,1.64 -0.79,2.22 -0.52,0.59 -1.3,0.95 -2.35,1.11 0.52,0.3 0.95,0.63 1.28,1 0.34,0.36 0.8,1.01 1.37,1.94l1.46 2.32 -2.88 0 -1.73 -2.6c-0.62,-0.93 -1.05,-1.51 -1.28,-1.75 -0.22,-0.24 -0.47,-0.41 -0.72,-0.5 -0.26,-0.09 -0.67,-0.13 -1.22,-0.13l-0.49 0 0 4.98 -2.42 0zm2.42 -6.88l1.78 0c1.16,0 1.88,-0.05 2.17,-0.15 0.28,-0.09 0.51,-0.26 0.67,-0.5 0.17,-0.24 0.25,-0.54 0.25,-0.9 0,-0.4 -0.11,-0.73 -0.33,-0.98 -0.21,-0.24 -0.51,-0.4 -0.9,-0.46 -0.2,-0.03 -0.78,-0.04 -1.76,-0.04l-1.88 0 0 3.03zm9.62 6.88l0 -11.93 8.83 0 0 2.02 -6.41 0 0 2.65 5.96 0 0 2.01 -5.96 0 0 3.24 6.64 0 0 2.01 -9.06 0zm-65.58 15.5l0 -11.94 5.08 0c1.27,0 2.2,0.11 2.78,0.32 0.58,0.22 1.04,0.6 1.39,1.15 0.34,0.55 0.52,1.17 0.52,1.88 0,0.89 -0.26,1.63 -0.79,2.22 -0.52,0.58 -1.31,0.95 -2.35,1.1 0.52,0.3 0.95,0.63 1.28,1 0.34,0.36 0.8,1.01 1.37,1.94l1.46 2.33 -2.89 0 -1.72 -2.61c-0.62,-0.92 -1.05,-1.51 -1.28,-1.75 -0.23,-0.24 -0.47,-0.41 -0.72,-0.49 -0.26,-0.09 -0.67,-0.14 -1.22,-0.14l-0.49 0 0 4.99 -2.42 0zm2.42 -6.89l1.78 0c1.16,0 1.88,-0.05 2.17,-0.14 0.28,-0.1 0.51,-0.27 0.67,-0.51 0.16,-0.24 0.25,-0.54 0.25,-0.9 0,-0.4 -0.11,-0.72 -0.33,-0.97 -0.21,-0.25 -0.51,-0.41 -0.9,-0.47 -0.2,-0.03 -0.79,-0.04 -1.76,-0.04l-1.88 0 0 3.03zm9.62 6.89l0 -11.94 8.83 0 0 2.02 -6.42 0 0 2.65 5.97 0 0 2.02 -5.97 0 0 3.23 6.65 0 0 2.02 -9.06 0zm11.11 0l0 -11.94 3.87 0c1.46,0 2.41,0.06 2.86,0.18 0.68,0.18 1.25,0.57 1.71,1.17 0.47,0.6 0.7,1.37 0.7,2.33 0,0.73 -0.14,1.34 -0.4,1.84 -0.27,0.5 -0.6,0.89 -1.01,1.18 -0.41,0.28 -0.83,0.47 -1.25,0.56 -0.57,0.12 -1.4,0.18 -2.49,0.18l-1.57 0 0 4.5 -2.42 0zm2.42 -9.92l0 3.4 1.31 0c0.95,0 1.58,-0.06 1.9,-0.19 0.32,-0.12 0.57,-0.32 0.75,-0.59 0.18,-0.27 0.27,-0.57 0.27,-0.93 0,-0.44 -0.12,-0.79 -0.38,-1.08 -0.25,-0.28 -0.57,-0.46 -0.96,-0.53 -0.29,-0.05 -0.86,-0.08 -1.73,-0.08l-1.16 0zm8.7 -2.02l2.42 0 0 6.47c0,1.03 0.03,1.69 0.09,1.99 0.1,0.49 0.34,0.89 0.72,1.18 0.39,0.3 0.91,0.45 1.58,0.45 0.68,0 1.19,-0.14 1.53,-0.42 0.35,-0.28 0.55,-0.63 0.62,-1.03 0.07,-0.41 0.11,-1.09 0.11,-2.03l0 -6.61 2.41 0 0 6.28c0,1.43 -0.06,2.44 -0.19,3.04 -0.13,0.59 -0.37,1.09 -0.72,1.5 -0.35,0.4 -0.81,0.73 -1.4,0.97 -0.58,0.24 -1.34,0.36 -2.29,0.36 -1.13,0 -1.99,-0.13 -2.58,-0.39 -0.59,-0.27 -1.05,-0.61 -1.39,-1.03 -0.34,-0.42 -0.57,-0.86 -0.67,-1.33 -0.16,-0.68 -0.24,-1.69 -0.24,-3.02l0 -6.38zm12.04 0l4.77 0c0.95,0 1.65,0.04 2.11,0.12 0.47,0.08 0.88,0.24 1.25,0.49 0.37,0.25 0.67,0.58 0.92,1 0.24,0.41 0.36,0.88 0.36,1.39 0,0.56 -0.15,1.07 -0.45,1.53 -0.3,0.47 -0.71,0.82 -1.22,1.05 0.73,0.21 1.28,0.58 1.67,1.09 0.39,0.51 0.59,1.11 0.59,1.8 0,0.54 -0.13,1.07 -0.38,1.59 -0.25,0.51 -0.6,0.92 -1.04,1.23 -0.43,0.3 -0.97,0.49 -1.61,0.57 -0.41,0.04 -1.37,0.07 -2.91,0.08l-4.06 0 0 -11.94zm2.41 1.99l0 2.75 1.58 0c0.94,0 1.52,-0.02 1.75,-0.05 0.41,-0.04 0.73,-0.18 0.97,-0.42 0.24,-0.24 0.35,-0.55 0.35,-0.93 0,-0.37 -0.1,-0.67 -0.3,-0.9 -0.21,-0.23 -0.51,-0.37 -0.91,-0.41 -0.24,-0.03 -0.92,-0.04 -2.05,-0.04l-1.39 0zm0 4.73l0 3.2 2.24 0c0.86,0 1.42,-0.03 1.65,-0.07 0.36,-0.07 0.65,-0.23 0.87,-0.48 0.23,-0.26 0.34,-0.59 0.34,-1.02 0,-0.36 -0.08,-0.66 -0.26,-0.91 -0.17,-0.25 -0.42,-0.44 -0.75,-0.55 -0.33,-0.11 -1.04,-0.17 -2.14,-0.17l-1.95 0zm9.69 5.22l0 -11.84 2.41 0 0 9.82 5.99 0 0 2.02 -8.4 0zm10.03 0l0 -11.94 2.41 0 0 11.94 -2.41 0zm12.35 -4.4l2.33 0.71c-0.36,1.32 -0.96,2.29 -1.79,2.93 -0.83,0.64 -1.89,0.96 -3.17,0.96 -1.59,0 -2.89,-0.55 -3.91,-1.63 -1.02,-1.08 -1.53,-2.56 -1.53,-4.44 0,-1.99 0.51,-3.53 1.54,-4.63 1.02,-1.1 2.37,-1.65 4.05,-1.65 1.46,0 2.64,0.43 3.55,1.29 0.55,0.51 0.95,1.25 1.23,2.21l-2.39 0.56c-0.14,-0.61 -0.43,-1.1 -0.88,-1.46 -0.45,-0.36 -1,-0.54 -1.63,-0.54 -0.89,0 -1.61,0.32 -2.16,0.96 -0.55,0.63 -0.83,1.66 -0.83,3.08 0,1.5 0.27,2.58 0.82,3.22 0.54,0.64 1.25,0.96 2.12,0.96 0.64,0 1.19,-0.2 1.65,-0.61 0.46,-0.41 0.8,-1.05 1,-1.92z" />
                                <path class="fil23"
                                    d="M551.35 1573.28l2.34 0.72c-0.36,1.31 -0.96,2.29 -1.79,2.93 -0.84,0.63 -1.89,0.95 -3.17,0.95 -1.59,0 -2.89,-0.54 -3.91,-1.62 -1.02,-1.09 -1.53,-2.57 -1.53,-4.45 0,-1.98 0.51,-3.53 1.54,-4.63 1.02,-1.1 2.37,-1.65 4.04,-1.65 1.46,0 2.65,0.44 3.56,1.3 0.55,0.51 0.95,1.24 1.22,2.2l-2.38 0.57c-0.14,-0.62 -0.44,-1.11 -0.88,-1.46 -0.45,-0.36 -1,-0.54 -1.64,-0.54 -0.88,0 -1.6,0.32 -2.15,0.95 -0.55,0.64 -0.83,1.66 -0.83,3.09 0,1.5 0.27,2.58 0.81,3.21 0.55,0.65 1.25,0.97 2.12,0.97 0.65,0 1.2,-0.21 1.66,-0.62 0.46,-0.4 0.79,-1.04 0.99,-1.92zm15.16 4.4l-2.61 0 -1.03 -2.71 -4.78 0 -0.99 2.71 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.7 -7.2l4.77 0c0.95,0 1.65,0.04 2.12,0.12 0.46,0.08 0.88,0.24 1.24,0.49 0.37,0.25 0.68,0.58 0.92,0.99 0.25,0.42 0.37,0.88 0.37,1.4 0,0.55 -0.15,1.07 -0.45,1.53 -0.3,0.47 -0.71,0.81 -1.22,1.05 0.72,0.21 1.28,0.57 1.67,1.08 0.39,0.51 0.58,1.11 0.58,1.81 0,0.54 -0.12,1.07 -0.38,1.58 -0.25,0.52 -0.59,0.93 -1.03,1.24 -0.44,0.3 -0.98,0.49 -1.62,0.56 -0.4,0.04 -1.37,0.07 -2.9,0.08l-4.07 0 0 -11.93zm2.42 1.98l0 2.75 1.58 0c0.93,0 1.51,-0.01 1.74,-0.04 0.41,-0.05 0.74,-0.19 0.97,-0.42 0.24,-0.24 0.36,-0.55 0.36,-0.93 0,-0.37 -0.1,-0.67 -0.31,-0.9 -0.2,-0.23 -0.5,-0.37 -0.9,-0.42 -0.24,-0.02 -0.93,-0.04 -2.06,-0.04l-1.38 0zm0 4.74l0 3.2 2.23 0c0.87,0 1.42,-0.03 1.65,-0.08 0.36,-0.06 0.65,-0.22 0.88,-0.47 0.22,-0.26 0.34,-0.6 0.34,-1.02 0,-0.36 -0.09,-0.66 -0.26,-0.92 -0.18,-0.24 -0.43,-0.43 -0.76,-0.54 -0.32,-0.12 -1.04,-0.17 -2.13,-0.17l-1.95 0zm20.37 5.21l-2.61 0 -1.03 -2.71 -4.78 0 -0.99 2.71 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.7 4.73l0 -11.93 2.34 0 4.91 8 0 -8 2.24 0 0 11.93 -2.42 0 -4.83 -7.84 0 7.84 -2.24 0zm11.95 0l0 -11.93 2.42 0 0 11.93 -2.42 0z" />
                                <path class="fil23"
                                    d="M550.02 1677.32l0 -11.93 3.62 0 2.14 8.13 2.12 -8.13 3.62 0 0 11.93 -2.23 0 -0.01 -9.4 -2.35 9.4 -2.32 0 -2.34 -9.4 -0.01 9.4 -2.24 0zm24.67 0l-2.6 0 -1.03 -2.72 -4.79 0 -0.99 2.72 -2.56 0 4.64 -11.93 2.55 0 4.78 11.93zm-4.42 -4.74l-1.66 -4.41 -1.61 4.41 3.27 0zm5.67 4.74l0 -11.93 3.62 0 2.14 8.13 2.11 -8.13 3.63 0 0 11.93 -2.23 0 -0.01 -9.4 -2.35 9.4 -2.33 0 -2.34 -9.4 0 9.4 -2.24 0zm24.67 0l-2.6 0 -1.03 -2.72 -4.79 0 -0.99 2.72 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.74l-1.66 -4.41 -1.61 4.41 3.27 0zm-61.07 8.3l9.48 0 0 11.93 -2.41 0 0 -9.92 -4.65 0 0 9.92 -2.42 0 0 -11.93zm11.45 6.04c0,-1.22 0.18,-2.24 0.54,-3.07 0.27,-0.61 0.64,-1.16 1.11,-1.64 0.47,-0.48 0.99,-0.84 1.55,-1.08 0.74,-0.31 1.6,-0.47 2.57,-0.47 1.76,0 3.17,0.55 4.22,1.64 1.06,1.09 1.59,2.61 1.59,4.56 0,1.93 -0.53,3.44 -1.57,4.53 -1.05,1.09 -2.45,1.64 -4.21,1.64 -1.77,0 -3.18,-0.54 -4.23,-1.63 -1.05,-1.08 -1.57,-2.58 -1.57,-4.48zm2.48 -0.08c0,1.35 0.31,2.37 0.94,3.07 0.62,0.7 1.42,1.05 2.38,1.05 0.96,0 1.75,-0.35 2.37,-1.04 0.62,-0.69 0.92,-1.73 0.92,-3.12 0,-1.37 -0.3,-2.39 -0.9,-3.06 -0.6,-0.68 -1.39,-1.01 -2.39,-1.01 -1,0 -1.8,0.34 -2.41,1.02 -0.61,0.68 -0.91,1.71 -0.91,3.09zm10.78 -5.96l2.42 0 0 2.84c0,0.93 0.03,1.54 0.1,1.84 0.06,0.3 0.27,0.56 0.6,0.78 0.34,0.23 0.83,0.34 1.48,0.34 0.52,0 0.97,-0.06 1.38,-0.17 0.4,-0.11 0.74,-0.27 1.04,-0.49l0 -5.14 2.41 0 0 11.93 -2.41 0 0 -4.81c-0.49,0.22 -0.97,0.38 -1.45,0.49 -0.47,0.11 -0.93,0.17 -1.39,0.17 -1.19,0 -2.18,-0.28 -2.98,-0.84 -0.8,-0.56 -1.2,-1.53 -1.2,-2.92l0 -4.02zm11.94 0l2.25 0 0 7.94 4.84 -7.94 2.4 0 0 11.93 -2.25 0 0 -7.82 -4.84 7.82 -2.4 0 0 -11.93zm14.63 11.93l0 -9.92 -3.53 0 0 -2.01 9.47 0 0 2.01 -3.52 0 0 9.92 -2.42 0zm17.2 0l-2.6 0 -1.03 -2.72 -4.79 0 -0.99 2.72 -2.56 0 4.64 -11.93 2.55 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.74 -7.2l2.25 0 0 7.94 4.83 -7.94 2.4 0 0 11.93 -2.25 0 0 -7.82 -4.83 7.82 -2.4 0 0 -11.93zm6.16 -3.45l1.12 0c-0.06,0.73 -0.32,1.31 -0.78,1.73 -0.45,0.42 -1.03,0.63 -1.75,0.63 -0.73,0 -1.31,-0.21 -1.76,-0.63 -0.46,-0.42 -0.72,-1 -0.78,-1.73l1.11 0c0.04,0.38 0.18,0.67 0.41,0.87 0.23,0.2 0.57,0.29 1.02,0.29 0.44,0 0.78,-0.09 1.01,-0.29 0.23,-0.2 0.37,-0.49 0.4,-0.87z" />
                                <path class="fil23"
                                    d="M1049.59 1781.16l-3.91 0 -1.54 -4.07 -7.18 0 -1.49 4.07 -3.83 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.63 -7.1l-2.48 -6.62 -2.42 6.62 4.9 0zm99.46 -1.74c0,-1.82 0.28,-3.36 0.82,-4.6 0.4,-0.91 0.96,-1.73 1.67,-2.46 0.7,-0.72 1.47,-1.26 2.31,-1.61 1.12,-0.47 2.4,-0.71 3.86,-0.71 2.64,0 4.75,0.82 6.34,2.46 1.58,1.64 2.38,3.92 2.38,6.84 0,2.89 -0.79,5.16 -2.36,6.79 -1.57,1.64 -3.68,2.46 -6.31,2.46 -2.66,0 -4.78,-0.81 -6.35,-2.44 -1.57,-1.63 -2.36,-3.87 -2.36,-6.73zm3.73 -0.12c0,2.03 0.47,3.57 1.4,4.62 0.94,1.04 2.13,1.57 3.57,1.57 1.45,0 2.63,-0.52 3.56,-1.56 0.93,-1.04 1.39,-2.6 1.39,-4.68 0,-2.05 -0.45,-3.59 -1.35,-4.59 -0.9,-1.02 -2.1,-1.52 -3.6,-1.52 -1.49,0 -2.69,0.51 -3.6,1.53 -0.92,1.03 -1.37,2.57 -1.37,4.63zm-83.18 2.36l3.5 1.08c-0.54,1.97 -1.44,3.43 -2.69,4.39 -1.24,0.95 -2.83,1.43 -4.75,1.43 -2.38,0 -4.33,-0.81 -5.87,-2.43 -1.53,-1.63 -2.29,-3.85 -2.29,-6.67 0,-2.98 0.77,-5.3 2.31,-6.95 1.53,-1.65 3.56,-2.47 6.07,-2.47 2.19,0 3.97,0.65 5.33,1.94 0.82,0.77 1.43,1.87 1.84,3.31l-3.58 0.85c-0.21,-0.93 -0.65,-1.66 -1.32,-2.2 -0.68,-0.53 -1.49,-0.8 -2.45,-0.8 -1.33,0 -2.41,0.47 -3.24,1.43 -0.82,0.95 -1.24,2.49 -1.24,4.62 0,2.26 0.41,3.87 1.22,4.83 0.82,0.97 1.88,1.44 3.18,1.44 0.97,0 1.79,-0.3 2.49,-0.91 0.69,-0.61 1.19,-1.57 1.49,-2.89zm10.63 6.6l0 -14.87 -5.3 0 0 -3.03 14.2 0 0 3.03 -5.28 0 0 14.87 -3.62 0zm11.24 -17.9l3.63 0 0 9.7c0,1.55 0.04,2.54 0.13,3 0.16,0.73 0.52,1.32 1.09,1.76 0.58,0.45 1.37,0.67 2.37,0.67 1.01,0 1.78,-0.21 2.3,-0.63 0.51,-0.42 0.82,-0.93 0.93,-1.55 0.1,-0.61 0.15,-1.62 0.15,-3.04l0 -9.91 3.63 0 0 9.42c0,2.15 -0.1,3.67 -0.29,4.55 -0.2,0.89 -0.56,1.64 -1.08,2.25 -0.52,0.62 -1.22,1.1 -2.1,1.46 -0.88,0.37 -2.02,0.55 -3.43,0.55 -1.71,0 -3,-0.2 -3.88,-0.59 -0.88,-0.4 -1.57,-0.91 -2.08,-1.54 -0.52,-0.64 -0.85,-1.3 -1.01,-1.99 -0.24,-1.03 -0.36,-2.54 -0.36,-4.55l0 -9.56zm34.18 17.9l-3.9 0 -1.55 -4.07 -7.18 0 -1.48 4.07 -3.84 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.62 -7.1l-2.49 -6.62 -2.42 6.62 4.91 0zm8.65 7.1l0 -17.75 3.63 0 0 14.73 8.97 0 0 3.02 -12.6 0zm41.57 0l0 -17.9 5.79 0c2.2,0 3.63,0.09 4.29,0.27 1.03,0.27 1.89,0.85 2.58,1.75 0.69,0.9 1.04,2.07 1.04,3.49 0,1.1 -0.2,2.02 -0.6,2.77 -0.4,0.75 -0.9,1.34 -1.52,1.77 -0.61,0.42 -1.23,0.71 -1.87,0.85 -0.86,0.17 -2.11,0.25 -3.74,0.25l-2.35 0 0 6.75 -3.62 0zm3.62 -14.87l0 5.1 1.97 0c1.42,0 2.37,-0.1 2.85,-0.28 0.48,-0.19 0.85,-0.48 1.12,-0.89 0.27,-0.4 0.41,-0.86 0.41,-1.39 0,-0.66 -0.19,-1.2 -0.57,-1.62 -0.38,-0.43 -0.86,-0.69 -1.45,-0.8 -0.43,-0.08 -1.29,-0.12 -2.59,-0.12l-1.74 0zm17.08 14.87l0 -14.87 -5.3 0 0 -3.03 14.2 0 0 3.03 -5.28 0 0 14.87 -3.62 0zm11.12 0l0 -17.9 3.62 0 0 17.9 -3.62 0zm18.52 -6.6l3.5 1.08c-0.54,1.97 -1.44,3.43 -2.68,4.39 -1.25,0.95 -2.84,1.43 -4.76,1.43 -2.38,0 -4.33,-0.81 -5.87,-2.43 -1.52,-1.63 -2.29,-3.85 -2.29,-6.67 0,-2.98 0.77,-5.3 2.31,-6.95 1.53,-1.65 3.56,-2.47 6.07,-2.47 2.19,0 3.97,0.65 5.33,1.94 0.82,0.77 1.43,1.87 1.84,3.31l-3.58 0.85c-0.21,-0.93 -0.65,-1.66 -1.32,-2.2 -0.68,-0.53 -1.49,-0.8 -2.45,-0.8 -1.33,0 -2.41,0.47 -3.23,1.43 -0.83,0.95 -1.25,2.49 -1.25,4.62 0,2.26 0.41,3.87 1.22,4.83 0.82,0.97 1.88,1.44 3.18,1.44 0.97,0 1.8,-0.3 2.49,-0.91 0.69,-0.61 1.19,-1.57 1.49,-2.89zm-145.39 32.36l-2.07 2.65c-1.02,-0.5 -2,-1.18 -2.94,-2.05 -0.72,0.65 -1.49,1.13 -2.3,1.44 -0.81,0.3 -1.78,0.46 -2.91,0.46 -2.22,0 -3.9,-0.63 -5.02,-1.88 -0.87,-0.97 -1.31,-2.09 -1.31,-3.35 0,-1.15 0.35,-2.18 1.03,-3.1 0.69,-0.92 1.71,-1.71 3.07,-2.39 -0.61,-0.72 -1.07,-1.42 -1.38,-2.07 -0.31,-0.66 -0.47,-1.28 -0.47,-1.87 0,-1.08 0.44,-2 1.3,-2.76 0.87,-0.75 2.1,-1.13 3.7,-1.13 1.55,0 2.75,0.39 3.62,1.18 0.88,0.79 1.31,1.76 1.31,2.9 0,0.72 -0.21,1.41 -0.64,2.06 -0.43,0.65 -1.29,1.39 -2.59,2.21l2.46 3.31c0.29,-0.52 0.54,-1.2 0.75,-2.03l3.11 0.7c-0.31,1.1 -0.58,1.91 -0.81,2.41 -0.22,0.51 -0.47,0.94 -0.73,1.28 0.38,0.36 0.88,0.75 1.49,1.18 0.61,0.43 1.05,0.72 1.33,0.85zm-9.33 -9.75l0.92 -0.71c0.68,-0.53 1.01,-1.05 1.01,-1.58 0,-0.44 -0.16,-0.81 -0.49,-1.12 -0.32,-0.31 -0.76,-0.47 -1.32,-0.47 -0.54,0 -0.97,0.14 -1.28,0.41 -0.3,0.28 -0.46,0.59 -0.46,0.95 0,0.43 0.26,0.94 0.78,1.54l0.84 0.98zm-1.34 3.74c-0.79,0.4 -1.38,0.88 -1.77,1.44 -0.38,0.56 -0.58,1.14 -0.58,1.72 0,0.74 0.24,1.35 0.72,1.82 0.48,0.47 1.13,0.7 1.94,0.7 0.54,0 1.05,-0.1 1.54,-0.31 0.5,-0.22 1.04,-0.57 1.62,-1.06l-3.47 -4.31zm22.31 8.18l-4.21 -17.9 3.72 0 2.67 12.3 3.26 -12.3 4.31 0 3.13 12.51 2.72 -12.51 3.64 0 -4.31 17.9 -3.87 0 -3.53 -13.38 -3.56 13.38 -3.97 0zm37.26 0l-3.9 0 -1.55 -4.07 -7.18 0 -1.49 4.07 -3.83 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.62 -7.1l-2.49 -6.62 -2.42 6.62 4.91 0zm10.72 7.1l0 -14.87 -5.3 0 0 -3.03 14.2 0 0 3.03 -5.27 0 0 14.87 -3.63 0zm22.7 -6.6l3.5 1.08c-0.54,1.97 -1.44,3.43 -2.69,4.39 -1.25,0.95 -2.83,1.43 -4.75,1.43 -2.38,0 -4.33,-0.81 -5.87,-2.43 -1.53,-1.63 -2.29,-3.85 -2.29,-6.67 0,-2.98 0.77,-5.3 2.31,-6.95 1.53,-1.65 3.56,-2.47 6.07,-2.47 2.19,0 3.97,0.65 5.33,1.94 0.82,0.77 1.43,1.87 1.84,3.31l-3.58 0.85c-0.21,-0.93 -0.65,-1.66 -1.32,-2.2 -0.68,-0.53 -1.49,-0.8 -2.45,-0.8 -1.33,0 -2.41,0.47 -3.24,1.43 -0.82,0.95 -1.24,2.49 -1.24,4.62 0,2.26 0.41,3.87 1.22,4.83 0.82,0.96 1.88,1.44 3.18,1.44 0.97,0 1.79,-0.3 2.49,-0.91 0.69,-0.62 1.19,-1.57 1.49,-2.89zm6.6 6.6l0 -17.9 3.63 0 0 7.05 7.05 0 0 -7.05 3.62 0 0 17.9 -3.62 0 0 -7.82 -7.05 0 0 7.82 -3.63 0zm18.06 0l0 -17.9 13.25 0 0 3.03 -9.63 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.98 0 0 3.02 -13.6 0zm15.72 -5.8l3.53 -0.35c0.21,1.18 0.63,2.05 1.28,2.6 0.65,0.55 1.52,0.83 2.61,0.83 1.16,0 2.03,-0.25 2.62,-0.74 0.59,-0.49 0.89,-1.07 0.89,-1.72 0,-0.43 -0.13,-0.79 -0.37,-1.09 -0.25,-0.29 -0.68,-0.55 -1.3,-0.77 -0.42,-0.15 -1.38,-0.41 -2.88,-0.78 -1.93,-0.48 -3.28,-1.08 -4.06,-1.78 -1.1,-0.99 -1.64,-2.19 -1.64,-3.61 0,-0.92 0.25,-1.77 0.77,-2.57 0.51,-0.8 1.25,-1.4 2.23,-1.82 0.97,-0.41 2.13,-0.62 3.51,-0.62 2.24,0 3.92,0.49 5.05,1.49 1.14,1 1.73,2.32 1.79,3.98l-3.63 0.13c-0.15,-0.93 -0.48,-1.59 -0.99,-1.99 -0.5,-0.41 -1.26,-0.61 -2.27,-0.61 -1.04,0 -1.86,0.22 -2.44,0.65 -0.38,0.28 -0.57,0.65 -0.57,1.11 0,0.43 0.18,0.79 0.53,1.09 0.46,0.39 1.56,0.79 3.32,1.21 1.75,0.41 3.05,0.84 3.88,1.28 0.85,0.45 1.5,1.05 1.98,1.82 0.47,0.78 0.71,1.73 0.71,2.85 0,1.03 -0.28,1.99 -0.85,2.89 -0.57,0.89 -1.38,1.56 -2.42,1.99 -1.04,0.44 -2.34,0.66 -3.9,0.66 -2.26,0 -4,-0.52 -5.21,-1.57 -1.21,-1.04 -1.93,-2.56 -2.17,-4.56z" />
                                <path class="fil23"
                                    d="M1056.24 1883.4l6.59 0c1.49,0 2.62,0.11 3.4,0.34 1.05,0.31 1.95,0.86 2.69,1.65 0.75,0.79 1.32,1.75 1.71,2.9 0.39,1.14 0.58,2.55 0.58,4.23 0,1.47 -0.18,2.74 -0.55,3.81 -0.44,1.3 -1.08,2.36 -1.91,3.16 -0.62,0.61 -1.47,1.09 -2.53,1.43 -0.8,0.25 -1.86,0.38 -3.19,0.38l-6.79 0 0 -17.9zm3.62 3.02l0 11.85 2.69 0c1.01,0 1.73,-0.06 2.18,-0.17 0.58,-0.14 1.07,-0.39 1.45,-0.74 0.39,-0.35 0.7,-0.93 0.94,-1.73 0.25,-0.8 0.37,-1.89 0.37,-3.28 0,-1.38 -0.12,-2.44 -0.37,-3.18 -0.24,-0.74 -0.58,-1.32 -1.02,-1.73 -0.44,-0.42 -0.99,-0.7 -1.67,-0.85 -0.5,-0.11 -1.48,-0.17 -2.95,-0.17l-1.62 0zm18.66 0.33l-2.15 0 -3.38 -3.65 3.83 0 1.7 3.65zm3.15 8.75l3.52 -0.35c0.22,1.18 0.64,2.04 1.29,2.59 0.64,0.56 1.51,0.83 2.61,0.83 1.16,0 2.03,-0.24 2.62,-0.73 0.59,-0.5 0.88,-1.07 0.88,-1.73 0,-0.42 -0.12,-0.78 -0.37,-1.08 -0.24,-0.3 -0.68,-0.56 -1.29,-0.77 -0.42,-0.15 -1.38,-0.41 -2.88,-0.79 -1.93,-0.48 -3.29,-1.07 -4.06,-1.78 -1.1,-0.98 -1.65,-2.19 -1.65,-3.61 0,-0.91 0.26,-1.77 0.77,-2.56 0.52,-0.8 1.26,-1.41 2.23,-1.82 0.97,-0.42 2.14,-0.63 3.52,-0.63 2.23,0 3.92,0.5 5.05,1.49 1.13,1 1.73,2.33 1.78,3.99l-3.62 0.12c-0.16,-0.92 -0.48,-1.58 -0.99,-1.99 -0.5,-0.4 -1.26,-0.61 -2.27,-0.61 -1.04,0 -1.86,0.22 -2.45,0.65 -0.37,0.28 -0.57,0.65 -0.57,1.12 0,0.42 0.18,0.79 0.54,1.09 0.46,0.38 1.56,0.79 3.31,1.2 1.76,0.41 3.05,0.85 3.89,1.29 0.84,0.44 1.5,1.05 1.98,1.82 0.47,0.77 0.71,1.72 0.71,2.85 0,1.02 -0.28,1.99 -0.86,2.88 -0.57,0.9 -1.37,1.57 -2.41,2 -1.04,0.44 -2.34,0.65 -3.9,0.65 -2.26,0 -4,-0.52 -5.21,-1.56 -1.21,-1.04 -1.93,-2.57 -2.17,-4.56zm24.57 -12.1l6.59 0c1.49,0 2.62,0.11 3.4,0.34 1.05,0.31 1.95,0.86 2.69,1.65 0.75,0.79 1.32,1.75 1.71,2.9 0.39,1.14 0.58,2.55 0.58,4.23 0,1.47 -0.18,2.74 -0.54,3.81 -0.45,1.3 -1.09,2.36 -1.92,3.16 -0.62,0.61 -1.47,1.09 -2.53,1.43 -0.8,0.25 -1.86,0.38 -3.19,0.38l-6.79 0 0 -17.9zm3.62 3.02l0 11.85 2.69 0c1.01,0 1.73,-0.06 2.18,-0.17 0.58,-0.14 1.07,-0.39 1.45,-0.74 0.39,-0.35 0.7,-0.93 0.94,-1.73 0.25,-0.8 0.37,-1.89 0.37,-3.28 0,-1.38 -0.12,-2.44 -0.37,-3.18 -0.24,-0.74 -0.58,-1.32 -1.02,-1.73 -0.44,-0.42 -0.99,-0.7 -1.66,-0.85 -0.5,-0.11 -1.49,-0.17 -2.96,-0.17l-1.62 0zm30.56 14.88l-3.91 0 -1.54 -4.08 -7.18 0 -1.49 4.08 -3.83 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.63 -7.1l-2.48 -6.63 -2.42 6.63 4.9 0zm8.51 7.1l0 -17.9 5.43 0 3.21 12.21 3.17 -12.21 5.44 0 0 17.9 -3.35 0 -0.01 -14.09 -3.53 14.09 -3.49 0 -3.51 -14.09 -0.01 14.09 -3.35 0zm37 0l-3.91 0 -1.54 -4.08 -7.18 0 -1.49 4.08 -3.83 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.63 -7.1l-2.48 -6.63 -2.42 6.63 4.9 0zm10.73 7.1l0 -14.88 -5.3 0 0 -3.02 14.2 0 0 3.02 -5.28 0 0 14.88 -3.62 0z" />
                                <path class="fil23"
                                    d="M811.78 1776.3l0 -3.02 7.78 0 0 7.14c-0.75,0.73 -1.85,1.38 -3.29,1.94 -1.43,0.56 -2.89,0.84 -4.36,0.84 -1.87,0 -3.5,-0.39 -4.89,-1.18 -1.39,-0.79 -2.44,-1.92 -3.14,-3.38 -0.7,-1.46 -1.05,-3.06 -1.05,-4.78 0,-1.86 0.4,-3.52 1.17,-4.98 0.79,-1.45 1.93,-2.56 3.43,-3.34 1.15,-0.59 2.58,-0.89 4.29,-0.89 2.22,0 3.96,0.47 5.21,1.4 1.24,0.94 2.05,2.22 2.4,3.87l-3.6 0.68c-0.24,-0.88 -0.72,-1.58 -1.42,-2.09 -0.69,-0.51 -1.55,-0.76 -2.6,-0.76 -1.57,0 -2.83,0.5 -3.75,1.5 -0.93,1.01 -1.4,2.5 -1.4,4.47 0,2.13 0.47,3.72 1.41,4.78 0.95,1.07 2.18,1.6 3.71,1.6 0.75,0 1.51,-0.15 2.27,-0.45 0.76,-0.29 1.41,-0.65 1.96,-1.08l0 -2.27 -4.13 0zm11 6.58l0 -17.91 3.63 0 0 17.91 -3.63 0zm6.32 -8.85c0,-1.82 0.28,-3.35 0.82,-4.6 0.41,-0.91 0.96,-1.73 1.67,-2.45 0.7,-0.73 1.47,-1.27 2.31,-1.62 1.12,-0.47 2.41,-0.71 3.86,-0.71 2.65,0 4.75,0.82 6.34,2.46 1.58,1.64 2.38,3.92 2.38,6.84 0,2.9 -0.79,5.16 -2.36,6.8 -1.57,1.63 -3.68,2.45 -6.31,2.45 -2.66,0 -4.78,-0.81 -6.35,-2.44 -1.57,-1.63 -2.36,-3.87 -2.36,-6.73zm3.73 -0.12c0,2.03 0.47,3.57 1.4,4.62 0.94,1.05 2.13,1.57 3.58,1.57 1.44,0 2.62,-0.52 3.55,-1.56 0.93,-1.04 1.39,-2.6 1.39,-4.68 0,-2.05 -0.45,-3.58 -1.35,-4.59 -0.9,-1.02 -2.1,-1.52 -3.59,-1.52 -1.5,0 -2.7,0.51 -3.61,1.53 -0.92,1.03 -1.37,2.57 -1.37,4.63zm21.05 8.97l-6.41 -17.91 3.92 0 4.54 13.26 4.37 -13.26 3.85 0 -6.37 17.91 -3.9 0zm26.36 0l-3.9 0 -1.55 -4.08 -7.18 0 -1.48 4.08 -3.84 0 6.95 -17.91 3.83 0 7.17 17.91zm-6.62 -7.1l-2.49 -6.63 -2.42 6.63 4.91 0zm8.55 7.1l0 -17.91 3.51 0 7.37 12 0 -12 3.35 0 0 17.91 -3.62 0 -7.26 -11.77 0 11.77 -3.35 0zm18.06 0l0 -17.91 13.25 0 0 3.03 -9.63 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.98 0 0 3.03 -13.6 0zm-85.89 18.08l0 -3.03 7.77 0 0 7.15c-0.75,0.73 -1.85,1.38 -3.29,1.94 -1.43,0.56 -2.88,0.84 -4.36,0.84 -1.87,0 -3.5,-0.39 -4.89,-1.18 -1.39,-0.79 -2.43,-1.92 -3.13,-3.38 -0.7,-1.46 -1.05,-3.06 -1.05,-4.78 0,-1.87 0.39,-3.52 1.17,-4.98 0.78,-1.45 1.92,-2.57 3.43,-3.34 1.15,-0.6 2.57,-0.89 4.28,-0.89 2.22,0 3.96,0.46 5.21,1.4 1.24,0.93 2.05,2.22 2.41,3.87l-3.6 0.68c-0.25,-0.88 -0.73,-1.58 -1.43,-2.09 -0.69,-0.51 -1.55,-0.76 -2.6,-0.76 -1.57,0 -2.82,0.5 -3.75,1.5 -0.93,1.01 -1.4,2.49 -1.4,4.46 0,2.13 0.47,3.73 1.41,4.79 0.95,1.06 2.18,1.6 3.71,1.6 0.76,0 1.51,-0.15 2.27,-0.45 0.76,-0.29 1.41,-0.66 1.96,-1.08l0 -2.27 -4.12 0zm11.12 6.57l0 -17.9 13.25 0 0 3.03 -9.63 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.98 0 0 3.02 -13.6 0zm16.67 0l0 -17.9 3.51 0 7.37 12 0 -12 3.35 0 0 17.9 -3.62 0 -7.26 -11.76 0 11.76 -3.35 0zm22.08 0l0 -14.87 -5.3 0 0 -3.03 14.2 0 0 3.03 -5.27 0 0 14.87 -3.63 0zm11.12 0l0 -17.9 3.63 0 0 17.9 -3.63 0zm7.17 0l0 -17.75 3.63 0 0 14.73 8.97 0 0 3.02 -12.6 0zm15.17 0l0 -17.9 13.26 0 0 3.03 -9.63 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.97 0 0 3.02 -13.6 0z" />
                                <path class="fil23"
                                    d="M1093.15 1690.69l0 -23.87 4.83 0 0 23.87 -4.83 0zm9.49 0l0 -23.87 4.84 0 0 10.57 9.74 -10.57 6.47 0 -9 9.3 9.47 14.57 -6.23 0 -6.57 -11.21 -3.88 3.99 0 7.22 -4.84 0zm24.08 0l0 -23.87 4.83 0 0 10.57 9.74 -10.57 6.48 0 -9.01 9.3 9.47 14.57 -6.23 0 -6.57 -11.21 -3.88 3.99 0 7.22 -4.83 0zm23.83 0l0 -23.87 4.84 0 0 23.87 -4.84 0z" />
                                <path class="fil23"
                                    d="M817.18 1690.71l0 -23.67 4.83 0 0 19.63 11.97 0 0 4.04 -16.8 0zm20.06 0l0 -23.87 4.84 0 0 23.87 -4.84 0zm24.7 -8.8l4.66 1.43c-0.71,2.63 -1.91,4.58 -3.57,5.85 -1.67,1.28 -3.78,1.92 -6.34,1.92 -3.18,0 -5.78,-1.09 -7.83,-3.25 -2.03,-2.17 -3.06,-5.13 -3.06,-8.89 0,-3.98 1.03,-7.06 3.08,-9.26 2.05,-2.2 4.75,-3.3 8.1,-3.3 2.92,0 5.29,0.86 7.11,2.59 1.09,1.02 1.9,2.49 2.45,4.41l-4.77 1.13c-0.28,-1.23 -0.87,-2.21 -1.77,-2.93 -0.9,-0.72 -1.99,-1.07 -3.26,-1.07 -1.78,0 -3.21,0.63 -4.31,1.9 -1.11,1.27 -1.66,3.33 -1.66,6.17 0,3.01 0.54,5.16 1.63,6.44 1.09,1.28 2.5,1.92 4.24,1.92 1.28,0 2.39,-0.4 3.31,-1.22 0.92,-0.82 1.59,-2.09 1.99,-3.84zm8.8 8.8l0 -23.87 4.83 0 0 9.4 9.41 0 0 -9.4 4.83 0 0 23.87 -4.83 0 0 -10.44 -9.41 0 0 10.44 -4.83 0zm23.91 0l0 -23.87 4.83 0 0 23.87 -4.83 0z" />
                                <path class="fil23"
                                    d="M795.71 1592.98l-15.38 0 0 -11.38 2.6 0 0 8.27 3.41 0 0 -7.69 2.6 0 0 7.69 4.17 0 0 -8.57 2.6 0 0 11.68zm0 -14.28l-15.38 0 0 -4.66 10.49 -2.76 -10.49 -2.72 0 -4.68 15.38 0 0 2.88 -12.11 0.01 12.11 3.03 0 2.99 -12.11 3.02 12.11 0.01 0 2.88zm0 -17.93l-15.38 0 0 -4.98c0,-1.89 0.07,-3.12 0.23,-3.69 0.23,-0.88 0.73,-1.62 1.5,-2.21 0.78,-0.6 1.78,-0.9 3,-0.9 0.94,0 1.74,0.18 2.38,0.52 0.64,0.34 1.15,0.77 1.52,1.3 0.36,0.53 0.61,1.06 0.73,1.61 0.14,0.74 0.22,1.81 0.22,3.21l0 2.02 5.8 0 0 3.12zm-12.78 -3.12l4.38 0 0 -1.69c0,-1.22 -0.08,-2.04 -0.25,-2.45 -0.16,-0.41 -0.41,-0.73 -0.75,-0.96 -0.35,-0.24 -0.75,-0.35 -1.2,-0.35 -0.57,0 -1.03,0.16 -1.39,0.49 -0.37,0.32 -0.6,0.74 -0.69,1.24 -0.07,0.37 -0.1,1.11 -0.1,2.23l0 1.49zm12.78 -11.1l-15.38 0 0 -3.12 15.38 0 0 3.12zm0 -6.08l-15.38 0 0 -6.54c0,-1.64 0.14,-2.84 0.41,-3.58 0.28,-0.75 0.77,-1.35 1.47,-1.79 0.71,-0.45 1.52,-0.68 2.43,-0.68 1.15,0 2.11,0.34 2.86,1.02 0.75,0.67 1.22,1.68 1.42,3.03 0.39,-0.67 0.82,-1.22 1.29,-1.65 0.47,-0.44 1.3,-1.03 2.5,-1.77l3 -1.87 0 3.71 -3.36 2.23c-1.19,0.8 -1.95,1.34 -2.26,1.64 -0.3,0.29 -0.52,0.61 -0.63,0.93 -0.12,0.34 -0.18,0.86 -0.18,1.58l0 0.63 6.43 0 0 3.11zm-8.87 -3.11l0 -2.3c0,-1.49 -0.07,-2.42 -0.19,-2.79 -0.13,-0.37 -0.35,-0.66 -0.66,-0.87 -0.3,-0.21 -0.69,-0.32 -1.15,-0.32 -0.52,0 -0.94,0.14 -1.26,0.42 -0.32,0.28 -0.52,0.67 -0.6,1.17 -0.04,0.25 -0.05,1.01 -0.05,2.26l0 2.43 3.91 0zm8.87 -12.4l-15.38 0 0 -11.38 2.6 0 0 8.26 3.41 0 0 -7.68 2.6 0 0 7.68 4.17 0 0 -8.57 2.6 0 0 11.69z" />
                                <path class="fil23"
                                    d="M904.9 1607.21l-15.38 0 0 -4.98c0,-1.89 0.08,-3.11 0.23,-3.69 0.24,-0.88 0.74,-1.62 1.51,-2.21 0.77,-0.59 1.77,-0.89 3,-0.89 0.94,0 1.73,0.17 2.38,0.51 0.64,0.35 1.15,0.78 1.52,1.3 0.36,0.53 0.6,1.07 0.72,1.61 0.15,0.74 0.22,1.81 0.22,3.22l0 2.02 5.8 0 0 3.11zm-12.78 -3.11l4.38 0 0 -1.7c0,-1.22 -0.08,-2.03 -0.24,-2.44 -0.16,-0.41 -0.41,-0.74 -0.76,-0.97 -0.34,-0.23 -0.74,-0.35 -1.2,-0.35 -0.56,0 -1.02,0.17 -1.39,0.49 -0.36,0.33 -0.59,0.74 -0.68,1.25 -0.07,0.36 -0.11,1.11 -0.11,2.22l0 1.5zm12.78 -23.48l0 3.36 -3.5 1.33 0 6.16 3.5 1.28 0 3.29 -15.38 -5.97 0 -3.29 15.38 -6.16zm-6.1 5.69l-5.69 2.14 5.69 2.08 0 -4.22zm6.1 -7.35l-15.38 0 0 -3.01 10.31 -6.33 -10.31 0 0 -2.88 15.38 0 0 3.12 -10.11 6.23 10.11 0 0 2.87zm-15.38 -15.51l0 -5.66c0,-1.28 0.1,-2.25 0.3,-2.92 0.26,-0.9 0.73,-1.67 1.42,-2.31 0.67,-0.65 1.5,-1.13 2.49,-1.47 0.98,-0.33 2.19,-0.5 3.63,-0.5 1.27,0 2.36,0.15 3.27,0.47 1.12,0.38 2.03,0.93 2.72,1.64 0.53,0.54 0.93,1.27 1.23,2.18 0.22,0.68 0.32,1.6 0.32,2.74l0 5.83 -15.38 0zm2.6 -3.11l10.18 0 0 -2.31c0,-0.86 -0.05,-1.48 -0.14,-1.87 -0.13,-0.5 -0.34,-0.92 -0.64,-1.25 -0.3,-0.33 -0.8,-0.6 -1.49,-0.81 -0.68,-0.21 -1.62,-0.31 -2.81,-0.31 -1.19,0 -2.1,0.1 -2.74,0.31 -0.64,0.21 -1.13,0.5 -1.49,0.88 -0.35,0.38 -0.6,0.85 -0.72,1.43 -0.1,0.43 -0.15,1.28 -0.15,2.54l0 1.39zm5.19 -11.75c-1.57,0 -2.89,-0.24 -3.96,-0.71 -0.78,-0.35 -1.49,-0.82 -2.11,-1.43 -0.62,-0.61 -1.08,-1.27 -1.39,-1.99 -0.4,-0.96 -0.61,-2.06 -0.61,-3.32 0,-2.27 0.71,-4.08 2.12,-5.44 1.41,-1.36 3.37,-2.04 5.88,-2.04 2.48,0 4.43,0.68 5.83,2.02 1.41,1.35 2.11,3.16 2.11,5.42 0,2.29 -0.7,4.11 -2.1,5.46 -1.39,1.35 -3.32,2.03 -5.77,2.03zm-0.11 -3.2c1.75,0 3.07,-0.41 3.97,-1.21 0.9,-0.81 1.35,-1.83 1.35,-3.07 0,-1.24 -0.45,-2.26 -1.34,-3.06 -0.9,-0.79 -2.23,-1.19 -4.02,-1.19 -1.77,0 -3.08,0.39 -3.95,1.16 -0.87,0.78 -1.3,1.8 -1.3,3.09 0,1.28 0.44,2.31 1.32,3.1 0.88,0.78 2.2,1.18 3.97,1.18zm7.7 -14.16l-15.38 0 0 -6.54c0,-1.64 0.14,-2.83 0.42,-3.58 0.27,-0.75 0.76,-1.34 1.47,-1.79 0.71,-0.45 1.51,-0.67 2.42,-0.67 1.16,0 2.11,0.33 2.86,1.01 0.76,0.68 1.23,1.69 1.42,3.03 0.4,-0.67 0.82,-1.22 1.29,-1.65 0.47,-0.44 1.31,-1.03 2.5,-1.76l3 -1.88 0 3.71 -3.36 2.23c-1.19,0.8 -1.94,1.35 -2.25,1.64 -0.31,0.3 -0.52,0.61 -0.64,0.94 -0.11,0.33 -0.17,0.85 -0.17,1.57l0 0.63 6.42 0 0 3.11zm-8.87 -3.11l0 -2.3c0,-1.49 -0.06,-2.41 -0.19,-2.79 -0.12,-0.37 -0.34,-0.66 -0.65,-0.87 -0.31,-0.21 -0.69,-0.31 -1.16,-0.31 -0.52,0 -0.93,0.14 -1.25,0.41 -0.32,0.28 -0.52,0.67 -0.6,1.17 -0.04,0.25 -0.06,1.01 -0.06,2.27l0 2.42 3.91 0zm8.87 -26.25l0 3.35 -3.5 1.33 0 6.17 3.5 1.28 0 3.29 -15.38 -5.97 0 -3.29 15.38 -6.16zm-6.1 5.69l-5.69 2.14 5.69 2.07 0 -4.21z" />
                                <path class="fil23"
                                    d="M1114.85 1580.09l0 3.25 -3.39 1.29 0 5.98 3.39 1.24 0 3.2 -14.91 -5.79 0 -3.19 14.91 -5.98zm-5.91 5.52l-5.52 2.07 5.52 2.02 0 -4.09zm5.91 -7.13l-14.91 0 0 -2.92 9.99 -6.14 -9.99 0 0 -2.79 14.91 0 0 3.01 -9.8 6.05 9.8 0 0 2.79zm0 -15.04l-14.91 0 0 -11.04 2.52 0 0 8.02 3.31 0 0 -7.46 2.52 0 0 7.46 4.04 0 0 -8.32 2.52 0 0 11.34zm0 -13.98l-14.79 0 0 -3.02 12.27 0 0 -7.48 2.52 0 0 10.5zm0 -12.73l-14.79 0 0 -3.02 12.27 0 0 -7.48 2.52 0 0 10.5zm0 -12.53l-14.91 0 0 -3.03 14.91 0 0 3.03z" />
                                <path class="fil23"
                                    d="M1204.76 1574.46l-2.59 0 0 -6.67 6.13 0c0.64,0.64 1.19,1.58 1.67,2.82 0.48,1.23 0.72,2.48 0.72,3.75 0,1.6 -0.33,3.01 -1.01,4.2 -0.68,1.19 -1.65,2.09 -2.9,2.69 -1.26,0.6 -2.63,0.91 -4.11,0.91 -1.6,0 -3.03,-0.34 -4.28,-1.01 -1.24,-0.67 -2.2,-1.65 -2.87,-2.95 -0.51,-0.99 -0.77,-2.21 -0.77,-3.68 0,-1.91 0.41,-3.4 1.21,-4.47 0.8,-1.07 1.91,-1.76 3.33,-2.07l0.58 3.09c-0.76,0.22 -1.36,0.62 -1.8,1.22 -0.43,0.6 -0.65,1.34 -0.65,2.24 0,1.35 0.43,2.43 1.29,3.23 0.86,0.79 2.14,1.19 3.84,1.19 1.82,0 3.2,-0.4 4.11,-1.21 0.91,-0.81 1.37,-1.87 1.37,-3.19 0,-0.64 -0.13,-1.29 -0.38,-1.95 -0.26,-0.65 -0.57,-1.21 -0.93,-1.68l-1.96 0 0 3.54zm5.65 -9.64l-15.25 0 0 -3.11 12.65 0 0 -7.71 2.6 0 0 10.82zm-7.59 -12.39c-1.57,0 -2.89,-0.23 -3.96,-0.7 -0.78,-0.35 -1.48,-0.83 -2.11,-1.43 -0.62,-0.61 -1.08,-1.27 -1.39,-1.99 -0.4,-0.96 -0.61,-2.07 -0.61,-3.32 0,-2.27 0.71,-4.08 2.12,-5.44 1.41,-1.36 3.37,-2.04 5.88,-2.04 2.48,0 4.43,0.67 5.83,2.02 1.41,1.35 2.11,3.16 2.11,5.42 0,2.29 -0.7,4.11 -2.1,5.46 -1.39,1.35 -3.32,2.02 -5.77,2.02zm-0.11 -3.2c1.75,0 3.07,-0.4 3.97,-1.21 0.9,-0.8 1.35,-1.83 1.35,-3.06 0,-1.25 -0.45,-2.26 -1.34,-3.06 -0.89,-0.8 -2.23,-1.19 -4.02,-1.19 -1.76,0 -3.08,0.38 -3.95,1.16 -0.87,0.77 -1.3,1.8 -1.3,3.09 0,1.28 0.44,2.31 1.32,3.1 0.88,0.78 2.2,1.17 3.97,1.17zm22.69 50.51l-0.31 -3.03c1.02,-0.18 1.76,-0.55 2.24,-1.1 0.47,-0.56 0.71,-1.31 0.71,-2.25 0,-0.99 -0.21,-1.74 -0.64,-2.25 -0.42,-0.5 -0.91,-0.76 -1.48,-0.76 -0.36,0 -0.67,0.11 -0.93,0.32 -0.25,0.21 -0.48,0.58 -0.66,1.11 -0.13,0.37 -0.35,1.19 -0.67,2.48 -0.42,1.65 -0.93,2.82 -1.53,3.49 -0.85,0.94 -1.89,1.41 -3.11,1.41 -0.78,0 -1.52,-0.22 -2.2,-0.66 -0.68,-0.45 -1.2,-1.09 -1.56,-1.92 -0.36,-0.83 -0.54,-1.84 -0.54,-3.02 0,-1.92 0.43,-3.37 1.28,-4.34 0.86,-0.97 2,-1.48 3.42,-1.53l0.11 3.11c-0.79,0.14 -1.36,0.42 -1.71,0.85 -0.35,0.43 -0.52,1.09 -0.52,1.95 0,0.9 0.18,1.6 0.56,2.1 0.24,0.33 0.55,0.49 0.96,0.49 0.36,0 0.67,-0.15 0.93,-0.46 0.33,-0.39 0.68,-1.34 1.04,-2.84 0.35,-1.51 0.72,-2.62 1.1,-3.34 0.38,-0.73 0.9,-1.29 1.57,-1.7 0.66,-0.41 1.47,-0.61 2.44,-0.61 0.89,0 1.71,0.24 2.48,0.73 0.77,0.49 1.34,1.18 1.72,2.08 0.37,0.89 0.56,2.01 0.56,3.35 0,1.94 -0.45,3.43 -1.35,4.47 -0.89,1.04 -2.2,1.67 -3.91,1.87zm4.98 -18.6l-12.78 0 0 4.55 -2.6 0 0 -12.2 2.6 0 0 4.53 12.78 0 0 3.12zm-15.38 -9.67l0 -3.11 8.33 0c1.33,0 2.18,-0.04 2.57,-0.11 0.63,-0.14 1.14,-0.45 1.52,-0.94 0.39,-0.5 0.57,-1.18 0.57,-2.04 0,-0.87 -0.17,-1.52 -0.54,-1.97 -0.36,-0.44 -0.8,-0.71 -1.32,-0.8 -0.53,-0.09 -1.4,-0.13 -2.62,-0.13l-8.51 0 0 -3.12 8.09 0c1.84,0 3.15,0.09 3.91,0.25 0.77,0.17 1.41,0.48 1.94,0.93 0.52,0.45 0.94,1.05 1.25,1.8 0.31,0.76 0.47,1.74 0.47,2.95 0,1.47 -0.17,2.58 -0.51,3.33 -0.34,0.76 -0.78,1.35 -1.32,1.79 -0.55,0.44 -1.11,0.73 -1.71,0.87 -0.88,0.21 -2.19,0.3 -3.91,0.3l-8.21 0zm0 -15.51l0 -5.66c0,-1.28 0.1,-2.25 0.29,-2.92 0.27,-0.9 0.74,-1.67 1.42,-2.31 0.68,-0.65 1.51,-1.14 2.49,-1.47 0.98,-0.34 2.2,-0.5 3.64,-0.5 1.26,0 2.35,0.15 3.27,0.47 1.12,0.38 2.03,0.93 2.72,1.64 0.52,0.54 0.93,1.27 1.22,2.18 0.22,0.68 0.33,1.6 0.33,2.74l0 5.83 -15.38 0zm2.6 -3.11l10.18 0 0 -2.31c0,-0.86 -0.05,-1.49 -0.15,-1.87 -0.12,-0.5 -0.34,-0.92 -0.64,-1.25 -0.3,-0.33 -0.79,-0.6 -1.48,-0.81 -0.69,-0.21 -1.63,-0.31 -2.82,-0.31 -1.19,0 -2.1,0.1 -2.73,0.31 -0.64,0.21 -1.13,0.5 -1.49,0.88 -0.36,0.38 -0.6,0.85 -0.72,1.43 -0.1,0.43 -0.15,1.28 -0.15,2.54l0 1.39zm12.78 -12.29l-15.38 0 0 -3.12 15.38 0 0 3.12zm-7.6 -5.43c-1.57,0 -2.88,-0.24 -3.95,-0.71 -0.78,-0.34 -1.49,-0.82 -2.11,-1.43 -0.63,-0.6 -1.09,-1.27 -1.39,-1.99 -0.41,-0.96 -0.61,-2.06 -0.61,-3.31 0,-2.27 0.71,-4.09 2.11,-5.45 1.41,-1.36 3.37,-2.04 5.88,-2.04 2.49,0 4.44,0.68 5.84,2.03 1.41,1.35 2.11,3.15 2.11,5.41 0,2.29 -0.7,4.11 -2.1,5.46 -1.4,1.35 -3.32,2.03 -5.78,2.03zm-0.1 -3.2c1.74,0 3.06,-0.41 3.97,-1.21 0.89,-0.81 1.34,-1.83 1.34,-3.07 0,-1.24 -0.44,-2.26 -1.33,-3.06 -0.9,-0.79 -2.24,-1.19 -4.02,-1.19 -1.77,0 -3.09,0.39 -3.95,1.16 -0.87,0.78 -1.31,1.8 -1.31,3.09 0,1.28 0.44,2.32 1.32,3.1 0.88,0.78 2.21,1.18 3.98,1.18z" />
                                <path class="fil23"
                                    d="M1176.28 1281.55l0 -14.92 11.04 0 0 2.53 -8.02 0 0 3.31 7.45 0 0 2.52 -7.45 0 0 4.04 8.31 0 0 2.52 -11.33 0zm13.89 -14.92l3.02 0 0 8.09c0,1.28 0.04,2.11 0.11,2.49 0.13,0.61 0.43,1.11 0.91,1.47 0.48,0.37 1.14,0.56 1.97,0.56 0.85,0 1.49,-0.17 1.92,-0.53 0.43,-0.35 0.68,-0.77 0.77,-1.28 0.09,-0.51 0.13,-1.36 0.13,-2.54l0 -8.26 3.02 0 0 7.85c0,1.79 -0.07,3.06 -0.24,3.8 -0.16,0.74 -0.46,1.36 -0.9,1.87 -0.43,0.51 -1.01,0.91 -1.74,1.22 -0.74,0.3 -1.69,0.45 -2.87,0.45 -1.42,0 -2.49,-0.16 -3.22,-0.49 -0.74,-0.33 -1.32,-0.76 -1.74,-1.29 -0.43,-0.52 -0.71,-1.07 -0.84,-1.65 -0.2,-0.86 -0.3,-2.12 -0.3,-3.79l0 -7.97zm15.05 14.92l0 -14.92 6.34 0c1.59,0 2.75,0.14 3.47,0.41 0.73,0.27 1.31,0.74 1.74,1.42 0.44,0.69 0.65,1.47 0.65,2.36 0,1.12 -0.32,2.04 -0.98,2.77 -0.66,0.73 -1.63,1.19 -2.94,1.38 0.65,0.38 1.18,0.79 1.6,1.25 0.43,0.45 1,1.26 1.71,2.42l1.82 2.91 -3.6 0 -2.16 -3.26c-0.77,-1.15 -1.3,-1.88 -1.59,-2.18 -0.29,-0.3 -0.59,-0.51 -0.91,-0.62 -0.32,-0.11 -0.83,-0.17 -1.52,-0.17l-0.61 0 0 6.23 -3.02 0zm3.02 -8.6l2.23 0c1.44,0 2.34,-0.07 2.7,-0.19 0.36,-0.12 0.64,-0.33 0.84,-0.63 0.21,-0.3 0.31,-0.67 0.31,-1.12 0,-0.5 -0.14,-0.91 -0.4,-1.22 -0.27,-0.31 -0.65,-0.5 -1.14,-0.58 -0.24,-0.04 -0.97,-0.05 -2.19,-0.05l-2.35 0 0 3.79zm11.39 1.23c0,-1.52 0.23,-2.8 0.69,-3.83 0.34,-0.76 0.8,-1.44 1.39,-2.05 0.58,-0.6 1.23,-1.05 1.93,-1.35 0.93,-0.39 2,-0.59 3.21,-0.59 2.21,0 3.96,0.69 5.29,2.05 1.31,1.37 1.97,3.27 1.97,5.7 0,2.42 -0.65,4.31 -1.96,5.67 -1.31,1.36 -3.06,2.04 -5.25,2.04 -2.22,0 -3.99,-0.67 -5.3,-2.03 -1.31,-1.36 -1.97,-3.23 -1.97,-5.61zm3.11 -0.1c0,1.69 0.39,2.98 1.17,3.85 0.78,0.87 1.78,1.31 2.98,1.31 1.2,0 2.19,-0.43 2.96,-1.3 0.77,-0.87 1.16,-2.17 1.16,-3.9 0,-1.71 -0.37,-2.99 -1.13,-3.83 -0.75,-0.84 -1.74,-1.26 -2.99,-1.26 -1.24,0 -2.25,0.42 -3.01,1.27 -0.76,0.86 -1.14,2.14 -1.14,3.86zm13.68 7.47l0 -14.92 4.53 0 2.67 10.18 2.64 -10.18 4.54 0 0 14.92 -2.79 0 -0.01 -11.74 -2.94 11.74 -2.91 0 -2.92 -11.74 -0.02 11.74 -2.79 0zm30.84 0l-3.26 0 -1.28 -3.39 -5.99 0 -1.24 3.39 -3.19 0 5.79 -14.92 3.19 0 5.98 14.92zm-5.52 -5.91l-2.08 -5.53 -2.01 5.53 4.09 0zm14.06 0.43l0 -2.52 6.48 0 0 5.95c-0.63,0.62 -1.54,1.16 -2.74,1.62 -1.19,0.47 -2.41,0.7 -3.63,0.7 -1.56,0 -2.92,-0.32 -4.08,-0.98 -1.16,-0.66 -2.03,-1.6 -2.61,-2.82 -0.58,-1.22 -0.88,-2.55 -0.88,-3.98 0,-1.55 0.33,-2.94 0.98,-4.15 0.65,-1.21 1.6,-2.14 2.86,-2.78 0.96,-0.5 2.14,-0.75 3.57,-0.75 1.85,0 3.29,0.39 4.34,1.17 1.03,0.78 1.7,1.86 2,3.23l-3 0.56c-0.21,-0.73 -0.6,-1.31 -1.18,-1.74 -0.58,-0.42 -1.3,-0.63 -2.17,-0.63 -1.31,0 -2.36,0.41 -3.13,1.25 -0.77,0.84 -1.16,2.08 -1.16,3.72 0,1.77 0.39,3.1 1.17,3.99 0.79,0.88 1.82,1.33 3.09,1.33 0.63,0 1.26,-0.13 1.9,-0.37 0.63,-0.25 1.17,-0.55 1.63,-0.91l0 -1.89 -3.44 0zm9.16 5.48l0 -14.92 3.03 0 0 14.92 -3.03 0zm19.33 0l-3.25 0 -1.29 -3.39 -5.98 0 -1.24 3.39 -3.19 0 5.79 -14.92 3.19 0 5.97 14.92zm-5.52 -5.91l-2.07 -5.53 -2.01 5.53 4.08 0z" />
                                <path class="fil23"
                                    d="M995.84 1286.03l0 -23.87 7.24 0 4.28 16.28 4.23 -16.28 7.25 0 0 23.87 -4.47 0 -0.01 -18.79 -4.71 18.79 -4.64 0 -4.68 -18.79 -0.02 18.79 -4.47 0zm27.67 0l0 -23.87 4.83 0 0 23.87 -4.83 0zm9.43 0l0 -23.87 4.67 0 9.83 15.99 0 -15.99 4.46 0 0 23.87 -4.83 0 -9.67 -15.69 0 15.69 -4.46 0zm23.9 0l0 -23.87 4.83 0 0 23.87 -4.83 0zm8.16 -7.74l4.7 -0.46c0.29,1.57 0.85,2.72 1.71,3.46 0.86,0.74 2.03,1.1 3.49,1.1 1.54,0 2.71,-0.33 3.49,-0.98 0.78,-0.66 1.18,-1.42 1.18,-2.3 0,-0.57 -0.17,-1.05 -0.5,-1.45 -0.32,-0.39 -0.9,-0.73 -1.72,-1.02 -0.56,-0.2 -1.84,-0.55 -3.84,-1.05 -2.57,-0.64 -4.38,-1.43 -5.42,-2.37 -1.46,-1.32 -2.19,-2.92 -2.19,-4.82 0,-1.21 0.35,-2.36 1.03,-3.42 0.69,-1.06 1.68,-1.87 2.97,-2.42 1.3,-0.56 2.85,-0.83 4.69,-0.83 2.98,0 5.23,0.66 6.73,1.98 1.52,1.33 2.3,3.1 2.38,5.32l-4.83 0.16c-0.21,-1.23 -0.65,-2.11 -1.32,-2.65 -0.67,-0.54 -1.68,-0.81 -3.03,-0.81 -1.38,0 -2.47,0.28 -3.26,0.86 -0.5,0.37 -0.76,0.87 -0.76,1.49 0,0.57 0.24,1.05 0.72,1.45 0.6,0.52 2.08,1.05 4.42,1.61 2.33,0.55 4.06,1.12 5.18,1.71 1.12,0.6 2,1.4 2.63,2.43 0.64,1.03 0.95,2.3 0.95,3.8 0,1.37 -0.38,2.65 -1.14,3.85 -0.76,1.19 -1.83,2.08 -3.22,2.66 -1.39,0.58 -3.12,0.87 -5.19,0.87 -3.02,0 -5.34,-0.7 -6.95,-2.09 -1.62,-1.39 -2.58,-3.42 -2.9,-6.08zm22.5 -4.05c0,-2.44 0.37,-4.48 1.1,-6.14 0.53,-1.21 1.28,-2.31 2.22,-3.27 0.94,-0.97 1.97,-1.69 3.08,-2.16 1.49,-0.63 3.21,-0.94 5.15,-0.94 3.52,0 6.34,1.09 8.45,3.27 2.11,2.19 3.17,5.23 3.17,9.13 0,3.86 -1.05,6.88 -3.15,9.06 -2.09,2.18 -4.9,3.27 -8.4,3.27 -3.55,0 -6.38,-1.08 -8.47,-3.26 -2.1,-2.16 -3.15,-5.15 -3.15,-8.96zm4.97 -0.16c0,2.7 0.63,4.75 1.88,6.15 1.25,1.4 2.84,2.1 4.76,2.1 1.93,0 3.5,-0.7 4.74,-2.08 1.24,-1.39 1.85,-3.47 1.85,-6.24 0,-2.74 -0.6,-4.78 -1.8,-6.13 -1.2,-1.35 -2.8,-2.02 -4.79,-2.02 -1.99,0 -3.6,0.68 -4.81,2.04 -1.22,1.37 -1.83,3.43 -1.83,6.18z" />
                                <path class="fil23"
                                    d="M601.26 1213.99l0 -23.87 4.84 0 0 23.87 -4.84 0zm9.43 0l0 -23.87 4.68 0 9.82 15.99 0 -15.99 4.47 0 0 23.87 -4.83 0 -9.67 -15.69 0 15.69 -4.47 0zm29.44 0l0 -19.84 -7.07 0 0 -4.03 18.94 0 0 4.03 -7.04 0 0 19.84 -4.83 0zm14.99 0l0 -23.87 17.67 0 0 4.03 -12.83 0 0 5.3 11.93 0 0 4.04 -11.93 0 0 6.46 13.3 0 0 4.04 -18.14 0zm22.24 0l0 -23.87 10.15 0c2.55,0 4.4,0.22 5.56,0.64 1.16,0.43 2.08,1.19 2.78,2.29 0.69,1.1 1.04,2.35 1.04,3.76 0,1.79 -0.52,3.27 -1.57,4.44 -1.05,1.16 -2.62,1.9 -4.71,2.2 1.04,0.61 1.9,1.28 2.57,2 0.68,0.73 1.59,2.03 2.73,3.88l2.91 4.66 -5.76 0 -3.45 -5.21c-1.24,-1.85 -2.09,-3.02 -2.55,-3.5 -0.46,-0.48 -0.94,-0.82 -1.45,-0.99 -0.52,-0.18 -1.33,-0.27 -2.44,-0.27l-0.98 0 0 9.97 -4.83 0zm4.83 -13.77l3.57 0c2.31,0 3.75,-0.1 4.32,-0.29 0.58,-0.2 1.03,-0.54 1.35,-1.02 0.33,-0.47 0.49,-1.07 0.49,-1.79 0,-0.81 -0.21,-1.45 -0.64,-1.95 -0.43,-0.49 -1.03,-0.81 -1.81,-0.93 -0.4,-0.06 -1.57,-0.09 -3.52,-0.09l-3.76 0 0 6.07zm24.61 13.77l0 -19.84 -7.07 0 0 -4.03 18.93 0 0 4.03 -7.03 0 0 19.84 -4.83 0zm13.39 -11.79c0,-2.44 0.37,-4.48 1.09,-6.14 0.54,-1.21 1.29,-2.31 2.23,-3.27 0.94,-0.97 1.96,-1.69 3.08,-2.16 1.49,-0.63 3.2,-0.94 5.15,-0.94 3.52,0 6.33,1.09 8.45,3.27 2.11,2.19 3.17,5.23 3.17,9.13 0,3.86 -1.05,6.88 -3.15,9.06 -2.09,2.18 -4.9,3.27 -8.4,3.27 -3.55,0 -6.38,-1.08 -8.48,-3.26 -2.09,-2.16 -3.14,-5.15 -3.14,-8.96zm4.97 -0.16c0,2.7 0.62,4.75 1.87,6.15 1.25,1.4 2.84,2.1 4.77,2.1 1.92,0 3.5,-0.7 4.74,-2.08 1.23,-1.39 1.85,-3.47 1.85,-6.24 0,-2.74 -0.6,-4.78 -1.81,-6.13 -1.2,-1.35 -2.79,-2.02 -4.78,-2.02 -1.99,0 -3.6,0.68 -4.82,2.04 -1.21,1.37 -1.82,3.43 -1.82,6.18zm21.96 11.95l0 -23.87 7.72 0c2.93,0 4.84,0.12 5.73,0.36 1.36,0.36 2.51,1.13 3.43,2.33 0.92,1.2 1.38,2.75 1.38,4.65 0,1.47 -0.26,2.7 -0.79,3.7 -0.53,1 -1.21,1.78 -2.02,2.35 -0.82,0.57 -1.65,0.95 -2.5,1.13 -1.15,0.23 -2.81,0.35 -4.99,0.35l-3.13 0 0 9 -4.83 0zm4.83 -19.84l0 6.8 2.63 0c1.89,0 3.15,-0.12 3.79,-0.37 0.64,-0.25 1.14,-0.64 1.5,-1.18 0.36,-0.54 0.55,-1.15 0.55,-1.86 0,-0.88 -0.26,-1.59 -0.76,-2.16 -0.51,-0.57 -1.15,-0.92 -1.94,-1.07 -0.57,-0.1 -1.72,-0.16 -3.45,-0.16l-2.32 0z" />
                                <path class="fil23"
                                    d="M1001.29 1144.2l0 -14.92 2.92 0 6.14 9.99 0 -9.99 2.79 0 0 14.92 -3.02 0 -6.04 -9.81 0 9.81 -2.79 0zm28.48 0l-3.26 0 -1.28 -3.4 -5.99 0 -1.23 3.4 -3.2 0 5.79 -14.92 3.19 0 5.98 14.92zm-5.52 -5.92l-2.08 -5.52 -2.01 5.52 4.09 0zm8.94 5.92l0 -12.4 -4.42 0 0 -2.52 11.83 0 0 2.52 -4.39 0 0 12.4 -3.02 0zm9.26 0l0 -14.92 3.02 0 0 14.92 -3.02 0zm5.27 -7.37c0,-1.52 0.23,-2.8 0.68,-3.84 0.34,-0.76 0.81,-1.44 1.39,-2.04 0.59,-0.61 1.23,-1.06 1.93,-1.35 0.93,-0.39 2,-0.59 3.22,-0.59 2.2,0 3.96,0.68 5.28,2.05 1.32,1.36 1.98,3.26 1.98,5.7 0,2.41 -0.66,4.3 -1.97,5.66 -1.31,1.37 -3.06,2.05 -5.25,2.05 -2.22,0 -3.99,-0.68 -5.3,-2.04 -1.3,-1.35 -1.96,-3.22 -1.96,-5.6zm3.1 -0.1c0,1.69 0.4,2.97 1.18,3.84 0.78,0.88 1.77,1.31 2.97,1.31 1.21,0 2.19,-0.43 2.97,-1.3 0.77,-0.86 1.15,-2.16 1.15,-3.9 0,-1.71 -0.37,-2.98 -1.12,-3.82 -0.75,-0.85 -1.75,-1.27 -3,-1.27 -1.24,0 -2.24,0.43 -3,1.28 -0.76,0.85 -1.15,2.14 -1.15,3.86zm13.73 7.47l0 -14.92 2.92 0 6.14 9.99 0 -9.99 2.79 0 0 14.92 -3.01 0 -6.05 -9.81 0 9.81 -2.79 0zm28.48 0l-3.25 0 -1.29 -3.4 -5.98 0 -1.24 3.4 -3.2 0 5.8 -14.92 3.19 0 5.97 14.92zm-5.52 -5.92l-2.07 -5.52 -2.02 5.52 4.09 0zm7.21 5.92l0 -14.8 3.02 0 0 12.27 7.48 0 0 2.53 -10.5 0zm-85.39 4.44l3.02 0 0 9.46c0,1.23 -0.11,2.18 -0.33,2.85 -0.29,0.87 -0.82,1.57 -1.59,2.09 -0.76,0.53 -1.77,0.79 -3.03,0.79 -1.47,0 -2.6,-0.41 -3.39,-1.23 -0.8,-0.82 -1.2,-2.03 -1.2,-3.62l2.85 -0.34c0.03,0.86 0.16,1.46 0.37,1.81 0.32,0.53 0.81,0.8 1.47,0.8 0.67,0 1.14,-0.19 1.41,-0.58 0.28,-0.38 0.42,-1.17 0.42,-2.38l0 -9.65zm6.23 14.92l0 -14.92 11.04 0 0 2.53 -8.02 0 0 3.31 7.46 0 0 2.52 -7.46 0 0 4.04 8.31 0 0 2.52 -11.33 0zm15.94 0l-3.5 -14.92 3.1 0 2.22 10.25 2.72 -10.25 3.59 0 2.61 10.43 2.27 -10.43 3.03 0 -3.6 14.92 -3.22 0 -2.94 -11.15 -2.96 11.15 -3.32 0zm17.62 0l0 -14.92 11.04 0 0 2.53 -8.02 0 0 3.31 7.46 0 0 2.52 -7.46 0 0 4.04 8.31 0 0 2.52 -11.33 0zm13.98 0l0 -14.79 3.02 0 0 12.27 7.48 0 0 2.52 -10.5 0zm12.64 0l0 -14.92 11.04 0 0 2.53 -8.02 0 0 3.31 7.46 0 0 2.52 -7.46 0 0 4.04 8.31 0 0 2.52 -11.33 0zm13.89 0l0 -14.92 6.35 0c1.59,0 2.75,0.14 3.47,0.41 0.73,0.27 1.31,0.74 1.74,1.43 0.43,0.68 0.65,1.46 0.65,2.35 0,1.12 -0.32,2.04 -0.98,2.77 -0.66,0.73 -1.64,1.19 -2.94,1.38 0.65,0.38 1.18,0.79 1.6,1.25 0.43,0.45 1,1.26 1.71,2.42l1.82 2.91 -3.6 0 -2.16 -3.26c-0.77,-1.15 -1.3,-1.88 -1.59,-2.18 -0.29,-0.3 -0.59,-0.51 -0.91,-0.62 -0.32,-0.11 -0.83,-0.17 -1.52,-0.17l-0.62 0 0 6.23 -3.02 0zm3.02 -8.6l2.23 0c1.45,0 2.35,-0.07 2.71,-0.19 0.36,-0.12 0.64,-0.33 0.84,-0.63 0.21,-0.3 0.31,-0.67 0.31,-1.12 0,-0.5 -0.14,-0.91 -0.4,-1.22 -0.27,-0.31 -0.65,-0.5 -1.14,-0.58 -0.24,-0.04 -0.98,-0.05 -2.19,-0.05l-2.36 0 0 3.79z" />
                                <path class="fil23"
                                    d="M617.73 1004.65c0,-2.43 0.37,-4.48 1.09,-6.13 0.54,-1.22 1.29,-2.31 2.23,-3.28 0.94,-0.97 1.96,-1.68 3.08,-2.15 1.49,-0.63 3.2,-0.95 5.15,-0.95 3.52,0 6.33,1.1 8.45,3.28 2.11,2.19 3.17,5.23 3.17,9.12 0,3.86 -1.05,6.88 -3.15,9.06 -2.09,2.18 -4.9,3.27 -8.4,3.27 -3.55,0 -6.38,-1.08 -8.48,-3.25 -2.09,-2.17 -3.14,-5.16 -3.14,-8.97zm4.97 -0.16c0,2.71 0.62,4.76 1.87,6.16 1.25,1.39 2.84,2.09 4.77,2.09 1.92,0 3.5,-0.69 4.74,-2.08 1.23,-1.39 1.85,-3.46 1.85,-6.24 0,-2.74 -0.6,-4.78 -1.81,-6.12 -1.2,-1.35 -2.79,-2.03 -4.78,-2.03 -1.99,0 -3.6,0.69 -4.82,2.05 -1.21,1.37 -1.82,3.42 -1.82,6.17zm21.96 -11.92l4.83 0 0 12.94c0,2.05 0.06,3.38 0.18,3.99 0.2,0.97 0.69,1.76 1.45,2.35 0.78,0.6 1.83,0.89 3.16,0.89 1.35,0 2.37,-0.28 3.06,-0.84 0.69,-0.56 1.1,-1.24 1.24,-2.06 0.14,-0.82 0.21,-2.17 0.21,-4.06l0 -13.21 4.83 0 0 12.55c0,2.87 -0.13,4.9 -0.39,6.08 -0.26,1.18 -0.73,2.18 -1.43,3 -0.7,0.82 -1.63,1.46 -2.8,1.95 -1.17,0.48 -2.69,0.72 -4.58,0.72 -2.27,0 -3.99,-0.26 -5.16,-0.79 -1.18,-0.52 -2.1,-1.21 -2.79,-2.05 -0.68,-0.84 -1.13,-1.72 -1.34,-2.65 -0.32,-1.37 -0.47,-3.39 -0.47,-6.06l0 -12.75zm29.44 23.87l0 -19.83 -7.07 0 0 -4.04 18.93 0 0 4.04 -7.03 0 0 19.83 -4.83 0zm15.12 0l0 -23.67 4.84 0 0 19.64 11.96 0 0 4.03 -16.8 0zm20.23 0l0 -23.87 17.67 0 0 4.04 -12.84 0 0 5.3 11.94 0 0 4.03 -11.94 0 0 6.47 13.3 0 0 4.03 -18.13 0zm27.6 0l0 -19.83 -7.07 0 0 -4.04 18.94 0 0 4.04 -7.04 0 0 19.83 -4.83 0zm-74.36 28.44l4.67 1.43c-0.72,2.63 -1.92,4.58 -3.58,5.86 -1.67,1.27 -3.78,1.91 -6.34,1.91 -3.17,0 -5.78,-1.09 -7.82,-3.25 -2.04,-2.17 -3.06,-5.13 -3.06,-8.89 0,-3.97 1.02,-7.06 3.07,-9.26 2.05,-2.2 4.75,-3.3 8.1,-3.3 2.92,0 5.29,0.86 7.11,2.59 1.09,1.02 1.91,2.49 2.45,4.41l-4.77 1.13c-0.28,-1.23 -0.87,-2.21 -1.76,-2.93 -0.9,-0.71 -1.99,-1.07 -3.27,-1.07 -1.77,0 -3.21,0.63 -4.31,1.91 -1.11,1.26 -1.66,3.32 -1.66,6.16 0,3.02 0.55,5.16 1.63,6.44 1.09,1.29 2.5,1.92 4.24,1.92 1.28,0 2.39,-0.4 3.31,-1.22 0.92,-0.81 1.59,-2.09 1.99,-3.84zm8.64 8.8l0 -23.87 4.83 0 0 23.87 -4.83 0zm14.79 0l0 -19.84 -7.06 0 0 -4.03 18.93 0 0 4.03 -7.03 0 0 19.84 -4.84 0zm21.26 0l0 -10.05 -8.75 -13.82 5.65 0 5.65 9.45 5.49 -9.45 5.55 0 -8.75 13.86 0 10.01 -4.84 0z" />
                                <path class=" fil23"
                                    d="M594.69 913.53l0 -23.86 4.84 0 0 23.86 -4.84 0zm33.64 0l0 -23.66 4.83 0 0 19.63 11.97 0 0 4.03 -16.8 0zm20.22 0l0 -23.86 17.67 0 0 4.03 -12.83 0 0 5.3 11.93 0 0 4.03 -11.93 0 0 6.47 13.3 0 0 4.03 -18.14 0zm43.74 0l-5.21 0 -2.06 -5.43 -9.57 0 -1.99 5.43 -5.11 0 9.27 -23.86 5.11 0 9.56 23.86zm-8.84 -9.46l-3.31 -8.84 -3.23 8.84 6.54 0zm11.41 9.46l0 -23.86 4.68 0 9.82 15.99 0 -15.99 4.47 0 0 23.86 -4.83 0 -9.67 -15.69 0 15.69 -4.47 0zm-75.47 -8.8l4.66 1.44c-0.71,2.62 -1.91,4.57 -3.57,5.85 -1.67,1.27 -3.78,1.91 -6.34,1.91 -3.17,0 -5.78,-1.08 -7.82,-3.25 -2.04,-2.16 -3.07,-5.12 -3.07,-8.89 0,-3.97 1.03,-7.06 3.08,-9.26 2.05,-2.2 4.75,-3.3 8.1,-3.3 2.92,0 5.29,0.87 7.11,2.6 1.09,1.02 1.9,2.49 2.45,4.4l-4.77 1.14c-0.28,-1.24 -0.87,-2.21 -1.77,-2.93 -0.9,-0.72 -1.98,-1.07 -3.26,-1.07 -1.77,0 -3.21,0.63 -4.31,1.9 -1.11,1.27 -1.66,3.32 -1.66,6.17 0,3.01 0.54,5.16 1.63,6.44 1.09,1.28 2.5,1.92 4.24,1.92 1.28,0 2.39,-0.41 3.31,-1.22 0.92,-0.82 1.59,-2.1 1.99,-3.85z" />
                                <path class="fil23"
                                    d="M1087.66 1042.53l-23.87 0 0 -10.15c0,-2.55 0.22,-4.4 0.65,-5.56 0.42,-1.16 1.18,-2.08 2.28,-2.78 1.1,-0.69 2.35,-1.04 3.76,-1.04 1.79,0 3.27,0.52 4.44,1.57 1.16,1.05 1.9,2.62 2.2,4.71 0.61,-1.04 1.28,-1.9 2,-2.57 0.73,-0.68 2.03,-1.59 3.88,-2.73l4.66 -2.91 0 5.76 -5.21 3.45c-1.85,1.24 -3.02,2.09 -3.5,2.55 -0.48,0.46 -0.81,0.94 -0.99,1.45 -0.18,0.52 -0.27,1.33 -0.27,2.44l0 0.98 9.97 0 0 4.83zm-13.77 -4.83l0 -3.57c0,-2.31 -0.1,-3.75 -0.29,-4.32 -0.2,-0.58 -0.54,-1.03 -1.01,-1.35 -0.48,-0.33 -1.08,-0.49 -1.8,-0.49 -0.8,0 -1.45,0.21 -1.95,0.64 -0.49,0.43 -0.8,1.03 -0.93,1.81 -0.06,0.4 -0.09,1.57 -0.09,3.52l0 3.76 6.07 0zm13.77 -19.24l-23.87 0 0 -17.67 4.03 0 0 12.84 5.3 0 0 -11.94 4.04 0 0 11.94 6.46 0 0 -13.3 4.04 0 0 18.13zm-7.74 -20.97l-0.46 -4.7c1.57,-0.28 2.72,-0.85 3.46,-1.71 0.74,-0.86 1.1,-2.02 1.1,-3.48 0,-1.54 -0.32,-2.71 -0.98,-3.49 -0.66,-0.79 -1.42,-1.18 -2.3,-1.18 -0.57,0 -1.04,0.16 -1.44,0.49 -0.4,0.33 -0.74,0.91 -1.03,1.73 -0.2,0.56 -0.55,1.84 -1.05,3.84 -0.64,2.57 -1.43,4.38 -2.37,5.42 -1.32,1.46 -2.92,2.18 -4.81,2.18 -1.22,0 -2.37,-0.34 -3.43,-1.02 -1.06,-0.69 -1.86,-1.68 -2.42,-2.98 -0.56,-1.29 -0.83,-2.85 -0.83,-4.68 0,-2.98 0.66,-5.23 1.99,-6.74 1.32,-1.51 3.09,-2.3 5.31,-2.38l0.16 4.84c-1.23,0.2 -2.11,0.64 -2.65,1.31 -0.54,0.68 -0.81,1.69 -0.81,3.03 0,1.39 0.29,2.48 0.86,3.26 0.38,0.51 0.87,0.76 1.49,0.76 0.57,0 1.05,-0.23 1.45,-0.71 0.52,-0.61 1.05,-2.08 1.61,-4.42 0.55,-2.34 1.13,-4.07 1.72,-5.18 0.59,-1.12 1.4,-2 2.42,-2.64 1.03,-0.63 2.3,-0.95 3.8,-0.95 1.37,0 2.65,0.38 3.85,1.14 1.19,0.76 2.08,1.84 2.66,3.23 0.58,1.38 0.87,3.12 0.87,5.19 0,3.02 -0.69,5.33 -2.09,6.95 -1.39,1.62 -3.41,2.58 -6.08,2.89zm7.74 -23.5l-23.87 0 0 -7.72c0,-2.93 0.12,-4.84 0.36,-5.73 0.36,-1.36 1.13,-2.51 2.33,-3.43 1.2,-0.92 2.76,-1.38 4.65,-1.38 1.47,0 2.7,0.26 3.7,0.79 1,0.54 1.78,1.21 2.36,2.02 0.56,0.82 0.94,1.65 1.12,2.5 0.23,1.15 0.35,2.81 0.35,4.99l0 3.13 9 0 0 4.83zm-19.84 -4.83l6.8 0 0 -2.63c0,-1.89 -0.12,-3.15 -0.37,-3.79 -0.25,-0.64 -0.64,-1.14 -1.18,-1.5 -0.53,-0.36 -1.15,-0.55 -1.86,-0.55 -0.87,0 -1.59,0.26 -2.16,0.77 -0.56,0.51 -0.92,1.15 -1.07,1.93 -0.1,0.57 -0.16,1.72 -0.16,3.45l0 2.32zm19.84 -17.4l-23.87 0 0 -17.67 4.03 0 0 12.84 5.3 0 0 -11.94 4.04 0 0 11.94 6.46 0 0 -13.3 4.04 0 0 18.13zm-8.8 -37.5l1.43 -4.66c2.63,0.71 4.58,1.91 5.86,3.57 1.27,1.67 1.91,3.78 1.91,6.34 0,3.17 -1.09,5.78 -3.25,7.82 -2.17,2.04 -5.13,3.07 -8.89,3.07 -3.97,0 -7.06,-1.03 -9.26,-3.08 -2.2,-2.05 -3.3,-4.75 -3.3,-8.1 0,-2.92 0.86,-5.29 2.59,-7.11 1.02,-1.09 2.49,-1.9 4.41,-2.45l1.13 4.77c-1.23,0.28 -2.21,0.87 -2.93,1.77 -0.71,0.9 -1.07,1.98 -1.07,3.26 0,1.77 0.63,3.21 1.91,4.31 1.26,1.11 3.32,1.66 6.16,1.66 3.01,0 5.16,-0.55 6.44,-1.63 1.28,-1.09 1.92,-2.5 1.92,-4.24 0,-1.28 -0.4,-2.39 -1.22,-3.31 -0.81,-0.92 -2.09,-1.59 -3.84,-1.99zm8.8 -14.17l-19.84 0 0 7.07 -4.03 0 0 -18.94 4.03 0 0 7.04 19.84 0 0 4.83z" />
                                <path class="fil23"
                                    d="M1693.79 2118.32l0 -53.7 16.29 0 9.62 36.62 9.51 -36.62 16.33 0 0 53.7 -10.05 0 -0.04 -42.28 -10.59 42.28 -10.45 0 -10.54 -42.28 -0.03 42.28 -10.05 0zm111 0l-11.71 0 -4.64 -12.23 -21.54 0 -4.46 12.23 -11.5 0 20.85 -53.7 11.49 0 21.51 53.7zm-19.88 -21.3l-7.46 -19.88 -7.25 19.88 14.71 0zm25.67 21.3l0 -53.7 22.83 0c5.74,0 9.92,0.49 12.52,1.45 2.61,0.96 4.68,2.67 6.25,5.13 1.56,2.48 2.35,5.29 2.35,8.47 0,4.04 -1.18,7.36 -3.54,9.98 -2.36,2.63 -5.89,4.28 -10.59,4.97 2.34,1.36 4.26,2.86 5.78,4.5 1.52,1.63 3.57,4.55 6.15,8.72l6.55 10.48 -12.97 0 -7.77 -11.73c-2.79,-4.16 -4.7,-6.78 -5.74,-7.87 -1.02,-1.08 -2.11,-1.83 -3.26,-2.23 -1.16,-0.4 -2.99,-0.6 -5.49,-0.6l-2.2 0 0 22.43 -10.87 0zm10.87 -30.98l8.03 0c5.2,0 8.43,-0.22 9.73,-0.66 1.29,-0.44 2.32,-1.2 3.04,-2.28 0.74,-1.07 1.1,-2.42 1.1,-4.03 0,-1.82 -0.49,-3.26 -1.45,-4.39 -0.96,-1.11 -2.32,-1.81 -4.07,-2.1 -0.89,-0.13 -3.53,-0.19 -7.92,-0.19l-8.46 0 0 13.65zm77.64 11.18l10.5 3.22c-1.61,5.91 -4.3,10.3 -8.05,13.18 -3.75,2.86 -8.5,4.3 -14.26,4.3 -7.14,0 -13,-2.44 -17.6,-7.31 -4.59,-4.88 -6.89,-11.54 -6.89,-20.01 0,-8.93 2.31,-15.88 6.92,-20.83 4.62,-4.95 10.69,-7.43 18.22,-7.43 6.57,0 11.91,1.95 16.01,5.84 2.45,2.3 4.27,5.6 5.5,9.91l-10.73 2.55c-0.63,-2.77 -1.96,-4.97 -3.97,-6.58 -2.03,-1.62 -4.48,-2.42 -7.35,-2.42 -3.99,0 -7.23,1.43 -9.7,4.29 -2.49,2.85 -3.73,7.47 -3.73,13.88 0,6.77 1.23,11.61 3.67,14.48 2.45,2.89 5.62,4.33 9.53,4.33 2.89,0 5.38,-0.92 7.45,-2.75 2.08,-1.84 3.58,-4.71 4.48,-8.65zm17.56 -6.73c0,-5.47 0.83,-10.07 2.46,-13.8 1.22,-2.74 2.89,-5.2 5,-7.37 2.12,-2.18 4.43,-3.79 6.94,-4.85 3.35,-1.41 7.21,-2.13 11.59,-2.13 7.92,0 14.25,2.46 19.01,7.38 4.75,4.92 7.13,11.76 7.13,20.52 0,8.69 -2.37,15.49 -7.08,20.39 -4.71,4.91 -11.02,7.36 -18.91,7.36 -7.99,0 -14.35,-2.43 -19.06,-7.32 -4.72,-4.88 -7.08,-11.6 -7.08,-20.18zm11.18 -0.36c0,6.09 1.41,10.7 4.22,13.85 2.81,3.14 6.39,4.71 10.71,4.71 4.34,0 7.89,-1.56 10.68,-4.67 2.77,-3.13 4.16,-7.8 4.16,-14.04 0,-6.16 -1.35,-10.76 -4.06,-13.79 -2.7,-3.03 -6.29,-4.55 -10.78,-4.55 -4.47,0 -8.08,1.54 -10.82,4.6 -2.74,3.08 -4.11,7.7 -4.11,13.89z" />
                                <path class="fil23"
                                    d="M774.24 3043.2l4.22 0 0 4.99c0,1.61 0.06,2.68 0.18,3.2 0.12,0.53 0.48,0.99 1.06,1.38 0.59,0.39 1.45,0.58 2.59,0.58 0.9,0 1.7,-0.1 2.41,-0.29 0.7,-0.19 1.3,-0.48 1.81,-0.86l0 -9 4.23 0 0 20.89 -4.23 0 0 -8.42c-0.85,0.38 -1.69,0.67 -2.52,0.86 -0.82,0.2 -1.64,0.29 -2.43,0.29 -2.08,0 -3.82,-0.49 -5.22,-1.47 -1.4,-0.98 -2.1,-2.68 -2.1,-5.1l0 -7.05zm18.7 0l4.75 0 4.86 10.81 4.16 -10.81 4.4 0 -7.07 15.87c-0.76,1.72 -1.55,3.03 -2.34,3.93 -0.8,0.9 -1.83,1.35 -3.09,1.35 -1.25,0 -2.22,-0.09 -2.92,-0.25l0 -3.14c0.6,0.04 1.14,0.06 1.62,0.06 0.97,0 1.67,-0.18 2.1,-0.53 0.41,-0.36 0.82,-1.13 1.21,-2.32l-7.68 -14.97zm19.93 0l4.23 0 0 4.99c0,1.61 0.06,2.68 0.18,3.2 0.12,0.53 0.47,0.99 1.06,1.38 0.58,0.39 1.45,0.58 2.59,0.58 0.9,0 1.7,-0.1 2.4,-0.29 0.7,-0.19 1.31,-0.48 1.82,-0.86l0 -9 4.23 0 0 20.89 -4.23 0 0 -8.42c-0.86,0.38 -1.7,0.67 -2.52,0.86 -0.83,0.2 -1.64,0.29 -2.44,0.29 -2.08,0 -3.82,-0.49 -5.22,-1.47 -1.4,-0.98 -2.1,-2.68 -2.1,-5.1l0 -7.05zm20.85 0l8.35 0c1.66,0 2.88,0.07 3.7,0.21 0.81,0.14 1.54,0.42 2.18,0.86 0.64,0.43 1.18,1.01 1.6,1.74 0.43,0.72 0.65,1.54 0.65,2.44 0,0.97 -0.27,1.87 -0.79,2.68 -0.53,0.82 -1.24,1.43 -2.14,1.83 1.27,0.38 2.24,1.01 2.93,1.9 0.68,0.9 1.02,1.95 1.02,3.16 0,0.95 -0.22,1.87 -0.67,2.77 -0.44,0.9 -1.04,1.62 -1.81,2.16 -0.76,0.54 -1.7,0.87 -2.83,0.99 -0.7,0.08 -2.39,0.13 -5.08,0.15l-7.11 0 0 -20.89zm4.22 3.47l0 4.82 2.77 0c1.63,0 2.65,-0.03 3.05,-0.08 0.72,-0.08 1.29,-0.33 1.7,-0.74 0.42,-0.41 0.62,-0.95 0.62,-1.62 0,-0.65 -0.18,-1.17 -0.53,-1.57 -0.36,-0.41 -0.89,-0.65 -1.59,-0.73 -0.41,-0.05 -1.62,-0.08 -3.59,-0.08l-2.43 0zm0 8.29l0 5.6 3.91 0c1.52,0 2.49,-0.05 2.9,-0.13 0.62,-0.12 1.13,-0.39 1.53,-0.84 0.39,-0.44 0.59,-1.03 0.59,-1.78 0,-0.63 -0.15,-1.16 -0.46,-1.59 -0.3,-0.44 -0.74,-0.76 -1.31,-0.96 -0.58,-0.2 -1.83,-0.3 -3.75,-0.3l-3.41 0zm34.2 9.13l-4.56 0 -1.8 -4.76 -8.38 0 -1.73 4.76 -4.47 0 8.1 -20.89 4.47 0 8.37 20.89zm-7.73 -8.29l-2.9 -7.73 -2.82 7.73 5.72 0zm9.98 8.29l0 -20.89 6.76 0c2.56,0 4.23,0.11 5.01,0.31 1.19,0.32 2.19,1 3,2.05 0.81,1.05 1.21,2.41 1.21,4.07 0,1.28 -0.23,2.36 -0.7,3.23 -0.46,0.88 -1.05,1.56 -1.76,2.06 -0.72,0.5 -1.45,0.83 -2.19,0.99 -1,0.2 -2.46,0.3 -4.36,0.3l-2.74 0 0 7.88 -4.23 0zm4.23 -17.36l0 5.95 2.3 0c1.65,0 2.76,-0.11 3.32,-0.33 0.55,-0.22 0.99,-0.56 1.31,-1.03 0.31,-0.47 0.48,-1.01 0.48,-1.63 0,-0.76 -0.23,-1.39 -0.67,-1.88 -0.45,-0.5 -1.01,-0.81 -1.69,-0.94 -0.5,-0.09 -1.51,-0.14 -3.03,-0.14l-2.02 0zm31.47 17.36l-4.55 0 -1.81 -4.76 -8.37 0 -1.74 4.76 -4.47 0 8.11 -20.89 4.47 0 8.36 20.89zm-7.73 -8.29l-2.9 -7.73 -2.82 7.73 5.72 0z" />
                                <path class="fil23"
                                    d="M1402.71 1630.22l-0.23 -2.34c0.78,-0.14 1.35,-0.43 1.72,-0.85 0.37,-0.43 0.55,-1.01 0.55,-1.74 0,-0.77 -0.16,-1.35 -0.49,-1.74 -0.32,-0.39 -0.7,-0.58 -1.14,-0.58 -0.28,0 -0.52,0.08 -0.72,0.24 -0.2,0.17 -0.37,0.45 -0.51,0.86 -0.1,0.28 -0.27,0.92 -0.52,1.91 -0.32,1.28 -0.71,2.18 -1.18,2.7 -0.66,0.73 -1.46,1.09 -2.4,1.09 -0.6,0 -1.17,-0.17 -1.7,-0.51 -0.53,-0.35 -0.93,-0.84 -1.21,-1.48 -0.27,-0.65 -0.41,-1.42 -0.41,-2.33 0,-1.49 0.33,-2.61 0.99,-3.36 0.66,-0.75 1.54,-1.14 2.64,-1.18l0.08 2.41c-0.61,0.1 -1.05,0.32 -1.32,0.65 -0.27,0.34 -0.4,0.84 -0.4,1.51 0,0.69 0.14,1.23 0.43,1.62 0.19,0.25 0.43,0.38 0.74,0.38 0.28,0 0.52,-0.12 0.72,-0.36 0.26,-0.3 0.53,-1.03 0.8,-2.2 0.28,-1.16 0.56,-2.02 0.86,-2.57 0.29,-0.56 0.69,-1 1.2,-1.32 0.52,-0.31 1.15,-0.47 1.89,-0.47 0.69,0 1.32,0.19 1.92,0.57 0.59,0.38 1.04,0.91 1.32,1.6 0.29,0.69 0.44,1.56 0.44,2.59 0,1.5 -0.35,2.65 -1.04,3.46 -0.69,0.8 -1.7,1.28 -3.03,1.44zm3.85 -11.7l-11.88 0 0 -2.4 4.68 0 0 -4.68 -4.68 0 0 -2.41 11.88 0 0 2.41 -5.19 0 0 4.68 5.19 0 0 2.4zm0 -11.98l-11.88 0 0 -8.79 2.01 0 0 6.39 2.64 0 0 -5.94 2.01 0 0 5.94 3.21 0 0 -6.62 2.01 0 0 9.02zm0 -11.06l-11.88 0 0 -5.05c0,-1.27 0.11,-2.19 0.32,-2.77 0.22,-0.58 0.6,-1.03 1.14,-1.38 0.55,-0.35 1.17,-0.52 1.87,-0.52 0.9,0 1.63,0.26 2.21,0.78 0.58,0.52 0.95,1.3 1.1,2.34 0.3,-0.51 0.63,-0.94 0.99,-1.27 0.37,-0.34 1.01,-0.79 1.93,-1.36l2.32 -1.45 0 2.86 -2.59 1.72c-0.92,0.62 -1.5,1.04 -1.74,1.27 -0.24,0.23 -0.41,0.47 -0.5,0.72 -0.09,0.26 -0.13,0.67 -0.13,1.22l0 0.48 4.96 0 0 2.41zm-6.85 -2.41l0 -1.77c0,-1.15 -0.05,-1.87 -0.15,-2.15 -0.09,-0.29 -0.26,-0.52 -0.5,-0.67 -0.24,-0.17 -0.54,-0.25 -0.89,-0.25 -0.4,0 -0.72,0.11 -0.97,0.32 -0.25,0.21 -0.4,0.52 -0.47,0.9 -0.02,0.2 -0.04,0.78 -0.04,1.75l0 1.87 3.02 0zm6.85 -9.63l-11.78 0 0 -2.41 9.77 0 0 -5.96 2.01 0 0 8.37zm-5.87 -9.57c-1.21,0 -2.22,-0.19 -3.05,-0.55 -0.6,-0.27 -1.15,-0.64 -1.63,-1.1 -0.48,-0.47 -0.84,-0.98 -1.07,-1.54 -0.31,-0.74 -0.47,-1.59 -0.47,-2.56 0,-1.75 0.54,-3.15 1.63,-4.21 1.09,-1.05 2.6,-1.57 4.54,-1.57 1.92,0 3.42,0.52 4.51,1.56 1.08,1.05 1.63,2.44 1.63,4.19 0,1.76 -0.54,3.17 -1.62,4.21 -1.08,1.04 -2.57,1.57 -4.47,1.57zm-0.08 -2.47c1.35,0 2.37,-0.32 3.07,-0.94 0.69,-0.62 1.04,-1.41 1.04,-2.37 0,-0.96 -0.35,-1.74 -1.03,-2.36 -0.7,-0.61 -1.73,-0.92 -3.11,-0.92 -1.36,0 -2.38,0.3 -3.05,0.9 -0.67,0.59 -1.01,1.39 -1.01,2.38 0,0.99 0.34,1.79 1.02,2.39 0.68,0.61 1.71,0.92 3.07,0.92zm1.57 -18.53l0.71 -2.32c1.31,0.35 2.28,0.95 2.92,1.78 0.63,0.83 0.95,1.88 0.95,3.15 0,1.58 -0.54,2.88 -1.62,3.89 -1.08,1.02 -2.55,1.53 -4.42,1.53 -1.98,0 -3.51,-0.51 -4.61,-1.53 -1.09,-1.02 -1.64,-2.37 -1.64,-4.03 0,-1.46 0.43,-2.64 1.29,-3.54 0.51,-0.54 1.24,-0.95 2.19,-1.22l0.57 2.37c-0.62,0.14 -1.1,0.44 -1.46,0.88 -0.36,0.45 -0.54,0.99 -0.54,1.63 0,0.88 0.32,1.59 0.95,2.14 0.63,0.55 1.66,0.83 3.07,0.83 1.5,0 2.57,-0.27 3.21,-0.81 0.64,-0.55 0.95,-1.25 0.95,-2.11 0,-0.64 -0.2,-1.19 -0.61,-1.65 -0.4,-0.46 -1.04,-0.79 -1.91,-0.99zm4.38 -4.42l-11.88 0 0 -2.4 5.27 0 -5.27 -4.85 0 -3.22 4.63 4.48 7.25 -4.71 0 3.1 -5.58 3.27 1.99 1.93 3.59 0 0 2.4z" />
                                <path class="fil23"
                                    d="M1398.21 1449.15l0 1.96 -2.05 0.78 0 3.62 2.05 0.75 0 1.94 -9.03 -3.51 0 -1.93 9.03 -3.61zm-3.58 3.34l-3.34 1.25 3.34 1.22 0 -2.47zm-5.45 -4.97l0 -6.32 9.03 0 0 1.83 -7.5 0 0 2.71 3.85 0c1.11,0 1.88,0.04 2.31,0.11 0.44,0.07 0.78,0.25 1.02,0.54 0.25,0.28 0.37,0.73 0.37,1.34 0,0.21 -0.02,0.6 -0.06,1.16l-1.41 0 0 -0.41c0,-0.38 -0.05,-0.64 -0.15,-0.77 -0.1,-0.13 -0.36,-0.19 -0.76,-0.19l-1.55 0 -5.15 0zm9.03 -10.22l-7.5 0 0 2.67 -1.53 0 0 -7.16 1.53 0 0 2.66 7.5 0 0 1.83zm0 -13.01l0 1.97 -2.05 0.78 0 3.62 2.05 0.75 0 1.93 -9.03 -3.5 0 -1.93 9.03 -3.62zm-3.58 3.34l-3.34 1.25 3.34 1.22 0 -2.47zm-5.45 -4.34l0 -1.7 6.01 0 -6.01 -3.66 0 -1.81 9.03 0 0 1.7 -5.91 0 5.91 3.66 0 1.81 -9.03 0zm-2.6 -4.66l0 -0.85c0.55,0.05 0.99,0.25 1.31,0.59 0.32,0.34 0.47,0.79 0.47,1.33 0,0.55 -0.15,0.99 -0.47,1.33 -0.32,0.35 -0.76,0.54 -1.31,0.59l0 -0.84c0.28,-0.03 0.51,-0.13 0.65,-0.31 0.15,-0.18 0.23,-0.43 0.23,-0.77 0,-0.33 -0.08,-0.59 -0.23,-0.77 -0.14,-0.17 -0.37,-0.27 -0.65,-0.3zm8.3 -10.15l0.54 -1.76c1,0.27 1.74,0.72 2.22,1.35 0.48,0.63 0.72,1.43 0.72,2.4 0,1.2 -0.41,2.18 -1.23,2.96 -0.82,0.77 -1.94,1.15 -3.36,1.15 -1.5,0 -2.67,-0.39 -3.5,-1.16 -0.83,-0.78 -1.25,-1.8 -1.25,-3.06 0,-1.11 0.33,-2 0.98,-2.69 0.39,-0.41 0.94,-0.72 1.67,-0.93l0.43 1.8c-0.47,0.11 -0.84,0.33 -1.11,0.67 -0.27,0.34 -0.41,0.75 -0.41,1.24 0,0.67 0.24,1.21 0.72,1.63 0.48,0.42 1.26,0.62 2.34,0.62 1.14,0 1.95,-0.2 2.43,-0.61 0.49,-0.41 0.73,-0.95 0.73,-1.6 0,-0.49 -0.15,-0.91 -0.46,-1.26 -0.31,-0.34 -0.8,-0.6 -1.46,-0.75zm-5.7 -3.35l0 -1.83 3.85 0c-0.04,-0.41 -0.15,-0.68 -0.32,-0.82 -0.16,-0.15 -0.63,-0.37 -1.4,-0.67 -0.98,-0.38 -1.59,-0.76 -1.82,-1.14 -0.24,-0.37 -0.36,-0.98 -0.36,-1.82 0,-0.04 0,-0.13 -0.01,-0.27l1.35 0 -0.01 0.26c0,0.38 0.05,0.65 0.14,0.82 0.09,0.17 0.24,0.31 0.42,0.42 0.19,0.11 0.58,0.26 1.17,0.47 0.31,0.11 0.57,0.23 0.78,0.36 0.21,0.13 0.41,0.36 0.6,0.69 0.11,-0.41 0.34,-0.74 0.69,-1.01 0.35,-0.26 0.84,-0.55 1.48,-0.87l2.47 -1.22 0 2.14 -2.32 1.08c-0.04,0.02 -0.1,0.05 -0.19,0.11 -0.04,0.02 -0.18,0.09 -0.43,0.22 -0.44,0.23 -0.72,0.42 -0.83,0.57 -0.11,0.15 -0.17,0.37 -0.18,0.68l3.95 0 0 1.83 -9.03 0zm0 -7.7l0 -1.7 6.01 0 -6.01 -3.65 0 -1.82 9.03 0 0 1.7 -5.91 0 5.91 3.66 0 1.81 -9.03 0zm0 -9.06l0 -1.7 6.01 0 -6.01 -3.66 0 -1.81 9.03 0 0 1.7 -5.91 0 5.91 3.66 0 1.81 -9.03 0zm-2.6 -4.66l0 -0.85c0.55,0.05 0.99,0.25 1.31,0.59 0.32,0.34 0.47,0.79 0.47,1.33 0,0.55 -0.15,0.99 -0.47,1.33 -0.32,0.34 -0.76,0.54 -1.31,0.59l0 -0.84c0.28,-0.03 0.51,-0.13 0.65,-0.31 0.15,-0.18 0.23,-0.43 0.23,-0.77 0,-0.33 -0.08,-0.59 -0.23,-0.77 -0.14,-0.17 -0.37,-0.27 -0.65,-0.3zm23.35 48.57l-9.03 0 0 -2.74 6.16 -1.62 -6.16 -1.6 0 -2.74 9.03 0 0 1.69 -7.11 0 7.11 1.78 0 1.76 -7.11 1.77 7.11 0.01 0 1.69zm0 -10.53l-9.03 0 0 -6.68 1.53 0 0 4.85 2 0 0 -4.51 1.53 0 0 4.51 2.44 0 0 -5.03 1.53 0 0 6.86zm-9.03 -9.14l0 -6.23 7.5 0 0 -0.79 3.5 0 0 1.52 -1.97 0 0 5.66 1.97 0 0 1.53 -3.5 0 0 -0.77c-0.77,-0.37 -1.66,-0.62 -2.68,-0.74 -1.02,-0.12 -2.31,-0.18 -3.86,-0.18l-0.96 0zm1.53 -1.74c2.73,0 4.72,0.25 5.97,0.76l0 -3.42 -5.97 0 0 2.66z" />
                                <path class="fil23"
                                    d="M1379.14 1488.24l2.42 0c0.48,0 0.83,0.02 1.07,0.06 0.23,0.04 0.44,0.12 0.63,0.25 0.18,0.13 0.34,0.29 0.46,0.5 0.12,0.21 0.18,0.45 0.18,0.71 0,0.28 -0.07,0.54 -0.22,0.77 -0.15,0.24 -0.36,0.41 -0.62,0.53 0.37,0.11 0.65,0.29 0.84,0.55 0.2,0.26 0.3,0.56 0.3,0.91 0,0.28 -0.06,0.54 -0.19,0.8 -0.13,0.26 -0.3,0.47 -0.52,0.63 -0.23,0.15 -0.5,0.25 -0.82,0.29 -0.21,0.02 -0.7,0.03 -1.47,0.04l-2.06 0 0 -6.04zm1.22 1l0 1.4 0.8 0c0.48,0 0.77,-0.01 0.89,-0.03 0.2,-0.02 0.37,-0.09 0.49,-0.21 0.12,-0.12 0.18,-0.28 0.18,-0.47 0,-0.19 -0.06,-0.34 -0.16,-0.45 -0.1,-0.12 -0.25,-0.19 -0.46,-0.22 -0.12,-0.01 -0.46,-0.02 -1.03,-0.02l-0.71 0zm0 2.4l0 1.62 1.14 0c0.43,0 0.71,-0.02 0.83,-0.04 0.18,-0.03 0.33,-0.12 0.44,-0.24 0.12,-0.13 0.17,-0.3 0.17,-0.52 0,-0.18 -0.04,-0.33 -0.13,-0.46 -0.09,-0.12 -0.21,-0.22 -0.38,-0.28 -0.16,-0.05 -0.52,-0.08 -1.08,-0.08l-0.99 0zm4.87 2.64l0 -6.04 4.47 0 0 1.02 -3.25 0 0 1.34 3.02 0 0 1.02 -3.02 0 0 1.64 3.36 0 0 1.02 -4.58 0zm9.48 -2.23l1.18 0.36c-0.18,0.67 -0.48,1.16 -0.9,1.48 -0.43,0.32 -0.96,0.49 -1.61,0.49 -0.8,0 -1.46,-0.28 -1.97,-0.83 -0.52,-0.54 -0.78,-1.29 -0.78,-2.24 0,-1.01 0.26,-1.79 0.78,-2.34 0.52,-0.56 1.2,-0.84 2.05,-0.84 0.73,0 1.33,0.22 1.8,0.66 0.27,0.26 0.48,0.63 0.61,1.11l-1.2 0.29c-0.07,-0.31 -0.22,-0.56 -0.45,-0.74 -0.23,-0.18 -0.5,-0.27 -0.82,-0.27 -0.45,0 -0.82,0.16 -1.09,0.48 -0.28,0.32 -0.42,0.84 -0.42,1.56 0,0.76 0.13,1.3 0.41,1.62 0.27,0.33 0.63,0.49 1.07,0.49 0.32,0 0.6,-0.1 0.84,-0.31 0.23,-0.2 0.4,-0.53 0.5,-0.97zm2.23 2.23l0 -6.04 4.46 0 0 1.02 -3.24 0 0 1.34 3.02 0 0 1.02 -3.02 0 0 1.64 3.36 0 0 1.02 -4.58 0zm6.05 -6.04l4.23 0 0 6.04 -1.22 0 0 -5.02 -1.82 0 0 2.58c0,0.73 -0.02,1.25 -0.07,1.54 -0.05,0.29 -0.17,0.52 -0.36,0.68 -0.19,0.17 -0.49,0.25 -0.89,0.25 -0.15,0 -0.41,-0.01 -0.78,-0.04l0 -0.95 0.27 0.01c0.25,0 0.43,-0.04 0.51,-0.1 0.09,-0.07 0.14,-0.24 0.14,-0.51l-0.01 -1.04 0 -3.44zm5.51 0l1.23 0 0 2.41 1.62 0c0.43,0 0.8,0.06 1.11,0.18 0.3,0.11 0.56,0.32 0.77,0.62 0.2,0.3 0.31,0.65 0.31,1.04 0,0.41 -0.11,0.76 -0.33,1.06 -0.21,0.29 -0.45,0.49 -0.71,0.58 -0.26,0.1 -0.64,0.15 -1.15,0.15l-2.85 0 0 -6.04zm1.23 5.02l1.18 0c0.38,0 0.65,-0.02 0.8,-0.06 0.15,-0.04 0.28,-0.12 0.39,-0.25 0.12,-0.13 0.18,-0.29 0.18,-0.48 0,-0.27 -0.1,-0.47 -0.29,-0.6 -0.19,-0.13 -0.53,-0.2 -1.03,-0.2l-1.23 0 0 1.59zm4.5 -5.02l1.23 0 0 6.04 -1.23 0 0 -6.04zm2.51 0l1.13 0 0 4.02 2.45 -4.02 1.21 0 0 6.04 -1.14 0 0 -3.96 -2.44 3.96 -1.21 0 0 -6.04zm3.12 -1.74l0.56 0c-0.03,0.37 -0.16,0.66 -0.39,0.88 -0.23,0.21 -0.53,0.31 -0.89,0.31 -0.37,0 -0.66,-0.1 -0.89,-0.31 -0.23,-0.22 -0.36,-0.51 -0.4,-0.88l0.57 0c0.02,0.19 0.09,0.34 0.2,0.44 0.12,0.1 0.29,0.15 0.52,0.15 0.22,0 0.39,-0.05 0.51,-0.15 0.12,-0.1 0.19,-0.25 0.21,-0.44zm-41.68 9.57l4.8 0 0 6.04 -1.23 0 0 -5.02 -2.35 0 0 5.02 -1.22 0 0 -6.04zm6.04 6.04l0 -6.04 1.95 0c0.75,0 1.23,0.03 1.45,0.09 0.35,0.1 0.64,0.29 0.87,0.6 0.23,0.3 0.35,0.69 0.35,1.17 0,0.37 -0.07,0.68 -0.2,0.93 -0.14,0.26 -0.31,0.46 -0.51,0.6 -0.21,0.14 -0.42,0.24 -0.63,0.29 -0.29,0.05 -0.71,0.08 -1.26,0.08l-0.8 0 0 2.28 -1.22 0zm1.22 -5.02l0 1.72 0.67 0c0.48,0 0.79,-0.03 0.96,-0.09 0.16,-0.07 0.28,-0.16 0.38,-0.3 0.09,-0.13 0.13,-0.29 0.13,-0.47 0,-0.22 -0.06,-0.4 -0.19,-0.55 -0.13,-0.14 -0.29,-0.23 -0.49,-0.27 -0.14,-0.02 -0.43,-0.04 -0.87,-0.04l-0.59 0zm9.1 5.02l-1.32 0 -0.52 -1.38 -2.42 0 -0.5 1.38 -1.29 0 2.34 -6.04 1.29 0 2.42 6.04zm-2.24 -2.39l-0.84 -2.24 -0.81 2.24 1.65 0zm3.75 -2l-1.19 -0.28c0.25,-0.98 0.98,-1.47 2.18,-1.47 0.7,0 1.24,0.15 1.6,0.46 0.36,0.31 0.54,0.68 0.54,1.1 0,0.29 -0.08,0.55 -0.24,0.78 -0.17,0.23 -0.42,0.44 -0.75,0.62 0.4,0.13 0.7,0.33 0.9,0.58 0.2,0.25 0.3,0.56 0.3,0.93 0,0.53 -0.19,0.96 -0.58,1.29 -0.39,0.32 -0.97,0.49 -1.74,0.49 -0.63,0 -1.13,-0.11 -1.5,-0.32 -0.36,-0.21 -0.64,-0.6 -0.82,-1.18l1.11 -0.36c0.12,0.36 0.27,0.6 0.46,0.7 0.19,0.11 0.43,0.16 0.71,0.16 0.39,0 0.67,-0.08 0.84,-0.25 0.18,-0.16 0.27,-0.35 0.27,-0.57 0,-0.25 -0.1,-0.45 -0.3,-0.6 -0.2,-0.15 -0.5,-0.23 -0.9,-0.23l-0.28 0 0 -0.91 0.14 0c0.37,0 0.66,-0.08 0.86,-0.25 0.19,-0.17 0.29,-0.39 0.29,-0.67 0,-0.22 -0.08,-0.4 -0.24,-0.55 -0.16,-0.15 -0.39,-0.23 -0.69,-0.23 -0.5,0 -0.83,0.25 -0.97,0.76zm4.91 -1.65l4.16 0 0 5.02 0.53 0 0 2.33 -1.02 0 0 -1.31 -3.78 0 0 1.31 -1.02 0 0 -2.33 0.51 0c0.25,-0.52 0.42,-1.11 0.5,-1.8 0.08,-0.68 0.12,-1.54 0.12,-2.58l0 -0.64zm1.16 1.02c0,1.83 -0.17,3.16 -0.51,4l2.29 0 0 -4 -1.78 0zm4.35 5.02l0 -6.04 1.22 0 0 2.38 2.38 0 0 -2.38 1.22 0 0 6.04 -1.22 0 0 -2.64 -2.38 0 0 2.64 -1.22 0zm6.1 -6.04l1.14 0 0 4.02 2.44 -4.02 1.22 0 0 6.04 -1.14 0 0 -3.95 -2.44 3.95 -1.22 0 0 -6.04zm6.06 0l1.22 0 0 2.58c0.27,-0.03 0.46,-0.1 0.55,-0.22 0.1,-0.11 0.25,-0.42 0.45,-0.94 0.25,-0.65 0.5,-1.06 0.76,-1.22 0.25,-0.15 0.66,-0.23 1.22,-0.23 0.03,0 0.08,0 0.17,-0.01l0 0.9 -0.17 0c-0.25,0 -0.43,0.03 -0.55,0.09 -0.11,0.06 -0.2,0.16 -0.28,0.28 -0.07,0.13 -0.17,0.39 -0.31,0.78 -0.08,0.21 -0.16,0.39 -0.24,0.53 -0.09,0.14 -0.24,0.27 -0.46,0.39 0.27,0.08 0.49,0.24 0.67,0.47 0.18,0.23 0.37,0.56 0.58,0.99l0.82 1.65 -1.43 0 -0.72 -1.55c-0.01,-0.03 -0.04,-0.07 -0.07,-0.13 -0.02,-0.02 -0.07,-0.12 -0.15,-0.29 -0.16,-0.29 -0.29,-0.48 -0.38,-0.55 -0.1,-0.08 -0.25,-0.12 -0.46,-0.12l0 2.64 -1.22 0 0 -6.04z" />
                                <path class="fil24"
                                    d="M721.97 1395.74l0 -11.93 2.34 0 4.91 7.99 0 -7.99 2.24 0 0 11.93 -2.42 0 -4.83 -7.85 0 7.85 -2.24 0zm12.04 0l0 -11.93 8.83 0 0 2.01 -6.41 0 0 2.65 5.96 0 0 2.02 -5.96 0 0 3.23 6.65 0 0 2.02 -9.07 0zm11.12 0l0 -11.93 5.07 0c1.28,0 2.2,0.1 2.78,0.32 0.58,0.21 1.04,0.59 1.39,1.14 0.35,0.55 0.52,1.18 0.52,1.88 0,0.9 -0.26,1.64 -0.78,2.22 -0.53,0.58 -1.31,0.95 -2.35,1.1 0.51,0.31 0.94,0.64 1.28,1 0.34,0.37 0.79,1.01 1.36,1.94l1.46 2.33 -2.88 0 -1.73 -2.61c-0.62,-0.92 -1.04,-1.5 -1.27,-1.75 -0.23,-0.24 -0.47,-0.4 -0.73,-0.49 -0.26,-0.09 -0.66,-0.13 -1.22,-0.13l-0.49 0 0 4.98 -2.41 0zm2.41 -6.88l1.79 0c1.15,0 1.87,-0.05 2.16,-0.15 0.29,-0.1 0.51,-0.27 0.68,-0.51 0.16,-0.24 0.24,-0.54 0.24,-0.89 0,-0.41 -0.11,-0.73 -0.32,-0.98 -0.22,-0.25 -0.52,-0.4 -0.91,-0.47 -0.19,-0.02 -0.78,-0.04 -1.76,-0.04l-1.88 0 0 3.04zm9.54 6.88l0 -11.93 2.42 0 0 11.93 -2.42 0zm9.38 0l0 -11.93 2.41 0 0 5.28 4.87 -5.28 3.24 0 -4.5 4.64 4.74 7.29 -3.12 0 -3.28 -5.6 -1.95 1.99 0 3.61 -2.41 0zm22.75 0l-2.6 0 -1.03 -2.72 -4.79 0 -0.99 2.72 -2.56 0 4.64 -11.93 2.55 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.71 4.73l0 -11.93 5.07 0c1.27,0 2.2,0.1 2.78,0.32 0.58,0.21 1.04,0.59 1.39,1.14 0.35,0.55 0.52,1.18 0.52,1.88 0,0.9 -0.26,1.64 -0.78,2.22 -0.53,0.58 -1.31,0.95 -2.36,1.1 0.52,0.31 0.95,0.64 1.29,1 0.34,0.37 0.79,1.01 1.36,1.94l1.46 2.33 -2.88 0 -1.73 -2.61c-0.62,-0.92 -1.04,-1.5 -1.28,-1.75 -0.22,-0.24 -0.46,-0.4 -0.72,-0.49 -0.26,-0.09 -0.66,-0.13 -1.22,-0.13l-0.49 0 0 4.98 -2.41 0zm2.41 -6.88l1.79 0c1.15,0 1.87,-0.05 2.16,-0.15 0.28,-0.1 0.51,-0.27 0.67,-0.51 0.17,-0.24 0.25,-0.54 0.25,-0.89 0,-0.41 -0.11,-0.73 -0.32,-0.98 -0.22,-0.25 -0.52,-0.4 -0.91,-0.47 -0.2,-0.02 -0.78,-0.04 -1.76,-0.04l-1.88 0 0 3.04zm9.62 6.88l0 -11.93 5.08 0c1.27,0 2.2,0.1 2.78,0.32 0.58,0.21 1.04,0.59 1.39,1.14 0.34,0.55 0.52,1.18 0.52,1.88 0,0.9 -0.26,1.64 -0.79,2.22 -0.52,0.58 -1.31,0.95 -2.35,1.1 0.52,0.31 0.95,0.64 1.28,1 0.34,0.37 0.8,1.01 1.37,1.94l1.45 2.33 -2.88 0 -1.72 -2.61c-0.62,-0.92 -1.05,-1.5 -1.28,-1.75 -0.23,-0.24 -0.47,-0.4 -0.72,-0.49 -0.26,-0.09 -0.67,-0.13 -1.22,-0.13l-0.49 0 0 4.98 -2.42 0zm2.42 -6.88l1.78 0c1.16,0 1.88,-0.05 2.16,-0.15 0.29,-0.1 0.52,-0.27 0.68,-0.51 0.16,-0.24 0.24,-0.54 0.24,-0.89 0,-0.41 -0.1,-0.73 -0.32,-0.98 -0.21,-0.25 -0.52,-0.4 -0.9,-0.47 -0.2,-0.02 -0.79,-0.04 -1.76,-0.04l-1.88 0 0 3.04zm20.37 6.88l-2.61 0 -1.03 -2.72 -4.78 0 -0.99 2.72 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0z" />
                                <path class="fil24"
                                    d="M856.89 1395.52l0 -11.93 2.42 0 0 11.93 -2.42 0zm4.72 0l0 -11.93 2.33 0 4.92 8 0 -8 2.23 0 0 11.93 -2.41 0 -4.84 -7.84 0 7.84 -2.23 0zm17.58 -4.38l0 -2.02 5.19 0 0 4.76c-0.51,0.5 -1.24,0.93 -2.2,1.3 -0.95,0.37 -1.92,0.56 -2.9,0.56 -1.25,0 -2.34,-0.26 -3.27,-0.79 -0.92,-0.52 -1.62,-1.27 -2.09,-2.25 -0.46,-0.97 -0.7,-2.04 -0.7,-3.19 0,-1.24 0.27,-2.35 0.79,-3.31 0.52,-0.97 1.28,-1.72 2.28,-2.23 0.77,-0.4 1.72,-0.6 2.86,-0.6 1.48,0 2.64,0.31 3.47,0.94 0.83,0.62 1.37,1.48 1.61,2.58l-2.4 0.45c-0.17,-0.59 -0.49,-1.05 -0.95,-1.39 -0.46,-0.34 -1.04,-0.51 -1.74,-0.51 -1.05,0 -1.88,0.33 -2.5,1 -0.62,0.67 -0.93,1.66 -0.93,2.98 0,1.42 0.31,2.48 0.94,3.19 0.63,0.71 1.45,1.06 2.47,1.06 0.5,0 1.01,-0.1 1.52,-0.29 0.5,-0.2 0.94,-0.44 1.3,-0.73l0 -1.51 -2.75 0zm7.48 4.38l0 -11.83 2.42 0 0 9.82 5.98 0 0 2.01 -8.4 0zm9.62 -5.89c0,-1.22 0.18,-2.24 0.54,-3.07 0.27,-0.61 0.64,-1.15 1.11,-1.64 0.47,-0.48 0.99,-0.84 1.55,-1.07 0.74,-0.32 1.6,-0.48 2.57,-0.48 1.76,0 3.17,0.55 4.22,1.64 1.06,1.1 1.59,2.62 1.59,4.56 0,1.93 -0.53,3.44 -1.57,4.53 -1.05,1.09 -2.45,1.64 -4.21,1.64 -1.77,0 -3.18,-0.54 -4.23,-1.63 -1.05,-1.08 -1.57,-2.58 -1.57,-4.48zm2.48 -0.08c0,1.35 0.31,2.38 0.94,3.08 0.62,0.69 1.42,1.04 2.38,1.04 0.96,0 1.75,-0.34 2.37,-1.04 0.62,-0.69 0.92,-1.73 0.92,-3.12 0,-1.36 -0.3,-2.39 -0.9,-3.06 -0.6,-0.67 -1.39,-1.01 -2.39,-1.01 -1,0 -1.8,0.34 -2.41,1.02 -0.61,0.69 -0.91,1.71 -0.91,3.09zm13.66 5.97l0 -9.91 -3.53 0 0 -2.02 9.46 0 0 2.02 -3.51 0 0 9.91 -2.42 0z" />
                                <path class="fil24"
                                    d="M1178.74 1395.52l0 -11.83 2.41 0 0 9.82 5.99 0 0 2.01 -8.4 0zm20.86 0l-2.6 0 -1.03 -2.71 -4.79 0 -0.99 2.71 -2.56 0 4.64 -11.93 2.55 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.77 4.73l0 -11.83 2.42 0 0 9.82 5.98 0 0 2.01 -8.4 0zm9.61 -5.89c0,-1.22 0.19,-2.24 0.55,-3.07 0.27,-0.61 0.64,-1.15 1.11,-1.64 0.47,-0.48 0.99,-0.84 1.54,-1.07 0.75,-0.32 1.61,-0.48 2.58,-0.48 1.76,0 3.17,0.55 4.22,1.64 1.06,1.1 1.59,2.62 1.59,4.56 0,1.93 -0.53,3.44 -1.57,4.53 -1.05,1.09 -2.45,1.64 -4.21,1.64 -1.77,0 -3.19,-0.54 -4.23,-1.63 -1.05,-1.08 -1.58,-2.58 -1.58,-4.48zm2.49 -0.08c0,1.35 0.31,2.38 0.94,3.08 0.62,0.69 1.42,1.04 2.38,1.04 0.96,0 1.75,-0.34 2.37,-1.04 0.62,-0.69 0.92,-1.73 0.92,-3.12 0,-1.36 -0.3,-2.39 -0.9,-3.06 -0.6,-0.67 -1.4,-1.01 -2.39,-1.01 -1,0 -1.8,0.34 -2.41,1.02 -0.61,0.69 -0.91,1.71 -0.91,3.09z" />
                                <path class="fil24"
                                    d="M1046.08 1391.66l2.35 -0.24c0.14,0.79 0.42,1.36 0.86,1.73 0.43,0.37 1.01,0.56 1.74,0.56 0.77,0 1.35,-0.17 1.74,-0.49 0.4,-0.33 0.59,-0.72 0.59,-1.16 0,-0.28 -0.08,-0.52 -0.24,-0.72 -0.17,-0.19 -0.46,-0.37 -0.87,-0.51 -0.28,-0.1 -0.92,-0.27 -1.92,-0.52 -1.28,-0.33 -2.19,-0.72 -2.71,-1.19 -0.73,-0.66 -1.09,-1.46 -1.09,-2.41 0,-0.61 0.17,-1.18 0.51,-1.71 0.35,-0.53 0.84,-0.93 1.49,-1.21 0.65,-0.28 1.43,-0.42 2.34,-0.42 1.49,0 2.62,0.33 3.37,1 0.76,0.66 1.15,1.54 1.19,2.65l-2.42 0.09c-0.1,-0.62 -0.32,-1.06 -0.65,-1.33 -0.34,-0.27 -0.85,-0.41 -1.52,-0.41 -0.69,0 -1.24,0.15 -1.63,0.44 -0.25,0.18 -0.38,0.43 -0.38,0.74 0,0.28 0.12,0.53 0.36,0.73 0.3,0.25 1.04,0.52 2.21,0.8 1.17,0.27 2.03,0.56 2.59,0.86 0.56,0.29 1,0.7 1.31,1.21 0.32,0.52 0.48,1.15 0.48,1.9 0,0.68 -0.19,1.33 -0.57,1.92 -0.38,0.6 -0.92,1.05 -1.61,1.33 -0.7,0.3 -1.56,0.44 -2.6,0.44 -1.51,0 -2.66,-0.35 -3.47,-1.04 -0.81,-0.7 -1.29,-1.71 -1.45,-3.04zm11.75 3.86l0 -11.93 8.83 0 0 2.02 -6.41 0 0 2.65 5.96 0 0 2.01 -5.96 0 0 3.24 6.65 0 0 2.01 -9.07 0zm11.12 0l0 -11.93 5.07 0c1.28,0 2.2,0.11 2.78,0.32 0.58,0.22 1.04,0.6 1.39,1.14 0.35,0.55 0.52,1.18 0.52,1.88 0,0.9 -0.26,1.64 -0.78,2.22 -0.53,0.59 -1.31,0.95 -2.36,1.11 0.52,0.3 0.95,0.63 1.29,1 0.34,0.36 0.79,1.01 1.36,1.94l1.46 2.32 -2.88 0 -1.73 -2.6c-0.62,-0.93 -1.04,-1.51 -1.27,-1.75 -0.23,-0.24 -0.47,-0.41 -0.73,-0.5 -0.26,-0.09 -0.66,-0.13 -1.22,-0.13l-0.49 0 0 4.98 -2.41 0zm2.41 -6.88l1.79 0c1.15,0 1.87,-0.05 2.16,-0.15 0.29,-0.09 0.51,-0.26 0.68,-0.5 0.16,-0.24 0.24,-0.54 0.24,-0.9 0,-0.4 -0.11,-0.73 -0.32,-0.98 -0.22,-0.24 -0.52,-0.4 -0.91,-0.46 -0.2,-0.03 -0.78,-0.04 -1.76,-0.04l-1.88 0 0 3.03zm9.62 6.88l0 -11.93 8.83 0 0 2.02 -6.41 0 0 2.65 5.96 0 0 2.01 -5.96 0 0 3.24 6.65 0 0 2.01 -9.07 0zm11.12 -11.93l4.77 0c0.95,0 1.65,0.04 2.11,0.12 0.47,0.08 0.88,0.24 1.25,0.49 0.37,0.25 0.67,0.58 0.92,0.99 0.24,0.42 0.36,0.88 0.36,1.4 0,0.55 -0.15,1.07 -0.45,1.53 -0.3,0.47 -0.7,0.81 -1.22,1.05 0.73,0.21 1.28,0.57 1.67,1.08 0.39,0.51 0.59,1.11 0.59,1.81 0,0.54 -0.13,1.07 -0.38,1.58 -0.25,0.52 -0.6,0.93 -1.04,1.24 -0.43,0.3 -0.97,0.49 -1.61,0.56 -0.4,0.04 -1.37,0.07 -2.91,0.08l-4.06 0 0 -11.93zm2.41 1.98l0 2.75 1.58 0c0.94,0 1.52,-0.01 1.75,-0.04 0.41,-0.05 0.74,-0.19 0.97,-0.42 0.24,-0.24 0.35,-0.55 0.35,-0.93 0,-0.37 -0.1,-0.67 -0.3,-0.9 -0.2,-0.23 -0.51,-0.37 -0.91,-0.42 -0.23,-0.02 -0.92,-0.04 -2.05,-0.04l-1.39 0zm0 4.74l0 3.2 2.24 0c0.86,0 1.42,-0.03 1.65,-0.08 0.36,-0.06 0.65,-0.22 0.88,-0.47 0.22,-0.26 0.33,-0.6 0.33,-1.02 0,-0.36 -0.08,-0.66 -0.26,-0.91 -0.17,-0.25 -0.42,-0.44 -0.75,-0.55 -0.33,-0.11 -1.04,-0.17 -2.14,-0.17l-1.95 0zm9.62 5.21l0 -11.93 5.08 0c1.27,0 2.2,0.11 2.78,0.32 0.58,0.22 1.04,0.6 1.39,1.14 0.35,0.55 0.52,1.18 0.52,1.88 0,0.9 -0.26,1.64 -0.79,2.22 -0.52,0.59 -1.3,0.95 -2.35,1.11 0.52,0.3 0.95,0.63 1.28,1 0.34,0.36 0.8,1.01 1.37,1.94l1.46 2.32 -2.88 0 -1.73 -2.6c-0.62,-0.93 -1.05,-1.51 -1.28,-1.75 -0.22,-0.24 -0.47,-0.41 -0.72,-0.5 -0.26,-0.09 -0.67,-0.13 -1.22,-0.13l-0.49 0 0 4.98 -2.42 0zm2.42 -6.88l1.78 0c1.16,0 1.88,-0.05 2.17,-0.15 0.28,-0.09 0.51,-0.26 0.67,-0.5 0.17,-0.24 0.25,-0.54 0.25,-0.9 0,-0.4 -0.11,-0.73 -0.33,-0.98 -0.21,-0.24 -0.51,-0.4 -0.9,-0.46 -0.2,-0.03 -0.78,-0.04 -1.76,-0.04l-1.88 0 0 3.03zm9.12 0.99c0,-1.22 0.18,-2.24 0.55,-3.07 0.27,-0.61 0.64,-1.15 1.11,-1.64 0.47,-0.48 0.98,-0.84 1.54,-1.07 0.74,-0.32 1.6,-0.48 2.57,-0.48 1.76,0 3.17,0.55 4.23,1.64 1.05,1.1 1.58,2.62 1.58,4.56 0,1.93 -0.52,3.44 -1.57,4.53 -1.05,1.09 -2.45,1.64 -4.2,1.64 -1.78,0 -3.19,-0.54 -4.24,-1.63 -1.05,-1.08 -1.57,-2.58 -1.57,-4.48zm2.48 -0.08c0,1.35 0.32,2.38 0.94,3.08 0.63,0.69 1.42,1.04 2.38,1.04 0.97,0 1.75,-0.34 2.37,-1.04 0.62,-0.69 0.93,-1.73 0.93,-3.12 0,-1.36 -0.3,-2.39 -0.9,-3.06 -0.6,-0.67 -1.4,-1.01 -2.4,-1.01 -0.99,0 -1.8,0.34 -2.4,1.02 -0.61,0.69 -0.92,1.71 -0.92,3.09zm10.98 5.97l0 -11.93 8.2 0 0 2.02 -5.78 0 0 2.83 5 0 0 2.02 -5 0 0 5.06 -2.42 0zm10.18 0l0 -11.93 8.2 0 0 2.02 -5.78 0 0 2.83 5 0 0 2.02 -5 0 0 5.06 -2.42 0z" />
                                <path class="fil23"
                                    d="M769.56 2317.76l9.54 0c1.9,0 3.3,0.08 4.23,0.24 0.93,0.16 1.76,0.49 2.5,0.98 0.73,0.5 1.34,1.16 1.83,1.99 0.49,0.83 0.73,1.76 0.73,2.79 0,1.11 -0.3,2.14 -0.9,3.07 -0.6,0.93 -1.41,1.62 -2.44,2.09 1.45,0.43 2.56,1.15 3.34,2.17 0.78,1.02 1.17,2.22 1.17,3.61 0,1.09 -0.25,2.14 -0.76,3.17 -0.5,1.03 -1.19,1.85 -2.07,2.47 -0.87,0.61 -1.95,0.99 -3.23,1.13 -0.8,0.08 -2.74,0.14 -5.81,0.16l-8.13 0 0 -23.87zm4.83 3.97l0 5.5 3.16 0c1.87,0 3.04,-0.03 3.49,-0.08 0.82,-0.1 1.47,-0.38 1.95,-0.85 0.47,-0.47 0.7,-1.09 0.7,-1.86 0,-0.74 -0.2,-1.33 -0.61,-1.79 -0.4,-0.46 -1.01,-0.74 -1.81,-0.84 -0.48,-0.05 -1.85,-0.08 -4.11,-0.08l-2.77 0zm0 9.47l0 6.4 4.47 0c1.73,0 2.84,-0.05 3.3,-0.15 0.72,-0.13 1.3,-0.45 1.75,-0.95 0.45,-0.51 0.68,-1.19 0.68,-2.04 0,-0.72 -0.17,-1.32 -0.52,-1.82 -0.34,-0.5 -0.85,-0.87 -1.51,-1.1 -0.65,-0.23 -2.08,-0.34 -4.27,-0.34l-3.9 0zm19.24 10.43l0 -23.87 17.67 0 0 4.04 -12.84 0 0 5.3 11.94 0 0 4.03 -11.94 0 0 6.47 13.3 0 0 4.03 -18.13 0zm22.23 0l0 -23.87 17.67 0 0 4.04 -12.83 0 0 5.3 11.93 0 0 4.03 -11.93 0 0 6.47 13.3 0 0 4.03 -18.14 0zm22.37 0l0 -23.67 4.83 0 0 19.64 11.97 0 0 4.03 -16.8 0zm20.06 0l0 -23.87 4.83 0 0 23.87 -4.83 0zm9.43 0l0 -23.87 4.68 0 9.82 16 0 -16 4.47 0 0 23.87 -4.83 0 -9.67 -15.69 0 15.69 -4.47 0zm24.07 0l0 -23.87 17.67 0 0 4.04 -12.84 0 0 5.3 11.94 0 0 4.03 -11.94 0 0 6.47 13.3 0 0 4.03 -18.13 0z" />
                                <path class="fil23"
                                    d="M1211.29 2356.87l-11.93 0 0 -8.2 2.02 0 0 5.78 2.83 0 0 -5 2.02 0 0 5 5.06 0 0 2.42zm0 -20.02l0 2.61 -2.71 1.03 0 4.78 2.71 1 0 2.55 -11.93 -4.63 0 -2.55 11.93 -4.79zm-4.73 4.42l-4.42 1.66 4.42 1.61 0 -3.27zm-7.2 -5.7l0 -4.77c0,-0.95 0.04,-1.65 0.12,-2.12 0.08,-0.46 0.24,-0.88 0.49,-1.24 0.25,-0.37 0.58,-0.68 0.99,-0.92 0.42,-0.24 0.88,-0.37 1.4,-0.37 0.55,0 1.07,0.15 1.53,0.45 0.47,0.3 0.81,0.71 1.05,1.23 0.21,-0.73 0.57,-1.29 1.08,-1.68 0.51,-0.39 1.11,-0.58 1.81,-0.58 0.54,0 1.07,0.12 1.58,0.38 0.52,0.25 0.93,0.59 1.24,1.03 0.3,0.44 0.49,0.98 0.56,1.62 0.04,0.4 0.07,1.37 0.08,2.91l0 4.06 -11.93 0zm1.98 -2.42l2.75 0 0 -1.57c0,-0.94 -0.01,-1.52 -0.04,-1.75 -0.05,-0.41 -0.19,-0.74 -0.42,-0.97 -0.24,-0.24 -0.55,-0.36 -0.93,-0.36 -0.37,0 -0.67,0.11 -0.9,0.31 -0.23,0.2 -0.37,0.5 -0.42,0.9 -0.02,0.24 -0.04,0.93 -0.04,2.06l0 1.38zm4.74 0l3.2 0 0 -2.23c0,-0.87 -0.03,-1.42 -0.08,-1.65 -0.06,-0.36 -0.22,-0.65 -0.47,-0.88 -0.26,-0.22 -0.6,-0.34 -1.02,-0.34 -0.36,0 -0.66,0.09 -0.92,0.26 -0.24,0.18 -0.43,0.43 -0.54,0.76 -0.12,0.32 -0.17,1.04 -0.17,2.14l0 1.94zm5.21 -9.62l-11.93 0 0 -8.83 2.02 0 0 6.42 2.65 0 0 -5.97 2.01 0 0 5.97 3.24 0 0 -6.65 2.01 0 0 9.06zm0 -11.11l-11.93 0 0 -5.08c0,-1.27 0.11,-2.2 0.32,-2.78 0.21,-0.58 0.6,-1.04 1.14,-1.39 0.55,-0.34 1.18,-0.52 1.88,-0.52 0.9,0 1.64,0.26 2.22,0.79 0.59,0.52 0.95,1.31 1.11,2.35 0.3,-0.52 0.63,-0.95 1,-1.28 0.36,-0.34 1.01,-0.8 1.93,-1.37l2.33 -1.46 0 2.88 -2.6 1.73c-0.93,0.62 -1.51,1.05 -1.75,1.28 -0.24,0.22 -0.41,0.47 -0.5,0.72 -0.09,0.26 -0.13,0.67 -0.13,1.22l0 0.49 4.98 0 0 2.42zm-6.88 -2.42l0 -1.78c0,-1.16 -0.05,-1.88 -0.15,-2.17 -0.1,-0.28 -0.26,-0.51 -0.5,-0.67 -0.24,-0.16 -0.54,-0.25 -0.9,-0.25 -0.4,0 -0.73,0.11 -0.98,0.33 -0.24,0.21 -0.4,0.51 -0.46,0.9 -0.03,0.2 -0.04,0.79 -0.04,1.76l0 1.88 3.03 0zm17.98 49.41l0.71 -2.33c1.32,0.36 2.29,0.96 2.93,1.79 0.64,0.83 0.95,1.89 0.95,3.17 0,1.58 -0.54,2.89 -1.62,3.91 -1.08,1.02 -2.56,1.53 -4.44,1.53 -1.99,0 -3.54,-0.51 -4.63,-1.54 -1.1,-1.02 -1.65,-2.37 -1.65,-4.05 0,-1.46 0.43,-2.64 1.29,-3.55 0.51,-0.55 1.25,-0.96 2.2,-1.23l0.57 2.39c-0.61,0.14 -1.1,0.43 -1.46,0.88 -0.36,0.45 -0.54,0.99 -0.54,1.63 0,0.89 0.32,1.61 0.96,2.16 0.63,0.55 1.66,0.83 3.08,0.83 1.5,0 2.58,-0.28 3.22,-0.82 0.64,-0.54 0.96,-1.25 0.96,-2.12 0,-0.64 -0.2,-1.19 -0.61,-1.65 -0.41,-0.46 -1.05,-0.8 -1.92,-1zm4.4 -15.15l0 2.6 -2.72 1.03 0 4.79 2.72 0.99 0 2.56 -11.94 -4.64 0 -2.55 11.94 -4.78zm-4.74 4.42l-4.41 1.66 4.41 1.61 0 -3.27zm0.87 -5.07l-0.23 -2.35c0.78,-0.14 1.36,-0.43 1.73,-0.86 0.37,-0.43 0.55,-1.01 0.55,-1.74 0,-0.77 -0.17,-1.35 -0.49,-1.75 -0.33,-0.39 -0.71,-0.58 -1.15,-0.58 -0.29,0 -0.53,0.08 -0.73,0.24 -0.19,0.17 -0.36,0.45 -0.51,0.87 -0.1,0.28 -0.27,0.92 -0.52,1.92 -0.32,1.28 -0.72,2.18 -1.19,2.7 -0.66,0.73 -1.46,1.1 -2.41,1.1 -0.6,0 -1.18,-0.17 -1.71,-0.52 -0.53,-0.34 -0.93,-0.83 -1.21,-1.48 -0.28,-0.65 -0.41,-1.43 -0.41,-2.34 0,-1.5 0.33,-2.62 0.99,-3.37 0.66,-0.76 1.55,-1.15 2.65,-1.19l0.09 2.42c-0.62,0.1 -1.06,0.32 -1.33,0.65 -0.27,0.34 -0.41,0.85 -0.41,1.52 0,0.69 0.15,1.24 0.44,1.63 0.18,0.25 0.43,0.38 0.74,0.38 0.29,0 0.53,-0.12 0.73,-0.36 0.26,-0.3 0.52,-1.04 0.8,-2.21 0.28,-1.17 0.57,-2.03 0.86,-2.59 0.3,-0.56 0.7,-1 1.21,-1.32 0.52,-0.31 1.15,-0.47 1.9,-0.47 0.69,0 1.33,0.19 1.93,0.57 0.59,0.38 1.04,0.91 1.33,1.61 0.29,0.69 0.43,1.56 0.43,2.6 0,1.5 -0.35,2.66 -1.04,3.47 -0.7,0.81 -1.71,1.29 -3.04,1.45zm3.87 -14.43l-9.92 0 0 3.53 -2.02 0 0 -9.47 2.02 0 0 3.52 9.92 0 0 2.42zm0 -7.5l-11.94 0 0 -8.83 2.02 0 0 6.41 2.65 0 0 -5.96 2.02 0 0 5.96 3.23 0 0 -6.65 2.02 0 0 9.07zm0 -11.19l-11.84 0 0 -2.41 9.82 0 0 -5.98 2.02 0 0 8.39zm0 -10.18l-11.84 0 0 -2.41 9.82 0 0 -5.98 2.02 0 0 8.39z" />
                                <path class="fil23"
                                    d="M811.46 1940l0 -17.9 13.25 0 0 3.02 -9.62 0 0 3.98 8.95 0 0 3.02 -8.95 0 0 4.85 9.97 0 0 3.03 -13.6 0zm16.68 0l0 -17.9 3.51 0 7.36 11.99 0 -11.99 3.35 0 0 17.9 -3.62 0 -7.25 -11.77 0 11.77 -3.35 0zm18.05 0l0 -17.9 7.61 0c1.92,0 3.31,0.16 4.18,0.48 0.87,0.32 1.56,0.89 2.08,1.71 0.52,0.83 0.78,1.76 0.78,2.82 0,1.35 -0.39,2.46 -1.18,3.33 -0.78,0.88 -1.96,1.43 -3.53,1.66 0.78,0.45 1.42,0.95 1.93,1.5 0.51,0.54 1.19,1.51 2.05,2.9l2.18 3.5 -4.32 0 -2.59 -3.91c-0.93,-1.39 -1.57,-2.27 -1.91,-2.63 -0.34,-0.36 -0.71,-0.61 -1.09,-0.74 -0.39,-0.13 -1,-0.2 -1.83,-0.2l-0.73 0 0 7.48 -3.63 0zm3.63 -10.33l2.67 0c1.74,0 2.81,-0.07 3.25,-0.22 0.43,-0.15 0.77,-0.4 1.01,-0.76 0.25,-0.36 0.37,-0.81 0.37,-1.34 0,-0.61 -0.17,-1.09 -0.49,-1.47 -0.32,-0.37 -0.77,-0.6 -1.35,-0.7 -0.3,-0.04 -1.18,-0.06 -2.64,-0.06l-2.82 0 0 4.55zm14.3 10.33l0 -17.9 3.63 0 0 17.9 -3.63 0zm18.52 -6.6l3.5 1.07c-0.54,1.97 -1.43,3.43 -2.68,4.39 -1.25,0.96 -2.83,1.44 -4.76,1.44 -2.38,0 -4.33,-0.82 -5.86,-2.44 -1.53,-1.63 -2.3,-3.85 -2.3,-6.67 0,-2.98 0.77,-5.29 2.31,-6.94 1.54,-1.65 3.56,-2.48 6.07,-2.48 2.19,0 3.97,0.65 5.34,1.95 0.82,0.76 1.42,1.86 1.83,3.3l-3.57 0.85c-0.22,-0.92 -0.66,-1.66 -1.33,-2.19 -0.67,-0.54 -1.49,-0.81 -2.45,-0.81 -1.33,0 -2.41,0.48 -3.23,1.43 -0.83,0.95 -1.24,2.49 -1.24,4.63 0,2.25 0.4,3.87 1.22,4.82 0.81,0.97 1.87,1.45 3.18,1.45 0.96,0 1.79,-0.31 2.48,-0.92 0.69,-0.61 1.19,-1.57 1.49,-2.88zm5.86 -2.25c0,-1.82 0.27,-3.35 0.82,-4.6 0.4,-0.91 0.96,-1.73 1.66,-2.45 0.71,-0.73 1.48,-1.27 2.32,-1.62 1.11,-0.47 2.4,-0.71 3.86,-0.71 2.64,0 4.75,0.82 6.34,2.46 1.58,1.64 2.37,3.92 2.37,6.84 0,2.9 -0.79,5.16 -2.36,6.8 -1.57,1.63 -3.67,2.45 -6.3,2.45 -2.66,0 -4.78,-0.81 -6.36,-2.44 -1.57,-1.63 -2.35,-3.87 -2.35,-6.73zm3.72 -0.12c0,2.03 0.47,3.57 1.41,4.62 0.94,1.05 2.13,1.57 3.57,1.57 1.45,0 2.63,-0.52 3.56,-1.56 0.92,-1.04 1.39,-2.6 1.39,-4.68 0,-2.05 -0.45,-3.58 -1.36,-4.59 -0.9,-1.01 -2.09,-1.52 -3.59,-1.52 -1.49,0 -2.7,0.51 -3.61,1.53 -0.91,1.03 -1.37,2.57 -1.37,4.63zm-100.24 36.9l0 -17.91 5.43 0 3.21 12.21 3.17 -12.21 5.44 0 0 17.91 -3.35 0 -0.01 -14.1 -3.53 14.1 -3.49 0 -3.51 -14.1 -0.01 14.1 -3.35 0zm37 0l-3.91 0 -1.54 -4.08 -7.18 0 -1.49 4.08 -3.83 0 6.95 -17.91 3.83 0 7.17 17.91zm-6.63 -7.1l-2.48 -6.63 -2.42 6.63 4.9 0zm8.56 7.1l0 -17.91 7.61 0c1.91,0 3.3,0.17 4.17,0.49 0.87,0.32 1.56,0.89 2.09,1.71 0.52,0.83 0.78,1.76 0.78,2.82 0,1.35 -0.39,2.46 -1.18,3.33 -0.79,0.88 -1.96,1.43 -3.53,1.66 0.78,0.45 1.42,0.95 1.92,1.5 0.51,0.54 1.2,1.51 2.05,2.9l2.19 3.5 -4.32 0 -2.59 -3.91c-0.93,-1.39 -1.57,-2.27 -1.92,-2.63 -0.34,-0.36 -0.7,-0.61 -1.08,-0.74 -0.39,-0.13 -1,-0.2 -1.83,-0.2l-0.74 0 0 7.48 -3.62 0zm3.62 -10.33l2.68 0c1.73,0 2.81,-0.07 3.24,-0.22 0.43,-0.15 0.77,-0.4 1.02,-0.76 0.24,-0.36 0.36,-0.81 0.36,-1.35 0,-0.6 -0.16,-1.08 -0.48,-1.46 -0.32,-0.37 -0.77,-0.6 -1.36,-0.7 -0.29,-0.04 -1.17,-0.06 -2.64,-0.06l-2.82 0 0 4.55zm14.31 10.33l0 -17.91 3.62 0 0 17.91 -3.62 0zm7.07 0l0 -17.91 3.51 0 7.36 12 0 -12 3.35 0 0 17.91 -3.62 0 -7.25 -11.77 0 11.77 -3.35 0zm18.05 0l0 -17.91 13.25 0 0 3.03 -9.62 0 0 3.98 8.95 0 0 3.02 -8.95 0 0 4.85 9.97 0 0 3.03 -13.6 0zm16.78 0l0 -17.76 3.62 0 0 14.73 8.98 0 0 3.03 -12.6 0zm15.27 0l0 -17.76 3.62 0 0 14.73 8.98 0 0 3.03 -12.6 0zm15.05 0l0 -17.91 3.62 0 0 17.91 -3.62 0z" />
                                <path class="fil24"
                                    d="M655.12 1658.24l-3.2 -8.95 1.96 0 2.27 6.62 2.18 -6.62 1.93 0 -3.18 8.95 -1.96 0zm8.06 0l0 -7.44 -2.64 0 0 -1.51 7.09 0 0 1.51 -2.63 0 0 7.44 -1.82 0zm5.63 0l0 -8.95 3.8 0c0.96,0 1.66,0.08 2.09,0.24 0.43,0.16 0.78,0.45 1.04,0.86 0.26,0.41 0.39,0.88 0.39,1.41 0,0.67 -0.19,1.22 -0.59,1.66 -0.39,0.44 -0.98,0.72 -1.76,0.83 0.39,0.23 0.71,0.48 0.96,0.75 0.25,0.27 0.6,0.76 1.03,1.45l1.09 1.75 -2.16 0 -1.3 -1.95c-0.46,-0.7 -0.78,-1.14 -0.96,-1.32 -0.17,-0.18 -0.35,-0.3 -0.54,-0.37 -0.19,-0.06 -0.5,-0.1 -0.91,-0.1l-0.37 0 0 3.74 -1.81 0zm1.81 -5.16l1.34 0c0.86,0 1.4,-0.04 1.62,-0.11 0.21,-0.08 0.39,-0.2 0.51,-0.38 0.12,-0.18 0.18,-0.41 0.18,-0.68 0,-0.3 -0.08,-0.54 -0.24,-0.73 -0.16,-0.18 -0.39,-0.3 -0.68,-0.35 -0.15,-0.02 -0.59,-0.03 -1.32,-0.03l-1.41 0 0 2.28zm7.21 5.16l0 -8.95 6.63 0 0 1.51 -4.81 0 0 1.99 4.47 0 0 1.51 -4.47 0 0 2.43 4.98 0 0 1.51 -6.8 0zm8.34 0l0 -8.95 1.76 0 3.68 6 0 -6 1.67 0 0 8.95 -1.81 0 -3.62 -5.88 0 5.88 -1.68 0zm9.03 -8.95l3.29 0c0.75,0 1.31,0.06 1.7,0.17 0.53,0.15 0.98,0.43 1.35,0.83 0.37,0.39 0.66,0.87 0.85,1.45 0.2,0.57 0.3,1.27 0.3,2.11 0,0.74 -0.1,1.37 -0.28,1.9 -0.22,0.66 -0.54,1.18 -0.96,1.58 -0.31,0.31 -0.73,0.55 -1.26,0.72 -0.4,0.13 -0.93,0.19 -1.6,0.19l-3.39 0 0 -8.95zm1.81 1.51l0 5.93 1.35 0c0.5,0 0.86,-0.03 1.08,-0.09 0.3,-0.07 0.54,-0.2 0.73,-0.37 0.19,-0.18 0.35,-0.46 0.47,-0.86 0.12,-0.4 0.18,-0.95 0.18,-1.64 0,-0.7 -0.06,-1.22 -0.18,-1.6 -0.12,-0.37 -0.29,-0.65 -0.51,-0.86 -0.22,-0.21 -0.5,-0.35 -0.83,-0.42 -0.25,-0.06 -0.75,-0.09 -1.48,-0.09l-0.81 0zm7.22 7.44l0 -8.95 6.62 0 0 1.51 -4.81 0 0 1.99 4.47 0 0 1.51 -4.47 0 0 2.43 4.99 0 0 1.51 -6.8 0zm-33.98 11.62l0 -8.88 1.81 0 0 7.36 4.49 0 0 1.52 -6.3 0zm7.58 -8.95l1.82 0 0 4.85c0,0.77 0.02,1.27 0.06,1.49 0.08,0.37 0.26,0.67 0.55,0.89 0.29,0.22 0.68,0.33 1.18,0.33 0.51,0 0.89,-0.1 1.15,-0.31 0.26,-0.21 0.41,-0.47 0.47,-0.78 0.05,-0.3 0.07,-0.81 0.07,-1.52l0 -4.95 1.82 0 0 4.7c0,1.08 -0.05,1.84 -0.15,2.28 -0.1,0.45 -0.28,0.82 -0.54,1.13 -0.26,0.3 -0.61,0.55 -1.05,0.73 -0.44,0.18 -1.01,0.27 -1.71,0.27 -0.86,0 -1.5,-0.1 -1.94,-0.3 -0.44,-0.19 -0.79,-0.45 -1.05,-0.77 -0.25,-0.31 -0.42,-0.64 -0.5,-0.99 -0.12,-0.51 -0.18,-1.27 -0.18,-2.27l0 -4.78zm8.12 8.95l3.09 -4.67 -2.8 -4.28 2.11 0 1.77 2.66 1.76 -2.66 2.11 0 -2.81 4.28 3.09 4.67 -2.17 0 -1.99 -3.03 -1.98 3.03 -2.18 0z" />
                                <path class="fil24"
                                    d="M675 2380.42l0 -8.95 2.72 0 1.6 6.1 1.59 -6.1 2.72 0 0 8.95 -1.68 0 -0.01 -7.05 -1.76 7.05 -1.74 0 -1.76 -7.05 0 7.05 -1.68 0zm10.38 0l0 -8.95 1.81 0 0 8.95 -1.81 0zm2.63 0l3.08 -4.67 -2.8 -4.28 2.11 0 1.77 2.66 1.76 -2.66 2.11 0 -2.8 4.28 3.08 4.67 -2.17 0 -1.99 -3.03 -1.98 3.03 -2.17 0zm-27.98 11.61l0 -8.94 1.81 0 0 8.94 -1.81 0zm3.51 0l0 -8.94 2.72 0 1.6 6.1 1.59 -6.1 2.72 0 0 8.94 -1.68 0 0 -7.04 -1.77 7.04 -1.74 0 -1.76 -7.04 0 7.04 -1.68 0zm10.44 0l0 -8.94 2.9 0c1.1,0 1.81,0.04 2.14,0.13 0.52,0.13 0.95,0.43 1.29,0.88 0.35,0.45 0.52,1.03 0.52,1.74 0,0.55 -0.1,1.01 -0.3,1.38 -0.2,0.38 -0.45,0.67 -0.76,0.89 -0.3,0.21 -0.61,0.35 -0.93,0.42 -0.43,0.09 -1.06,0.13 -1.87,0.13l-1.18 0 0 3.37 -1.81 0zm1.81 -7.43l0 2.55 0.99 0c0.71,0 1.18,-0.05 1.42,-0.14 0.24,-0.1 0.43,-0.24 0.56,-0.45 0.14,-0.2 0.21,-0.43 0.21,-0.69 0,-0.33 -0.1,-0.6 -0.29,-0.81 -0.19,-0.21 -0.43,-0.35 -0.72,-0.4 -0.22,-0.04 -0.65,-0.06 -1.3,-0.06l-0.87 0zm6.53 7.43l0 -8.94 6.62 0 0 1.51 -4.81 0 0 1.99 4.48 0 0 1.51 -4.48 0 0 2.42 4.99 0 0 1.51 -6.8 0zm8.34 0l0 -8.94 3.8 0c0.96,0 1.65,0.08 2.09,0.24 0.43,0.16 0.78,0.44 1.04,0.85 0.26,0.41 0.39,0.88 0.39,1.41 0,0.68 -0.2,1.23 -0.59,1.67 -0.39,0.44 -0.98,0.71 -1.76,0.83 0.39,0.22 0.71,0.47 0.96,0.75 0.25,0.27 0.59,0.75 1.02,1.45l1.09 1.74 -2.16 0 -1.29 -1.95c-0.47,-0.69 -0.78,-1.13 -0.96,-1.31 -0.17,-0.18 -0.35,-0.31 -0.54,-0.37 -0.19,-0.07 -0.5,-0.1 -0.92,-0.1l-0.36 0 0 3.73 -1.81 0zm1.81 -5.16l1.33 0c0.87,0 1.41,-0.04 1.63,-0.11 0.21,-0.07 0.38,-0.2 0.5,-0.38 0.13,-0.18 0.19,-0.4 0.19,-0.67 0,-0.3 -0.08,-0.54 -0.24,-0.73 -0.16,-0.19 -0.39,-0.3 -0.68,-0.35 -0.15,-0.02 -0.59,-0.03 -1.32,-0.03l-1.41 0 0 2.27zm7.15 5.16l0 -8.94 1.81 0 0 8.94 -1.81 0zm11.6 0l-1.96 0 -0.77 -2.03 -3.59 0 -0.74 2.03 -1.92 0 3.48 -8.94 1.91 0 3.59 8.94zm-3.32 -3.55l-1.24 -3.31 -1.21 3.31 2.45 0zm-56.51 6.22l1.81 0 0 5.67c0,0.75 -0.07,1.32 -0.2,1.72 -0.17,0.52 -0.49,0.94 -0.95,1.25 -0.46,0.32 -1.06,0.48 -1.82,0.48 -0.88,0 -1.56,-0.25 -2.04,-0.74 -0.47,-0.5 -0.71,-1.22 -0.72,-2.18l1.72 -0.2c0.02,0.51 0.09,0.87 0.22,1.08 0.19,0.32 0.49,0.49 0.88,0.49 0.4,0 0.68,-0.12 0.85,-0.35 0.16,-0.23 0.25,-0.71 0.25,-1.43l0 -5.79zm3.74 8.95l0 -8.95 6.62 0 0 1.52 -4.81 0 0 1.98 4.47 0 0 1.52 -4.47 0 0 2.42 4.99 0 0 1.51 -6.8 0zm9.56 0l-2.1 -8.95 1.86 0 1.33 6.15 1.63 -6.15 2.16 0 1.56 6.26 1.36 -6.26 1.82 0 -2.15 8.95 -1.94 0 -1.76 -6.69 -1.78 6.69 -1.99 0zm10.57 0l0 -8.95 6.63 0 0 1.52 -4.82 0 0 1.98 4.48 0 0 1.52 -4.48 0 0 2.42 4.99 0 0 1.51 -6.8 0zm8.39 0l0 -8.87 1.81 0 0 7.36 4.49 0 0 1.51 -6.3 0zm7.63 0l0 -8.87 1.81 0 0 7.36 4.49 0 0 1.51 -6.3 0zm7.59 0l0 -8.95 6.62 0 0 1.52 -4.81 0 0 1.98 4.47 0 0 1.52 -4.47 0 0 2.42 4.99 0 0 1.51 -6.8 0zm8.34 0l0 -8.95 3.8 0c0.96,0 1.65,0.08 2.09,0.24 0.43,0.17 0.78,0.45 1.04,0.86 0.26,0.41 0.39,0.88 0.39,1.41 0,0.67 -0.2,1.23 -0.59,1.67 -0.39,0.43 -0.98,0.71 -1.76,0.82 0.38,0.23 0.71,0.48 0.96,0.75 0.25,0.28 0.59,0.76 1.02,1.46l1.09 1.74 -2.16 0 -1.29 -1.95c-0.47,-0.69 -0.78,-1.13 -0.96,-1.31 -0.17,-0.18 -0.35,-0.31 -0.54,-0.37 -0.2,-0.07 -0.5,-0.1 -0.92,-0.1l-0.36 0 0 3.73 -1.81 0zm1.81 -5.16l1.33 0c0.87,0 1.41,-0.04 1.63,-0.11 0.21,-0.07 0.38,-0.2 0.5,-0.38 0.13,-0.18 0.19,-0.4 0.19,-0.67 0,-0.3 -0.08,-0.54 -0.24,-0.73 -0.17,-0.19 -0.39,-0.31 -0.68,-0.35 -0.15,-0.02 -0.59,-0.03 -1.32,-0.03l-1.41 0 0 2.27zm9.1 5.16l0 -3.76 -3.28 -5.19 2.11 0 2.12 3.55 2.06 -3.55 2.08 0 -3.28 5.2 0 3.75 -1.81 0z" />
                                <path class="fil24"
                                    d="M989.6 951.88l-8.95 0 0 -2.72 6.11 -1.6 -6.11 -1.59 0 -2.72 8.95 0 0 1.68 -7.04 0 7.04 1.77 0 1.74 -7.04 1.75 7.04 0.01 0 1.68zm-4.42 -10.07c-0.91,0 -1.68,-0.13 -2.3,-0.41 -0.46,-0.2 -0.87,-0.48 -1.23,-0.83 -0.36,-0.35 -0.63,-0.74 -0.81,-1.16 -0.23,-0.56 -0.35,-1.2 -0.35,-1.93 0,-1.32 0.41,-2.37 1.23,-3.17 0.82,-0.79 1.96,-1.18 3.42,-1.18 1.45,0 2.58,0.39 3.4,1.18 0.82,0.78 1.22,1.83 1.22,3.15 0,1.33 -0.4,2.39 -1.22,3.17 -0.81,0.79 -1.93,1.18 -3.36,1.18zm-0.06 -1.86c1.01,0 1.78,-0.23 2.31,-0.7 0.52,-0.47 0.78,-1.07 0.78,-1.79 0,-0.72 -0.26,-1.31 -0.78,-1.78 -0.52,-0.46 -1.3,-0.69 -2.34,-0.69 -1.02,0 -1.79,0.22 -2.29,0.68 -0.51,0.45 -0.76,1.04 -0.76,1.79 0,0.75 0.25,1.35 0.76,1.81 0.52,0.45 1.29,0.68 2.32,0.68zm-4.47 -8.24l0 -3.57c0,-0.71 0.03,-1.24 0.09,-1.59 0.06,-0.35 0.18,-0.66 0.37,-0.93 0.19,-0.28 0.43,-0.51 0.74,-0.69 0.31,-0.18 0.66,-0.28 1.05,-0.28 0.42,0 0.8,0.12 1.15,0.34 0.35,0.23 0.61,0.53 0.78,0.92 0.16,-0.55 0.43,-0.96 0.82,-1.26 0.38,-0.29 0.83,-0.43 1.35,-0.43 0.41,0 0.81,0.09 1.19,0.28 0.39,0.19 0.69,0.45 0.93,0.78 0.22,0.32 0.37,0.73 0.42,1.21 0.03,0.3 0.05,1.03 0.06,2.18l0 3.04 -8.95 0zm1.49 -1.81l2.06 0 0 -1.18c0,-0.7 -0.01,-1.14 -0.03,-1.31 -0.04,-0.31 -0.14,-0.55 -0.32,-0.73 -0.18,-0.18 -0.41,-0.26 -0.69,-0.26 -0.28,0 -0.51,0.07 -0.68,0.22 -0.17,0.16 -0.28,0.38 -0.31,0.68 -0.02,0.18 -0.03,0.7 -0.03,1.55l0 1.03zm3.55 0l2.4 0 0 -1.67c0,-0.65 -0.02,-1.07 -0.06,-1.24 -0.05,-0.27 -0.16,-0.49 -0.35,-0.66 -0.2,-0.17 -0.45,-0.25 -0.77,-0.25 -0.27,0 -0.49,0.06 -0.68,0.19 -0.19,0.13 -0.33,0.32 -0.41,0.57 -0.09,0.24 -0.13,0.78 -0.13,1.6l0 1.46zm3.91 -7.15l-8.95 0 0 -1.81 8.95 0 0 1.81zm0 -3.58l-8.87 0 0 -1.82 7.36 0 0 -4.48 1.51 0 0 6.3zm0 -7.59l-8.95 0 0 -6.62 1.51 0 0 4.81 1.99 0 0 -4.48 1.51 0 0 4.48 2.43 0 0 -4.99 1.51 0 0 6.8zm-2.9 -11.33l-0.17 -1.77c0.59,-0.1 1.02,-0.31 1.29,-0.64 0.28,-0.32 0.42,-0.76 0.42,-1.3 0,-0.58 -0.13,-1.02 -0.37,-1.31 -0.25,-0.3 -0.53,-0.45 -0.86,-0.45 -0.22,0 -0.4,0.07 -0.55,0.19 -0.14,0.12 -0.27,0.34 -0.38,0.65 -0.07,0.21 -0.2,0.69 -0.39,1.44 -0.24,0.96 -0.54,1.64 -0.89,2.03 -0.5,0.55 -1.1,0.82 -1.81,0.82 -0.45,0 -0.88,-0.13 -1.28,-0.39 -0.4,-0.25 -0.7,-0.63 -0.91,-1.11 -0.21,-0.49 -0.31,-1.07 -0.31,-1.76 0,-1.12 0.25,-1.96 0.74,-2.52 0.5,-0.57 1.16,-0.87 2,-0.9l0.06 1.82c-0.46,0.07 -0.79,0.24 -1,0.49 -0.2,0.25 -0.3,0.63 -0.3,1.14 0,0.52 0.11,0.92 0.32,1.22 0.14,0.19 0.33,0.28 0.56,0.28 0.21,0 0.4,-0.09 0.55,-0.26 0.19,-0.23 0.39,-0.78 0.6,-1.66 0.2,-0.88 0.42,-1.53 0.64,-1.94 0.22,-0.43 0.53,-0.75 0.91,-0.99 0.39,-0.24 0.86,-0.36 1.43,-0.36 0.51,0 0.99,0.14 1.44,0.43 0.45,0.28 0.78,0.69 1,1.21 0.22,0.52 0.32,1.17 0.32,1.94 0,1.14 -0.26,2 -0.78,2.61 -0.52,0.61 -1.28,0.97 -2.28,1.09zm2.9 -8.82l-8.95 0 0 -6.62 1.51 0 0 4.81 1.99 0 0 -4.47 1.51 0 0 4.47 2.43 0 0 -4.99 1.51 0 0 6.8zm0 -8.33l-8.95 0 0 -3.81c0,-0.96 0.08,-1.65 0.24,-2.09 0.16,-0.43 0.45,-0.78 0.86,-1.04 0.41,-0.26 0.88,-0.39 1.41,-0.39 0.67,0 1.23,0.2 1.66,0.59 0.44,0.39 0.72,0.98 0.83,1.77 0.23,-0.39 0.48,-0.72 0.75,-0.97 0.27,-0.25 0.76,-0.59 1.46,-1.02l1.74 -1.09 0 2.16 -1.95 1.29c-0.7,0.47 -1.13,0.79 -1.32,0.96 -0.17,0.17 -0.3,0.35 -0.37,0.54 -0.06,0.2 -0.1,0.5 -0.1,0.92l0 0.36 3.74 0 0 1.82zm-5.16 -1.82l0 -1.33c0,-0.87 -0.04,-1.41 -0.11,-1.63 -0.07,-0.21 -0.2,-0.38 -0.38,-0.5 -0.18,-0.13 -0.4,-0.19 -0.67,-0.19 -0.31,0 -0.55,0.08 -0.74,0.25 -0.18,0.16 -0.3,0.38 -0.34,0.67 -0.03,0.15 -0.04,0.59 -0.04,1.32l0 1.41 2.28 0zm5.16 -9.27l-8.95 3.2 0 -1.96 6.63 -2.27 -6.63 -2.18 0 -1.93 8.95 3.18 0 1.96zm0 -5.99l-8.95 0 0 -1.81 8.95 0 0 1.81zm-3.3 -9.26l0.54 -1.75c0.98,0.27 1.72,0.72 2.19,1.34 0.48,0.63 0.72,1.42 0.72,2.38 0,1.19 -0.41,2.17 -1.22,2.93 -0.81,0.77 -1.92,1.15 -3.33,1.15 -1.49,0 -2.65,-0.39 -3.47,-1.15 -0.83,-0.77 -1.24,-1.79 -1.24,-3.04 0,-1.09 0.32,-1.98 0.97,-2.67 0.38,-0.41 0.93,-0.71 1.65,-0.91l0.43 1.78c-0.46,0.11 -0.83,0.33 -1.1,0.67 -0.27,0.33 -0.4,0.74 -0.4,1.22 0,0.66 0.24,1.2 0.71,1.62 0.48,0.41 1.25,0.62 2.32,0.62 1.12,0 1.93,-0.21 2.41,-0.61 0.48,-0.41 0.72,-0.94 0.72,-1.59 0,-0.48 -0.15,-0.9 -0.46,-1.24 -0.3,-0.35 -0.78,-0.6 -1.44,-0.75zm3.3 -3.3l-8.95 0 0 -6.63 1.51 0 0 4.82 1.99 0 0 -4.48 1.51 0 0 4.48 2.43 0 0 -4.99 1.51 0 0 6.8z" />
                                <path class="fil24"
                                    d="M854.8 775.31l7.11 0 0 8.95 -1.81 0 0 -7.44 -3.49 0 0 7.44 -1.81 0 0 -8.95zm17.02 8.95l-1.95 0 -0.77 -2.04 -3.59 0 -0.75 2.04 -1.91 0 3.47 -8.95 1.92 0 3.58 8.95zm-3.31 -3.55l-1.24 -3.31 -1.21 3.31 2.45 0zm4.28 3.55l0 -8.95 2.89 0c1.1,0 1.82,0.04 2.15,0.13 0.51,0.14 0.94,0.43 1.29,0.88 0.34,0.45 0.52,1.03 0.52,1.74 0,0.55 -0.1,1.01 -0.3,1.39 -0.2,0.37 -0.45,0.67 -0.76,0.88 -0.31,0.21 -0.62,0.36 -0.93,0.42 -0.44,0.09 -1.06,0.13 -1.88,0.13l-1.17 0 0 3.38 -1.81 0zm1.81 -7.44l0 2.55 0.98 0c0.72,0 1.19,-0.05 1.43,-0.14 0.24,-0.09 0.43,-0.24 0.56,-0.44 0.14,-0.2 0.2,-0.43 0.2,-0.7 0,-0.33 -0.09,-0.6 -0.28,-0.81 -0.19,-0.21 -0.43,-0.34 -0.73,-0.4 -0.21,-0.04 -0.64,-0.06 -1.29,-0.06l-0.87 0zm5.99 3.02c0,-0.91 0.13,-1.68 0.41,-2.3 0.2,-0.46 0.48,-0.87 0.83,-1.23 0.35,-0.36 0.74,-0.63 1.16,-0.81 0.55,-0.23 1.2,-0.35 1.93,-0.35 1.32,0 2.37,0.41 3.17,1.23 0.79,0.82 1.18,1.96 1.18,3.42 0,1.44 -0.39,2.58 -1.18,3.39 -0.78,0.82 -1.83,1.23 -3.15,1.23 -1.33,0 -2.39,-0.4 -3.18,-1.22 -0.78,-0.81 -1.17,-1.93 -1.17,-3.36zm1.86 -0.06c0,1.01 0.23,1.78 0.7,2.31 0.47,0.52 1.07,0.78 1.79,0.78 0.72,0 1.31,-0.26 1.78,-0.78 0.46,-0.52 0.69,-1.3 0.69,-2.34 0,-1.02 -0.22,-1.79 -0.68,-2.3 -0.45,-0.5 -1.04,-0.75 -1.79,-0.75 -0.75,0 -1.35,0.25 -1.81,0.76 -0.45,0.52 -0.68,1.29 -0.68,2.32zm8.23 -4.47l3.58 0c0.71,0 1.24,0.03 1.59,0.09 0.35,0.06 0.66,0.18 0.93,0.37 0.28,0.18 0.51,0.43 0.69,0.74 0.18,0.31 0.28,0.66 0.28,1.05 0,0.41 -0.12,0.8 -0.34,1.15 -0.23,0.35 -0.53,0.61 -0.92,0.78 0.54,0.16 0.96,0.43 1.26,0.82 0.29,0.38 0.43,0.83 0.43,1.35 0,0.41 -0.09,0.8 -0.28,1.19 -0.19,0.38 -0.45,0.69 -0.78,0.92 -0.32,0.23 -0.73,0.37 -1.21,0.43 -0.3,0.03 -1.03,0.05 -2.18,0.06l-3.05 0 0 -8.95zm1.82 1.49l0 2.06 1.18 0c0.7,0 1.14,-0.01 1.31,-0.03 0.31,-0.04 0.55,-0.14 0.73,-0.32 0.18,-0.18 0.26,-0.41 0.26,-0.7 0,-0.27 -0.07,-0.5 -0.23,-0.67 -0.15,-0.17 -0.38,-0.28 -0.68,-0.31 -0.17,-0.02 -0.69,-0.03 -1.54,-0.03l-1.03 0zm0 3.55l0 2.4 1.67 0c0.65,0 1.07,-0.02 1.24,-0.06 0.27,-0.05 0.49,-0.17 0.66,-0.36 0.16,-0.19 0.25,-0.44 0.25,-0.76 0,-0.27 -0.06,-0.5 -0.2,-0.68 -0.13,-0.19 -0.31,-0.33 -0.56,-0.41 -0.25,-0.09 -0.78,-0.13 -1.6,-0.13l-1.46 0zm6.52 -0.51c0,-0.91 0.14,-1.68 0.42,-2.3 0.2,-0.46 0.48,-0.87 0.83,-1.23 0.35,-0.36 0.74,-0.63 1.15,-0.81 0.56,-0.23 1.21,-0.35 1.94,-0.35 1.32,0 2.37,0.41 3.16,1.23 0.8,0.82 1.19,1.96 1.19,3.42 0,1.44 -0.39,2.58 -1.18,3.39 -0.78,0.82 -1.84,1.23 -3.15,1.23 -1.33,0 -2.39,-0.4 -3.18,-1.22 -0.78,-0.81 -1.18,-1.93 -1.18,-3.36zm1.87 -0.06c0,1.01 0.23,1.78 0.7,2.31 0.47,0.52 1.07,0.78 1.79,0.78 0.72,0 1.31,-0.26 1.78,-0.78 0.46,-0.52 0.69,-1.3 0.69,-2.34 0,-1.02 -0.23,-1.79 -0.68,-2.3 -0.45,-0.5 -1.05,-0.75 -1.79,-0.75 -0.75,0 -1.35,0.25 -1.81,0.76 -0.45,0.52 -0.68,1.29 -0.68,2.32zm9.51 -2.03l-1.76 -0.42c0.37,-1.45 1.45,-2.18 3.23,-2.18 1.05,0 1.84,0.23 2.38,0.69 0.53,0.46 0.8,1.01 0.8,1.63 0,0.43 -0.13,0.81 -0.37,1.16 -0.24,0.34 -0.61,0.65 -1.1,0.91 0.59,0.2 1.04,0.49 1.34,0.86 0.29,0.38 0.44,0.84 0.44,1.38 0,0.79 -0.29,1.43 -0.87,1.91 -0.57,0.49 -1.43,0.73 -2.58,0.73 -0.94,0 -1.68,-0.16 -2.22,-0.47 -0.54,-0.31 -0.95,-0.89 -1.22,-1.75l1.65 -0.54c0.17,0.54 0.4,0.89 0.69,1.05 0.28,0.16 0.63,0.24 1.05,0.24 0.57,0 0.98,-0.13 1.25,-0.37 0.26,-0.25 0.39,-0.54 0.39,-0.86 0,-0.36 -0.15,-0.66 -0.45,-0.89 -0.29,-0.22 -0.74,-0.33 -1.33,-0.33l-0.41 0 0 -1.35 0.21 0c0.55,0 0.97,-0.13 1.26,-0.38 0.3,-0.24 0.44,-0.58 0.44,-0.99 0,-0.32 -0.12,-0.6 -0.35,-0.82 -0.24,-0.23 -0.58,-0.34 -1.02,-0.34 -0.76,0 -1.24,0.38 -1.45,1.13zm6.58 -2.44l1.68 0 0 5.96 3.63 -5.96 1.8 0 0 8.95 -1.69 0 0 -5.86 -3.62 5.86 -1.8 0 0 -8.95zm8.98 0l1.81 0 0 3.81c0.41,-0.04 0.68,-0.14 0.82,-0.31 0.14,-0.17 0.36,-0.63 0.66,-1.39 0.37,-0.97 0.75,-1.58 1.13,-1.81 0.37,-0.24 0.97,-0.36 1.81,-0.36 0.04,0 0.13,0 0.26,0l0 1.33 -0.26 0c-0.37,0 -0.64,0.04 -0.81,0.14 -0.17,0.09 -0.31,0.23 -0.41,0.41 -0.11,0.19 -0.27,0.58 -0.47,1.16 -0.11,0.31 -0.23,0.57 -0.36,0.78 -0.13,0.21 -0.35,0.4 -0.68,0.59 0.4,0.11 0.73,0.34 1,0.68 0.26,0.35 0.55,0.84 0.86,1.47l1.22 2.45 -2.13 0 -1.07 -2.31c-0.02,-0.03 -0.05,-0.09 -0.1,-0.18 -0.03,-0.04 -0.1,-0.18 -0.23,-0.43 -0.23,-0.44 -0.42,-0.71 -0.56,-0.82 -0.15,-0.11 -0.37,-0.17 -0.68,-0.17l0 3.91 -1.81 0 0 -8.95z" />
                                <path class="fil24"
                                    d="M867.32 2430.69l3.58 0c0.71,0 1.24,0.03 1.58,0.09 0.35,0.06 0.66,0.18 0.94,0.37 0.27,0.18 0.5,0.43 0.69,0.74 0.18,0.31 0.27,0.66 0.27,1.05 0,0.42 -0.11,0.8 -0.34,1.15 -0.22,0.35 -0.53,0.61 -0.91,0.78 0.54,0.16 0.96,0.43 1.25,0.82 0.29,0.38 0.44,0.83 0.44,1.35 0,0.41 -0.09,0.8 -0.28,1.19 -0.19,0.38 -0.45,0.69 -0.78,0.92 -0.33,0.23 -0.73,0.38 -1.21,0.43 -0.3,0.03 -1.03,0.05 -2.18,0.06l-3.05 0 0 -8.95zm1.81 1.49l0 2.06 1.19 0c0.7,0 1.14,-0.01 1.31,-0.03 0.3,-0.04 0.55,-0.14 0.73,-0.32 0.17,-0.18 0.26,-0.41 0.26,-0.7 0,-0.27 -0.08,-0.5 -0.23,-0.67 -0.15,-0.17 -0.38,-0.28 -0.68,-0.31 -0.18,-0.02 -0.69,-0.03 -1.54,-0.03l-1.04 0zm0 3.55l0 2.4 1.68 0c0.65,0 1.06,-0.02 1.24,-0.06 0.26,-0.05 0.48,-0.16 0.65,-0.36 0.17,-0.19 0.26,-0.44 0.26,-0.76 0,-0.27 -0.07,-0.5 -0.2,-0.68 -0.13,-0.19 -0.32,-0.33 -0.56,-0.41 -0.25,-0.09 -0.79,-0.13 -1.61,-0.13l-1.46 0zm15.28 3.91l-1.95 0 -0.78 -2.04 -3.59 0 -0.74 2.04 -1.92 0 3.48 -8.95 1.91 0 3.59 8.95zm-3.31 -3.55l-1.25 -3.31 -1.21 3.31 2.46 0zm4.25 3.55l0 -8.95 2.71 0 1.61 6.1 1.58 -6.1 2.72 0 0 8.95 -1.67 0 -0.01 -7.05 -1.76 7.05 -1.74 0 -1.76 -7.05 -0.01 7.05 -1.67 0zm10.44 -8.95l3.58 0c0.71,0 1.23,0.03 1.58,0.09 0.35,0.06 0.66,0.18 0.94,0.37 0.27,0.18 0.5,0.43 0.68,0.74 0.19,0.31 0.28,0.66 0.28,1.05 0,0.42 -0.11,0.8 -0.34,1.15 -0.22,0.35 -0.53,0.61 -0.92,0.78 0.55,0.16 0.96,0.43 1.26,0.82 0.29,0.38 0.44,0.83 0.44,1.35 0,0.41 -0.1,0.8 -0.29,1.19 -0.19,0.38 -0.45,0.69 -0.77,0.92 -0.33,0.23 -0.74,0.38 -1.22,0.43 -0.3,0.03 -1.02,0.05 -2.18,0.06l-3.04 0 0 -8.95zm1.81 1.49l0 2.06 1.18 0c0.7,0 1.14,-0.01 1.31,-0.03 0.31,-0.04 0.55,-0.14 0.73,-0.32 0.18,-0.18 0.27,-0.41 0.27,-0.7 0,-0.27 -0.08,-0.5 -0.23,-0.67 -0.15,-0.17 -0.38,-0.28 -0.68,-0.31 -0.18,-0.02 -0.7,-0.03 -1.54,-0.03l-1.04 0zm0 3.55l0 2.4 1.67 0c0.65,0 1.07,-0.02 1.24,-0.06 0.27,-0.05 0.49,-0.16 0.66,-0.36 0.17,-0.19 0.25,-0.44 0.25,-0.76 0,-0.27 -0.06,-0.5 -0.19,-0.68 -0.13,-0.19 -0.32,-0.33 -0.57,-0.41 -0.24,-0.09 -0.78,-0.13 -1.6,-0.13l-1.46 0zm7.15 3.91l0 -8.95 1.81 0 0 8.95 -1.81 0zm3.54 0l0 -8.95 1.75 0 3.68 6 0 -6 1.68 0 0 8.95 -1.81 0 -3.63 -5.88 0 5.88 -1.67 0zm8.65 -4.42c0,-0.91 0.14,-1.68 0.41,-2.3 0.2,-0.46 0.48,-0.87 0.83,-1.23 0.35,-0.36 0.74,-0.63 1.16,-0.81 0.56,-0.23 1.2,-0.35 1.93,-0.35 1.32,0 2.37,0.41 3.17,1.23 0.79,0.82 1.19,1.96 1.19,3.42 0,1.45 -0.4,2.58 -1.18,3.4 -0.79,0.81 -1.84,1.22 -3.16,1.22 -1.33,0 -2.39,-0.4 -3.17,-1.22 -0.79,-0.81 -1.18,-1.93 -1.18,-3.36zm1.86 -0.06c0,1.01 0.24,1.78 0.7,2.31 0.47,0.52 1.07,0.78 1.79,0.78 0.72,0 1.32,-0.26 1.78,-0.78 0.46,-0.52 0.69,-1.3 0.69,-2.34 0,-1.02 -0.22,-1.79 -0.67,-2.29 -0.45,-0.51 -1.05,-0.76 -1.8,-0.76 -0.75,0 -1.35,0.25 -1.8,0.76 -0.46,0.52 -0.69,1.29 -0.69,2.32z" />
                                <path class="fil24"
                                    d="M808.39 2614.76l7.12 0 0 8.95 -1.82 0 0 -7.44 -3.48 0 0 7.44 -1.82 0 0 -8.95zm8.96 8.95l0 -8.95 2.9 0c1.1,0 1.81,0.04 2.15,0.13 0.51,0.14 0.94,0.43 1.28,0.88 0.35,0.45 0.52,1.03 0.52,1.74 0,0.55 -0.1,1.01 -0.29,1.39 -0.21,0.37 -0.46,0.67 -0.76,0.88 -0.31,0.21 -0.62,0.36 -0.94,0.42 -0.43,0.09 -1.05,0.13 -1.87,0.13l-1.17 0 0 3.38 -1.82 0zm1.82 -7.44l0 2.55 0.98 0c0.71,0 1.18,-0.05 1.42,-0.14 0.24,-0.09 0.43,-0.24 0.57,-0.44 0.13,-0.2 0.2,-0.43 0.2,-0.7 0,-0.33 -0.1,-0.6 -0.28,-0.81 -0.2,-0.21 -0.44,-0.34 -0.73,-0.4 -0.21,-0.04 -0.65,-0.06 -1.3,-0.06l-0.86 0zm5.98 3.02c0,-0.91 0.14,-1.68 0.41,-2.3 0.2,-0.46 0.48,-0.87 0.83,-1.23 0.36,-0.36 0.74,-0.63 1.16,-0.81 0.56,-0.23 1.2,-0.35 1.93,-0.35 1.32,0 2.38,0.41 3.17,1.23 0.79,0.82 1.19,1.96 1.19,3.42 0,1.44 -0.4,2.58 -1.18,3.39 -0.79,0.82 -1.84,1.23 -3.15,1.23 -1.33,0 -2.39,-0.4 -3.18,-1.22 -0.79,-0.81 -1.18,-1.93 -1.18,-3.36zm1.86 -0.06c0,1.01 0.24,1.78 0.71,2.31 0.47,0.52 1.06,0.78 1.78,0.78 0.73,0 1.32,-0.26 1.78,-0.78 0.47,-0.52 0.7,-1.3 0.7,-2.34 0,-1.02 -0.23,-1.79 -0.68,-2.3 -0.45,-0.5 -1.05,-0.75 -1.8,-0.75 -0.74,0 -1.34,0.25 -1.8,0.76 -0.46,0.52 -0.69,1.29 -0.69,2.32zm8.26 -4.47l1.82 0 0 3.81c0.4,-0.04 0.67,-0.14 0.81,-0.31 0.15,-0.17 0.37,-0.63 0.66,-1.39 0.37,-0.97 0.75,-1.58 1.13,-1.81 0.37,-0.24 0.98,-0.36 1.81,-0.36 0.04,0 0.13,0 0.26,0l0 1.33 -0.26 0c-0.37,0 -0.64,0.04 -0.81,0.14 -0.17,0.09 -0.31,0.23 -0.41,0.41 -0.11,0.19 -0.26,0.58 -0.47,1.16 -0.11,0.31 -0.23,0.57 -0.36,0.78 -0.13,0.21 -0.35,0.4 -0.68,0.59 0.4,0.11 0.74,0.34 1,0.68 0.26,0.35 0.55,0.84 0.86,1.47l1.22 2.45 -2.13 0 -1.07 -2.31c-0.02,-0.03 -0.05,-0.09 -0.1,-0.18 -0.02,-0.04 -0.1,-0.18 -0.23,-0.43 -0.23,-0.44 -0.42,-0.71 -0.56,-0.82 -0.15,-0.11 -0.37,-0.17 -0.67,-0.17l0 3.91 -1.82 0 0 -8.95zm15.67 8.95l-1.95 0 -0.77 -2.04 -3.59 0 -0.75 2.04 -1.91 0 3.47 -8.95 1.91 0 3.59 8.95zm-3.31 -3.55l-1.25 -3.31 -1.2 3.31 2.45 0zm5.66 3.55l0 -7.44 -2.64 0 0 -1.51 7.09 0 0 1.51 -2.63 0 0 7.44 -1.82 0zm9.82 -8.95l6.18 0 0 7.44 0.79 0 0 3.46 -1.52 0 0 -1.95 -5.61 0 0 1.95 -1.51 0 0 -3.46 0.76 0c0.37,-0.77 0.62,-1.66 0.74,-2.66 0.12,-1.01 0.17,-2.29 0.17,-3.84l0 -0.94zm1.73 1.51c0,2.71 -0.25,4.68 -0.75,5.93l3.39 0 0 -5.93 -2.64 0zm6.45 7.44l0 -8.95 6.63 0 0 1.51 -4.81 0 0 1.99 4.47 0 0 1.51 -4.47 0 0 2.43 4.98 0 0 1.51 -6.8 0zm10.35 0l0 -7.44 -2.65 0 0 -1.51 7.1 0 0 1.51 -2.63 0 0 7.44 -1.82 0zm11.35 -3.3l1.75 0.54c-0.27,0.98 -0.72,1.71 -1.34,2.19 -0.63,0.48 -1.42,0.72 -2.38,0.72 -1.19,0 -2.16,-0.41 -2.93,-1.22 -0.77,-0.81 -1.15,-1.92 -1.15,-3.33 0,-1.49 0.39,-2.65 1.16,-3.48 0.76,-0.82 1.78,-1.23 3.03,-1.23 1.1,0 1.99,0.32 2.67,0.97 0.41,0.38 0.71,0.93 0.92,1.65l-1.79 0.43c-0.11,-0.47 -0.33,-0.83 -0.66,-1.1 -0.34,-0.27 -0.75,-0.4 -1.23,-0.4 -0.66,0 -1.2,0.23 -1.62,0.71 -0.41,0.48 -0.62,1.25 -0.62,2.31 0,1.13 0.21,1.94 0.61,2.42 0.41,0.48 0.94,0.72 1.59,0.72 0.48,0 0.9,-0.15 1.24,-0.46 0.35,-0.31 0.6,-0.78 0.75,-1.44zm3.33 -5.65l1.81 0 0 3.81c0.4,-0.04 0.68,-0.14 0.82,-0.31 0.14,-0.17 0.36,-0.63 0.66,-1.39 0.37,-0.97 0.75,-1.58 1.12,-1.81 0.38,-0.24 0.98,-0.36 1.81,-0.36 0.04,0 0.13,0 0.27,0l0 1.33 -0.26 0c-0.37,0 -0.64,0.04 -0.81,0.14 -0.17,0.09 -0.31,0.23 -0.42,0.41 -0.1,0.19 -0.26,0.58 -0.47,1.16 -0.11,0.31 -0.23,0.57 -0.36,0.78 -0.12,0.21 -0.35,0.4 -0.67,0.59 0.4,0.11 0.73,0.34 0.99,0.68 0.26,0.35 0.55,0.84 0.86,1.47l1.22 2.45 -2.12 0 -1.07 -2.31c-0.02,-0.03 -0.06,-0.09 -0.11,-0.18 -0.02,-0.04 -0.09,-0.18 -0.22,-0.43 -0.23,-0.44 -0.42,-0.71 -0.57,-0.82 -0.14,-0.11 -0.37,-0.17 -0.67,-0.17l0 3.91 -1.81 0 0 -8.95zm7.63 0l1.68 0 0 5.96 3.63 -5.96 1.8 0 0 8.95 -1.69 0 0 -5.86 -3.62 5.86 -1.8 0 0 -8.95zm8.05 8.95l3.09 -4.67 -2.8 -4.28 2.11 0 1.76 2.66 1.76 -2.66 2.12 0 -2.81 4.28 3.08 4.67 -2.17 0 -1.98 -3.03 -1.99 3.03 -2.17 0zm12.74 -8.95l1.81 0 0 3.81c0.41,-0.04 0.68,-0.14 0.82,-0.31 0.14,-0.17 0.36,-0.63 0.66,-1.39 0.37,-0.97 0.75,-1.58 1.13,-1.81 0.37,-0.24 0.97,-0.36 1.81,-0.36 0.04,0 0.12,0 0.26,0l0 1.33 -0.26 0c-0.37,0 -0.64,0.04 -0.81,0.14 -0.17,0.09 -0.31,0.23 -0.42,0.41 -0.1,0.19 -0.26,0.58 -0.46,1.16 -0.11,0.31 -0.23,0.57 -0.36,0.78 -0.13,0.21 -0.36,0.4 -0.68,0.59 0.4,0.11 0.73,0.34 0.99,0.68 0.27,0.35 0.56,0.84 0.87,1.47l1.22 2.45 -2.13 0 -1.07 -2.31c-0.02,-0.03 -0.05,-0.09 -0.11,-0.18 -0.02,-0.04 -0.09,-0.18 -0.22,-0.43 -0.23,-0.44 -0.42,-0.71 -0.56,-0.82 -0.15,-0.11 -0.37,-0.17 -0.68,-0.17l0 3.91 -1.81 0 0 -8.95zm7.23 4.53c0,-0.91 0.14,-1.68 0.41,-2.3 0.2,-0.46 0.48,-0.87 0.83,-1.23 0.36,-0.36 0.74,-0.63 1.16,-0.81 0.56,-0.23 1.2,-0.35 1.93,-0.35 1.32,0 2.38,0.41 3.17,1.23 0.79,0.82 1.19,1.96 1.19,3.42 0,1.44 -0.4,2.58 -1.18,3.39 -0.79,0.82 -1.84,1.23 -3.15,1.23 -1.34,0 -2.4,-0.4 -3.18,-1.22 -0.79,-0.81 -1.18,-1.93 -1.18,-3.36zm1.86 -0.06c0,1.01 0.24,1.78 0.71,2.31 0.47,0.52 1.06,0.78 1.78,0.78 0.73,0 1.32,-0.26 1.78,-0.78 0.46,-0.52 0.69,-1.3 0.69,-2.34 0,-1.02 -0.22,-1.79 -0.67,-2.3 -0.45,-0.5 -1.05,-0.75 -1.8,-0.75 -0.74,0 -1.35,0.25 -1.8,0.76 -0.46,0.52 -0.69,1.29 -0.69,2.32zm8.57 -4.47l6.27 0 0 8.95 -1.81 0 0 -7.44 -2.69 0 0 3.82c0,1.1 -0.04,1.86 -0.11,2.29 -0.07,0.43 -0.25,0.78 -0.53,1.02 -0.29,0.24 -0.73,0.36 -1.33,0.36 -0.21,0 -0.6,-0.02 -1.16,-0.06l0 -1.4 0.41 0c0.38,0 0.63,-0.05 0.76,-0.15 0.13,-0.1 0.2,-0.35 0.2,-0.75l-0.01 -1.54 0 -5.1zm13.48 8.95l0 -3.74 -0.37 0c-0.57,0 -0.97,0.09 -1.21,0.26 -0.23,0.17 -0.63,0.68 -1.2,1.53l-1.3 1.95 -2.16 0 1.09 -1.75c0.43,-0.69 0.78,-1.18 1.03,-1.45 0.26,-0.28 0.58,-0.53 0.96,-0.75 -0.83,-0.13 -1.43,-0.42 -1.8,-0.87 -0.37,-0.45 -0.55,-0.99 -0.55,-1.62 0,-0.54 0.13,-1.03 0.41,-1.45 0.27,-0.42 0.64,-0.7 1.09,-0.84 0.45,-0.15 1.12,-0.22 2.01,-0.22l3.81 0 0 8.95 -1.81 0zm0 -7.44l-1.41 0c-0.72,0 -1.19,0.02 -1.41,0.05 -0.23,0.03 -0.43,0.14 -0.59,0.33 -0.16,0.19 -0.24,0.43 -0.24,0.73 0,0.32 0.08,0.57 0.23,0.75 0.16,0.19 0.36,0.3 0.6,0.35 0.24,0.04 0.74,0.07 1.48,0.07l1.34 0 0 -2.28zm9.36 4.14l1.75 0.54c-0.27,0.98 -0.72,1.71 -1.34,2.19 -0.63,0.48 -1.42,0.72 -2.38,0.72 -1.19,0 -2.17,-0.41 -2.93,-1.22 -0.77,-0.81 -1.15,-1.92 -1.15,-3.33 0,-1.49 0.38,-2.65 1.15,-3.48 0.77,-0.82 1.78,-1.23 3.04,-1.23 1.09,0 1.98,0.32 2.67,0.97 0.4,0.38 0.71,0.93 0.91,1.65l-1.78 0.43c-0.11,-0.47 -0.33,-0.83 -0.67,-1.1 -0.33,-0.27 -0.74,-0.4 -1.22,-0.4 -0.67,0 -1.21,0.23 -1.62,0.71 -0.41,0.48 -0.62,1.25 -0.62,2.31 0,1.13 0.2,1.94 0.61,2.42 0.41,0.48 0.94,0.72 1.59,0.72 0.48,0 0.9,-0.15 1.24,-0.46 0.35,-0.31 0.6,-0.78 0.75,-1.44zm2.61 -1.12c0,-0.91 0.14,-1.68 0.42,-2.3 0.2,-0.46 0.48,-0.87 0.83,-1.23 0.35,-0.36 0.74,-0.63 1.15,-0.81 0.56,-0.23 1.21,-0.35 1.94,-0.35 1.32,0 2.37,0.41 3.16,1.23 0.8,0.82 1.19,1.96 1.19,3.42 0,1.44 -0.39,2.58 -1.18,3.39 -0.78,0.82 -1.84,1.23 -3.15,1.23 -1.33,0 -2.39,-0.4 -3.18,-1.22 -0.78,-0.81 -1.18,-1.93 -1.18,-3.36zm1.87 -0.06c0,1.01 0.23,1.78 0.7,2.31 0.47,0.52 1.07,0.78 1.79,0.78 0.72,0 1.31,-0.26 1.78,-0.78 0.46,-0.52 0.69,-1.3 0.69,-2.34 0,-1.02 -0.23,-1.79 -0.68,-2.3 -0.45,-0.5 -1.05,-0.75 -1.79,-0.75 -0.75,0 -1.35,0.25 -1.81,0.76 -0.45,0.52 -0.68,1.29 -0.68,2.32zm8.26 -4.47l1.81 0 0 3.81c0.4,-0.04 0.67,-0.14 0.82,-0.31 0.14,-0.17 0.36,-0.63 0.65,-1.39 0.38,-0.97 0.75,-1.58 1.13,-1.81 0.38,-0.24 0.98,-0.36 1.81,-0.36 0.04,0 0.13,0 0.26,0l0 1.33 -0.25 0c-0.37,0 -0.64,0.04 -0.81,0.14 -0.17,0.09 -0.31,0.23 -0.42,0.41 -0.11,0.19 -0.26,0.58 -0.47,1.16 -0.11,0.31 -0.23,0.57 -0.36,0.78 -0.12,0.21 -0.35,0.4 -0.68,0.59 0.41,0.11 0.74,0.34 1,0.68 0.26,0.35 0.55,0.84 0.86,1.47l1.22 2.45 -2.12 0 -1.08 -2.31c-0.01,-0.03 -0.05,-0.09 -0.1,-0.18 -0.02,-0.04 -0.1,-0.18 -0.23,-0.43 -0.22,-0.44 -0.41,-0.71 -0.56,-0.82 -0.15,-0.11 -0.37,-0.17 -0.67,-0.17l0 3.91 -1.81 0 0 -8.95z" />
                                <path class="fil23"
                                    d="M555 1886.63l4.65 0c1.05,0 1.85,0.08 2.4,0.24 0.74,0.22 1.38,0.61 1.91,1.17 0.53,0.56 0.93,1.24 1.2,2.05 0.28,0.81 0.42,1.8 0.42,2.99 0,1.04 -0.13,1.93 -0.39,2.69 -0.32,0.92 -0.77,1.66 -1.35,2.23 -0.45,0.44 -1.04,0.77 -1.79,1.01 -0.57,0.18 -1.32,0.27 -2.26,0.27l-4.79 0 0 -12.65zm2.56 2.14l0 8.37 1.9 0c0.7,0 1.22,-0.04 1.53,-0.12 0.42,-0.1 0.76,-0.28 1.03,-0.53 0.27,-0.24 0.49,-0.65 0.66,-1.21 0.18,-0.57 0.26,-1.34 0.26,-2.32 0,-0.98 -0.08,-1.73 -0.26,-2.25 -0.17,-0.52 -0.41,-0.93 -0.72,-1.22 -0.31,-0.3 -0.7,-0.5 -1.17,-0.6 -0.36,-0.08 -1.05,-0.12 -2.09,-0.12l-1.14 0zm10.1 10.51l0 -12.65 2.56 0 0 12.65 -2.56 0zm8.23 0l-4.52 -12.65 2.77 0 3.21 9.36 3.08 -9.36 2.72 0 -4.5 12.65 -2.76 0zm18.63 0l-2.76 0 -1.09 -2.88 -5.07 0 -1.05 2.88 -2.71 0 4.91 -12.65 2.71 0 5.06 12.65zm-4.68 -5.02l-1.75 -4.68 -1.71 4.68 3.46 0z" />
                                <polygon class="neri_karra fil12 str22"
                                    points="739.44,1444.82 739.44,1408.57 807.88,1408.57 807.88,1444.82 " />
                                <path class="fil24"
                                    d="M967.62 1395.74l0 -11.93 8.83 0 0 2.01 -6.41 0 0 2.65 5.96 0 0 2.02 -5.96 0 0 3.23 6.65 0 0 2.02 -9.07 0zm14.25 0l0 -5.02 -4.37 -6.91 2.82 0 2.82 4.72 2.75 -4.72 2.77 0 -4.37 6.92 0 5.01 -2.42 0zm7.98 0l0 -11.93 8.2 0 0 2.01 -5.78 0 0 2.84 5 0 0 2.01 -5 0 0 5.07 -2.42 0zm10.18 0l0 -11.93 8.84 0 0 2.01 -6.42 0 0 2.65 5.97 0 0 2.02 -5.97 0 0 3.23 6.65 0 0 2.02 -9.07 0zm11.19 0l0 -11.83 2.41 0 0 9.81 5.99 0 0 2.02 -8.4 0z" />
                                <path class="fil23"
                                    d="M1222.07 771.69l-1.95 0 -0.78 -2.04 -3.59 0 -0.74 2.04 -1.92 0 3.48 -8.95 1.91 0 3.59 8.95zm-3.32 -3.55l-1.24 -3.31 -1.21 3.31 2.45 0zm6.29 3.55l0 -7.44 -2.65 0 0 -1.51 7.1 0 0 1.51 -2.63 0 0 7.44 -1.82 0zm5.63 0l0 -8.95 6.62 0 0 1.51 -4.81 0 0 1.99 4.47 0 0 1.51 -4.47 0 0 2.42 4.99 0 0 1.52 -6.8 0zm8.98 -8.95l6.27 0 0 8.95 -1.82 0 0 -7.44 -2.68 0 0 3.82c0,1.09 -0.04,1.86 -0.11,2.29 -0.08,0.43 -0.25,0.77 -0.54,1.01 -0.28,0.25 -0.72,0.37 -1.32,0.37 -0.22,0 -0.6,-0.02 -1.16,-0.06l0 -1.41 0.41 0.01c0.37,0 0.63,-0.05 0.76,-0.15 0.13,-0.1 0.19,-0.35 0.19,-0.75l0 -1.54 0 -5.1zm8.16 0l1.82 0 0 3.57 2.41 0c1.14,0 1.96,0.27 2.47,0.8 0.51,0.54 0.76,1.18 0.76,1.92 0,0.61 -0.15,1.13 -0.46,1.56 -0.31,0.43 -0.66,0.72 -1.06,0.87 -0.39,0.15 -0.97,0.23 -1.71,0.23l-4.23 0 0 -8.95zm1.82 7.43l1.75 0c0.57,0 0.97,-0.02 1.18,-0.08 0.22,-0.05 0.42,-0.18 0.59,-0.37 0.18,-0.19 0.26,-0.43 0.26,-0.71 0,-0.41 -0.15,-0.71 -0.44,-0.9 -0.3,-0.19 -0.8,-0.28 -1.51,-0.28l-1.83 0 0 2.34zm7.13 1.52l0 -8.95 6.63 0 0 1.51 -4.82 0 0 1.99 4.48 0 0 1.51 -4.48 0 0 2.42 4.99 0 0 1.52 -6.8 0z" />
                                <polygon class="kazpost fil25 str22"
                                    points="1194.79,623.66 1160.92,623.66 1160.92,707.03 1194.79,707.03 " />
                                <path class="fil23"
                                    d="M1167.59 697.49l0 -1.77 3.72 0c-0.04,-0.39 -0.14,-0.66 -0.3,-0.8 -0.16,-0.14 -0.62,-0.35 -1.36,-0.64 -0.95,-0.36 -1.54,-0.73 -1.77,-1.1 -0.23,-0.37 -0.35,-0.96 -0.35,-1.77 0,-0.04 0,-0.13 0,-0.26l1.3 0 0 0.25c0,0.37 0.04,0.63 0.13,0.8 0.09,0.16 0.23,0.3 0.41,0.4 0.18,0.11 0.56,0.26 1.13,0.46 0.31,0.11 0.56,0.22 0.76,0.35 0.2,0.13 0.4,0.35 0.58,0.66 0.11,-0.39 0.33,-0.71 0.67,-0.97 0.34,-0.26 0.81,-0.54 1.43,-0.84l2.4 -1.19 0 2.07 -2.26 1.05c-0.03,0.02 -0.09,0.05 -0.18,0.1 -0.03,0.02 -0.17,0.1 -0.41,0.22 -0.43,0.23 -0.7,0.41 -0.81,0.55 -0.11,0.15 -0.16,0.37 -0.17,0.66l3.83 0 0 1.77 -8.75 0zm8.75 -15.19l0 1.91 -2 0.75 0 3.51 2 0.73 0 1.87 -8.75 -3.39 0 -1.87 8.75 -3.51zm-3.47 3.24l-3.24 1.21 3.24 1.19 0 -2.4zm-2.9 -5.31l-0.4 1.73c-1.43,-0.37 -2.14,-1.43 -2.14,-3.16 0,-1.03 0.23,-1.8 0.68,-2.33 0.45,-0.52 0.98,-0.78 1.59,-0.78 0.42,0 0.8,0.12 1.13,0.36 0.34,0.24 0.63,0.59 0.89,1.07 0.2,-0.58 0.48,-1.01 0.85,-1.3 0.36,-0.29 0.81,-0.44 1.35,-0.44 0.77,0 1.39,0.28 1.86,0.85 0.48,0.56 0.71,1.4 0.71,2.52 0,0.92 -0.15,1.64 -0.45,2.17 -0.31,0.53 -0.88,0.93 -1.72,1.19l-0.53 -1.61c0.53,-0.16 0.87,-0.39 1.03,-0.67 0.15,-0.27 0.23,-0.61 0.23,-1.02 0,-0.56 -0.12,-0.97 -0.36,-1.22 -0.24,-0.26 -0.52,-0.39 -0.83,-0.39 -0.36,0 -0.65,0.15 -0.87,0.44 -0.22,0.28 -0.33,0.72 -0.33,1.3l0 0.4 -1.32 0 0 -0.2c0,-0.54 -0.12,-0.95 -0.37,-1.24 -0.24,-0.29 -0.56,-0.43 -0.96,-0.43 -0.32,0 -0.59,0.12 -0.81,0.35 -0.22,0.23 -0.33,0.56 -0.33,1 0,0.74 0.37,1.21 1.1,1.41zm-2.38 -6.31l0 -6.95 8.75 0 0 1.77 -7.27 0 0 3.41 7.27 0 0 1.77 -8.75 0zm4.42 -8.27c-0.89,0 -1.64,-0.14 -2.24,-0.4 -0.45,-0.2 -0.85,-0.47 -1.21,-0.82 -0.35,-0.34 -0.61,-0.72 -0.79,-1.13 -0.23,-0.54 -0.34,-1.17 -0.34,-1.88 0,-1.29 0.4,-2.32 1.2,-3.1 0.8,-0.77 1.92,-1.16 3.34,-1.16 1.42,0 2.53,0.38 3.32,1.15 0.81,0.77 1.2,1.8 1.2,3.08 0,1.3 -0.39,2.34 -1.19,3.11 -0.79,0.76 -1.89,1.15 -3.29,1.15zm-0.05 -1.82c0.99,0 1.74,-0.23 2.25,-0.69 0.51,-0.46 0.77,-1.04 0.77,-1.74 0,-0.71 -0.26,-1.29 -0.76,-1.74 -0.51,-0.45 -1.27,-0.68 -2.29,-0.68 -1,0 -1.75,0.22 -2.25,0.66 -0.49,0.44 -0.74,1.02 -0.74,1.76 0,0.72 0.25,1.31 0.75,1.76 0.5,0.44 1.26,0.67 2.27,0.67zm-4.37 -7.78l0 -1.77 2.09 0c0.67,0 1.12,-0.03 1.34,-0.08 0.22,-0.05 0.41,-0.2 0.58,-0.44 0.16,-0.25 0.24,-0.61 0.24,-1.09 0,-0.37 -0.04,-0.71 -0.12,-1.01 -0.08,-0.29 -0.2,-0.54 -0.36,-0.76l-3.77 0 0 -1.77 8.75 0 0 1.77 -3.53 0c0.16,0.36 0.28,0.71 0.36,1.06 0.08,0.35 0.12,0.69 0.12,1.02 0,0.87 -0.2,1.6 -0.61,2.19 -0.41,0.58 -1.13,0.88 -2.14,0.88l-2.95 0zm8.75 -10.58l-7.27 0 0 2.59 -1.48 0 0 -6.94 1.48 0 0 2.58 7.27 0 0 1.77zm0 -12.49l0 1.91 -2 0.76 0 3.51 2 0.72 0 1.88 -8.75 -3.4 0 -1.87 8.75 -3.51zm-3.47 3.24l-3.24 1.22 3.24 1.18 0 -2.4zm6.5 62.23l0 -6.95 8.75 0 0 1.77 -7.27 0 0 3.41 7.27 0 0 1.77 -8.75 0zm4.43 -8.27c-0.89,0 -1.64,-0.13 -2.25,-0.4 -0.44,-0.2 -0.85,-0.47 -1.2,-0.81 -0.35,-0.35 -0.62,-0.72 -0.79,-1.13 -0.23,-0.55 -0.35,-1.18 -0.35,-1.89 0,-1.29 0.41,-2.32 1.2,-3.1 0.81,-0.77 1.92,-1.16 3.35,-1.16 1.41,0 2.52,0.39 3.32,1.15 0.8,0.77 1.2,1.8 1.2,3.08 0,1.31 -0.4,2.34 -1.19,3.11 -0.8,0.77 -1.89,1.15 -3.29,1.15zm-0.06 -1.82c0.99,0 1.74,-0.23 2.26,-0.69 0.51,-0.46 0.76,-1.04 0.76,-1.74 0,-0.71 -0.25,-1.29 -0.76,-1.74 -0.51,-0.45 -1.27,-0.68 -2.28,-0.68 -1.01,0 -1.76,0.22 -2.25,0.66 -0.5,0.44 -0.74,1.03 -0.74,1.76 0,0.73 0.25,1.32 0.75,1.76 0.5,0.45 1.25,0.67 2.26,0.67zm-4.37 -7.78l0 -1.77 2.09 0c0.68,0 1.12,-0.03 1.34,-0.08 0.23,-0.05 0.42,-0.19 0.58,-0.44 0.16,-0.25 0.24,-0.61 0.24,-1.08 0,-0.38 -0.04,-0.72 -0.12,-1.01 -0.08,-0.3 -0.2,-0.55 -0.36,-0.76l-3.77 0 0 -1.78 8.75 0 0 1.78 -3.52 0c0.15,0.35 0.27,0.71 0.36,1.05 0.08,0.35 0.12,0.69 0.12,1.02 0,0.88 -0.21,1.6 -0.62,2.19 -0.41,0.59 -1.12,0.88 -2.14,0.88l-2.95 0zm8.75 -10.58l-7.27 0 0 2.59 -1.48 0 0 -6.94 1.48 0 0 2.58 7.27 0 0 1.77zm0 -12.48l0 1.9 -1.99 0.76 0 3.51 1.99 0.73 0 1.87 -8.75 -3.4 0 -1.87 8.75 -3.5zm-3.47 3.23l-3.24 1.22 3.24 1.18 0 -2.4zm3.47 -4.03l-8.75 0 0 -2.65 5.97 -1.57 -5.97 -1.55 0 -2.66 8.75 0 0 1.64 -6.89 0 6.89 1.73 0 1.7 -6.89 1.72 6.89 0 0 1.64zm0 -17.96l0 1.91 -1.99 0.75 0 3.51 1.99 0.73 0 1.87 -8.75 -3.4 0 -1.87 8.75 -3.5zm-3.47 3.24l-3.24 1.21 3.24 1.18 0 -2.39zm3.47 -5.42l-7.27 0 0 2.59 -1.48 0 0 -6.94 1.48 0 0 2.58 7.27 0 0 1.77z" />
                                <g id="_2096417548576">
                                    <path class="fil0"
                                        d="M1234.45 2769.02c2.39,0 4.32,1.93 4.32,4.31 0,2.38 -1.93,4.31 -4.32,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.38 1.93,-4.31 4.31,-4.31z" />
                                    <path class="fil0"
                                        d="M1228.84 2778.86l11.27 0c2.05,0 3.73,1.67 3.73,3.72l0 1.91 0 6.67 0 4.84c0,0.92 -0.75,1.66 -1.66,1.66l0 0c-0.92,0 -1.67,-0.74 -1.67,-1.66l0 -1.14 -0.02 0 0 -9.82c0,-0.33 -0.27,-0.6 -0.6,-0.6l0 0c-0.34,0 -0.61,0.27 -0.61,0.6l0 7.32 0 2.52 0 0.12 0 4.72 0 14.38c0,1.18 -0.97,2.15 -2.16,2.15l0 0c-1.18,0 -2.15,-0.97 -2.15,-2.15l0 -9.6 0 -7.44c0,-0.34 -0.28,-0.61 -0.61,-0.61l0 0c-0.33,0 -0.61,0.27 -0.61,0.61l0 7.41 0 9.75c0,1.12 -0.91,2.03 -2.03,2.03l0 0c-1.12,0 -2.04,-0.91 -2.04,-2.03l0 -14.5 0 -4.72 0 -0.12 0 -2.64 0 -7.2c0,-0.33 -0.27,-0.6 -0.61,-0.6l0 0c-0.33,0 -0.6,0.27 -0.6,0.6l0 9.82 -0.02 0 0 1.14c0,0.92 -0.75,1.66 -1.67,1.66l0 0c-0.91,0 -1.66,-0.74 -1.66,-1.66l0 -4.84 0 -6.67 0 -1.91c0,-2.05 1.68,-3.72 3.72,-3.72z" />
                                </g>
                                <g id="_2096417546016">
                                    <path class="fil0"
                                        d="M1301.91 2769.02c2.38,0 4.32,1.93 4.32,4.31 0,2.38 -1.94,4.31 -4.32,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.38 1.93,-4.31 4.31,-4.31z" />
                                    <path class="fil0"
                                        d="M1301.82 2778.86c1.98,0 3.95,-0.01 5.93,-0.01 1.25,0 2.3,0.86 2.6,2.01l0 0 0.85 3.32 0.16 0.62 1.13 4.4 0.16 0.63 1.05 4.07c0.23,0.88 -0.31,1.8 -1.2,2.02l0 0c-0.88,0.23 -1.8,-0.31 -2.02,-1.19 -0.36,-1.36 -0.72,-2.7 -1.07,-4.07l-1.45 -5.65 -0.01 -0.04c-0.04,-0.3 -0.3,-0.53 -0.6,-0.53l0 0c-0.41,0 -0.61,0.31 -0.61,0.65 1.4,5.38 2.79,10.77 4.19,16.15 -1.4,0 -2.79,0 -4.19,0l0 12.86c0,1.18 -0.97,2.15 -2.16,2.15l0 0c-1.18,0 -2.16,-0.97 -2.16,-2.15 0,-4.28 0,-8.55 0,-12.82l0 -0.04 0 0c-0.02,-0.32 -0.28,-0.57 -0.6,-0.57 -0.32,0 -0.59,0.25 -0.61,0.57l0 0 0 0.04c0,4.27 0,8.54 0,12.82 0,1.18 -0.97,2.15 -2.15,2.15l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.15l0 -12.86c-1.4,0 -2.79,0 -4.19,0 1.38,-5.3 2.75,-10.61 4.13,-15.91 0.02,-0.1 0.06,-0.21 0.06,-0.31 -0.02,-0.12 -0.05,-0.23 -0.11,-0.32 -0.19,-0.3 -0.61,-0.34 -0.87,-0.13 -0.12,0.09 -0.21,0.24 -0.23,0.4l-0.01 0.04 -1.45 5.65c-0.35,1.37 -0.72,2.71 -1.07,4.07 -0.22,0.88 -1.14,1.42 -2.02,1.19l0 0c-0.89,-0.22 -1.43,-1.14 -1.2,-2.02l1.05 -4.07 0.15 -0.63 1.14 -4.4 0.16 -0.62 0.85 -3.32 0 0c0.3,-1.15 1.35,-2.01 2.59,-2.01 1.98,0 3.96,0.01 5.94,0.01z" />
                                </g>
                                <polygon class="terminal fil4 str22"
                                    points="1160.92,682.03 1093.58,682.03 1093.58,749.38 1160.92,749.38 " />
                                <g id="_2096388120688">
                                    <path class="fil23"
                                        d="M1111.63 710.61l1.01 0 -0.38 2.27 -0.63 0c-1.08,0 -2.06,-0.44 -2.77,-1.15 -0.71,-0.71 -1.15,-1.7 -1.15,-2.78l0 -10.65c0,-1.08 0.44,-2.06 1.15,-2.78 0.71,-0.71 1.69,-1.15 2.77,-1.15l31.24 0c1.08,0 2.06,0.44 2.78,1.15 0.71,0.72 1.15,1.7 1.15,2.78l0 10.65c0,1.08 -0.44,2.07 -1.15,2.78 -0.72,0.71 -1.7,1.15 -2.78,1.15l-0.62 0 -0.38 -2.27 1 0c0.46,0 0.87,-0.19 1.17,-0.49 0.3,-0.3 0.49,-0.71 0.49,-1.17l0 -10.65c0,-0.46 -0.19,-0.87 -0.49,-1.17 -0.3,-0.3 -0.71,-0.49 -1.17,-0.49l-31.24 0c-0.45,0 -0.87,0.19 -1.17,0.49 -0.3,0.3 -0.48,0.71 -0.48,1.17l0 10.65c0,0.46 0.18,0.87 0.48,1.17 0.3,0.3 0.72,0.49 1.17,0.49z" />
                                    <path class="fil0"
                                        d="M1116.26 701.37l21.98 0 3.61 25.55 -29.19 0 3.6 -25.55zm1.84 15.72c0.91,0 1.82,0 2.73,0 0.91,0 1.83,0 2.74,0 0.05,0.53 0.4,0.96 1.1,1.27 0.69,0.31 1.62,0.47 2.78,0.47 1.11,0 2.03,-0.17 2.73,-0.5 0.69,-0.33 1.02,-0.75 0.99,-1.26 -0.03,-0.59 -0.48,-1.07 -1.34,-1.42 -0.73,-0.31 -1.91,-0.6 -3.52,-0.86 -0.59,-0.1 -0.95,-0.15 -1.09,-0.18 -0.94,-0.17 -1.68,-0.35 -2.21,-0.52 -1.04,-0.34 -1.84,-0.8 -2.4,-1.38 -0.55,-0.57 -0.77,-1.19 -0.69,-1.84 0.09,-0.7 0.5,-1.34 1.22,-1.94 0.7,-0.59 1.61,-1.06 2.72,-1.41 0.41,-0.12 0.82,-0.23 1.25,-0.31 0.02,-0.59 0.04,-1.19 0.06,-1.79 0.69,0 1.39,0 2.08,0 0.69,0 1.38,0 2.07,0 0.03,0.58 0.05,1.16 0.07,1.74 0.53,0.08 1.04,0.19 1.52,0.34 1.09,0.33 1.98,0.79 2.68,1.38 0.7,0.6 1.15,1.26 1.32,2.01 -0.81,0 -1.63,0 -2.44,0 -0.81,0 -1.62,0 -2.43,0 -0.1,-0.44 -0.4,-0.78 -0.92,-1.04 -0.52,-0.26 -1.16,-0.38 -1.95,-0.38 -0.73,0 -1.33,0.13 -1.79,0.39 -0.47,0.27 -0.71,0.61 -0.73,1.03 -0.02,0.41 0.21,0.73 0.67,0.98 0.48,0.26 1.33,0.49 2.56,0.72 0.37,0.07 0.75,0.13 1.13,0.19 1.78,0.32 3.15,0.68 4.11,1.05 1.98,0.79 3.08,1.81 3.26,3.07 0.11,0.8 -0.19,1.55 -0.94,2.21 -0.76,0.68 -1.87,1.21 -3.31,1.59 -0.7,0.19 -1.43,0.33 -2.19,0.42 0.02,0.59 0.04,1.17 0.07,1.75 -0.92,0 -1.84,0 -2.76,0 -0.92,0 -1.84,0 -2.76,0 0.03,-0.58 0.05,-1.16 0.07,-1.74 -1.66,-0.2 -3.1,-0.6 -4.3,-1.19 -0.81,-0.41 -1.36,-0.86 -1.71,-1.33 -0.31,-0.41 -0.48,-0.9 -0.45,-1.52z" />
                                    <polygon class="fil0"
                                        points="1112.66,734.36 1141.85,734.36 1141.85,737.04 1112.66,737.04 " />
                                    <polygon class="fil0"
                                        points="1112.66,729.45 1141.85,729.45 1141.85,732.13 1112.66,732.13 " />
                                </g>
                                <g id="_2096388115504">
                                    <path class="fil0"
                                        d="M1194.67 887.73c2.38,0 4.31,1.93 4.31,4.31 0,2.38 -1.93,4.31 -4.31,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.38 1.93,-4.31 4.31,-4.31z" />
                                    <path class="fil0"
                                        d="M1189.06 897.57l11.27 0c2.05,0 3.73,1.67 3.73,3.72l0 1.92 0 6.66 0 4.84c0,0.92 -0.75,1.66 -1.66,1.66l0 0c-0.92,0 -1.67,-0.74 -1.67,-1.66l0 -1.14 -0.02 0 0 -9.82c0,-0.33 -0.27,-0.6 -0.61,-0.6l0 0c-0.33,0 -0.6,0.27 -0.6,0.6l0 7.32 0 2.52 0 0.12 0 4.72 0 14.38c0,1.18 -0.97,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.98 -2.16,-2.16l0 -9.6 0 -7.44c0,-0.34 -0.27,-0.61 -0.6,-0.61l0 0c-0.34,0 -0.61,0.27 -0.61,0.61l0 7.41 0 9.75c0,1.12 -0.92,2.04 -2.04,2.04l0 0c-1.12,0 -2.03,-0.92 -2.03,-2.04l0 -14.5 0 -4.72 0 -0.12 0 -2.64 0 -7.2c0,-0.33 -0.28,-0.6 -0.61,-0.6l0 0c-0.33,0 -0.6,0.27 -0.6,0.6l0 9.82 -0.03 0 0 1.14c0,0.92 -0.75,1.66 -1.66,1.66l0 0c-0.92,0 -1.66,-0.74 -1.66,-1.66l0 -4.84 0 -6.66 0 -1.92c0,-2.05 1.67,-3.72 3.72,-3.72z" />
                                </g>
                                <g id="_2096388114608">
                                    <polygon class="toilet fil14 str22"
                                        points="1228.37,810.33 1161.03,810.33 1161.03,877.67 1228.37,877.67 " />
                                    <g>
                                        <path class="fil0"
                                            d="M1194.79 820.38c2.38,0 4.31,1.93 4.31,4.31 0,2.39 -1.93,4.32 -4.31,4.32 -2.38,0 -4.32,-1.93 -4.32,-4.32 0,-2.38 1.94,-4.31 4.32,-4.31z" />
                                        <path class="fil0"
                                            d="M1194.7 830.22c1.98,0 3.95,0 5.93,0 1.25,0 2.29,0.85 2.59,2l0.01 0 0.85 3.32 0.16 0.62 1.13 4.41 0.16 0.62 1.05 4.07c0.22,0.89 -0.32,1.8 -1.2,2.03l0 0c-0.89,0.23 -1.8,-0.31 -2.03,-1.2 -0.35,-1.36 -0.71,-2.69 -1.07,-4.07l-1.45 -5.65 -0.01 -0.04c-0.03,-0.3 -0.29,-0.53 -0.6,-0.53l0 0c-0.4,0 -0.6,0.32 -0.6,0.66 1.39,5.38 2.79,10.76 4.18,16.14 -1.39,0 -2.79,0 -4.18,0l0 12.86c0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16 0,-4.27 0,-8.55 0,-12.82l0 -0.04 0 0c-0.02,-0.31 -0.28,-0.57 -0.6,-0.57 -0.32,0 -0.59,0.26 -0.61,0.57l0 0 0 0.04c0,4.27 0,8.55 0,12.82 0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16l0 -12.86c-1.39,0 -2.79,0 -4.18,0 1.37,-5.3 2.75,-10.61 4.12,-15.91 0.03,-0.1 0.07,-0.21 0.06,-0.31 -0.01,-0.11 -0.04,-0.22 -0.1,-0.32 -0.19,-0.29 -0.61,-0.34 -0.88,-0.13 -0.12,0.1 -0.2,0.24 -0.22,0.4l-0.01 0.04 -1.45 5.65c-0.36,1.38 -0.72,2.71 -1.07,4.07 -0.23,0.89 -1.14,1.43 -2.03,1.2l0 0c-0.88,-0.23 -1.42,-1.14 -1.19,-2.03l1.04 -4.07 0.16 -0.62 1.13 -4.41 0.16 -0.62 0.85 -3.32 0.01 0c0.3,-1.15 1.34,-2 2.59,-2 1.98,0 3.95,0 5.94,0z" />
                                    </g>
                                </g>
                                <g id="_2096388112144">
                                    <path class="fil23"
                                        d="M1099.44 1980.41l-3.52 -0.83c0.75,-2.91 2.91,-4.37 6.46,-4.37 2.1,0 3.68,0.46 4.76,1.39 1.07,0.92 1.6,2.01 1.6,3.26 0,0.85 -0.25,1.62 -0.73,2.32 -0.49,0.68 -1.22,1.29 -2.2,1.81 1.18,0.41 2.08,0.98 2.67,1.73 0.59,0.75 0.89,1.67 0.89,2.76 0,1.58 -0.58,2.85 -1.73,3.82 -1.15,0.97 -2.88,1.46 -5.18,1.46 -1.87,0 -3.35,-0.31 -4.43,-0.94 -1.08,-0.62 -1.89,-1.79 -2.44,-3.51l3.3 -1.08c0.34,1.08 0.8,1.78 1.37,2.1 0.56,0.32 1.26,0.48 2.1,0.48 1.14,0 1.97,-0.25 2.5,-0.74 0.52,-0.5 0.78,-1.07 0.78,-1.71 0,-0.73 -0.3,-1.33 -0.89,-1.78 -0.58,-0.45 -1.48,-0.67 -2.66,-0.67l-0.83 0 0 -2.7 0.42 0c1.1,0 1.95,-0.25 2.53,-0.75 0.59,-0.49 0.88,-1.16 0.88,-1.98 0,-0.65 -0.24,-1.2 -0.71,-1.65 -0.48,-0.45 -1.16,-0.67 -2.04,-0.67 -1.51,0 -2.48,0.75 -2.9,2.25zm13.11 13.02l0 -17.9 13.25 0 0 3.03 -9.62 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.97 0 0 3.02 -13.6 0zm17.96 -17.9l12.54 0 0 17.9 -3.62 0 0 -14.87 -5.38 0 0 7.64c0,2.19 -0.07,3.72 -0.22,4.58 -0.14,0.87 -0.5,1.55 -1.07,2.03 -0.56,0.48 -1.44,0.72 -2.65,0.72 -0.42,0 -1.19,-0.04 -2.31,-0.12l0 -2.8 0.81 0.01c0.76,0 1.27,-0.1 1.53,-0.3 0.26,-0.21 0.39,-0.71 0.39,-1.5l-0.02 -3.08 0 -10.21zm16.26 17.9l0 -17.9 13.25 0 0 3.03 -9.63 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.98 0 0 3.02 -13.6 0zm16.67 0l0 -17.9 3.63 0 0 7.05 7.05 0 0 -7.05 3.62 0 0 17.9 -3.62 0 0 -7.82 -7.05 0 0 7.82 -3.63 0zm34.18 0l-3.9 0 -1.55 -4.07 -7.18 0 -1.48 4.07 -3.84 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.62 -7.1l-2.49 -6.62 -2.42 6.62 4.91 0zm19.25 7.1l0 -7.47 -0.73 0c-1.15,0 -1.95,0.17 -2.42,0.51 -0.47,0.34 -1.27,1.36 -2.41,3.06l-2.59 3.9 -4.32 0 2.18 -3.49c0.86,-1.39 1.55,-2.36 2.05,-2.91 0.52,-0.56 1.16,-1.06 1.93,-1.5 -1.67,-0.26 -2.87,-0.84 -3.6,-1.74 -0.74,-0.9 -1.11,-1.97 -1.11,-3.23 0,-1.09 0.27,-2.06 0.82,-2.9 0.55,-0.84 1.28,-1.41 2.18,-1.69 0.9,-0.29 2.24,-0.44 4.04,-0.44l7.61 0 0 17.9 -3.63 0zm0 -14.87l-2.82 0c-1.43,0 -2.37,0.03 -2.82,0.09 -0.45,0.07 -0.84,0.29 -1.17,0.67 -0.33,0.37 -0.49,0.86 -0.49,1.46 0,0.63 0.16,1.13 0.47,1.5 0.32,0.37 0.72,0.6 1.2,0.7 0.48,0.08 1.47,0.13 2.96,0.13l2.67 0 0 -4.55zm-87.56 42.8l-3.9 0 -1.55 -4.07 -7.18 0 -1.49 4.07 -3.83 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.63 -7.1l-2.48 -6.62 -2.42 6.62 4.9 0zm8.61 -10.8l14.22 0 0 17.9 -3.62 0 0 -14.87 -6.98 0 0 14.87 -3.62 0 0 -17.9zm21.95 17.9l0 -14.87 -5.3 0 0 -3.03 14.2 0 0 3.03 -5.28 0 0 14.87 -3.62 0zm11.24 0l0 -17.9 13.25 0 0 3.03 -9.62 0 0 3.97 8.95 0 0 3.03 -8.95 0 0 4.85 9.97 0 0 3.02 -13.6 0zm16.73 -17.9l3.62 0 0 7.63c0.81,-0.08 1.35,-0.29 1.64,-0.63 0.28,-0.33 0.72,-1.26 1.31,-2.78 0.75,-1.94 1.5,-3.15 2.26,-3.62 0.75,-0.47 1.95,-0.71 3.62,-0.71 0.08,0 0.25,0 0.52,-0.01l0 2.67 -0.51 -0.01c-0.74,0 -1.28,0.09 -1.63,0.28 -0.34,0.18 -0.61,0.46 -0.83,0.83 -0.21,0.38 -0.52,1.15 -0.93,2.32 -0.22,0.62 -0.46,1.13 -0.72,1.55 -0.25,0.42 -0.71,0.81 -1.36,1.17 0.81,0.23 1.47,0.69 1.99,1.38 0.53,0.7 1.1,1.67 1.73,2.93l2.44 4.9 -4.25 0 -2.15 -4.61c-0.03,-0.06 -0.1,-0.19 -0.21,-0.37 -0.04,-0.07 -0.19,-0.35 -0.45,-0.85 -0.46,-0.88 -0.83,-1.43 -1.12,-1.65 -0.3,-0.22 -0.74,-0.33 -1.35,-0.34l0 7.82 -3.62 0 0 -17.9zm31.33 17.9l-3.9 0 -1.55 -4.07 -7.18 0 -1.49 4.07 -3.83 0 6.95 -17.9 3.83 0 7.17 17.9zm-6.62 -7.1l-2.49 -6.62 -2.42 6.62 4.91 0z" />
                                    <g>
                                        <path class="fil0"
                                            d="M1078.88 1976.13l-41.45 0c-0.38,0 -0.73,0.08 -1.06,0.21 -0.34,0.14 -0.64,0.35 -0.9,0.61 -0.25,0.25 -0.46,0.56 -0.6,0.9 -0.14,0.32 -0.21,0.68 -0.21,1.05l0 41.45c0,0.38 0.07,0.73 0.21,1.06 0.14,0.33 0.35,0.64 0.6,0.9 0.26,0.25 0.56,0.46 0.9,0.6 0.33,0.14 0.68,0.21 1.06,0.21l41.45 0c0.37,0 0.73,-0.07 1.05,-0.21 0.34,-0.14 0.65,-0.35 0.9,-0.6 0.26,-0.26 0.47,-0.57 0.61,-0.9 0.13,-0.33 0.21,-0.68 0.21,-1.06l0 -41.45c0,-0.37 -0.08,-0.73 -0.21,-1.05 -0.14,-0.34 -0.35,-0.65 -0.61,-0.9 -0.25,-0.26 -0.56,-0.47 -0.9,-0.61 -0.32,-0.13 -0.68,-0.21 -1.05,-0.21zm-40.57 2.94l40.45 0 0 41.12 -41.21 0 0 -41.12 0.76 0z" />
                                        <polygon class="fil0"
                                            points="1044.12,1995.44 1053.97,1995.44 1053.97,1985.59 1062.34,1985.59 1062.34,1995.44 1072.19,1995.44 1072.19,2003.81 1062.34,2003.81 1062.34,2013.66 1053.97,2013.66 1053.97,2003.81 1044.12,2003.81 " />
                                    </g>
                                </g>
                                <polygon class="inglot fil12 str22"
                                    points="853.41,1444.82 853.41,1408.57 921.85,1408.57 921.85,1444.82 " />
                                <polygon class="eyfel fil12 str22"
                                    points="959.4,1444.82 959.4,1408.57 1027.84,1408.57 1027.84,1444.82 " />
                                <polygon class="serebroff fil7 str22"
                                    points="1062.58,1444.82 1062.58,1408.57 1131.02,1408.57 1131.02,1444.82 " />
                                <polygon class="lalo fil7 str22"
                                    points="1166.22,1444.82 1166.22,1408.57 1234.66,1408.57 1234.66,1444.82 " />
                                <g id="_2096388107632">
                                    <path class="fil26"
                                        d="M900.19 1008.28l-16.02 16.02 -6.42 0c-0.59,0 -1.15,0.11 -1.66,0.33 -0.53,0.22 -1.01,0.54 -1.42,0.95 -0.4,0.4 -0.72,0.88 -0.94,1.41 -0.22,0.51 -0.33,1.07 -0.33,1.66 0,0.59 0.11,1.15 0.33,1.66 0.22,0.53 0.54,1.01 0.94,1.41 0.41,0.4 0.89,0.73 1.42,0.95 0.51,0.21 1.07,0.33 1.66,0.33l8.23 0c0.31,0 0.6,-0.03 0.88,-0.09 0.28,-0.06 0.56,-0.15 0.83,-0.26 0.28,-0.12 0.53,-0.26 0.77,-0.43 0.24,-0.17 0.47,-0.36 0.67,-0.58l0.63 -0.65 0.01 0.01 15.27 -15.27 6.42 0c1.2,0 2.28,-0.49 3.07,-1.28 0.79,-0.78 1.28,-1.87 1.28,-3.07 0,-1.19 -0.49,-2.28 -1.28,-3.07 -0.79,-0.79 -1.87,-1.28 -3.07,-1.28l-8.23 0c-0.29,0 -0.57,0.03 -0.84,0.08 -0.28,0.06 -0.55,0.14 -0.8,0.24 -0.26,0.11 -0.51,0.24 -0.75,0.4 -0.21,0.14 -0.41,0.29 -0.59,0.46l-0.06 0.07z" />
                                    <path class="fil26"
                                        d="M887.18 1024.48l0 -15.19c0,-1.69 1.38,-3.07 3.07,-3.07l0 0c1.69,0 3.07,1.38 3.07,3.07l0 15.19c0,1.69 -1.38,3.07 -3.07,3.07l0 0c-1.69,0 -3.07,-1.38 -3.07,-3.07z" />
                                    <path class="fil26"
                                        d="M890.25 998.75c1.69,0 3.06,1.37 3.06,3.06 0,1.7 -1.37,3.07 -3.06,3.07 -1.7,0 -3.07,-1.37 -3.07,-3.07 0,-1.69 1.37,-3.06 3.07,-3.06z" />
                                    <g>
                                        <polygon class="fil26" points="875.5,979.4 884.26,963.62 893.02,979.4 " />
                                        <polygon class="fil26" points="896.19,963.62 904.95,979.4 913.71,963.62 " />
                                    </g>
                                    <path class="fil26"
                                        d="M919.42 988.19l-49.63 0c-0.45,0 -0.87,0.09 -1.26,0.25 -0.41,0.17 -0.77,0.41 -1.08,0.72 -0.31,0.31 -0.56,0.67 -0.72,1.08 -0.17,0.39 -0.25,0.81 -0.25,1.26l0 49.63c0,0.45 0.08,0.87 0.25,1.26 0.16,0.41 0.41,0.77 0.72,1.08 0.31,0.31 0.67,0.55 1.08,0.72 0.39,0.16 0.81,0.25 1.26,0.25l49.63 0c0.44,0 0.87,-0.09 1.26,-0.25 0.41,-0.17 0.77,-0.41 1.08,-0.72 0.31,-0.31 0.55,-0.67 0.72,-1.08 0.16,-0.39 0.25,-0.81 0.25,-1.26l0 -49.63c0,-0.45 -0.09,-0.87 -0.25,-1.26 -0.17,-0.41 -0.41,-0.77 -0.72,-1.08 -0.31,-0.31 -0.67,-0.55 -1.08,-0.72 -0.39,-0.16 -0.82,-0.25 -1.26,-0.25zm-48.57 3.51l48.42 0 0 49.23 -49.33 0 0 -49.23 0.91 0z" />
                                </g>
                                <g id="_2096388102896">
                                    <path class="fil26"
                                        d="M817.97 2524.82l-16.02 16.02 -6.42 0c-0.59,0 -1.15,0.11 -1.66,0.33 -0.53,0.22 -1.01,0.54 -1.41,0.94 -0.41,0.41 -0.73,0.89 -0.95,1.42 -0.22,0.51 -0.33,1.07 -0.33,1.66 0,0.59 0.11,1.15 0.33,1.66 0.22,0.53 0.54,1.01 0.95,1.41 0.4,0.4 0.88,0.73 1.41,0.95 0.51,0.21 1.07,0.33 1.66,0.33l8.23 0c0.31,0 0.6,-0.03 0.88,-0.09 0.28,-0.06 0.56,-0.15 0.83,-0.26 0.28,-0.12 0.54,-0.27 0.77,-0.43 0.24,-0.17 0.47,-0.36 0.67,-0.58l0.63 -0.66 0.01 0.02 15.27 -15.27 6.42 0c1.2,0 2.29,-0.49 3.07,-1.28 0.79,-0.79 1.28,-1.87 1.28,-3.07 0,-1.19 -0.49,-2.28 -1.28,-3.07 -0.78,-0.79 -1.87,-1.28 -3.07,-1.28l-8.23 0c-0.29,0 -0.57,0.03 -0.84,0.08 -0.28,0.06 -0.55,0.14 -0.8,0.24 -0.26,0.11 -0.51,0.24 -0.75,0.4 -0.21,0.13 -0.41,0.29 -0.59,0.46l-0.06 0.07z" />
                                    <path class="fil26"
                                        d="M804.96 2541.02l0 -15.19c0,-1.69 1.38,-3.07 3.07,-3.07l0 0c1.69,0 3.07,1.38 3.07,3.07l0 15.19c0,1.69 -1.38,3.07 -3.07,3.07l0 0c-1.69,0 -3.07,-1.38 -3.07,-3.07z" />
                                    <path class="fil26"
                                        d="M808.03 2515.29c1.69,0 3.07,1.37 3.07,3.06 0,1.7 -1.38,3.07 -3.07,3.07 -1.7,0 -3.07,-1.37 -3.07,-3.07 0,-1.69 1.37,-3.06 3.07,-3.06z" />
                                    <g>
                                        <polygon class="fil26" points="793.28,2495.94 802.04,2480.16 810.8,2495.94 " />
                                        <polygon class="fil26" points="813.97,2480.16 822.73,2495.94 831.49,2480.16 " />
                                    </g>
                                    <path class="fil26"
                                        d="M837.2 2504.73l-49.63 0c-0.45,0 -0.87,0.09 -1.26,0.25 -0.41,0.17 -0.77,0.41 -1.08,0.72 -0.31,0.31 -0.55,0.67 -0.72,1.08 -0.16,0.39 -0.25,0.81 -0.25,1.26l0 49.63c0,0.45 0.09,0.87 0.25,1.26 0.17,0.41 0.41,0.77 0.72,1.08 0.31,0.31 0.67,0.55 1.08,0.72 0.39,0.16 0.81,0.25 1.26,0.25l49.63 0c0.45,0 0.87,-0.09 1.26,-0.25 0.41,-0.17 0.77,-0.41 1.08,-0.72 0.31,-0.31 0.55,-0.68 0.72,-1.08 0.16,-0.39 0.25,-0.81 0.25,-1.26l0 -49.63c0,-0.45 -0.09,-0.87 -0.25,-1.26 -0.17,-0.41 -0.41,-0.77 -0.72,-1.08 -0.31,-0.31 -0.67,-0.55 -1.08,-0.72 -0.39,-0.16 -0.81,-0.25 -1.26,-0.25zm-48.57 3.51l48.42 0 0 49.23 -49.33 0 0 -49.23 0.91 0z" />
                                </g>
                                <polygon class="lift fil14 str22"
                                    points="669.38,711.58 602.04,711.58 602.04,778.93 669.38,778.93 " />
                                <g id="_2096388076176">
                                    <polygon class="fil0" points="618.19,732.84 625.47,719.73 632.74,732.84 " />
                                    <polygon class="fil0" points="638.68,719.73 645.95,732.84 653.22,719.73 " />
                                    <path class="fil0"
                                        d="M625.08 736.52c1.73,0 3.13,1.4 3.13,3.13 0,1.73 -1.4,3.13 -3.13,3.13 -1.72,0 -3.12,-1.4 -3.12,-3.13 0,-1.73 1.4,-3.13 3.12,-3.13z" />
                                    <path class="fil0"
                                        d="M621.02 743.66l8.17 0c1.49,0 2.7,1.21 2.7,2.7l0 1.39 0 4.82 0 3.52c0,0.66 -0.54,1.2 -1.2,1.2l0 0c-0.67,0 -1.21,-0.54 -1.21,-1.2l0 -0.83 -0.02 0 0 -7.12c0,-0.24 -0.19,-0.43 -0.44,-0.43l0 0c-0.24,0 -0.43,0.19 -0.43,0.43l0 5.31 0 1.83 0 0.08 0 3.43 0 10.42c0,0.86 -0.71,1.56 -1.57,1.56l0 0c-0.86,0 -1.56,-0.7 -1.56,-1.56l0 -6.96 0 -5.4c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.38 0 7.07c0,0.81 -0.67,1.47 -1.48,1.47l0 0c-0.81,0 -1.48,-0.66 -1.48,-1.47l0 -10.51 0 -3.43 0 -0.08 0 -1.92 0 -5.22c0,-0.24 -0.19,-0.43 -0.44,-0.43l0 0c-0.24,0 -0.44,0.19 -0.44,0.43l0 7.12 -0.01 0 0 0.83c0,0.66 -0.54,1.2 -1.21,1.2l0 0c-0.66,0 -1.2,-0.54 -1.2,-1.2l0 -3.52 0 -4.82 0 -1.39c0,-1.49 1.21,-2.7 2.7,-2.7z" />
                                    <path class="fil0"
                                        d="M645.98 736.52c1.72,0 3.12,1.4 3.12,3.13 0,1.73 -1.4,3.13 -3.12,3.13 -1.73,0 -3.13,-1.4 -3.13,-3.13 0,-1.73 1.4,-3.13 3.13,-3.13z" />
                                    <path class="fil0"
                                        d="M641.91 743.66l8.17 0c1.49,0 2.7,1.21 2.7,2.7l0 1.39 0 4.82 0 3.52c0,0.66 -0.54,1.2 -1.2,1.2l0 0c-0.67,0 -1.21,-0.54 -1.21,-1.2l0 -0.83 -0.01 0 0 -7.12c0,-0.24 -0.2,-0.43 -0.44,-0.43l0 0c-0.25,0 -0.44,0.19 -0.44,0.43l0 5.31 0 1.83 0 0.08 0 3.43 0 10.42c0,0.86 -0.71,1.56 -1.57,1.56l0 0c-0.86,0 -1.56,-0.7 -1.56,-1.56l0 -6.96 0 -5.4c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.38 0 7.07c0,0.81 -0.66,1.47 -1.48,1.47l0 0c-0.81,0 -1.48,-0.66 -1.48,-1.47l0 -10.51 0 -3.43 0 -0.08 0 -1.92 0 -5.22c0,-0.24 -0.19,-0.43 -0.43,-0.43l0 0c-0.25,0 -0.44,0.19 -0.44,0.43l0 7.12 -0.02 0 0 0.83c0,0.66 -0.54,1.2 -1.21,1.2l0 0c-0.66,0 -1.2,-0.54 -1.2,-1.2l0 -3.52 0 -4.82 0 -1.39c0,-1.49 1.21,-2.7 2.7,-2.7z" />
                                </g>
                                <polygon class="kazpost fil25 str22"
                                    points="1160.92,682.03 1093.58,682.03 1093.58,614.69 1160.92,614.69 " />
                                <g id="_2096388073776">
                                    <path class="fil0"
                                        d="M1109.36 634c0.17,0.66 3.67,3.73 4.38,4.44l11.07 11.07c2.93,2.93 1.88,3.01 7.06,-2.18l8.83 -8.83c0.42,-0.43 0.76,-0.63 1.18,-1.06 0.57,-0.57 3.13,-2.92 3.27,-3.44 -0.21,-0.1 -0.79,-0.36 -1.06,-0.36l-33.68 0c-0.27,0 -0.85,0.26 -1.05,0.36z" />
                                    <path class="fil0"
                                        d="M1109.56 662.81c0.31,0.17 0.55,0.27 0.97,0.27l33.44 0c0.43,0 0.66,-0.1 0.94,-0.24l-12.68 -12.74c-2.01,1.37 -3.63,4.82 -6.59,3.06 -0.85,-0.51 -2.06,-2.18 -3.33,-3.03l-12.75 12.68z" />
                                    <path class="fil0"
                                        d="M1107.71 636.35l0 23.9c0,0.51 0.13,0.64 0.23,1.06 0.59,-0.39 3.83,-3.77 4.8,-4.74 0.28,-0.27 0.48,-0.5 0.76,-0.76 0.34,-0.31 0.54,-0.42 0.89,-0.77 0.61,-0.61 6.05,-5.94 6.39,-6.44 -0.49,-0.74 -2.4,-2.46 -3.15,-3.21l-8.89 -8.89c-0.3,-0.3 -0.48,-0.62 -0.92,-0.74 -0.06,0.27 -0.11,0.27 -0.11,0.59z" />
                                    <path class="fil0"
                                        d="M1133.73 648.6c0.32,0.48 10.02,9.96 11.16,11.09 0.48,0.49 1.16,1.28 1.67,1.62 0.1,-0.42 0.24,-0.55 0.24,-1.06l0 -23.9c0,-0.32 -0.06,-0.32 -0.12,-0.59 -0.44,0.12 -1.31,1.14 -1.68,1.5 -0.56,0.56 -1.03,1.03 -1.59,1.59 -0.87,0.87 -9.32,9.21 -9.68,9.75z" />
                                </g>
                                <path class="fil23"
                                    d="M1667.32 1010.87l-7.86 0 -3.12 -8.21 -14.46 0 -3 8.21 -7.72 0 14 -36.06 7.72 0 14.44 36.06zm-13.34 -14.3l-5.01 -13.35 -4.87 13.35 9.88 0zm22.02 -21.76l24.88 0 0 29.97 3.18 0 0 13.95 -6.1 0 0 -7.86 -22.61 0 0 7.86 -6.1 0 0 -13.95 3.08 0c1.49,-3.08 2.48,-6.66 2.96,-10.72 0.48,-4.07 0.71,-9.22 0.71,-15.44l0 -3.81zm6.95 6.1c0,10.91 -1,18.87 -3.02,23.87l13.65 0 0 -23.87 -10.63 0zm25.91 29.96l0 -36.06 10.93 0 6.47 24.6 6.39 -24.6 10.96 0 0 36.06 -6.75 0 -0.03 -28.39 -7.11 28.39 -7.01 0 -7.08 -28.39 -0.02 28.39 -6.75 0zm42.15 -36.06l6.8 0 0 24.01 14.61 -24.01 7.25 0 0 36.06 -6.8 0 0 -23.62 -14.61 23.62 -7.25 0 0 -36.06zm36.1 36.06l0 -36.06 7.31 0 0 14.2 14.2 0 0 -14.2 7.3 0 0 36.06 -7.3 0 0 -15.76 -14.2 0 0 15.76 -7.31 0zm36.48 -36.06l6.8 0 0 24.01 14.6 -24.01 7.25 0 0 36.06 -6.8 0 0 -23.62 -14.6 23.62 -7.25 0 0 -36.06zm59.16 22.77l7.06 2.16c-1.09,3.97 -2.89,6.92 -5.41,8.85 -2.52,1.92 -5.71,2.89 -9.58,2.89 -4.79,0 -8.73,-1.64 -11.82,-4.91 -3.08,-3.28 -4.62,-7.75 -4.62,-13.43 0,-6.01 1.55,-10.67 4.65,-14 3.1,-3.32 7.18,-4.98 12.23,-4.98 4.41,0 8,1.31 10.75,3.92 1.65,1.54 2.87,3.76 3.69,6.65l-7.2 1.72c-0.43,-1.87 -1.32,-3.34 -2.67,-4.43 -1.36,-1.08 -3,-1.62 -4.93,-1.62 -2.68,0 -4.85,0.96 -6.52,2.88 -1.67,1.92 -2.5,5.02 -2.5,9.32 0,4.55 0.83,7.8 2.46,9.73 1.65,1.94 3.78,2.9 6.41,2.9 1.94,0 3.61,-0.61 5,-1.84 1.39,-1.24 2.4,-3.17 3,-5.81zm20.17 13.29l0 -29.96 -10.68 0 0 -6.1 28.61 0 0 6.1 -10.63 0 0 29.96 -7.3 0zm22.65 0l0 -36.06 11.68 0c4.42,0 7.3,0.18 8.64,0.54 2.07,0.55 3.8,1.72 5.19,3.53 1.39,1.82 2.09,4.16 2.09,7.03 0,2.21 -0.4,4.07 -1.2,5.58 -0.8,1.51 -1.82,2.7 -3.05,3.56 -1.24,0.86 -2.5,1.43 -3.77,1.7 -1.74,0.35 -4.25,0.52 -7.54,0.52l-4.73 0 0 13.6 -7.31 0zm7.31 -29.96l0 10.27 3.96 0c2.87,0 4.77,-0.19 5.74,-0.57 0.96,-0.38 1.72,-0.97 2.26,-1.78 0.55,-0.81 0.83,-1.74 0.83,-2.81 0,-1.32 -0.39,-2.4 -1.15,-3.26 -0.78,-0.86 -1.74,-1.39 -2.92,-1.61 -0.87,-0.16 -2.61,-0.24 -5.23,-0.24l-3.49 0zm54.35 29.96l-7.87 0 -3.11 -8.21 -14.47 0 -2.99 8.21 -7.72 0 14 -36.06 7.71 0 14.45 36.06zm-13.35 -14.3l-5.01 -13.35 -4.87 13.35 9.88 0zm17.33 -21.76l7.31 0 0 29.97 14.05 0 0 -29.97 7.3 0 0 29.97 3.02 0 0 13.95 -6.09 0 0 -7.86 -25.59 0 0 -36.06zm36.79 0l6.8 0 0 24.01 14.61 -24.01 7.25 0 0 36.06 -6.8 0 0 -23.62 -14.6 23.62 -7.26 0 0 -36.06zm57.66 36.06l0 -15.06 -1.48 0c-2.3,0 -3.92,0.35 -4.87,1.04 -0.95,0.68 -2.56,2.73 -4.85,6.15l-5.23 7.87 -8.7 0 4.4 -7.03c1.73,-2.8 3.11,-4.75 4.14,-5.87 1.03,-1.12 2.32,-2.13 3.87,-3.01 -3.35,-0.53 -5.77,-1.7 -7.26,-3.51 -1.48,-1.81 -2.23,-3.98 -2.23,-6.51 0,-2.2 0.56,-4.14 1.66,-5.84 1.11,-1.69 2.57,-2.84 4.38,-3.41 1.82,-0.58 4.53,-0.88 8.14,-0.88l15.33 0 0 36.06 -7.3 0zm0 -29.96l-5.68 0c-2.89,0 -4.79,0.06 -5.69,0.19 -0.91,0.13 -1.7,0.58 -2.35,1.33 -0.66,0.76 -0.98,1.74 -0.98,2.96 0,1.27 0.31,2.27 0.94,3.02 0.63,0.75 1.44,1.21 2.41,1.39 0.98,0.18 2.97,0.27 5.96,0.27l5.39 0 0 -9.16z" />
                            </g>
                        </svg>

                        <!-- map1 end -->



                        <!-- map2 -->

                        <svg id="map2" class="map2 map-default" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                            width="100%" height="100%" version="1.1"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 2550 3300" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <style type="text/css">
                                    <![CDATA[ .str0 {
                                        stroke: #FEFEFE;
                                        stroke-width: 2.36;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str42 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str41 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str38 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str33 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str34 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str14 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str2 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str10 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str7 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str11 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str8 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str5 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str9 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str6 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str3 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str4 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str37 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str39 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str40 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str13 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str35 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str21 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str20 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str17 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str12 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str36 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str43 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str18 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str23 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str31 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str28 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str32 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str29 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str26 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str30 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str27 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str24 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str25 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str15 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str22 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str19 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str16 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str1 {
                                        stroke: black;
                                        stroke-width: 2;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .fil13 {
                                        fill: none
                                    }

                                    .fil10 {
                                        fill: none;
                                        fill-rule: nonzero
                                    }

                                    .fil0 {
                                        fill: #FEFEFE
                                    }

                                    .fil1 {
                                        fill: #D2D3D5
                                    }

                                    .fil6 {
                                        fill: #D2D3D5
                                    }

                                    .fil7 {
                                        fill: #D2D3D5
                                    }

                                    .fil12 {
                                        fill: #D2D3D5
                                    }

                                    .fil3 {
                                        fill: #D2D3D5
                                    }

                                    .fil18 {
                                        fill: #ED3237
                                    }

                                    .fil16 {
                                        fill: #D2D3D5
                                    }

                                    .fil5 {
                                        fill: #D2D3D5
                                    }

                                    .fil17 {
                                        fill: #D2D3D5
                                    }

                                    .fil2 {
                                        fill: #D2D3D5
                                    }

                                    .fil4 {
                                        fill: #D2D3D5
                                    }

                                    .fil19 {
                                        fill: #D2D3D5
                                    }

                                    .fil9 {
                                        fill: #D2D3D5
                                    }

                                    .fil8 {
                                        fill: #D2D3D5
                                    }

                                    .fil14 {
                                        fill: #FEFEFE;
                                        fill-rule: nonzero
                                    }

                                    .fil11 {
                                        fill: black;
                                        fill-rule: nonzero
                                    }

                                    .fil15 {
                                        fill: #78644E;
                                        fill-rule: nonzero
                                    }

                                    ]]>
                                </style>
                            </defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <polygon class="fil0 str0"
                                    points="1020.41,722.59 1136.27,722.59 1136.27,300.27 1020.41,300.27 " />
                                <polygon class="fil0 str0"
                                    points="1071.27,636.27 1136.27,636.27 1136.27,517.27 1071.27,517.27 " />
                                <polygon class="fil1 str0"
                                    points="1131.68,1073.49 1290.89,1073.49 1290.89,1068.26 2152.21,1068.26 2152.21,779.28 1179.03,779.28 1179.03,191.09 1138.77,191.09 1138.77,300.27 1136.27,300.27 1136.27,722.59 1131.68,722.59 1131.68,779.28 " />
                                <polygon class="colins fil2 str0"
                                    points="706.21,1076.06 706.21,1200.95 706.21,1361.58 379.41,1361.58 379.41,1076.06 " />
                                <polygon class="koton fil2 str0"
                                    points="706.21,1361.58 706.21,2019.01 819.09,2143.08 819.91,2143.08 819.91,2462.08 749.41,2462.08 378.91,2462.08 378.91,2165.55 378.91,2143.08 379.41,2143.08 379.41,1361.58 " />
                                <polygon class="chuchvara2 fil3 str0"
                                    points="378.91,2719.58 378.91,2773.81 378.91,2810.08 378.91,2816.08 378.91,3004.78 594.39,3004.78 594.39,3070.16 808.41,3070.16 808.41,3004.78 917.91,3004.78 917.91,2816.08 1027.91,2816.08 1027.91,2719.58 917.91,2719.58 850.38,2719.58 815.91,2719.58 815.91,2550.88 749.41,2550.88 378.91,2550.88 " />
                                <polygon class="chuchvara2 fil3 str0"
                                    points="717.58,2550.88 378.91,2550.88 378.91,2462.08 717.58,2462.08 " />
                                <polygon class="flo fil4 str0"
                                    points="2152.21,1068.26 2152.21,1185.76 2152.21,1185.99 2152.21,1190.08 2152.21,1194.21 2152.21,1198.4 2152.21,1202.64 2152.21,1211.38 2152.21,1215.89 2152.21,1220.53 2152.21,1225.29 2152.21,1230.21 2152.21,1235.28 2152.21,1240.52 2152.21,1245.96 2152.21,1251.59 2152.21,1257.44 2152.21,1263.52 2152.21,1269.84 2152.21,1271.38 2152.21,1322.06 2152.21,1366.37 2152.21,1417.3 2152.21,1417.93 2152.21,1418.09 2152.21,1418.54 2152.21,1419.12 2152.21,1419.64 2152.21,1419.67 2152.21,1420.21 2152.21,1420.72 2152.21,1421.21 2152.21,1421.26 2152.21,1421.68 2152.21,1422.14 2152.21,1422.58 2152.21,1422.95 2152.21,1423 2152.21,1423.41 2152.21,1423.8 2152.21,1424.18 2152.21,1424.55 2152.21,1424.71 2152.21,1424.9 2152.21,1425.25 2152.21,1425.59 2152.21,1425.92 2152.21,1426.24 2152.21,1426.54 2152.21,1426.56 2152.21,1426.87 2152.21,1427.18 2152.21,1427.49 2152.21,1427.79 2152.21,1428.1 2152.21,1428.4 2152.21,1428.45 2152.21,1428.71 2152.21,1429.02 2152.21,1429.33 2152.21,1429.65 2152.21,1429.97 2152.21,1430.3 2152.21,1430.44 2152.21,1430.64 2152.21,1430.98 2152.21,1431.34 2152.21,1431.71 2152.21,1432.09 2152.21,1432.48 2152.21,1432.5 2152.21,1432.88 2152.21,1433.3 2152.21,1433.74 2152.21,1434.19 2152.21,1434.66 2152.21,1434.66 2152.21,1435.16 2152.21,1435.67 2152.21,1436.2 2152.21,1436.75 2152.21,1436.9 2152.21,1437.33 2152.21,1437.93 2152.21,1438.56 2152.21,1439.21 2152.21,1439.23 2152.21,1439.89 2152.21,1440.6 2152.21,1441.34 2152.21,1441.65 2152.21,1442.11 2152.21,1442.91 2152.21,1443.75 2152.21,1444.16 2152.21,1444.61 2152.21,1445.52 2152.21,1446.45 2152.21,1446.78 2152.21,1447.43 2152.21,1448.44 2152.21,1449.49 2152.21,1501.58 1290.89,1501.58 1229.33,1501.58 1229.33,1379.08 1073.4,1379.08 974.41,1379.08 974.41,1204.08 1073.4,1204.08 1073.4,1185.76 1239.02,1185.76 1239.02,1113.88 1239.02,1073.49 1290.89,1073.49 1290.89,1068.26 " />
                                <polygon class="fil1 str0"
                                    points="1290.89,1068.26 1290.89,1058.07 1290.89,892.02 2152.21,892.02 2152.21,1068.26 " />
                                <polygon class="detskii_mir fil5 str0"
                                    points="919.91,1608.58 817.81,1608.58 817.81,1501.58 806.41,1501.58 806.41,1608.58 806.41,1617.43 806.41,1973.62 919.91,2098.38 919.91,2366.08 1060.3,2481.31 1060.3,2579.47 1229.33,2579.47 1229.33,2366.08 1229.33,1973.62 1229.33,1608.58 1229.33,1501.58 1056.41,1501.58 919.91,1501.58 " />
                                <polygon class="fil1 str0"
                                    points="1060.3,3004.78 1285.28,3004.78 1346.85,3004.78 1346.85,2997 2128.76,2997 2152.21,2997 2152.21,2816.08 2152.21,1502.53 1795.84,1502.53 1795.84,1501.58 1229.33,1501.58 1229.33,2579.47 1194.98,2579.47 1194.98,2748.52 1060.3,2748.52 1060.3,2868.98 1060.3,2868.98 " />
                                <polygon class="travelers_coffee fil3 str0"
                                    points="804.97,1074.96 937.07,1074.96 958.43,1074.96 958.43,1177.84 937.07,1177.84 937.07,1198.67 804.97,1198.67 804.97,1177.84 " />
                                <polygon class="anawa_kids fil6"
                                    points="773.53,1251.54 840.72,1251.54 840.72,1218.21 773.53,1218.21 " />
                                <polygon class="lego_qala fil7 str0"
                                    points="807.13,1380.45 877.7,1380.45 877.7,1294.51 807.13,1294.51 " />
                                <polygon class="fil8 str0"
                                    points="1194.98,2681.17 1060.3,2681.17 1060.3,2579.47 1194.98,2579.47 " />
                                <polygon class="fil1 str0"
                                    points="917.91,3004.78 1060.3,3004.78 1060.3,2816.08 1060.3,2719.58 1027.91,2719.58 1027.91,2816.08 917.91,2816.08 " />
                                <polygon class="fil1 str0"
                                    points="1073.4,1185.76 1239.02,1185.76 1239.02,1073.49 1131.68,1073.49 1131.68,1080.58 1073.4,1080.58 " />
                                <polygon class="fil1 str0"
                                    points="958.43,1204.08 1073.4,1204.08 1073.4,1080.58 1020.51,1080.58 1020.01,1074.96 958.43,1074.96 " />
                                <polygon class="toilet fil9 str0"
                                    points="1194.98,2681.17 1127.64,2681.17 1127.64,2748.52 1194.98,2748.52 " />
                                <polygon class="toilet fil9 str0"
                                    points="1060.3,2681.17 1127.64,2681.17 1127.64,2748.52 1060.3,2748.52 " />
                                <polygon class="wardrobe fil9 str0"
                                    points="1025.77,1136.74 958.43,1136.74 958.43,1204.08 1025.77,1204.08 " />
                                <polyline class="fil10 str1" points="844.31,1533.11 844.31,1580.61 867.31,1580.61 " />
                                <line class="fil10 str1" x1="844.31" y1="1580.61" x2="817.81" y2="1580.61" />
                                <line class="fil10 str1" x1="844.31" y1="1575.61" x2="817.81" y2="1575.61" />
                                <line class="fil10 str1" x1="844.31" y1="1570.11" x2="817.81" y2="1570.11" />
                                <line class="fil10 str1" x1="844.31" y1="1564.61" x2="817.81" y2="1564.61" />
                                <line class="fil10 str1" x1="844.31" y1="1559.61" x2="817.81" y2="1559.61" />
                                <line class="fil10 str1" x1="844.31" y1="1554.11" x2="817.81" y2="1554.11" />
                                <line class="fil10 str1" x1="844.31" y1="1548.61" x2="817.81" y2="1548.61" />
                                <line class="fil10 str1" x1="844.31" y1="1543.61" x2="817.81" y2="1543.61" />
                                <line class="fil10 str1" x1="844.31" y1="1538.11" x2="817.81" y2="1538.11" />
                                <line class="fil10 str1" x1="831.31" y1="1533.11" x2="831.31" y2="1580.61" />
                                <polyline class="fil10 str1" points="824.31,1575.61 831.31,1580.61 837.81,1575.61 " />
                                <line class="fil10 str1" x1="844.31" y1="1533.11" x2="817.81" y2="1533.11" />
                                <polyline class="fil10 str1" points="843.31,1532.11 843.31,1581.61 868.31,1581.61 " />
                                <line class="fil10 str1" x1="888.81" y1="1602.11" x2="888.81" y2="1607.61" />
                                <line class="fil10 str1" x1="883.31" y1="1596.61" x2="883.31" y2="1607.61" />
                                <line class="fil10 str1" x1="878.31" y1="1591.61" x2="878.31" y2="1607.61" />
                                <line class="fil10 str1" x1="872.81" y1="1586.11" x2="872.81" y2="1607.61" />
                                <line class="fil10 str1" x1="867.31" y1="1580.61" x2="867.31" y2="1607.61" />
                                <line class="fil10 str1" x1="862.31" y1="1580.61" x2="862.31" y2="1607.61" />
                                <line class="fil10 str1" x1="856.81" y1="1580.61" x2="856.81" y2="1607.61" />
                                <line class="fil10 str1" x1="851.31" y1="1580.61" x2="851.31" y2="1607.61" />
                                <line class="fil10 str1" x1="846.31" y1="1580.61" x2="846.31" y2="1607.61" />
                                <polyline class="fil10 str1" points="846.31,1594.11 877.81,1594.11 872.81,1589.11 " />
                                <polyline class="fil10 str1"
                                    points="867.31,1580.61 878.31,1591.61 879.81,1591.11 877.81,1595.11 880.31,1593.61 894.31,1607.61 " />
                                <line class="fil10 str1" x1="872.81" y1="1599.11" x2="877.81" y2="1594.11" />
                                <path class="fil11"
                                    d="M780.32 2545.12l-7.24 0 -2.57 0c-0.56,0 -1,-0.45 -1,-1l0 -4.5 -32.79 0 -0.03 0c-0.55,0 -1,-0.45 -1,-1l0 -0.02 0 -59.96 0 -0.02c0,-0.56 0.45,-1 1,-1l0.03 0 32.79 0 0 -4.5c0,-0.55 0.44,-1 1,-1l44.91 0 27.26 0 8.1 0c-12.4,14.89 -23.34,27.97 -34.34,40.89 -9.18,10.77 -18.19,21.2 -27.8,32.11l-8.32 0zm15.8 -28.5l0.89 1.07 0 -1.07 -0.89 0zm2.89 3.5l1.54 1.87 3.46 -4.01 0 -1.36 -5 0 0 3.5zm-2 0.71l-3.47 -4.21 -1.53 0 0 6.5 5 0 0 -2.29zm-35.5 -33.06l-3.8 4.35 3.8 0 0 -4.35zm-3.89 6.35l3.89 4.72 0 -4.72 -3.89 0zm2.77 6.5l-3.88 -4.72 0 4.72 3.88 0zm-3.88 -10.16l3.8 -4.34 -3.8 0 0 4.34zm-18.32 -9.84l0 8.88 0 16.12 9.95 0 0 -0.01 -0.01 -0.01 0 -0.01 -0.01 0 -0.03 -0.08 -0.01 -0.01 -0.01 -0.04 0 0 -0.02 -0.03 0 -0.02 0 0 0 -0.01 -0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 -0.01 -0.03 0 -0.01 0 0 -0.01 -0.02 0 -0.01 0 -0.01 0 -0.01 0 0 -0.01 -0.02 0 -0.01 0 0 0 -0.02 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 0 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -1.44 0 -0.02 0 -0.01c0,-0.55 0.45,-1 1,-1l0.02 0 4.48 0 0 -1c0,-0.55 0.44,-1 1,-1l0 -7.48 0 -0.02 0 -0.03 0 -6.97c-0.56,0 -1,-0.45 -1,-1l0 -1 -4.48 0 -0.02 0c-0.55,0 -0.99,-0.44 -1,-0.98l0 -0.02 0 -0.02 0 -0.01 0 -1.47 0 -0.5 0 -0.5 -7.76 0 -2.06 0zm0 27l0 2 16.29 0 56.68 0 0.54 -0.64 1.16 -1.36 -58.35 0 -0.03 0 -16.29 0zm0 4l0 13.97 0 11.03 9.82 0 0.16 0c-0.01,-0.02 -0.07,-0.04 -0.16,-0.05l0 -0.82 0 0 0 -0.13 0 -0.98 0 -0.02 0 -0.03c0.01,-0.54 0.45,-0.97 1,-0.97l0.02 0 4.48 0 0 -1.5c0,-0.55 0.44,-1 1,-1l0 -6.98 0 -0.02 0 -0.03 0 -7.47c-0.56,0 -1,-0.45 -1,-1l0 -0.29 -4.5 0c-0.55,0 -1,-0.61 -1,-1.36 0,-0.07 0,-0.14 0.01,-0.2 -0.01,-0.05 -0.01,-0.1 -0.01,-0.15l0 -1.47 0 -0.02 0 -0.01 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 0 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -0.01 0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0.01 -0.01 0 0 0 -0.02 0.01 -0.03 0 0 0 -0.02 0 -0.01 0.01 0 0 -0.02 0 0 0 -0.01 0.02 -0.03 0 -0.01 0.01 -0.04 0.01 0 0.03 -0.09 0.01 0 0 -0.01 0.01 -0.01 0 0 -9.95 0zm86.09 -17.5l-3.77 0 0 4.47 3.77 -4.47zm-5.77 0l-5.5 0 0 6.5 5.5 0 0 -6.5zm-7.5 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5.5 0 0 6.5 5.5 0 0 -6.5zm-7.5 0l-5 0 0 6.5 5 0 0 -6.5zm-7 0l-5 0 0 6.5 5 0 0 -6.5zm-5 -2l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5.5 0 0 -6 -5.5 0 0 6zm7.5 0l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5 0 0 -6 -5 0 0 6zm7 0l5.5 0 0 -6 -5.5 0 0 6zm7.5 0l5 0 0 -6 -5 0 0 6zm-64 31l5 0 0 -6.5 -5 0 0 6.5zm7 0l5 0 0 -6.5 -5 0 0 6.5zm7 0l5 0 0 -6.5 -5 0 0 6.5zm7 0l5.5 0 0 -6.5 -5.5 0 0 6.5zm7.5 0l5 0 0 -6.5 -5 0 0 6.5zm12 2l-5 0 0 6 0.61 0 4.39 -5.04 0 -0.96zm-7 0l-5 0 0 6 5 0 0 -6zm-7 0l-5.5 0 0 6 5.5 0 0 -6zm-7.5 0l-5 0 0 6 5 0 0 -6zm-7 0l-5 0 0 6 5 0 0 -6zm-7 0l-5 0 0 6 5 0 0 -6zm69.48 -39l-3.48 0 0 4.16 3.48 -4.16zm-75.48 47.5l34.93 0 0.44 -0.5 -6.85 0 -0.02 0 -0.03 0 -7.45 0 -0.02 0 -0.03 0 -6.95 0 -0.02 0 -0.03 0 -6.95 0 -0.02 0 -0.03 0 -6.95 0 -0.02 0 0 0.5zm16 -56l66.59 0 2.92 -3.5 -69.51 0 0 3.5zm13.66 62l-13.66 0 0 3.5 10.57 0 3.09 -3.5z" />
                                <path class="play_park fil7 str0"
                                    d="M379.41 191.09l477.27 0 163.73 0 118.36 0 0 67.97 0 41.21 -2.5 0 0 217 -48.19 0 -16.81 0 0 119 65.02 0.08 -0.02 86.24 -4.98 0 0.39 50.02 0 6.67 0 14.74 0 22.04 0 33.54 0 87.63 0 1.86 -111.67 0 0 135.87 -215.04 0 -98.76 1.1 -326.8 0 0 -136.72 0 -108.12 59.93 0c0,-25.28 0,-50.56 0,-75.84l0 -31.04 -59.93 0 0 -100.01 0 -43.32 0 -389.92zm326.59 538.69l101.04 0 0 209.37 -101.04 0 0 -209.37z" />
                                <polygon class="fil1 str0"
                                    points="1020.01,939.09 1131.68,939.09 1131.68,1080.58 1020.01,1080.58 " />
                                <polygon class="toilet fil9 str0"
                                    points="1131.29,789.93 1063.95,789.93 1063.95,857.28 1131.29,857.28 " />
                                <polygon class="baby_room fil12 str0"
                                    points="1131.29,789.93 1063.95,789.93 1063.95,722.59 1131.29,722.59 " />
                                <path class="fil11"
                                    d="M794.14 883.81l0 7.24 0 2.57c0,0.55 -0.45,1 -1,1l-4.5 0 0 32.78 0 0.03c0,0.55 -0.45,1 -1.01,1l-0.01 0 -59.96 0 -0.03 0c-0.55,0 -1,-0.45 -1,-1l0 -0.03 0 -32.78 -4.49 0c-0.56,0 -1,-0.45 -1,-1l0 -44.92 0 -27.26 0 -8.09c14.89,12.39 27.97,23.34 40.89,34.34 10.77,9.17 21.2,18.19 32.11,27.79l0 8.33zm-28.5 -15.81l1.07 -0.88 -1.07 0 0 0.88zm3.5 -2.88l1.87 -1.54 -4.02 -3.46 -1.35 0 0 5 3.5 0zm0.7 2l-4.2 3.46 0 1.54 6.5 0 0 -5 -2.3 0zm-33.05 35.5l4.34 3.8 0 -3.8 -4.34 0zm6.35 3.88l4.71 -3.88 -4.71 0 0 3.88zm6.5 -2.77l-4.72 3.89 4.72 0 0 -3.89zm-10.16 3.89l-4.34 -3.8 0 3.8 4.34 0zm-9.84 18.31l8.88 0 16.11 0 0 -9.94 0 0 -0.01 0 -0.01 0.01 0 0 -0.09 0.04 0 0 -0.04 0.02 0 0 -0.04 0.01 -0.01 0 0 0 -0.02 0.01 0 0 -0.01 0 -0.02 0.01 0 0 -0.03 0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0.01 0 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0.01 -0.01 0 -0.01 0 0 0 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -1.45 0 -0.01 0 -0.01 0c-0.56,0 -1.01,-0.45 -1.01,-1l0 -0.03 0 -4.47 -0.99 0c-0.56,0 -1,-0.45 -1,-1l-7.48 0 -0.02 0 -0.03 0 -6.97 0c-0.01,0.55 -0.45,1 -1,1l-1 0 0 4.47 0 0.03c0,0.54 -0.44,0.98 -0.98,1l-0.03 0 -0.01 0 -0.02 0 -1.47 0 -0.49 0 -0.5 0 0 7.75 0 2.06zm27 0l2 0 0 -16.29 0 -56.68 -0.64 -0.53 -1.36 -1.17 0 58.36 0 0.02 0 16.29zm4 0l13.97 0 11.03 0 0 -9.81 0 -0.17c-0.02,0.01 -0.04,0.07 -0.05,0.17l-0.83 0 0 -0.01 -0.13 0.01 -0.97 0 -0.02 0 -0.03 0c-0.54,-0.02 -0.97,-0.46 -0.97,-1l0 -0.03 0 -4.47 -1.5 0c-0.56,0 -1,-0.45 -1.01,-1l-6.97 0 -0.02 0 -0.03 0 -7.47 0c-0.01,0.55 -0.45,1 -1,1l-0.29 0 0 4.5c0,0.55 -0.61,1 -1.36,1 -0.07,0 -0.14,-0.01 -0.2,-0.01 -0.05,0 -0.1,0.01 -0.15,0.01l-1.48 0 -0.01 0 -0.01 0 -0.02 0 -0.01 0 -0.01 0 -0.02 0 0 0 -0.01 0 -0.01 0 -0.01 -0.01 -0.02 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0 0 0 -0.01 -0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.01 0 -0.03 -0.01 0 0 -0.02 -0.01 -0.01 0 0 0 -0.02 -0.01 0 0 -0.01 0 -0.03 -0.01 -0.01 0 -0.04 -0.02 0 0 -0.09 -0.04 0 0 -0.01 -0.01 -0.01 0 0 0 0 9.94zm-17.5 -86.08l0 3.77 4.47 0 -4.47 -3.77zm0 5.77l0 5.5 6.5 0 0 -5.5 -6.5 0zm0 7.5l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5.5 6.5 0 0 -5.5 -6.5 0zm0 7.5l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm-2.01 5l0 -5 -5.99 0 0 5 5.99 0zm0 -7l0 -5 -5.99 0 0 5 5.99 0zm0 -7l0 -5.5 -5.99 0 0 5.5 5.99 0zm0 -7.5l0 -5 -5.99 0 0 5 5.99 0zm0 -7l0 -5 -5.99 0 0 5 5.99 0zm0 -7l0 -5 -5.99 0 0 5 5.99 0zm0 -7l0 -5 -5.99 0 0 5 5.99 0zm0 -7l0 -5.5 -5.99 0 0 5.5 5.99 0zm0 -7.5l0 -5 -5.99 0 0 5 5.99 0zm31.01 64l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5.5 -6.5 0 0 5.5 6.5 0zm0 -7.5l0 -5 -6.5 0 0 5 6.5 0zm2 -12l0 5 5.99 0 0 -0.62 -5.04 -4.38 -0.95 0zm0 7l0 5 5.99 0 0 -5 -5.99 0zm0 7l0 5.5 5.99 0 0 -5.5 -5.99 0zm0 7.5l0 5 5.99 0 0 -5 -5.99 0zm0 7l0 5 5.99 0 0 -5 -5.99 0zm0 7l0 5 5.99 0 0 -5 -5.99 0zm-39 -69.49l0 3.49 4.15 0 -4.15 -3.49zm47.5 75.49l0 -34.93 -0.5 -0.44 0 6.84 0 0.03 0 0.02 0 7.45 0 0.03 0 0.02 0 6.95 0 0.03 0 0.02 0 6.95 0 0.03 0 0.02 0 6.95 0 0.03 0.5 0zm-56.01 -16l0 -66.59 -3.49 -2.92 0 69.51 3.49 0zm62.01 -13.67l0 13.67 3.49 0 0 -10.58 -3.49 -3.09z" />
                                <g id="_2096424385312">
                                    <polyline class="fil10 str2" points="407.35,755.51 407.35,802.61 430.15,802.61 " />
                                    <line class="fil10 str3" x1="407.35" y1="802.61" x2="381.07" y2="802.61" />
                                    <line class="fil10 str4" x1="407.35" y1="797.65" x2="381.07" y2="797.65" />
                                    <line class="fil10 str5" x1="407.35" y1="792.2" x2="381.07" y2="792.2" />
                                    <line class="fil10 str6" x1="407.35" y1="786.74" x2="381.07" y2="786.74" />
                                    <line class="fil10 str7" x1="407.35" y1="781.78" x2="381.07" y2="781.78" />
                                    <line class="fil10 str8" x1="407.35" y1="776.33" x2="381.07" y2="776.33" />
                                    <line class="fil10 str9" x1="407.35" y1="770.88" x2="381.07" y2="770.88" />
                                    <line class="fil10 str10" x1="407.35" y1="765.92" x2="381.07" y2="765.92" />
                                    <line class="fil10 str11" x1="407.35" y1="760.47" x2="381.07" y2="760.47" />
                                    <line class="fil10 str12" x1="394.46" y1="755.51" x2="394.46" y2="802.61" />
                                    <polyline class="fil10 str13" points="387.51,797.65 394.46,802.61 400.9,797.65 " />
                                    <line class="fil10 str2" x1="407.35" y1="755.51" x2="381.07" y2="755.51" />
                                    <polyline class="fil10 str14" points="406.35,754.52 406.35,803.6 431.14,803.6 " />
                                    <line class="fil10 str15" x1="435.6" y1="808.06" x2="435.6" y2="829.38" />
                                    <line class="fil10 str16" x1="430.15" y1="802.61" x2="430.15" y2="829.38" />
                                    <line class="fil10 str17" x1="425.19" y1="802.61" x2="425.19" y2="829.38" />
                                    <line class="fil10 str18" x1="419.74" y1="802.61" x2="419.74" y2="829.38" />
                                    <line class="fil10 str19" x1="414.29" y1="802.61" x2="414.29" y2="829.38" />
                                    <line class="fil10 str20" x1="409.33" y1="802.61" x2="409.33" y2="829.38" />
                                    <polyline class="fil10 str21" points="409.33,815.99 440.56,815.99 435.6,811.03 " />
                                    <path class="fil10 str16"
                                        d="M430.15 802.61l10.85 10.84m0 2.67l-0.44 0.86 0.44 -0.26" />
                                    <line class="fil10 str22" x1="435.6" y1="820.95" x2="440.56" y2="815.99" />
                                    <polygon class="fil13 str0"
                                        points="379.41,724.34 439.34,724.34 439.34,831.22 379.41,831.22 " />
                                </g>
                                <polyline class="fil10 str23" points="1097.54,562.4 1097.54,609.49 1120.35,609.49 " />
                                <line class="fil10 str24" x1="1097.54" y1="609.49" x2="1071.27" y2="609.49" />
                                <line class="fil10 str25" x1="1097.54" y1="604.54" x2="1071.27" y2="604.54" />
                                <line class="fil10 str26" x1="1097.54" y1="599.08" x2="1071.27" y2="599.08" />
                                <line class="fil10 str27" x1="1097.54" y1="593.63" x2="1071.27" y2="593.63" />
                                <line class="fil10 str28" x1="1097.54" y1="588.67" x2="1071.27" y2="588.67" />
                                <line class="fil10 str29" x1="1097.54" y1="583.22" x2="1071.27" y2="583.22" />
                                <line class="fil10 str30" x1="1097.54" y1="577.76" x2="1071.27" y2="577.76" />
                                <line class="fil10 str31" x1="1097.54" y1="572.81" x2="1071.27" y2="572.81" />
                                <line class="fil10 str32" x1="1097.54" y1="567.35" x2="1071.27" y2="567.35" />
                                <line class="fil10 str33" x1="1084.65" y1="562.4" x2="1084.65" y2="609.49" />
                                <polyline class="fil10 str34" points="1077.71,604.54 1084.65,609.49 1091.1,604.54 " />
                                <line class="fil10 str23" x1="1097.54" y1="562.4" x2="1071.27" y2="562.4" />
                                <polyline class="fil10 str35" points="1096.55,561.4 1096.55,610.49 1121.34,610.49 " />
                                <line class="fil10 str36" x1="1125.8" y1="614.95" x2="1125.8" y2="636.27" />
                                <line class="fil10 str37" x1="1120.35" y1="609.49" x2="1120.35" y2="636.27" />
                                <line class="fil10 str38" x1="1115.39" y1="609.49" x2="1115.39" y2="636.27" />
                                <line class="fil10 str39" x1="1109.94" y1="609.49" x2="1109.94" y2="636.27" />
                                <line class="fil10 str40" x1="1104.48" y1="609.49" x2="1104.48" y2="636.27" />
                                <line class="fil10 str41" x1="1099.52" y1="609.49" x2="1099.52" y2="636.27" />
                                <polyline class="fil10 str42" points="1099.52,622.88 1130.76,622.88 1125.8,617.92 " />
                                <path class="fil10 str37"
                                    d="M1120.35 609.49l10.84 10.85m0 2.67l-0.43 0.86 0.43 -0.26" />
                                <line class="fil10 str43" x1="1125.8" y1="627.84" x2="1130.76" y2="622.88" />
                                <path class="fil14"
                                    d="M473.71 2324.87l0 -53.7 10.88 0 0 23.79 21.91 -23.79 14.57 0 -20.26 20.92 21.31 32.78 -14.02 0 -14.78 -25.21 -8.73 8.98 0 16.23 -10.88 0zm51.76 -26.52c0,-5.48 0.83,-10.08 2.47,-13.8 1.21,-2.74 2.88,-5.2 5,-7.38 2.11,-2.17 4.42,-3.78 6.93,-4.85 3.35,-1.41 7.22,-2.12 11.59,-2.12 7.93,0 14.25,2.46 19.01,7.37 4.75,4.93 7.13,11.77 7.13,20.53 0,8.69 -2.36,15.49 -7.08,20.39 -4.71,4.91 -11.02,7.36 -18.91,7.36 -7.99,0 -14.35,-2.44 -19.06,-7.33 -4.71,-4.87 -7.08,-11.6 -7.08,-20.17zm11.18 -0.36c0,6.08 1.41,10.7 4.22,13.85 2.82,3.13 6.39,4.71 10.72,4.71 4.33,0 7.88,-1.56 10.67,-4.68 2.78,-3.12 4.16,-7.8 4.16,-14.03 0,-6.17 -1.35,-10.77 -4.06,-13.79 -2.7,-3.04 -6.29,-4.55 -10.77,-4.55 -4.48,0 -8.09,1.54 -10.83,4.6 -2.74,3.07 -4.11,7.7 -4.11,13.89zm61.49 26.88l0 -44.62 -15.9 0 0 -9.08 42.6 0 0 9.08 -15.83 0 0 44.62 -10.87 0zm30.13 -26.52c0,-5.48 0.83,-10.08 2.46,-13.8 1.22,-2.74 2.89,-5.2 5.01,-7.38 2.11,-2.17 4.42,-3.78 6.93,-4.85 3.35,-1.41 7.22,-2.12 11.59,-2.12 7.93,0 14.25,2.46 19.01,7.37 4.75,4.93 7.13,11.77 7.13,20.53 0,8.69 -2.36,15.49 -7.08,20.39 -4.71,4.91 -11.02,7.36 -18.91,7.36 -7.99,0 -14.35,-2.44 -19.06,-7.33 -4.71,-4.87 -7.08,-11.6 -7.08,-20.17zm11.18 -0.36c0,6.08 1.41,10.7 4.22,13.85 2.81,3.13 6.39,4.71 10.72,4.71 4.33,0 7.88,-1.56 10.67,-4.68 2.78,-3.12 4.16,-7.8 4.16,-14.03 0,-6.17 -1.35,-10.77 -4.06,-13.79 -2.7,-3.04 -6.29,-4.55 -10.77,-4.55 -4.48,0 -8.09,1.54 -10.83,4.6 -2.74,3.07 -4.11,7.7 -4.11,13.89zm49.41 26.88l0 -53.7 10.53 0 22.09 35.99 0 -35.99 10.05 0 0 53.7 -10.86 0 -21.76 -35.3 0 35.3 -10.05 0z" />
                                <path class="fil14"
                                    d="M542.43 2827.82l7.25 0 0 8.54c0,2.76 0.1,4.6 0.31,5.5 0.2,0.91 0.81,1.69 1.82,2.36 1,0.66 2.48,1 4.43,1 1.54,0 2.92,-0.17 4.12,-0.5 1.2,-0.34 2.25,-0.83 3.12,-1.48l0 -15.42 7.25 0 0 35.8 -7.25 0 0 -14.43c-1.47,0.65 -2.91,1.14 -4.32,1.48 -1.42,0.33 -2.81,0.5 -4.18,0.5 -3.57,0 -6.55,-0.85 -8.95,-2.53 -2.4,-1.68 -3.6,-4.6 -3.6,-8.75l0 -12.07zm32.06 0l8.14 0 8.33 18.53 7.14 -18.53 7.54 0 -12.11 27.2c-1.32,2.95 -2.66,5.2 -4.02,6.74 -1.37,1.54 -3.13,2.31 -5.3,2.31 -2.13,0 -3.8,-0.15 -5,-0.42l0 -5.38c1.03,0.06 1.95,0.1 2.78,0.1 1.67,0 2.87,-0.31 3.59,-0.92 0.72,-0.62 1.42,-1.94 2.08,-3.97l-13.17 -25.66zm34.17 0l7.25 0 0 8.54c0,2.76 0.1,4.6 0.31,5.5 0.2,0.91 0.81,1.69 1.82,2.36 1,0.66 2.48,1 4.43,1 1.54,0 2.92,-0.17 4.13,-0.5 1.2,-0.34 2.24,-0.83 3.11,-1.48l0 -15.42 7.25 0 0 35.8 -7.25 0 0 -14.43c-1.46,0.65 -2.9,1.14 -4.32,1.48 -1.42,0.33 -2.81,0.5 -4.18,0.5 -3.56,0 -6.55,-0.85 -8.95,-2.53 -2.4,-1.68 -3.6,-4.6 -3.6,-8.75l0 -12.07zm35.74 0l14.31 0c2.85,0 4.95,0.11 6.35,0.35 1.39,0.24 2.64,0.73 3.74,1.47 1.1,0.75 2.01,1.74 2.75,2.98 0.73,1.25 1.1,2.65 1.1,4.19 0,1.66 -0.45,3.21 -1.35,4.6 -0.9,1.4 -2.13,2.44 -3.67,3.14 2.18,0.64 3.84,1.72 5.02,3.26 1.16,1.53 1.75,3.33 1.75,5.41 0,1.63 -0.38,3.21 -1.14,4.75 -0.75,1.55 -1.79,2.78 -3.1,3.7 -1.31,0.92 -2.93,1.49 -4.85,1.7 -1.2,0.13 -4.11,0.21 -8.72,0.25l-12.19 0 0 -35.8zm7.25 5.95l0 8.25 4.73 0c2.81,0 4.56,-0.05 5.24,-0.13 1.23,-0.14 2.21,-0.57 2.92,-1.27 0.71,-0.71 1.06,-1.64 1.06,-2.79 0,-1.11 -0.31,-2 -0.92,-2.69 -0.61,-0.69 -1.52,-1.11 -2.72,-1.25 -0.71,-0.08 -2.77,-0.12 -6.16,-0.12l-4.15 0zm0 14.2l0 9.6 6.7 0c2.6,0 4.26,-0.08 4.95,-0.22 1.08,-0.2 1.95,-0.68 2.63,-1.43 0.67,-0.77 1.02,-1.78 1.02,-3.05 0,-1.09 -0.26,-2 -0.79,-2.75 -0.51,-0.75 -1.27,-1.3 -2.26,-1.64 -0.98,-0.34 -3.12,-0.51 -6.41,-0.51l-5.84 0zm58.61 15.65l-7.81 0 -3.09 -8.15 -14.36 0 -2.97 8.15 -7.67 0 13.9 -35.8 7.66 0 14.34 35.8zm-13.25 -14.2l-4.97 -13.25 -4.84 13.25 9.81 0zm17.11 14.2l0 -35.8 11.59 0c4.39,0 7.25,0.17 8.58,0.53 2.05,0.54 3.77,1.71 5.15,3.51 1.39,1.8 2.08,4.12 2.08,6.97 0,2.2 -0.4,4.04 -1.19,5.54 -0.8,1.5 -1.81,2.68 -3.04,3.54 -1.22,0.85 -2.47,1.41 -3.74,1.69 -1.72,0.34 -4.21,0.52 -7.48,0.52l-4.7 0 0 13.5 -7.25 0zm7.25 -29.75l0 10.2 3.94 0c2.84,0 4.73,-0.2 5.69,-0.57 0.96,-0.38 1.71,-0.96 2.25,-1.77 0.54,-0.8 0.82,-1.72 0.82,-2.79 0,-1.31 -0.38,-2.38 -1.14,-3.23 -0.77,-0.85 -1.73,-1.39 -2.9,-1.6 -0.86,-0.16 -2.59,-0.24 -5.19,-0.24l-3.47 0zm53.96 29.75l-7.81 0 -3.09 -8.15 -14.36 0 -2.98 8.15 -7.66 0 13.9 -35.8 7.66 0 14.34 35.8zm-13.25 -14.2l-4.98 -13.25 -4.83 13.25 9.81 0z" />
                                <path class="fil15"
                                    d="M766.58 1274.57l-2.61 0 -1.03 -2.72 -4.78 0 -0.99 2.72 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.7 4.73l0 -11.93 2.34 0 4.91 7.99 0 -7.99 2.24 0 0 11.93 -2.42 0 -4.83 -7.84 0 7.84 -2.24 0zm22.79 0l-2.6 0 -1.03 -2.72 -4.79 0 -0.99 2.72 -2.56 0 4.64 -11.93 2.55 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm6.42 4.73l-2.8 -11.93 2.48 0 1.78 8.19 2.18 -8.19 2.87 0 2.08 8.33 1.82 -8.33 2.42 0 -2.87 11.93 -2.58 0 -2.36 -8.92 -2.37 8.92 -2.65 0zm23.93 0l-2.61 0 -1.03 -2.72 -4.78 0 -0.99 2.72 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm9.75 4.73l0 -11.93 2.41 0 0 5.28 4.87 -5.28 3.24 0 -4.5 4.64 4.74 7.29 -3.12 0 -3.29 -5.6 -1.94 1.99 0 3.61 -2.41 0zm11.92 0l0 -11.93 2.41 0 0 11.93 -2.41 0zm4.71 -11.93l4.4 0c0.99,0 1.74,0.07 2.26,0.22 0.7,0.21 1.3,0.58 1.8,1.1 0.5,0.53 0.87,1.17 1.13,1.94 0.26,0.76 0.39,1.7 0.39,2.82 0,0.98 -0.12,1.82 -0.36,2.54 -0.3,0.87 -0.72,1.57 -1.28,2.1 -0.41,0.41 -0.98,0.73 -1.69,0.96 -0.53,0.17 -1.24,0.25 -2.13,0.25l-4.52 0 0 -11.93zm2.42 2.01l0 7.9 1.79 0c0.67,0 1.15,-0.04 1.45,-0.11 0.39,-0.1 0.71,-0.26 0.97,-0.5 0.26,-0.23 0.47,-0.61 0.63,-1.15 0.16,-0.53 0.24,-1.26 0.24,-2.18 0,-0.93 -0.08,-1.63 -0.24,-2.13 -0.16,-0.49 -0.39,-0.87 -0.68,-1.15 -0.3,-0.28 -0.67,-0.47 -1.12,-0.56 -0.33,-0.08 -0.99,-0.12 -1.96,-0.12l-1.08 0zm8.98 6.05l2.35 -0.23c0.14,0.79 0.43,1.36 0.86,1.73 0.43,0.37 1.01,0.55 1.74,0.55 0.77,0 1.35,-0.16 1.75,-0.49 0.39,-0.33 0.59,-0.71 0.59,-1.15 0,-0.28 -0.09,-0.52 -0.25,-0.72 -0.17,-0.2 -0.45,-0.37 -0.87,-0.51 -0.28,-0.1 -0.92,-0.28 -1.91,-0.53 -1.29,-0.32 -2.19,-0.71 -2.71,-1.18 -0.73,-0.66 -1.1,-1.46 -1.1,-2.41 0,-0.61 0.17,-1.18 0.52,-1.71 0.34,-0.53 0.83,-0.94 1.48,-1.21 0.65,-0.28 1.43,-0.42 2.34,-0.42 1.5,0 2.62,0.33 3.37,0.99 0.76,0.67 1.15,1.55 1.19,2.66l-2.41 0.08c-0.11,-0.61 -0.33,-1.05 -0.66,-1.32 -0.34,-0.27 -0.84,-0.41 -1.52,-0.41 -0.69,0 -1.24,0.14 -1.63,0.43 -0.25,0.19 -0.38,0.44 -0.38,0.75 0,0.28 0.12,0.52 0.36,0.72 0.3,0.26 1.04,0.53 2.21,0.81 1.17,0.27 2.03,0.56 2.59,0.85 0.56,0.3 1,0.7 1.32,1.22 0.31,0.51 0.47,1.15 0.47,1.9 0,0.68 -0.19,1.32 -0.57,1.92 -0.38,0.6 -0.91,1.04 -1.61,1.33 -0.69,0.29 -1.56,0.44 -2.6,0.44 -1.5,0 -2.66,-0.35 -3.47,-1.05 -0.81,-0.69 -1.29,-1.71 -1.45,-3.04z" />
                                <path class="fil14"
                                    d="M824.8 1134.73l0 -11.64 -4.15 0 0 -2.37 11.11 0 0 2.37 -4.12 0 0 11.64 -2.84 0zm8.8 0l0 -14.01 5.95 0c1.5,0 2.59,0.13 3.26,0.38 0.69,0.25 1.23,0.7 1.63,1.34 0.41,0.65 0.62,1.38 0.62,2.21 0,1.05 -0.31,1.92 -0.92,2.6 -0.62,0.69 -1.54,1.12 -2.77,1.3 0.61,0.35 1.12,0.74 1.51,1.17 0.4,0.43 0.93,1.19 1.6,2.28l1.71 2.73 -3.38 0 -2.03 -3.06c-0.72,-1.09 -1.22,-1.77 -1.49,-2.05 -0.27,-0.28 -0.55,-0.48 -0.85,-0.58 -0.31,-0.11 -0.78,-0.16 -1.43,-0.16l-0.58 0 0 5.85 -2.83 0zm2.83 -8.08l2.09 0c1.36,0 2.21,-0.06 2.54,-0.17 0.34,-0.12 0.61,-0.32 0.8,-0.6 0.19,-0.28 0.28,-0.63 0.28,-1.05 0,-0.47 -0.12,-0.85 -0.38,-1.14 -0.25,-0.29 -0.6,-0.47 -1.06,-0.55 -0.23,-0.03 -0.92,-0.05 -2.06,-0.05l-2.21 0 0 3.56zm23.91 8.08l-3.06 0 -1.21 -3.19 -5.61 0 -1.17 3.19 -3 0 5.44 -14.01 2.99 0 5.62 14.01zm-5.19 -5.56l-1.94 -5.18 -1.89 5.18 3.83 0zm8.83 5.56l-5.01 -14.01 3.06 0 3.56 10.37 3.41 -10.37 3.01 0 -4.98 14.01 -3.05 0zm9.46 0l0 -14.01 10.36 0 0 2.37 -7.53 0 0 3.11 7 0 0 2.37 -7 0 0 3.79 7.81 0 0 2.37 -10.64 0zm13.12 0l0 -13.89 2.84 0 0 11.52 7.02 0 0 2.37 -9.86 0zm11.87 0l0 -14.01 10.36 0 0 2.37 -7.53 0 0 3.11 7 0 0 2.37 -7 0 0 3.79 7.81 0 0 2.37 -10.64 0zm13.04 0l0 -14.01 5.96 0c1.49,0 2.58,0.13 3.26,0.38 0.68,0.25 1.22,0.7 1.63,1.34 0.41,0.65 0.61,1.38 0.61,2.21 0,1.05 -0.3,1.92 -0.92,2.6 -0.62,0.69 -1.54,1.12 -2.76,1.3 0.61,0.35 1.11,0.74 1.5,1.17 0.4,0.43 0.94,1.19 1.61,2.28l1.71 2.73 -3.38 0 -2.03 -3.06c-0.73,-1.09 -1.23,-1.77 -1.5,-2.05 -0.26,-0.28 -0.55,-0.48 -0.85,-0.58 -0.3,-0.11 -0.78,-0.16 -1.43,-0.16l-0.57 0 0 5.85 -2.84 0zm2.84 -8.08l2.09 0c1.36,0 2.2,-0.06 2.54,-0.17 0.33,-0.12 0.6,-0.32 0.79,-0.6 0.19,-0.28 0.29,-0.63 0.29,-1.05 0,-0.47 -0.13,-0.85 -0.38,-1.14 -0.25,-0.29 -0.61,-0.47 -1.06,-0.55 -0.23,-0.03 -0.92,-0.05 -2.07,-0.05l-2.2 0 0 3.56zm14.59 -3.3l-1.68 0 -2.64 -2.86 2.99 0 1.33 2.86zm2.47 6.84l2.75 -0.27c0.17,0.92 0.5,1.59 1.01,2.03 0.5,0.43 1.18,0.65 2.04,0.65 0.91,0 1.59,-0.2 2.05,-0.58 0.46,-0.39 0.69,-0.84 0.69,-1.35 0,-0.33 -0.1,-0.61 -0.29,-0.85 -0.19,-0.23 -0.53,-0.43 -1.01,-0.6 -0.33,-0.12 -1.08,-0.32 -2.25,-0.61 -1.51,-0.38 -2.57,-0.85 -3.18,-1.4 -0.86,-0.77 -1.29,-1.71 -1.29,-2.82 0,-0.72 0.21,-1.39 0.61,-2.01 0.4,-0.62 0.98,-1.09 1.74,-1.42 0.76,-0.33 1.67,-0.49 2.75,-0.49 1.75,0 3.07,0.39 3.95,1.17 0.89,0.78 1.35,1.81 1.4,3.11l-2.84 0.1c-0.12,-0.72 -0.38,-1.24 -0.77,-1.56 -0.4,-0.31 -0.99,-0.47 -1.78,-0.47 -0.81,0 -1.45,0.17 -1.91,0.51 -0.3,0.21 -0.45,0.5 -0.45,0.87 0,0.33 0.14,0.62 0.42,0.85 0.36,0.3 1.22,0.62 2.59,0.94 1.38,0.32 2.39,0.66 3.04,1.01 0.66,0.35 1.18,0.82 1.55,1.42 0.37,0.61 0.56,1.35 0.56,2.23 0,0.8 -0.22,1.56 -0.67,2.26 -0.45,0.7 -1.08,1.22 -1.89,1.56 -0.82,0.34 -1.83,0.51 -3.05,0.51 -1.77,0 -3.13,-0.41 -4.08,-1.22 -0.95,-0.82 -1.51,-2.01 -1.69,-3.57zm-78.67 17.55l2.74 0.85c-0.42,1.54 -1.12,2.68 -2.1,3.43 -0.98,0.75 -2.22,1.12 -3.72,1.12 -1.86,0 -3.39,-0.63 -4.59,-1.91 -1.19,-1.27 -1.79,-3 -1.79,-5.21 0,-2.33 0.6,-4.14 1.8,-5.43 1.2,-1.29 2.79,-1.94 4.75,-1.94 1.72,0 3.11,0.51 4.18,1.52 0.63,0.6 1.11,1.46 1.43,2.59l-2.8 0.66c-0.16,-0.72 -0.51,-1.3 -1.03,-1.72 -0.53,-0.42 -1.17,-0.63 -1.92,-0.63 -1.04,0 -1.88,0.38 -2.53,1.12 -0.65,0.75 -0.97,1.95 -0.97,3.62 0,1.77 0.32,3.03 0.95,3.78 0.64,0.75 1.47,1.13 2.49,1.13 0.75,0 1.4,-0.24 1.94,-0.72 0.54,-0.48 0.94,-1.23 1.17,-2.26zm4.58 -1.75c0,-1.43 0.22,-2.63 0.64,-3.6 0.32,-0.71 0.76,-1.35 1.31,-1.92 0.55,-0.57 1.15,-0.99 1.81,-1.27 0.87,-0.36 1.88,-0.55 3.02,-0.55 2.06,0 3.71,0.64 4.95,1.92 1.24,1.29 1.86,3.07 1.86,5.36 0,2.26 -0.61,4.03 -1.84,5.31 -1.23,1.28 -2.88,1.92 -4.93,1.92 -2.09,0 -3.75,-0.63 -4.97,-1.91 -1.23,-1.27 -1.85,-3.02 -1.85,-5.26zm2.91 -0.09c0,1.58 0.37,2.79 1.11,3.61 0.73,0.82 1.66,1.23 2.79,1.23 1.13,0 2.06,-0.41 2.78,-1.22 0.73,-0.82 1.09,-2.04 1.09,-3.66 0,-1.61 -0.35,-2.81 -1.06,-3.6 -0.7,-0.79 -1.64,-1.19 -2.81,-1.19 -1.17,0 -2.11,0.41 -2.82,1.2 -0.72,0.81 -1.08,2.01 -1.08,3.63zm12.89 7.01l0 -14.01 9.62 0 0 2.37 -6.79 0 0 3.33 5.87 0 0 2.36 -5.87 0 0 5.95 -2.83 0zm11.94 0l0 -14.01 9.63 0 0 2.37 -6.79 0 0 3.33 5.87 0 0 2.36 -5.87 0 0 5.95 -2.84 0zm11.95 0l0 -14.01 10.36 0 0 2.37 -7.52 0 0 3.11 7 0 0 2.37 -7 0 0 3.79 7.8 0 0 2.37 -10.64 0zm13.04 0l0 -14.01 10.37 0 0 2.37 -7.53 0 0 3.11 7 0 0 2.37 -7 0 0 3.79 7.8 0 0 2.37 -10.64 0z" />
                                <path class="fil14"
                                    d="M485.7 1222.35l5.25 1.61c-0.81,2.96 -2.15,5.15 -4.03,6.59 -1.87,1.43 -4.24,2.15 -7.13,2.15 -3.56,0 -6.5,-1.22 -8.8,-3.66 -2.29,-2.44 -3.44,-5.77 -3.44,-10 0,-4.47 1.16,-7.94 3.46,-10.42 2.31,-2.47 5.35,-3.71 9.11,-3.71 3.29,0 5.96,0.98 8,2.92 1.23,1.15 2.14,2.8 2.76,4.96l-5.37 1.27c-0.32,-1.39 -0.98,-2.49 -1.98,-3.29 -1.02,-0.81 -2.24,-1.21 -3.68,-1.21 -1.99,0 -3.61,0.71 -4.85,2.14 -1.24,1.43 -1.86,3.74 -1.86,6.94 0,3.39 0.61,5.81 1.83,7.25 1.22,1.44 2.81,2.16 4.77,2.16 1.44,0 2.68,-0.46 3.72,-1.38 1.04,-0.92 1.79,-2.35 2.24,-4.32zm8.78 -3.36c0,-2.74 0.41,-5.04 1.23,-6.9 0.61,-1.37 1.45,-2.6 2.5,-3.69 1.06,-1.09 2.22,-1.9 3.47,-2.43 1.68,-0.7 3.61,-1.06 5.8,-1.06 3.96,0 7.12,1.23 9.5,3.69 2.38,2.46 3.56,5.88 3.56,10.26 0,4.34 -1.18,7.74 -3.53,10.19 -2.36,2.46 -5.52,3.69 -9.46,3.69 -3.99,0 -7.17,-1.22 -9.53,-3.67 -2.36,-2.43 -3.54,-5.8 -3.54,-10.08zm5.59 -0.19c0,3.05 0.71,5.35 2.11,6.93 1.41,1.57 3.2,2.36 5.36,2.36 2.17,0 3.94,-0.79 5.34,-2.34 1.38,-1.56 2.08,-3.9 2.08,-7.02 0,-3.08 -0.68,-5.38 -2.03,-6.9 -1.35,-1.51 -3.15,-2.27 -5.39,-2.27 -2.24,0 -4.05,0.77 -5.41,2.3 -1.37,1.54 -2.06,3.85 -2.06,6.94zm24.86 13.45l0 -26.63 5.43 0 0 22.09 13.47 0 0 4.54 -18.9 0zm22.56 0l0 -26.85 5.44 0 0 26.85 -5.44 0zm10.61 0l0 -26.85 5.26 0 11.05 17.99 0 -17.99 5.03 0 0 26.85 -5.43 0 -10.89 -17.65 0 17.65 -5.02 0zm33.42 -21.83l-3.23 0 -5.06 -5.47 5.74 0 2.55 5.47zm4.72 13.13l5.29 -0.53c0.32,1.77 0.96,3.06 1.93,3.9 0.97,0.83 2.27,1.24 3.92,1.24 1.73,0 3.05,-0.37 3.93,-1.11 0.88,-0.73 1.32,-1.6 1.32,-2.58 0,-0.64 -0.19,-1.18 -0.55,-1.63 -0.37,-0.44 -1.02,-0.83 -1.95,-1.15 -0.63,-0.23 -2.07,-0.62 -4.32,-1.18 -2.89,-0.73 -4.92,-1.61 -6.09,-2.67 -1.64,-1.48 -2.46,-3.29 -2.46,-5.42 0,-1.37 0.38,-2.65 1.15,-3.85 0.78,-1.19 1.89,-2.1 3.35,-2.72 1.45,-0.63 3.2,-0.94 5.27,-0.94 3.35,0 5.88,0.74 7.58,2.24 1.7,1.49 2.58,3.48 2.67,5.97l-5.44 0.19c-0.23,-1.39 -0.72,-2.38 -1.48,-2.99 -0.75,-0.6 -1.89,-0.91 -3.4,-0.91 -1.57,0 -2.79,0.32 -3.67,0.98 -0.57,0.41 -0.86,0.97 -0.86,1.67 0,0.64 0.27,1.18 0.81,1.63 0.68,0.58 2.34,1.18 4.97,1.81 2.63,0.62 4.57,1.27 5.83,1.93 1.26,0.67 2.25,1.57 2.96,2.73 0.71,1.16 1.07,2.58 1.07,4.27 0,1.54 -0.43,2.99 -1.28,4.33 -0.86,1.34 -2.06,2.34 -3.63,2.99 -1.56,0.66 -3.51,0.99 -5.84,0.99 -3.39,0 -6,-0.79 -7.82,-2.35 -1.82,-1.57 -2.9,-3.85 -3.26,-6.84z" />
                                <path class="fil14"
                                    d="M552.1 603.86l0 -53.7 17.39 0c6.58,0 10.87,0.26 12.87,0.8 3.08,0.81 5.65,2.56 7.73,5.26 2.07,2.7 3.11,6.19 3.11,10.47 0,3.3 -0.6,6.06 -1.79,8.31 -1.2,2.25 -2.71,4.01 -4.55,5.3 -1.84,1.27 -3.71,2.12 -5.61,2.54 -2.59,0.51 -6.33,0.77 -11.23,0.77l-7.05 0 0 20.25 -10.87 0zm10.87 -44.62l0 15.3 5.92 0c4.26,0 7.1,-0.29 8.53,-0.85 1.44,-0.57 2.57,-1.44 3.38,-2.65 0.81,-1.2 1.22,-2.59 1.22,-4.19 0,-1.96 -0.57,-3.58 -1.71,-4.85 -1.15,-1.28 -2.59,-2.08 -4.35,-2.4 -1.29,-0.24 -3.87,-0.36 -7.77,-0.36l-5.22 0zm39.45 44.62l0 -53.25 10.88 0 0 44.18 26.92 0 0 9.07 -37.8 0zm93.89 0l-11.71 0 -4.64 -12.22 -21.54 0 -4.46 12.22 -11.5 0 20.85 -53.7 11.49 0 21.51 53.7zm-19.87 -21.3l-7.47 -19.87 -7.25 19.87 14.72 0zm32.87 21.3l0 -22.6 -19.69 -31.1 12.72 0 12.7 21.26 12.36 -21.26 12.47 0 -19.68 31.18 0 22.52 -10.88 0zm55.41 0l0 -53.7 17.39 0c6.59,0 10.88,0.26 12.88,0.8 3.07,0.81 5.65,2.56 7.72,5.26 2.08,2.7 3.11,6.19 3.11,10.47 0,3.3 -0.6,6.06 -1.78,8.31 -1.2,2.25 -2.72,4.01 -4.55,5.3 -1.84,1.27 -3.72,2.12 -5.62,2.54 -2.58,0.51 -6.32,0.77 -11.22,0.77l-7.05 0 0 20.25 -10.88 0zm10.88 -44.62l0 15.3 5.91 0c4.26,0 7.1,-0.29 8.54,-0.85 1.44,-0.57 2.56,-1.44 3.37,-2.65 0.82,-1.2 1.23,-2.59 1.23,-4.19 0,-1.96 -0.58,-3.58 -1.71,-4.85 -1.15,-1.28 -2.59,-2.08 -4.35,-2.4 -1.29,-0.24 -3.88,-0.36 -7.78,-0.36l-5.21 0zm81.96 44.62l-11.71 0 -4.64 -12.22 -21.54 0 -4.46 12.22 -11.5 0 20.85 -53.7 11.49 0 21.51 53.7zm-19.87 -21.3l-7.47 -19.87 -7.25 19.87 14.72 0zm25.66 21.3l0 -53.7 22.84 0c5.73,0 9.91,0.49 12.51,1.45 2.61,0.96 4.69,2.68 6.25,5.14 1.56,2.47 2.35,5.29 2.35,8.46 0,4.04 -1.17,7.36 -3.54,9.99 -2.36,2.62 -5.88,4.27 -10.59,4.96 2.34,1.36 4.27,2.86 5.78,4.5 1.52,1.64 3.58,4.55 6.15,8.73l6.55 10.47 -12.96 0 -7.78 -11.72c-2.78,-4.17 -4.7,-6.79 -5.74,-7.88 -1.02,-1.07 -2.11,-1.82 -3.26,-2.22 -1.16,-0.4 -2.99,-0.6 -5.48,-0.6l-2.21 0 0 22.42 -10.87 0zm10.87 -30.97l8.03 0c5.2,0 8.44,-0.23 9.74,-0.67 1.28,-0.43 2.31,-1.2 3.04,-2.27 0.73,-1.08 1.09,-2.43 1.09,-4.04 0,-1.81 -0.48,-3.26 -1.45,-4.39 -0.96,-1.11 -2.32,-1.81 -4.07,-2.1 -0.89,-0.12 -3.52,-0.18 -7.91,-0.18l-8.47 0 0 13.65zm43.44 30.97l0 -53.7 10.88 0 0 23.79 21.91 -23.79 14.58 0 -20.27 20.91 21.32 32.79 -14.03 0 -14.77 -25.21 -8.74 8.97 0 16.24 -10.88 0z" />
                                <path class="fil14"
                                    d="M1769.64 1311.77l0 -53.7 36.9 0 0 9.08 -26.02 0 0 12.75 22.5 0 0 9.07 -22.5 0 0 22.8 -10.88 0zm46.12 0l0 -53.25 10.87 0 0 44.18 26.93 0 0 9.07 -37.8 0zm43.26 -26.52c0,-5.47 0.82,-10.08 2.46,-13.8 1.21,-2.74 2.89,-5.2 5,-7.38 2.11,-2.17 4.43,-3.78 6.94,-4.84 3.35,-1.42 7.21,-2.13 11.59,-2.13 7.92,0 14.25,2.46 19.01,7.38 4.75,4.92 7.12,11.76 7.12,20.52 0,8.69 -2.36,15.49 -7.07,20.39 -4.71,4.91 -11.03,7.36 -18.91,7.36 -7.99,0 -14.35,-2.44 -19.07,-7.32 -4.71,-4.88 -7.07,-11.61 -7.07,-20.18zm11.17 -0.36c0,6.08 1.42,10.7 4.23,13.85 2.81,3.13 6.39,4.71 10.71,4.71 4.34,0 7.89,-1.56 10.68,-4.68 2.77,-3.12 4.16,-7.8 4.16,-14.03 0,-6.16 -1.35,-10.77 -4.06,-13.79 -2.7,-3.04 -6.29,-4.55 -10.78,-4.55 -4.47,0 -8.09,1.54 -10.82,4.6 -2.74,3.08 -4.12,7.7 -4.12,13.89z" />
                                <path class="fil14"
                                    d="M879.07 1834.7l30.88 0 0 37.19 3.93 0 0 17.31 -7.56 0 0 -9.75 -28.06 0 0 9.75 -7.56 0 0 -17.31 3.81 0c1.85,-3.82 3.08,-8.26 3.68,-13.3 0.59,-5.05 0.88,-11.44 0.88,-19.16l0 -4.73zm8.63 7.56c0,13.55 -1.25,23.42 -3.75,29.63l16.93 0 0 -29.63 -13.18 0zm32.27 37.19l0 -44.75 33.12 0 0 7.56 -24.06 0 0 9.94 22.38 0 0 7.56 -22.38 0 0 12.13 24.94 0 0 7.56 -34 0zm51.75 0l0 -37.19 -13.25 0 0 -7.56 35.5 0 0 7.56 -13.19 0 0 37.19 -9.06 0zm56.74 -16.5l8.75 2.69c-1.35,4.93 -3.59,8.58 -6.71,10.98 -3.13,2.39 -7.08,3.58 -11.89,3.58 -5.94,0 -10.83,-2.03 -14.66,-6.09 -3.83,-4.06 -5.74,-9.62 -5.74,-16.67 0,-7.45 1.93,-13.24 5.77,-17.36 3.84,-4.13 8.91,-6.19 15.18,-6.19 5.47,0 9.92,1.62 13.34,4.86 2.04,1.92 3.56,4.67 4.58,8.26l-8.94 2.13c-0.53,-2.31 -1.63,-4.15 -3.31,-5.49 -1.68,-1.34 -3.73,-2.01 -6.12,-2.01 -3.33,0 -6.02,1.19 -8.09,3.57 -2.07,2.38 -3.1,6.23 -3.1,11.57 0,5.64 1.02,9.67 3.05,12.07 2.04,2.4 4.69,3.6 7.95,3.6 2.41,0 4.48,-0.76 6.21,-2.29 1.73,-1.53 2.98,-3.93 3.73,-7.21zm16.63 -28.25l9.07 0 0 19.06c2.01,-0.2 3.37,-0.71 4.08,-1.56 0.71,-0.83 1.81,-3.15 3.29,-6.97 1.87,-4.84 3.75,-7.86 5.64,-9.04 1.87,-1.18 4.88,-1.77 9.05,-1.77 0.21,0 0.64,-0.01 1.31,-0.03l0 6.69 -1.28 -0.03c-1.85,0 -3.21,0.23 -4.06,0.68 -0.86,0.46 -1.54,1.16 -2.08,2.1 -0.53,0.93 -1.31,2.86 -2.34,5.78 -0.55,1.55 -1.14,2.84 -1.79,3.88 -0.64,1.05 -1.77,2.03 -3.4,2.94 2.01,0.56 3.67,1.72 4.98,3.45 1.32,1.73 2.75,4.17 4.32,7.32l6.09 12.25 -10.63 0 -5.36 -11.52c-0.08,-0.16 -0.26,-0.48 -0.52,-0.95 -0.11,-0.15 -0.48,-0.86 -1.13,-2.1 -1.14,-2.21 -2.08,-3.58 -2.81,-4.14 -0.74,-0.55 -1.85,-0.83 -3.36,-0.85l0 19.56 -9.07 0 0 -44.75zm38.15 0l8.44 0 0 29.79 18.12 -29.79 9 0 0 44.75 -8.44 0 0 -29.31 -18.12 29.31 -9 0 0 -44.75zm44.93 0l8.44 0 0 29.79 18.12 -29.79 9 0 0 44.75 -8.44 0 0 -29.31 -18.12 29.31 -9 0 0 -44.75zm23.12 -12.93l4.19 0c-0.24,2.76 -1.22,4.93 -2.92,6.51 -1.7,1.57 -3.89,2.36 -6.59,2.36 -2.71,0 -4.91,-0.79 -6.6,-2.36 -1.7,-1.58 -2.68,-3.75 -2.92,-6.51l4.19 0c0.14,1.43 0.64,2.53 1.52,3.27 0.87,0.74 2.14,1.1 3.81,1.1 1.66,0 2.93,-0.36 3.8,-1.1 0.88,-0.74 1.38,-1.84 1.52,-3.27zm-196.55 127.51l0 -44.75 13.58 0 8.02 30.52 7.92 -30.52 13.61 0 0 44.75 -8.38 0 -0.03 -35.23 -8.82 35.23 -8.71 0 -8.78 -35.23 -0.03 35.23 -8.38 0zm52.32 -44.75l8.43 0 0 29.79 18.13 -29.79 9 0 0 44.75 -8.44 0 0 -29.32 -18.12 29.32 -9 0 0 -44.75zm44.8 44.75l0 -44.75 14.49 0c5.49,0 9.06,0.22 10.73,0.66 2.56,0.68 4.71,2.14 6.43,4.39 1.73,2.25 2.6,5.16 2.6,8.72 0,2.75 -0.5,5.05 -1.49,6.93 -1,1.87 -2.26,3.34 -3.79,4.41 -1.53,1.06 -3.1,1.77 -4.68,2.12 -2.16,0.42 -5.27,0.64 -9.35,0.64l-5.88 0 0 16.88 -9.06 0zm9.06 -37.19l0 12.75 4.93 0c3.55,0 5.92,-0.24 7.11,-0.71 1.2,-0.47 2.14,-1.2 2.82,-2.21 0.67,-1 1.02,-2.15 1.02,-3.49 0,-1.63 -0.48,-2.98 -1.43,-4.04 -0.96,-1.06 -2.16,-1.73 -3.63,-2 -1.07,-0.2 -3.23,-0.3 -6.47,-0.3l-4.35 0z" />
                                <path class="fil15"
                                    d="M795.54 1406.47l0 -11.83 2.42 0 0 9.81 5.98 0 0 2.02 -8.4 0zm59.11 -1.51c0.59,0.42 1.23,0.76 1.93,1.01l-0.89 1.72c-0.36,-0.11 -0.72,-0.26 -1.06,-0.45 -0.08,-0.04 -0.61,-0.39 -1.6,-1.07 -0.78,0.35 -1.65,0.52 -2.6,0.52 -1.83,0 -3.27,-0.54 -4.31,-1.62 -1.04,-1.09 -1.56,-2.61 -1.56,-4.57 0,-1.95 0.52,-3.47 1.56,-4.55 1.05,-1.09 2.46,-1.63 4.24,-1.63 1.77,0 3.18,0.54 4.21,1.63 1.04,1.08 1.56,2.6 1.56,4.55 0,1.03 -0.15,1.94 -0.44,2.72 -0.21,0.6 -0.56,1.18 -1.04,1.74zm-1.93 -1.36c0.31,-0.36 0.54,-0.8 0.69,-1.32 0.15,-0.51 0.23,-1.11 0.23,-1.78 0,-1.38 -0.3,-2.41 -0.91,-3.09 -0.61,-0.68 -1.4,-1.02 -2.38,-1.02 -0.99,0 -1.78,0.34 -2.39,1.03 -0.61,0.68 -0.92,1.71 -0.92,3.09 0,1.4 0.31,2.44 0.92,3.14 0.61,0.69 1.38,1.04 2.32,1.04 0.35,0 0.67,-0.06 0.98,-0.18 -0.48,-0.31 -0.98,-0.56 -1.48,-0.74l0.67 -1.4c0.79,0.28 1.55,0.68 2.27,1.23zm-47.63 2.87l0 -11.93 8.83 0 0 2.01 -6.42 0 0 2.65 5.97 0 0 2.02 -5.97 0 0 3.23 6.65 0 0 2.02 -9.06 0zm16.1 -4.38l0 -2.02 5.18 0 0 4.76c-0.5,0.49 -1.24,0.92 -2.19,1.3 -0.96,0.37 -1.93,0.56 -2.91,0.56 -1.25,0 -2.33,-0.26 -3.26,-0.79 -0.93,-0.52 -1.62,-1.28 -2.09,-2.25 -0.47,-0.98 -0.7,-2.04 -0.7,-3.19 0,-1.24 0.26,-2.35 0.78,-3.32 0.52,-0.96 1.28,-1.71 2.29,-2.23 0.76,-0.39 1.71,-0.59 2.85,-0.59 1.48,0 2.64,0.31 3.47,0.93 0.83,0.63 1.37,1.49 1.61,2.59l-2.4 0.45c-0.17,-0.59 -0.49,-1.05 -0.95,-1.39 -0.46,-0.34 -1.04,-0.51 -1.73,-0.51 -1.05,0 -1.89,0.33 -2.51,1 -0.62,0.67 -0.93,1.66 -0.93,2.98 0,1.41 0.32,2.48 0.94,3.19 0.63,0.71 1.46,1.06 2.48,1.06 0.5,0 1,-0.1 1.51,-0.3 0.51,-0.19 0.94,-0.44 1.3,-0.72l0 -1.51 -2.74 0zm6.34 -1.51c0,-1.22 0.19,-2.24 0.55,-3.07 0.27,-0.61 0.64,-1.16 1.11,-1.64 0.47,-0.48 0.98,-0.84 1.54,-1.08 0.75,-0.31 1.6,-0.47 2.58,-0.47 1.76,0 3.16,0.55 4.22,1.64 1.06,1.09 1.59,2.61 1.59,4.56 0,1.93 -0.53,3.44 -1.58,4.53 -1.04,1.09 -2.45,1.64 -4.2,1.64 -1.77,0 -3.19,-0.54 -4.24,-1.63 -1.04,-1.08 -1.57,-2.58 -1.57,-4.48zm2.48 -0.08c0,1.35 0.32,2.37 0.94,3.07 0.63,0.7 1.42,1.05 2.39,1.05 0.96,0 1.75,-0.35 2.37,-1.04 0.61,-0.69 0.92,-1.73 0.92,-3.12 0,-1.37 -0.3,-2.39 -0.9,-3.06 -0.6,-0.68 -1.4,-1.01 -2.39,-1.01 -1,0 -1.8,0.34 -2.41,1.02 -0.61,0.68 -0.92,1.71 -0.92,3.09zm38.2 5.97l-2.61 0 -1.03 -2.72 -4.78 0 -0.99 2.72 -2.56 0 4.63 -11.93 2.56 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm5.2 4.73l0 -11.83 2.42 0 0 9.81 5.98 0 0 2.02 -8.4 0zm20.3 0l-2.6 0 -1.03 -2.72 -4.79 0 -0.99 2.72 -2.56 0 4.64 -11.93 2.55 0 4.78 11.93zm-4.42 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0z" />
                                <polygon class="fil9 str0"
                                    points="1131.29,924.63 1063.95,924.63 1063.95,857.28 1131.29,857.28 " />
                                <g id="_2096424370368">
                                    <polygon class="lift fil9 str0"
                                        points="528.87,695.28 461.53,695.28 461.53,762.62 528.87,762.62 " />
                                    <g>
                                        <polygon class="fil0" points="477.68,716.53 484.95,703.43 492.22,716.53 " />
                                        <polygon class="fil0" points="498.17,703.43 505.44,716.53 512.71,703.43 " />
                                        <path class="fil0"
                                            d="M484.57 720.22c1.73,0 3.13,1.4 3.13,3.13 0,1.72 -1.4,3.12 -3.13,3.12 -1.73,0 -3.13,-1.4 -3.13,-3.12 0,-1.73 1.4,-3.13 3.13,-3.13z" />
                                        <path class="fil0"
                                            d="M480.51 727.35l8.17 0c1.48,0 2.7,1.22 2.7,2.71l0 1.38 0 4.83 0 3.51c0,0.67 -0.54,1.21 -1.21,1.21l0 0c-0.66,0 -1.2,-0.54 -1.2,-1.21l0 -0.82 -0.02 0 0 -7.12c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.3 0 1.83 0 0.09 0 3.42 0 10.43c0,0.86 -0.7,1.56 -1.56,1.56l0 0c-0.86,0 -1.57,-0.7 -1.57,-1.56l0 -6.96 0 -5.4c0,-0.24 -0.19,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.43,0.2 -0.43,0.44l0 5.38 0 7.06c0,0.82 -0.67,1.48 -1.48,1.48l0 0c-0.81,0 -1.48,-0.66 -1.48,-1.48l0 -10.51 0 -3.42 0 -0.09 0 -1.91 0 -5.22c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 7.12 -0.01 0 0 0.82c0,0.67 -0.55,1.21 -1.21,1.21l0 0c-0.66,0 -1.21,-0.54 -1.21,-1.21l0 -3.51 0 -4.83 0 -1.38c0,-1.49 1.22,-2.71 2.71,-2.71z" />
                                        <path class="fil0"
                                            d="M505.46 720.22c1.73,0 3.13,1.4 3.13,3.13 0,1.72 -1.4,3.12 -3.13,3.12 -1.72,0 -3.12,-1.4 -3.12,-3.12 0,-1.73 1.4,-3.13 3.12,-3.13z" />
                                        <path class="fil0"
                                            d="M501.4 727.35l8.17 0c1.49,0 2.7,1.22 2.7,2.71l0 1.38 0 4.83 0 3.51c0,0.67 -0.54,1.21 -1.2,1.21l0 0c-0.67,0 -1.21,-0.54 -1.21,-1.21l0 -0.82 -0.02 0 0 -7.12c0,-0.24 -0.19,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.43,0.2 -0.43,0.44l0 5.3 0 1.83 0 0.09 0 3.42 0 10.43c0,0.86 -0.71,1.56 -1.57,1.56l0 0c-0.86,0 -1.56,-0.7 -1.56,-1.56l0 -6.96 0 -5.4c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.38 0 7.06c0,0.82 -0.67,1.48 -1.48,1.48l0 0c-0.81,0 -1.48,-0.66 -1.48,-1.48l0 -10.51 0 -3.42 0 -0.09 0 -1.91 0 -5.22c0,-0.24 -0.19,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.43,0.2 -0.43,0.44l0 7.12 -0.02 0 0 0.82c0,0.67 -0.54,1.21 -1.21,1.21l0 0c-0.66,0 -1.2,-0.54 -1.2,-1.21l0 -3.51 0 -4.83 0 -1.38c0,-1.49 1.21,-2.71 2.7,-2.71z" />
                                    </g>
                                </g>
                                <g id="_2096424368096">
                                    <path class="fil0"
                                        d="M1093.94 2691.23c2.38,0 4.32,1.93 4.32,4.31 0,2.38 -1.94,4.31 -4.32,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.38 1.93,-4.31 4.31,-4.31z" />
                                    <path class="fil0"
                                        d="M1088.33 2701.07l11.27 0c2.05,0 3.73,1.67 3.73,3.73l0 1.91 0 6.66 0 4.84c0,0.92 -0.75,1.67 -1.66,1.67l0 0c-0.92,0 -1.67,-0.75 -1.67,-1.67l0 -1.14 -0.02 0 0 -9.81c0,-0.34 -0.27,-0.61 -0.61,-0.61l0 0c-0.33,0 -0.6,0.27 -0.6,0.61l0 7.31 0 2.52 0 0.12 0 4.72 0 14.38c0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16l0 -9.6 0 -7.44c0,-0.34 -0.27,-0.61 -0.6,-0.61l0 0c-0.34,0 -0.61,0.27 -0.61,0.61l0 7.41 0 9.75c0,1.12 -0.92,2.04 -2.04,2.04l0 0c-1.12,0 -2.03,-0.92 -2.03,-2.04l0 -14.49 0 -4.73 0 -0.12 0 -2.64 0 -7.19c0,-0.34 -0.28,-0.61 -0.61,-0.61l0 0c-0.33,0 -0.6,0.27 -0.6,0.61l0 9.81 -0.03 0 0 1.14c0,0.92 -0.75,1.67 -1.66,1.67l0 0c-0.92,0 -1.66,-0.75 -1.66,-1.67l0 -4.84 0 -6.66 0 -1.91c0,-2.06 1.67,-3.73 3.72,-3.73z" />
                                </g>
                                <g id="_2096424367392">
                                    <path class="fil0"
                                        d="M1161.4 2691.23c2.38,0 4.31,1.93 4.31,4.31 0,2.38 -1.93,4.31 -4.31,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.38 1.93,-4.31 4.31,-4.31z" />
                                    <path class="fil0"
                                        d="M1161.31 2701.07c1.98,0 3.95,0 5.93,0 1.25,0 2.3,0.85 2.6,2l0 0 0.85 3.32 0.16 0.62 1.13 4.41 0.16 0.62 1.05 4.07c0.22,0.89 -0.31,1.8 -1.2,2.02l0 0c-0.89,0.23 -1.8,-0.31 -2.03,-1.19 -0.35,-1.36 -0.71,-2.69 -1.06,-4.07l-1.45 -5.65 -0.02 -0.04c-0.03,-0.3 -0.29,-0.53 -0.6,-0.53l0 0c-0.4,0 -0.6,0.31 -0.6,0.65 1.39,5.39 2.79,10.77 4.18,16.15 -1.39,0 -2.79,0 -4.18,0l0 12.86c0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16 0,-4.27 0,-8.55 0,-12.82l0 -0.04 0 0c-0.02,-0.32 -0.28,-0.57 -0.6,-0.57 -0.32,0 -0.59,0.25 -0.61,0.57l0 0 0 0.04c0,4.27 0,8.55 0,12.82 0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.18,0 -2.15,-0.97 -2.15,-2.16l0 -12.86c-1.4,0 -2.79,0 -4.19,0 1.38,-5.3 2.75,-10.61 4.13,-15.91 0.02,-0.1 0.06,-0.21 0.05,-0.31 -0.01,-0.12 -0.04,-0.23 -0.1,-0.32 -0.19,-0.3 -0.61,-0.34 -0.87,-0.13 -0.13,0.1 -0.21,0.24 -0.23,0.4l-0.01 0.04 -1.45 5.65c-0.36,1.38 -0.72,2.71 -1.07,4.07 -0.23,0.88 -1.14,1.42 -2.02,1.19l0 0c-0.89,-0.22 -1.43,-1.13 -1.2,-2.02l1.04 -4.07 0.16 -0.62 1.13 -4.41 0.16 -0.62 0.86 -3.32 0 0c0.3,-1.15 1.34,-2 2.59,-2 1.98,0 3.96,0 5.94,0z" />
                                </g>
                                <polygon class="prayer_room fil16 str0"
                                    points="1060.3,2646.82 1127.64,2646.82 1127.64,2579.47 1060.3,2579.47 " />
                                <polygon class="prayer_room fil17 str0"
                                    points="1194.98,2646.82 1127.64,2646.82 1127.64,2579.47 1194.98,2579.47 " />
                                <g id="_2096424362912">
                                    <path class="fil0"
                                        d="M1168.7 2601.79c-1.2,2.88 -4.04,4.9 -7.35,4.9 -4.39,0 -7.95,-3.56 -7.95,-7.96 0,-3.96 2.9,-7.25 6.7,-7.85 -1.97,1.23 -3.27,3.42 -3.27,5.91 0,3.86 3.13,6.99 6.99,6.99 1.9,0 3.62,-0.76 4.88,-1.99z" />
                                    <polygon class="fil0"
                                        points="1160.63,2604.95 1161.99,2604.95 1162.85,2615.67 1159.76,2615.67 " />
                                    <polygon class="fil0"
                                        points="1138.77,2629.99 1183.84,2629.99 1183.84,2635.41 1138.77,2635.41 " />
                                    <path class="fil0"
                                        d="M1180.42 2633.58c0.04,-0.53 0.06,-1.06 0.06,-1.61 0,-10.59 -8.58,-19.17 -19.17,-19.17 -10.6,0 -19.18,8.58 -19.18,19.17 0,0.55 0.02,1.08 0.07,1.61l38.22 0z" />
                                    <polygon class="fil0"
                                        points="1163.76,2592.65 1164.68,2595.4 1167.68,2595.39 1165.25,2597.08 1166.18,2599.83 1163.76,2598.13 1161.34,2599.83 1162.27,2597.08 1159.84,2595.39 1162.84,2595.4 " />
                                </g>
                                <g id="_2096424361664">
                                    <path class="fil0"
                                        d="M1101.36 2601.79c-1.2,2.88 -4.03,4.9 -7.35,4.9 -4.39,0 -7.95,-3.56 -7.95,-7.96 0,-3.96 2.9,-7.25 6.7,-7.85 -1.97,1.23 -3.27,3.42 -3.27,5.91 0,3.86 3.13,6.99 6.99,6.99 1.9,0 3.62,-0.76 4.88,-1.99z" />
                                    <polygon class="fil0"
                                        points="1093.29,2604.95 1094.65,2604.95 1095.51,2615.67 1092.42,2615.67 " />
                                    <polygon class="fil0"
                                        points="1071.43,2629.99 1116.5,2629.99 1116.5,2635.41 1071.43,2635.41 " />
                                    <path class="fil0"
                                        d="M1113.08 2633.58c0.04,-0.53 0.07,-1.06 0.07,-1.61 0,-10.59 -8.59,-19.17 -19.18,-19.17 -10.59,0 -19.18,8.58 -19.18,19.17 0,0.55 0.02,1.08 0.07,1.61l38.22 0z" />
                                    <polygon class="fil0"
                                        points="1096.42,2592.65 1097.34,2595.4 1100.34,2595.39 1097.91,2597.08 1098.84,2599.83 1096.42,2598.13 1094,2599.83 1094.93,2597.08 1092.51,2595.39 1095.5,2595.4 " />
                                </g>
                                <g id="_2096424359904">
                                    <path class="fil0"
                                        d="M1097.59 867.33c2.38,0 4.32,1.93 4.32,4.32 0,2.38 -1.94,4.31 -4.32,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.39 1.93,-4.32 4.31,-4.32z" />
                                    <path class="fil0"
                                        d="M1091.98 877.17l11.27 0c2.05,0 3.73,1.68 3.73,3.73l0 1.91 0 6.66 0 4.85c0,0.91 -0.75,1.66 -1.66,1.66l0 0c-0.92,0 -1.67,-0.75 -1.67,-1.66l0 -1.14 -0.02 0 0 -9.82c0,-0.33 -0.27,-0.6 -0.6,-0.6l0 0c-0.34,0 -0.61,0.27 -0.61,0.6l0 7.32 0 2.52 0 0.12 0 4.72 0 14.37c0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.18,0 -2.15,-0.97 -2.15,-2.16l0 -9.59 0 -7.45c0,-0.33 -0.28,-0.6 -0.61,-0.6l0 0c-0.33,0 -0.61,0.27 -0.61,0.6l0 7.42 0 9.75c0,1.12 -0.91,2.03 -2.03,2.03l0 0c-1.12,0 -2.04,-0.91 -2.04,-2.03l0 -14.5 0 -4.72 0 -0.12 0 -2.65 0 -7.19c0,-0.33 -0.27,-0.6 -0.61,-0.6l0 0c-0.33,0 -0.6,0.27 -0.6,0.6l0 9.82 -0.02 0 0 1.14c0,0.91 -0.75,1.66 -1.67,1.66l0 0c-0.91,0 -1.66,-0.75 -1.66,-1.66l0 -4.85 0 -6.66 0 -1.91c0,-2.05 1.68,-3.73 3.72,-3.73z" />
                                </g>
                                <g id="_2096424358464">
                                    <path class="fil0"
                                        d="M1097.71 799.99c2.38,0 4.32,1.93 4.32,4.31 0,2.38 -1.94,4.31 -4.32,4.31 -2.38,0 -4.31,-1.93 -4.31,-4.31 0,-2.38 1.93,-4.31 4.31,-4.31z" />
                                    <path class="fil0"
                                        d="M1097.62 809.83c1.98,0 3.95,0 5.93,0 1.25,0 2.3,0.85 2.6,2l0 0 0.85 3.32 0.16 0.62 1.13 4.41 0.16 0.62 1.05 4.07c0.23,0.89 -0.31,1.8 -1.2,2.02l0 0c-0.89,0.23 -1.8,-0.31 -2.03,-1.19 -0.35,-1.36 -0.71,-2.69 -1.06,-4.07l-1.45 -5.65 -0.01 -0.04c-0.04,-0.3 -0.3,-0.53 -0.61,-0.53l0 0c-0.4,0 -0.6,0.31 -0.6,0.65 1.4,5.38 2.79,10.77 4.18,16.15 -1.39,0 -2.78,0 -4.18,0l0 12.86c0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.18,0 -2.16,-0.97 -2.16,-2.16 0,-4.28 0,-8.55 0,-12.82l0 -0.04 0 0c-0.02,-0.32 -0.28,-0.57 -0.6,-0.57 -0.32,0 -0.59,0.25 -0.61,0.57l0 0 0 0.04c0,4.27 0,8.54 0,12.82 0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.18,0 -2.15,-0.97 -2.15,-2.16l0 -12.86c-1.4,0 -2.79,0 -4.19,0 1.38,-5.3 2.75,-10.61 4.13,-15.91 0.02,-0.1 0.06,-0.21 0.05,-0.31 -0.01,-0.12 -0.04,-0.23 -0.1,-0.32 -0.19,-0.3 -0.61,-0.34 -0.87,-0.13 -0.12,0.1 -0.21,0.24 -0.23,0.4l-0.01 0.04 -1.45 5.65c-0.35,1.38 -0.72,2.71 -1.07,4.07 -0.23,0.88 -1.14,1.42 -2.02,1.19l0 0c-0.89,-0.22 -1.43,-1.13 -1.2,-2.02l1.04 -4.07 0.16 -0.62 1.14 -4.41 0.15 -0.62 0.86 -3.32 0 0c0.3,-1.15 1.35,-2 2.59,-2 1.98,0 3.96,0 5.94,0z" />
                                </g>
                                <path class="fil0"
                                    d="M1083.1 776.04l0 -18.05 0 -0.06 0 -0.02 0 -0.01c0,-0.21 0.02,-0.42 0.07,-0.63 0.08,-0.41 0.24,-0.82 0.49,-1.2l8.68 -13.06c1.04,-1.56 3.17,-1.99 4.73,-0.95l0 0c0.83,0.55 1.34,1.4 1.48,2.31l0 0 1.41 6.63 4.85 2.98c0.78,0.48 1.02,1.51 0.54,2.28l0 0c-0.48,0.78 -1.5,1.02 -2.28,0.54l-5.32 -3.27 0 0c-0.44,-0.22 -0.77,-0.63 -0.88,-1.14l-0.62 -2.92 -6.81 10.25 0 16.32c0,1.74 -1.43,3.17 -3.17,3.17l0 0c-1.75,0 -3.17,-1.43 -3.17,-3.17zm20.14 -13.55l0.09 0 0 -2.61c0,-0.64 0.52,-1.17 1.17,-1.17l0 0c0.64,0 1.17,0.53 1.17,1.17l0 3.85 0 1.2 0 0 0 1.2 0 0.02c0,0.22 -0.06,0.42 -0.16,0.59 -0.21,0.38 -0.62,0.64 -1.08,0.64l-1.19 0 -0.01 0 -1.16 0 -4.26 0c-1.34,0 -2.44,-1.1 -2.44,-2.45l0 0c0,-0.14 0.01,-0.28 0.04,-0.42 0.01,-0.17 0.05,-0.34 0.14,-0.5l0 0c0.07,-0.18 0.17,-0.34 0.28,-0.49l1.68 -3.03 -1.42 -1.01 -0.01 -0.01 -0.78 -0.55c-0.52,-0.37 -0.65,-1.11 -0.28,-1.63l0 0c0.38,-0.53 1.11,-0.66 1.64,-0.28l0.78 0.56 1.5 1.06 0 0 0.78 0.56c0.32,0.22 0.49,0.57 0.5,0.93l0 0 0 0.01 0 0.03 0 2.33 1.85 0 1.16 0 0 0 0 0 0 0 0 0 0 0 0.01 0 0 0 0 0 0 0zm-7.43 6.02l15.96 0c0.2,0 0.37,0.17 0.37,0.37l0 2.61c0,0.21 -0.17,0.38 -0.37,0.38l-15.96 0c-0.2,0 -0.37,-0.17 -0.37,-0.38l0 -2.61c0,-0.2 0.17,-0.37 0.37,-0.37zm13.47 -6.69c1.49,0 2.7,1.21 2.7,2.7 0,1.49 -1.21,2.7 -2.7,2.7 -1.49,0 -2.69,-1.21 -2.69,-2.7 0,-1.49 1.2,-2.7 2.69,-2.7zm-8.88 -28.51c2.37,0 4.29,1.93 4.29,4.3 0,2.37 -1.92,4.29 -4.29,4.29 -2.38,0 -4.3,-1.92 -4.3,-4.29 0,-2.37 1.92,-4.3 4.3,-4.3z" />
                                <g id="_2096424354624">
                                    <path class="fil18"
                                        d="M874.6 2511.87l-12.29 12.29 -4.93 0c-0.45,0 -0.88,0.09 -1.27,0.26 -0.4,0.17 -0.77,0.42 -1.08,0.72 -0.31,0.31 -0.56,0.68 -0.73,1.09 -0.16,0.39 -0.25,0.82 -0.25,1.27 0,0.45 0.09,0.88 0.25,1.27 0.17,0.41 0.42,0.78 0.73,1.09 0.31,0.31 0.68,0.56 1.08,0.73 0.39,0.16 0.82,0.25 1.27,0.25l6.32 0c0.23,0 0.46,-0.02 0.67,-0.07 0.22,-0.04 0.43,-0.11 0.64,-0.2 0.21,-0.09 0.41,-0.2 0.59,-0.33 0.19,-0.13 0.36,-0.28 0.52,-0.44l0.48 -0.51 0.01 0.01 11.71 -11.71 4.93 0c0.91,0 1.75,-0.37 2.35,-0.98 0.61,-0.6 0.98,-1.44 0.98,-2.35 0,-0.92 -0.37,-1.76 -0.98,-2.36 -0.6,-0.61 -1.44,-0.98 -2.35,-0.98l-6.32 0c-0.22,0 -0.44,0.02 -0.64,0.06 -0.22,0.04 -0.42,0.11 -0.62,0.18 -0.2,0.09 -0.39,0.19 -0.57,0.31 -0.16,0.1 -0.31,0.22 -0.45,0.36l-0.05 0.04z" />
                                    <path class="fil18"
                                        d="M864.62 2524.3l0 -11.65c0,-1.29 1.06,-2.35 2.35,-2.35l0.01 0c1.29,0 2.35,1.06 2.35,2.35l0 11.65c0,1.3 -1.06,2.36 -2.35,2.36l-0.01 0c-1.29,0 -2.35,-1.06 -2.35,-2.36z" />
                                    <path class="fil18"
                                        d="M866.97 2504.56c1.3,0 2.36,1.06 2.36,2.36 0,1.3 -1.06,2.35 -2.36,2.35 -1.3,0 -2.35,-1.05 -2.35,-2.35 0,-1.3 1.05,-2.36 2.35,-2.36z" />
                                    <g>
                                        <polygon class="fil18" points="855.66,2489.72 862.38,2477.62 869.1,2489.72 " />
                                        <polygon class="fil18" points="871.53,2477.62 878.25,2489.72 884.97,2477.62 " />
                                    </g>
                                    <path class="fil18"
                                        d="M889.35 2496.46l-38.07 0c-0.34,0 -0.67,0.07 -0.97,0.2 -0.31,0.13 -0.59,0.32 -0.82,0.55 -0.24,0.24 -0.43,0.52 -0.56,0.83 -0.12,0.3 -0.19,0.62 -0.19,0.97l0 38.06c0,0.35 0.07,0.68 0.19,0.97 0.13,0.31 0.32,0.59 0.56,0.83 0.23,0.24 0.51,0.43 0.82,0.55 0.3,0.13 0.63,0.2 0.97,0.2l38.07 0c0.34,0 0.67,-0.07 0.97,-0.2 0.31,-0.12 0.59,-0.31 0.83,-0.55 0.23,-0.24 0.42,-0.52 0.55,-0.83 0.12,-0.29 0.19,-0.62 0.19,-0.97l0 -38.06c0,-0.35 -0.07,-0.67 -0.19,-0.97 -0.13,-0.31 -0.32,-0.59 -0.55,-0.83 -0.24,-0.23 -0.52,-0.42 -0.83,-0.55 -0.3,-0.13 -0.63,-0.2 -0.97,-0.2zm-37.25 2.7l37.14 0 0 37.76 -37.85 0 0 -37.76 0.71 0z" />
                                </g>
                                <g id="_2096424352320">
                                    <path class="fil19"
                                        d="M763.22 1008.17l-16.02 16.03 -6.42 0c-0.59,0 -1.15,0.11 -1.66,0.32 -0.53,0.23 -1.01,0.55 -1.41,0.95 -0.41,0.41 -0.73,0.89 -0.95,1.42 -0.22,0.51 -0.33,1.07 -0.33,1.66 0,0.58 0.11,1.14 0.33,1.65 0.22,0.54 0.54,1.02 0.95,1.42 0.4,0.4 0.88,0.73 1.41,0.95 0.51,0.21 1.07,0.33 1.66,0.33l8.23 0c0.31,0 0.6,-0.03 0.88,-0.09 0.28,-0.06 0.56,-0.15 0.83,-0.26 0.28,-0.12 0.54,-0.27 0.77,-0.43 0.24,-0.17 0.47,-0.36 0.67,-0.58l0.63 -0.66 0.01 0.02 15.27 -15.27 6.42 0c1.2,0 2.29,-0.49 3.07,-1.28 0.79,-0.79 1.28,-1.87 1.28,-3.07 0,-1.2 -0.49,-2.28 -1.28,-3.07 -0.78,-0.79 -1.87,-1.28 -3.07,-1.28l-8.23 0c-0.29,0 -0.57,0.03 -0.84,0.08 -0.28,0.06 -0.55,0.14 -0.8,0.24 -0.26,0.11 -0.51,0.24 -0.75,0.39 -0.21,0.14 -0.41,0.3 -0.59,0.47l-0.06 0.06z" />
                                    <path class="fil19"
                                        d="M750.21 1024.38l0 -15.19c0,-1.69 1.38,-3.07 3.07,-3.07l0 0c1.69,0 3.07,1.38 3.07,3.07l0 15.19c0,1.68 -1.38,3.06 -3.07,3.06l0 0c-1.69,0 -3.07,-1.38 -3.07,-3.06z" />
                                    <path class="fil19"
                                        d="M753.28 998.64c1.69,0 3.07,1.38 3.07,3.07 0,1.7 -1.38,3.07 -3.07,3.07 -1.7,0 -3.07,-1.37 -3.07,-3.07 0,-1.69 1.37,-3.07 3.07,-3.07z" />
                                    <g>
                                        <polygon class="fil19" points="738.53,979.3 747.29,963.51 756.05,979.3 " />
                                        <polygon class="fil19" points="759.22,963.51 767.98,979.3 776.74,963.51 " />
                                    </g>
                                    <path class="fil19"
                                        d="M782.45 988.09l-49.63 0c-0.45,0 -0.87,0.09 -1.26,0.25 -0.41,0.16 -0.77,0.41 -1.08,0.72 -0.31,0.31 -0.55,0.67 -0.72,1.08 -0.16,0.39 -0.25,0.81 -0.25,1.26l0 49.63c0,0.44 0.09,0.87 0.25,1.26 0.17,0.4 0.41,0.77 0.72,1.08 0.31,0.31 0.67,0.55 1.08,0.72 0.39,0.16 0.81,0.25 1.26,0.25l49.63 0c0.45,0 0.87,-0.09 1.26,-0.25 0.41,-0.17 0.77,-0.41 1.08,-0.72 0.31,-0.31 0.55,-0.68 0.72,-1.08 0.16,-0.39 0.25,-0.82 0.25,-1.26l0 -49.63c0,-0.45 -0.09,-0.87 -0.25,-1.26 -0.17,-0.41 -0.41,-0.77 -0.72,-1.08 -0.31,-0.31 -0.67,-0.56 -1.08,-0.72 -0.39,-0.16 -0.81,-0.25 -1.26,-0.25zm-48.57 3.51l48.42 0 0 49.23 -49.33 0 0 -49.23 0.91 0z" />
                                </g>
                                <g id="_2096424351936">
                                    <path class="fil0"
                                        d="M1011.56 1177.39l-5.77 0 0 3.47 5.72 0c0.75,0 1.49,-0.12 2.04,-0.33 0.86,-0.31 1.55,-0.76 2.1,-1.47 0.18,-0.22 0.33,-0.47 0.46,-0.73 0.13,-0.25 0.24,-0.55 0.33,-0.85 0.13,-0.47 0.17,-0.9 0.17,-1.34l0 -0.7c0,-0.62 -0.32,-1.44 -0.56,-1.84 -0.14,-0.24 -0.31,-0.49 -0.51,-0.69 -0.07,-0.07 -0.07,-0.1 -0.13,-0.16 -0.15,-0.16 -0.65,-0.56 -0.83,-0.67 -0.14,-0.08 -0.25,-0.14 -0.39,-0.22 -0.12,-0.07 -0.24,-0.15 -0.37,-0.23 -0.13,-0.08 -0.25,-0.14 -0.38,-0.22 -0.27,-0.16 -0.5,-0.3 -0.76,-0.45l-3.78 -2.25c-0.13,-0.08 -0.24,-0.14 -0.36,-0.21 -0.37,-0.25 -0.77,-0.46 -1.14,-0.68l-2.26 -1.34c-0.75,-0.42 -1.54,-0.91 -2.28,-1.36l-0.54 -0.32c-0.32,-0.19 -0.66,-0.36 -0.96,-0.57l-2.26 -1.34c-0.13,-0.07 -0.25,-0.15 -0.38,-0.23l-1.9 -1.12c-0.26,-0.16 -0.49,-0.29 -0.75,-0.44l-0.75 -0.45c-0.49,-0.33 -1.03,-0.59 -1.51,-0.91 0,-0.68 0.07,-2.36 -0.1,-2.9 -0.24,-0.75 -0.65,-1.29 -1.21,-1.79 -0.06,-0.06 -0.14,-0.11 -0.21,-0.17 -0.51,-0.38 -0.64,-0.39 -1.18,-0.68 -1.93,-1.05 -1.91,-4.27 0.47,-5.06 0.46,-0.16 0.94,-0.19 1.42,-0.1 0.49,0.1 0.97,0.28 1.33,0.6l0.42 0.45c0.25,0.33 0.38,0.77 0.46,1.2 0.1,0.64 0.11,1.13 0.59,1.61 0.63,0.64 1.62,0.45 2.23,-0.15 0.72,-0.72 0.6,-1.87 0.34,-2.76 -0.06,-0.18 -0.13,-0.35 -0.19,-0.52 -0.13,-0.34 -0.3,-0.66 -0.48,-0.96 -0.09,-0.16 -0.19,-0.29 -0.3,-0.44 -0.38,-0.56 -0.9,-1.06 -1.46,-1.43 -1.24,-0.82 -2.27,-1.06 -3.79,-1.06 -0.78,0 -1.46,0.15 -2.14,0.44 -0.41,0.18 -0.79,0.42 -1.15,0.69l-0.6 0.51 -0.5 0.6c-0.12,0.16 -0.2,0.26 -0.3,0.44 -0.27,0.45 -0.29,0.5 -0.52,0.95 -0.25,0.51 -0.6,1.6 -0.6,2.34 0,1.36 0.26,2.38 0.89,3.43l0.28 0.41c0.11,0.15 0.21,0.22 0.32,0.36 0.29,0.34 0.73,0.66 1.1,0.92l0.41 0.28c0.26,0.17 0.56,0.36 0.78,0.58 0.24,0.24 0.48,0.5 0.48,0.89l0 1.29c0,0.08 -0.27,0.21 -0.35,0.25l-6.17 3.64c-0.13,0.08 -0.25,0.15 -0.38,0.23 -0.08,0.04 -0.11,0.06 -0.18,0.11l-0.6 0.35c-0.12,0.07 -0.25,0.14 -0.38,0.22 -0.08,0.05 -0.12,0.08 -0.19,0.12l-0.98 0.58c-0.13,0.07 -0.25,0.14 -0.38,0.22l-2.72 1.6c-0.26,0.16 -0.49,0.29 -0.76,0.45l-1.74 1.02c-0.8,0.48 -2.13,1.3 -2.91,1.72 -0.14,0.08 -0.23,0.15 -0.37,0.23l-2.32 1.36c-0.45,0.27 -0.89,0.53 -1.26,0.9 -0.84,0.82 -1.32,2.13 -1.32,3.31 0,0.98 0.12,1.8 0.67,2.61 0.23,0.35 0.47,0.69 0.79,0.97 0.97,0.85 2.13,1.26 3.43,1.26l5.92 0 0 -3.47 -5.97 0c-0.68,0 -1.32,-0.68 -1.32,-1.35 0,-0.53 0.17,-0.87 0.61,-1.15 0.41,-0.26 0.91,-0.52 1.33,-0.78l3.34 -1.97c0.07,-0.03 0.11,-0.05 0.17,-0.09 0.06,-0.04 0.09,-0.06 0.16,-0.1l3.68 -2.16c0.68,-0.43 1.62,-0.94 2.34,-1.37 0.22,-0.14 0.43,-0.26 0.66,-0.39 0.22,-0.14 0.46,-0.26 0.68,-0.4l2.66 -1.57c0.25,-0.13 0.43,-0.26 0.67,-0.39 0.12,-0.06 0.21,-0.13 0.33,-0.19l2 -1.18c0.12,-0.07 0.23,-0.13 0.34,-0.2l1.34 -0.79c0.08,-0.05 0.62,-0.38 0.67,-0.38l0.99 0.58c0.14,0.08 0.21,0.13 0.33,0.2 0.22,0.13 0.44,0.25 0.67,0.39l1.34 0.79c0.11,0.07 0.22,0.12 0.33,0.19l3.33 1.96c0.52,0.31 1.51,0.91 2,1.17 0.13,0.07 0.22,0.15 0.35,0.21l7.35 4.33c0.12,0.07 0.22,0.13 0.34,0.19l0.66 0.39c0.11,0.07 0.21,0.13 0.33,0.2l1.34 0.79c0.39,0.21 1.01,0.54 1.25,0.87 0.72,0.99 -0.05,2.2 -1.14,2.2z" />
                                    <path class="fil0"
                                        d="M981.4 1174.96l21.39 0c0.63,0 1.14,0.51 1.14,1.13l0 18.01c0,0.62 -0.51,1.14 -1.14,1.14l-21.39 0c-0.62,0 -1.14,-0.52 -1.14,-1.14l0 -18.01c0,-0.62 0.52,-1.13 1.14,-1.13z" />
                                </g>
                            </g>
                        </svg>

                        <!-- map3 -->

                        <svg id="map3" class="map3 map-default" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                            width="100%" height="100%" version="1.1"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 2550 3300" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <style type="text/css">
                                    <![CDATA[ .str0 {
                                        stroke: #FEFEFE;
                                        stroke-width: 2.36;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str1 {
                                        stroke: #373435;
                                        stroke-width: 2.36;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str2 {
                                        stroke: #ED3237;
                                        stroke-width: 2.36;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str43 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str42 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str41 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str15 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str39 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str3 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str11 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str8 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str12 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str9 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str6 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str10 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str7 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str4 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str5 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str36 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str38 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str34 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str35 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str14 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str40 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str24 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str32 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str29 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str33 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str30 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str27 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str31 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str28 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str25 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str26 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str22 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str21 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str18 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str13 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str37 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str44 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str19 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str16 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str23 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str20 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .str17 {
                                        stroke: black;
                                        stroke-width: 1.98;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 2.61313
                                    }

                                    .fil8 {
                                        fill: none
                                    }

                                    .fil7 {
                                        fill: none;
                                        fill-rule: nonzero
                                    }

                                    .fil2 {
                                        fill: #D2D3D5
                                    }

                                    .fil0 {
                                        fill: #D2D3D5
                                    }

                                    .fil4 {
                                        fill: #D2D3D5
                                    }

                                    .fil1 {
                                        fill: #D2D3D5
                                    }

                                    .fil9 {
                                        fill: #D2D3D5
                                    }

                                    .fil3 {
                                        fill: #C2AA7B
                                    }

                                    .fil11 {
                                        fill: #5E4F3E
                                    }

                                    .fil5 {
                                        fill: #D2D3D5
                                    }

                                    .fil10 {
                                        fill: #FEFEFE;
                                        fill-rule: nonzero
                                    }

                                    .fil6 {
                                        fill: black;
                                        fill-rule: nonzero
                                    }

                                    ]]>
                                </style>
                            </defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <polygon class="fil0 str0"
                                    points="1175.34,1005.87 1334.56,1005.87 1334.56,1000.65 2195.88,1000.65 2195.88,711.66 1222.7,711.66 1222.7,123.47 1182.43,123.47 1182.43,232.65 1179.93,232.65 1179.93,654.97 1175.34,654.97 1175.34,711.66 " />
                                <polygon class="fil1 str1"
                                    points="1064.08,654.97 1179.93,654.97 1179.93,232.65 1064.08,232.65 " />
                                <polygon class="fil2 str0"
                                    points="1114.93,568.65 1179.93,568.65 1179.93,449.65 1114.93,449.65 " />
                                <path class="fil3 str0"
                                    d="M423.07 123.47l477.27 0 163.74 0 118.35 0 0 67.97 0 41.21 -2.5 0 0 217 -48.18 0 -16.82 0 0 119 65.02 0.08 -0.02 86.24 -4.98 0 0.39 50.02 0 6.67 0 14.75 0 22.03 0 33.55 0 87.62 0 1.86 -111.66 0 0 135.87 -215.04 0 -98.76 1.11 -326.81 0 0 -136.72 0 -108.13 59.93 0c0,-25.28 0,-50.55 0,-75.83l0 -31.05 -59.93 0 0 -100.01 0 -43.32 0 -389.92zm326.6 538.69l101.04 0 0 209.38 -101.04 0 0 -209.38z" />
                                <polygon class="fil0 str0"
                                    points="749.88,1008.45 749.88,1133.33 749.88,1293.97 423.07,1293.97 423.07,1008.45 " />
                                <polygon class="fil0 str0"
                                    points="793.07,2483.26 859.57,2483.26 859.57,2651.97 422.57,2651.97 422.57,2483.26 " />
                                <polygon class="fil0 str0"
                                    points="749.88,1293.97 749.88,1951.39 862.76,2075.47 863.57,2075.47 863.57,2394.47 793.07,2394.47 422.57,2394.47 422.57,2097.93 422.57,2075.47 423.07,2075.47 423.07,1293.97 " />
                                <polygon class="fil0 str0"
                                    points="859.57,2651.97 422.57,2651.97 422.57,2742.47 422.57,2748.47 422.57,2937.16 638.06,2937.16 638.06,3002.55 852.07,3002.55 852.07,2937.16 961.57,2937.16 961.57,2748.47 1071.58,2748.47 1071.58,2651.97 961.57,2651.97 894.04,2651.97 " />
                                <polygon class="fil0 str0"
                                    points="761.25,2483.26 422.57,2483.26 422.57,2394.47 761.25,2394.47 " />
                                <polygon class="fil0 str0"
                                    points="966.31,2556.53 1055.81,2556.53 1055.81,2624.65 966.31,2624.65 " />
                                <polygon class="fil0 str0"
                                    points="2195.88,1000.65 2195.88,1118.14 2195.88,1118.37 2195.88,1122.47 2195.88,1126.6 2195.88,1130.78 2195.88,1135.03 2195.88,1143.76 2195.88,1148.27 2195.88,1152.91 2195.88,1157.68 2195.88,1162.59 2195.88,1167.66 2195.88,1172.91 2195.88,1178.34 2195.88,1183.98 2195.88,1189.83 2195.88,1195.91 2195.88,1202.23 2195.88,1203.77 2195.88,1254.44 2195.88,1298.75 2195.88,1349.69 2195.88,1350.32 2195.88,1350.47 2195.88,1350.92 2195.88,1351.5 2195.88,1352.02 2195.88,1352.06 2195.88,1352.59 2195.88,1353.1 2195.88,1353.59 2195.88,1353.64 2195.88,1354.07 2195.88,1354.52 2195.88,1354.96 2195.88,1355.33 2195.88,1355.38 2195.88,1355.79 2195.88,1356.18 2195.88,1356.56 2195.88,1356.93 2195.88,1357.09 2195.88,1357.29 2195.88,1357.63 2195.88,1357.97 2195.88,1358.3 2195.88,1358.62 2195.88,1358.92 2195.88,1358.94 2195.88,1359.26 2195.88,1359.56 2195.88,1359.87 2195.88,1360.18 2195.88,1360.48 2195.88,1360.79 2195.88,1360.83 2195.88,1361.09 2195.88,1361.4 2195.88,1361.71 2195.88,1362.03 2195.88,1362.35 2195.88,1362.68 2195.88,1362.82 2195.88,1363.02 2195.88,1363.37 2195.88,1363.72 2195.88,1364.09 2195.88,1364.47 2195.88,1364.86 2195.88,1364.89 2195.88,1365.27 2195.88,1365.69 2195.88,1366.12 2195.88,1366.58 2195.88,1367.04 2195.88,1367.05 2195.88,1367.54 2195.88,1368.05 2195.88,1368.58 2195.88,1369.14 2195.88,1369.28 2195.88,1369.71 2195.88,1370.31 2195.88,1370.94 2195.88,1371.6 2195.88,1371.61 2195.88,1372.28 2195.88,1372.99 2195.88,1373.73 2195.88,1374.03 2195.88,1374.49 2195.88,1375.3 2195.88,1376.13 2195.88,1376.55 2195.88,1377 2195.88,1377.9 2195.88,1378.84 2195.88,1379.16 2195.88,1379.81 2195.88,1380.82 2195.88,1381.87 2195.88,1433.97 1334.56,1433.97 1272.99,1433.97 1272.99,1311.47 1117.07,1311.47 1018.07,1311.47 1018.07,1136.47 1117.07,1136.47 1117.07,1118.14 1282.68,1118.14 1282.68,1046.27 1282.68,1005.87 1334.56,1005.87 1334.56,1000.65 " />
                                <polygon class="fil0 str0"
                                    points="1334.56,1000.65 1334.56,990.45 1334.56,824.4 2195.88,824.4 2195.88,1000.65 " />
                                <polygon class="fil0 str0"
                                    points="963.58,1540.97 861.47,1540.97 861.47,1433.97 850.07,1433.97 850.07,1540.97 850.07,1549.81 850.07,1906.01 963.58,2030.76 963.58,2298.47 1103.96,2413.69 1103.96,2511.85 1272.99,2511.85 1272.99,2298.47 1272.99,1906.01 1272.99,1540.97 1272.99,1433.97 1100.08,1433.97 963.58,1433.97 " />
                                <polygon class="fil0 str0"
                                    points="1103.96,2937.16 1328.95,2937.16 1390.52,2937.16 1390.52,2929.39 2172.42,2929.39 2195.88,2929.39 2195.88,2748.47 2195.88,1434.92 1839.51,1434.92 1839.51,1433.97 1272.99,1433.97 1272.99,2511.85 1238.64,2511.86 1238.64,2680.9 1103.96,2680.9 1103.96,2801.36 1103.96,2801.36 " />
                                <polygon class="fil0 str0"
                                    points="848.64,1007.34 980.74,1007.34 1002.09,1007.34 1002.09,1110.22 980.74,1110.22 980.74,1131.06 848.64,1131.06 848.64,1110.22 " />
                                <polygon class="fil0 str0"
                                    points="817.2,1180.02 884.38,1180.02 884.38,1146.68 817.2,1146.68 " />
                                <polygon class="fil0 str0"
                                    points="850.79,1306.06 921.37,1306.06 921.37,1220.12 850.79,1220.12 " />
                                <polygon class="fil0 str0"
                                    points="1103.96,2511.85 1171.3,2511.85 1171.3,2613.56 1103.96,2613.56 " />
                                <polygon class="fil0 str0"
                                    points="1238.64,2613.56 1171.3,2613.56 1171.3,2511.86 1238.64,2511.86 " />
                                <polygon class="fil0 str0"
                                    points="961.57,2937.16 1103.96,2937.16 1103.96,2748.47 1103.96,2651.97 1071.58,2651.97 1071.58,2748.47 961.57,2748.47 " />
                                <polygon class="fil4 str2"
                                    points="1175.34,871.47 1063.68,871.47 1063.68,1012.97 1175.34,1012.97 " />
                                <polygon class="fil0 str0"
                                    points="1063.68,871.47 1175.34,871.47 1175.34,1012.97 1063.68,1012.97 " />
                                <polygon class="fil0 str0"
                                    points="1117.07,1118.14 1282.68,1118.14 1282.68,1005.87 1175.34,1005.87 1175.34,1012.97 1117.07,1012.97 " />
                                <polygon class="fil0 str0"
                                    points="1002.09,1136.47 1117.07,1136.47 1117.07,1012.97 1064.18,1012.97 1063.68,1007.34 1002.09,1007.34 " />
                                <polygon class="fil0 str0"
                                    points="1238.64,2613.56 1171.3,2613.56 1171.3,2680.9 1238.64,2680.9 " />
                                <polygon class="fil0 str0"
                                    points="1103.96,2613.56 1171.3,2613.56 1171.3,2680.9 1103.96,2680.9 " />
                                <polygon class="fil0 str0"
                                    points="1069.43,1069.12 1002.09,1069.12 1002.09,1136.47 1069.43,1136.47 " />
                                <polygon class="fil5 str0"
                                    points="1174.95,722.32 1107.61,722.32 1107.61,789.66 1174.95,789.66 " />
                                <polygon class="fil5 str0"
                                    points="1174.95,722.32 1107.61,722.32 1107.61,654.97 1174.95,654.97 " />
                                <path class="fil6"
                                    d="M837.8 816.19l0 7.24 0 2.57c0,0.55 -0.45,1 -1,1l-4.5 0 0 32.79 0 0.02c0,0.55 -0.45,1 -1,1l-0.02 0 -59.95 0 -0.03 0c-0.55,0 -1,-0.45 -1,-1l0 -0.02 0 -32.79 -4.5 0c-0.55,0 -1,-0.45 -1,-1l0 -44.91 0 -27.27 0 -8.09c14.89,12.39 27.98,23.34 40.89,34.34 10.78,9.18 21.2,18.19 32.11,27.8l0 8.32zm-28.5 -15.8l1.08 -0.89 -1.08 0 0 0.89zm3.51 -2.89l1.86 -1.54 -4.01 -3.46 -1.36 0 0 5 3.51 0zm0.7 2l-4.21 3.47 0 1.53 6.5 0 0 -5 -2.29 0zm-33.05 35.5l4.34 3.8 0 -3.8 -4.34 0zm6.34 3.89l4.72 -3.89 -4.72 0 0 3.89zm6.5 -2.77l-4.72 3.88 4.72 0 0 -3.88zm-10.16 3.88l-4.34 -3.8 0 3.8 4.34 0zm-9.84 18.31l8.88 0 16.12 0 0 -9.94 0 0 -0.01 0.01 -0.01 0 -0.01 0 -0.08 0.04 0 0 -0.05 0.02 0 0 -0.03 0.01 -0.01 0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 0.01 -0.01 0 0 0 -0.03 0.01 -0.02 0 0 0 -0.02 0.01 0 0 -0.01 0 -0.02 0 0 0 -0.01 0 -0.01 0 -0.01 0 -0.02 0.01 -0.02 0 0 0 -0.01 0 -0.02 0 0 0 -0.02 0 0 0 -0.01 0 -0.02 0 -0.01 0 -0.02 0 -1.44 0 -0.02 0 -0.01 0c-0.55,0 -1,-0.45 -1,-1l0 -0.02 0 -4.48 -1 0c-0.55,0 -1,-0.45 -1,-1l-7.47 0 -0.03 0 -0.03 0 -6.97 0c0,0.55 -0.45,1 -1,1l-1 0 0 4.48 0 0.02c0,0.54 -0.43,0.99 -0.97,1l-0.03 0 -0.02 0 -0.01 0 -1.47 0 -0.5 0 -0.5 0 0 7.76 0 2.05zm27 0l2 0 0 -16.28 0 -56.68 -0.63 -0.54 -1.37 -1.16 0 58.35 0 0.03 0 16.28zm4 0l13.97 0 11.03 0 0 -9.81 0 -0.16c-0.02,0.01 -0.03,0.06 -0.05,0.16l-0.82 0 0 -0.01 -0.13 0.01 -0.98 0 -0.02 0 -0.03 0c-0.53,-0.01 -0.97,-0.46 -0.97,-1l0 -0.02 0 -4.48 -1.5 0c-0.55,0 -1,-0.45 -1,-1l-6.97 0 -0.03 0 -0.03 0 -7.47 0c0,0.55 -0.45,1 -1,1l-0.29 0 0 4.5c0,0.55 -0.61,1 -1.35,1 -0.07,0 -0.14,0 -0.21,-0.01 -0.05,0.01 -0.1,0.01 -0.15,0.01l-1.47 0 -0.01 0 -0.02 0 -0.02 0 -0.01 0 0 0 -0.02 0 0 0 -0.02 0 -0.01 0 0 0 -0.02 0 -0.02 -0.01 -0.01 0 0 0 -0.02 0 0 0 -0.02 0 -0.01 0 0 0 -0.02 -0.01 0 0 -0.01 0 -0.04 -0.01 0 0 -0.01 0 -0.01 -0.01 -0.01 0 -0.01 0 -0.01 0 -0.01 -0.01 -0.03 -0.01 0 0 -0.04 -0.02 -0.01 0 -0.08 -0.04 -0.01 0 0 0 -0.02 -0.01 0 0 0 9.94zm-17.5 -86.08l0 3.77 4.48 0 -4.48 -3.77zm0 5.77l0 5.5 6.5 0 0 -5.5 -6.5 0zm0 7.5l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5.5 6.5 0 0 -5.5 -6.5 0zm0 7.5l0 5 6.5 0 0 -5 -6.5 0zm0 7l0 5 6.5 0 0 -5 -6.5 0zm-2 5l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5.5 -6 0 0 5.5 6 0zm0 -7.5l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5 -6 0 0 5 6 0zm0 -7l0 -5.5 -6 0 0 5.5 6 0zm0 -7.5l0 -5 -6 0 0 5 6 0zm31 64l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5 -6.5 0 0 5 6.5 0zm0 -7l0 -5.5 -6.5 0 0 5.5 6.5 0zm0 -7.5l0 -5 -6.5 0 0 5 6.5 0zm2 -12l0 5 6 0 0 -0.61 -5.04 -4.39 -0.96 0zm0 7l0 5 6 0 0 -5 -6 0zm0 7l0 5.5 6 0 0 -5.5 -6 0zm0 7.5l0 5 6 0 0 -5 -6 0zm0 7l0 5 6 0 0 -5 -6 0zm0 7l0 5 6 0 0 -5 -6 0zm-39 -69.49l0 3.49 4.16 0 -4.16 -3.49zm47.5 75.49l0 -34.93 -0.5 -0.44 0 6.85 0 0.02 0 0.03 0 7.45 0 0.02 0 0.03 0 6.94 0 0.03 0 0.03 0 6.95 0 0.02 0 0.03 0 6.95 0 0.02 0.5 0zm-56 -16l0 -66.59 -3.5 -2.92 0 69.51 3.5 0zm62 -13.66l0 13.66 3.5 0 0 -10.58 -3.5 -3.08z" />
                                <polyline class="fil7 str3" points="451.01,687.89 451.01,734.99 473.82,734.99 " />
                                <line class="fil7 str4" x1="451.01" y1="734.99" x2="424.73" y2="734.99" />
                                <line class="fil7 str5" x1="451.01" y1="730.03" x2="424.73" y2="730.03" />
                                <line class="fil7 str6" x1="451.01" y1="724.58" x2="424.73" y2="724.58" />
                                <line class="fil7 str7" x1="451.01" y1="719.12" x2="424.73" y2="719.12" />
                                <line class="fil7 str8" x1="451.01" y1="714.17" x2="424.73" y2="714.17" />
                                <line class="fil7 str9" x1="451.01" y1="708.71" x2="424.73" y2="708.71" />
                                <line class="fil7 str10" x1="451.01" y1="703.26" x2="424.73" y2="703.26" />
                                <line class="fil7 str11" x1="451.01" y1="698.3" x2="424.73" y2="698.3" />
                                <line class="fil7 str12" x1="451.01" y1="692.85" x2="424.73" y2="692.85" />
                                <line class="fil7 str13" x1="438.12" y1="687.89" x2="438.12" y2="734.99" />
                                <polyline class="fil7 str14" points="431.18,730.03 438.12,734.99 444.56,730.03 " />
                                <line class="fil7 str3" x1="451.01" y1="687.89" x2="424.73" y2="687.89" />
                                <polyline class="fil7 str15" points="450.02,686.9 450.02,735.98 474.81,735.98 " />
                                <line class="fil7 str16" x1="479.27" y1="740.44" x2="479.27" y2="761.76" />
                                <line class="fil7 str17" x1="473.82" y1="734.99" x2="473.82" y2="761.76" />
                                <line class="fil7 str18" x1="468.86" y1="734.99" x2="468.86" y2="761.76" />
                                <line class="fil7 str19" x1="463.4" y1="734.99" x2="463.4" y2="761.76" />
                                <line class="fil7 str20" x1="457.95" y1="734.99" x2="457.95" y2="761.76" />
                                <line class="fil7 str21" x1="452.99" y1="734.99" x2="452.99" y2="761.76" />
                                <polyline class="fil7 str22" points="452.99,748.38 484.23,748.38 479.27,743.42 " />
                                <path class="fil7 str17" d="M473.82 734.99l10.84 10.85m0 2.66l-0.43 0.87 0.43 -0.26" />
                                <line class="fil7 str23" x1="479.27" y1="753.33" x2="484.23" y2="748.38" />
                                <polygon class="fil8 str1" points="423.07,656.72 483,656.72 483,763.6 423.07,763.6 " />
                                <polyline class="fil7 str24" points="1141.21,494.78 1141.21,541.88 1164.01,541.88 " />
                                <line class="fil7 str25" x1="1141.21" y1="541.88" x2="1114.93" y2="541.88" />
                                <line class="fil7 str26" x1="1141.21" y1="536.92" x2="1114.93" y2="536.92" />
                                <line class="fil7 str27" x1="1141.21" y1="531.47" x2="1114.93" y2="531.47" />
                                <line class="fil7 str28" x1="1141.21" y1="526.01" x2="1114.93" y2="526.01" />
                                <line class="fil7 str29" x1="1141.21" y1="521.06" x2="1114.93" y2="521.06" />
                                <line class="fil7 str30" x1="1141.21" y1="515.6" x2="1114.93" y2="515.6" />
                                <line class="fil7 str31" x1="1141.21" y1="510.15" x2="1114.93" y2="510.15" />
                                <line class="fil7 str32" x1="1141.21" y1="505.19" x2="1114.93" y2="505.19" />
                                <line class="fil7 str33" x1="1141.21" y1="499.74" x2="1114.93" y2="499.74" />
                                <line class="fil7 str34" x1="1128.32" y1="494.78" x2="1128.32" y2="541.88" />
                                <polyline class="fil7 str35" points="1121.38,536.92 1128.32,541.88 1134.76,536.92 " />
                                <line class="fil7 str24" x1="1141.21" y1="494.78" x2="1114.93" y2="494.78" />
                                <polyline class="fil7 str36" points="1140.22,493.79 1140.22,542.87 1165.01,542.87 " />
                                <line class="fil7 str37" x1="1169.47" y1="547.33" x2="1169.47" y2="568.65" />
                                <line class="fil7 str38" x1="1164.01" y1="541.88" x2="1164.01" y2="568.65" />
                                <line class="fil7 str39" x1="1159.06" y1="541.88" x2="1159.06" y2="568.65" />
                                <line class="fil7 str40" x1="1153.6" y1="541.88" x2="1153.6" y2="568.65" />
                                <line class="fil7 str41" x1="1148.15" y1="541.88" x2="1148.15" y2="568.65" />
                                <line class="fil7 str42" x1="1143.19" y1="541.88" x2="1143.19" y2="568.65" />
                                <polyline class="fil7 str43" points="1143.19,555.26 1174.42,555.26 1169.47,550.31 " />
                                <path class="fil7 str38" d="M1164.01 541.88l10.85 10.84m0 2.67l-0.44 0.86 0.44 -0.26" />
                                <line class="fil7 str44" x1="1169.47" y1="560.22" x2="1174.42" y2="555.26" />
                                <polygon class="fil9 str0"
                                    points="483,695.79 571.91,695.79 602.64,763.6 602.64,1008.45 423.07,1008.45 423.07,763.6 483,763.6 " />
                                <polygon class="zhekas_ice fil9 str0"
                                    points="456.08,527.74 491.22,527.74 491.22,593.03 456.08,593.03 " />
                                <path class="fil9 str0"
                                    d="M1144.6 330.31l0 37.64 -38.13 0 -20.41 80.98 -20.41 0c-5.47,-30.78 -16.25,-59.75 -31.36,-85.95l59.56 -32.67 50.75 0z" />
                                <path class="burger_time fil9 str0"
                                    d="M878.24 160.34l36.89 0 107.99 0 0 33.22 -67.17 83.74c-17.24,-12.14 -35.98,-22.34 -55.89,-30.25 -15.71,-6.24 -32.14,-11.06 -49.14,-14.29l27.32 -72.42z" />
                                <path class="best_shawarma fil9 str0"
                                    d="M1144.6 330.31l-50.75 0 -59.56 32.67c-19.55,-33.9 -46.37,-63.15 -78.34,-85.68l67.17 -83.74 0 -33.22 121.48 0 0 169.97z" />
                                <path class="redway fil9 str0"
                                    d="M712.37 160.34l165.87 0 -27.32 72.42c-16.58,-3.16 -33.69,-4.83 -51.2,-4.83 -18.84,0 -37.24,1.92 -54.99,5.56l-32.36 -73.15z" />
                                <path class="pappas_pizza fil9 str0"
                                    d="M573.84 160.34l138.53 0 32.36 73.15c-38.81,7.97 -74.58,24.19 -105.34,46.75l-65.55 -84.25 0 -35.65z" />
                                <path class="fil9 str0"
                                    d="M455.61 160.34l118.23 0 0 35.65 65.55 84.25c-28.97,21.23 -53.51,48.08 -71.98,78.92l-79.44 -16.28 0 -116.8 -32.36 0 0 -65.74z" />
                                <path class="pizzaro fil9 str0"
                                    d="M567.41 359.16c-16.29,27.19 -27.88,57.48 -33.62,89.77l-16.54 0 -61.64 0 -33.04 0 0 -108.83 33.04 0 0 -114.02 32.36 0 0 116.8 79.44 16.28z" />
                                <polygon class="fil9 str0"
                                    points="1106.95,367.95 1144.6,367.95 1144.6,330.31 1106.95,330.31 " />
                                <path class="fil10"
                                    d="M1036.63 242.47l5.86 0c1.17,0 2.03,0.05 2.6,0.14 0.58,0.1 1.09,0.31 1.54,0.61 0.45,0.31 0.82,0.71 1.13,1.22 0.3,0.51 0.45,1.09 0.45,1.72 0,0.68 -0.19,1.31 -0.56,1.88 -0.37,0.58 -0.87,1 -1.5,1.29 0.89,0.27 1.58,0.71 2.06,1.34 0.47,0.63 0.71,1.36 0.71,2.21 0,0.67 -0.15,1.32 -0.46,1.96 -0.31,0.63 -0.73,1.13 -1.27,1.51 -0.54,0.38 -1.2,0.61 -1.99,0.7 -0.49,0.05 -1.69,0.08 -3.58,0.1l-4.99 0 0 -14.68zm2.97 2.44l0 3.38 1.94 0c1.15,0 1.87,-0.01 2.15,-0.05 0.5,-0.06 0.9,-0.23 1.19,-0.52 0.29,-0.29 0.44,-0.67 0.44,-1.14 0,-0.46 -0.13,-0.82 -0.38,-1.11 -0.25,-0.28 -0.62,-0.45 -1.11,-0.51 -0.3,-0.03 -1.14,-0.05 -2.53,-0.05l-1.7 0zm0 5.82l0 3.94 2.74 0c1.07,0 1.75,-0.03 2.04,-0.09 0.44,-0.08 0.8,-0.28 1.07,-0.59 0.28,-0.31 0.42,-0.73 0.42,-1.25 0,-0.44 -0.11,-0.82 -0.32,-1.12 -0.21,-0.31 -0.52,-0.54 -0.93,-0.68 -0.4,-0.14 -1.28,-0.21 -2.63,-0.21l-2.39 0zm11.83 6.42l0 -14.68 10.86 0 0 2.48 -7.89 0 0 3.26 7.34 0 0 2.48 -7.34 0 0 3.98 8.18 0 0 2.48 -11.15 0zm12.89 -4.76l2.89 -0.28c0.18,0.96 0.52,1.67 1.05,2.12 0.53,0.46 1.25,0.68 2.15,0.68 0.95,0 1.66,-0.2 2.14,-0.6 0.49,-0.4 0.73,-0.87 0.73,-1.41 0,-0.35 -0.1,-0.65 -0.31,-0.89 -0.2,-0.25 -0.55,-0.46 -1.06,-0.63 -0.34,-0.13 -1.13,-0.34 -2.36,-0.65 -1.58,-0.39 -2.69,-0.88 -3.33,-1.46 -0.9,-0.81 -1.35,-1.79 -1.35,-2.96 0,-0.75 0.22,-1.45 0.64,-2.1 0.42,-0.65 1.03,-1.15 1.83,-1.49 0.79,-0.34 1.75,-0.51 2.87,-0.51 1.84,0 3.22,0.4 4.15,1.22 0.93,0.81 1.41,1.9 1.46,3.26l-2.97 0.11c-0.13,-0.76 -0.4,-1.3 -0.81,-1.64 -0.41,-0.33 -1.04,-0.49 -1.86,-0.49 -0.86,0 -1.53,0.17 -2.01,0.53 -0.31,0.23 -0.47,0.53 -0.47,0.91 0,0.35 0.15,0.65 0.44,0.9 0.38,0.31 1.28,0.64 2.72,0.98 1.44,0.34 2.5,0.7 3.19,1.06 0.69,0.36 1.23,0.86 1.62,1.49 0.39,0.63 0.58,1.41 0.58,2.34 0,0.84 -0.23,1.63 -0.7,2.36 -0.47,0.74 -1.13,1.28 -1.98,1.64 -0.86,0.36 -1.92,0.54 -3.19,0.54 -1.86,0 -3.28,-0.43 -4.28,-1.29 -0.99,-0.85 -1.58,-2.1 -1.78,-3.74zm17.75 4.76l0 -12.2 -4.34 0 0 -2.48 11.64 0 0 2.48 -4.32 0 0 12.2 -2.98 0zm-79.81 14.3l2.89 -0.29c0.17,0.97 0.52,1.67 1.05,2.13 0.53,0.45 1.24,0.68 2.14,0.68 0.95,0 1.67,-0.2 2.15,-0.61 0.48,-0.4 0.72,-0.87 0.72,-1.41 0,-0.35 -0.1,-0.64 -0.3,-0.89 -0.2,-0.24 -0.56,-0.45 -1.06,-0.63 -0.35,-0.12 -1.13,-0.34 -2.36,-0.64 -1.58,-0.4 -2.69,-0.88 -3.33,-1.46 -0.9,-0.81 -1.35,-1.8 -1.35,-2.96 0,-0.75 0.21,-1.46 0.63,-2.11 0.43,-0.65 1.03,-1.15 1.83,-1.49 0.8,-0.34 1.75,-0.51 2.88,-0.51 1.83,0 3.22,0.4 4.14,1.22 0.93,0.82 1.42,1.91 1.47,3.27l-2.98 0.1c-0.12,-0.76 -0.39,-1.3 -0.81,-1.63 -0.41,-0.33 -1.03,-0.5 -1.86,-0.5 -0.85,0 -1.52,0.18 -2,0.53 -0.31,0.23 -0.47,0.53 -0.47,0.92 0,0.35 0.15,0.64 0.44,0.89 0.37,0.32 1.28,0.64 2.72,0.99 1.43,0.33 2.5,0.69 3.18,1.05 0.69,0.37 1.23,0.86 1.62,1.49 0.39,0.64 0.59,1.42 0.59,2.34 0,0.84 -0.24,1.63 -0.7,2.37 -0.47,0.73 -1.13,1.28 -1.99,1.63 -0.85,0.36 -1.91,0.54 -3.19,0.54 -1.85,0 -3.28,-0.43 -4.27,-1.29 -1,-0.85 -1.59,-2.1 -1.78,-3.73zm14.45 4.75l0 -14.67 2.97 0 0 5.78 5.78 0 0 -5.78 2.97 0 0 14.67 -2.97 0 0 -6.41 -5.78 0 0 6.41 -2.97 0zm28.02 0l-3.2 0 -1.27 -3.34 -5.88 0 -1.22 3.34 -3.15 0 5.7 -14.67 3.14 0 5.88 14.67zm-5.43 -5.82l-2.04 -5.43 -1.98 5.43 4.02 0zm7.9 5.82l-3.45 -14.67 3.05 0 2.19 10.08 2.67 -10.08 3.54 0 2.56 10.25 2.23 -10.25 2.99 0 -3.54 14.67 -3.17 0 -2.9 -10.97 -2.91 10.97 -3.26 0zm29.42 0l-3.2 0 -1.27 -3.34 -5.88 0 -1.22 3.34 -3.15 0 5.7 -14.67 3.14 0 5.88 14.67zm-5.43 -5.82l-2.04 -5.43 -1.98 5.43 4.02 0zm7.01 5.82l0 -14.67 6.24 0c1.57,0 2.71,0.13 3.42,0.39 0.72,0.26 1.29,0.73 1.71,1.41 0.43,0.67 0.64,1.44 0.64,2.31 0,1.1 -0.32,2.01 -0.96,2.73 -0.65,0.72 -1.61,1.17 -2.9,1.35 0.64,0.38 1.17,0.79 1.58,1.23 0.42,0.45 0.98,1.25 1.68,2.39l1.79 2.86 -3.54 0 -2.12 -3.2c-0.77,-1.14 -1.29,-1.86 -1.57,-2.15 -0.28,-0.3 -0.58,-0.5 -0.89,-0.61 -0.32,-0.11 -0.82,-0.17 -1.5,-0.17l-0.61 0 0 6.13 -2.97 0zm2.97 -8.46l2.2 0c1.42,0 2.3,-0.07 2.66,-0.18 0.35,-0.12 0.63,-0.33 0.83,-0.63 0.2,-0.29 0.3,-0.66 0.3,-1.1 0,-0.5 -0.13,-0.89 -0.4,-1.2 -0.26,-0.3 -0.63,-0.49 -1.11,-0.57 -0.24,-0.04 -0.96,-0.05 -2.16,-0.05l-2.32 0 0 3.73zm11.79 8.46l0 -14.67 4.46 0 2.63 10.01 2.6 -10.01 4.46 0 0 14.67 -2.75 0 -0.01 -11.55 -2.89 11.55 -2.86 0 -2.88 -11.55 -0.01 11.55 -2.75 0zm30.34 0l-3.2 0 -1.27 -3.34 -5.88 0 -1.22 3.34 -3.15 0 5.7 -14.67 3.14 0 5.88 14.67zm-5.43 -5.82l-2.04 -5.43 -1.98 5.43 4.02 0z" />
                                <path class="fil10"
                                    d="M440.99 405.59l0 -14.68 4.75 0c1.8,0 2.98,0.07 3.52,0.22 0.84,0.22 1.55,0.7 2.11,1.44 0.57,0.73 0.85,1.69 0.85,2.86 0,0.9 -0.16,1.65 -0.48,2.27 -0.33,0.61 -0.75,1.1 -1.25,1.45 -0.5,0.35 -1.01,0.58 -1.53,0.69 -0.71,0.14 -1.73,0.21 -3.07,0.21l-1.93 0 0 5.54 -2.97 0zm2.97 -12.2l0 4.18 1.62 0c1.16,0 1.94,-0.08 2.33,-0.23 0.4,-0.15 0.7,-0.39 0.93,-0.72 0.22,-0.33 0.33,-0.71 0.33,-1.15 0,-0.54 -0.16,-0.98 -0.47,-1.32 -0.31,-0.35 -0.7,-0.57 -1.19,-0.66 -0.35,-0.06 -1.06,-0.1 -2.12,-0.1l-1.43 0zm10.6 12.2l0 -14.68 2.97 0 0 14.68 -2.97 0zm4.51 0l0 -2.67 7.73 -9.53 -6.85 0 0 -2.48 10.74 0 0 2.3 -8.03 9.9 8.34 0 0 2.48 -11.93 0zm12.52 0l0 -2.67 7.73 -9.53 -6.85 0 0 -2.48 10.74 0 0 2.3 -8.03 9.9 8.34 0 0 2.48 -11.93 0zm27.03 0l-3.2 0 -1.27 -3.34 -5.88 0 -1.22 3.34 -3.15 0 5.7 -14.68 3.14 0 5.88 14.68zm-5.43 -5.82l-2.04 -5.44 -1.98 5.44 4.02 0zm7.01 5.82l0 -14.68 6.25 0c1.56,0 2.7,0.13 3.42,0.4 0.71,0.26 1.28,0.73 1.7,1.4 0.43,0.68 0.65,1.45 0.65,2.31 0,1.11 -0.33,2.02 -0.97,2.73 -0.65,0.72 -1.61,1.17 -2.9,1.36 0.64,0.37 1.17,0.78 1.58,1.23 0.42,0.45 0.98,1.24 1.68,2.38l1.8 2.87 -3.55 0 -2.12 -3.21c-0.76,-1.13 -1.29,-1.85 -1.57,-2.15 -0.28,-0.29 -0.58,-0.5 -0.89,-0.61 -0.32,-0.11 -0.82,-0.16 -1.5,-0.16l-0.6 0 0 6.13 -2.98 0zm2.98 -8.47l2.19 0c1.42,0 2.31,-0.06 2.66,-0.18 0.35,-0.12 0.63,-0.33 0.83,-0.62 0.2,-0.3 0.3,-0.66 0.3,-1.11 0,-0.49 -0.13,-0.89 -0.39,-1.19 -0.27,-0.31 -0.64,-0.5 -1.12,-0.58 -0.24,-0.03 -0.96,-0.05 -2.16,-0.05l-2.31 0 0 3.73zm11.21 1.22c0,-1.5 0.23,-2.76 0.67,-3.77 0.34,-0.75 0.79,-1.42 1.37,-2.02 0.58,-0.59 1.21,-1.03 1.9,-1.33 0.91,-0.38 1.97,-0.58 3.16,-0.58 2.17,0 3.9,0.68 5.2,2.02 1.3,1.35 1.95,3.21 1.95,5.61 0,2.37 -0.65,4.23 -1.94,5.57 -1.28,1.34 -3.01,2.01 -5.17,2.01 -2.18,0 -3.92,-0.66 -5.21,-2 -1.28,-1.33 -1.93,-3.17 -1.93,-5.51zm3.06 -0.1c0,1.66 0.38,2.92 1.15,3.78 0.77,0.86 1.75,1.29 2.93,1.29 1.18,0 2.15,-0.43 2.92,-1.28 0.75,-0.85 1.13,-2.13 1.13,-3.83 0,-1.69 -0.37,-2.94 -1.11,-3.77 -0.73,-0.83 -1.72,-1.24 -2.94,-1.24 -1.22,0 -2.21,0.42 -2.96,1.25 -0.75,0.84 -1.12,2.11 -1.12,3.8z" />
                                <path class="fil10"
                                    d="M616.16 206.63l0 -14.67 4.75 0c1.8,0 2.97,0.07 3.52,0.21 0.84,0.23 1.54,0.7 2.11,1.44 0.57,0.74 0.85,1.69 0.85,2.86 0,0.9 -0.16,1.66 -0.49,2.27 -0.32,0.62 -0.74,1.1 -1.24,1.45 -0.5,0.35 -1.01,0.58 -1.53,0.7 -0.71,0.13 -1.73,0.21 -3.07,0.21l-1.93 0 0 5.53 -2.97 0zm2.97 -12.19l0 4.18 1.62 0c1.16,0 1.94,-0.08 2.33,-0.23 0.39,-0.16 0.7,-0.4 0.92,-0.73 0.23,-0.33 0.34,-0.71 0.34,-1.14 0,-0.54 -0.16,-0.98 -0.47,-1.33 -0.31,-0.35 -0.71,-0.57 -1.19,-0.66 -0.35,-0.06 -1.06,-0.09 -2.12,-0.09l-1.43 0zm69.6 0.26l-1.77 0 -2.76 -2.99 3.13 0 1.4 2.99zm-45.68 11.93l-3.2 0 -1.26 -3.34 -5.89 0 -1.22 3.34 -3.14 0 5.69 -14.67 3.14 0 5.88 14.67zm-5.43 -5.82l-2.04 -5.43 -1.98 5.43 4.02 0zm7.02 5.82l0 -14.67 4.75 0c1.8,0 2.97,0.07 3.52,0.21 0.84,0.23 1.54,0.7 2.11,1.44 0.56,0.74 0.85,1.69 0.85,2.86 0,0.9 -0.17,1.66 -0.49,2.27 -0.33,0.62 -0.74,1.1 -1.24,1.45 -0.51,0.35 -1.02,0.58 -1.54,0.7 -0.71,0.13 -1.73,0.21 -3.07,0.21l-1.92 0 0 5.53 -2.97 0zm2.97 -12.19l0 4.18 1.61 0c1.17,0 1.94,-0.08 2.34,-0.23 0.39,-0.16 0.7,-0.4 0.92,-0.73 0.22,-0.33 0.33,-0.71 0.33,-1.14 0,-0.54 -0.15,-0.98 -0.46,-1.33 -0.32,-0.35 -0.71,-0.57 -1.19,-0.66 -0.35,-0.06 -1.06,-0.09 -2.13,-0.09l-1.42 0zm10.7 12.19l0 -14.67 4.75 0c1.8,0 2.97,0.07 3.52,0.21 0.84,0.23 1.54,0.7 2.11,1.44 0.57,0.74 0.85,1.69 0.85,2.86 0,0.9 -0.16,1.66 -0.49,2.27 -0.33,0.62 -0.74,1.1 -1.24,1.45 -0.5,0.35 -1.02,0.58 -1.54,0.7 -0.7,0.13 -1.72,0.21 -3.06,0.21l-1.93 0 0 5.53 -2.97 0zm2.97 -12.19l0 4.18 1.62 0c1.16,0 1.94,-0.08 2.33,-0.23 0.39,-0.16 0.7,-0.4 0.92,-0.73 0.22,-0.33 0.34,-0.71 0.34,-1.14 0,-0.54 -0.16,-0.98 -0.47,-1.33 -0.32,-0.35 -0.71,-0.57 -1.19,-0.66 -0.35,-0.06 -1.06,-0.09 -2.13,-0.09l-1.42 0zm22.4 12.19l-3.2 0 -1.27 -3.34 -5.88 0 -1.22 3.34 -3.15 0 5.7 -14.67 3.14 0 5.88 14.67zm-5.43 -5.82l-2.04 -5.43 -1.98 5.43 4.02 0zm13.06 1.07l2.89 -0.29c0.17,0.97 0.52,1.67 1.05,2.13 0.53,0.45 1.24,0.68 2.14,0.68 0.95,0 1.67,-0.2 2.15,-0.61 0.48,-0.4 0.73,-0.87 0.73,-1.41 0,-0.35 -0.11,-0.64 -0.31,-0.89 -0.2,-0.24 -0.55,-0.45 -1.06,-0.63 -0.35,-0.12 -1.13,-0.34 -2.36,-0.64 -1.58,-0.4 -2.69,-0.89 -3.33,-1.46 -0.9,-0.81 -1.35,-1.8 -1.35,-2.97 0,-0.74 0.21,-1.45 0.63,-2.1 0.43,-0.65 1.04,-1.15 1.83,-1.49 0.8,-0.34 1.75,-0.51 2.88,-0.51 1.84,0 3.22,0.4 4.15,1.22 0.93,0.82 1.41,1.9 1.46,3.27l-2.97 0.1c-0.13,-0.76 -0.4,-1.3 -0.81,-1.63 -0.42,-0.33 -1.04,-0.5 -1.87,-0.5 -0.85,0 -1.52,0.18 -2,0.53 -0.31,0.23 -0.47,0.53 -0.47,0.92 0,0.34 0.15,0.64 0.44,0.89 0.37,0.32 1.28,0.64 2.72,0.99 1.44,0.33 2.5,0.69 3.19,1.05 0.69,0.37 1.23,0.86 1.61,1.49 0.39,0.64 0.59,1.42 0.59,2.34 0,0.84 -0.23,1.63 -0.7,2.37 -0.47,0.73 -1.13,1.28 -1.98,1.63 -0.86,0.36 -1.92,0.54 -3.2,0.54 -1.85,0 -3.28,-0.43 -4.27,-1.29 -0.99,-0.85 -1.59,-2.1 -1.78,-3.73zm-59.96 23.81l0 -14.68 4.76 0c1.8,0 2.97,0.07 3.51,0.22 0.84,0.22 1.55,0.7 2.12,1.44 0.56,0.73 0.85,1.69 0.85,2.86 0,0.9 -0.17,1.65 -0.49,2.27 -0.33,0.61 -0.74,1.09 -1.25,1.45 -0.5,0.34 -1.01,0.58 -1.53,0.69 -0.71,0.14 -1.73,0.21 -3.07,0.21l-1.92 0 0 5.54 -2.98 0zm2.98 -12.2l0 4.18 1.61 0c1.17,0 1.94,-0.08 2.33,-0.23 0.4,-0.16 0.71,-0.39 0.93,-0.73 0.22,-0.32 0.33,-0.7 0.33,-1.14 0,-0.54 -0.15,-0.98 -0.47,-1.33 -0.31,-0.34 -0.7,-0.56 -1.18,-0.65 -0.36,-0.07 -1.06,-0.1 -2.13,-0.1l-1.42 0zm10.59 12.2l0 -14.68 2.98 0 0 14.68 -2.98 0zm4.51 0l0 -2.67 7.73 -9.53 -6.85 0 0 -2.48 10.74 0 0 2.29 -8.03 9.9 8.34 0 0 2.49 -11.93 0zm12.52 0l0 -2.67 7.74 -9.53 -6.86 0 0 -2.48 10.74 0 0 2.29 -8.03 9.9 8.34 0 0 2.49 -11.93 0zm27.03 0l-3.2 0 -1.26 -3.35 -5.89 0 -1.22 3.35 -3.14 0 5.7 -14.68 3.13 0 5.88 14.68zm-5.43 -5.83l-2.04 -5.43 -1.98 5.43 4.02 0z" />
                                <path class="fil10"
                                    d="M503.34 558.61l0 -2.16 6.29 -7.75 -5.58 0 0 -2.02 8.74 0 0 1.87 -6.54 8.05 6.79 0 0 2.01 -9.7 0zm61.27 -9.7l-1.44 0 -2.25 -2.43 2.55 0 1.14 2.43zm-50.04 9.7l0 -11.93 2.41 0 0 4.7 4.7 0 0 -4.7 2.42 0 0 11.93 -2.42 0 0 -5.22 -4.7 0 0 5.22 -2.41 0zm12.03 0l0 -11.93 8.84 0 0 2.02 -6.42 0 0 2.65 5.97 0 0 2.01 -5.97 0 0 3.24 6.65 0 0 2.01 -9.07 0zm11.15 0l0 -11.93 2.42 0 0 5.28 4.87 -5.28 3.24 0 -4.51 4.65 4.74 7.28 -3.12 0 -3.28 -5.6 -1.94 1.99 0 3.61 -2.42 0zm22.75 0l-2.6 0 -1.03 -2.71 -4.79 0 -0.99 2.71 -2.55 0 4.63 -11.93 2.55 0 4.78 11.93zm-4.41 -4.73l-1.66 -4.42 -1.61 4.42 3.27 0zm10.62 0.86l2.35 -0.23c0.14,0.79 0.42,1.36 0.85,1.73 0.43,0.37 1.01,0.56 1.74,0.56 0.77,0 1.36,-0.17 1.75,-0.5 0.39,-0.32 0.59,-0.71 0.59,-1.15 0,-0.28 -0.08,-0.52 -0.25,-0.72 -0.16,-0.2 -0.45,-0.37 -0.86,-0.51 -0.28,-0.1 -0.92,-0.27 -1.92,-0.53 -1.29,-0.32 -2.19,-0.71 -2.71,-1.18 -0.73,-0.66 -1.09,-1.46 -1.09,-2.41 0,-0.61 0.17,-1.18 0.51,-1.71 0.34,-0.53 0.84,-0.93 1.49,-1.21 0.64,-0.28 1.42,-0.42 2.34,-0.42 1.49,0 2.61,0.33 3.37,1 0.75,0.66 1.15,1.54 1.19,2.65l-2.42 0.09c-0.1,-0.62 -0.32,-1.06 -0.66,-1.33 -0.34,-0.27 -0.84,-0.41 -1.51,-0.41 -0.7,0 -1.24,0.15 -1.63,0.43 -0.26,0.19 -0.38,0.44 -0.38,0.75 0,0.28 0.11,0.52 0.35,0.72 0.31,0.26 1.04,0.53 2.21,0.81 1.17,0.27 2.04,0.56 2.59,0.86 0.57,0.29 1,0.7 1.32,1.21 0.32,0.51 0.48,1.15 0.48,1.9 0,0.68 -0.19,1.32 -0.57,1.92 -0.38,0.6 -0.92,1.04 -1.62,1.33 -0.69,0.29 -1.56,0.44 -2.59,0.44 -1.51,0 -2.67,-0.35 -3.48,-1.05 -0.81,-0.69 -1.29,-1.7 -1.44,-3.04zm-39.26 19.36l0 -11.93 2.41 0 0 11.93 -2.41 0zm12.34 -4.4l2.34 0.72c-0.36,1.32 -0.96,2.29 -1.79,2.93 -0.84,0.64 -1.89,0.95 -3.17,0.95 -1.59,0 -2.89,-0.54 -3.91,-1.62 -1.02,-1.08 -1.53,-2.56 -1.53,-4.44 0,-1.99 0.51,-3.54 1.54,-4.64 1.02,-1.1 2.37,-1.65 4.04,-1.65 1.46,0 2.65,0.44 3.56,1.3 0.54,0.51 0.95,1.25 1.22,2.2l-2.38 0.57c-0.14,-0.62 -0.44,-1.1 -0.88,-1.46 -0.45,-0.36 -1,-0.54 -1.64,-0.54 -0.88,0 -1.6,0.32 -2.15,0.95 -0.55,0.64 -0.83,1.67 -0.83,3.09 0,1.5 0.27,2.58 0.81,3.22 0.55,0.64 1.25,0.96 2.12,0.96 0.65,0 1.2,-0.2 1.66,-0.61 0.46,-0.41 0.79,-1.05 0.99,-1.93zm4.41 4.4l0 -11.93 8.83 0 0 2.02 -6.42 0 0 2.65 5.97 0 0 2.01 -5.97 0 0 3.24 6.65 0 0 2.01 -9.06 0z" />
                                <path class="fil10"
                                    d="M757.54 201.94l0 -14.67 6.24 0c1.57,0 2.71,0.13 3.42,0.39 0.72,0.27 1.29,0.73 1.71,1.41 0.43,0.67 0.64,1.44 0.64,2.31 0,1.1 -0.32,2.01 -0.96,2.73 -0.65,0.72 -1.61,1.17 -2.9,1.36 0.64,0.37 1.17,0.78 1.58,1.23 0.42,0.44 0.98,1.24 1.68,2.38l1.79 2.86 -3.54 0 -2.12 -3.2c-0.77,-1.14 -1.29,-1.86 -1.57,-2.15 -0.28,-0.3 -0.58,-0.5 -0.89,-0.61 -0.32,-0.11 -0.82,-0.17 -1.5,-0.17l-0.61 0 0 6.13 -2.97 0zm2.97 -8.46l2.2 0c1.42,0 2.3,-0.06 2.66,-0.18 0.35,-0.12 0.63,-0.33 0.83,-0.62 0.2,-0.3 0.3,-0.67 0.3,-1.11 0,-0.49 -0.13,-0.89 -0.4,-1.2 -0.26,-0.3 -0.63,-0.49 -1.11,-0.57 -0.24,-0.04 -0.96,-0.05 -2.16,-0.05l-2.32 0 0 3.73zm11.84 8.46l0 -14.67 10.86 0 0 2.48 -7.89 0 0 3.26 7.34 0 0 2.48 -7.34 0 0 3.97 8.18 0 0 2.48 -11.15 0zm13.67 -14.67l5.4 0c1.22,0 2.15,0.09 2.79,0.28 0.86,0.25 1.6,0.7 2.21,1.35 0.61,0.65 1.08,1.44 1.4,2.38 0.32,0.93 0.48,2.09 0.48,3.47 0,1.2 -0.15,2.24 -0.45,3.12 -0.37,1.07 -0.89,1.93 -1.57,2.59 -0.52,0.5 -1.21,0.89 -2.08,1.17 -0.65,0.21 -1.52,0.31 -2.62,0.31l-5.56 0 0 -14.67zm2.97 2.48l0 9.71 2.2 0c0.83,0 1.42,-0.04 1.79,-0.14 0.48,-0.12 0.87,-0.32 1.19,-0.61 0.32,-0.28 0.57,-0.76 0.77,-1.41 0.2,-0.66 0.3,-1.56 0.3,-2.69 0,-1.14 -0.1,-2 -0.3,-2.61 -0.2,-0.61 -0.48,-1.08 -0.84,-1.42 -0.35,-0.34 -0.81,-0.57 -1.36,-0.69 -0.41,-0.1 -1.22,-0.14 -2.42,-0.14l-1.33 0zm13.85 12.19l-3.45 -14.67 3.05 0 2.18 10.08 2.68 -10.08 3.53 0 2.57 10.25 2.23 -10.25 2.98 0 -3.53 14.67 -3.18 0 -2.89 -10.97 -2.91 10.97 -3.26 0zm29.42 0l-3.2 0 -1.27 -3.34 -5.89 0 -1.22 3.34 -3.14 0 5.7 -14.67 3.14 0 5.88 14.67zm-5.43 -5.82l-2.04 -5.43 -1.99 5.43 4.03 0zm8.98 5.82l0 -6.17 -5.38 -8.5 3.47 0 3.47 5.81 3.38 -5.81 3.41 0 -5.38 8.52 0 6.15 -2.97 0z" />
                                <path class="fil10"
                                    d="M892.46 191.43l5.87 0c1.17,0 2.03,0.05 2.6,0.14 0.57,0.1 1.08,0.3 1.53,0.61 0.46,0.31 0.83,0.71 1.13,1.22 0.3,0.51 0.45,1.09 0.45,1.72 0,0.68 -0.18,1.31 -0.55,1.88 -0.37,0.58 -0.87,1 -1.5,1.29 0.89,0.26 1.57,0.71 2.05,1.34 0.48,0.62 0.72,1.36 0.72,2.21 0,0.67 -0.15,1.32 -0.46,1.95 -0.31,0.64 -0.74,1.14 -1.28,1.52 -0.53,0.38 -1.2,0.61 -1.99,0.7 -0.49,0.05 -1.68,0.08 -3.57,0.1l-5 0 0 -14.68zm2.97 2.44l0 3.38 1.94 0c1.16,0 1.87,-0.02 2.15,-0.05 0.51,-0.06 0.91,-0.23 1.2,-0.52 0.29,-0.29 0.43,-0.67 0.43,-1.14 0,-0.46 -0.12,-0.82 -0.37,-1.11 -0.25,-0.28 -0.62,-0.45 -1.12,-0.51 -0.29,-0.03 -1.13,-0.05 -2.52,-0.05l-1.71 0zm0 5.82l0 3.94 2.75 0c1.07,0 1.75,-0.03 2.03,-0.09 0.44,-0.08 0.8,-0.28 1.08,-0.59 0.28,-0.31 0.42,-0.73 0.42,-1.25 0,-0.44 -0.11,-0.82 -0.32,-1.12 -0.22,-0.31 -0.53,-0.54 -0.93,-0.68 -0.4,-0.14 -1.28,-0.21 -2.63,-0.21l-2.4 0zm11.83 -8.26l2.98 0 0 7.95c0,1.27 0.03,2.08 0.11,2.46 0.12,0.6 0.42,1.08 0.89,1.45 0.48,0.36 1.12,0.54 1.94,0.54 0.83,0 1.46,-0.17 1.88,-0.51 0.43,-0.35 0.68,-0.77 0.77,-1.27 0.08,-0.5 0.13,-1.33 0.13,-2.5l0 -8.12 2.97 0 0 7.72c0,1.76 -0.08,3.01 -0.24,3.74 -0.16,0.72 -0.45,1.34 -0.89,1.84 -0.42,0.5 -1,0.9 -1.71,1.2 -0.73,0.29 -1.66,0.44 -2.82,0.44 -1.4,0 -2.46,-0.16 -3.18,-0.48 -0.72,-0.33 -1.29,-0.75 -1.71,-1.27 -0.42,-0.51 -0.69,-1.05 -0.82,-1.63 -0.2,-0.84 -0.3,-2.08 -0.3,-3.72l0 -7.84zm14.81 14.68l0 -14.68 6.24 0c1.57,0 2.71,0.13 3.42,0.4 0.71,0.26 1.28,0.73 1.71,1.4 0.42,0.68 0.64,1.45 0.64,2.31 0,1.11 -0.32,2.02 -0.97,2.73 -0.64,0.72 -1.61,1.17 -2.89,1.36 0.64,0.37 1.16,0.78 1.58,1.23 0.41,0.45 0.97,1.24 1.68,2.38l1.79 2.87 -3.54 0 -2.13 -3.21c-0.76,-1.13 -1.28,-1.85 -1.57,-2.15 -0.28,-0.29 -0.58,-0.5 -0.89,-0.61 -0.32,-0.11 -0.82,-0.16 -1.5,-0.16l-0.6 0 0 6.13 -2.97 0zm2.97 -8.47l2.19 0c1.42,0 2.31,-0.06 2.66,-0.18 0.36,-0.12 0.64,-0.33 0.84,-0.62 0.2,-0.3 0.3,-0.66 0.3,-1.11 0,-0.49 -0.14,-0.89 -0.4,-1.19 -0.26,-0.31 -0.64,-0.5 -1.11,-0.58 -0.25,-0.03 -0.97,-0.05 -2.17,-0.05l-2.31 0 0 3.73zm18.66 3.08l0 -2.48 6.37 0 0 5.85c-0.62,0.61 -1.52,1.14 -2.69,1.6 -1.18,0.45 -2.37,0.68 -3.58,0.68 -1.54,0 -2.87,-0.32 -4.01,-0.96 -1.14,-0.65 -2,-1.58 -2.57,-2.77 -0.58,-1.2 -0.86,-2.51 -0.86,-3.92 0,-1.53 0.32,-2.89 0.96,-4.08 0.64,-1.19 1.58,-2.11 2.81,-2.75 0.94,-0.48 2.11,-0.73 3.51,-0.73 1.82,0 3.25,0.39 4.27,1.15 1.02,0.77 1.68,1.83 1.98,3.18l-2.96 0.55c-0.2,-0.72 -0.59,-1.29 -1.16,-1.71 -0.57,-0.42 -1.28,-0.62 -2.13,-0.62 -1.29,0 -2.32,0.41 -3.08,1.23 -0.77,0.82 -1.15,2.04 -1.15,3.66 0,1.74 0.39,3.05 1.16,3.92 0.78,0.87 1.79,1.31 3.04,1.31 0.62,0 1.24,-0.12 1.86,-0.36 0.63,-0.25 1.16,-0.54 1.61,-0.89l0 -1.86 -3.38 0zm9.11 5.39l0 -14.68 10.87 0 0 2.48 -7.89 0 0 3.26 7.33 0 0 2.48 -7.33 0 0 3.98 8.17 0 0 2.48 -11.15 0zm13.68 0l0 -14.68 6.24 0c1.57,0 2.71,0.13 3.42,0.4 0.71,0.26 1.28,0.73 1.71,1.4 0.42,0.68 0.64,1.45 0.64,2.31 0,1.11 -0.32,2.02 -0.97,2.73 -0.64,0.72 -1.61,1.17 -2.89,1.36 0.64,0.37 1.16,0.78 1.58,1.23 0.41,0.45 0.97,1.24 1.68,2.38l1.79 2.87 -3.55 0 -2.12 -3.21c-0.76,-1.13 -1.29,-1.85 -1.57,-2.15 -0.28,-0.29 -0.58,-0.5 -0.89,-0.61 -0.32,-0.11 -0.82,-0.16 -1.5,-0.16l-0.6 0 0 6.13 -2.97 0zm2.97 -8.47l2.19 0c1.42,0 2.31,-0.06 2.66,-0.18 0.36,-0.12 0.64,-0.33 0.83,-0.62 0.2,-0.3 0.3,-0.66 0.3,-1.11 0,-0.49 -0.13,-0.89 -0.39,-1.19 -0.26,-0.31 -0.64,-0.5 -1.12,-0.58 -0.24,-0.03 -0.96,-0.05 -2.16,-0.05l-2.31 0 0 3.73zm-53.77 27.52l0 -12.2 -4.34 0 0 -2.48 11.64 0 0 2.48 -4.32 0 0 12.2 -2.98 0zm9.12 0l0 -14.68 2.98 0 0 14.68 -2.98 0zm5.76 0l0 -14.68 4.45 0 2.63 10.01 2.6 -10.01 4.46 0 0 14.68 -2.74 0 -0.01 -11.55 -2.9 11.55 -2.85 0 -2.88 -11.55 -0.01 11.55 -2.75 0zm17.12 0l0 -14.68 10.86 0 0 2.48 -7.89 0 0 3.26 7.34 0 0 2.48 -7.34 0 0 3.98 8.18 0 0 2.48 -11.15 0z" />
                                <g id="_2096424372640">
                                    <polygon class="fil5 str0"
                                        points="571.91,628.44 504.57,628.44 504.57,695.79 571.91,695.79 " />
                                    <g>
                                        <polygon class="fil2" points="520.73,649.7 528,636.59 535.27,649.7 " />
                                        <polygon class="fil2" points="541.22,636.59 548.49,649.7 555.76,636.59 " />
                                        <path class="fil2"
                                            d="M527.62 653.38c1.73,0 3.13,1.4 3.13,3.13 0,1.73 -1.4,3.13 -3.13,3.13 -1.73,0 -3.13,-1.4 -3.13,-3.13 0,-1.73 1.4,-3.13 3.13,-3.13z" />
                                        <path class="fil2"
                                            d="M523.56 660.52l8.17 0c1.48,0 2.7,1.21 2.7,2.7l0 1.39 0 4.82 0 3.52c0,0.66 -0.54,1.2 -1.21,1.2l0 0c-0.66,0 -1.2,-0.54 -1.2,-1.2l0 -0.83 -0.02 0 0 -7.12c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.31 0 1.83 0 0.08 0 3.43 0 10.42c0,0.86 -0.7,1.56 -1.56,1.56l0 0c-0.86,0 -1.57,-0.7 -1.57,-1.56l0 -6.96 0 -5.4c0,-0.24 -0.19,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.38 0 7.07c0,0.81 -0.66,1.47 -1.47,1.47l0 0c-0.81,0 -1.48,-0.66 -1.48,-1.47l0 -10.51 0 -3.43 0 -0.08 0 -1.92 0 -5.22c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 7.12 -0.01 0 0 0.83c0,0.66 -0.55,1.2 -1.21,1.2l0 0c-0.66,0 -1.21,-0.54 -1.21,-1.2l0 -3.52 0 -4.82 0 -1.39c0,-1.49 1.22,-2.7 2.71,-2.7z" />
                                        <path class="fil2"
                                            d="M548.51 653.38c1.73,0 3.13,1.4 3.13,3.13 0,1.73 -1.4,3.13 -3.13,3.13 -1.72,0 -3.13,-1.4 -3.13,-3.13 0,-1.73 1.41,-3.13 3.13,-3.13z" />
                                        <path class="fil2"
                                            d="M544.45 660.52l8.17 0c1.48,0 2.7,1.21 2.7,2.7l0 1.39 0 4.82 0 3.52c0,0.66 -0.54,1.2 -1.2,1.2l-0.01 0c-0.66,0 -1.2,-0.54 -1.2,-1.2l0 -0.83 -0.02 0 0 -7.12c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 5.31 0 1.83 0 0.08 0 3.43 0 10.42c0,0.86 -0.7,1.56 -1.56,1.56l0 0c-0.86,0 -1.57,-0.7 -1.57,-1.56l0 -6.96 0 -5.4c0,-0.24 -0.19,-0.44 -0.43,-0.44l0 0c-0.25,0 -0.44,0.2 -0.44,0.44l0 5.38 0 7.07c0,0.81 -0.67,1.47 -1.48,1.47l0 0c-0.81,0 -1.48,-0.66 -1.48,-1.47l0 -10.51 0 -3.43 0 -0.08 0 -1.92 0 -5.22c0,-0.24 -0.2,-0.44 -0.44,-0.44l0 0c-0.24,0 -0.44,0.2 -0.44,0.44l0 7.12 -0.01 0 0 0.83c0,0.66 -0.54,1.2 -1.21,1.2l0 0c-0.66,0 -1.21,-0.54 -1.21,-1.2l0 -3.52 0 -4.82 0 -1.39c0,-1.49 1.22,-2.7 2.71,-2.7z" />
                                    </g>
                                </g>
                                <g id="_2096424371040">
                                    <path class="fil2"
                                        d="M1141.26 732.37c2.38,0 4.31,1.93 4.31,4.31 0,2.39 -1.93,4.32 -4.31,4.32 -2.39,0 -4.32,-1.93 -4.32,-4.32 0,-2.38 1.93,-4.31 4.32,-4.31z" />
                                    <path class="fil2"
                                        d="M1135.65 742.21l11.27 0c2.05,0 3.73,1.68 3.73,3.73l0 1.91 0 6.66 0 4.85c0,0.91 -0.75,1.66 -1.67,1.66l0 0c-0.91,0 -1.66,-0.75 -1.66,-1.66l0 -1.15 -0.02 0.01 0 -9.82c0,-0.33 -0.28,-0.61 -0.61,-0.61l0 0c-0.33,0 -0.6,0.28 -0.6,0.61l0 7.31 0 2.53 0 0.12 0 4.72 0 14.37c0,1.19 -0.98,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16l0 -9.6 0 -7.44c0,-0.33 -0.27,-0.6 -0.61,-0.6l0 0c-0.33,0 -0.6,0.27 -0.6,0.6l0 7.41 0 9.75c0,1.12 -0.92,2.04 -2.04,2.04l0 0c-1.12,0 -2.04,-0.92 -2.04,-2.04l0 -14.49 0 -4.72 0 -0.12 0 -2.65 0 -7.19c0,-0.33 -0.27,-0.61 -0.6,-0.61l0 0c-0.34,0 -0.61,0.28 -0.61,0.61l0 9.82 -0.02 -0.01 0 1.15c0,0.91 -0.75,1.66 -1.66,1.66l0 0c-0.92,0 -1.67,-0.75 -1.67,-1.66l0 -4.85 0 -6.66 0 -1.91c0,-2.05 1.68,-3.73 3.73,-3.73z" />
                                </g>
                                <g id="_2096424371936">
                                    <path class="fil2"
                                        d="M1141.38 665.02c2.38,0 4.31,1.93 4.31,4.32 0,2.38 -1.93,4.31 -4.31,4.31 -2.39,0 -4.32,-1.93 -4.32,-4.31 0,-2.39 1.93,-4.32 4.32,-4.32z" />
                                    <path class="fil2"
                                        d="M1141.28 674.86c1.98,0 3.96,0 5.94,0 1.24,0 2.29,0.85 2.59,2l0 0 0.86 3.32 0.16 0.63 1.13 4.4 0.16 0.62 1.04 4.08c0.23,0.88 -0.31,1.79 -1.19,2.02l0 0c-0.89,0.23 -1.8,-0.31 -2.03,-1.2 -0.35,-1.35 -0.71,-2.69 -1.07,-4.06l-1.45 -5.65 -0.01 -0.04c-0.04,-0.3 -0.29,-0.53 -0.6,-0.53l0 0c-0.4,0 -0.6,0.31 -0.6,0.65 1.39,5.38 2.79,10.76 4.18,16.15 -1.39,0 -2.79,0 -4.18,0l0 12.85c0,1.19 -0.98,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16 0,-4.27 0,-8.54 0,-12.82l0 -0.03 0 0c-0.02,-0.32 -0.29,-0.57 -0.61,-0.57 -0.32,0 -0.58,0.25 -0.6,0.57l0 0 0 0.03c0,4.28 0,8.55 0,12.82 0,1.19 -0.97,2.16 -2.16,2.16l0 0c-1.19,0 -2.16,-0.97 -2.16,-2.16l0 -12.85c-1.39,0 -2.79,0 -4.18,0 1.37,-5.31 2.75,-10.61 4.12,-15.91 0.03,-0.1 0.07,-0.21 0.06,-0.31 -0.01,-0.12 -0.05,-0.23 -0.11,-0.32 -0.18,-0.3 -0.6,-0.34 -0.87,-0.13 -0.12,0.09 -0.2,0.23 -0.22,0.4l-0.01 0.04 -1.45 5.65c-0.36,1.37 -0.72,2.71 -1.07,4.06 -0.23,0.89 -1.14,1.43 -2.03,1.2l0 0c-0.89,-0.23 -1.42,-1.14 -1.2,-2.02l1.05 -4.08 0.16 -0.62 1.13 -4.4 0.16 -0.63 0.85 -3.32 0.01 0c0.29,-1.15 1.34,-2 2.59,-2 1.98,0 3.95,0 5.93,0z" />
                                </g>
                                <g id="_2096424366592">
                                    <path class="fil11"
                                        d="M806.88 940.56l-16.02 16.02 -6.42 0c-0.58,0 -1.14,0.12 -1.65,0.33 -0.54,0.22 -1.02,0.54 -1.42,0.95 -0.4,0.4 -0.73,0.88 -0.95,1.41 -0.21,0.51 -0.33,1.07 -0.33,1.66 0,0.59 0.12,1.15 0.33,1.66 0.22,0.53 0.55,1.01 0.95,1.41 0.4,0.41 0.88,0.73 1.42,0.95 0.51,0.21 1.07,0.33 1.65,0.33l8.24 0c0.3,0 0.59,-0.03 0.87,-0.09 0.29,-0.05 0.57,-0.14 0.84,-0.26 0.27,-0.12 0.53,-0.26 0.77,-0.43 0.24,-0.17 0.46,-0.36 0.67,-0.58l0.62 -0.65 0.02 0.01 15.27 -15.26 6.42 0c1.19,0 2.28,-0.49 3.07,-1.28 0.79,-0.79 1.28,-1.88 1.28,-3.08 0,-1.19 -0.49,-2.28 -1.28,-3.07 -0.79,-0.79 -1.88,-1.28 -3.07,-1.28l-8.24 0c-0.29,0 -0.57,0.03 -0.84,0.08 -0.28,0.06 -0.54,0.14 -0.8,0.24 -0.26,0.11 -0.51,0.24 -0.74,0.4 -0.21,0.14 -0.41,0.29 -0.59,0.47l-0.07 0.06z" />
                                    <path class="fil11"
                                        d="M793.88 956.76l0 -15.19c0,-1.69 1.38,-3.06 3.06,-3.06l0.01 0c1.68,0 3.06,1.37 3.06,3.06l0 15.19c0,1.69 -1.38,3.07 -3.06,3.07l-0.01 0c-1.68,0 -3.06,-1.38 -3.06,-3.07z" />
                                    <path class="fil11"
                                        d="M796.94 931.03c1.7,0 3.07,1.37 3.07,3.07 0,1.69 -1.37,3.06 -3.07,3.06 -1.69,0 -3.07,-1.37 -3.07,-3.06 0,-1.7 1.38,-3.07 3.07,-3.07z" />
                                    <g>
                                        <polygon class="fil11" points="782.19,911.68 790.95,895.9 799.71,911.68 " />
                                        <polygon class="fil11" points="802.89,895.9 811.65,911.68 820.41,895.9 " />
                                    </g>
                                    <path class="fil11"
                                        d="M826.11 920.47l-49.62 0c-0.45,0 -0.88,0.09 -1.27,0.25 -0.4,0.17 -0.77,0.42 -1.07,0.72 -0.31,0.31 -0.56,0.68 -0.73,1.08 -0.16,0.39 -0.25,0.82 -0.25,1.26l0 49.63c0,0.45 0.09,0.87 0.25,1.26 0.17,0.41 0.42,0.77 0.73,1.08 0.3,0.31 0.67,0.56 1.07,0.72 0.39,0.17 0.82,0.25 1.27,0.25l49.62 0c0.45,0 0.88,-0.08 1.27,-0.25 0.4,-0.16 0.77,-0.41 1.07,-0.72 0.31,-0.31 0.56,-0.67 0.73,-1.08 0.16,-0.39 0.25,-0.81 0.25,-1.26l0 -49.63c0,-0.44 -0.09,-0.87 -0.25,-1.26 -0.17,-0.4 -0.42,-0.77 -0.73,-1.08 -0.3,-0.3 -0.67,-0.55 -1.07,-0.72 -0.39,-0.16 -0.82,-0.25 -1.27,-0.25zm-48.56 3.51l48.42 0 0 49.23 -49.34 0 0 -49.23 0.92 0z" />
                                </g>
                            </g>
                        </svg>

                        <!-- map3 end -->
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
                <a href="{{ route('sales.page') }}"
                    class="discounts__btn def-btn">@lang('interface.buttons.allSales')</a>
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
                <a href="{{ route('news.all.page') }}"
                    class="development__btn def-btn">@lang('interface.buttons.allEvents')</a>
            </div>
        </div>

        <div class="row">

            <div class="col-12 wow fadeInUp">
                <div class="developments__text">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type.</p>
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

                    <div class="developments-slide__top"
                        style="background-image: url({{ asset('storage/'.$newsItem->image) }});">
                        <div class="developments-percent" style="{{ $styles[2] ?: '' }}">
                            {{ $newsItem->month }} <span class="percent__item">{{ $newsItem->day }}</span>
                        </div>
                    </div>

                    <div class="developments-slide__bottom hvr-shutter-out-horizontal">
                        <p class="developments-slide__text">{{ $newsItem->description }}</p>

                        <a href="{{ route('news.one.page', $newsItem) }}"
                            class="developments-slide__btn">@lang('interface.buttons.more')...</a>
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