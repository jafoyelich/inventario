@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Productos
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-4">Añadir Producto</a>

        <table class="table-auto w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Código</th>
                <th class="py-3 px-6 text-left">Precio de Venta</th>
                <th class="py-3 px-6 text-left">Stock</th>
                <th class="py-3 px-6 text-center">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach ($productos as $producto)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{ $producto->nombre }}</td>
                    <td class="py-3 px-6 text-left">{{ $producto->codigo }}</td>
                    <td class="py-3 px-6 text-left">{{ $producto->precio_venta }}</td>
                    <td class="py-3 px-6 text-left">{{ $producto->stock }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
