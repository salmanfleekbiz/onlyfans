<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productvariationcategory extends Model
{
    protected $table = 'products_variation';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','min_qty','max_qty','created_at','updated_at'];
    protected $id = 1;
    protected $min_qty;
    protected $max_qty;
    protected $created_at;
    protected $updated_at;
}
