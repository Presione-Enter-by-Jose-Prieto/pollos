@extends('layouts.app')

@section('title', 'Sucursales')

@section('content')
    <x-contenedor-info>
        <x-titulo-h2> Nueva Sucursal </x-titulo-h2>
        <div class="mb-4">
            <x-parrafo class="">Agrega una nueva sucursal a la empresa.</x-parrafo>
        </div>
        <x-boton-azul>Agregar Sucursal</x-boton-azul>
    </x-contenedor-info>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-10">
       
        @foreach ($sucursales as $sucursal)
            <x-contenedor-info class="!mb-0">
                <x-titulo-h2> {{ $sucursal->nombre }} </x-titulo-h2>
                <div class="mb-2">
                    <x-parrafo class="!mb-0">Dirección: {{ $sucursal->direccion }}</x-parrafo>
                    <x-parrafo class="!mb-0">Teléfono: {{ $sucursal->telefono }}</x-parrafo>
                    {{-- <x-parrafo class="!mb-0">Horario: {{ $sucursal->horario }}</x-parrafo> --}}
                    {{-- <x-parrafo class="!mb-0">Ubicación: {{ $sucursal->departamento }}, {{ $sucursal->ciudad }}</x-parrafo> --}}
                    <x-parrafo class="!mb-0">Encargado: {{ $sucursal->encargado->name }}</x-parrafo>
                </div>

                <div class="w-full h-px bg-gray-300"></div>
                <div class="mt-3 flex justify-between gap-2">
                    <div>
                        <x-boton-gris href="{{ route('sucursales.empleados', ['id' => $sucursal->id]) }}">Ver empleados</x-boton-gris>
                    </div>

                    <div>
                        <x-boton-naranja>Editar</x-boton-naranja>
                        <x-boton-rojo>Gestionar</x-boton-rojo>
                    </div>
                </div>
            </x-contenedor-info>
        @endforeach
    </div>
@endsection