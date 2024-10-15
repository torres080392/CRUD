<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;



    protected $fillable= ['numero','nombre','cuidad','telefono'];

    // Relación con el modelo TipoDeSucursal
    public function tipoSucursal()
    {
        return $this->belongsTo(TipoSucursal::class, 'tipo_sucursals_id');
    }
}
