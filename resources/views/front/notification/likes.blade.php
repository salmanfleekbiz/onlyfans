@extends('front.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Onlyfans
@endsection
@section('contents')
<div class="section-two-row">
<div class="container">
<div class="col-md-12">
<div class="notification-tabs-row">
<ul>
<li><a href="{{url('/notification')}}">ALL</a></li>
<li><a href="{{url('/notification/likes')}}">LIKED</a></li>
<li><a href="{{url('/notification/interaction')}}">interactions</a></li>
<li><a href="{{url('/notification/subscriber')}}">subscribed</a></li>
<li><a href="{{url('/notification/tipped')}}">tipped</a></li>
<li><a href="{{url('/notification/pricechange')}}">price changed</a></li>
<li><a href="{{url('/notification/alerts')}}">alerts</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
@endsection