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
<h3>Login</h3>
</div>
</section>
<section class="login_sec form_theme">
<form name="userlogin" id="userlogin" method="post" action="{{url('user/login')}}" enctype="multipart/form-data">
{{csrf_field()}}	
@if (Session::has('errors'))
<div class="bs-example">
<div class="alert alert-danger fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Error!</strong> Invalid Email Address/Password.
</div>
</div>
@endif
<div class="container">	
<div class="col-md-3"></div>
<div class="col-md-6">
<input placeholder="Enter your email" type="text" name="useremail" id="useremail" class="txt_theme" />
<input placeholder="Enter your password" type="password" name="userpassword" id="userpassword" class="txt_theme" />
<p class="para-theme-form"><input type="checkbox" id="btn_chk_remember" name="btn_chk_remember" value="1" /> <label for="btn_chk_remember">remember me</label> <a href="{{url('/losspassword')}}">Forgot Password? </a></p>
<input value="Log In" class="btn btn-red btn-form" type="submit" name="submit" id="submit">
</div>
<div class="col-md-3"></div>
</div>
</form>
</section>
<script type="text/javascript">
jQuery("#userlogin").validate({
rules: {
	useremail: {
	required: true,
	email: true
	},
	userpassword: {required: true, minlength:4}
},
messages: {
	useremail: { required: "Enter your email", email:"Enter your correct email"},
	userpassword: { required: "Enter your password", minlength:"Minimum Lenght 4"}
}
});
</script>
@endsection