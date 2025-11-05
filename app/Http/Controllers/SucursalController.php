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

    public function empleados($sucursalId)
    {
        $sucursal = Sucursal::findOrFail($sucursalId);
        $empleados = $sucursal->empleados; // Assuming a relationship is defined in the Sucursal model
        return view('app.empleados', compact('sucursal', 'empleados'));
    }
}
