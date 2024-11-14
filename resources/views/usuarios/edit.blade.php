@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Usuario
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nombre:</label>
                <input type="text" name="name" value="{{ old('name', $usuario->name) }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email:</label>
                <input type="email" name="email" value="{{ old('email', $usuario->email) }}" class="w-full border border-gray-300 p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Contraseña (dejar en blanco para mantener la actual):</label>
                <input type="password" name="password" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar Usuario</button>
        </form>
    </div>
@endsection
