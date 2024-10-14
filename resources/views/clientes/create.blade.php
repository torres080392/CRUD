<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight"> <!-- Cambié a text-black -->
            {{ __('Crear Nuevo Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black"> <!-- Cambié a text-black -->
                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf <!-- Protección contra CSRF -->
                        
                        <div class="mb-4">
                            <label for="nombres" class="block text-sm font-medium text-black">Nombres</label> <!-- Cambié a text-black -->
                            <input type="text" name="nombres" id="nombres" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="apellidos" class="block text-sm font-medium text-black">Apellidos</label> <!-- Cambié a text-black -->
                            <input type="text" name="apellidos" id="apellidos" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="documento" class="block text-sm font-medium text-black">Documento</label> <!-- Cambié a text-black -->
                            <input type="text" name="documento" id="documento" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="direccion" class="block text-sm font-medium text-black">Dirección</label> <!-- Cambié a text-black -->
                            <input type="text" name="direccion" id="direccion" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="telefono" class="block text-sm font-medium text-black">Teléfono</label> <!-- Cambié a text-black -->
                            <input type="text" name="telefono" id="telefono" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                        <div>
                            <button type="submit" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Crear Cliente
                            </button>
                            <a href="{{ route('clientes.index') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded">
                                Volver
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
