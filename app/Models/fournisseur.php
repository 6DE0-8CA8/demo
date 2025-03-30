<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class fournisseur extends Model
{

    use HasFactory;

 protected $fillable = [
    'nom',
    'prenom',
    'adresse',
    'email',
    'telephone'

 ];
 

    public function produits()
     {
       return $this->hasMany(produit::class);
     }

}
