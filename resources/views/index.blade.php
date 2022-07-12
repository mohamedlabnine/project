@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style.css">
@endsection
@section('titel')
	laravel 
@endsection

@section('content')
	<header >
		<img class="img" src="https://www.logopik.com/wp-content/uploads/edd/2018/09/Royaume-du-maroc-Kingdom-of-morocco-Vector-Logo.png">
		<br><br>
		<p class="para">Service provincial de </p><p class="para1">l'eau de safi</p>
		<p class="Arabe_francais"><a href="index.html">français   |   </a><a href="indexa.html"> العربية</a></p>
	</header>
    <div class="nav container">
    	<ul>
    		<li><a class="a" href="{{ url('/') }}">Accuiel</a></li>
    		<li><a class="a" href="">Services</a>
    		<ul class="ul">
    			<li><a class="a" href="{{ url('suivi') }}">Suivi la demande</a></li>
    			<li><a class="a" href="{{ url('depose') }}">Dépose la demande</a></li>
    		</ul>
    		</li>
    		<li><a class="a" href="">Administration</a></li>
    		<li><a class="a" href="{{ url('contact') }}">Contact</a></li>
    		<li>
    			<form class="navbar-form navbar-left" role="search"> 
                <div class="form-group"> 
                <input type="text" class="form-control" placeholder="Recherche">
            </li>
    	</ul>
    </div> 
@endsection 