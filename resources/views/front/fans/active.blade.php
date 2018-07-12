@extends('front.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Onlyfans
@endsection
@section('contents')
<div class="clear"></div>
<div class="section-two-row">
<div class="container">
<div class="col-md-12">
<div class="top-tabs-row">
<ul>
<li><a href="{{url('/fans/active')}}">active</a></li>
<li><a href="{{url('/fans/expire')}}">expired (0)</a></li>
<li><a href="{{url('/fans')}}">ALL (3)</a></li>
</ul>
</div>
</div>
<div class="col-md-12">
<div class="col-md-4">
<div class="profile-col-1">
<div class="profile-thumb"> 
<img src="{{asset('frontassets/images/img3.png')}}" alt="" />
</div>
<div class="profile-content">
<div class="profile-desc">
<div class="profile-title">
<h3>Micheal David</h3>
<h4>@micheal-david</h4>
</div>
<div class="profile-detail">
<div class="profile-row-1">
<p>Subscription</p>
<p>Free</p>
</div>
</div>
<div class="profile-follow">
<a href="javascript:void(0);">Follow</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection