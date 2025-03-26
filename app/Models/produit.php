<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    public function fournisseur()
    {
        return $this->belongsTo(fournisseur::class);

    }
    public function cathegorie()
    {
        return $this->belongsTo(cathegorie::class);
    }
}
