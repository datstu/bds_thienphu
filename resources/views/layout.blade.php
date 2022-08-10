<!-- header -->
@include('template.header')
<!-- header END -->
<?php $address = $phone = $email = $linkFB = $pageId = $linkYtb = $linkInsta = '';
if ($info->count() > 0) {
	$address = $info[0]['address'];
	$phone = $info[0]['phone'];
	$email = $info[0]['email'];
	$linkFB = $info[0]['link_fb'];
	$pageId = $info[0]['page_id_fb'];
	$linkYtb = $info[0]['link_youtube'];
	$linkInsta = $info[0]['link_instagram'];
}
$listVendor = Helper::getListVendor();
$listBrand = Helper::getListBrand();
$listFlagship = Helper::getListFlagship();
$listNewsHome = Helper::getNewsHome();
$about = Helper::getAboutUsHome();
$productVip = Helper::getProductVip();


?>
<!-- Content -->

<body id="bg">
	<div class="page-wraper">
		<div id="loading-area"></div>
		<!-- header -->
		@include('template.include.headerMenu')
		<!-- header END -->
		<!-- Content -->
		<div class="page-content">
			<!-- inner page banner -->
			<div class="bg-white">

				<div class="owl-fade-one owl-carousel owl-theme owl-btn-center-lr" id="home-banner">

					@if($banners->count() > 0)
					@foreach($banners as $banner)

					<div class="owl-slide  align-items-center cover ">
						<div class="dez-thum-bx"> <img style="max-height: 90vh;" src="{{asset('public/uploads/banner/'.$banner->image)}}" alt="">
						</div>
					</div>
					@endforeach
					@endif

				</div>


			</div>
			<!-- inner page banner END -->
			<!-- contact area -->
			<div class="content-block">

				<!-- About Us -->
				<div class="section-full">
					<div class="container-fluid">
						<div class="row equal-wraper equal-wraper-mb">

							<div class="col-lg-6 col-md-6 p-a0 equal-col">
								<div class=" dis-tbl-cell">
									<div class=" m-auto">
										<div class="row">
											<img src="{{asset('public/uploads/aboutus/'.$about[0]['image'])}}" alt="" class="img-cover equal-col" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 bg-primary p-lr0 dis-tbl equal-col equal-order-1">
								<div class="p-a30 dis-tbl-cell">
									<div class="max-w700 m-auto p-tb30">
										<div class="row">
											<div class="col-md-12 ">
												<h2 class="font-weight-500 text-primary"><?= $about[0]['title'] ?></h2>

											</div>
											<div class="row">
												<div class="col-md-12 m-b10">
													<?= $about[0]['desc_sort'] ?>

													<a href="{{URL::to('gioi-thieu')}}" class="site-button radius-xl outline black">Xem Thêm <i class="fas fa-long-arrow-alt-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- About Us End -->

				</div>
				<!-- contact area END -->
				<!-- About Quotes -->
				<div class="section-full content-inner-2 bg-primary bg-img-fix">
					<div class="container">
						<div class="section-content">
							<div class="row">
								<div class="col-md-3 col-sm-6 text-center">
									<div class="counter-style-1">
										<div class="">
											<span class="counter">123</span>
											<span class="count-plus">+</span>
										</div>
										<span class="counter-text">Dự án</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 text-center">
									<div class="counter-style-1">
										<div class="">
											<span class="counter">62</span>
											<span class="count-plus">+</span>
										</div>
										<span class="counter-text">Nhân viên</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 text-center">
									<div class="counter-style-1">
										<div class="">
											<span class="counter">35</span>
											<span class="count-plus">+</span>
										</div>
										<span class="counter-text">Đối tác</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 text-center">
									<div class="counter-style-1">
										<div class="">
											<span class="counter">2089</span><span class="count-plus">+</span>
										</div>
										<span class="counter-text">Khách hàng</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- About Quotes End -->


			</div>
		</div>
		<!-- flagship product -->

		<!-- <section class="section hide-for-medium" id="section-chu-luc">
			<div class="section-flagship relative">
				<div class="row">
					<div class="col col-sm-12 col-lg-12">
						<div class="col-inner">
							<div class="container section-title-container hide-for-medium">
								<h2 class="section-title section-title-bold-center"><b></b><span class="section-title-main text-primary"> <strong>SẢN PHẨM CHỦ LỰC</strong>
									</span><b></b></h2>
							</div>
							<div class="container">
								<div class="row row-small row-box-shadow-1 row-box-shadow-4-hover" id="flagship-row">
									@if(count($listFlagship) > 0)
									@foreach($listFlagship as $flagship)

									<div class="col col-md-6 col-sm-12 col-lg-3 margin-mobile">
										<div class="col-inner">
											<div class="icon-box featured-box icon-box-center text-center">
												<div class="icon-box-img" style="width: 600px">
													<div class="icon">
														<div class="icon-inner">
															<a href=""><img src="{{asset('/public/uploads/category/'.$flagship->icon_svg)}}" alt="{{$flagship->meta_keywords}}"></a>
														</div>
													</div>
												</div>
												<div class="icon-box-text last-reset">

													<h3><a href="">{{$flagship->category_name}}</a></h3>
													<p><a href="">{{$flagship->category_desc}}</a></p>
												</div>
											</div>
										</div>
									</div>

									@endforeach
									@endif
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section> -->

		<!-- product feature -->
		<section class="section hide-for-medium section-noi-bat">
			<div class="section-flagship relative">
				<div class="row">
					<div class="col col-sm-12 col-lg-12">
						<div class="col-inner">
							<div class="container section-title-container hide-for-medium">
								<h2 class="section-title section-title-bold-center"><b></b>
									<span class="section-title-main text-primary"> <strong> SẢN PHẨM NỔI BẬT</strong>
									</span><b></b>
								</h2>
							</div>
							<?php
							$id = $slug =  $img = $title= '';
							if(isset($productVip[0])){
								$img = $productVip[0]['post_image'];
								$title = $productVip[0]['post_title'];
								$id =  $productVip[0]['post_id'];
								$slug = $productVip[0]['post_slug'];
							
							 ?>
							 
							<div class="container">
								<div class="row equal-wraper">
									<div class="col-lg-6 col-md-6 p-a0 equal-col">
										<div class=" dis-tbl-cell">
											<div class="row">
												<img src="{{asset('public/uploads/post/'.$img )}}" style="height:510px ;" alt="" class="img-cover equal-col" />
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 p-lr0 dis-tbl equal-col">
										<div class="p-a30 dis-tbl-cell">
											<div class="max-w700 m-auto p-tb30 border-p">
												<div class="row position-relative">
													<div class="col-md-12 ">
														<h2 class="font-weight-500 text-primary text-center">{{$title}}</h2>
													</div>
													<a href="{{URL::to('/'.$id.'/bai-viet-'.$slug)}}" target="_self" class="p-b10 text-center text-blue link-project">
														Xem dự án
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section hide-for-medium" id="section-noi-bat1">
			<div class="section-flagship relative p-tb70">
				<div class="container">
					<div class="row">
					<?php
							$id = $slug =  $img = $title= '';
							if(isset($productVip[1])){
								$img = $productVip[1]['post_image'];
								$title = $productVip[1]['post_title'];
								$id =  $productVip[1]['post_id'];
								$slug = $productVip[1]['post_slug'];
							
							 ?>
							 <div class="col col-sm-12 col-lg-5 col-sm-12">
							<div class="max-w700 m-auto p-b50 col-sm-12 ">
								<div class="row position-relative">
									<div class="col-md-12 ">
										<h2 class="font-weight-500 text-primary text-center">{{$title}}</h2>

									</div>
									<a href="{{URL::to('/'.$id.'/bai-viet-'.$slug)}}" target="_self" class="p-b10 text-center text-blue link-project">
										Xem dự án
									</a>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 p-a0 equal-col col-sm-12">
								<div class=" dis-tbl-cell">

									<div class="row">
										<img src="{{asset('public/uploads/post/'.$img )}}" style="height:510px ;" alt="" class="img-cover equal-col" />
									</div>

								</div>
							</div>
						</div>
								<?php } else{ ?>

						<div class="col col-sm-12 col-lg-5 col-sm-12">
							<div class="max-w700 m-auto p-b50 col-sm-12 ">
								<div class="row position-relative">
									<div class="col-md-12 ">
										<h2 class="font-weight-500 text-primary text-center">SUN GRAND CITY HILLSIDE
											RESIDENCE</h2>

									</div>
									<a href="" target="_self" class="p-b10 text-center text-blue link-project">
										Xem dự án
									</a>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 p-a0 equal-col col-sm-12">
								<div class=" dis-tbl-cell">

									<div class="row">
										<img src="{{asset('public/frontend/images/banner/du-an3.jpg')}}" style="height:510px ;" alt="" class="img-cover equal-col" />
									</div>

								</div>
							</div>
						</div>
						<?php } ?>
						<div class="col col-sm-12 col-lg-1 display-mobile-none"></div>

						<?php
							$id = $slug =  $img = $title= '';
							if(isset($productVip[2])){
								$img = $productVip[2]['post_image'];
								$title = $productVip[2]['post_title'];
								$id =  $productVip[2]['post_id'];
								$slug = $productVip[2]['post_slug'];
							
							 ?>
						<div class="col col-sm-12 col-lg-6">
							<div class="col-lg-12 col-md-12 p-a0 equal-col">
								<div class=" dis-tbl-cell">
									<div class="row">
										<img src="{{asset('public/uploads/post/'.$img )}}" style="height:510px ;" alt="" class="img-cover equal-col" />
									</div>
								</div>
							</div>
							<div class="p-a30 dis-tbl-cell">
								<div class="max-w700 m-auto p-tb30">
									<div class="row position-relative">
										<div class="col-md-12 ">
											<h2 class="font-weight-500 text-primary text-center">{{$title}}</h2>

										</div>
										<a href="{{URL::to('/'.$id.'/bai-viet-'.$slug)}}" target="_self" class="p-b10 text-center text-blue link-project">
											Xem dự án
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php } else{ ?>
							<div class="col col-sm-12 col-lg-6">
							<div class="col-lg-12 col-md-12 p-a0 equal-col">
								<div class=" dis-tbl-cell">
									<div class="row">
										<img src="{{asset('public/frontend/images/banner/du-an2.jpg')}}" style="height:510px ;" alt="" class="img-cover equal-col" />
									</div>
								</div>
							</div>
							<div class="p-a30 dis-tbl-cell">
								<div class="max-w700 m-auto p-tb30">
									<div class="row position-relative">
										<div class="col-md-12 ">
											<h2 class="font-weight-500 text-primary text-center">SUN
												GRAND CITY HILLSIDE RESIDENCE</h2>

										</div>
										<a href="" target="_self" class="p-b10 text-center text-blue link-project">
											Xem dự án
										</a>
									</div>
								</div>
							</div>
						</div>

						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<!-- end product feature -->

		<!-- investor -->
		<section class="section hide-for-medium ">
			<div class="section-flagship relative">
				<div class="row">
					<div class="col col-sm-12 col-lg-12">
						<div class="container section-title-container hide-for-medium">
							<h2 class="section-title section-title-bold-center"><b></b><span class="section-title-main text-primary font-weight-700">ĐỐI TÁC
								</span><b></b></h2>
						</div>

						<div class="container list-vendor">
							<div class="row">
								@if(count($listVendor) > 0)
								@foreach($listVendor as $vendor)
								<div class=" col-sm-6 col-lg-3">
									<div class="text-align"><img src="{{asset('public/uploads/vendor/'.$vendor->image)}}" alt="{{$vendor->name}}"></div>
								</div>

								@endforeach
								@endif
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end investor -->

		<!-- new and event -->
		<section class="section hide-for-medium section-investor">
			<div class="section-investor relative">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<div class="container section-title-container hide-for-medium">
							<h2 class="section-title section-title-bold-center"><b></b><span class="section-title-main text-primary font-weight-700">TIN TỨC & SỰ KIỆN
								</span><b></b></h2>
						</div>

						<div class="container m-t60">
							<div class="row">
								@if(count($listNewsHome) > 0)

								<?php $firstPost = array_shift($listNewsHome);
								$date = date_create($firstPost->create_at); ?>
								<div class="col-sm-12 col-lg-6  height-new-mobile" id="height-new-left">
									<a class="relative" style="display: block;" href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}">
										<div class="box-image"><img style="min-height:648px" src="{{asset('public/uploads/post/'.$firstPost->post_image)}}" alt="{{$firstPost->post_slug}}"></div>
										<div class="box-text">
											<h5 class="text-uppercase font-weight-800">{{$firstPost->post_title}}</h5>
											<div class="post-meta is-small op-8">{{date_format($date,"d-m-Y")}}</div>

											<p class="from_the_blog_excerpt ">{{$firstPost->post_desc}}</p>
											<button href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}" class="button  is-outline is-small mb-0">
												Xem Thêm </button>
										</div>
										<!-- <div class="badge absolute top post-date badge-circle-inside">
											<div class="badge-inner">
												<span class="post-date-day">01</span><br>
												<span class="post-date-month is-xsmall">Th6</span>
											</div>
										</div> -->
									</a>
								</div>

								@endif

								<div class="col-sm-12 col-lg-6  col-right">
									<div class="row" id="height-new-right">
										@if(count($listNewsHome) > 0)
										<?php $firstPost = array_shift($listNewsHome);
										$date = date_create($firstPost->create_at); ?>
										<div class="col-12 m-b20">
											<a style="display: block;" class="relative" href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}">
												<div class="box-image"><img src="{{asset('public/uploads/post/'.$firstPost->post_image)}}" alt="{{$firstPost->post_slug}}"></div>
												<div class="box-text">
													<h5 class="text-uppercase font-weight-800">{{$firstPost->post_title}}</h5>
													<div class="post-meta is-small op-8">{{date_format($date,"d-m-Y")}}</div>


													<button href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}" class="button  is-outline is-small mb-0">
														Xem Thêm </button>
												</div>
											</a>
										</div>

										@endif
										@if(count($listNewsHome) > 0)
										<?php $firstPost = array_shift($listNewsHome); ?>
										<div class="col-sm-12 col-lg-6  magrin-new-mobile ">
											<a style="display: block;" class="relative" href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}">
												<div class="box-image box-image-custom"><img src="{{asset('public/uploads/post/'.$firstPost->post_image)}}" alt="{{$firstPost->post_slug}}"></div>
												<div class="box-text ">
													<h5 class="text-uppercase font-weight-800">{{$firstPost->post_title}}</h5>

													<button href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}" class="button  is-outline is-small mb-0">
														Xem Thêm </button>
												</div>

											</a>
										</div>

										@endif
										@if(count($listNewsHome) > 0)
										<?php $firstPost = array_shift($listNewsHome); ?>
										<div class="col-sm-12 col-lg-6 magrin-new-mobile">
											<a style="display: block;" class="relative" href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}">
												<div class="box-image box-image-custom"><img src="{{asset('public/uploads/post/'.$firstPost->post_image)}}" alt="{{$firstPost->post_slug}}"></div>
												<div class="box-text box-image-custom">
													<h5 class="text-uppercase font-weight-800">{{$firstPost->post_title}}</h5>

													<button href="{{URL::to('/'.$firstPost->post_id.'/bai-viet-'.$firstPost->post_title)}}" class="button  is-outline is-small mb-0">
														Xem Thêm </button>
												</div>
												<!-- <div class="badge absolute top post-date badge-circle-inside">
													<div class="badge-inner">
														<span class="post-date-day">01</span><br>
														<span class="post-date-month is-xsmall">Th6</span>
													</div>
												</div> -->
											</a>
										</div>

										@endif

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<script>
			if (window.innerWidth > 480) {
				var height = document.getElementById('height-new-left').offsetHeight;
				if (height < 100) {
					height = 564;
				}
				console.log('height: ', height);
				document.getElementById("height-new-right").style.height = height + 'px';

				console.log('ffff: ', (height / 2 - 20));
				document.getElementsByClassName("box-image-custom")[0].style.height = (height / 2 - 20) + 'px';
				document.getElementsByClassName("box-image-custom")[1].style.height = (height / 2 - 20) + 'px';

			}
		</script>
		<!-- end new and event -->


		<!-- brand -->
		<!-- <section class="section hide-for-medium ">
			<div class="section-flagship relative">
				<div class="row">
					<div class="col col-sm-12 col-lg-12">
						<div class="container section-title-container hide-for-medium">
							<h2 class="section-title section-title-bold-center"><b></b><span class="section-title-main text-primary font-weight-700"> CÁC THƯƠNG HIỆU HÀNG ĐẦU
								</span><b></b></h2>
						</div>

						<div class="container">
							<div class="row list-vendor">
								@if(count($listBrand) > 0)
								@foreach($listBrand as $brand)
								<div class="col-sm-6 col-lg-3">
									<div class="text-align"><img src="{{asset('public/uploads/brand/'.$brand->brand_image)}}" alt=""></div>
								</div>
								@endforeach
								@endif
							</div>
						</div>

					</div>
				</div>
			</div>
		</section> -->
		<!-- end brand -->
	</div>
	<!-- end flagship product -->


	@include('template.footer')