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
            <h1>Kontak<span class="m_1">Silahkan hubungi kami</span></h1>
        </div>
    </div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Butuh Kambing atau Domba buat kurban? Segera Hubungi kami</h3>
                <p class="lead">Kami mempunyai kambing atau domba dengan kualitas terbaik.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
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
