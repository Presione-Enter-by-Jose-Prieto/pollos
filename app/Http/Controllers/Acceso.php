<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Acceso extends Controller
{
    public function acceso(Request $request)
    {
        // Validar campos requeridos
        $validated = $request->validate([
            'document' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Intentar autenticar usando las credenciales proporcionadas
        $credentials = ['document' => $validated['document'], 'password' => $validated['password']];

        if (Auth::attempt($credentials)) {
            // Regenerar la sesión para prevenir session fixation
            $request->session()->regenerate();

            // Redirigir al menú principal (ajusta la URL o usa route('menu') si tienes una ruta nombrada)
            return redirect('/menu');
        }

        // Credenciales inválidas: volver atrás con error y conservar el input excepto la contraseña
        return back()->withErrors(['document' => 'Documento o contraseña inválidos'])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
