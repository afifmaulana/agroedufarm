<!DOCTYPE html>
<html lang="en">

<x-head />

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
    <x-header />
    <!-- End header -->

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Kontak<span class="m_1">Silahkan hubungi kami</span></h1>
        </div>
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Pengen Kurban? Segera Hubungi kami</h3>
                <p class="lead">Kami mempunyai kambing atau domba dengan kualitas terbaik.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-5 col-md-12 col-sm-12 mr-3">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="#" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Nama Depan">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Nama Belakang">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Nomor Hp">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Tulis Pesan"></textarea>
                                </div>
                                <div class="text-center pd">
                                    <a href="https://wa.me/6285156805245?text=Halo,%20Apakah%20hewan%20kurbannya%20masih%20tersedia%20?" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Hubungi</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-xl-5 col-md-12 col-sm-12">
					<div class="map-box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.640095368207!2d106.7444764140301!3d-6.567028695250456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4bfddfc6e3b%3A0x636205d4fec925d!2sKampoeng%20AGRO%20EduFarm!5e0!3m2!1sid!2sid!4v1624545285360!5m2!1sid!2sid" width="600" height="496" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <x-footer />

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <x-scripts />

</body>

</html>
