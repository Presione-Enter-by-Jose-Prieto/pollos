@extends('layouts.app')

@section('title', 'Menú Principal')

@section('content')
    <div class="flex flex-row gap-4">
        <x-contenedor-info class="w-[50%] flex flex-row items-center gap-10">
            <div class="w-50">
                <x-logo />
            </div>
            <div class="h-20 w-px bg-gray-300"></div>
            <div>
                <x-titulo-h2>
                    Bienvenido, {{ Auth::user()->name }}
                </x-titulo-h2>
                <x-parrafo class="w-[70%]">
                    Hola {{ Auth::user()->name }}, este es tu panel principal. Desde aquí puedes gestionar tus actividades, pedidos y supervisar las operaciones asignadas a tu rol.
                </x-parrafo>
            </div>
        </x-contenedor-info>
        <x-contenedor-info class="w-[50%]">
            <x-titulo-h2>
                Funcionalidades Disponibles
            </x-titulo-h2>
            
            <ul class="list-disc list-inside text-[13px] leading-4">
                <li>Revisa y administra los pedidos pendientes.</li>
                <li>Actualiza el estado de los pedidos en tiempo real.</li>
                <li>Accede a reportes y estadísticas de ventas.</li>
                <li>Gestiona la información de clientes y productos.</li>
            </ul>
        </x-contenedor-info>
    </div>
@endsection