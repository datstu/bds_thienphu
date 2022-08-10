<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard </title>
	<link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('public/backend/css/custom.css')}}" rel="stylesheet">
	<script src="{{asset('public/backend/js/lumino.glyphs.js')}}"></script>
	<script src="{{asset('public/backend/js/tags/jquery.js')}}"></script>

	<link rel="{{asset('public/backend/css/tags/bootstrap-tagsinput.css')}}" />
	<script src="{{asset('public/backend/js/tags/bootstrap-tagsinput.js')}}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
	<style>
		.dropdown-container {
			position: absolute;
			top: 100%;
			left: 0;
			z-index: 1000;
			display: none;
			float: left;
			min-width: 200px;
			max-width: 330px;
			margin: 2px 0 0;
			list-style: none;
			font-size: 14px;
			background-color: #fff;
			border: 1px solid #ccc;
			border: 1px solid rgba(0, 0, 0, 0.15);
			border-radius: 4px;
			-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
			box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
			background-clip: padding-box
		}

		.dropdown-container>.dropdown-menu {
			position: static;
			z-index: 1000;
			float: none !important;
			padding: 10px 0;
			margin: 0;
			border: 0;
			background: transparent;
			border-radius: 0;
			-webkit-box-shadow: none;
			box-shadow: none;
			max-height: 330px;
			overflow-y: auto
		}

		.dropdown-container>.dropdown-menu+.dropdown-menu {
			padding-top: 0
		}

		.dropdown-menu>li>a {
			overflow: hidden;
			white-space: nowrap;
			word-wrap: normal;
			text-decoration: none;
			text-overflow: ellipsis;
			-o-text-overflow: ellipsis;
			-webkit-transition: none;
			-o-transition: none;
			transition: none
		}

		.dropdown-toggle {
			cursor: pointer
		}

		.dropdown-header {
			white-space: nowrap
		}

		.open>.dropdown-container>.dropdown-menu,
		.open>.dropdown-container {
			display: block
		}

		.dropdown-toolbar {
			padding-top: 6px;
			padding-left: 20px;
			padding-right: 20px;
			padding-bottom: 5px;
			background-color: #fff;
			border-bottom: 1px solid rgba(0, 0, 0, 0.15);
			border-radius: 4px 4px 0 0
		}

		.dropdown-toolbar>.form-group {
			margin: 5px -10px
		}

		.dropdown-toolbar .dropdown-toolbar-actions {
			float: right
		}

		.dropdown-toolbar .dropdown-toolbar-title {
			margin: 0;
			font-size: 14px
		}

		.dropdown-footer {
			padding: 5px 20px;
			border-top: 1px solid #ccc;
			border-top: 1px solid rgba(0, 0, 0, 0.15);
			border-radius: 0 0 4px 4px
		}

		.anchor-block small {
			display: none
		}

		@media (min-width:992px) {
			.anchor-block small {
				display: block;
				font-weight: normal;
				color: #777777
			}

			.dropdown-menu>li>a.anchor-block {
				padding-top: 6px;
				padding-bottom: 6px
			}
		}

		@media (min-width:992px) {
			.dropdown.hoverable:hover>ul {
				display: block
			}
		}

		.dropdown-position-topright {
			top: auto;
			right: 0;
			bottom: 100%;
			left: auto;
			margin-bottom: 2px
		}

		.dropdown-position-topleft {
			top: auto;
			right: auto;
			bottom: 100%;
			left: 0;
			margin-bottom: 2px
		}

		.dropdown-position-bottomright {
			right: 0;
			left: auto
		}

		.dropmenu-item-label {
			white-space: nowrap
		}

		.dropmenu-item-content {
			position: absolute;
			text-align: right;
			max-width: 60px;
			right: 20px;
			color: #777777;
			overflow: hidden;
			white-space: nowrap;
			word-wrap: normal;
			-o-text-overflow: ellipsis;
			text-overflow: ellipsis
		}

		small.dropmenu-item-content {
			line-height: 20px
		}

		.dropdown-menu>li>a.dropmenu-item {
			position: relative;
			padding-right: 66px
		}

		.dropdown-submenu .dropmenu-item-content {
			right: 40px
		}

		.dropdown-menu>li.dropdown-submenu>a.dropmenu-item {
			padding-right: 86px
		}

		.dropdown-inverse .dropdown-menu {
			background-color: rgba(0, 0, 0, 0.8);
			border: 1px solid rgba(0, 0, 0, 0.9)
		}

		.dropdown-inverse .dropdown-menu .divider {
			height: 1px;
			margin: 9px 0;
			overflow: hidden;
			background-color: #2b2b2b
		}

		.dropdown-inverse .dropdown-menu>li>a {
			color: #cccccc
		}

		.dropdown-inverse .dropdown-menu>li>a:hover,
		.dropdown-inverse .dropdown-menu>li>a:focus {
			color: #fff;
			background-color: #262626
		}

		.dropdown-inverse .dropdown-menu>.active>a,
		.dropdown-inverse .dropdown-menu>.active>a:hover,
		.dropdown-inverse .dropdown-menu>.active>a:focus {
			color: #fff;
			background-color: #337ab7
		}

		.dropdown-inverse .dropdown-menu>.disabled>a,
		.dropdown-inverse .dropdown-menu>.disabled>a:hover,
		.dropdown-inverse .dropdown-menu>.disabled>a:focus {
			color: #777777
		}

		.dropdown-inverse .dropdown-header {
			color: #777777
		}

		.table>thead>tr>th.col-actions {
			padding-top: 0;
			padding-bottom: 0
		}

		.table>thead>tr>th.col-actions .dropdown-toggle {
			color: #777777
		}

		.notifications {
			list-style: none;
			padding: 0
		}

		.notification {
			display: block;
			padding: 9.6px 12px;
			border-width: 0 0 1px 0;
			border-style: solid;
			border-color: #eeeeee;
			background-color: #fff;
			color: #333333;
			text-decoration: none
		}

		.notification:last-child {
			border-bottom: 0
		}

		.notification:hover,
		.notification.active:hover {
			background-color: #f9f9f9;
			border-color: #eeeeee
		}

		.notification.active {
			background-color: #f4f4f4
		}

		a.notification:hover {
			text-decoration: none
		}

		.notification-title {
			font-size: 15px;
			margin-bottom: 0
		}

		.notification-desc {
			margin-bottom: 0
		}

		.notification-meta {
			color: #777777
		}

		.dropdown-notifications>.dropdown-container,
		.dropdown-notifications>.dropdown-menu {
			width: 450px;
			max-width: 450px
		}

		.dropdown-notifications .dropdown-menu {
			padding: 0
		}

		.dropdown-notifications .dropdown-toolbar,
		.dropdown-notifications .dropdown-footer {
			padding: 9.6px 12px
		}

		.dropdown-notifications .dropdown-toolbar {
			background: #fff
		}

		.dropdown-notifications .dropdown-footer {
			background: #eeeeee
		}

		.notification-icon {
			margin-right: 6.8775px
		}

		.notification-icon:after {
			position: absolute;
			content: attr(data-count);
			margin-left: -6.8775px;
			margin-top: -6.8775px;
			padding: 0 4px;
			min-width: 13.755px;
			height: 13.755px;
			line-height: 13.755px;
			background: red;
			border-radius: 10px;
			color: #fff;
			text-align: center;
			vertical-align: middle;
			font-size: 11.004px;
			font-weight: 600;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif
		}

		.notification .media-body {
			padding-top: 5.6px
		}

		.btn-lg .notification-icon:after {
			margin-left: -8.253px;
			margin-top: -8.253px;
			min-width: 16.506px;
			height: 16.506px;
			line-height: 16.506px;
			font-size: 13.755px
		}

		.btn-xs .notification-icon:after {
			content: '';
			margin-left: -4.1265px;
			margin-top: -2.06325px;
			min-width: 6.25227273px;
			height: 6.25227273px;
			line-height: 6.25227273px;
			padding: 0
		}

		.btn-xs .notification-icon {
			margin-right: 3.43875px
		}
	</style>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use>
							</svg>Hi, <?php $name = Session::get('admin_name');
										if ($name) {
											echo $name;
										} ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{URL::to('/admin-logout')}}"><svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg> Logout</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown dropdown-notifications">
						<a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
							<i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
						</a>

						<div class="dropdown-container">
							<div class="dropdown-toolbar">
								{{-- <div class="dropdown-toolbar-actions">
									<a href="#">Xóa thông tất cả</a>
								</div> --}}
								<h3 class="dropdown-toolbar-title">Thông báo (<span class="notif-count">0</span>)</h3>
							</div>
							<ul class="dropdown-menu">
							</ul>
							{{-- <div class="dropdown-footer text-center">
								<a href="#">View All</a>
							</div> --}}
						</div>
					</li>

				</ul>
			</div>
			<div class="collapse navbar-collapse">

			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<?php
	$route =  Route::current()->uri;
	?>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>

			<li class="<?php echo ($route == 'admin') ? 'active' : ''; ?>"><a href="{{URL::to('/admin')}}"><svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg> Trang chủ</a></li>
			<li class="<?php echo ($route == 'quan-ly-danh-muc') ? 'active' : ''; ?>"><a href="{{URL::to('/quan-ly-danh-muc')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Danh mục</a>
			</li>
			<li class="<?php echo ($route == 'quan-ly-bai-viet') ? 'active' : ''; ?>"><a href="{{URL::to('/quan-ly-bai-viet')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Bài viết</a>
			</li>
			<li class="<?php echo ($route == 'page-gioi-thieu') ? 'active' : ''; ?>"><a href="{{URL::to('/page-gioi-thieu')}}"><svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>Page Giới thiệu</a></li>
			<?php
			$uriSetting = '';
			if ($route == 'home-quan-li-thong-tin-chung' || $route == 'home-quan-li-thuong-hieu' || $route == 'home-quan-li-nha-dau-tu' || $route == 'cai-dat' || $route == 'home-quan-li-banner' || $route == 'ome-quan-li-thong-tin-chung') {
				$uriSetting = 'active';
			}
			?>
			<li class="<?= $uriSetting ?>"><a href="{{URL::to('/cai-dat')}}"><svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>Thiết lập</a></li>
			<!-- <li class=""><a href="{{URL::to('/quan-ly-bai-viet')}}"><svg class="glyph stroked calendar">
						<use xlink:href="#stroked-calendar"></use>
					</svg> Dự án</a>
			</li> -->


			<li role="presentation" class="divider"></li>
		</ul>

	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">@yield('main')</div>
	<!--/.main-->


	<script src="{{asset('public/backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/backend/js/chart.min.js')}}"></script>
	<script src="{{asset('public/backend/js/chart-data.js')}}"></script>
	<script src="{{asset('public/backend/js/easypiechart.js')}}"></script>
	<script src="{{asset('public/backend/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('public/backend/js/bootstrap-datepicker.js')}}"></script>



	<script>
		! function($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function() {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function() {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function() {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})

		function changeImg(input) {

			var allowedExtension = ['jpeg', 'jpg', 'png', 'gif'];
			var fileExtension = document.getElementById('img').value.split('.').pop().toLowerCase();
			var isValidFile = false;

			for (var index in allowedExtension) {

				if (fileExtension === allowedExtension[index]) {
					isValidFile = true;
					break;
				}
			}
			if (!isValidFile) {
				alert('Chỉ được phép up file có định dạng : *.' + allowedExtension.join(', *.'));
				return isValidFile;
			}

			//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				//Sự kiện file đã được load vào website
				reader.onload = function(e) {
					//Thay đổi đường dẫn ảnh
					$('#avatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		function changeImgSvg(input) {

			var allowedExtension = ['svg'];
			var fileExtension = document.getElementById('img').value.split('.').pop().toLowerCase();
			var isValidFile = false;

			for (var index in allowedExtension) {

				if (fileExtension === allowedExtension[index]) {
					isValidFile = true;
					break;
				}
			}
			if (!isValidFile) {
				alert('Chỉ được phép up file có định dạng : *.' + allowedExtension.join(', *.'));
				return isValidFile;
			}

			//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				//Sự kiện file đã được load vào website
				reader.onload = function(e) {
					//Thay đổi đường dẫn ảnh
					$('#avatar').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$(document).ready(function() {
			$('#avatar').click(function() {
				$('#img').click();
			});
		});
	</script>

	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
	<script src="//js.pusher.com/3.1/pusher.min.js"></script>
	{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

	<script type="text/javascript">
		var notificationsWrapper = $('.dropdown-notifications');
		var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
		var notificationsCountElem = notificationsToggle.find('i[data-count]');
		var notificationsCount = parseInt(notificationsCountElem.data('count'));
		var notifications = notificationsWrapper.find('ul.dropdown-menu');

		// if (notificationsCount <= 0) {
		//     notificationsWrapper.hide();
		// }

		//Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
		var pusher = new Pusher('b59b303106eccae4e8fe', {
			encrypted: true,
			cluster: "ap1"
		});

		// Subscribe to the channel we specified in our Laravel Event
		var channel = pusher.subscribe('a');

		// Bind a function to a Event (the full Laravel class)
		channel.bind('my-event', function(data) {
			var existingNotifications = notifications.html();
			audio = document.getElementById('autoplay');

			audio.play();
			var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
			var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/` + avatar + `.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">` + data.message + `</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">Khoảng 1 phút trước</small>
                  </div>
                </div>
              </div>
          </li>
        `;
			notifications.html(newNotificationHtml + existingNotifications);

			notificationsCount += 1;
			notificationsCountElem.attr('data-count', notificationsCount);
			notificationsWrapper.find('.notif-count').text(notificationsCount);
			notificationsWrapper.show();
		});
	</script>

	<script language="javascript">
		function ChangeToSlug() {
			var title, slug;

			//Lấy text từ thẻ input title 
			title = document.getElementById("title").value;

			//Đổi chữ hoa thành chữ thường
			slug = title.toLowerCase();

			//Đổi ký tự có dấu thành không dấu
			slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
			slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
			slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
			slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
			slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
			slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
			slug = slug.replace(/đ/gi, 'd');
			//Xóa các ký tự đặt biệt
			slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
			//Đổi khoảng trắng thành ký tự gạch ngang
			slug = slug.replace(/ /gi, "-");
			//Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
			//Phòng trường hợp người nhập vào quá nhiều ký tự trắng
			slug = slug.replace(/\-\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-/gi, '-');
			slug = slug.replace(/\-\-/gi, '-');
			//Xóa các ký tự gạch ngang ở đầu và cuối
			slug = '@' + slug + '@';
			slug = slug.replace(/\@\-|\-\@|\@/gi, '');
			//In slug ra textbox có id “slug”
			document.getElementById('slug').value = slug;
		}
	</script>
</body>

</html>