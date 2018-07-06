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
@if(session()->has('message'))
<div class="bs-example">
<div class="alert alert-success fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Success!</strong> {{ session()->get('message') }}
</div>
</div>
@endif	
<form class="form-horizontal" role="form" name="editProductaccessoriesform" id="editProductaccessoriesform" method="post" action="{{url('/admin/product/updateproductaccessories')}}/{{$productaccessoriesdata->id}}" enctype="multipart/form-data">
{{csrf_field()}}	
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Edit ProductAccessories
</header>		
@include('admin.productaccessories.productaccessories_form')
</section>
</div>
</div>
</form>	
</section>
</section>
<script type="text/javascript">
jQuery("#editProductaccessoriesform").validate({
rules: {
	productaccessoriesname: "required",
	productaccessoriesamount: {
      required: true,
      digits: true
    },
	productid: "required"
},
messages: {
	productaccessoriesname: "Enter accessories name",
	productaccessoriesamount: { required: "Enter accessories amount", digits:"Enter only number"},
	productid: "Select product name"
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