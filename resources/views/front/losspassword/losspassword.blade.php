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
<h3>Lost Password</h3>
</div>
</section>
<section class="login_sec form_theme">
<div class="container">	
<div class="col-md-3"></div>
<div class="col-md-6">
<form name="losspassForm" id="losspassForm" method="post" action="{{url('/sendpassword')}}" enctype="multipart/form-data">
{{csrf_field()}}
@if (Session::has('errors'))
<div class="bs-example">
<div class="alert alert-danger fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Error!</strong> Email address does not exists.
</div>
</div>
@endif	
@if(session()->has('message'))
<div class="bs-example">
<div class="alert alert-success fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Success!</strong> {{ session()->get('message') }}
</div>
</div>
@endif
<input placeholder="Enter your email" type="text" name="email" id="email" class="txt_theme" />
<input value="Recover Password" class="btn btn-red btn-form" type="submit" name="submit" id="submit">
</form>
</div>
<div class="col-md-3"></div>
</div>
</section>
<script type="text/javascript">
jQuery("#losspassForm").validate({
rules: {
	email: {
	required: true,
	email: true
	}
},
messages: {
	email: { required: "Enter your email", email:"Enter your correct email"}
}
});
</script>
@endsection