@extends('layouts.app')

@section('content')
<div class="container new2">

    <div class="row">

        <div class="col-sm-12">

        <ul class="p-link wow fadeInLeft">
            <li><a class="home" href="#">Главная</a></li>
            <li>/</li>
            <li><a href="#">О компании</a></li>
        </ul>

        <p class="title wow fadeInLeft">{{ $news->title }}</p>

        <span class="line wow fadeInLeft"></span>

        <div class="main-text">
            {!! $news->text !!}
        </div>

        <div class="page">
            <a id="down" class="wow fadeInLeft" href="#"><i class="fas fa-chevron-down"></i> Предыдущая новость</a>
            <a id="up" class="wow fadeInRight" href="#">Слудующая новость <i class="fas fa-chevron-down"></i></a>
        </div>

        </div>
        
    </div>
    
</div>
    
@endsection