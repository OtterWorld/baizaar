@extends('layouts.app')

@section('content')
<!-- contact -->
<div class="container contact">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
        {{ Breadcrumbs::render('contacts') }}
        <p class="title">Контакты</p>
        <span class="line"></span>
        <div class="contact__map">
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":480,"width":"auto","zoom":10,"queryString":"Алматы, Казахстан","place_id":"ChIJq8vFFn1ugzgRdm2YrY9mRD0","satellite":false,"centerCoord":[43.217994727789325,76.94416520000004],"cid":"0x3d44668fad986d76","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"43709"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=43709';
        s.async = true;
        s.onload = function (e) {
            window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
        })();</script><a href="https://1map.com/map-embed?embed_id=43709"></a></div> 
        </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="contact__info">
            <p class="num">{{ $contacts->phone }}</p>
            <ul>
            <li><span>Факс:</span> {{ $contacts->fax }}</li>
            <li><span>Эл.почта:</span> {{ $contacts->email }}</li>
            <li><span>График работы магазина:</span><br> с {{ $contacts->start }} до {{ $contacts->end }} часов</li>
            <li><span>Адрес:</span> {{ $contacts->address }}</li>
            </ul>
            <span class="line"></span>
            <p class="text">{{ $contacts->location_description }}</p>
        </div>
        </div>
    </div>
</div>
<!-- end contact -->
@endsection