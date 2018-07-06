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
<link rel="stylesheet" href="{{ asset('adminassets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminassets/css/bootstrap-reset.css') }}">
<link rel="stylesheet" href="{{ asset('adminassets/font-awesome/css/font-awesome.css') }}">
<link href="{{ asset('adminassets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('adminassets/css/style-responsive.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('adminassets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('adminassets/js/jquery.validate.js') }}"></script>
</head>
<body>
<section id="container">
<header class="header fixed-top clearfix">
<div class="brand">
<a href="{{url('/admin')}}" class="logo">
<img style="width:87%;height: 55px;" src="{{ url('frontassets/images/logo.png') }}" alt="">
</a>
<div class="sidebar-toggle-box">
<div class="fa fa-bars"></div>
</div>
</div>
<div class="top-nav clearfix">
<ul class="nav pull-right top-menu">
<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="#">
<img alt="" src="images/avatar1_small.jpg">
<span class="username">{{$user->f_name}} {{$user->l_name}}</span>
<b class="caret"></b>
</a>
<ul class="dropdown-menu extended logout">
<!-- <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> -->
<li><a href="{{ url('admin/logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
</ul>
</li>
</ul>
</div>
</header>	
@yield('contents')
</section>
<script src="{{ asset('adminassets/bs3/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/jquery.dcjqaccordion.2.7.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/jquery.scrollTo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/advanced-datatable/js/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/data-tables/DT_bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/scripts.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/js/dynamic_table_init.js') }}" type="text/javascript"></script>
<script>
$(function () {
$('#example1').DataTable()
$('#example2').DataTable({
'paging': true,
'lengthChange': false,
'searching': false,
'ordering': true,
'info': true,
'autoWidth': false
})
})
</script>
</body>
</html>	