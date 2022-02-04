<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark}" class="relative">

    <x-jet-banner />


        @livewire('navigation-menu')


            {{ $slot }}

        {{--  <x-dark_mode/>  --}}



    </div>


    @stack('modals')

    @livewireScripts
</div>

</html>
