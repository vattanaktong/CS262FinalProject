<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productstype extends Model
{
    use HasFactory;
    protected $table = 'productstype';
    public $timestamps = true;

    protected $fillable = ['user_id', 'id' ,'name','description', 'created_at'];
}
