<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table='inventarios';
    protected $fillable = [
        'cantidad',
        'created_by',
        'updated_by',
        'id_bodega',
        'id_producto'
    ];
}
