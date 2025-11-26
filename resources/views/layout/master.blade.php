@include('layout.header')
@include('layout.navbar')
<main>
    @include('sweetalert::alert')
    @yield('content')
</main>
@include('layout.footer')
