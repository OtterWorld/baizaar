@extends('layouts.app')

@section('content')
<!-- sale -->
<div class="container sales">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        {{ Breadcrumbs::render('news') }}
        <p class="title wow fadeInLeft">Все события</p>
        <span class="line wow fadeInLeft"></span>
        <div class="wrapper__card row">
            @foreach ($news as $newsItem)
            <div class="col-lg-3 col-md-3 col-sm-12 px-0">
                <div class="card">
                    <a href="{{ route('news.one.page', $newsItem) }}"><img src="{{ asset('storage/'.$newsItem->image) }}" alt=""></a>
                    <div class="card-body">
                        <p class="card-text"><a href="{{ route('news.one.page', $newsItem) }}">{{ $newsItem->title }}</a></p>
                        <p class="card-text"><span class="text-muted">{{ $newsItem->created_at }}</span></p>
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