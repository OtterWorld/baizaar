@extends('layouts.app')

@section('content')
<div class="container new1 wow fadeInLeft">
    <div class="row">

      <div class="col-sm-12">

      
      {{ Breadcrumbs::render('news.one', $news->title, $news->id) }}

        <p class="title">{{ $news->title }}</p>

        <span class="line"></span>

        <p class="text">{!! $news->text !!}</p>

        <div class="dot-num">

            <div class="slider">1/{{ count(json_decode($news->carusel)) }}</div> 
          
        </div>

        <div id="sync1" class="owl-carousel owl-theme">
            @foreach (json_decode($news->carusel) as $slide)
                <div class="item">
                    <img src="{{ asset('storage/'.$slide) }}">
                </div>
            @endforeach
         </div>

         <div id="sync2" class="owl-carousel owl-theme">
                @foreach (json_decode($news->carusel) as $slide)
                    <div class="item">
                        <img src="{{ asset('storage/'.$slide) }}">
                    </div>
                @endforeach
         </div>

        
         <div class="page">
            @if($previous)
            <a id="down" class="wow fadeInLeft" href="{{ route('news.one.page', $previous) }}"><i class="fas fa-chevron-down"></i>@lang('interface.buttons.previousNews')</a>
            @endif

            @if($next)
            <a id="up" class="wow fadeInRight" href="{{ route('news.one.page', $next) }}">@lang('interface.buttons.nextNews')<i class="fas fa-chevron-down"></i></a>
            @endif
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

@endsection