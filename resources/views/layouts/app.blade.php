<!DOCTYPE html>
<html>
<head>
	<title>Web Site</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	@include('inc.navbar')

	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>	
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>	
		</div>
	</div>
	<footer id="footer" class="text-center">
		<p>Copyright 2020 &copy; Rsaliyev Madiyar</p>		
	</footer>
</body>
</html>