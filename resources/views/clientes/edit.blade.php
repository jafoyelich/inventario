@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Cliente
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nombre:</label>
                <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email:</label>
                <input type="email" name="email" value="{{ old('email', $cliente->email) }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Teléfono:</label>
                <input type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Cliente</button>
        </form>
    </div>
@endsection
