<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout._head')
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('layout._navbar')

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                @yield('header')
            </div>
        </header>

        <!-- Page content-->
        <div class="container">
            <div style="text-align:center">
                <a href="{{ url('/') }}" class="btn btn-primary"> Dashboard </a>
                <h1>Extra Content Add All Page</h1>
            </div>
            @yield('content')
            
        </div>
        <!-- Footer-->
        @include('layout._footer')

        <!-- Script-->
        @include('layout._script')
    </body>
</html>
