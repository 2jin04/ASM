<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'category';
    protected $primarykey = 'id';
    protected $attributes = ['anHien'=>0,'thuTu'=>1];
    protected $fillable = [
        'name',
        'thuTu',
        'anHien',
    ];
}
