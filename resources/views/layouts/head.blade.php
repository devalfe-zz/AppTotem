<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="{{url('/favicon.ico')}}">

	<title>@yield('title')</title>

	<meta name="Robots" content="@lang('auth.failed')">
	<meta name="keywords" content="@yield('keywords','default')">
	<meta name="description" content="@yield('description','default')">
	<link rel="author" href="humans.txt" type="text/plain" />
	<meta name="DC.title" content="@yield('dctitle','default')" />
	<meta name="geo.placename" content="@yield('placename','default')" />
	<meta name="geo.region" content="@yield('region','default')" />
	<meta name="geo.position" content="@yield('position','default')" />
	<meta name="ICBM" content="@yield('ICBM','default')" />

	<link rel="stylesheet" href="{{mix('css/jquery.fancybox.css')}}" />
	<link rel="stylesheet" href="{{mix('css/animate.css')}}" />
	<link rel="stylesheet" href="{{mix('css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{mix('css/jquery.fullpage.css')}}" />
	<link rel="stylesheet" href="{{mix('css/superfish.css')}}" />
	<link rel="stylesheet" href="{{mix('css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{mix('css/app.css')}}" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{mix('js/vue.js')}}"></script>
	<script src="{{mix('js/vue-resource.js')}}"></script>
	<script src="{{mix('js/vue-router.js')}}"></script>
	<script src="{{mix('js/app.js')}}"></script>
	@yield('map')

</head>