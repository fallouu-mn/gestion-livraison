<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parcel extends Model
{
    use HasFactory;
    //Definir l'accessibilite de nos propriétés
    protected $fillable=[
    'address_dep',
     'address_arr',
    'weigh',
     'tracking_number',
    'statuts'
];
}
