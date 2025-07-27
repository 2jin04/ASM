<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    public $primarykey = 'id';
    protected $attributes = ['anHien'=>1,'hot'=>0,'view'=>0];
    protected $dates = ['dateSubmitted'];
    protected $fillable = [
        'name',
        'describe',
        'image',
        'price',
        'priceSale',
        'quantity',
        'sold',
        'hot',
        'view',
        'label',
        'anHien',
        'dateSubmitted',
        'slug',
        'idCategory',
    ];
}
