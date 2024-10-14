<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Detalles del Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black dark:text-black">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Campo</th>
                                <th class="py-3 px-6 text-left">Valor</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Nombres</td>
                                <td class="py-3 px-6">{{ $cliente->Nombres }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Apellidos</td>
                                <td class="py-3 px-6">{{ $cliente->Apellidos }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Documento</td>
                                <td class="py-3 px-6">{{ $cliente->Documento }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Dirección</td>
                                <td class="py-3 px-6">{{ $cliente->Direccion }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Teléfono</td>
                                <td class="py-3 px-6">{{ $cliente->Telefono }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('clientes.index') }}" class="inline-block mt-4 bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

