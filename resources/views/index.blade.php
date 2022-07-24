@extends('base')

@section('link_css')
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@endsection
@section('titel')
Accuiel
@endsection

@section('content')
<header>
    <h3 class="para">{{ __('index.header.service') }}</h3>
    <h3 class="para1">{{ __('index.header.region') }}</h3>
    <img class="img1" src="logo2.png"><br>
    <img class="img2" src="logo1.png">
    <p><a style="padding: 10px" href="{{ url('fr') }}">francais </a><a style="padding: 10px" href="{{ url('ar') }}">
            Arabe</a></p>
</header>
<div class="nav container">
    <ul>
        @if ( config('app.locale') == 'ar')
        <li><a class="a" href="{{ url('/ar') }}">{{ __('index.nav_bar.li1') }}</a></li>
        <li><a class="a" href="">{{ __('index.nav_bar.li2') }}</a>
            <ul class="ul">
                <li><a class="a" href="{{ url('suivi/ar') }}">{{ __('index.nav_bar.li21') }}</a></li>
                <li><a class="a" href="{{ url('depose/ar') }}">{{ __('index.nav_bar.li22') }}</a></li>
            </ul>
        </li>
        <li><a class="a" href="{{ url('espase_Admin/ar') }}">{{ __('index.nav_bar.li3') }}</a></li>
        <li><a class="a" href="{{ url('contact/ar') }}">{{ __('index.nav_bar.li4') }}</a></li>
        <li>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="{{ __('index.searche') }}">
        </li>
        @else
        <li><a class="a" href="{{ url('/fr') }}">{{ __('index.nav_bar.li1') }}</a></li>
        <li><a class="a" href="">{{ __('index.nav_bar.li2') }}</a>
            <ul class="ul">
                <li><a class="a" href="{{ url('suivi/fr') }}">{{ __('index.nav_bar.li21') }}</a></li>
                <li><a class="a" href="{{ url('depose/fr') }}">{{ __('index.nav_bar.li22') }}</a></li>
            </ul>
        </li>
        <li><a class="a" href="{{ url('espase_Admin/fr') }}">{{ __('index.nav_bar.li3') }}</a></li>
        <li><a class="a" href="{{ url('contact/fr') }}">{{ __('index.nav_bar.li4') }}</a></li>
        <li>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="{{ __('index.searche') }}">
        </li>
        @endif
    </ul>
</div>
<div class="container video">
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>

</div>
<div class="container  ">
    @foreach ($news as $new)
        <div class=" rounded m-4 p-4 position-relative " style="border: 3px solid grey ;">
            <p class="date rounded p-3 position-absolute top-0 end-0 m-2" >{{ $new->created_at }}</p>
            <h5 class="">{{ $new->titre }}</h5>
            <div >
                <img class="new m-3" src="{{ '/public/new/'.$new->image }}" width="200" height="150">
                <p class="para new m-3" >{{ $new->description }}</p>
            </div>
        </div>        
    @endforeach
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@endsection