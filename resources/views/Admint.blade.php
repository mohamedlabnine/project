@extends('layote.nav_admin')

@section('titel')
	laravel 
@endsection

@section('content')
	<table class="container table table-striped">
		<tr class="border">
			<th class="border" >Nom</th>
			<th class="border" >Prenom</th>
			<th class="border" >cin</th>
			<th class="border" >etat</th>
		</tr>
		@foreach ($demandes as $demande)
		    	@if ($demande->etat_demande == "accepte")
		    		<tr>
						<td class="border" >{{ $demande->nom }}</td>
						<td class="border" >{{ $demande->prenom }}</td>
						<td class="border" >{{ $demande->cin }}</td>
						<td class="border" style=" color: green;" >{{ $demande->etat_demande }}</td>
			    	</tr>
			    @elseif ($demande->etat_demande == "refuse")
			    	<tr>
						<td class="border" >{{ $demande->nom }}</td>
						<td class="border" >{{ $demande->prenom }}</td>
						<td class="border" >{{ $demande->cin }}</td>
						<td class="border" style=" color: red;" >{{ $demande->etat_demande }}</td>
			    	</tr>
			    @else
			    	<tr>
						<td class="border" >{{ $demande->nom }}</td>
						<td class="border" >{{ $demande->prenom }}</td>
						<td class="border" >{{ $demande->cin }}</td>
						<td class="border" style=" color: blue;" >{{ $demande->etat_demande }}</td>
			    	</tr>
			    @endif
		@endforeach
	</table>
@endsection 