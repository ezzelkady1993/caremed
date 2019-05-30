@extends('layout.main')

@section('title','Medical Team')

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
	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Meet Our Medical Team</h2></div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Member -->
				@forelse($doctors->chunk(8) as $chunk)
					@foreach($chunk as $doctor)
						<div class="col-lg-3 team_col">
							<div class="team_member">
								<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="images/{{$doctor->image}}" alt=""></div>
								<div class="team_member_info">
									<div class="team_member_name"><a href="#">{{$doctor->doc_name}}</a></div>
									<!-- Department Name -->
									<div class="team_member_title">{{$doctor->department_id}}</div>
								</div>
							</div>
						</div>
					@endforeach
				@empty
					<h3>No Doctors</h3>
				@endforelse
			</div>
		</div>
	</div>


@endsection