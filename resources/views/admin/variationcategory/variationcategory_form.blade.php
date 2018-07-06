<div class="panel-body">
<section id="unseen">
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Minimum Quantity</label>
<div class="col-lg-3">
<input class="form-control " id="minimumqty" name="minimumqty" type="text" value="@if(isset($categorydata)){{$categorydata->min_qty }}@endif">
</div>
<label for="confirm_password" class="control-label col-lg-2">Maximum Quantity</label>
<div class="col-lg-3">
<input class="form-control " id="maximumqty" name="maximumqty" type="text" value="@if(isset($categorydata)){{$categorydata->max_qty }}@endif">
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

