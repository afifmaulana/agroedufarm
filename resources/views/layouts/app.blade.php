<!DOCTYPE html>
<html lang="en">

<x-head/>

<body class="host_version">

    <!-- LOADER -->
    {{-- <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div> --}}
    <!-- END LOADER -->

    <!-- Start header -->
    <x-header/>
    <!-- End header -->

    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel"
        data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('assets/img/hero.jpg') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        <h2><strong>Agro EduFarm </strong></h2>
                                        <p class="lead">Lembaga pelatihan pertanian dan peternakan kambing yang berkualitas</p>
                                        <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('assets/img/hero 2.jpg') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><strong>Domba</strong></h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Domba sehat dan berkualitas</p>
                                        <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('assets/img/cow1.jpg') }}');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><strong>Sapi</strong></h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Sapi dengan kualitas terbaik</p>
                                        <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="hover-btn-new"><span>Hubungi Kami</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>

            <!-- Left Control -->
            <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Tentang</h3>
                    <p class="lead">Agroedufarm adalah lembaga pelatihan pertanian dan peternakan yang merupakan kelompok swadaya masyarakat yang percaya bahwa kemajuan ekonomi Indonesia harus dimulai dari pedesaan.</p>
                </div>
            </div><!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Domba Agroedufarm</h2>
                        <p>Peternakan yang didirikan, dimiliki, dikelola oleh petani secara swadaya baik perorangan maupun berkelompok yang tersebar di beberapa lokasi di Indonesia. Sekaligus menjadi tempat berkumpulnya peternak, pemodal, agen pemasaran, pembeli retail hasil ternak dan turunannya, hingga produksi produk pangan siap santap.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/img/hero 2.jpg') }}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/img/cow2.jpg') }}" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Sapi AGROEDUFARM</h2>
                        <p>Di peternakan kami juga menyediakan beberapa sapi yang siap untuk dijadikan korban.
                            Tentu saja Anda pasti ingin kurban Sapi dengan sapi pilihan yang berbobot berat. Kami menyediakan sapi dengan bobot 280 Kg hingga Sapi kelas Limousine dengan bobot di kisaran 800 Kg.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Daftar Harga</h3>
                <p>Berikut daftar harga hewan kurban di petarnakan kami</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Domba/Kambing</a></li>
                            <li><a href="#tab2" data-toggle="pill">Sapi</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Medium</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <img src="{{ asset('assets/img/sheep 1.jpg') }}" class="img-fluid mb-2" style="border-radius: 10px" height="300" width="230" alt="">
                                            <p><i class="fa fa-money"></i> <strong>Rp. 2.250.000,-</strong> </p>
                                            <p><i class="fa fa-database"></i> <strong>24-26 kg </strong></p>
                                            </p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="btn btn-warning"><i class="fa fa-whatsapp" style="color: green"></i><span>Pesan</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Premium</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <img src="{{ asset('assets/img/sheep 3.jpg') }}" class="img-fluid mb-2" style="border-radius: 10px" height="300" width="230" alt="">
                                            <p><i class="fa fa-money"></i> <strong>Rp. 2.550.000,-</strong> </p>
                                            <p><i class="fa fa-database"></i> <strong>27-29 kg </strong></p>
                                            </p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="btn btn-warning"><i class="fa fa-whatsapp" style="color: green"></i><span>Pesan</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Super</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <img src="{{ asset('assets/img/sheep 4.jpg') }}" class="img-fluid mb-2" style="border-radius: 10px" height="300" width="230" alt="">
                                            <p><i class="fa fa-money"></i> <strong>Rp. 2.900.000-4.850.000</strong> </p>
                                            <p><i class="fa fa-database"></i> <strong>30-32 kg </strong></p>
                                            </p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="btn btn-warning"><i class="fa fa-whatsapp" style="color: green"></i><span>Pesan</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Sapi</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <img src="{{ asset('assets/img/cow2.jpg') }}" class="img-fluid mb-2" style="border-radius: 10px" height="500" width="990" alt="">
                                            <p><i class="fa fa-money"></i> <strong>Rp. 17.900.000-34.850.000</strong> </p>
                                            <p><i class="fa fa-database"></i> <strong>280-800 kg </strong></p>
                                            </p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" class="btn btn-warning"><i class="fa fa-whatsapp" style="color: green"></i><span>Pesan</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off img-fluid"
        style="background-image:url('{{ asset('assets/img/logo.jpg') }}');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimoni</h3>
                <p>Kami sudah memiliki banyak pembeli di seluruh Indonesia. Berikut ini beberapa testimoni dari pelanggan setia kami.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="{{ asset('assets/images/testi_01.png') }}" alt="" class="img-fluid">
                                <h4>Bapak H. Mahfud Ali </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Dombanya Segar!</h3>
                                <p class="lead">Cocok untuk Kurban ataupun Aqiqah.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="{{ asset('assets/images/testi_02.png') }}" alt="" class="img-fluid">
                                <h4>Bapak Ibnu Marzuki </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Domba Super!</h3>
                                <p class="lead">Ukuran dombanya luar biasa besar, sukses AGROEDUFARM!</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="testi-meta">
                                <img src="{{ asset('assets/images/testi_03.png') }}" alt="" class="img-fluid ">
                                <h4> Ibu Hj. Masruroh </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Domba Premium!</h3>
                                <p class="lead">Kualitas domba di agroedufarm memang the best. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <x-footer/>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <x-scripts/>
</body>

</html>
