<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Nota') }}
        </h2>
    </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-700 shadow-md rounded-lg px-4 py-4">
    
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
                            @foreach($errors->all() as $error)
                            <strong class="font-bold">{{ $error }}</strong> <br>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button" viewBox="0 0 20 20">
                                <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 6.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 1 0 1.414 1.414L10 11.414l3.934 3.934a1 1 0 1 0 1.414-1.414L11.414 10l3.934-3.934a1 1 0 0 0 0-1.414z"/>
                                </svg>
                            </span>
                            @endforeach
                        </div>
                    @endif

                    <h1 class="text-2xl font-bold text-gray-200 mb-4">Editar nota</h1>
                    <form action="{{ route('cornellnotes.update',$detalle_nota->id) }}" method="post">
                        @method("PATCH")
                        @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="titulo">
                            Título
                        </label>
                        <input class="w-full bg-gray-100 border border-gray-400 p-2 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" name="titulo" id="titulo" type="text" value="{{ $detalle_nota->titulo}}" disabled>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="palabrasClave">
                            Palabras clave
                        </label>
                        <input class="w-full bg-gray-100 border border-gray-400 p-2 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" name="palabrasClave" id="palabrasClave" type="text" value="{{ $detalle_nota->PalabrasClave }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="texto">
                            Texto
                        </label>
                        <textarea class="w-full bg-gray-100 border border-gray-400 p-2 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" name="texto" id="texto" rows="6" disabled>{{ $detalle_nota->Texto }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="conclusion">
                            Conclusión
                        </label>
                        <textarea class="w-full bg-gray-100 border border-gray-400 p-2 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" name="conclusion" id="conclusion" rows="3">{{ $detalle_nota->Conclusion }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="texto">
                            Tema
                        </label>
                        <textarea class="w-full bg-gray-100 border border-gray-400 p-2 rounded-md focus:outline-none focus:bg-white focus:border-purple-500" name="tema" id="texto" rows="6" disabled>{{ $detalle_nota->topic_id }}</textarea>
                    </div>
                    <div class="mb-4 flex items-center justify-end">
                        <button class="bg-purple-800 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Guardar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>