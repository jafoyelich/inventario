@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Crear Factura
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('facturas.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Cliente:</label>
                <select name="cliente_id" class="w-full border border-gray-300 p-2 rounded" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Fecha:</label>
                <input type="date" name="fecha" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Total:</label>
                <input type="number" name="total" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Guardar Factura</button>
        </form>
    </div>
@endsection
