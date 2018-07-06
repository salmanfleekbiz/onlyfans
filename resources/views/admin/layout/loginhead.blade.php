<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<link rel="stylesheet" href="{{ asset('adminassets/bs3/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminassets/css/bootstrap-reset.css') }}">
<link rel="stylesheet" href="{{ asset('adminassets/font-awesome/css/font-awesome.css') }}">
<link href="{{ asset('adminassets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('adminassets/css/style-responsive.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('adminassets/js/jquery.js') }}"></script>
</head>
<body>
<div class="container">
@yield('contents')
</div>
<script src="{{ asset('adminassets/bs3/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>	