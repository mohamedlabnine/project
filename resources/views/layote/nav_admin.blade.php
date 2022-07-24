<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
	<link rel="icon" type="text/css" href="../logo.icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<header class="text-center my-3">
		<img src="../logo1.png">
		<div class="dropdown position-absolute top-0 end-0 m-4 ">
			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
			{{ __('admin.clicke') }}
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="{{ url(config('app.locale')) }}">{{ __('admin.deconexion') }}</a></li>
				<li><a class="dropdown-item" href="#addnew">{{ __('admin.ajoute') }}</a></li>
			</ul>
		</div>
	</header>
	<table class="container table table-striped">
		<tr class="tr">
			<th class="border" ><a  href="{{ config('app.locale') == 'fr' ? url('admin/fr') :  url('admin/ar') }}">{{ __('admin.pee') }}</a></th>
			<th class="border" ><a  href="{{ config('app.locale') == 'fr' ? url('admina/fr') :  url('admina/ar') }}">{{ __('admin.accepte') }}</a></th>
			<th class="border" ><a  href="{{ config('app.locale') == 'fr' ? url('adminr/fr') :  url('adminr/ar') }}">{{ __('admin.refuse') }}</a></th>
			<th class="border" ><a  href="{{ config('app.locale') == 'fr' ? url('admint/fr') :  url('admint/ar') }}">{{ __('admin.tdm') }}</a></th>
		</tr>
	</table>
	@yield('content')
	<h4 class="text-center mt-5">{{ __('admin.ajoute') }}</h4>
	<form class="container input-group mb-5 justify-content-center" id="addnew" method="POST" action="{{ url('add') }}" enctype="multipart/form-data">
		@csrf
		@if ( config('app.locale') == 'ar')
			<div class=" input-group col-5 mt-4 d-flex flex-row-reverse " >	
				<label class="filebutton mx-3">
					<i class="bi bi-plus-square-fill " style="font-size: 3rem; color: cornflowerblue;"></i>
					<span><input onchange="getName()" type="file" id="myfile" name="myfile"></span>
				</label>
				<div id="div" class="font-italic mx-3 pt-4" style="font-size: 1rem;">{{ __('admin.chose') }}</div>
			</div>
			<div class=" input-group col-4 mt-5 " >
				<input class="form-control text-right" type="text" name="titre" placeholder="{{ __('admin.titre') }}">
			</div>
			<div class="input-group col-9 mt-5">
				<textarea class="form-control text-right" placeholder="{{ __('admin.description') }}" name="des"></textarea>
			</div>
		@else
			<div class=" input-group col-4 mt-5 " >
				<input class="form-control text-left" type="text" name="titre" placeholder="{{ __('admin.titre') }}">
			</div>
			<div class=" input-group col-5 mt-4 d-flex" >	
				<label class="filebutton mx-3">
					<i class="bi bi-plus-square-fill " style="font-size: 3rem; color: cornflowerblue;"></i>
					<span><input onchange="getName()" type="file" id="myfile" name="myfile"></span>
				</label>
				<div id="div" class="font-italic mx-3 pt-4" style="font-size: 1rem;">{{ __('admin.chose') }}</div>
			</div>
			<div class="input-group col-9 mt-5">
				<textarea class="form-control" placeholder="{{ __('admin.description') }}" name="des"></textarea>
			</div>
		@endif
		<div class="input-group col-4 mt-5">
			<input class="form-control bg-primary" type="submit" name="sub" value="{{ __('service.depose.Env') }}">
		</div>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function getName() {
			var name_img = document.getElementById("myfile").value ;
			document.getElementById("div").innerHTML =  name_img ;
		}
	</script>
</body>
</html>