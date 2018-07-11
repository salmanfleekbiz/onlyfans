<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ asset('frontassets/images/logo.png') }}" type="image/png" sizes="50x50">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('frontassets/css/intlTelInput.css') }}">
<link href="{{ asset('frontassets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontassets/css/responsive.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<script type="text/javascript" src="{{ asset('frontassets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontassets/js/jquery.validate.js') }}"></script>
</head>
<body>
<div class="wrapper">
<header class="header">
<div class="container">
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<a class="navbar-brand" href="{{url('/')}}">
<img src="{{ url('frontassets/images/logo.png') }}" class="img-responsive" alt="" />
</a>
<div class="collapse navbar-collapse" id="navbar-collapse-1">
<div class="overflow-do">
<ul class="nav navbar-nav navbar-left">
<li><a href="javascript:void(0);">Banners</a></li>
<li><a href="javascript:void(0);">Bannerstands</a></li>
<li><a href="javascript:void(0);">Signs & Posters</a></li>
<li><a href="javascript:void(0);">Cling & Decal</a></li>
<li><a href="javascript:void(0);">Tablecovers</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="javascript:void(0);">Cart</a></li>
<li><a href="javascript:void(0);">About Us</a></li>
<li><a href="javascript:void(0);">Contact Us</a></li>
<li><a href="javascript:void(0);">Policies</a></li>
<li><a href="javascript:void(0);">Help</a></li>
@if(Auth::user())
<li><a href="javascript:void(0);">My Account</a></li>
<li><a href="javascript:void(0);">Order</a></li>
<li><a href="{{url('user/logout')}}">Logout</a></li>
@else
<li><a href="{{url('/register')}}">Register</a></li>
<li><a href="{{url('/login')}}">Login</a></li>
@endif
</ul>
</div>
</div>
</nav>
</div>
</header>
@yield('contents')
<footer>
<div class="container">
<div class="col-md-3 col-sm-6 col-xs-12 footer-col foo-one">
<img src="{{ url('frontassets/images/footer-logo.png') }}" class="img-responsive" alt="" />
<p>Sugar House Banners is a division of Sugar House Awning and Canvas Products</p>
</div>
<div class="col-md-3 col-sm-6 col-xs-12 footer-col foo-two">
<h5>Phone</h5>
<p>
<a href="tel:+18015639600">801.563.9600</a> <br />
<a href="tel:+18006576394">800.657.6394</a> <br />	
801.563.9606 (fax)
</p>
<h5>E-mail</h5>
<p><a href="mailto:mail@sugarhousebanners.com">mail@sugarhousebanners.com</a></p>
<h5>OPERATING HOURS</h5>
<p>
Monday-Friday: 8:00am-5:30pm <br />
Closed Saturday and Sunday
</p>				
</div>
<div class="col-md-3 col-sm-6 col-xs-12 footer-col foo-three">
<h5>Address</h5>
<p>7526 South State <br />Street - Salt Lake City, <br />UT 84047</p>
<p class="social">
<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
<a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a>
<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
</p>
<img src="{{ url('frontassets/images/footer-logo.png') }}" class="img-responsive" alt="" />
</div>
<div class="col-md-3 col-sm-6 col-xs-12 footer-col foo-four">
<ul>
<li><a href="javascript:void(0);">Our Products</a></li>
<li><a href="javascript:void(0);">Design Studio</a></li>
<li><a href="javascript:void(0);">Instant Quotes</a></li>
<li><a href="javascript:void(0);">Order Online</a></li>
<li><a href="{{url('/contactus')}}">Contact us</a></li>
<li><a href="javascript:void(0);">Cart</a></li>
</ul>
<ul>
<li><a href="javascript:void(0);">My Account</a></li>
<li><a href="javascript:void(0);">Request Estimate</a></li>
<li><a href="javascript:void(0);">Resellers</a></li>
<li><a href="javascript:void(0);">Company Info</a></li>
<li><a href="javascript:void(0);">Help</a></li>
</ul>
</div>
</div>
</footer>
<section class="copy_right">
<div class="container">
<div class="col-md-8 col-sm-8 col-xs-12">
<p>© Sugar House Banners 2018. All rights reserved   |   Powered by <a href="https://www.craftedium.com/" target="_blank" rel="nofollow">Craftedium</a>
</p>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<img src="{{ url('frontassets/images/card.png') }}" class="pull-right" alt="" />
</div>
</div>
</section>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="{{ asset('frontassets/js/intlTelInput.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontassets/js/main.js') }}" type="text/javascript"></script>
</body>
</html>	