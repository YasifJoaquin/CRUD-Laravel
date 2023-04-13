<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles de nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-gray-800 rounded-md overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="grid grid-rows-1 sm:grid-rows-4 grid-cols-1 sm:grid-cols-6 gap-2 p-5">
                        <div class="bg-purple-800 col-span-2 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Titulo: </span> <br>
                            {{ $detalle_nota->titulo }}
                        </div>

                        <div class="bg-purple-800 col-span-4 row-span-5 text-gray-200 text-justify px-4 py-2 rounded-lg">
                            <span class="font-bold"> Texto: </span> <br>
                            {{ $detalle_nota->Texto }}
                        </div>

                        <div class="bg-purple-800 col-span-2 row-span-4 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Palabras Clave: </span> <br>
                            {{ $detalle_nota->PalabrasClave }}
                        </div>

                        @foreach ($notas as $nota)
                        <div class="bg-purple-800 col-span-1 row-span-1 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Unidad: </span> <br>
                            {{ $nota->unidad }}
                        </div>

                        <div class="bg-purple-800 col-span-1 row-span-1 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Tema: </span> <br>
                            {{ $nota->tema }}
                        </div>
                        @endforeach

                        <div class="bg-purple-800 col-span-4 text-gray-200 text-justify px-4 py-2 rounded-lg">
                            <span class="font-bold"> Conclusion: </span> <br>
                            {{ $detalle_nota->Conclusion }}
                        </div>

                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>

                        <div class="col-span-1 font-bold text-center">
                            <a class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-purple-600" href="{{ route('cornellnotes.edit', $detalle_nota) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                        </div>

                        <div class="col-span-1 font-bold text-center">
                            <form class="inline-block" action="{{ url('cornellnotes/'.$detalle_nota->id) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded hover:bg-purple-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>