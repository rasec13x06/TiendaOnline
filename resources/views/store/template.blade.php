<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'My Laravel Store')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-S7YMK1xjUjSpEnF4P8hPUcgjXYLZKK3fQW1j5ObLSl787II9p8RO9XUGehRmKsxd" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Frijole|Lobster|Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="{{ ('css/demo.css') }}">
        <link rel="stylesheet" href="{{ ('css/style.css') }}">
	<link rel="stylesheet" href="{{	asset('css/main.css') }}">
	<noscript>
			<link rel="stylesheet" href="{{ ('css/noscript.css') }}" />
		</noscript>
</head>
<body>
	
	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif

	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset ('js/jquery.eislideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/jquery.easing.1.3.js') }}"></script>


        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
                    animation           : 'center',
                    autoplay            : true,
                    slideshow_interval  : 3000,
                    titlesFactor        : 0
                });
            });
        </script>
</body>
</html>