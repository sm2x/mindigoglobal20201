@extends('landing_page_layout.app')

@section('content')

<div class="c">
<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-bar-1" class="header-bar">
		
				<div class="header-bar-wrap">
		
					<div class="container">
						<div class="row">
							<div class="col-md-12">
		
								<div class="hb-content">
									<a class="logo logo-header" href="index.html">
										<!-- <img src="images/files/logo-header.png" data-logo-alt="images/files/logo-header-alt.png" alt=""> -->
										<h3><span style="color:white" class="text-white">Mindigoglobal</span></h3>
										<span>Landing Page</span>
									</a><!-- .logo end -->
								
								</div><!-- .hb-content end -->
		
							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .header-bar-wrap -->
		
			</div><!-- #header-bar-1 end -->

		</header><!-- #header end -->

		<!-- Banner
		============================================= -->
		<section id="banner">
		
			<div class="banner-parallax" data-banner-height="650">
				<img src="images/files/parallax-bg/img-6.jpg" alt="">
				<div class="overlay-colored color-bg-dark opacity-85"></div><!-- .overlay-colored end -->
				<div class="slide-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-push-6">

								<div class="banner-center-box">
									<div class="img-featured-1 img-bg">
										<img src="images/files/img-featured-1/img-1.jpg" alt="">
									</div><!-- .img-featured-1 end -->								
								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-6 -->
							<div class="col-md-6 col-md-pull-6">
							
								<div class="banner-center-box text-white">
									<h1>
										<span class="heading-300">Hi, I am</span>
										<br>
										{{$user_data->name}}
									</h1>
									<p class="description">
										I will love to introduce you to an amazing business opportunity.
									</p>
									<div class="cta-subscribe cta-subscribe-1 box-form mt-40">
										<div class="box-content">
											<div class="cs-notifications">
												<div class="cs-notifications-content"></div>
											</div><!-- .cs-notifications end -->
											<form id="form-email-subscribe" class="form-inline redirected">
												<div class="form-group">
													<i class="fas fa-envelope field-icon"></i>
													<input type="email" name="esEmail" placeholder="Email Address" id="esEmail"
														class="form-control">
												</div><!-- .form-group end -->
												<div class="form-group">
													<input style="background-color: #d49719;" type="submit" class="form-control btn-warning" value="Getstarted">
												</div><!-- .form-group end -->
											</form><!-- #form-email-subscribe end -->
										</div><!-- .box-content end -->
									</div><!-- .box-form end -->
								</div><!-- .banner-center-box end -->
							
							</div><!-- .col-md-6 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->
				</div><!-- .slide-content end -->
			</div><!-- .banner-parallax end -->
		
		</section><!-- #banner end -->

		<!-- === Section Our Services 1 =========== -->
		<div id="section-our-services-1" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-3 mt-30 mt-md-0 mb-md-40">
				
							<h3>
								<span class="heading-300">What</span>
								<br>
								We Deliver
								<br>
								<span class="heading-300">to Our Users</span>
							</h3>

						</div><!-- .col-md-3 end -->
						<div class="col-md-3 col-sm-4">

							<div class="box-info box-service-1">
								<div class="box-icon">
									<i class="far fa-lightbulb"></i>
								</div><!-- .box-icon end -->
								<div class="box-content">
									<h5><a href="javascript:;">Strategy & Planning</a></h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.
									</p>
								</div><!-- .box-content end -->
							</div><!-- .box-info box-service-1 end -->

						</div><!-- .col-md-3 -->
						<div class="col-md-3 col-sm-4">
						
							<div class="box-info box-service-1 mt-sm-40">
								<div class="box-icon">
									<i class="fas fa-chart-line"></i>
								</div><!-- .box-icon end -->
								<div class="box-content">
									<h5><a href="javascript:;">Fast Development</a></h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.
									</p>
								</div><!-- .box-content end -->
							</div><!-- .box-info box-service-1 end -->
						
						</div><!-- .col-md-3 -->
						<div class="col-md-3 col-sm-4">
						
							<div class="box-info box-service-1 mt-sm-40">
								<div class="box-icon">
									<i class="fas fa-check"></i>
								</div><!-- .box-icon end -->
								<div class="box-content">
									<h5><a href="javascript:;">Product Launch</a></h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.
									</p>
								</div><!-- .box-content end -->
							</div><!-- .box-info box-service-1 end -->
						
						</div><!-- .col-md-3 -->

					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Our Services 2 =========== -->
		<div id="section-our-services-2" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6">
		
							<div class="section-title mt-20 mt-md-0">
									<h2>
										<span class="heading-300">Boost The Growth of</span>
										<br>
										Your Startup Business
									</h2>
									<p class="description">
										This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?
									</p>
							</div><!-- .section-title end -->
							<ul class="list-info arrow-right">
								<li>Donec nec justo eget felis facilisis fermentum.</li>
								<li>Aliquam porttitor mauris sit amet orci.</li>
								<li>Integer vitae libero ac risus egestas placerat.</li>
							</ul><!-- .list-info.arrow-right end -->
						

						</div><!-- .col-md-6 end -->
						<div class="col-md-6 mt-md-60">

							<div class="img-featured-1 img-bg">
								<img src="images/files/img-featured-1/img-1.jpg" alt="">
							</div><!-- .img-featured-1 end -->

						</div><!-- .col-md-6 -->
						<div class="col-md-12">

							<div class="divider-container">
								<div class="divider-line">
									
								</div><!-- .divider-line end -->
							</div><!-- .divider-container end -->

						</div><!-- .col-md-12 end -->
						<div class="col-md-6 col-md-push-6 pl-55">
						
							<div class="section-title mt-20 mt-md-0">
								<h2>
									<span class="heading-300">Introduce The Goals of Your</span>
									<br>
									Business or Company
								</h2>
								<p class="description">
									This should be used to tell a story and let your users know a little more about your product or service. How
									can you benefit them?
								</p>
							</div><!-- .section-title end -->
							<ul class="list-info arrow-right">
								<li>Donec nec justo eget felis facilisis fermentum.</li>
								<li>Aliquam porttitor mauris sit amet orci.</li>
								<li>Aenean dignissim pellentesque felis.</li>
							</ul><!-- .list-info.arrow-right end -->
							<a class="btn colorful large hover-dark rounded mt-20 move-top" href="#">Get Started</a>
						
						</div><!-- .col-md-6 end -->
						<div class="col-md-6 col-md-pull-6 mt-md-60">
						
							<div class="img-featured-1 img-bg">
								<img src="images/files/img-featured-1/img-2.jpg" alt="">
							</div><!-- .img-featured-1 end -->
						
						</div><!-- .col-md-6 -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Some Facts 1 =========== -->
		<div id="section-some-facts-1" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						
							<div class="section-title text-white mt-100 mt-md-0">
								<h2>
									<span class="heading-300">Some Facts of Our</span>
									<br>
									Achievements Numbers
								</h2>
								<p class="description">
									This should be used to tell a story and let your users know a little more about your product or service. How
									can you benefit them?
								</p>
							</div><!-- .section-title end -->
							<a class="btn large white hover-dark rounded mt-10 move-top" href="#">Get Started</a>
						
						</div><!-- .col-md-6 end -->
						<div class="col-md-6 mt-md-60">
		
							<ul class="list-some-facts list-boxes boxes-2">
								<li>
									<div class="box-info box-some-fact-1 text-white">
										<div class="box-icon">
											<i class="fas fa-coins"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h2><span class="counter-stats">1500</span></h2>
											<h5>Projects Completed</h5>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-some-fact-1 end -->
		
								</li>
								<li>
									<div class="box-info box-some-fact-1 text-white">
										<div class="box-icon">
											<i class="fas fa-smile-beam"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h2><span class="counter-stats">1420</span></h2>
											<h5>Happy Clients</h5>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-some-fact-1 end -->
								
								</li>
								<li>
									<div class="box-info box-some-fact-1 text-white">
										<div class="box-icon">
											<i class="fas fa-coffee"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h2><span class="counter-stats">1250</span></h2>
											<h5>Cups of Coffee</h5>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-some-fact-1 end -->
								
								</li>
								<li>
									<div class="box-info box-some-fact-1 text-white">
										<div class="box-icon">
											<i class="fas fa-business-time"></i>
										</div><!-- .box-icon end -->
										<div class="box-content">
											<h2><span class="counter-stats">21600</span></h2>
											<h5>Hours of Work</h5>
										</div><!-- .box-content end -->
									</div><!-- .box-info box-some-fact-1 end -->
								
								</li>
							</ul><!-- .list-boxes end -->
		
						</div><!-- .col-md-6 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Customers Testimonials 1 =========== -->
		<div id="section-customers-testimonials-1" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						
							<div class="section-title">
								<h2>
									<span class="heading-300">Did You Hear About Our</span>
									<br>
									Customers Testimonials
								</h2>
								<p class="description">
									This should be used to tell a story and let your users know a little more about your product or service. How
									can you benefit them?
								</p>
							</div><!-- .section-title end -->

						</div><!-- .col-md-6 end -->
						<div class="col-md-12">

							<div class="slider-testimonials mt-20">
								<ul class="slick-slider">
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
													Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia.
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/img-1.jpg" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Larry Todd</h5>
														<span>Art Director, Envato Market</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
													Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia.
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/img-2.jpg" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Maud Boyd</h5>
														<span>Team Leader, Facebook</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
													Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia.
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/img-3.jpg" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Paul Scrivens</h5>
														<span>Web Developer, Google</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
													Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia.
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/img-1.jpg" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Larry Todd</h5>
														<span>Art Director, Envato Market</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
									<li>
										<div class="slide">
											<div class="testimonial-single-1">
												<div class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div><!-- .rating end -->
												<div class="ts-content">
													Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia.
												</div><!-- .ts-content end -->
												<div class="ts-person">
													<div class="ts-img">
														<img src="images/files/sliders/clients-testimonials/img-2.jpg" alt="">
													</div><!-- .ts-img end -->
													<div class="ts-name">
														<h5>Maud Boyd</h5>
														<span>Team Leader, Facebook</span>
													</div><!-- .ts-name end -->
												</div><!-- .ts-person end -->
											</div><!-- .testimonial-single-1 -->
										</div><!-- .slide end -->
									</li>
								</ul><!-- .slick-slider end -->
							</div><!-- .slider-testimonials end -->
		
						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section Clients 1 =========== -->
		<div id="section-clients-1" class="section-flat">
		
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-12">
		
							<div class="slider-clients">
								<ul class="slick-slider">
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-1.png" alt=""></a>
										</div>
									</li>
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-2.png" alt=""></a>
										</div>
									</li>
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-3.png" alt=""></a>
										</div>
									</li>
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-4.png" alt=""></a>
										</div>
									</li>
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-5.png" alt=""></a>
										</div>
									</li>
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-6.png" alt=""></a>
										</div>
									</li>
									<li>
										<div class="client-single">
											<a href="javascript:;"><img src="images/files/sliders/clients/img-2.png" alt=""></a>
										</div>
									</li>
								</ul><!-- .slick-slider end -->
							</div><!-- .slider-clients end -->
		
						</div><!-- .col-md-12 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->

		<!-- === Section CTA 1 =========== -->
		<div id="section-cta-1" class="section-parallax text-white text-center">
		
			<img src="images/files/parallax-bg/img-2.jpg" alt="">
			<div class="overlay-colored color-bg-dark opacity-85"></div><!-- .overlay-colored end -->
			<div class="section-content">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
		
							<h1>
								<span class="heading-300">We Are Waiting to</span>
								<br>
								Listen From You!
							</h1>
							<p class="description">
								We care to deliver adaptive services and solutions to our customers to achieve and satisfy their needs.
							</p>
							<a class="btn x-large colorful hover-dark rounded mt-20 move-top" href="#">Get Started</a>
		
						</div><!-- .col-md-6 end -->
					</div><!-- .row end -->
				</div><!-- .container end -->
		
			</div><!-- .section-content end -->
		
		</div><!-- .section-flat end -->
</div>

@endsection