@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style3.css">
	@if ( config('app.locale') == 'ar') 
		<style type="text/css">
			form{
				text-align: right;
			}
			input{
				text-align: right;
			}
			form input[name='sub']{
				text-align: center;
			}
			
		</style>
	@endif
@endsection

@section('titel')
	suivir
@endsection
	
@section('content')

	<div class="form">
		<header>
    	<img class="img" src="../logo1.png"><br><br>
		<p>{{ __('index.header.service') }} </p>
		<p>{{ __('index.header.region') }}</p>
        </header>
		<form action="{{ config('app.locale') == 'fr' ? url('suivi_demande/fr') : url('suivi_demande/ar') }}" method="POST">
			@csrf
			<label >{{ __('service.suivi.Nemero') }}</label>
			<input type="text" class="form-control " placeholder="{{ __('service.suivi.Nemero') }}" name="id" required>
			<label >{{ __('service.suivi.code') }}</label>
			<input type="text" class="form-control " placeholder="{{ __('service.suivi.code') }}" name="code" required>
			<input type="submit" class="form-control " value="{{ __('service.suivi.connexion') }}" name="sub" >
	    </form>
	</div>
	<div id="img" >
		<img  src="../image.jpg">
	</div>
@endsection 