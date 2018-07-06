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
<strong>Error!</strong> Category already exists.
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
<form class="form-horizontal" role="form" name="createProductvariationform" id="createProductvariationform" method="post" action="{{url('/admin/variation/storeproductvariation')}}" enctype="multipart/form-data">
{{csrf_field()}}	
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Add ProductVariation
</header>	
@include('admin.productvariation.productvariation_form')
</section>
</div>
</div>
</form>	
</section>
</section>
<script type="text/javascript">
jQuery("#createProductvariationform").validate({
rules: {
	productid: "required",
	variationid: "required",
	variationtitle: "required",
	variationprice: {
      required: true,
      digits: true
    }
},
messages: {
	productid: "Select product name",
	variationid: "Select variation category",
	variationtitle: "Enter variation title",
	variationprice: { required: "Enter variation price", digits:"Enter only number"}
}
// ,
// submitHandler: function() {
// },
// success: function(label) {
// 	label.remove();
// }
});	
</script>
@endsection