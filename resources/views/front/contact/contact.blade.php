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
<h3>Contact Us</h3>
</div>
</section>
<section class="get_connected">
<div class="container text-center">
<h3 class="has-after">Let’s Get Connected</h3>
<ul>
<li>
<i class="fa fa-map-marker"></i>
<p>7526 South State <br />StreetSalt Lake City, <br />UT 84047</p>
</li>
<li>
<i class="fa fa-clock-o"></i>
<p>
Monday-Friday: 8:00am-5:30pm <br />
Closed Saturday and Sunday
</p>
</li>
<li>
<i class="fa fa-phone"></i>
<p>
801.563.9600 <br />
800.657.6394
</p>
</li>
<li>
<i class="fa fa-fax"></i>
<p>
801.563.9606
</p>
</li>
<li>
<i class="fa fa-envelope"></i>
<p>
mail@sugarhousebanners.com
</p>
</li>
<ul>
</div>
</section>
<section class="contact_form">
<div class="container">
<form class="" action="#" method="post"  id="contact_form">
<div class="col-md-6 col-sm-6 col-xs-12 form-col">
<div class="form-group">
<input type="text" placeholder="*Name:" class="form-control" required />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-col">
<div class="form-group">
<input type="text" placeholder="Company:" class="form-control" required />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-col">
<div class="form-group">
<input type="text" placeholder="City:" class="form-control" required />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-col">
<div class="form-group">
<input type="text" placeholder="*State:" class="form-control" required />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-col">
<div class="form-group">
<input type="tel" placeholder="Phone:" class="form-control" id="phone"  />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 form-col">
<div class="form-group">
<input type="email" placeholder="*Email:" class="form-control" required />
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 form-col">
<div class="form-group">
<textarea type="text" placeholder="*Question or Comment" class="form-control"></textarea>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 form-col text-center">
<input type="submit" value="SUBMIT" class="btn btn-white" />
</div>
</form>
</div>
</section>
<section class="contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.6836177074147!2d-111.89416688454875!3d40.61480357934255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8752884d84a93ccf%3A0x48d2b6421b248320!2s7526+State+St%2C+Midvale%2C+UT+84047!5e0!3m2!1sen!2s!4v1520667593669" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
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