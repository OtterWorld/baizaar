@extends('layouts.app')

@section('content')
    
<!-- time -->
<div class="container time">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="p-link  wow fadeInLeft">
                <li><a class="home" href="#">Главная</a></li>
                <li>/</li>
                <li><a href="#">О компании</a></li>
            </ul>
            <p class="title wow fadeInLeft">режим работы</p>
            <span class="line wow fadeInLeft"></span>
            <div class="wrapper-time row">
            @if($schedules->count() > 1)
                @foreach ($schedules as $schedulesColumn)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <ul>
                        @foreach ($schedulesColumn as $schedule)
                            @if ($loop->parent->first)
                            <li class="time__title">График работы ТРЦ: <br> {{ $contacts->start }} - {{ $contacts->end }}, {{ $contacts->weekday }} дней в неделю</li>
                            @endif
                            <li>{{ $schedule->shop_name }} {{ $schedule->schedule }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endforeach
            @else
            <div class="col-lg-4 col-md-4 col-sm-12">
                <ul>
                @foreach ($schedules as $schedule)
                    @if ($loop->first)
                    <li class="time__title">График работы ТРЦ: <br> {{ $contacts->start }} - {{ $contacts->end }}, {{ $contacts->weekday }} дней в неделю</li>
                    @endif
                    <li>{{ $schedule->shop_name }} {{ $schedule->schedule }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            </div>
        </div>
    </div>
</div>
    <!-- end time -->
@endsection