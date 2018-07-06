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
<div class="row">
<div class="col-sm-12">
<section class="panel">
<header class="panel-heading">
Reseller Code
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
<a class="btn btn-primary" href="{{url('admin/resellercode/createresellercode')}}">Add New Reseller Code</a>
</div>	
<table  id="example2" class="table table-bordered table-striped table-condensed">
<thead>
<tr>
<th>Reseller Code</th>
<th>Reseller Code Used</th>
<th >Action</th>
</tr>
</thead>
<tbody>
@if(isset($resellercode))
@foreach($resellercode as $resellercodes)
<tr>
<td>{{$resellercodes->reseller_code}}</td>
<td>@if($resellercodes->status == 1){{'Code Used'}}@else{{'Not Used'}}@endif</td>
<td>@if($resellercodes->status == 0)<a class="btn btn-primary" href="{{url('admin/resellercode/editresellercode')}}/{{$resellercodes->id}}">Edit Reseller Code</a>&nbsp;<a class="btn btn-primary" href="{{url('admin/deleteresellercode')}}/{{$resellercodes->id}}">Delete Reseller Code</a>@else{{'No action required'}}@endif</td>
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