<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;

    protected $fillable = ['user_id', 'productstype_id' ,'productsrecommend_id', 'name', 'description', 'img_url', 'created_at'];
}
