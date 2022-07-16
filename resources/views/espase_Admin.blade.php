@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style6.css">
@endsection
@section('titel')
	Espace Administration 
@endsection

@section('content')
	<div class="form">
		<img src="Admin.jpeg">
		<form action="{{ url('admin_test') }}" method="POST">
			@csrf
			<label >Nom d'admin *</label><br>
			<input type="text"  class="form-control " placeholder="Nom" name="nom" required><br><br>
			<label >code *</label><br>
			<input type="text"  class="form-control "  placeholder="code" name="code" required><br><br>
			<input type="submit" class="form-control " value="conexion" name="sub" ><br><br>
	    </form>
	</div>
@endsection 