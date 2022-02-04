<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" >
                    <x-jet-nav-link href="{{ route('ecuacion') }}" :active="request()->routeIs('ecuacion')">
                        {{ __('Resolver Ecuación') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" >
                    <x-jet-nav-link href="{{ route('derivada') }}" :active="request()->routeIs('derivada')">
                        {{ __('Resolver Derivada') }}
                    </x-jet-nav-link>
                </div>