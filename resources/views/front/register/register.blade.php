@extends('front.layout.head')
@section('description')
This is Personal Details
@endsection
@section('title')
Sugar House Banners
@endsection
@section('contents')
</div>
<section class="title-bar ">
<div class="text-center">
<h3>Register</h3>
</div>
</section>
<section class="register_sec form_theme">
<div id="success" class="bs-example"></div>
<form name="userregister" id="userregister" method="post" action="" enctype="multipart/form-data">
{{csrf_field()}}
<div class="container">	
<div class="col-md-6">
<h4>Login Information</h4>
<label class="lblform">Email Address *</label>
<input placeholder="Enter your email" type="text" name="useremail" id="useremail" class="txt_theme" />
<div id="emailerror"></div>
<label class="lblform">Password * <small>(4-18 characters)</small></label>
<input placeholder="Enter your password" type="password" name="userpassword" id="userpassword" class="txt_theme" />
<label class="lblform">Confirm Password *</label>
<input placeholder="Confirm your password" type="password" name="confpassword" id="confpassword" class="txt_theme" />
<hr />
<h4>**If paying with credit card, billing address must match address on card**</h4>
<label class="lblform">Company</label>
<input placeholder="Enter your Company Name" name="company_name" id="company_name" type="text" class="txt_theme" />
<label class="lblform">First Name *</label>
<input placeholder="Enter your First Name" type="text" name="f_name" id="f_name" class="txt_theme" />
<label class="lblform">Last Name *</label>
<input placeholder="Enter your Last Name" type="text" name="l_name" id="l_name" class="txt_theme" />
<label class="lblform">Address *</label>
<input placeholder="Enter your Address" type="text" name="adress" id="adress" class="txt_theme" style="margin-bottom:10px;"/>
<input placeholder="" type="text" name="adress2" id="adress2" class="txt_theme" />
<label class="lblform">City *</label>
<input placeholder="City" type="text" name="city" id="city" class="txt_theme" />
<label class="lblform">State / Province *</label>
<input placeholder="State / Province" type="text" name="state" id="state" class="txt_theme" />
<label class="lblform">Zip / Postal *</label>
<input placeholder="Zip / Postal " type="text" name="postalcode" id="postalcode" class="txt_theme" />
<label class="lblform">Country *</label>
<select class="txt_theme" name="country" id="country">
<option value="usa">USA</option>
<option value="canada">CANADA</option>
</select>
<label class="lblform">Phone *</label>
<input placeholder="(000) 123-1234" type="text" name="phone" id="phone" class="txt_theme" />
<label class="lblform">Phone <small>(required for guaranteed delivery)</small></label>
<input placeholder="(000) 123-1234" type="text" name="phone_guranted" id="phone_guranted" class="txt_theme" />
<label class="lblform">Authorized Reseller <small>(enter authorization code or leave empty)</small></label>
<input placeholder="" type="text" name="authorization_code" id="authorization_code" class="txt_theme" />
<div id="codeerror"></div>
<p class="">Tax Exempt <small>Applies to Utah Residents Only </small></p>
<input type="radio" name="tax" id="tax" value="no" checked="checked" /> <label for="tax">No</label> &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="tax" id="tax" value="yes" /> <label for="tax">Yes</label>
<br />
<br />
<p class="">Sales/Specials <small>Would you like to receive notification of specials and sales? Your email address will not be given or sold to anyone else or used for any other purposes.</small></p>
<input type="radio" name="sales" id="sales" value="no" checked="checked" /> <label for="sales">No</label> &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="radio" name="sales" id="sales" value="yes" /> <label for="sales"> Yes</label> 
</div>
<div class="col-md-6">
<h4>Shipping Information</h4>
<p class="shiping_lable"><input type="checkbox" name="shiping_lable_add" id="shiping_lable_add" value="1" /> 
<label for="shiping_lable_add">Check here if billing and shipping are the same</label>
</p>
<label class="lblform">Company</label>
<input placeholder="Enter your Company Name" type="text" name="shipping_company_name" id="shipping_company_name" class="txt_theme" />
<label class="lblform">First Name *</label>
<input placeholder="Enter your First Name" type="text" name="shipping_f_name" id="shipping_f_name" class="txt_theme" />
<label class="lblform">Last Name *</label>
<input placeholder="Enter your Last Name" type="text" name="shipping_l_name" id="shipping_l_name" class="txt_theme" />
<label class="lblform">Address *</label>
<input placeholder="Enter your Address" type="text" name="shipping_address1" id="shipping_address1" class="txt_theme" style="margin-bottom:10px;"/>
<input placeholder="" type="text" class="txt_theme" name="shipping_address2" id="shipping_address2" />
<label class="lblform">City *</label>
<input placeholder="City" type="text" class="txt_theme" name="shipping_city" id="shipping_city" />
<label class="lblform">State / Province *</label>
<input placeholder="State / Province" type="text" class="txt_theme" name="shipping_state" id="shipping_state" />
<label class="lblform">Zip / Postal *</label>
<input placeholder="Zip / Postal " type="text" class="txt_theme" name="shipping_postalcode" id="shipping_postalcode" />
<label class="lblform">Country *</label>
<select class="txt_theme" name="shipping_country" id="shipping_country">
<option value="usa">USA</option>
<option value="canada">CANADA</option>
</select>
<input value="Save and Continue" class="btn btn-red btn-form" type="submit" id="submit" name="submit">
</div>
</div>
</form>
</section>
<script type="text/javascript">
jQuery("#userregister").validate({
rules: {
	useremail: {
	required: true,
	email: true
	},
	userpassword: {required: true, minlength:4},
	confpassword: {
	equalTo: "#userpassword"
	},
	company_name: "required",
	f_name: "required",
	l_name: "required",
	adress: "required",
	city: "required",
	state: "required",
	postalcode: "required",
	country: "required",
	phone: {required: true, minlength:10},
	shipping_company_name: "required",
	shipping_f_name: "required",
	shipping_l_name: "required",
	shipping_address1: "required",
	shipping_city: "required",
	shipping_state: "required",
	shipping_postalcode: "required",
	shipping_country: "required"
},
messages: {
	useremail: { required: "Enter your email", email:"Enter your correct email"},
	userpassword: { required: "Enter your password", minlength:"Minimum Lenght 4"},
	confpassword: "Enter your confirm password",
	company_name: "Enter company name",
	f_name: "Enter first name",
	l_name: "Enter last name",
	adress: "Enter address",
	city: "Enter city",
	state: "Enter state",
	postalcode: "Enter postal code",
	country: "Select country",
	phone: { required: "Enter phone number", minlength:"Minimum phone 10 digit"},
	shipping_company_name: "Enter company name",
	shipping_f_name: "Enter first name",
	shipping_l_name: "Enter last name",
	shipping_address1: "Enter address",
	shipping_city: "Enter city",
	shipping_state: "Enter state",
	shipping_postalcode: "Enter postal code",
	shipping_country: "Select country"
},
submitHandler: function() {
userregister();
},
success: function(label) {
	label.remove();
}
});	
function userregister(){
var _token = $( "input[name*='_token']" ).val();
var useremail = $('#useremail').val();
var userpassword = $('#userpassword').val();
var company_name = $('#company_name').val();
var f_name = $('#f_name').val();
var l_name = $('#l_name').val();
var adress = $('#adress').val();	
var adress2 = $('#adress2').val();
var city = $('#city').val();
var state = $('#state').val();
var postalcode = $('#postalcode').val();
var country = $('#country').val();
var phone = $('#phone').val();
var phone_guranted = $('#phone_guranted').val();
var authorization_code = $('#authorization_code').val();
var tax = $('#tax:checked').val();
var sales = $('#sales:checked').val();
var shipping_company_name = $('#shipping_company_name').val();
var shipping_f_name = $('#shipping_f_name').val();
var shipping_l_name = $('#shipping_l_name').val();
var shipping_address1 = $('#shipping_address1').val();
var shipping_address2 = $('#shipping_address2').val();
var shipping_city = $('#shipping_city').val();
var shipping_state = $('#shipping_state').val();
var shipping_postalcode = $('#shipping_postalcode').val();
var shipping_country = $('#shipping_country').val();
var formid = document.getElementById('userregister');
$.ajax({
url: "userregister",
data: {_token:_token,useremail:useremail,userpassword:userpassword,company_name:company_name,f_name:f_name,l_name:l_name,adress:adress,adress2:adress2,city:city,state:state,postalcode:postalcode,country:country,phone:phone,phone_guranted:phone_guranted,authorization_code:authorization_code,tax:tax,sales:sales,shipping_company_name:shipping_company_name,shipping_f_name:shipping_f_name,shipping_l_name:shipping_l_name,shipping_address1:shipping_address1,shipping_address2:shipping_address2,shipping_city:shipping_city,shipping_state:shipping_state,shipping_postalcode:shipping_postalcode,shipping_country:shipping_country},
type: 'POST',
beforeSend: function () {
},
success: function (result) {
	if(result == 'emailexist'){
		$("#success").html("");
		$("#codeerror").html('');
		$("#emailerror").html('<span style="color:red;">Email already exist .</span>');
	}else if(result == 'codenotmatch'){
		$("#success").html("");
		$("#emailerror").html('');
		$("#codeerror").html('<span style="color:red;">Authorization code not match.</span>');
	}else if(result == 'useraddsucess'){
		$("#emailerror").html('');
		$("#codeerror").html('');
		$("#success").html("<div class='alert alert-success fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Success!</strong> User Register.</div>");
		formid.reset();
	}
},
error: function () {
}
});	
}
</script>
@endsection