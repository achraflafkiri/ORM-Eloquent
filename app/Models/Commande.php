<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $table = "commandes";

    protected $primaryKey = "numero";

    protected $fillable = [
        "date_cmd",
        "client_id_clt"
    ];

    public $incrementing = false;
}
