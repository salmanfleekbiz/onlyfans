<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productvariation extends Model
{
    protected $table = 'products_variation_price';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','product_id','variation_id','variation_title','variation_price','created_at','updated_at'];
    protected $id = 1;
    protected $product_id;
    protected $variation_id;
    protected $variation_title;
    protected $variation_price;
    protected $created_at;
    protected $updated_at;
}