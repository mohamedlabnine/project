@extends('layote.nav_admin')

@section('content')
	<table class="container table table-striped">
		<tr class="border">
			<th class="border" >{{ __('admin.nom') }}</th>
			<th class="border" >{{ __('admin.prenom') }}</th>
			<th class="border" >{{ __('admin.cin') }}</th>
			<th class="border" >{{ __('admin.action') }}</th>
		</tr>
		@foreach ($demandes as $demande)
	    	@if ( $demande->etat_demande == "pas encore")
		    	<tr>
					<td class="border" >{{ $demande->nom }}</td>
					<td class="border" >{{ $demande->prenom }}</td>
					<td class="border" >{{ $demande->cin }}</td>
					<td class="border" >
						
						<form method="POST" action="{{ url('view') }}">
							@csrf 
							<input type="number"  name="id" value="{{ $demande->id }}" style=" display: none;"  >
							<input type="submit" name="sub" class="input" style="background-color: blue; color :white;"  value="{{ __('admin.affiche') }}">
						</form>
					</td>
			    </tr>
	    	@endif
		@endforeach
		
	</table>
@endsection 