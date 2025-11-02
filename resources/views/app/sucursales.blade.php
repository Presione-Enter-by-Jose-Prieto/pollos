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

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
       
        @foreach ($sucursales as $sucursal)
            <x-contenedor-info class="!mb-0">
                <x-titulo-h2> {{ $sucursal->nombre }} </x-titulo-h2>
                <div class="mb-2">
                    <x-parrafo class="!mb-0">Dirección: {{ $sucursal->direccion }}</x-parrafo>
                    <x-parrafo class="!mb-0">Teléfono: {{ $sucursal->telefono }}</x-parrafo>
                </div>

                <div class="w-full h-px bg-gray-300"></div>
                <div class="mt-3">
                    <x-boton-gris>Ver empleados</x-boton-gris>
                    <x-boton-rojo>Gestionar Sucursal</x-boton-rojo>
                </div>
            </x-contenedor-info>
        @endforeach
    </div>
@endsection