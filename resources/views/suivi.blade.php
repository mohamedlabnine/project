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
		</style>
	@endif
@endsection

@section('titel')
	laravel 
@endsection
	
@section('content')
	<div class="form">
		<img  src="https://www.logopik.com/wp-content/uploads/edd/2018/09/Royaume-du-maroc-Kingdom-of-morocco-Vector-Logo.png">
		<form action="{{ url('suivi_demande') }}" method="POST">
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