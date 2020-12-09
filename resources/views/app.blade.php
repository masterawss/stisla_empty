<!doctype html>
<html lang="es">
<head>
    @include('components.style')
    @yield('style')
    @include('components.script')
    @yield('script')

</head>
<body class="layout-3">
    <div class="main-wrapper container">
        <div class="navbar-bg bg-gradient-primary"></div>

        @include('components.navbar')

        <div class="main-content animated fadeInUp ">
            <section class="section">

                @include('components.alerts')
                @yield('content')

            </section>
        </div>
    </div>
</body>
@yield('modal')
