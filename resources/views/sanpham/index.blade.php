@extends('layout_client/masterclient')
@section('title','Công ty bán hàng online')
@section('content')

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				<!-- Slide -->
				<div class="owl-item home_slider_item">
					<div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
							<div class="home_category"><a href="category.html">technology</a></div>
							<div class="home_title">Building the Future</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur</div>
							<div class="home_button trans_200"><a href="#">read more</a></div>
						</div>
					</div>
				</div>
				<!-- Slide -->
				<div class="owl-item home_slider_item">
					<div class="background_image" style="background-image:url(images/home_slider3.jpg)"></div>
					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
							<div class="home_category"><a href="category.html">technology</a></div>
							<div class="home_title">Building the Future</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur</div>
							<div class="home_button trans_200"><a href="#">read more</a></div>
						</div>
					</div>
				</div>
				<!-- Slide -->
				<div class="owl-item home_slider_item">
					<div class="background_image" style="background-image:url(images/home_slider1.jpg)"></div>
					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
							<div class="home_category"><a href="category.html">technology</a></div>
							<div class="home_title">Building the Future</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur</div>
							<div class="home_button trans_200"><a href="#">read more</a></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left trans_200" aria-hidden="true"></i></div>
			<div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right trans_200" aria-hidden="true"></i></div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Item -->
				<div class="col-md-4 intro_col">
					<div class="intro_item">
						<img src="images/intro_2.jpg" alt="">
						<div class="intro_content trans_200"><a href="category.html">Sản phẩm mới</a></div>	
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-md-4 intro_col">
					<div class="intro_item">
						<img src="images/intro_1.jpg" alt="">
						<div class="intro_content trans_200"><a href="category.html">Giảm giá</a></div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-md-4 intro_col">
					<div class="intro_item">
						<img src="images/intro_2 - Copy.jpg" alt="">
						<div class="intro_content trans_200"><a href="category.html">Địa chỉ</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Content Container -->

	<div class="content_container">
		
		<!-- Featured Title -->
		<div class="featured_title">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="section_title">Trà sữa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div class="section_subtitle">Tư vấn: 0919359360</div>
							</div>
							<div class="section_bar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

			 	<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">
						
						<!-- Featured -->

						<div class="featured">
							<div class="row">
								<div class="col-lg-8">

									<!-- Post -->
									<div class="post_item post_v_large d-flex flex-column align-items-start justify-content-start">
										<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_1.jpg" alt="https://unsplash.com/@cgower"></div>
										<div class="post_content">
											<div class="post_category cat_technology"><a href="category.html">Cà phê</a></div>
											<div class="post_title"><a href="single.html">Tư vấn: 0919359360</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									
									<!-- Post -->
									<div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
										<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_2.jpg" alt="https://unsplash.com/@lloydaleveque"></div>
										<div class="post_content">
											<div class="post_category cat_world"><a href="category.html">world</a></div>
											<div class="post_title"><a href="single.html">The devices of the future</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
											</div>
										</div>
									</div>

									<!-- Post -->
									<div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
										<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_3.jpg" alt="https://unsplash.com/@agkdesign"></div>
										<div class="post_content">
											<div class="post_category cat_world"><a href="category.html">world</a></div>
											<div class="post_title"><a href="single.html">The devices of the future</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Technology -->

						<div class="technology">
							<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="section_title">Nước ép trái cây</div>
									<div class="section_subtitle">Tư vấn: 0919359360</div>
								</div>
								<div class="section_bar"></div>
							</div>
							<div class="technology_content">
								
								<!-- Post -->
								<div class="post_item post_h_large">
									<div class="row">
										<div class="col-lg-5">
											<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_h_1.jpg" alt="https://unsplash.com/@jmckinven"></div>
										</div>
										<div class="col-lg-7">
											<div class="post_content">
												<div class="post_category cat_technology"><a href="category.html">technology</a></div>
												<div class="post_title"><a href="single.html">The new Apple release ceremony</a></div>
												<div class="post_info d-flex flex-row align-items-center justify-content-start">
													<div class="post_author d-flex flex-row align-items-center justify-content-start">
														<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
														<div class="post_author_name"><a href="#">Michael Smith</a></div>
													</div>
													<div class="post_date"><a href="#">29 April 2018</a></div>
													<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
												</div>
												<div class="post_text">
													<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
												</div>
											</div>
										</div>
									</div>	
								</div>

								<!-- Post -->
								<div class="post_item post_h_large">
									<div class="row">
										<div class="col-lg-5">
											<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_h_2.jpg" alt="https://unsplash.com/@neonbrand"></div>
										</div>
										<div class="col-lg-7">
											<div class="post_content">
												<div class="post_category cat_world"><a href="category.html">world</a></div>
												<div class="post_title"><a href="single.html">The new Apple release ceremony</a></div>
												<div class="post_info d-flex flex-row align-items-center justify-content-start">
													<div class="post_author d-flex flex-row align-items-center justify-content-start">
														<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
														<div class="post_author_name"><a href="#">Michael Smith</a></div>
													</div>
													<div class="post_date"><a href="#">29 April 2018</a></div>
													<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
												</div>
												<div class="post_text">
													<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
												</div>
											</div>
										</div>
									</div>	
								</div>

								<!-- Post -->
								<div class="post_item post_h_large">
									<div class="row">
										<div class="col-lg-5">
											<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_h_3.jpg" alt="https://unsplash.com/@cdr6934"></div>
										</div>
										<div class="col-lg-7">
											<div class="post_content">
												<div class="post_category cat_world"><a href="category.html">world</a></div>
												<div class="post_title"><a href="single.html">New HTML5 Codes - Freebies</a></div>
												<div class="post_info d-flex flex-row align-items-center justify-content-start">
													<div class="post_author d-flex flex-row align-items-center justify-content-start">
														<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
														<div class="post_author_name"><a href="#">Michael Smith</a></div>
													</div>
													<div class="post_date"><a href="#">29 April 2018</a></div>
													<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
												</div>
												<div class="post_text">
													<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
												</div>
											</div>
										</div>
									</div>	
								</div>

							</div>
						</div>

						<!-- World -->

						<div class="world">
							<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="section_title">Cà phê &nbsp;&nbsp;&nbsp;&nbsp;</div>
									<div class="section_subtitle">Tư vấn: 0919359360</div>
								</div>
								<div class="section_bar"></div>
							</div>
							<div class="row world_row">
								<div class="col-lg-11">
									<div class="row">
									
										<div class="col-lg-6">											
											<!-- Post -->
											<div class="post_item post_v_med d-flex flex-column align-items-start justify-content-start">
												<div class="post_image"><img src="{{URL::asset('resources/css_js_client')}}/images/post_4.jpg" alt="https://unsplash.com/@oria_hector"></div>
												<div class="post_content">
													<div class="post_category cat_technology"><a href="category.html">technology</a></div>
													<div class="post_title"><a href="single.html">Keep up with the tech</a></div>
													<div class="post_info d-flex flex-row align-items-center justify-content-start">
														<div class="post_author d-flex flex-row align-items-center justify-content-start">
															<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
															<div class="post_author_name"><a href="#">Michael Smith</a></div>
														</div>
														<div class="post_date"><a href="#">29 April 2018</a></div>
														<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
													</div>
													<div class="post_text">
														<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>

						<!-- Load more button -->
						<div class="load_more">
							<div class="load_more_button"><a href="#">Xem thêm</a></div>
						</div>

					</div>
				</div>

				<!-- Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">

						<!-- Newsletter -->
						<div class="sidebar_newsletter">
							<div class="sidebar_title">Đăng ký nhận tin nhắn</div>
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your e-mail here" required="required">
								<button class="newsletter_button">Đăng ký</button>
							</form>
						</div>

						<!-- Extra -->
						<div class="sidebar_extra">
							<a href="#">
								<div class="sidebar_title">TOPPING</div>
								<div class="sidebar_extra_container">
									<div class="background_image" style="background-image:url(images/extra_1.jpg)"></div>
									<div class="sidebar_extra_content">
										<div class="sidebar_extra_title">Giảm</div>
										<div class="sidebar_extra_title">30%</div>
										<div class="sidebar_extra_subtitle">Mua trực tuyến ngay</div>
									</div>
								</div>
							</a>
						</div>

						<!-- Latest Posts -->
						<div class="sidebar_latest">
							<div class="sidebar_title">Tin tức mới</div>
							<div class="latest_posts">
								
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@anniespratt"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_video"><a href="category.html">Xem</a></div>
										<div class="latest_post_title"><a href="single.html">Đường nâu Okinawa </a></div>
										<div class="latest_post_date">March 12, 2018</div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@agkdesign"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_world"><a href="category.html">Xem</a></div>
										<div class="latest_post_title"><a href="single.html">Gió se lạnh hơn...</a></div>
										<div class="latest_post_date">March 12, 2018</div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/latest_3.jpg" alt="https://unsplash.com/@mfgonz"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_technology"><a href="category.html">Xem</a></div>
										<div class="latest_post_title"><a href="single.html">Thơm ngon hương vị "truyền thống"</a></div>
										<div class="latest_post_date">March 12, 2018</div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="images/latest_4.jpg" alt="https://unsplash.com/@juja_han"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_technology"><a href="category.html">Xem</a></div>
										<div class="latest_post_title"><a href="single.html">
