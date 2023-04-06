<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow-200 rounded-md overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black flex justify-center">
                    <table class="w-4/5 border-collapse border border-purple-400">
                        <thead class="bg-purple-600">
                            <tr>
                                <th class="py-2 px-4 border border-purple-400">Titulo de la Nota</th>
                                <th class="py-2 px-4 border border-purple-400">Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notas as $nota)
                            <tr class="bg-purple-200">
                                <td class="py-2 px-4 border border-purple-400">{{ $nota->titulo }}</td>
                                <td class="py-2 px-4 border border-purple-400">
                                    <div class="container flex items-center">
                                        <div class="content mx-auto">
                                            <a class="inline-block bg-green-500 text-black font-semibold rounded hover:bg-purple-600 px-3 py-2" href="{{ route('cornellnotes.show', $nota) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mb-6 flex justify-end w-5/6">
                    <a class="inline-block px-4 py-2 bg-purple-500 text-black font-bold rounded hover:bg-purple-600" href="{{ url('cornellnotes/create') }}">Nueva nota</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>