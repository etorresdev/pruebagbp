<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    protected $table='historials';
    protected $fillable = [
        'cantidad',
        'id_bodega_origen',
        'id_bodega_destino',
        'id_inventario',
        'created_by',
        'updated_by'
    ];
}
