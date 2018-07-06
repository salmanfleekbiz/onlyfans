@extends('admin.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Sugar Home - Admin Dashboard
@endsection
@section('contents')
@include('admin.layout.sidebar')
<section id="main-content">
<section class="wrapper">
@if (Session::has('errors'))
<div class="bs-example">
<div class="alert alert-danger fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Error!</strong> Reseller code already exists.
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
<form class="form-horizontal" role="form" name="createResellerform" id="createResellerform" method="post" action="{{url('/admin/storeresellercode')}}" enctype="multipart/form-data">
{{csrf_field()}}	
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Add Reseller Code
</header>	
@include('admin.resellercode.resellercode_form')
</section>
</div>
</div>
</form>	
</section>
</section>
<script type="text/javascript">
jQuery("#createResellerform").validate({
rules: {
	reseller_code: "required"
},
messages: {
	reseller_code: "Enter resellercode"
}
});	
</script>
@endsection