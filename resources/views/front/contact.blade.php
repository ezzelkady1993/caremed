@extends('layout.main')

@section('title','Contact')

@section('content')

<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>CareMed</span> News</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="section_title"><h2>Get in touch</h2></div>
					<div class="contact_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin. Aliquam nec dapibus massa.</p>
					</div>
					<ul class="contact_about_list">
						<li><div class="contact_about_icon"><img src="images/phone-call.svg" alt=""></div><span>+45 677 8993000 223</span></li>
						<li><div class="contact_about_icon"><img src="images/envelope.svg" alt=""></div><span>office@template.com</span></li>
						<li><div class="contact_about_icon"><img src="images/placeholder.svg" alt=""></div><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
					</ul>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 form_col">
					<div class="contact_form_container">
						<div class="contact_form" id='contact_form'>
							{!! Form::open(['route' => 'front.problem','method'=>'post']) !!}
								<div class="row">
									<div class="col-md-6 input_col">
										<div class="input_container input_name">
											{{ Form::label('name' , 'Name') }}
											{{ Form::text('name' , null,array('class'=>
											'contact_input','required'=>'','min-length'=>'5')) }}
										</div>
									</div>
									<div class="col-md-6 input_col">
										<div class="input_container input_name">
											{{ Form::label('email' , 'E-mail') }}
											{{ Form::text('email' , null,array('class'=>
											'contact_input','required'=>'','min-length'=>'5')) }}
										</div>
									</div>
								</div>
								<div class="input_container">
									{{ Form::label('subject' , 'Subject') }}
									{{ Form::text('subject' , null,array('class'=>
									'contact_input','required'=>'','min-length'=>'5')) }}
								</div>
								<div class="input_container">
									{{ Form::label('problem' , 'Message') }}
									{{ Form::textarea('subject' , null,array('class'=>
									'contact_input contact_text_area' ,'required'=>'','min-length'=>'5')) }}
								</div>
								{{ Form::button('Send' , array('class'=>'button contact_button')) }}
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->

						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13806.74896256252!2d31.318016!3d30.1031424!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1554313691624!5m2!1sen!2seg" width="1150" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>

						<!-- Working Hours -->
						<div class="box working_hours" style="width: 362px;height: 287px;margin-top: -100px">
							<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div></div>
							<div class="box_title">Working Hours</div>
							<div class="working_hours_list">
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday – Friday</div>
										<div class="ml-auto">8.00 – 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 – 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 – 15.00</div>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

@endsection