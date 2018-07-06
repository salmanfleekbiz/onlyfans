<div class="panel-body">
<section id="unseen">
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Product Name</label>
<div class="col-lg-3">
<input class="form-control " id="productname" name="productname" type="text" value="@if(isset($productdata)) {{$productdata->product_name}} @endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Product Image</label>
<div class="col-lg-3">
<input class="form-control" id="productimage" name="productimage" type="file">
@if(isset($productdata))
<img src="{{url('public/uploads/productimages')}}/{{$productdata->product_image}}" width="50" height="50">
@endif
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Product Category</label>
<div class="col-lg-3">
<?php 
foreach($categories as $category){
		$parent_cats[] = $category->parent_cat_name;
}
$arr = array_unique($parent_cats);
?>
<select class="form-control m-bot15" name="productcategory" id="productcategory">
<option value="">Select Category</option>	
<?php for ($i=0; $i < count($arr) ; $i++) { ?>
<optgroup label="<?php echo $arr[$i]; ?>">
<?php	
foreach ($categories as $key => $value) {
if($arr[$i] == $value->parent_cat_name){
?>
 <option value="<?php echo $value->sub_cat_id; ?>" <?php if (isset($productdata->cat_id) && $productdata->cat_id == $value->sub_cat_id){ echo 'selected="selected"'; }else{} ?>><?php echo $value->sub_cat_name; ?></option>
<?php	
}
}
?>
</optgroup>
<?php
}
?>
</select>
</div>
<label for="confirm_password" class="control-label col-lg-2">Frame Color</label>
<div class="col-lg-3">
<input class="form-control " id="color" name="color[]" type="checkbox" value="black" <?php if(isset($productdata->frame_color) && in_array('black',explode(',',$productdata->frame_color))){ echo 'checked="checked"'; }else{} ?>> Black <input class="form-control " id="color1" name="color[]" type="checkbox" value="silver" <?php if(isset($productdata->frame_color) && in_array('silver',explode(',',$productdata->frame_color))){ echo 'checked="checked"'; }else{} ?>> Silver
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Width</label>
<div class="col-lg-3">
<input class="form-control " id="width" name="width" type="text" value="@if(isset($productdata)) {{$productdata->width}} @endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Height</label>
<div class="col-lg-3">
<input class="form-control " id="height" name="height" type="text" value="@if(isset($productdata)) {{$productdata->height}} @endif">
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Assembly Time</label>
<div class="col-lg-3">
<input class="form-control " id="assemblytime" name="assemblytime" type="text" value="@if(isset($productdata)) {{$productdata->assemblytime}} @endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Stand</label>
<div class="col-lg-3">
<input class="form-control " id="stand" name="stand" type="text" value="@if(isset($productdata)) {{$productdata->stand}} @endif">
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Graphic Attachment</label>
<div class="col-lg-3">
<input class="form-control " id="graphicattachment" name="graphicattachment" type="text" value="@if(isset($productdata)) {{$productdata->graphic_attachment}} @endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Case</label>
<div class="col-lg-3">
<input class="form-control " id="case" name="case" type="text" value="@if(isset($productdata)) {{$productdata->cases}} @endif">
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Graphic Min Width</label>
<div class="col-lg-3">
<input class="form-control " id="graphicminwidth" name="graphicminwidth" type="text" value="@if(isset($productdata)){{$productdata->min_width}}@endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Graphic Max Width</label>
<div class="col-lg-3">
<input class="form-control " id="graphicmaxwidth" name="graphicmaxwidth" type="text" value="@if(isset($productdata)){{$productdata->max_width}}@endif">
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Graphic Min Height</label>
<div class="col-lg-3">
<input class="form-control " id="graphicminheight" name="graphicminheight" type="text" value="@if(isset($productdata)){{$productdata->min_height}}@endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Graphic Max Height</label>
<div class="col-lg-3">
<input class="form-control " id="graphicmaxheight" name="graphicmaxheight" type="text" value="@if(isset($productdata)){{$productdata->max_height}}@endif">
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Product Description</label>
<div class="col-lg-6">
<textarea name="productdescription" id="productdescription" rows="5" cols="50">@if(isset($productdata)) {{$productdata->product_description}} @endif</textarea>
</div>
</div>
<div class="col-lg-offset-3 col-lg-6">
@if(isset($productdata))
<button class="btn btn-primary" type="submit">Update</button>
@else
<button class="btn btn-primary" type="submit">Add</button>
@endif	
</div>
</section>
</div>

