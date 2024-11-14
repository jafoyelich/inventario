@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Facturas
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('facturas.create') }}" class="btn btn-primary mb-4">Crear Factura</a>

        <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Cliente</th>
                <th class="py-3 px-6 text-left">Fecha</th>
                <th class="py-3 px-6 text-left">Total</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach ($facturas as $factura)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{ $factura->cliente->nombre }}</td>
                    <td class="py-3 px-6 text-left">{{ $factura->fecha }}</td>
                    <td class="py-3 px-6 text-left">{{ $factura->total }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
