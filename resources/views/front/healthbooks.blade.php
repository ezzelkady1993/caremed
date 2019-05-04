@extends('layout.main')

@section('title','Health Books')

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

	<div class="news">
		<div class="container">
			<div class="row">
				
					<div class="section_title"><h2>CareMed Health Books</h2></div>
					

						<!-- News Books -->

				<div class="row team_row">

						@forelse($hbooks->chunk(4) as $chunk)
					@foreach($chunk as $hbook)
				<!-- Team Member -->
				<div class="col-lg-3 team_col">
					<div class="team_member">
						<div class="team_member_image d-flex flex-column align-items-center justify-content-end"><img src="images/{{$hbook->image}}" style="height: 340px" alt=""></div>
						<div class="team_member_info">
							<div class="team_member_name"><a href="#">{{$hbook->name}}</a></div>
							<div class="team_member_title">{{$hbook->author}}</div>
						</div>
					</div>
				</div>
				@endforeach
					@empty
						<h3>No Books</h3>
				@endforelse


			</div>


					
				
			</div>
		</div>
	</div>


@endsection