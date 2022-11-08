<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable =[
        'pname',
        'pdesh',
        'cat',
        'scat',
        'price',
        'status',
    ]; 
}
