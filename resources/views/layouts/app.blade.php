<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- sweet alert 2 -->
        <link href="{{ asset('assets') }}/css/sweetalert2.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        @livewireStyles

        <!-- plugin for sweetalert2  -->
        <script src="{{ asset('assets') }}/js/sweetalert2.js" async></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="antialiased font-inter bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>

        <!-- Page wrapper -->
        <div class="flex h-screen overflow-hidden">
            <x-app.sidebar />
            <!-- Content area -->
            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif" x-ref="contentarea">
                <x-app.header />

                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @livewireScripts

        <script>
            window.addEventListener('swal', function(e) {
                if (e.detail['type'] == 'confirm') {
                    Swal.fire(e.detail).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emit(e.detail['postEvent'], e.detail['id'])
                        }
                    });
                } else {
                    Swal.fire(e.detail);
                }
            });
        </script>
        @if (session()->has('failedPermission'))
            <script>
                notification = @json(session()->pull("failedPermission"));
                setTimeout(() => {
                    Swal.fire(notification)
                }, 1000);

                @php
                    session()->forget('failedPermission');
                @endphp
            </script>
        @endif
    </body>
</html>
