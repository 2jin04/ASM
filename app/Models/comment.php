<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public $primaryKey = 'id';
    protected $attributes = [];
    protected $dates = ['dateSubmitted	'];
    protected $fillable = ['Content', 'dateSubmitted','status','idUser','idProduct'];
}
