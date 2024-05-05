<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scrapped_data extends Model
{
    public $timestamps=false;
    protected $table='products';
    protected $fillable = ['title', 'link', 'image_source', 'price', 'description','id'];
    use HasFactory;
}
