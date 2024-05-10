<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    {{-- <link rel="icon" href="{{ asset('img/logo_ico.ico') }}" type="image/x-icon"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
    <style>
        #contentEval{
           overflow-y: scroll;
           scroll-margin: 20px;
       }
       #contentEval::-webkit-scrollbar{
           background: none;
           width: 10px;
           right: 10px;
       }
       #contentEval::-webkit-scrollbar-thumb {
           background: #50A44E;
           border-radius: 10px;
       }
       #contentEval::-webkit-scrollbar-track-piece{
           margin: 20px 0;
       }

       .navbar {
       background-color: #EEEFF1;
       transition: background-color 0.4s;
       }
       .navbar a:hover {
       top: 0;
       color: white;
       background-color: #0000005e;
       transition: background-color 0.4s;
       }

       .navbar.scrolled {
       background-color: #00000064;
       color: white;
       }
   </style>

</head>

<body> {{-- class="font-sans antialiased bg-container bg-cover bg-no-repeat bg-fixed" --}}
    <x-banner />
    <div class="min-h-screen bg-gray-300">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.22/dist/sweetalert2.all.min.js"></script>
    <script>
        Livewire.on('alert', function(message) {
            Swal.fire(
                'Excelente!',
                message,
                'success'
            );
        });
    </script>
</body>

</html>
