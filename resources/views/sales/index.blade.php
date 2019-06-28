@extends('layouts.app')

@section('content')
<!-- sale -->
<div class="container sales">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        {{ Breadcrumbs::render('sales') }}
        <p class="title wow fadeInLeft">акции</p>
        <span class="line wow fadeInLeft"></span>
        <div class="wrapper__card row">
            @foreach ($sales as $sale)
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card">
                    <img src="{{ asset('storage/'.$sale->image) }}" alt="" class="img-fluid">
                    <div class="card-body">
                        <p class="card-text">{{ $sale->title }} до <span>-{{ $sale->percentage }}%</span></p>
                        <p class="card-text"><span class="text-muted">{{ $sale->sale_start }} — {{ $sale->sale_end }}</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
<!-- sale end -->
@endsection