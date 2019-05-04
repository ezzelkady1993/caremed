@extends('layout.main')

@section('title','Research')

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
									<li><a href="{{route('home')}}">Home</a></li>
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
					<div class="section_title"><h2>CareMed Research</h2></div>
					
					<div class="text_section">
						<div class="row">
							@forelse($researches->chunk(3) as $chunk)
								@foreach($chunk as $research)
							<!-- Text Section Image -->
							<div class="col-lg-5">
								<div class="text_section_image"><img src="images/{{$research->image}}" alt=""></div>
							</div>

							<!-- Text Section Content -->
							
									<div class="col-lg-7">
										<div class="text_section_content">
											<div class="section_title"><h2>{{$research->title}}</h2></div>
											<div class="text_section_text">
												<p>{{$research->description}}</p>
											</div>

											<div class="team_member_title">{{$research->author}}</div>
										
										</div>
									</div>
								@endforeach
							@empty
								<h3>No Programs</h3>
						@endforelse
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


@endsection