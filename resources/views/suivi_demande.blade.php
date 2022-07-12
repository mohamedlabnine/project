@extends('base')

@section('link_css')
	<style type="text/css">
		.div{
			align-items: center;
			align-items: center;
			justify-content: center;
			text-align: center;
			border: 1px black solid;
			border-radius: 2px ;
			margin-top: 100px;
		}
	</style>
@endsection
@section('titel')
	laravel 
@endsection
	
@section('content')
	<div class=" container div">
		<p>Bonjour {{ $demande->nom}} {{ $demande->prenom}} </p>
	    @if ($demande->etat_demande === "accepte")
		    <h4>heureusement votre demande est accepte tu peut consulte l'adminitration pour obtenir l'authorisation</h4>
		@elseif ( $demande->etat_demande === "pas encore" )
			<h4> votre demande pas encore examenie</h4>
		@else 
			<h4>malheureusement votre demande est refuse</h4>

		@endif
	</div>
@endsection 