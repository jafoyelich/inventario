@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Clientes
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-4">Añadir Cliente</a>

        <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Teléfono</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach ($clientes as $cliente)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{ $cliente->nombre }}</td>
                    <td class="py-3 px-6 text-left">{{ $cliente->email }}</td>
                    <td class="py-3 px-6 text-left">{{ $cliente->telefono }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
