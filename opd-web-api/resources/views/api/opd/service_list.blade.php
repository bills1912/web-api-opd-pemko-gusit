@extends('api.main')

@section('service-container')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-3">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Daftar Organisasi Perangkat Daerah</h2>
                <p>Ruang lingkup Pemerintah Kota Gunungsitoli</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-file-paper-line icon"></i>
                        <h3>Dinas Pekerjaan Umum dan Tata Ruang Kota Gunungsitoli</h3>
                        <p>Jl. Pelud Binaka KM 6,6, Fodo, Gunungsitoli, Sumatera Utara, 22811</p>
                        <a href="{{ url('/api_opd/putr') }}" class="read-more"><span>Read More</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-file-paper-line icon"></i>
                        <h3>Dinas Komunikasi dan Informasi Kota Gunungsitoli</h3>
                        <p>Jalan Ampera No.9, Gunungsitoli, Indonesia, North Sumatra</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-file-paper-line icon"></i>
                        <h3>Dinas Perpustakaan dan Arsip Kota Gunungsitoli</h3>
                        <p>Jl. Pancasila No.21, Ps. Gn. Sitoli, Kec. Gunungsitoli, Kota Gunungsitoli, Sumatera Utara</p>
                        <a href="{{ url('/api_opd/perpusip') }}" class="read-more"><span>Read More</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-file-paper-line icon"></i>
                        <h3>Dinas Pendidikan Kota Gunungsitoli</h3>
                        <p>Jl.Laowo Km 2,5 Ds.Dahana Tabaloho, Kecamatan Gunungsitoli</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-file-paper-line icon"></i>
                        <h3>Dinas Perikanan Kota Gunungsitoli</h3>
                        <p>Sihareo II, Kecamatan Gunungsitoli, Kota Gunungsitoli, Sumatra Utara 22811</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-file-paper-line icon"></i>
                        <h3>Dinas Perdagangan Kota Gunungsitoli</h3>
                        <p>Saombo, Kecamatan Gunungsitoli, Kota Gunungsitoli, Sumatra Utara</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->
@endsection
