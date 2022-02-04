<x-app-layout>        
    </x-app-layout>
    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <div class="absolute bottom-0 pl-20 m-20 sm:rounded-lg">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
                <div id="profile" class="rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                    <!--Main Col-->
                    <form method="GET" action="{{ route('creategener') }}">
                        {{ csrf_field() }}
                        <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
                            <div class="space-y-4">
                                <h1 class="text-center text-2xl font-semibold text-gray-600">Nuevo Género</h1>
                                <div>
                                    <label for="email" class="block mb-1 text-gray-600 font-semibold">Nombre</label>
                                    <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="nombre"/>
                                </div>                                                                                                  
                            </div>
                            <button type="submit" class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide border border-blue-700 rounded">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>           
        </div>
    </div>
    