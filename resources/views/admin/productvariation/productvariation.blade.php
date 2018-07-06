@extends('admin.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Sugar Home - Admin ProductVariation
@endsection
@section('contents')
@include('admin.layout.sidebar')
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
ProductVariation
</header>
<div class="panel-body">
<section id="unseen">
@if(session()->has('message'))
<div class="bs-example">
<div class="alert alert-success fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Success!</strong> {{ session()->get('message') }}
</div>
</div>
@endif	
<div class="col-lg-offset-3 col-lg-6">
<a class="btn btn-primary" href="{{url('admin/variation/createproductvariation')}}">Add New ProductVariation</a>
</div>	
<table  id="example2" class="table table-bordered table-striped table-condensed">
<thead>
<tr>
<th>ProductVariation Name</th>
<th >Action</th>
</tr>
</thead>
<tbody>
@if(isset($productsvariation))
@foreach($productsvariation as $productsvariations)
<tr>
<td>{{$productsvariations->variation_title}}</td>
<td><a class="btn btn-primary" href="{{url('admin/variation/editproductvariation')}}/{{$productsvariations->id}}">Edit ProductVariation</a>&nbsp;<a class="btn btn-primary" href="{{url('admin/variation/deleteproductvariation')}}/{{$productsvariations->id}}">Delete ProductVariation</a></td>
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