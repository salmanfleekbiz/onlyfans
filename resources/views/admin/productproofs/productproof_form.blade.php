<div class="panel-body">
<section id="unseen">
<div class="form-group ">
<label for="password" class="control-label col-lg-2">ProductProof Name</label>
<div class="col-lg-3">
<input class="form-control " id="productproofname" name="productproofname" type="text" value="@if(isset($productproofdata)){{$productproofdata->title}}@endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">ProductProof Amount</label>
<div class="col-lg-3">
<input class="form-control " id="productproofamount" name="productproofamount" type="text" value="@if(isset($productproofdata)){{$productproofdata->amount}}@endif">
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Product Name</label>
<div class="col-lg-3">
<select class="form-control m-bot15" name="productid" id="productid">
<option value="">Select Product</option>	
@if(isset($products))
@foreach($products as $product)
<option value="{{$product->id}}" @if (isset($productproofdata->product_id) && $productproofdata->product_id == $product->id) {!!'selected="selected"'!!} @endif>{{$product->product_name}}</option>
@endforeach
@endif
</select>	
</div>
</div>
<div class="col-lg-offset-3 col-lg-6">
@if(isset($productproofdata))
<button class="btn btn-primary" type="submit">Update</button>
@else
<button class="btn btn-primary" type="submit">Add</button>
@endif	
</div>
</section>
</div>

