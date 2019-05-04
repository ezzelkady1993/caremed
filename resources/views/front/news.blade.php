@extends('layout.main')

@section('title','news')

@section('content')

<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>CareMed</span> News</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>News</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_image">
								<img src="images/news_1.jpg" alt="">
								<div class="news_date d-flex flex-column align-items-center justify-content-center">
										<div class="news_day">15</div>
										<div class="news_month">March</div>
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="#">10 Reasons to make a check up</a></div>
								<div class="news_info">
									<ul>
										<li class="news_author"><span>By </span><a href="#">Dr. William Smith</a></li>
										<li class="news_tags"><span>in </span><a href="#">Therapy</a></li>
										<li class="news_comments"><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
								</div>
								<div class="news_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_image">
								<img src="images/news_2.jpg" alt="">
								<div class="news_date d-flex flex-column align-items-center justify-content-center">
										<div class="news_day">15</div>
										<div class="news_month">March</div>
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="#">10 Reasons to make a check up</a></div>
								<div class="news_info">
									<ul>
										<li class="news_author"><span>By </span><a href="#">Dr. William Smith</a></li>
										<li class="news_tags"><span>in </span><a href="#">Therapy</a></li>
										<li class="news_comments"><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
								</div>
								<div class="news_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_image">
								<img src="images/news_3.jpg" alt="">
								<div class="news_date d-flex flex-column align-items-center justify-content-center">
										<div class="news_day">15</div>
										<div class="news_month">March</div>
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="#">10 Reasons to make a check up</a></div>
								<div class="news_info">
									<ul>
										<li class="news_author"><span>By </span><a href="#">Dr. William Smith</a></li>
										<li class="news_tags"><span>in </span><a href="#">Therapy</a></li>
										<li class="news_comments"><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
								</div>
								<div class="news_link"><a href="#">Read More</a></div>
							</div>
						</div>

					</div>
					<div class="news_page_nav">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" id="sidebar_search_form" class="sidebar_search_form">
								<input type="text" class="search_input" placeholder="Search" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="sidebar_categories sidebar_section">
							<div class="sidebar_section_title">
								<div class="sidebar_title">Categories</div>
							</div>
							<ul>
								<li><a href="#">Medical Articles</a></li>
								<li><a href="#">Therapy</a></li>
								<li><a href="#">Useful Information</a></li>
								<li><a href="#">Uncategorized</a></li>
							</ul>
						</div>

						<!-- Archives -->
						<div class="sidebar_archives sidebar_section">
							<div class="sidebar_section_title">
								<div class="sidebar_title">Archives</div>
							</div>
							<ul>
								<li><a href="#">December 2017</a></li>
								<li><a href="#">January 2018</a></li>
								<li><a href="#">February 2018</a></li>
								<li><a href="#">March 2018</a></li>
							</ul>
						</div>

						<!-- Working Hours -->
						<div class="box working_hours" style="margin-top: 80px;margin-left: -90px;">
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

						<!-- Ad -->
						<div class="ad d-flex flex-column align-items-center justify-content-end" style="margin-top: 470px;">
							<div class="ad_background" style="background-image:url(images/ad.jpg)"></div>
							<div class="ad_content">
								<div class="ad_text">Come and take a <span>free screening</span></div>
								<div class="button ad_button"><a href="#">read more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection