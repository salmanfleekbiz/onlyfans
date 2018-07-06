<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productproofs extends Model
{
    protected $table = 'products_proof';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','product_id','title','amount','created_at','updated_at'];
    protected $id = 1;
    protected $product_id;
    protected $title;
    protected $amount;
    protected $created_at;
    protected $updated_at;
}