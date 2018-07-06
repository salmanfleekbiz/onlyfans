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
<form class="form-horizontal" role="form" name="editProductform" id="editProductform" method="post" action="{{url('/admin/updateproduct')}}/{{$productdata->id}}" enctype="multipart/form-data">
{{csrf_field()}}	
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Edit Category
</header>		
@include('admin.product.product_form')
</section>
</div>
</div>
</form>	
</section>
</section>
<script type="text/javascript">
jQuery("#editProductform").validate({
rules: {
	productname: "required",
	productcategory: "required",
	"color[]": { 
            required: true, 
            minlength: 1 
    },
	width: "required",
	height: "required",
	assemblytime: "required",
	stand: "required",
	graphicattachment: "required",
	case: "required",
	graphicminwidth: {
      required: true,
      digits: true
    },
	graphicmaxwidth: {
      required: true,
      digits: true
    },
	graphicminheight: {
      required: true,
      digits: true
    },
	graphicmaxheight: {
      required: true,
      digits: true
    },
	productdescription: "required"
},
messages: {
	productname: "Enter product name",
	productcategory: "Select product category",
	"color[]": "Please select at least one color.",
	width: "Enter width",
	height: "Enter height",
	assemblytime: "Enter assemblytime",
	stand: "Enter stand",
	graphicattachment: "Enter graphicattachment",
	case: "Enter case",
	graphicminwidth: { required: "Enter graphic min width", digits:"Enter only number"},
	graphicmaxwidth: { required: "Enter graphic max width", digits:"Enter only number"},
	graphicminheight: { required: "Enter graphic min height", digits:"Enter only number"},
	graphicmaxheight: { required: "Enter graphic max height", digits:"Enter only number"},
	productdescription: "Enter product description"
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