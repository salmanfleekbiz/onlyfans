<div class="panel-body">
<section id="unseen">
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Product Name</label>
<div class="col-lg-3">
<select class="form-control m-bot15" name="productid" id="productid">
<option value="">Select Product</option>	
@if(isset($products))
@foreach($products as $product)
<option value="{{$product->id}}" @if (isset($productvariationdata->product_id) && $productvariationdata->product_id == $product->id) {!!'selected="selected"'!!} @endif>{{$product->product_name}}</option>
@endforeach
@endif
</select>	
</div>
<label for="password" class="control-label col-lg-2">Variation Category</label>
<div class="col-lg-3">
<select class="form-control m-bot15" name="variationid" id="variationid">
<option value="">Select Variation Category</option>	
@if(isset($products_variation_category))
@foreach($products_variation_category as $products_variation_categorys)
<option value="{{$products_variation_categorys->id}}" @if (isset($productvariationdata->variation_id) && $productvariationdata->variation_id == $products_variation_categorys->id) {!!'selected="selected"'!!} @endif>{{$products_variation_categorys->min_qty}} - {{$products_variation_categorys->max_qty}}</option>
@endforeach
@endif
</select>	
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Title</label>
<div class="col-lg-3">
<input class="form-control " id="variationtitle" name="variationtitle" type="text" value="@if(isset($productvariationdata)){{$productvariationdata->variation_title }}@endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Price</label>
<div class="col-lg-3">
<input class="form-control " id="variationprice" name="variationprice" type="text" value="@if(isset($productvariationdata)){{$productvariationdata->variation_price }}@endif">
</div>
</div>
<div class="col-lg-offset-3 col-lg-6">
@if(isset($productvariationdata))
<button class="btn btn-primary" type="submit">Update</button>
@else
<button class="btn btn-primary" type="submit">Add</button>
@endif	
</div>
</section>
</div>

