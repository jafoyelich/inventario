<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6 text-center">

                <h3 class="text-lg font-semibold text-gray-700 mb-4">Acceso a Módulos</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Botón para acceder al módulo de Productos -->
                    <form action="{{ route('productos.index') }}" method="get">
                        <button type="submit" class="bg-blue-500 text-white py-4 w-full rounded-lg shadow hover:bg-blue-700">
                            Productos
                        </button>
                    </form>

                    <!-- Botón para acceder al módulo de Clientes -->
                    <form action="{{ route('clientes.index') }}" method="get">
                        <button type="submit" class="bg-green-500 text-white py-4 w-full rounded-lg shadow hover:bg-green-700">
                            Clientes
                        </button>
                    </form>

                    <!-- Botón para acceder al módulo de Facturas -->
                    <form action="{{ route('facturas.index') }}" method="get">
                        <button type="submit" class="bg-yellow-500 text-white py-4 w-full rounded-lg shadow hover:bg-yellow-700">
                            Facturas
                        </button>
                    </form>

                    <!-- Botón para acceder al módulo de Usuarios -->
                    <form action="{{ route('usuarios.index') }}" method="get">
                        <button type="submit" class="bg-red-500 text-white py-4 w-full rounded-lg shadow hover:bg-red-700">
                            Usuarios
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
