@extends('admin.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Only Fans - Admin Dashboard
@endsection
@section('contents')
@include('admin.layout.sidebar')
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Profile
</header>
<div class="panel-body">
<section id="unseen">
<div class="feed-box text-center">
<section class="panel">
<div class="panel-body">
@if (Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}</div>
@endif	
<div class="corner-ribon black-ribon">
<i class="fa fa-edit"></i>
</div>
<h1>{{$user->f_name}} {{$user->l_name}}</h1>
<p style="font-weight: :300;">Email Address :  {{$user->email}} <br>Contact Number :  {{$user->phone}}</p>
</div>
</section>
</div>
<div class="text-center">
<a href="#myModal" data-toggle="modal" class="btn btn-success">
Edit Profile
</a>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4 class="modal-title">Edit Profile</h4>
</div>
<div class="modal-body">
<form class="form-horizontal" role="form" name="editProfileform" id="editProfileform" method="post" action="{{url('admin/profileupdate')}}/{{$user->id}}">
{{csrf_field()}}	
<div class="form-group">
<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">First Name</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="fname" id="fname" value="@if(isset($user->f_name)) {{$user->f_name}} @endif" required="required">
</div>
</div>
<div class="form-group">
<label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Last Name</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="inputEmail4" placeholder="Last Name" name="lname" id="lname" value="@if(isset($user->l_name)) {{$user->l_name}} @endif" required="required">
</div>
</div> 
<div class="form-group">
<label for="inputEmail1" class="col-lg-2 col-sm-4 ">Email Address</label>
<div class="col-lg-10">
<input type="email" class="form-control" id="inputEmail4" placeholder="Email Address" name="email" id="email" value="@if(isset($user->email)) {{$user->email}} @endif" required="required">
</div>
</div>
<div class="form-group">
<label for="inputEmail1" class="col-lg-2 col-sm-2 ">Contact No</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="inputEmail4" placeholder="Contact Number" name="phone" id="phone" value="@if(isset($user->phone)) {{$user->phone}} @endif" required="required">
</div>
</div>
<div class="form-group">
<div class="col-lg-offset-2 col-lg-10">
<button type="submit" id="submit" name="submit" class="btn btn-success">Update Profile</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
</section>
</div>
</div>
</section>
</section>
@endsection