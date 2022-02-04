<x-app-layout>        
    </x-app-layout>
    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <div class="absolute bottom-0 pl-20 m-20 sm:rounded-lg">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
                <div id="profile" class="rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                    <!--Main Col-->
                    <div class="table p-2">                    
                        <table class=" border">
                            <thead>
                                <tr class="bg-gray-50 border-b">                    
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class=" items-center justify-center">
                                            ID
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class=" items-center justify-center">
                                            Nombre
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class=" items-center justify-center">
                                            Fecha de Nacimiento
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                            </svg>
                                        </div>
                                    </th>
                                    
                                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                        <div class=" items-center justify-center">
                                            Acciones para Editar o Eliminar............
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                            </svg>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($autores as $auth)
                                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">                    
                                    <td class="p-2 border-r">{!! $auth->id !!}  </td>
                                    <td class="p-2 border-r">{!! $auth->nombre !!}  </td>
                                    <td class="p-2 border-r">{!! $auth->fecha_nacimiento !!}  </td>                    
                                    <td>                                        
                                        <a href="{{ route('deleteauth') }}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                                        <a href="" class="bg-purple-600 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
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
    