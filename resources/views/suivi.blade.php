@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style3.css">
@endsection

@section('titel')
	laravel 
@endsection
	
@section('content')
	<form action="{{ url('suivi_demande') }}" method="POST">
		@csrf 
		<label>N° de demande</label>
		<input type="text" name="id" required>
		<label>code de dossie</label>
		<input type="text" name="code" required>
		<input type="submit" name="sub" value="conexion">
	</form>
@endsection 