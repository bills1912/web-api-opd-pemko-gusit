@extends('home')

@section('container')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ url('assets') }}/img/logo-web-api.png" alt="">
            </a>
            @include('api.components.navbar')
        </div>
    </header>
    <main id="main">
        @yield('service-container')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="copyright">
                &copy; Made with ❤️ <strong><span>Pemerintah Kota Gunungsitoli</span></strong> {{ date('Y') }}. All
                Rights Reserved
            </div>
            <div class="credits">
                Template by <a href="https://bootstrapmade.com/" target="_">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
@endsection
