@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Producto
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nombre:</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Código:</label>
                <input type="text" name="codigo" value="{{ $producto->codigo }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Precio de Compra:</label>
                <input type="number" name="precio_compra" value="{{ $producto->precio_compra }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Precio de Venta:</label>
                <input type="number" name="precio_venta" value="{{ $producto->precio_venta }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Stock:</label>
                <input type="number" name="stock" value="{{ $producto->stock }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Producto</button>
        </form>
    </div>
@endsection
