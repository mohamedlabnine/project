<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titel')</title>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		nav{
			margin-top: 10px;
			width: 100%;
		}
		nav li {
			padding: 20px;
			margin: 20px;
			border: 2px solid grey;
		    border-radius: 20px ;
		    width: 20%;
		    text-align: center;
		} 
		nav li a{
			color: black;
			font: italic;
		}
		nav li:hover {
			border-bottom:none ;
			background-color: grey;
			color: white;
		}
		nav li a:hover{
			color: black;
			list-style-type: none;
			text-decoration: none;
		}
		.a{
			position: absolute;
			top: 10px;
			right:30px;
		}
	</style>
</head>
<body>
	<nav  class="container nav " >
		<li><a  href="{{ url('Admin') }}">Pas encore examenie</a></li>
		<li  ><a  href="{{ url('Admina') }}">Accepte</a></li>
		<li ><a  href="{{ url('Adminr') }}">Refuse</a></li>
		<li  ><a  href="{{ url('Admint') }}">Tous les demande</a></li>
	</nav><br>
	<a class="a" href="/">Log out</a>
	@yield('content')
</body>
</html>