@extends('layouts.app')

@section('content')
    <div class="container py-5 my-5 cooperation">
        <div class="row">
            {{ Breadcrumbs::render('search', $query) }}
        </div>
       @if($paginatedSearchResults->count() > 0)
       @foreach ($paginatedSearchResults as $result)
        <div class="py-3">
            <h4>{{ strip_tags($result->title) }}</h4>
            @isset($result->body)
            <div>
                {!! strip_tags($result->body).'...' !!}
            </div>
            @endisset
            <div>
                @switch($result)
                    @case($result instanceof App\News)
                        <a href="{{ route('news.one.page', $result->id) }}">Подробнее</a>
                        @break
                    
                    @case($result instanceof App\Shop)
                        <a href="{{ route('shop.show.page', $result->id) }}">Подробнее</a>
                        @break
                    @case($result instanceof App\Sale)
                        <a href="{{ route('sales.show.page', $result->id) }}">Подробнее</a>
                        @break
                    @default
                        
                @endswitch  
            </div> 
        </div>    
        @endforeach
        {{ $paginatedSearchResults->links() }}
       @else
       <div class="wow slideInLeft">
            По запросу {{ $query }} ничего не найдено
       </div>
       @endif
    </div>
@endsection