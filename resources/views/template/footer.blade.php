<!-- Footer -->
<footer class="site-footer text-white">
	<div class="footer-top overlay-primary-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12 footer-col-4 ">
					<div class="widget">
						<h5 class="m-b30 text-white">Theo dõi thông báo mới nhất </h5>
						<p class="text-capitalize m-b20">Để đăng ký nhận bảng tin/ sản phẩm mới nhất từ chúng tôi
							vui lòng để lại địa chỉ email.
						</p>
						<div class="subscribe-form m-b20">
							<form role="search" class="dzSubscribe" method="post" action="script/mailchamp.php">
								<div class="dzSubscribeMsg"></div>
								<div class="input-group">
									<input name="dzEmail" required="required" class="form-control" placeholder="Nhập Email của bạn.." type="email">
									<span class="input-group-btn">
										<button name="submit" value="Submit" type="submit" class="site-button radius-xl text-primary">Đăng ký</button>
									</span>
								</div>
							</form>
						</div>
						<ul class="list-inline m-a0 d-flex">
							<li><a href="https://www.facebook.com/diaocthienphutayninh" target="blank" class="site-button facebook circle "><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="mailto:info.thienphutayninh@gmail.com" class="site-button google-plus circle "><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" class="site-button linkedin circle "><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#" class="site-button instagram circle "><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" class="site-button twitter circle "><i class="fab fa-twitter"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-1 col-md-4"></div>
				<div class="col-lg-3 col-md-4 footer-col-4">
					<div class="widget widget_services border-0">
						<h5 class="m-b30 text-white">Menu</h5>
						<ul>
							<li><a href="">Dự án</a></li>
							<li><a href="">Tin tức</a></li>

							<li><a href="{{URL::to('/lien-he')}}">Liên hệ</a></li>

						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 footer-col-4">
					<div class="widget widget_getintuch">
						<h5 class="m-b30 text-white ">Về chúng tôi</h5>
						<ul class="hover-a">
							<li><i class="fas fa-map-marker-alt"></i><strong>Địa chỉ</strong><?= $address ?></li>
							<a href="tel:<?= $phone ?>">
								<li><i class="fas fa-phone-alt"></i><strong>Điện thoại</strong><?= $phone ?></li>
							</a>
							<a href="mailto:<?= $email ?>">
								<li><i class="fas fa-envelope"></i><strong>Email</strong><?= $email ?></li>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer bottom part -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center"> <span>Copyright © 2022
						Công ty Cổ Phần Đầu Tư Địa Ốc Thiên Phú Tây Ninh</span> </div>

			</div>
		</div>
	</div>
</footer>
<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fas fa-chevron-up"></button>

<!-- JavaScript  files ========================================= -->
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
<!-- jquery.min js -->
<script src="{{asset('public/frontend/plugins/wow/wow.js')}}"></script>
<!-- Wow Animation js -->
<script src="{{asset('public/frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bootstrap.min js -->
<script src="{{asset('public/frontend/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<!-- Form js -->
<script src="{{asset('public/frontend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<!-- Form js -->
<script src="{{asset('public/frontend/plugins/magnific-popup/magnific-popup.js')}}"></script>
<!-- magnific-popup js -->
<script src="{{asset('public/frontend/plugins/counter/waypoints-min.js')}}"></script>
<!-- waypoints js -->
<script src="{{asset('public/frontend/plugins/counter/counterup.min.js')}}"></script>
<!-- counterup js -->
<script src="{{asset('public/frontend/plugins/imagesloaded/imagesloaded.js')}}"></script>
<!-- masonry  -->
<script src="{{asset('public/frontend/plugins/masonry/masonry-3.1.4.js')}}"></script>
<!-- masonry  -->
<script src="{{asset('public/frontend/plugins/masonry/masonry.filter.js')}}"></script>
<!-- masonry  -->
<script src="{{asset('public/frontend/plugins/owl-carousel/owl.carousel.js')}}"></script>
<!-- OWL  Slider  -->
<script src="{{asset('public/frontend/plugins/paroller/skrollr.min.js')}}"></script>
<!-- Paroller Js -->
<script src="{{asset('public/frontend/js/custom.js')}}"></script>
<!-- custom fuctions  -->
<script src="{{asset('public/frontend/js/dz.carousel.js')}}"></script>
<!-- sortcode fuctions  -->

<script src="{{asset('public/frontend/plugins/tilt/tilt.jquery.js')}}"></script>
<script src="{{asset('public/frontend/plugins/particles/particles.js')}}"></script>
<!-- revolution JS FILES -->
<script src="{{asset('public/frontend/js/dz.ajax.js')}}"></script><!-- AJAX -->

<script>
	$(document).ready(function() {

		$("#home-banner").owlCarousel({
			dotsEach: true,
			nav: true,
			dots: true,
			navigation: true,
			navigationText: ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>', '<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],
		});


	});
</script>
<!-- hotline telephone -->
<div class="hotline-phone-ring-wrap">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
			<a href="tel:<?= $phone ?>" class="pps-btn-img">
				<img src="{{asset('public/frontend/images/icon-call-nh.png')}}" alt="Gọi điện thoại" width="50">
			</a>
		</div>
	</div>
	<div class="hotline-bar">
		<a href="tel:<?= $phone ?>">
			<span class="text-hotline"><?= $phone ?></span>
		</a>
	</div>
</div>
<!-- fb messenger -->
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
	var chatbox = document.getElementById('fb-customer-chat');
	chatbox.setAttribute("page_id", "<?= $pageId ?>");
	chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
	window.fbAsyncInit = function() {
		FB.init({
			xfbml: true,
			version: 'v14.0'
		});
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script>
	var selector = jQuery("#vendor-owl");

	selector.owlCarousel({

		autoplay: true,
		autoplayTimeout: 5000,

		loop: true,
		margin: 30,
		nav: true,
		dots: false,
		autoplaySpeed: 2000,
		navSpeed: 2000,
		paginationSpeed: 2000,
		slideSpeed: 2000,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			1024: {
				items: 3
			},
			1200: {
				items: 4
			}
		}
	});
</script>
</body>

</html>