@extends('layouts.app')

@section('content')
<!-- magazine -->
<div class="container magazine">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="p-link">
            <li><a class="home" href="#">Главная</a></li>
            <li>/</li>
            <li><a href="#">О компании</a></li>
        </ul> 
        <p class="title">{{ $shop->name }}</p>
        <span class="line"></span>
        <div class="container-fluid magazine-image" style="background-image: url({{ asset('storage/'.$shop->thumbnail) }});">
        </div>
        <div class="page-magazine">
            @if($previous)
            <a href="{{ route('shop.show.page', $previous) }}" class="prev-magazine"><i class="fas fa-chevron-left"></i>
                <ul>
                <li class="prev-item">Предыдущий магазин</li>
                <li>{{ $previous->name }}</li>
                </ul>
            </a>
            @endif
            @if($next)
            <a href="{{ route('shop.show.page', $next) }}" class="next-magazine">
                <i class="fas fa-chevron-right"></i>
                <ul>
                    <li class="prev-item">Следующий магазин</li>
                    <li>{{ $next->name }}</li>
                </ul>
            </a>
            @endif
        </div>
        <div class="row magazine__body">
            <div class="col-lg-8 col-md-8 col-sm-12">
            {!! $shop->description !!}
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="magazine-map">
                <ul class="magazine-map__head">
                @if($shop->image_small)
                <li><img src="{{ asset('storage/'.$shop->image_small) }}"></li>
                @endif
                <li><img src="{{ asset('images/icon-phone-mag.png') }}">{{ $shop->mobile }}</span></li>
                <li><img src="{{ asset('images/icon-2-mag.png') }}">{{ $shop->site }}</li>
                </ul>
                <ul class="magazine-map__social">
                <li><a href="{{ $shop->facebook }}"><img src="{{ asset('images/facebook.png') }}" alt="..."></a></li>
                <li><a href="{{ $shop->google }}"><img src="{{ asset('images/google-plus.png') }}" alt="..."></a></li>
                <li><a href="{{ $shop->instagram }}"><img src="{{ asset('images/instagram.png') }}" alt="..."></a></li>
                </ul>
                <a class="btn" href="#">посмотреть на карте</a>
            </div>
            </div>
        </div>
        <div class="row sale">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="sale__title">акции</p>
            <span class="line"></span>
            <ul>
                @foreach (json_decode($shop->sales_small) as $sale)
                <li><img src="{{ asset('storage/'.$sale) }}" alt=""></li>
                @endforeach
            </ul>
            </div>
        </div>
        @if($shop->sales_big)
        <div class="row magazine__footer" style="url({{ asset('storage/'.$shop->sales_big) }});">
            <div class="col-lg-12 col-md-12 col-sm-12">
            </div>
        </div>
        @endif
        </div>
    </div>
    </div>
<!-- end magazine -->        
@endsection