<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','cat_id','product_name','product_image','frame_color','width','height','assemblytime','stand','graphic_attachment','cases','min_width','max_width','min_height','max_height','product_description', 'created_at','updated_at'];
    protected $id = 1;
    protected $cat_id;
    protected $product_name;
    protected $product_image;
    protected $frame_color;
    protected $width;
    protected $height;
    protected $assemblytime;
    protected $stand;
    protected $graphic_attachment;
    protected $cases;
    protected $min_width;
    protected $max_width;
    protected $min_height;
    protected $max_height;
    protected $product_description;
    protected $created_at;
    protected $updated_at;
}