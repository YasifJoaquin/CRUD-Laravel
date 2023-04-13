<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar nuevo Bug') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                @endif

                <h2>
                    Datos del BUG
                </h2>

                <form action="{{ route('bugs.store') }}" method="post">
                    @csrf
                    <label for="descripcion">Describe el Bug</label>
                    <input type="text" name="descripcion" id="descripcion">
                    <br>
                    <label for="codigo">Codigo</label>
                    <input type="text" name="codigo" id="codigo">
                    <br>
                    <label for="solucion">Solucion</label>
                    <input type="text" name="solucion" id="solucion">
                    <br>
                    <label for="plataforma">Plataforma</label>
                    <input type="text" name="plataforma" id="plataforma">
                    <br>

                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option value="">Seleccione un estado</option>
                        <option value="1">Corregido</option>
                        <option value="2">No corregido</option>
                        <option value="3">En proceso</option>
                        <option value="4">No oficial</option>
                        <option value="5">Error de la version</option>
                    </select>
                    <br>

                    <label for="asignatura">En que asignatura le salio el error</label>
                    <select name="asignatura" id="asignatura">
                        <option value="">Seleccione la asignatura</option>
                        @foreach ($asignatura as $asig)
                        <option value="{{ $asig->id }}">{{ $asig->nombre }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <button type="submit">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>