Nghỉ lễ 2/9, sao không đến</a></div>
										<div class="latest_post_date">March 12, 2018</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Most Viewed -->

						<div class="most_viewed">
							<div class="sidebar_title">Xem nhiều nhất
							</div>
							<div class="most_viewed_items">
								
								<!-- Most Viewed Item -->
								<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
									<div><div class="most_viewed_num">01.</div></div>
									<div class="most_viewed_content">
										<div class="post_category_small cat_video"><a href="category.html">Xem</a></div>
										<div class="most_viewed_title"><a href="single.html">Đường nâu Okinawa </a></div>
										<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>
									</div>
								</div>

								<!-- Most Viewed Item -->
								<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
									<div><div class="most_viewed_num">02.</div></div>
									<div class="most_viewed_content">
										<div class="post_category_small cat_world"><a href="category.html">Xem</a></div>
										<div class="most_viewed_title"><a href="single.html">Thơm ngon hương vị "truyền thống"</a></div>
										<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>
									</div>
								</div>

								<!-- Most Viewed Item -->
								<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
									<div><div class="most_viewed_num">03.</div></div>
									<div class="most_viewed_content">
										<div class="post_category_small cat_technology"><a href="category.html">Xem</a></div>
										<div class="most_viewed_title"><a href="single.html">Nghỉ lễ 2/9, sao không đến</a></div>
										<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>
									</div>
								</div>

							</div>
						</div>

						<!-- Extra -->
						<div class="sidebar_extra">
							<a href="#">
								<div class="sidebar_title">Giao hàng</div>
								<div class="sidebar_extra_container">
									<div class="background_image" style="background-image:url(images/extra_2.jpg)"></div>
									<div class="sidebar_extra_content">
										<div class="sidebar_extra_title">30%</div>
										<div class="sidebar_extra_title">off</div>
										<div class="sidebar_extra_subtitle">Buy online now</div>
									</div>
								</div>
							</a>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
@endsection