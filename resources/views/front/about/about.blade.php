@extends('front.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Sugar House Banners
@endsection
@section('contents')
</div>
<section class="title-bar ">
<div class="text-center">
<h3>About Us</h3>
</div>
</section>
<section class="company_history">
<div class="container">
<h3 class="has-after text-center">Company History</h3>
<div class="col-md-6 col-sm-6 col-xs-12 company_img pull-right">
<img src="{{ url('frontassets/images/company.png') }}" class="img-responsive" alt="" />
</div>
<div class="col-md-6 col-sm-6 col-xs-12 company_text">
<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>
</div>
</section>
<section class="company_history_gray">
<div class="container">
<div class="col-md-6 col-sm-6 col-xs-12 company_img">
<img src="{{ url('frontassets/images/company.png') }}" class="img-responsive" alt="" />
</div>
<div class="col-md-6 col-sm-6 col-xs-12 company_text">
<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>
</div>
</section>
<section class="footer_red_bar">
<div class="container">
<div class="col-md-8 col-sm-8 col-xs-12">
<h4>
<strong>on time</strong> or <strong>it’s free. <span>Guaranteed!</span></strong>
</h4>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 text-right">
<a href="javascript:void(0);" class="btn btn-white">let’s get started</a>
</div>
</div>
</section>
@endsection