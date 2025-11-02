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
                <div class="mb-4">
                    <x-parrafo class="!mb-0">Dirección: {{ $sucursal->direccion }}</x-parrafo>
                    <x-parrafo class="!mb-0">Teléfono: {{ $sucursal->telefono }}</x-parrafo>
                </div>
                <x-boton-verde>Ver empleados</x-boton-verde>
                <x-boton-rojo>Gestionar Sucursal</x-boton-rojo>
            </x-contenedor-info>
        @endforeach
    </div>
@endsection