@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style6.css">
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
	Espace Administration 
@endsection

@section('content')
	<div class="form">
		<img src="../Admin.jpeg">
		<form action="{{ config('app.locale') == 'fr' ? url('admin_test/fr') :  url('admin_test/ar') }}" method="POST">
			@csrf
			<label >{{ __('admin.nom_admin') }}</label><br>
			<input type="text"  class="form-control " placeholder="{{ __('admin.nom_admin') }}" name="nom" required><br><br>
			<label >{{ __('admin.code') }}</label><br>
			<input type="text"  class="form-control "  placeholder="{{ __('admin.code') }}" name="code" required><br><br>
			<input type="submit" class="form-control " value="{{ __('admin.connexion') }}" name="sub" ><br><br>
	    </form>
	</div>
@endsection 