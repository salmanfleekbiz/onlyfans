@extends('admin.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Sugar Home - Admin Products
@endsection
@section('contents')
@include('admin.layout.sidebar')
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Product
</header>
<div class="panel-body">
<section id="unseen">
@if (Session::has('errors'))
<div class="bs-example">
<div class="alert alert-danger fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Error!</strong> {{ $errors->first() }}
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
<div class="col-lg-offset-3 col-lg-6">
<a class="btn btn-primary" href="{{url('admin/product/createproduct')}}">Add New Product</a>
</div>	
<table  id="example2" class="table table-bordered table-striped table-condensed">
<thead>
<tr>
<th>Product Name</th>
<th >Action</th>
</tr>
</thead>
<tbody>
@if(isset($products))
@foreach($products as $product)
<tr>
<td>{{$product->product_name}}</td>
<td><a class="btn btn-primary" href="{{url('admin/product/editproduct')}}/{{$product->id}}">Edit Product</a>&nbsp;<a class="btn btn-primary" href="{{url('admin/deleteproduct')}}/{{$product->id}}">Delete Product</a></td>
</tr>
@endforeach
@endif
</tbody>
</table>
</section>
</div>
</section>
</div>
</div>
</section>
</section>
@endsection