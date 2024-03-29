@extends('base')
@section('link_css')
	<style type="text/css">
		header{
			text-align: center;
			justify-content: center;
			justify-items: center;
		}
		header img{
			position: relative;
			width: 30%;
			height: 20%;
		}
		header p{
			color: darkblue;
			font-size: 30px;
			font-family: "Gill Sans", sans-serif;
		}
		form{
			margin-top: 40px ;
			
		}
		form input[name='sub']{
			background-color: blue;
			color: white;
			width: 25%;
			position: absolute;
			left: 35%;
        }
        @media screen and (max-width: 900px) {
        	header p{
        		font-size: 15px;
        	}
		}
	</style>
	@if ( config('app.locale') == 'ar' )
		<style type="text/css">
			form {
				text-align: right;
			}
			input{
				text-align: right;
			}
			form input[name='sub']{
				text-align: center;
			}
		</style>
	@else 
		<style type="text/css">
			form {
				text-align: left;
			}
		</style>
	@endif

@endsection
@section('titel')
	dèposer 
@endsection
@section('content')
	<header>
		<img class="img" src="../logo1.png">
	     <p>{{ __('index.header.service') }} </p>
	     <p>{{ __('index.header.region') }}</p>
	</header>
	<form class="container" method="POST" action="{{ url('save') }}" enctype="multipart/form-data">
		@csrf 
		<div class="form-row">
		<div class="col-md-5 mb-3">
		  <label >{{ __('service.depose.Nom') }}</label>
		  <input type="text" class="form-control " placeholder="{{ __('service.depose.Nom') }}" name="nom" required>
		</div>
		<div class="col-md-5 mb-3">
		  <label >{{ __('service.depose.prenom') }}</label>
		  <input type="text" class="form-control "  placeholder="{{ __('service.depose.prenom') }}" name="prenom" required>
		</div>
		<div class="col-md-5 mb-3">
		  <label >{{ __('service.depose.cin') }}</label>
		  <div class="input-group">
		    <input type="text" class="form-control "  placeholder="Jb524222" name="cin" aria-describedby="inputGroupPrepend3" required>
		  </div>
		</div>
		<div class="col-md-5 mb-3">
		  <label >{{ __('service.depose.tele') }}</label>
		  <div class="input-group">
		    <input type="text" class="form-control "  placeholder="0612859252" name="tele" aria-describedby="inputGroupPrepend3" required>
		  </div>
		</div>
		</div>
		<label>{{ __('service.depose.cdp1') }}</label><br>
		<div class="input-group form-row">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroupFileAddon01">{{ __('service.depose.Télécharger') }}</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" name="img1" 
		      aria-describedby="inputGroupFileAddon01" required >
		    <label class="custom-file-label" for="inputGroupFile01">{{ __('service.depose.Clf') }}</label>
		  </div>
		</div><br><br>
		<label>{{ __('service.depose.cdp2') }}</label><br>
		<div class="input-group form-row">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroupFileAddon01">{{ __('service.depose.Télécharger') }}</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" name="img2" id="inputGroupFile01"
		      aria-describedby="inputGroupFileAddon01" required>
		    <label class="custom-file-label" for="inputGroupFile01">{{ __('service.depose.Clf') }}</label>
		  </div>
		</div><br><br>
		<input type="submit" class="form-control " value="{{ __('service.depose.Env') }}" name="sub" >
    </form>
    
@endsection 