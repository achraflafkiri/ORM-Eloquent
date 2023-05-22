<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Commande extends Model
{
    use HasFactory;

    protected $table = "commandes";

    protected $primaryKey = "numero";

    protected $fillable = [
        "numero",
        "date_cmd",
        "client_id_clt"
    ];

    public $incrementing = false;

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id_clt', 'id_clt');
    }
}
