@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="css/style5.css">
@endsection
@section('titel')
	laravel 
@endsection
	
@section('content')
	<div class=" container div">
		<h1>Bonjour {{ $demande->nom}} {{ $demande->prenom}} </h1><br><br><br>
	    @if ($demande->etat_demande === "accepte")
		    <h4>heureusement votre demande est accepte tu peut consulte l'adminitration pour obtenir l'authorisation</h4>
		@elseif ( $demande->etat_demande === "pas encore" )
			<h4> votre demande pas encore examenie</h4>
		@else 
			<h4>malheureusement votre demande est refuse</h4>

		@endif
	</div>
@endsection 