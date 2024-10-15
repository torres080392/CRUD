<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Detalles de la Sucursal') }}
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
                                <td class="py-3 px-6">Número</td>
                                <td class="py-3 px-6">{{ $sucursal->numero }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Tipo</td>
                                <td class="py-3 px-6">{{ $sucursal->TipoSucursal->Tipo }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Nombre</td>
                                <td class="py-3 px-6">{{ $sucursal->nombre }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Ciudad</td>
                                <td class="py-3 px-6">{{ $sucursal->cuidad }}</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">Teléfono</td>
                                <td class="py-3 px-6">{{ $sucursal->telefono }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('sucursales.index') }}" class="inline-block mt-4 bg-gray-300 hover:bg-gray-400 text-black font-bold py-2 px-4 rounded">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
