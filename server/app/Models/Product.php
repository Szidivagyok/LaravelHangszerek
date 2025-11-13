<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

     //...
    //Ne keresd a prodact táblákban a timestamps mezőket
    public $timestamps = false;

    //Ha létrehozunk egy új terméket, akkor milyen adatokat tudunk neki megadni
    //Ez kötelező
    protected $fillable = [
        'category',
        'name',
        'description',
        'picture',
        'price',
        'stock',
        'is_published'
    ];
}
