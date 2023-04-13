<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>

    <div class="bg-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-white">Lista de Notas</h1>

            <div class="mt-6 flex justify-end w-10/12">
                <a class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded focus:outline-none focus:shadow-outline" href="{{ url('cornellnotes/create') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 inline-block align-text-bottom mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                  </svg>
                  Nueva nota
                </a>
              </div>
              

            <table class="w-full divide-y divide-gray-700 mt-6">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Título</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Asignatura</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"><center>Detalles</center></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach($notas as $nota)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500"> {{ $nota->titulo }} </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500"> {{ $nota->nombre }} </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <center>
                                <a href="{{ route('cornellnotes.show', $nota->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>
                            </center>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>