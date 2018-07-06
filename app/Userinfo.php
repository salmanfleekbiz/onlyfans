<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $table = 'user_info';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','user_id','company_name','address1','address2','city','state','zip','country','phone','phone_guranted','reseller_code','tax','sale_notification','shipping_company','shipping_f_name','shipping_l_name','shipping_address1','shipping_address2','shipping_city','shipping_state','shipping_zip','shipping_country', 'created_at','updated_at'];
    protected $id = 1;
    protected $user_id;
    protected $company_name;
    protected $address1;
    protected $address2;
    protected $city;
    protected $state;
    protected $zip;
    protected $country;
    protected $phone;
    protected $phone_guranted;
    protected $reseller_code;
    protected $tax;
    protected $sale_notification;
    protected $shipping_company;
    protected $shipping_f_name;
    protected $shipping_l_name;
    protected $shipping_address1;
    protected $shipping_address2;
    protected $shipping_city;
    protected $shipping_state;
    protected $shipping_zip;
    protected $shipping_country;
    protected $created_at;
    protected $updated_at;
}
