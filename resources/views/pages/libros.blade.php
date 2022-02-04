<x-app-layout>    
    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <div class="absolute bottom-0 pl-20 m-20 sm:rounded-lg">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach($libro as $book)
                <div class="rounded overflow-hidden shadow-lg " style="background-color:FFFFFF">
                    <img class="w-full" src="{!! $book->imagen !!}" alt="...">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{!! $book->titulo !!} </div>
                            <p class="text-gray-700 text-base">
                                {!! $book->descripcion !!}   
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Fecha de Publicación: {!! $book->year_publicacion !!} </span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Autor: {!! $book->autor->nombre!!} </span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Género literario: {!! $book->genero->nombre !!} </span>
                        </div>
                    </div>
                @endforeach  
                </div>
            </div>
        </div>
    </div>  

</x-app-layout>
