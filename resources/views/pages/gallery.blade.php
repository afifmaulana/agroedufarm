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
            <h1>Galeri<span class="m_1">Foto-foto kambing di AGROEDUFARM</span></h1>
        </div>
    </div>

    <div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/sheep 1.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Domba Medium</h3>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/sheep 4.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Domba Super</h3>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/sheep 3.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Domba Premium</h3>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/hero.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Domba Agroedufarm</h3>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/hero 2.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Domba Agroedufarm</h3>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/cow1.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Sapi Agroedufarm</h3>
						</div>
					</div>
				</div>

                <div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ asset('assets/img/cow2.jpg') }}">

						</div>
						<div class="team-content">
							<h3 class="title">Sapi Agroedufarm</h3>
						</div>
					</div>
				</div>

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <x-footer />

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <x-scripts />

</body>

</html>
