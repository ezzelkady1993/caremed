<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			@yield('title','CareMed')
		</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="CareMed demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/about.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/contact.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/elements.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/news.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/news_responsive.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/services.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/services_responsive.css')}}">
	</head>
	<body>

		<div class="super_container">
			
			<!-- Header -->

			<header class="header trans_200">
				
				<!-- Top Bar -->
				<div class="top_bar">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<div class="top_bar_item"><a href="#">FAQ</a></div>
									<div class="top_bar_item"><a href="#">Request an Appointment</a></div>
									<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">For Emergencies: +563 47558 623</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Header Content -->
				<div class="header_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_content d-flex flex-row align-items-center justify-content-start">
									<nav class="main_nav ml-auto">
										<ul>
											<li><a href="{{route('home')}}">Home</a></li>
											<li><a href="{{route('about')}}">About us</a></li>
											<li><a href="{{route('services')}}">Services</a></li>
											<li><a href="{{route('news')}}">News</a></li>
											<li><a href="{{route('contact')}}">Contact</a></li>
										</ul>
									</nav>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Logo -->
				<div class="logo_container_outer">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="logo_container">
									<a href="{{route('home')}}">
										<div class="logo_content d-flex flex-column align-items-start justify-content-center">
											<div class="logo_line"></div>
											<div class="logo d-flex flex-row align-items-center justify-content-center">
												<div class="logo_text">Care<span>Med</span></div>
												<div class="logo_box">+</div>
											</div>
											<div class="logo_sub">Health Care Center</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>	
				</div>

			</header>

			<!-- Menu -->

			<div class="menu_container menu_mm">

				<!-- Menu Close Button -->
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>

				<!-- Menu Items -->
				<div class="menu_inner menu_mm">
					<div class="menu menu_mm">
						<ul class="menu_list menu_mm">
							<li class="menu_item menu_mm"><a href="{{route('home')}}">Home</a></li>
							<li class="menu_item menu_mm"><a href="{{route('about')}}">About us</a></li>
							<li class="menu_item menu_mm"><a href="{{route('services')}}">Services</a></li>
							<li class="menu_item menu_mm"><a href="{{route('news')}}">News</a></li>
							<li class="menu_item menu_mm"><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
					<div class="menu_extra">
						<div class="menu_appointment"><a href="#">Request an Appointment</a></div>
						<div class="menu_emergencies">For Emergencies: +563 47558 623</div>
					</div>

				</div>

			</div>
			
			@yield('content')
			<!-- Footer -->

			<footer class="footer">
				<div class="footer_container">
					<div class="container">
						<div class="row">
							
							<!-- Footer - About -->
							<div class="col-lg-4 footer_col">
								<div class="footer_about">
									<div class="footer_logo_container">
										<a href="{{route('home')}}" class="d-flex flex-column align-items-center justify-content-center">
											<div class="logo_content">
												<div class="logo d-flex flex-row align-items-center justify-content-center">
													<div class="logo_text">Care<span>Med</span></div>
													<div class="logo_box">+</div>
												</div>
												<div class="logo_sub">Health Care Center</div>
											</div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum.</p>
									</div>
									<ul class="footer_about_list">
										<li><div class="footer_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
										<li><div class="footer_about_icon"><img src="images/envelope.svg" alt=""></div><span>office@template.com</span></li>
										<li><div class="footer_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
									</ul>
								</div>
							</div>

							<!-- Footer - Links -->
							<div class="col-lg-4 footer_col">
								<div class="footer_links footer_column">
									<div class="footer_title">Useful Links</div>
									<ul>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Apply for a Job</a></li>
										<li><a href="#">Terms & Conditions</a></li>
										<li><a href="#">Our Partners</a></li>
										<li><a href="{{route('services')}}">Services</a></li>
										<li><a href="{{route('services')}}">Free services</a></li>
										<li><a href="{{route('about')}}">About us</a></li>
										<li><a href="{{route('news')}}">News</a></li>
										<li><a href="{{route('contact')}}">Contact</a></li>
										<li><a href="#">Our Screening Program</a></li>
										<li><a href="#">FAQ</a></li>
									</ul>
								</div>
							</div>

							<!-- Footer - News -->
							<div class="col-lg-4 footer_col">
								<div class="footer_news footer_column">
									<div class="footer_title">Useful Links</div>
									<ul>
										<li>
											<div class="footer_news_title"><a href="{{route('news')}}">Aliquam ac eleifend metus</a></div>
											<div class="footer_news_date">March 10, 2018</div>
										</li>
										<li>
											<div class="footer_news_title"><a href="{{route('news')}}">Donec in libero sit amet mi vulputate</a></div>
											<div class="footer_news_date">March 10, 2018</div>
										</li>
										<li>
											<div class="footer_news_title"><a href="{{route('news')}}">Aliquam ac eleifend metus</a></div>
											<div class="footer_news_date">March 10, 2018</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
									<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and developped by <a href="https://www.linkedin.com/in/ezz-eldeen-elkady-8b0486103/" target="_blank">Ezz Elkady</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
									<div class="footer_social ml-lg-auto">
										<ul>
											<li><a href="https://www.pinterest.com/ezzelkady/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="https://www.facebook.com/ezz.elkady.5"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="https://twitter.com/ezzelkady1993"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="https://dribbble.com/ezzelkady1993"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											<li><a href="https://www.behance.net/ezzelkady1b7a6"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
											<li><a href="https://www.linkedin.com/in/ezz-eldeen-elkady-8b0486103/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</footer>
		</div>

		<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
		<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
		<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
		<script src="{{asset('plugins/easing/easing.js')}}"></script>
		<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>
</html>