<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','cat_id','category_name','category_image','category_description', 'created_at','updated_at'];
    protected $id = 1;
    protected $cat_id;
    protected $category_name;
    protected $category_image;
    protected $category_description;
    protected $created_at;
    protected $updated_at;
}
