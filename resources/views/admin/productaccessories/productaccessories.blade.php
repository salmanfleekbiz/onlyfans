@extends('admin.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Sugar Home - Admin ProductAccessories
@endsection
@section('contents')
@include('admin.layout.sidebar')
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
ProductAccessories
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
<a class="btn btn-primary" href="{{url('admin/product/createproductaccessories')}}">Add New ProductAccessories</a>
</div>	
<table  id="example2" class="table table-bordered table-striped table-condensed">
<thead>
<tr>
<th>ProductAccessories Name</th>
<th >Action</th>
</tr>
</thead>
<tbody>
@if(isset($productsaccessories))
@foreach($productsaccessories as $productsaccessoriess)
<tr>
<td>{{$productsaccessoriess->title}}</td>
<td><a class="btn btn-primary" href="{{url('admin/product/editproductaccessories')}}/{{$productsaccessoriess->id}}">Edit ProductAccessories</a>&nbsp;<a class="btn btn-primary" href="{{url('admin/product/deleteproductaccessories')}}/{{$productsaccessoriess->id}}">Delete ProductAccessories</a></td>
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