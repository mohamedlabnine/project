@extends('base')

@section('link_css')
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
@endsection

@section('titel')
	laravel 
@endsection

@section('content')
	<table class="container  " >
		<tr class="border">
			<th class="border" >Nom</th>
			<th class="border" >Prenom</th>
			<th class="border" >cin</th>
			<th class="border" >action</th>
		</tr>
		@foreach ($demandes as $demande)
	    	<tr>
				<td class="border" >{{ $demande->nom }}</td>
				<td class="border" >{{ $demande->prenom }}</td>
				<td class="border" >{{ $demande->cin }}</td>
				<td class="border" >
					
					<form method="POST" action="{{ url('view') }}">
						@csrf 
						<input type="number"  name="id" value="{{ $demande->id }}" style=" display: none;"  >
						<input type="submit" name="sub" class="input"  value="Affiche">
					</form>
				</td>
		    </tr>
		@endforeach
	</table>
@endsection 