<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Baizaar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

  <link rel="stylesheet" href="{{asset('assets/css/superfish.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/hamburgers.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/hover.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
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
        <button><img src="{{asset('assets/images/loupe-white.png')}}" alt="loupe"></button>
      </div>

    </div>

    <!-- hamburger menu -->
    <div class="hamburger-menu" id="hamburger-menu">

      <ul class="hamburger-menu__item">
        <li><a href="#">{{$sec_cat[0]->name}}</a></li>
        <li><a href="#">{{$sec_cat[1]->name}}</a></li>
        <li><a href="#">{{$sec_cat[2]->name}}</a></li>
        <li><a href="#">{{$sec_cat[3]->name}}</a></li>
        <li><a href="#">{{$sec_cat[4]->name}}</a></li>
        <li><a href="#">{{$sec_cat[5]->name}}</a></li>
        <li><a href="#">{{$sec_cat[6]->name}}</a></li>
        <li><a href="#">{{$sec_cat[7]->name}}</a></li>
        <li><a href="#">{{$sec_cat[8]->name}}</a></li>
        <li><a href="#">{{$sec_cat[9]->name}}</a></li>
      </ul>

      <div class="hamburger-menu__bottom">

        <div class="hamburger-menu__schedule hamburger-menu__flex">
          <div class="schedule__img hamburger-left__img">
            <img src="{{asset('assets/images/menu-clock.svg')}}" alt="">
          </div>

          <div class="schedule__text hamburger-right__text">
            <h4>График работы</h4>
            <p>с 10:00 до 22:00</p>
          </div>
        </div>

        <div class="hamburger-menu__howtoget hamburger-menu__flex">
          <div class="howtoget__img hamburger-left__img">
            <img src="{{asset('assets/images/menu-location.svg')}}" alt="">
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
          <img src="{{asset('assets/images/close-button.svg')}}" alt="Закрыть">
        </a>

        <div class="mobile-logo">
          <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
        </div>

        <ul class="mobile-menu">
          <li><a href="#">{{$categories[0]['name']}}</a></li>
          <li><a href="#">{{$categories[1]['name']}}</a></li>
          <li><a href="#">{{$categories[2]['name']}}</a></li>
          <li><a href="#">{{$categories[3]['name']}}</a></li>
          <li><a href="#">{{$categories[4]['name']}}</a></li>
          <li><a href="#">{{$categories[5]['name']}}</a></li>
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
          <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
        </div>

        <ul class="menu" id="main-menu">
          <li>
            <a href="#my-menu">{{$categories[0]['name']}}</a>
            <!-- open menu -->
            <ul class="open-menu__block">

              <div class="open-menu__wrap" id="my-menu">

                <!-- left -->

                <div class="open-menu__left open-menu__link">
                  @for($i = 0;$i < count($subcategories)/2;$i++)
                  <div class="open-menu__list">
                    <h3 class="open-menu__title">{{$subcategories[$i]->name}}</h3>
                    @foreach($shops as $k=>$shop)

                      @if($shop['subcategory_id'] == $subcategories[$i]->id)
                    
                    <li>

                      <a href="#open-menu__tab-{{$shop['id']}}">{{$shop['name']}}</a>
                      
                    </li>
                    @endif
                    @endforeach
                  </div>

                 @endfor
                </div>


                


                <!-- left end -->

                <!-- center -->
                 
                <div class="open-menu__center open-menu__link">
                  @for($i = count($subcategories)/2;$i < count($subcategories); $i++)
                  <div class="open-menu__list">
                    <h3 class="open-menu__title">{{$subcategories[$i]->name}}</h3>
                    @foreach($shops as $k=>$shop)

                      @if($shop['subcategory_id'] == $subcategories[$i]->id)
                    
                    <li>
                      <a href="#open-menu__tab-{{$shop['id']}}">{{$shop['name']}}</a>
                    </li>
                    @endif
                    @endforeach
                  </div>
                @endfor
                 
                </div>
                <!-- center end -->

                <!-- right 1 -->
                @foreach($shops as $k=>$shop)

                  
                <div class="open-menu__tab wow" id="open-menu__tab-{{$shop['id']}}">

                  <div class="open-menu__right open-menu__right__active">
                    <div class="discount-img__wrap">
                      <div class="discount-img__top">
                        <img style="width: 500px;height: 300px" src="{{ Voyager::image($shop['image1']) }}" alt="">

                      </div>

                      <div class="discount-img__bottom">
                        @if(isset(json_decode($shop['image2'])[0]))
                        <img src="{{ Voyager::image(json_decode($shop['image2'])[0]) }}" alt="">
                        @endif
                        @if(isset(json_decode($shop['image2'])[1]))
                        <img src="{{ Voyager::image(json_decode($shop['image2'])[1]) }}" alt="">
                         @endif
                        @if(isset(json_decode($shop['image2'])[2]))
                        <img src="{{ Voyager::image(json_decode($shop['image2'])[2]) }}" alt="">
                         @endif
                      </div>
                    </div>

                    <div class="right-contacts">
                      <h3 class="right-contacts__title">Контакты</h3>
                      <p>Магазин: <span class="black-bold">{{$shop['name']}}</span></p>
                      <p>Часы работы: <span class="black-bold">{{$shop['work_time']}}</span></p>
                      <p>Телефон: <span class="black-bold">{{$shop['mobile']}}</span></p>
                      <p>Сайт: <span class="black-bold">{{$shop['site']}}</span></p>
                    </div>
                  </div>

                </div>
                @endforeach
                <!-- right 1 end -->

                

              

              </div>

            </ul>
            <!-- open menu end -->
          </li>
          <li><a href="#">{{$categories[1]['name']}}</a></li>
          <li><a href="#">{{$categories[2]['name']}}</a></li>
          <li><a href="#">{{$categories[3]['name']}}</a></li>
          <li><a href="#">{{$categories[4]['name']}}</a></li>
          <li><a href="#">{{$categories[5]['name']}}</a></li>
        </ul>

        <div class="search">
          <a href="#search__item"><img src="{{asset('assets/images/loupe.png')}}" alt="Поиск"></a>
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

  <!-- Carusel -->

  <div class="container new1 wow fadeInLeft">

    <div class="row">

      <div class="col-sm-12">

        <ul class="p-link">
           <li><a class="home" href="{{route('home')}}">Главная</a></li>
           <li>/</li>
           <li><a href="#">{{$news->name}}</a></li>
        </ul> 

        <p class="title">Добро пожаловать в {{$news->name}}</p>

        <span class="line"></span>

        @if(isset($news->carusel))

        <div class="dot-num">

           <div class="slider">1/{{count(json_decode($news->carusel))}}</div> 
          
        </div>

        <div id="sync1" class="owl-carousel owl-theme">
          
           @foreach(json_decode($news->carusel) as $k=>$new)
          
            <div class="item">
                <img style="width: 1200px;height: 540px" src="{{ Voyager::image($new) }}">
            </div>
          
          @endforeach

         </div>

         <div id="sync2" class="owl-carousel owl-theme">
            
            @foreach(json_decode($news->carusel) as $k=>$new)
          
            <div class="item">
                <img style="height: 150px" src="{{ Voyager::image($new) }}">
            </div>
          
          @endforeach
           

         </div>

