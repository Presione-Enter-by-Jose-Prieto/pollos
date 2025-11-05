{{-- filepath: /Applications/XAMPP/xamppfiles/htdocs/pollos/resources/views/app/empleados.blade.php --}}
@extends('layouts.app')

@section('title', 'Empleados de ' . $sucursal->nombre)

@section('content')
    <x-contenedor-info>
        <x-titulo-h2>Empleados de {{ $sucursal->nombre }}</x-titulo-h2>
        <x-parrafo class="!mb-0">Dirección: {{ $sucursal->direccion }}</x-parrafo>
        <x-parrafo class="!mb-0">Teléfono: {{ $sucursal->telefono }}</x-parrafo>
    </x-contenedor-info>

    <div class="mt-6">
        @if($empleados->count())
            <table class="w-full mb-4 max-w-full bg-transparent border border-[#dddddd] rounded-[4px] border-separate" style="border-collapse: separate;">
                <thead>
                    <tr>
                        <th class="px-4 py-1 text-left border-b border-[#dddddd]">ID</th>
                        <th class="px-4 py-1 text-left border-b border-[#dddddd]">Nombre</th>
                        <th class="px-4 py-1 text-left border-b border-[#dddddd]">Documento</th>
                        <th class="px-4 py-1 text-left border-b border-[#dddddd]">Rol</th>
                        <th class="px-4 py-1 text-left border-b border-[#dddddd]">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr class="{{ $loop->odd ? 'bg-white' : 'bg-[#f9f9f9]' }}">
                            <td class="px-4 py-2 text-[#495057] border border-[#ececec] rounded-[4px] text-[13px]"">
                                {{ $empleado->id }}
                            </td>
                            <td class="px-4 py-2 text-[#495057] border border-[#ececec] rounded-[4px] text-[13px]">
                                {{ $empleado->name }}
                            </td>
                            <td class="px-4 py-2 text-[#495057] border border-[#ececec] rounded-[4px] text-[13px]">
                                {{ $empleado->document }}
                            </td>
                            <td class="px-4 py-2 text-[#495057] border border-[#ececec] rounded-[4px] text-[13px]">
                                {{ $empleado->role->nombre}}
                            </td>
                            <td class="px-4 py-2 text-[#495057] border border-[#ececec] rounded-[4px] text-[13px]">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <x-parrafo class="flex items-center justify-center">No hay empleados registrados en esta sucursal.</x-parrafo>
        @endif
    </div>
@endsection