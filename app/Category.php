<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','category_name','category_image','category_description', 'created_at','updated_at'];
    protected $id = 1;
    protected $category_name;
    protected $category_image;
    protected $category_description;
    protected $created_at;
    protected $updated_at;
}
