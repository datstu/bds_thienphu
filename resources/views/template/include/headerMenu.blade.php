


<header class="site-header header mo-left">
			<div class="top-bar">
				<div class="container">
					<div class="row justify-content-between align-items-center">

						<div class="dez-topbar-left logo col-auto">
							<div class="logo-header mostion">
								<a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/images/client-logo/logo/1.jpg')}}" alt=""></a>
							</div>
						</div>
						<div class="dez-topbar-right cusnav navbar-expand-lg col-auto">
							<button data-bs-target=".header-nav" data-bs-toggle="collapse" type="button"
								class="navbar-toggler navicon collapsed" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>

						<div class="dez-topbar-right topbar-social col-auto">
							<ul>
								<li><a href="<?= $linkFB ?>" target="blank" class="site-button-link facebook hover"><i
											class="fab fa-facebook-f"></i></a></li>
								<li><a href="mailto:<?= $email ?>" class="site-button-link google-plus hover"><i
											class="fab fa-google-plus-g"></i></a></li>
								<li><a href="" class="site-button-link twitter hover"><i
											class="fab fa-twitter"></i></a></li>
								<li><a href="<?= $linkInsta ?>" class="site-button-link instagram hover"><i
											class="fab fa-instagram"></i></a></li>
								<li><a href="" class="site-button-link linkedin hover"><i
											class="fab fa-linkedin-in"></i></a></li>
								<li><a href="<?= $linkYtb ?>" target="blank" class="site-button-link youtube hover"><i
											class="fab fa-youtube"></i></a></li>
							</ul>
						</div>


					</div>
				</div>
			</div>
			<!-- main header -->
			<div class="sticky-header main-bar-wraper">
				<div class="main-bar clearfix  navbar-expand-lg">
					<div class="container clearfix">
						

						<!-- main nav -->
						<div class="header-nav navbar-collapse collapse justify-content-center">
							<div class="logo-header d-md-block d-lg-none">
								<a href="#"><img src="{{asset('public/images/client-logo/logo/1.jpg')}}" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li class="active"> <a href="{{URL::to('/')}}">Trang chủ</a>

								</li>
								<li class=""> <a href="{{URL::to('/gioi-thieu')}}">Giới thiệu</a>

								</li>
								<li> <a href="javascript:;">Dự án<i class="fas fa-chevron-down"></i></a>
									<ul class="sub-menu">
									<?php
										$categoryMenu = Helper::getCatalogMenu(1);?>

										@if(count($categoryMenu) > 0)
										@foreach($categoryMenu as $category)
									<li> <a href="{{URL::to('/'.$category->category_id.'/danh-muc-'.$category->slug)}}">{{$category->category_name}} </a>
										
										@endforeach
										@endif
										 
									
									</ul>
								</li>
								<li> <a href="javascript:;">Tin tức<i class="fas fa-chevron-down"></i></a>
									<ul class="sub-menu">
									<?php
										$categoryMenu = Helper::getCatalogMenu(2);?>

										@if(count($categoryMenu) > 0)
										@foreach($categoryMenu as $category)
									<li> <a href="{{URL::to('/'.$category->category_id.'/danh-muc-'.$category->slug)}}" >{{$category->category_name}} </a>
										
										@endforeach
										@endif
										 
									</ul>
								</li>
								<!-- <li class=""> <a href="javascript:;">E-learning</a></li> -->
								<li class=""> <a href="{{URL::to('/tuyen-dung')}}">Tuyển dụng</a></li>
								<li class=""> <a href="{{URL::to('/lien-he')}}">Liên hệ</a></li>



							</ul>
							<div class="extra-nav">
								<div class="extra-cell">
									<button id="quik-search-btn" type="button" class="site-button-link"><i
											class="fas fa-search"></i></button>


								</div>
							</div>
							<!-- Quik search -->
							<div class="dez-quik-search bg-primary ">
								<form action="#">
									<input name="search" value="" type="text" class="form-control"
										placeholder="Bạn đang tìm kiếm gì nào?...">
									<span id="quik-search-remove"><i class="flaticon-cancel"></i></span>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- main header END -->
		</header>