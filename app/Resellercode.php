<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resellercode extends Model
{
    protected $table = 'authorization_code';
    protected $primaryKey = 'id';
    protected $fillable   = ['id','reseller_code','status','created_at','updated_at'];
    protected $id = 1;
    protected $reseller_code;
    protected $status;
    protected $created_at;
    protected $updated_at;
}
