@extends('layout.main')

@section('title','Services')

@section('content')

<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>CareMed</span> Services</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
								
	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Our Featured Services</h2></div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="{{route('healthbooks')}}">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">CareMed Health Books</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="{{route('livingprog')}}">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_2.svg" alt=""></div>
							<div class="service_title trans_200">Healthy Living Programs</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="{{route('sportmed')}}">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_3.svg" alt=""></div>
							<div class="service_title trans_200">CareMed Sports Medicine</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="{{route('healthletter')}}">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_4.svg" alt=""></div>
							<div class="service_title trans_200">CareMed Health Letters</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="{{route('contact')}}">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_5.svg" alt=""></div>
							<div class="service_title trans_200">CareMed Advisory Services</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="{{route('research')}}">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_6.svg" alt=""></div>
							<div class="service_title trans_200">CareMed Research</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="features_container d-flex flex-row flex-wrap align-items-start justify-content-between">
						
						<!-- Feature -->
						<div class="feature">
							<div class="feature_image"><img src="images/features_1.jpg" alt=""></div>
							<div class="feature_content">
								<div class="section_title"><h2>We help you</h2></div>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="feature">
							<div class="feature_image"><img src="images/features_2.jpg" alt=""></div>
							<div class="feature_content">
								<div class="section_title"><h2>Medicine for you</h2></div>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
								</div>
							</div>
						</div>

						<!-- Feature -->
						<div class="feature">
							<div class="feature_image"><img src="images/features_3.jpg" alt=""></div>
							<div class="feature_content">
								<div class="section_title"><h2>Amazing technology</h2></div>
								<div class="feature_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Text Section -->

	<div class="text_section">
		<div class="container">
			<div class="row">
				
				<!-- Text Section Image -->
				<div class="col-lg-5">
					<div class="text_section_image"><img src="images/text_section.jpg" alt=""></div>
				</div>

				<!-- Text Section Content -->
				<div class="col-lg-7">
					<div class="text_section_content">
						<div class="section_title"><h2>A great medical team to help your needs</h2></div>
						<div class="text_section_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex. Praesent luctus erat sit amet tortor aliquam bibendum. Nulla ut molestie augue, scelerisque consectetur quam. Dolor sit amet, consectetur adipiscing elit. Cura bitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
						</div>
						<div class="button text_section_button"><a href="{{route('ourMedicalTeam')}}">read more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>Need a personal health plan?</h2>
						<p>Duis massa massa, mollis vel ullamcorper quis, finibus et urna. Aliquam ac eleifend metus. Ut sollicitudin risus ex</p>
						<div class="button cta_button"><a href="#">request a plan</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection