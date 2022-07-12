@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style2.css">
@endsection

@section('titel')
	laravel 
@endsection
@section('content')
	<div >
        <img src="public/Image/{{ $demande->img1}}">
        <img src="public/Image/{{ $demande->img2}}"> 
	</div>
	<footer class="container">
        <form method="POST" action="{{ url('accepte') }}">
        	@csrf 
        	<input type="number" name="id" value="{{ $demande->id }}" style=" display: none;" >
        	<input class="a1" type="submit" name="sub" value="accepte" >
        </form>
        <form method="POST" action="{{ url('refuse') }}">
        	@csrf 
        	<input type="number" name="id" value="{{ $demande->id }}" style=" display: none;">
        	<input class="a2" type="submit" name="sub" value="refuse">
        </form>
	</footer>
@endsection 