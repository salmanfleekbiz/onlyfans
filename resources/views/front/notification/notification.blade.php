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
<div class="col-md-12">
<div class="mark-icon">
<p>Mark all as read</p>
</div>
</div>
<div class="col-md-12">
<div class="noti-profiles">
<div class="notiprofile-row-1">
<div class="profile-row-1-left">
<div class="noti-thumb">
<a href="javascript:void(0);"><img src="{{asset('frontassets/images/noti-icon12.png')}}" alt="" /></a>
</div>
<div class="noti-detail">
<div class="noti-name">
<p>John Deo</p>
</div>
<div class="noti-id">
<p><a href="javascript:void(0);">@johndeo1</a></p>
</div>
<div class="noti-subs">
<p>Subscribed to your profile!</p>
</div>
</div>
</div>
<div class="profile-row-1-right">
<div class="time-duration">
<p>few seconds ago</p>
</div>
</div>
<div class="share-icons">
<img src="{{asset('frontassets/images/noti-icon9.png')}}" alt="" /> 
</div>
<div class="noti-comments">
<div class="comments">
<p>Hi how are you?</p>
</div>
<div class="noti-icons">
<div class="wishlist">
<p>5</p>
</div>
<div class="noti-drop">
<p>10</p>
</div>
</div>
</div>
</div>
<div class="notiprofile-row-1">
<div class="profile-row-1-left">
<div class="noti-thumb">
<a href="javascript:void(0);"><img src="{{asset('frontassets/images/noti-icon13.png')}}" alt="" /></a>
</div>
<div class="noti-detail">
<div class="noti-name">
<p>Mark Bruke</p>
</div>
<div class="noti-id">
<p><a href="javascript:void(0);">@markbruke_90</a></p>
</div>
</div>
</div>
<div class="profile-row-1-right">
<div class="time-duration">
<p>few seconds ago</p>
</div>
</div>
<div class="share-icons">
<img src="{{asset('frontassets/images/noti-icon9.png')}}" alt="" /> 
</div>
<div class="noti-comments">
<div class="comments">
<p>Hi how are you?</p>
</div>
<div class="noti-icons">
<div class="wishlist">
<p>5</p>
</div>
<div class="noti-drop">
<p>10</p>
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