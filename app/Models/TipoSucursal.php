<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSucursal extends Model
{
    use HasFactory;

    protected $fillable= ['Tipo'];

     // Relación con el modelo Sucursal
     public function sucursal()
     {
         return $this->hasOne(Sucursal::class, 'tipo_sucursals_id');
     }
}
