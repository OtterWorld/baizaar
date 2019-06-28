@extends('layouts.app')

@section('content')
<!-- sale -->
<div class="container magazine">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        {{ Breadcrumbs::render('sales.one', $sale->title, $sale->id) }}
        <p class="title">{{ $sale->title }}</p>
        <span class="line"></span>
        <div class="container-fluid magazine-image" style="background-image: url({{ asset('storage/'.$sale->image) }});">
        </div>
        <div class="page-magazine">
            @if($previous)
            <a href="{{ route('sales.show.page', $previous) }}" class="prev-magazine"><i class="fas fa-chevron-left"></i>
                <ul>
                <li class="prev-item">Предыдущая акция</li>
                <li>{{ $previous->name }}</li>
                </ul>
            </a>
            @endif
            @if($next)
            <a href="{{ route('sales.show.page', $next) }}" class="next-magazine">
                <i class="fas fa-chevron-right"></i>
                <ul>
                    <li class="prev-item">Следующая акция</li>
                    <li>{{ $next->name }}</li>
                </ul>
            </a>
            @endif
        </div>
        <div class="row magazine__body">
            <div class="col-lg-8 col-md-8 col-sm-12">
            <h6>{{ $sale->sale_start }} - {{ $sale->sale_end }}</h6>
            {!! $sale->description !!}
            </div>
        </div>
        </div>
    </div>
    </div>
<!-- end sale -->        
@endsection