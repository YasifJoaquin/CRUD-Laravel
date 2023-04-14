<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar nuevo Bug') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg p-8">
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
                        @foreach($errors->all() as $error)
                        <strong class="font-bold">{{ $error }}</strong>
                        <br>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" viewBox="0 0 20 20">
                                <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 6.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 1 0 1.414 1.414L10 11.414l3.934 3.934a1 1 0 1 0 1.414-1.414L11.414 10l3.934-3.934a1 1 0 0 0 0-1.414z"/>
                            </svg>
                        </span>
                        @endforeach
                    </div>
                @endif
                
                <h2 class="text-white text-2xl font-bold"> Nuevo BUG </h2>
                <form action="{{ route('bugs.update', $bug) }}" method="post" class="flex flex-col space-y-4">
                @method("PATCH")
                @csrf
                    <div class="flex flex-col space-y-1">
                        <label for="descripcion" class="text-white font-medium">Descripción del Bug</label>
                        <input type="text" name="descripcion" id="descripcion" class="py-2 px-3 border bg-gray-200 rounded-md border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500" value="{{ $bug->descripcion }}">
                    </div>

                    <div class="flex flex-col space-y-1">
                        <label for="codigo" class="text-white font-medium">Código</label>
                        <input type="text" name="codigo" id="codigo" class="py-2 px-3 border bg-gray-200 rounded-md border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500" value="{{ $bug->codigo }}" disabled>
                    </div>

                    <div class="flex flex-col space-y-1">
                        <label for="solucion" class="text-white font-medium">Solución</label>
                        <input type="text" name="solucion" id="solucion" class="py-2 px-3 border bg-gray-200 rounded-md border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500" value="{{ $bug->solucion }}">
                    </div>

                    <div class="flex flex-col space-y-1">
                        <label for="plataforma" class="text-white font-medium">Plataforma</label>
                        <input type="text" name="plataforma" id="plataforma" class="py-2 px-3 border bg-gray-200 rounded-md border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500" value="{{ $bug->plataforma }}" disabled>
                    </div>

                    <div class="flex flex-col space-y-1">
                        <label for="estado" class="text-white font-medium">Estado</label>
                        <input class="py-2 px-3 border bg-gray-200 rounded-md border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500" type="text" name="estado" id="estado" value="{{ $bug->estado }}">
                    </div>

                    <div class="flex flex-col space-y-1">
                        <label for="asignatura" class="text-white font-medium">Asignatura</label>
                        <input class="py-2 px-3 border bg-gray-200 rounded-md border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500" name="asignatura" id="asignatura" rows="6" value="{{$bug->subject->nombre}}" disabled/>
                    </div>
                    <br>
                    <br>
                    <div class="mb-4 flex items-center justify-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Guardar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>