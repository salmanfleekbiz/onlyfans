<div class="panel-body">
<section id="unseen">
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Reseller Code</label>
<div class="col-lg-3">
<input class="form-control " id="reseller_code" name="reseller_code" type="text" value="@if(isset($resellerdata)){{$resellerdata->reseller_code}}@endif">
</div>
</div>
<div class="col-lg-offset-3 col-lg-6">
@if(isset($resellerdata))
<button class="btn btn-primary" type="submit">Update</button>
@else
<button class="btn btn-primary" type="submit">Add</button>
@endif	
</div>
</section>
</div>

