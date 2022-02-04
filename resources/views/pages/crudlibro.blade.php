<x-app-layout>  
    <div class="max-w-7xs mx-20 sm:px-5 lg:px-20">
        <div class="absolute bottom-0 m-20 sm:rounded-lg">
            <div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex justify-center items-center w-full">
                <form method="POST" action="{{ route('libroscrud') }}">
                    {{ csrf_field() }}
                    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
                    <div class="space-y-4">
                        <h1 class="text-center text-2xl font-semibold text-gray-600">Agregar Libro</h1>
                        <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Título</label>
                        <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="titulo"/>
                        </div>
                        <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Autor</label>
                        <input class="form-select" list="list" name="autor_id" />
                        <datalist id="list">
                            @foreach($libro as $book)
                            <option value="{!! $book->autor_id!!}">{!! $book->autor->nombre!!}</option>
                            @endforeach 
                        </datalist>
                        </div>
                        <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Género</label>
                        <input class="form-select" list="list1" name="genero_id"/>
                        <datalist id="list1">
                            @foreach($libro as $book)
                            <option value="{!! $book->genero_id!!}">{!! $book->genero->nombre!!}</option>
                            @endforeach 
                        </datalist>
                        </div>
                        <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Descripción</label>
                        <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="descripcion"/>
                        </div>
                        <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Año de publicación</label>
                        <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="year_publicacion"/>
                        </div>
                        <div>
                        <label for="email" class="block mb-1 text-gray-600 font-semibold">Imagen</label>
                        <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="imagen" />
                        </div>
                    </div>
                    <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide border border-blue-700 rounded">Agregar</button>
                    </div>
                </form>
                <div class="max-w-7xs mx-20 sm:px-5 lg:px-20">
        <div class="absolute top-0 m-20 sm:rounded-lg">
        <div class="container mx-auto px-4 sm:px-8">
    <div class="py-0">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Título
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Autor
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Género
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Descripción
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Año de publicación
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Imagen
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($libro as $book)
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        {!! $book->titulo !!}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">{!! $book->autor->nombre!!}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">
                                {!! $book->genero->nombre !!}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center float-right">
                                    <div class="mr-3">
                                        <p class="text-gray-900 whitespace-no-wrap text-right">
                                        {!! $book->descripcion !!}  
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center float-right">
                                    <div class="mr-3">
                                        <p class="text-gray-900 whitespace-no-wrap text-right">
                                        {!! $book->year_publicacion !!}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center float-right">
                                    <div class="mr-3">
                                        <p class="text-gray-900 whitespace-no-wrap text-right">
                                        {!! $book->imagen !!}
                                        </p>
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
        </div>
    </div>  
            </div>
        </div>
    </div>  
</x-app-layout>

