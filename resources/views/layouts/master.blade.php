<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Belame</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' }
	</script>

	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
	<!-- //bootstrap -->
	<link href="css/dashboard.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!--start-smoth-scrolling-->
	<!-- fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<!-- //fonts -->

	<!-- vide.js  -->
	<link href='http://vjs.zencdn.net/5.4.6/video-js.css' rel='stylesheet'/>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- logo -->  <a class="navbar-brand" href="{{'home'}}"><h1><img src="images/pop.png" alt="" /></h1></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Cari...">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="header-top-right">
				<div class="file">
					<a href="{{ url('/upload') }}">Unggah</a>
				</div>
				<div class="signin">
					<a href="{{ route('logout') }}"
					   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Keluar</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>

				</div>
			<!-- <div class="signin">
					<a href="{{ route('login') }}">Sign In</a>

				</div> -->
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</nav>

<div class="main">
	<main class="py-4">
		<div class="container">
			@yield('content')
		</div>
	</main>
</div>
<div class="clearfix"> </div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->

<!-- video.js -->
<link href='http://vjs.zencdn.net/5.4.6/video-js.css' rel='stylesheet'/>
</body>
</html>