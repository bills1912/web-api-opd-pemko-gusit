@extends('home')

@section('container')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ url('assets') }}/img/logo-web-api.png" alt="">
            </a>
            @include('landing-page.components.navbar')
        </div>
    </header><!-- End Header -->
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        @include('landing-page.components.hero')

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Values Section ======= -->
        <section id="overviews" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Gambaran Umum</h2>
                    <p>Aplikasi <i>web</i> API Pemerintah Kota Gunungsitoli</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ url('assets') }}/img/values-1.png" class="img-fluid" alt="">
                            <h3>Tempat berkolaborasi antar Organisasi Pemerintah Daerah</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="{{ url('assets') }}/img/values-2.png" class="img-fluid" alt="">
                            <h3>Kemudahan dalam komunikasi data</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="{{ url('assets') }}/img/values-3.png" class="img-fluid" alt="">
                            <h3>Bentuk implementasi Satu Data Indonesia</h3>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Fitur</h2>
                    <p>Beberapa fungsi untuk berkolaborasi dan berkomunkasi terkait data dalam aplikasi <i>web</i> API
                        ini</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="{{ url('assets') }}/img/features.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Akses data lebih cepat</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Variasi data yang banyak</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pembaharuan data yang terakselerasi</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Sumber data yang terintegrasi</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- / row -->

            </div>

        </section><!-- End Features Section -->

        <!-- ======= Clients Section ======= -->
        <section id="lembaga" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Lembaga Partner</h2>
                    <p>Beberapa lembaga yang berkontribusi</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/kemenkeu.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/bkn.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/bps-ri.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/panrb.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/pupr.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/perpusnas.svg"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ url('assets') }}/img/clients/kominfo.svg"
                                class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Narahubung</h2>
                    <p>Hubungi kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        @include('landing-page.components.footer')
        <div class="container">
            <div class="copyright">
                &copy; Made with ❤️ <strong><span>Pemerintah Kota Gunungsitoli</span></strong> {{ date('Y') }}. All
                Rights Reserved
            </div>
            <div class="credits">
                Template by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->
@endsection
