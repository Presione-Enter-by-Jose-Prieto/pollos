@extends('layouts.app')

@section('title', 'Menú Principal')

@section('content')
    <div class="flex flex-row gap-4">
        <x-contenedor-info class="w-[50%]">
            <x-titulo-h2>
                Bienvenido, {{ Auth::user()->name }}
            </x-titulo-h2>
            <x-parrafo>
                Hola {{ Auth::user()->name }}, este es tu panel principal. Desde aquí puedes gestionar tus actividades, pedidos y supervisar las operaciones asignadas a tu rol.
            </x-parrafo>
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