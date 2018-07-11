@extends('admin.layout.loginhead')
@section('description')
This is Personal Details
@endsection
@section('title')
Only Fans - Admin Login
@endsection
@section('contents')
<form class="form-signin" action="{{ route('admin.login.submit') }}" method="POST" name="adminlogin" id="adminlogin">
{{ csrf_field() }}	
@if (Session::has('errors'))
<div class="bs-example">
<div class="alert alert-danger fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Error!</strong> Invalid Email Address/Password.
</div>
</div>
@endif
<div class="login-wrap">
<div class="user-login-info">
<input type="email" class="form-control" placeholder="User Email" name="email" id="email" required="required">
<input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required">
</div>
<button class="btn btn-lg btn-login btn-block" type="submit" id="submit" name="submit">Sign in</button>
</div>
</form>
@endsection