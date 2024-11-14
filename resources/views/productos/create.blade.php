@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Crear Producto
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('productos.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Nombre:</label>
                <input type="text" name="nombre" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Código:</label>
                <input type="text" name="codigo" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Precio de Compra:</label>
                <input type="number" name="precio_compra" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Precio de Venta:</label>
                <input type="number" name="precio_venta" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stock:</label>
                <input type="number" name="stock" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Guardar Producto</button>
        </form>
    </div>
@endsection
