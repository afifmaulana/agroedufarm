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
            <h1>Galeri<span class="m_1">Foto Hewan Ternak di AGROEDUFARM</span></h1>
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

    <x-footer />

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <x-scripts />

</body>

</html>
