<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Sucursal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <form action="{{ route('sucursales.update', $sucursal->id) }}" method="POST">
                        @csrf
                        @method('PATCH') <!-- Método PATCH para la actualización -->
                        
                        <div class="mb-4">
                            <label for="numero" class="block text-sm font-medium text-black">Número</label>
                            <input type="text" name="numero" id="numero" value="{{ $sucursal->numero }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="tipo_sucursal_id" class="block text-sm font-medium text-black">Tipo de Sucursal</label>
                            <select name="tipo_sucursal_id" id="tipo_sucursal_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                                @foreach($tipos_sucursal as $tipo)
                                    <option value="{{ $tipo->id }}" {{ $sucursal->tipo_sucursals_id == $tipo->id ? 'selected' : '' }}>{{ $tipo->Tipo }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-black">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $sucursal->nombre }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="cuidad" class="block text-sm font-medium text-black">Ciudad</label>
                            <input type="text" name="cuidad" id="cuidad" value="{{ $sucursal->cuidad }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="telefono" class="block text-sm font-medium text-black">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" value="{{ $sucursal->telefono }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        </div>

                       

                        <div>
                            <button type="submit" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Actualizar Sucursal
                            </button>
                            <a href="{{ route('sucursales.index') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded">
                                Volver
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
