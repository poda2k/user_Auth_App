<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $tableName = 'products';
    protected $fillable =[
        'id',
        'name',
        'price',
        'description',
        'quantity',
        'imagePath'
    ];
}
