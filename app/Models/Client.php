<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $primaryKey = "id_clt";

    protected $fillable = [
        "id_clt",
        "nom",
        "prenom",
        "adresse"
    ];

    public $incrementing = false;

    public function commandes()
{
    return $this->hasMany(Commande::class, 'client_id_clt', 'id_clt');
}

}
