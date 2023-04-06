<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="flex space-x-6 p-8 bg-yellow-200 rounded-md h-36">
                    <a href="{{ route('cornellnotes.index') }}">
                        <div class="py-6 bg-yellow-400 rounded-md hover:p-7 px-6">
                            <div class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                {{$cantidad_notas}} Notas
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('bugs.index') }}">
                        <div class="py-6 bg-blue-400 rounded-md hover:p-7 px-6">
                            <div class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                {{$cantidad_bugs}} Bugs
                            </div>
                        </div>
                    </a>

                    <!--
                    <a href="#" class="text-blue-500">Enlace en color azul</a>

                    <button class="bg-white text-black px-4 py-2 rounded">Botón en blanco</button>

                    <div class="bg-red-500 text-white px-4 py-2 rounded">
                        <p>¡Atención! Este contenido puede ser sensible.</p>
                    </div>

                    <section class="bg-green-500 text-white px-4 py-2">
                        <h2>Este es un título en verde</h2>
                        <p>Este es un texto en blanco sobre fondo verde.</p>
                    </section>

                    <button class="bg-green-500 text-white px-4 py-2 rounded">Ver más</button> -->

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
