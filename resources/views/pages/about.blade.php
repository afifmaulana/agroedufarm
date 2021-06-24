<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="host_version">

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Customer Login</h4>
                </div>
                <div class="modal-body customer-box">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                        <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email1" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="exampleInputPassword1" placeholder="Email"
                                            type="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                            Submit
                                        </button>
                                        <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="password" placeholder="Password"
                                            type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Save &amp; Continue
                                        </button>
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            <h1>Tentang<span class="m_1">Peternakan yang menghasilkan kambing atau domba berkualitas</span></h1>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 blog-post-single">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="{{ asset('assets/img/hero.jpg') }}" alt="" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-date">
								<span class="day">24</span>
								<span class="month">Juni</span>
							</div>
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
								<span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
								<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
							</div>
							<div class="blog-title">
								<h2><a href="#" title="">AGROEDUFARM</a></h2>
							</div>
							<div class="blog-desc">
								<p>Agroedufarm adalah lembaga pelatihan pertanian dan peternakan yang merupakan kelompok swadaya masyarakat yang percaya bahwa kemajuan ekonomi Indonesia harus dimulai dari pedesaan.</p>
								<blockquote class="default">
									Kami juga tersedia pelatihan bagi individu yang ingin mempelajari dunia peternakan secara menyeluruh.
								</blockquote>
								<p>Pengelolaan peternakan dari hulu ke hilir yang maju dan modern, ekosistem Agroedufarm diharapkan dapat secara langsung berperan aktif dalam pembangunan pertanian melalui pengembangan sumber daya manusia pertanian dalam bentuk pelatihan bagi petani dan masyarakat di wilayahnya. </p>
								<p>Kami bekerjasama dengan peternakan yang didirikan, dimiliki, dikelola oleh petani secara swadaya baik perorangan maupun berkelompok yang tersebar di beberapa lokasi di Indonesia. Sekaligus menjadi tempat berkumpulnya peternak, pemodal, agen pemasaran, pembeli retail hasil ternak dan turunannya, hingga produksi produk pangan siap santap.</p>
                                <p>Adapun pada perayaan Idul Adha 1442 H yang akan jatuh pada tanggal 19 Juli 2021, kami menyediakan hewan Kambing ataupun Domba yang merupakan hasil dari peternakan sendiri. Dan kami menjamin bahwa hewan kurban yang akan menjadi pilihan Ibadah Anda, telah sesuai dengan Syariat Islam</p>
							</div>
						</div>
					</div>

					<div class="blog-author">
						<div class="author-bio">
							<h3 class="author_name"><a href="#">Ricky</a></h3>
							<h5>CEO <a href="#">AGROEDUFARM</a></h5>
							<p class="author_det">
								AGROEDUFARM menjamin bahwa hewan kurban yang akan menjadi pilihan Ibadah Anda, telah sesuai dengan Syariat Islam
							</p>
						</div>
						<div class="author-desc">
							<img src="{{ asset('assets/images/team-03.png') }}" alt="about author">
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
					</div>


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

    <x-footer />

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <x-scripts />

</body>

</html>
