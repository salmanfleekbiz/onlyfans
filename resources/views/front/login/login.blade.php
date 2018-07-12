@extends('front.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Onlyfans
@endsection
@section('contents')
<div class="section-login-row">
<div class="container">
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Restore Access</h4>
</div>
<div class="modal-body">
<p>Please enter the email you used to register your account and we will send a mail to restore your account.</p>
</div>
<div class="field-row-1">
<input type="email" placeholder="E-mail" />
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default">Send</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="col-md-12">
<div class="sign-up-form">
<div class="signup-text">
<h2>Login</h2>
<p>To make money & interact<br> 
with your fans!</p>
</div>
<div class="twitter-signup">
<p><a href="#">Sign up / Login with Twitter</a></p>
</div>
<div class="another-option">
<p>OR</p>
</div>
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
@if (Session::has('messages'))
<div class="bs-example">
<div class="alert alert-success fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Success! </strong>{{Session::get('messages')}}.
</div>
</div>
@endif
<div class="signup-forms-fields">
<div class="field-row-1">
<input type="text" placeholder="E-mail" name="useremail" id="useremail" />
</div>
<div class="field-row-1">
<input type="password" placeholder="Password" name="userpassword" id="userpassword" />
</div>
<div class="signup-btns">
<ul>
<li><input value="Login" class="btn btn-red btn-form" type="submit" name="submit" id="submit"></li>
<li><a href="#" data-toggle="modal" data-target="#myModal">Forgot Password?</a></li>
</ul>
</div>
</div>
</form>
<script type="text/javascript">
jQuery("#userlogin").validate({
rules: {
	useremail: {
	required: true,
	email: true
	},
	userpassword: {required: true, minlength:6}
},
messages: {
	useremail: { required: "Enter your email", email:"Enter your correct email"},
	userpassword: { required: "Enter your password", minlength:"Minimum Lenght 6"}
}
});
</script>
</div>
</div>
</div>
</div> 
</section>
@endsection