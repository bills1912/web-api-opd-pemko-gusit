<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web API OPD</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('assets') }}/img/web_logo.png" rel="icon">
    <link href="{{ url('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ url('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <!-- Template Main CSS File -->
    <link href="{{ url('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/custom_style.css" rel="stylesheet">

    <!-- Others JavaScript File -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.5/js.cookie.min.js"
        integrity="sha512-nlp9/l96/EpjYBx7EP7pGASVXNe80hGhYAUrjeXnu/fyF5Py0/RXav4BBNs7n5Hx1WFhOEOWSAVjGeC3oKxDVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @yield('container')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ url('assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ url('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ url('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets') }}/js/main.js"></script>
    <script src="{{ url('assets') }}/js/customScript.js"></script>
    @stack('returnDataListOPD')

</body>

</html>
