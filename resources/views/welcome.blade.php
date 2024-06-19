@extends('layout.app')

@section('content')
	<!-- Tob Bar Section Start -->
	<div class="top-bar" style="background: #FCB040;">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="header-social-link">
						<a href="https://www.facebook.com/SiemReapGoldenkidsSchool/"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-telegram-plane"></i></a>
						<a href="http://www.youtube.com/@siemreapgoldenkidsschool"><i class="fab fa-youtube"></i></a>
						<a href="https://www.tiktok.com/@siemreapgoldenkidsschool"><i class="fab fa-tiktok"></i></a>
					</div>
				</div>

				<div class="col-md-8 text-right">
					<div class="school-info">
						<ul>
							<li><a href="#" email="siemreapgoldenkids@gmail.com"><i class="fa fa-envelope"></i> Email : siemreapgoldenkids@gmail.com</a></li>
							<li><a href="tel:+855 81 787 985"><i class="fa fa-phone-alt"></i> Call : +855 81 787 985</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Tob Bar Section End -->

	<!-- Header Section Start -->
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light" id="main-navbar">
			<div class="container">
				<!-- Navbar Brand start -->
				<a class="navbar-brand" href="#"><img src="{{ url('frontend/assets/images/logo.png') }}" alt="" /></a>
				<!-- Navbar Brand end -->

				<ul class="navbar-nav ml-auto" id="main-menu">
					<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#activities">Activities</a></li>
					<li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="#teachers">Teachers</a></li>
					<li class="nav-item"><a class="nav-link" href="#events">Events</a></li>
					<li class="nav-item"><a class="nav-link" href="#review">Review</a></li>
					<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>

				<div class="navbar-toggle"></div>
				<div id="responsive-menu"></div>
			</div>
		</nav>
	</header>
	<!-- Header Section End -->

	<!-- Banner Slider Section starts -->
	<div class="banner-slider" id="home">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-md-12">
					<div class="swiper-container banner-slider">
						<div class="swiper-wrapper">
							<!-- Header Slide start -->
							<div class="swiper-slide">
								<div class="banner-slide">
									<figure>
										<img src="{{ url('frontend/assets/images/slide-1.jpg') }}">
									</figure>

									{{-- <div class="banner-slide-overlay">
										<h2 class="color-orange" data-swiper-animation="fadeInDown" data-duration="1s" data-delay="1.5s">Pre School - Qualified Faculty Member</h2>
										<a href="#" class="btn-slider" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="2.5s">Enroll Today !</a>
									</div> --}}
								</div>
							</div>
							<!-- Header Slide end -->

							<!-- Header Slide start -->
							<div class="swiper-slide">
								<div class="banner-slide">
									<figure>
										<img src="{{ url('frontend/assets/images/slide-2.jpg') }}">
									</figure>

									{{-- <div class="banner-slide-overlay" data-swiper-animation="zoomIn" data-duration="1s" data-delay="0.5s">
										<h2 class="color-green" data-swiper-animation="fadeInDown" data-duration="1s" data-delay="1.5s">PreSchool: A Trendy Kids WordPress Theme</h2>
										<a href="#" class="btn-slider" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="2.5s">Enroll Today !</a>
									</div> --}}
								</div>
							</div>
							<!-- Header Slide end -->

							<!-- Header Slide start -->
							<div class="swiper-slide">
								<div class="banner-slide">
									<figure>
										<img src="{{ url('frontend/assets/images/slide-3.jpg') }}">
									</figure>

									{{-- <div class="banner-slide-overlay" data-swiper-animation="zoomIn" data-duration="1s" data-delay="0.5s">
										<h2 class="color-blue" data-swiper-animation="fadeInDown" data-duration="1s" data-delay="1.5s">PreSchool: A Trendy Kids WordPress Theme</h2>
										<a href="#" class="btn-slider" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="2.5s">Enroll Today !</a>
									</div> --}}
								</div>
							</div>
							<!-- Header Slide end -->
						</div>

						<!-- Banner Pagination start -->
						<div class="banner-button-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="banner-button-next"><i class="fa fa-chevron-right"></i></div>
						<!-- Banner Pagination end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Slider Section ends -->

	<!-- Activities Section Starts -->
	<section class="our-activities" id="activities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title wow fadeInUp">
						<h2 class="color-orange">Our Activities</h2>
						<p>Our Best Services for your Kids</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<!-- Activities Single Start -->
					<div class="activities-single wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-box icon-blue">
							<i class="flaticon-fork"></i>
						</div>

						<h3>Best Quality Food</h3>
						<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
						<a href="#" class="learn-more">Learn More</a>
					</div>
					<!-- Activities Single End -->
				</div>

				<div class="col-md-4">
					<!-- Activities Single Start -->
					<div class="activities-single wow fadeInUp" data-wow-delay="0.6s">
						<div class="icon-box icon-orange">
							<i class="flaticon-music-player"></i>
						</div>

						<h3>Music Lesson</h3>
						<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
						<a href="#" class="learn-more">Learn More</a>
					</div>
					<!-- Activities Single End -->
				</div>

				<div class="col-md-4">
					<!-- Activities Single Start -->
					<div class="activities-single wow fadeInUp" data-wow-delay="0.6s">
						<div class="icon-box icon-green">
							<i class="flaticon-bus"></i>
						</div>

						<h3>Bus Service</h3>
						<p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
						<a href="#" class="learn-more">Learn More</a>
					</div>
					<!-- Activities Single End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Activities Section Ends -->

	<!-- Our Courses Section Starts -->
	<section class="courses" id="courses">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Our Courses</h2>
						<p>Our Best Services for your Kids</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<!-- Course Single Start -->
					<div class="course-single course-orange wow fadeInUp" data-wow-delay="0.3s">
						<figure>
							<img src="{{ url('frontend/assets/images/course-1.jpg') }}" />
						</figure>

						<div class="course-body">
							<h3>Water Color Painting</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec.</p>
						</div>

						<div class="course-footer">
							<a href="#">Apply Now</a>
							<span>$79.00</span>
						</div>
					</div>
					<!-- Course Single end -->
				</div>

				<div class="col-lg-4">
					<!-- Course Single Start -->
					<div class="course-single course-blue wow fadeInUp" data-wow-delay="0.6s">
						<figure>
							<img src="{{ url('frontend/assets/images/course-2.jpg') }}" />
						</figure>

						<div class="course-body">
							<h3>Paly House & Nursary</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec.</p>
						</div>

						<div class="course-footer">
							<a href="#">Apply Now</a>
							<span>$129.00</span>
						</div>
					</div>
					<!-- Course Single End -->
				</div>

				<div class="col-lg-4">
					<!-- Course Single Start -->
					<div class="course-single course-green wow fadeInUp" data-wow-delay="0.9s">
						<figure>
							<img src="{{ url('frontend/assets/images/course-3.jpg') }}" />
						</figure>

						<div class="course-body">
							<h3>Primary Classes</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam condimentum nec.</p>
						</div>

						<div class="course-footer">
							<a href="#">Apply Now</a>
							<span>$229.00</span>
						</div>
					</div>
					<!-- Course Single End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Our Courses Section Ends -->

	<!-- About us Section Starts -->
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">About Us</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<!-- About Image Start -->
					<div class="about-image wow fadeInLeft" data-wow-delay="0.3s">
						<img src="{{ url('frontend/assets/images/about.jpg') }}" />
					</div>
					<!-- About Image End -->
				</div>

				<div class="col-md-8">
					<!-- About Content Start -->
					<div class="about-content wow fadeInUp" data-wow-delay="0.6s">
						<h3>Our Philosophy</h3>

						<p>Dictumst non commodo consectetuer mi natoque porta senectus montes, scelerisque. Pede volutpat natoque eros dictumst. Enim hac hac imperdiet dictumst primis pulvinar sociis. Ac rutrum venenatis pede potenti nisl mi elit semper montes diam. Placerat Curae..</p>

						<p>Nam molestie fringilla lorem, sociosqu tempus, mi. Bibendum. Tellus nullam vitae velit magna fringilla interdum tellus imperdiet. Ut congue pellentesque gravida ultrices auctor mauris nunc facilisis maecenas gravida pulvinar molestie magna.</p>
					</div>
					<!-- About Content End -->

					<!-- About Social Link Starts -->
					<div class="about-social-links">
						<a href="https://www.facebook.com/SiemReapGoldenkidsSchool/"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-telegram-plane"></i></a>
						<a href="http://www.youtube.com/@siemreapgoldenkidsschool"><i class="fab fa-youtube"></i></a>
						<a href="https://www.tiktok.com/@siemreapgoldenkidsschool"><i class="fab fa-tiktok"></i></a>
					</div>
					<!-- About Social Link Ends -->
				</div>
			</div>
		</div>
	</section>
	<!-- About us Section Ends -->

	<!-- Faculty Section starts -->
	<section class="faculty" id="teachers">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Qualified Teachers</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Faculty Single Start -->
					<div class="faculty-single faculty-orange wow fadeInUp" data-wow-delay="0.3s">
						<figure>
							<img src="{{ url('frontend/assets/images/team-1.jpg') }}" />
						</figure>

						<div class="faculty-info">
							<h3>Alison Silva</h3>
							<p>Music Teacher</p>
						</div>
					</div>
					<!-- Faculty Single End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Faculty Single Start -->
					<div class="faculty-single faculty-blue wow fadeInUp" data-wow-delay="0.6s">
						<figure>
							<img src="{{ url('frontend/assets/images/team-2.jpg') }}" />
						</figure>

						<div class="faculty-info">
							<h3>Jack Edward</h3>
							<p>Maths Teacher</p>
						</div>
					</div>
					<!-- Faculty Single End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Faculty Single Start -->
					<div class="faculty-single faculty-green wow fadeInUp" data-wow-delay="0.9s">
						<figure>
							<img src="{{ url('frontend/assets/images/team-3.jpg') }}" />
						</figure>

						<div class="faculty-info">
							<h3>Terri Mastrang</h3>
							<p>Science Teacher</p>
						</div>
					</div>
					<!-- Faculty Single End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Faculty Single Start -->
					<div class="faculty-single faculty-orange wow fadeInUp" data-wow-delay="1.2s">
						<figure>
							<img src="{{ url('frontend/assets/images/team-4.jpg') }}" />
						</figure>

						<div class="faculty-info">
							<h3>Krystal Hickman</h3>
							<p>Sports Teacher</p>
						</div>
					</div>
					<!-- Faculty Single End -->
				</div>
			</div>
		</div>
	</section>
	<!-- Faculty Section Ends -->

	<!-- Upcoming Events Section Starts -->
	<section class="events" id="events">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Upcoming Events</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="swiper-container event-slider">
						<div class="swiper-wrapper">
							<!-- Event Single Slide start -->
							<div class="swiper-slide">
								<div class="event-single event-orange">
									<figure>
										<img src="{{ url('frontend/assets/images/event-1.jpg') }}" alt="" />
										<div class="date"><span>06</span> Dec - 18</div>
									</figure>

									<div class="event-body">
										<h3>Outdor Music Event</h3>
										<p class="location">New York, Times Square</p>
										<p class="time">9:00 AM to 12:00 PM</p>
									</div>
								</div>
							</div>
							<!-- Event Single Slide end -->

							<!-- Event Single Slide start -->
							<div class="swiper-slide">
								<div class="event-single event-blue">
									<figure>
										<img src="{{ url('frontend/assets/images/event-2.jpg') }}" alt="" />
										<div class="date"><span>06</span> Dec - 18</div>
									</figure>

									<div class="event-body">
										<h3>Outdor Music Event</h3>
										<p class="location">New York, Times Square</p>
										<p class="time">9:00 AM to 12:00 PM</p>
									</div>
								</div>
							</div>
							<!-- Event Single Slide end -->

							<!-- Event Single Slide start -->
							<div class="swiper-slide">
								<div class="event-single event-green">
									<figure>
										<img src="{{ url('frontend/assets/images/event-3.jpg') }}" alt="" />
										<div class="date"><span>06</span> Dec - 18</div>
									</figure>

									<div class="event-body">
										<h3>Outdor Music Event</h3>
										<p class="location">New York, Times Square</p>
										<p class="time">9:00 AM to 12:00 PM</p>
									</div>
								</div>
							</div>
							<!-- Event Single Slide end -->
						</div>

						<!-- Event Pagination start -->
						<div class="event-pagination"></div>
						<!-- Event Pagination end -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Upcoming Events Section Ends -->

	<!-- Testimonial Section Starts -->
	<section class="testimonial" id="review">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Parents Testimonial</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="testimonial-slider-wrapper-outer">
						<div class="testimonial-slider-wrapper">
							<div class="swiper-container testimonial-slider">
								<div class="swiper-wrapper">
									<!-- Testimonial Slide start -->
									<div class="swiper-slide">
										<div class="testimonial-slide">
											<figure>
												<img src="{{ url('frontend/assets/images/team-4.jpg') }}" alt="" />
											</figure>

											<h3>Krystal Hickman</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										</div>
									</div>
									<!-- Testimonial Slide end -->

									<!-- Testimonial Slide start -->
									<div class="swiper-slide">
										<div class="testimonial-slide">
											<figure>
												<img src="{{ url('frontend/assets/images/team-4.jpg') }}" alt="" />
											</figure>

											<h3>Krystal Hickman</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										</div>
									</div>
									<!-- Testimonial Slide end -->

									<!-- Testimonial Slide start -->
									<div class="swiper-slide">
										<div class="testimonial-slide">
											<figure>
												<img src="{{ url('frontend/assets/images/team-4.jpg') }}" alt="" />
											</figure>

											<h3>Krystal Hickman</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										</div>
									</div>
									<!-- Testimonial Slide end -->
								</div>

								<!-- Testimonial Pagination start -->
								<div class="testimonial-pagination"></div>
								<!-- Testimonial Pagination end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Section Ends -->

	<!-- Photo Gallery Section Starts -->
	<section class="photo-gallery" id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Photo Gallery</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->
				</div>
			</div>

			<div class="row gallery">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-orange wow fadeInUp" data-wow-delay="0.3s">
						<a href="{{ url('frontend/assets/images/course-1.jpg') }}"><img src="{{ url('frontend/assets/images/course-1.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-blue wow fadeInUp" data-wow-delay="0.6s">
						<a href="{{ url('frontend/assets/images/course-2.jpg') }}"><img src="{{ url('frontend/assets/images/course-2.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-green wow fadeInUp" data-wow-delay="0.9s">
						<a href="{{ url('frontend/assets/images/course-3.jpg') }}"><img src="{{ url('frontend/assets/images/course-3.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-orange wow fadeInUp" data-wow-delay="1.2s">
						<a href="{{ url('frontend/assets/images/event-1.jpg') }}"><img src="{{ url('frontend/assets/images/event-1.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-blue wow fadeInUp" data-wow-delay="1.5s">
						<a href="{{ url('frontend/assets/images/event-2.jpg') }}"><img src="{{ url('frontend/assets/images/event-2.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-green wow fadeInUp" data-wow-delay="1.8s">
						<a href="{{ url('frontend/assets/images/event-3.jpg') }}"><img src="{{ url('frontend/assets/images/event-3.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-orange wow fadeInUp" data-wow-delay="2.1s">
						<a href="{{ url('frontend/assets/images/course-1.jpg') }}"><img src="{{ url('frontend/assets/images/course-1.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<!-- Photo Gallery Single start -->
					<div class="photo-single photo-blue wow fadeInUp" data-wow-delay="2.4s">
						<a href="{{ url('frontend/assets/images/course-2.jpg') }}"><img src="{{ url('frontend/assets/images/course-2.jpg') }}" /></a>
					</div>
					<!-- Photo Gallery Single end -->
				</div>
			</div>
		</div>
	</section>
	<!-- Photo Gallery Section Ends -->

	<!-- Contact us Section Starts -->
	<section class="contactus" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Information</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->

					<!-- Contact info start -->
					<div class="contact-info">
						<p class="email">siemreapgoldenkids@gmail.com</p>
						<p class="contact">+855 81 787 985</p>
						<p class="address">Psa Kroum Road, Krong Siem Reap, </p>
					</div>
					<!-- Contact info End -->

					<!-- Contact Social Link start -->
					<div class="contact-social-link">
						<a href="https://www.facebook.com/SiemReapGoldenkidsSchool/"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-telegram-plane"></i></a>
						<a href="http://www.youtube.com/@siemreapgoldenkidsschool"><i class="fab fa-youtube"></i></a>
						<a href="https://www.tiktok.com/@siemreapgoldenkidsschool"><i class="fab fa-tiktok"></i></a>
					</div>
					<!-- Contact Social Link end -->
				</div>

				<div class="col-md-6">
					<!-- Section title start -->
					<div class="section-title">
						<h2 class="color-orange">Contact Us</h2>
						<p>Lorem ipsum dolor sit amet, ipsum dolor sit amet</p>
					</div>
					<!-- Section title end -->

					<!-- Contact Form start -->
					<div class="contact-form">
						<form id="contactForm" action="#" method="post">
							<div class="row">
								<div class="form-group col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="Your Name" />
								</div>

								<div class="form-group col-md-6 col-sm-6">
									<input type="email" class="form-control" placeholder="Your Email Address" />
								</div>

								<div class="form-group col-md-12 col-sm-12">
									<input type="text" class="form-control" placeholder="Subject">
								</div>

								<div class="form-group col-md-12 col-sm-12">
									<textarea rows="4"class="form-control" placeholder="How can i help you?"></textarea>
								</div>

								<div class="col-md-12 col-sm-12 text-center">
									<button type="submit" class="btn-contact">Submit</button>
								</div>
							</div>
						</form>
					</div>
					<!-- Contact Form end -->
				</div>
			</div>
		</div>
	</section>
	<!-- Contact us Section Ends -->

    <!-- Footer Section Starts -->
    {{-- <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Footer Copyright start -->
                    <div class="footer-copyright">
                        <p>Copyright<strong> &copy; SiemReap GoldenKids School</strong>
                    </div>
                    <!-- Footer Copyright end -->
                </div>

                 <div class="col-md-6">
                    <!-- Footer logo start -->
                    <div class="footer-logo">
                        <img src="{{ url('../frontend/assets/images/sgkLogo.png') }}" style="width: 30%;" alt="" />
                    </div>
                    <!-- Footer logo end -->
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- Footer Section Ends -->

    <!-- Footer Section Starts -->

<!--    <footer class="footer bg-dark">
        <div class="container-fluid text-white-50">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6 section-footer-title footer-contact-info">
                                <h3 class="text-white mb-4">Get In Touch</h3>
                                <p class="address">123 Street, New York, USA</p>
                                <p class="contact">+012 345 67890</p>
                                <p class="email">info@example.com</p>
                                <div class="d-flex footer-contact-social-link">
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-linkedin"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-md-6 section-footer-title">
                                <h3 class="text-white mb-4">Quick Links</h3>
                                <a class="btn btn-link text-white-50" href="">About Us</a>
                                <a class="btn btn-link text-white-50" href="">Contact Us</a>
                                <a class="btn btn-link text-white-50" href="">Our Services</a>
                                <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                                <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6 section-footer-title">
                                <h3 class="text-white mb-4">Photo Gallery</h3>
                                <div class="row g-2 pt-2">
                                    <div class="col-4">
                                        <img class="img-fluid rounded bg-light p-1" src="{{ url('frontend/assets/images/course-1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid rounded bg-light p-1" src="{{ url('frontend/assets/images/course-2.jpg') }}" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid rounded bg-light p-1" src="{{ url('frontend/assets/images/course-3.jpg') }}" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid rounded bg-light p-1" src="{{ url('frontend/assets/images/event-3.jpg') }}" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid rounded bg-light p-1" src="{{ url('frontend/assets/images/event-2.jpg') }}" alt="">
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid rounded bg-light p-1" src="{{ url('frontend/assets/images/event-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6 section-footer-title">
                                <h3 class="text-white mb-4">Newsletter</h3>
                                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                                <div class="position-relative mx-auto" style="max-width: 400px;">
                                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 section-footer-title">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope mr-2"></i>siemreapgoldenkids@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/SiemReapGoldenkidsSchool/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-telegram-plane"></i></a>
                        <a class="btn btn-outline-light btn-social" href="http://www.youtube.com/@siemreapgoldenkidsschool"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@siemreapgoldenkidsschool"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 section-footer-title">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-4 col-md-6 section-footer-title">
                    <h3 class="text-white mb-4">Photo Gallery</h3>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1 m-2" src="{{ url('../frontend/assets/images/course-1.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1 m-2" src="{{ url('../frontend/assets/images/course-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1 m-2" src="{{ url('../frontend/assets/images/course-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1 m-2" src="{{ url('../frontend/assets/images/event-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1 m-2" src="{{ url('../frontend/assets/images/event-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1 m-2" src="{{ url('../frontend/assets/images/event-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 section-footer-title">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SiemReap GoldenKids School</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed and Development By <a class="border-bottom" href="#">The Thesis Information Technology of P15</a>
                        <br>Directed By: <a class="border-bottom" href="https://www.usea.edu.kh/en/Pages/index.php" target="USEA">University of South-East Asia </a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Section Ends -->

@endsection
