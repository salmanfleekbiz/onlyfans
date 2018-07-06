<div class="panel-body">
<section id="unseen">
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Category Name</label>
<div class="col-lg-3">
<input class="form-control " id="categoryname" name="categoryname" type="text" value="@if(isset($categorydata)) {{$categorydata->category_name }} @endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Category Image</label>
<div class="col-lg-3">
<input class="form-control " id="categoryimage" name="categoryimage" type="file">
@if(isset($categorydata))
<img src="{{url('public/uploads/categoryimages')}}/{{$categorydata->category_image}}" width="50" height="50">
@endif
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Category Name</label>
<div class="col-lg-3">
<select class="form-control m-bot15" name="categoryid" id="categoryid">
<option value="">Select Parent Category</option>	
@if(isset($categories))
@foreach($categories as $category)
<option value="{{$category->id}}" @if (isset($categorydata->cat_id) && $categorydata->cat_id == $category->id) {!!'selected="selected"'!!} @endif>{{$category->category_name}}</option>
@endforeach
@endif
</select>	
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Category Description</label>
<div class="col-lg-6">
<textarea name="categorydescription" id="categorydescription" rows="5" cols="50">@if(isset($categorydata)) {{$categorydata->category_description }} @endif</textarea>
</div>
</div>
<div class="col-lg-offset-3 col-lg-6">
@if(isset($categorydata))
<button class="btn btn-primary" type="submit">Update</button>
@else
<button class="btn btn-primary" type="submit">Add</button>
@endif	
</div>
</section>
</div>

