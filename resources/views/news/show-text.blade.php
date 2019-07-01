@extends('layouts.app')

@section('content')
<div class="container new2">

    <div class="row">

        <div class="col-sm-12">

        {{ Breadcrumbs::render('news.one', $news->title, $news->id) }}

        <p class="title wow fadeInLeft">{{ $news->title }}</p>

        <span class="line wow fadeInLeft"></span>

        <div class="main-text">
            <p id="text1" class="wow fadeInLeft">{!! $news->text !!}</p>
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
    
@endsection