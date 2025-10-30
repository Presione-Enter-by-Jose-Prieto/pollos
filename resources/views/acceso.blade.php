@extends('layouts.auth')

@section('title', 'Acceso')

@section('content')
<div class="flex flex-row items-center">
    <div class="bg-gray-100 h-68 w-80 px-6 rounded-l-lg shadow-lg">
        <x-logo/>
    </div>
    <div class="bg-white h-80 w-90 p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-3 text-center text-gray-800">Iniciar Sesión</h1>
        <form action="{{ route('acceso') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <label class="text-sm text-gray-600" for="document">Documento</label><br>
            <input 
                type="text" 
                id="document" 
                name="document"
                placeholder="Ingrese su número de documento" 
                class="w-full px-2 py-1 mt-2 mb-2 border border-gray-300 rounded text-base focus:outline-none"
                value="{{ old('document') }}"
            ><br>

            <label class="text-sm text-gray-600" for="password">Contraseña</label><br>
            <input 
                type="password" 
                id="password" 
                name="password"
                placeholder="Ingrese su contraseña" 
                class="w-full px-2 py-1 mt-2 mb-2 border border-gray-300 rounded text-base focus:outline-none"
            ><br>

            <x-boton-rojo type="submit" class="w-full !text-lg mt-4">Iniciar Sesión</x-boton-rojo>
        </form>
    </div>
</div>
<small class="text-gray-300 mt-8 block text-center">
    <p class="text-sm">Cúcuta - Norte de Santader</p>
    &copy; {{ date('Y') }} Akikiriki. Todos los derechos reservados.
</small>
@endsection
