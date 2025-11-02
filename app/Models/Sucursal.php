<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursales';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'encargado_id',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
    
    public function encargado(){
        return $this->belongsTo(User::class, 'encargado_id');
    }

}
