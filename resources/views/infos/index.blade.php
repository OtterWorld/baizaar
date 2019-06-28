@extends('layouts.app')

@section('content')
<!-- info -->
  <div class="container info">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        {{ Breadcrumbs::render('info') }}
        <p class="title">{{ $title }}</p>
        <span class="line"></span>
        <div class="info__head">
            <ul class="info__head_tab-link">
                @foreach ($tabs as $tab)
                <li><a href="#info{{ $loop->iteration }}" class="{{ $loop->first ? 'info__head_tab-link_active' : '' }}">{{ $tab }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="info__body">
            @foreach ($contents as $content)
            <div class="{{ $loop->first ? 'info__body-active ' : ''}}info__body-text wow animated" id="info{{ $loop->iteration }}">
            {!! $content->content !!}
            </div>    
            @endforeach
        </div>
        </div>
    </div>
    </div>
    <!-- end info -->
@endsection