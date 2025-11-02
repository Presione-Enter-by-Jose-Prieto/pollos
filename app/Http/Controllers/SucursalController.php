<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function listar()
    {
        $sucursales = Sucursal::all();
        return view('app.sucursales', compact('sucursales'));
    }
}
