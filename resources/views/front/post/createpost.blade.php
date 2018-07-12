@extends('front.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Onlyfans
@endsection
@section('contents')
<div class="clear"></div>
<div class="section-five-row">
<div class="container">
<div class="col-md-12">
<div class="dashboard-comment-row">
<div class="dash-comment-box">
<textarea placeholder="Compose Post..."></textarea>
</div>
<div class="dash-submit-btns">
<div class="dash-left">
<img src="{{ asset('frontassets/images/dash-img5.png') }}" alt="" />
</div>
<div class="dash-right">
<p><a href="javascript:void(0);">Post</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection