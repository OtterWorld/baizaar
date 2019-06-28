@extends('layouts.app')

@section('content')
<!-- about -->
<div class="container about">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        {{ Breadcrumbs::render('about') }}
        <p class="title wow fadeInLeft">{{ $pages->count() > 0 ? $pages->keys()[0] : '' }}</p>
        <div class="wrapper-carousel">
          <div class="row">
            @if($slider)
            <div id="carouselimg" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                @foreach ($slider->slider_images as $sliderItem)
                <div class="carousel-item {{ $loop->first ? 'active': '' }}">
                    @foreach ($sliderItem as $image)
                        <img class="d-block slide-img{{ $loop->iteration }}" src="{{ asset('storage/'.$image) }}">
                    @endforeach
                </div>
                @endforeach
              </div>
              <a class="carousel-control-prev carousel-control-btn" href="#carouselimg" role="button" data-slide="prev">
                <span aria-hidden="true"><img src="images/arrow-left.png" alt=""></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next carousel-control-btn" href="#carouselimg" role="button" data-slide="next">
                <span aria-hidden="true"><img src="images/arrow-right.png"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            @endif
        </div>
          <div class="row">
            @if($pages->count() > 0)
            <div class="col-lg-8 carousel-slide-text">
              <div id="carouseltext" class="carousel slide slide-text" data-ride="carousel">
              
                @foreach ($pages as $page)
                <div class="carousel-inner">
                    @foreach ($page as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        {!! $item->content !!}
                    </div>
                    @endforeach 
                </div>   
                @endforeach
              <a class="carousel-control-prev carousel-control-btn" href="#carouseltext" role="button" data-slide="prev">
                <span aria-hidden="true"><img src="images/arrow-left.png" alt=""></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next carousel-control-btn" href="#carouseltext" role="button" data-slide="next">
                <span aria-hidden="true"><img src="images/arrow-right.png"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end about -->    
@endsection