@extends('base')
@section('link_css')
	<style type="text/css">
		form{
			margin-top: 40px ;
		}
	</style>
@endsection
@section('titel')
	laravel 
@endsection
@section('content')
	<form class="container" method="POST" action="{{ url('save') }}" enctype="multipart/form-data">
		@csrf 
		<div class="form-row">
		<div class="col-md-5 mb-3">
		  <label >Nom *</label>
		  <input type="text" class="form-control " placeholder="labnine" name="nom" required>
		</div>
		<div class="col-md-5 mb-3">
		  <label >Prénom *</label>
		  <input type="text" class="form-control "  placeholder="mohamed" name="prenom" required>
		</div>
		<div class="col-md-5 mb-3">
		  <label >CIN *</label>
		  <div class="input-group">
		    <input type="text" class="form-control "  placeholder="Jb524222" name="cin" aria-describedby="inputGroupPrepend3" required>
		  </div>
		</div>
		<div class="col-md-5 mb-3">
		  <label >tele *</label>
		  <div class="input-group">
		    <input type="text" class="form-control "  placeholder="Jb524222" name="tele" aria-describedby="inputGroupPrepend3" required>
		  </div>
		</div>
		</div>
		<label>certificat de propriété *</label><br>
		<div class="input-group form-row">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroupFileAddon01">Télécharger</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" name="img1" 
		      aria-describedby="inputGroupFileAddon01" required >
		    <label class="custom-file-label" for="inputGroupFile01">Choisir le fichier</label>
		  </div>
		</div><br><br>
		<label>certificat de propriété *</label><br>
		<div class="input-group form-row">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroupFileAddon01">Télécharger</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" name="img2" id="inputGroupFile01"
		      aria-describedby="inputGroupFileAddon01" required>
		    <label class="custom-file-label" for="inputGroupFile01">Choisir le fichier</label>
		  </div>
		</div><br><br>
		<button class="btn btn-primary" type="submit">envoyer</button><br><br>
		<div class="text-center text-md-left">
	    <a class="btn btn-primary" href="{{ url('/') }}" >revenir</a>
        </div>
    </form>
    
@endsection 