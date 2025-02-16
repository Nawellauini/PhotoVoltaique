<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligneCommande extends Model
{
    public function commande(){
        return $this->belongsTo(Commande::class, 'commande_id','id'); 
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id','id'); //belongsTo hia one 
    }

    use HasFactory;
}
