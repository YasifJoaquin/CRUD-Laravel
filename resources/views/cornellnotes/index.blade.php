<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow-200 rounded-md overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-6 flex justify-end w-10/12">
                    <a class="inline-block px-4 py-2 bg-orange-500 text-black font-bold rounded hover:bg-purple-600" href="{{ url('cornellnotes/create') }}">Nueva nota</a>
                </div>
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
                                        <div class="content mx-auto flex">
                                            
                                            <a class="inline-block bg-green-500 text-black font-semibold rounded hover:bg-purple-600 px-3 py-2" href="{{ route('cornellnotes.show', $nota) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
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
            </div>
        </div>
    </div>

</x-app-layout>