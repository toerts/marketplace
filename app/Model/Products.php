<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table='Products';
    protected $primary_id = 'product_id';
    protected $fillable = ['name'];
}
