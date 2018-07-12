<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ asset('frontassets/images/favicon.png') }}" type="image/png" sizes="50x50">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<link rel="stylesheet" href="https://www.arcallia.com/wp-content/themes/Arcallia/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700">
<link href="{{ asset('frontassets/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('frontassets/css/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('frontassets/css/style.css') }}" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('frontassets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/js/jquery.validate.js') }}"></script>
</head>
<body>
<section class="wrapper">
@if($user = Auth::user())	
<div class="main-header">
<div class="container">
<div class="col-md-6">
<div class="main-logo">
<a href="{{ url('/') }}"><img src="{{ asset('frontassets/images/logo1.png') }}" alt="" /></a>
</div>
</div>
<div class="col-md-6">
<div class="header-right">
<ul>
<li><a href="{{ url('/') }}"><img src="{{ asset('frontassets/images/home-icon.png') }}" alt="" /></a></li>
<li><a href="{{ url('/notification') }}"><img src="{{ asset('frontassets/images/noti-icon.png') }}" alt="" /></a></li>
<li><a href="{{ url('/message') }}"><img src="{{ asset('frontassets/images/msg-icon.png') }}" alt="" /></a></li>
<li><a href="javascript:void(0);"><img src="{{ asset('frontassets/images/profile.png') }}" alt="" /></a></li>
</ul>
</div>
</div>
</div>
</div>
@endif
@yield('contents')
</body>
</html>	