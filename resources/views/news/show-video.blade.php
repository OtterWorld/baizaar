@extends('layouts.app')

@section('content')
    
  <div class="container new3">

    <div class="row">
    
        <div class="col-sm-12">
    
        {{ Breadcrumbs::render('news.one', $news->title, $news->id) }}
    
        <p class="title wow fadeInLeft">{{ $news->title }}</p>
    
        <span class="line wow fadeInLeft"></span>
    
        <div class="box wow fadeInLeft">
            
            <div class="box-video">
    
            <img src="images/play-button.png">
            <a align="center" href="#">Посмотрите видео о ТРЦ BAIZAAR,<br>если не хотите много читать</a>
    
            </div>
    
            <div class="box-text">
    
            <p id="text1" class="wow fadeInLeft">
                {!! $news->text !!}
            </p>
    
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
    
    </div>
@endsection