@endif
<!-- End Carusel -->

<!-- VIDEO OR IMAGE -->
  @if(isset($news->video))
   <div class="container new3">

  <div class="row">

    <div class="col-sm-12">

     

      <div class="box wow fadeInLeft">
        
        <div class="box-video">

          <img src="{{ Voyager::image($news->video) }}">
          <a align="center" href="#">Посмотрите видео о ТРЦ BAIZAAR,<br>если не хотите много читать</a>

        </div>

  

      </div>

    </div>
    
  </div>
  
</div>

  @endif
<!-- END OF VIDEO AND IMAGE -->

  <span class="line"></span>

<!-- TEXT -->

  @if(isset($news->text))
      <div class="container new3">

        <div class="row">

          <div class="col-sm-12">


            <div class="main-text">

               <p id="text1" class="wow fadeInLeft">{!! $news->text !!}</p>

          
            </div>


          </div>
      
        </div>
    
      </div>
<!-- END TEXT -->
      
@endif



        <div class="page">
          
          <a id="down" class="wow fadeInLeft" href="{{route('news',['id1'=>$news->id,'id'=>$news->id-1])}}"><i class="fas fa-chevron-down"></i> Предыдущая новость</a>
          <a id="up" class="wow fadeInRight" href="{{route('news',['id1'=>$news->id,'id'=>$news->id+1])}}">Слудующая новость <i class="fas fa-chevron-down"></i></a>

        </div>

        
      </div>
      
    </div>
    
  </div>









<script type="text/javascript">

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
   showSlides(slideIndex += n);
 }

 function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  
  var i;
  var slides = document.getElementsByClassName("myslide");
  var dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active");
  }
  
  slides[slideIndex].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

</script>

<footer class="footer" id="footer">

    <div class="footer-dark wow fadeInLeft">

      <div class="container">

        <div class="footer-dark__top">

          <div class="row">

            <div class="col-lg-4 col-md-4">
              <div class="footer__item">
                <div class="footer__item-img">
                  <img src="{{asset('assets/images/footer-location.png')}}" alt="">
                </div>

                <p>Республика Казахстан, г. Атырау, ул. Кулманова, Строение 111а</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3">
              <div class="footer__item">
                <div class="footer__item-img">
                  <img src="{{asset('assets/images/footer-clock.png')}}" alt="">
                </div>

                <p>График работы ТРЦ с <span class="def-bold">10:00</span> до <span class="def-bold">24:00</span>, <span class="def-bold">7</span> дней в неделю</p>
              </div>
            </div>

            <div class="col-lg-2 col-md-2">
              <div class="footer-v__line"></div>
            </div>

            <div class="col-lg-3 col-md-3">
              <div class="footer__social">
                <a href="#"><img src="{{asset('assets/images/footer-facebook.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/images/footer-instagram.png')}}" alt=""></a>
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

  
  <script src="{{asset('assets/js/superfish.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/aos.js')}}"></script>
  <script src="{{asset('assets/js/particles.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
