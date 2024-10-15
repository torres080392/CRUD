<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista de Sucursales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <a href="{{ route('sucursales.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">
                        Crear Nueva Sucursal
                    </a>

                    @if (session('success'))
                        <div class="alert alert-success mb-4 p-2 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 border-b border-gray-200 text-left">ID</th>
                                <th class="py-3 px-6 border-b border-gray-200 text-left">Número</th>
                                <th class="py-3 px-6 border-b border-gray-200 text-left">Nombre</th>
                                <th class="py-3 px-6 border-b border-gray-200 text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($sucursales as $sucursal)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6">{{ $sucursal->id }}</td>
                                    <td class="py-3 px-6">{{ $sucursal->numero }}</td>
                                    <td class="py-3 px-6">{{ $sucursal->nombre }}</td>
                                    <td class="py-3 px-6">
                                        <a href="{{ route('sucursales.show', $sucursal->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                                        <a href="{{ route('sucursales.edit', $sucursal->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('sucursales.destroy', $sucursal->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('¿Estás seguro de eliminar esta sucursal?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
