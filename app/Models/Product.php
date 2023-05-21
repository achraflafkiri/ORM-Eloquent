<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $primaryKey = "id_prd";
    
    protected $fillable = [
        "designation",
        "prix",
        "qte_stock"
    ];

    public $incrementing = false;

}
