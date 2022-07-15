@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style3.css">
@endsection

@section('titel')
	laravel 
@endsection
	
@section('content')
	<div class="form">
		<img  src="https://www.logopik.com/wp-content/uploads/edd/2018/09/Royaume-du-maroc-Kingdom-of-morocco-Vector-Logo.png">
		<form action="{{ url('suivi_demande') }}" method="POST">
			@csrf
			<label >Nemero de demande *</label>
			<input type="text" class="form-control " placeholder="Nemero" name="id" required>
			<label >code *</label>
			<input type="text" class="form-control " placeholder="code" name="code" required>
			<input type="submit" class="form-control " value="conexion" name="sub" >
	    </form>
	</div>
	<div id="img" >
		<img  src="image.jpg">
	</div>
@endsection 