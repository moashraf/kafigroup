<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>al-Kafigroup</title>

	<!-- Custom CSS -->
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/plugins/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/plugins/popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/plugins/owl.theme.css')}}">

	<!-- Custom Color Option -->
	<link href="{{asset('assets/css/colors.css')}}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/light-box.css')}}">

</head>

<body class="blue-skin">

	<div id="loader-wrapper">
		<div id="loader">
			<div class="lds-circle"><div></div></div>
		</div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	  </div>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<!-- <div id="preloader"><div class="preloader"><span></span><span></span></div></div> -->

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		<div class="header header-light head-shadow">
			<div class="container-fluid">
				<nav id="navigation" class="navigation navigation-landscape container">
					<div class="nav-header">
						<a class="nav-brand" href="{{ asset('/') }}">
							<img src="{{ asset('assets/img/logo.jpg') }}" width="70" class="logo" alt="" />
						</a>
						<div class="nav-toggle"></div>
					</div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
						<ul class="nav-menu">

							<li class="active"><a href="{{ asset('/') }}">الرئيسيه</a>

							</li>



							<li><a href="JavaScript:Void(0);"><span class="submenu-indicator"></span>عقارات للبيع</a>
								<ul class="nav-dropdown nav-submenu">
									<li><a href="{{ asset('search/search-cash') }}"> عقارات للبيع كاش </a></li>
									<li><a href="{{ asset('search/search-installment') }}"> عقارات للبيع تقسيط </a></li>
									<li><a href="{{ asset('search/bank-finance') }}"> عقارات تصلح تمويل عقاري </a></li>
								</ul>
							</li>
							<li><a href=""><span class="submenu-indicator"></span>عقارات للايجار</a>
								<ul class="nav-dropdown nav-submenu">
									<li><a href="{{ asset('search/rent-new') }}">عقارات للايجار قانون جديد</a></li>
									<li><a href="{{ asset('search/rent-finish') }}">عقارات للايجار مفروش</a></li>
								
								</ul>
							</li>

							<li><a href=""><span class="submenu-indicator"></span>الخدمات</a>
								<ul class="nav-dropdown nav-submenu">
									<li><a href="companies/furntre-transport">شركات نقل الاثاث</a></li>
									<li><a href="companies/finsihing-types">شركات تشطيب و اعمال الديكور</a></li>
									<li><a href="companies/furniture-sale">شركات بيع الاثاث المكتبي والمنزلي</a></li>
									<li><a href="companies/sale-electrice">شركات بيع الاجهزه الكهربائيه</a></li>
								</ul>
							</li>

						

					
						</ul>

						<ul class="nav-menu nav-menu-social align-to-right">

							<li>
								<a href="./newlisting" class="text-success"><img src="assets/img/submit.svg"
										width="20" alt="" class="mr-2" /> اضف اعلانك مجانا </a>
								<!-- <a href="submit-property.html" class="text-success"><img src="assets/img/submit.svg" width="20" alt="" class="mr-2" />Add Property</a> -->
							</li>

							<li><a href="./register.html" class="text-success">سجل الان مجانا</a></li>

							<li class="add-listing"><a href=""><span class=""></span>الدخول</a>
								<ul class="nav-dropdown nav-submenu">

									<li><a href="./profile.html">الملف الشخصي</a></li>
									<li><a href="./favourites.html">سجل المفضلات</a></li>
									<li><a href="./login.html">تسجيل الدخول</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navigation -->
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->

    {{ $slot }}

		<!-- ============================ Footer Start ================================== -->
		<footer class="dark-footer skin-dark-footer">
		<div>
			<div class="container">
				<div class="row">

					<div class="col-lg-5">
						<div class="footer-widget">
							<div class="footer-newsletter">
								<h4>من نحن</h4>
								<p>اول موقع متميز في مصر في التسويق عبر الانترنت يتيح التواصل مع ملاك الوحدات بدون وسطاء وبدون عمولات وتوفير افضل شركات التشطيبات واعمال الديكور وشركات نقل الاثاث وشركات بيع الاثاث المنزلي والمكتبي وشركات بيع الاجهزة الكهربائية</p>

							</div>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="footer-widget">
							<h4>تابعنا</h4>

							<ul class="footer-bottom-social">
								<li><a href="#"><i style="background-color: #3b5998;" class="shadow ti-facebook"></i></a></li>
								<li><a href="#"><i style="background-color: #55acee;" class="shadow ti-twitter"></i></a></li>
								<li><a href="#"><i style="background-color: #833AB4;" class="shadow ti-instagram"></i></a></li>
								<li><a href="#"><i style="background-color: #0082ca;" class="shadow ti-linkedin"></i></a></li>
								<li><a href="#"><i style="background-color: #dd4b39;" class="shadow ti-youtube"></i></a></li>
							</ul>
						</div>
					</div>



					<div class="col-lg-4 col-md-4">
						<div class="footer-widget text-center">
							<img src="assets/img/footer-logo.png" class="img-footer" alt="" />
							<ul class="footer-menu">
								<li><a href="./index.html">الرئيسيه</a></li>
								<li><a href="./about-us.html">من نحن</a></li>
								<li><a href="./terms-conditions.html">الشروط والاحكام</a></li>
								<li><a href="./contact-us.html">تواصل معنا</a></li>

							</ul>

						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="">

					<div>
						<p class="mb-0">© 2021. Cord Digital <a href=""></a> All Rights Reserved</p>
					</div>



				</div>
			</div>
		</div>
	</footer>
		<!-- ============================ Footer End ================================== -->





		<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
		<!-- The Modal -->
		<div id="overlay">
				<div id="popup">
				   <div id="close">X</div>
				   <h2>اترك بلاغك بخصوص الاعلان</h2>
					<form action="">
						<textarea name="report" id="report" class="myselect" rows="4"></textarea>
						<input type="submit" name="report" id="report" value="ابلغ" class="btn our-btn">
					</form>
					</div>
			 </div>

		</div>
					<!-- The Modal 2 -->

		<div id="overlay-2">
			<div id="popup-2">
			   <div id="close-2">X</div>
			   <ul class="footer-bottom-social">
				<li><a href="#"><i style="background-color: #3b5998;" class="shadow ti-facebook"></i></a></li>
				<li><a href="#"><i style="background-color: #55acee;" class="shadow ti-twitter"></i></a></li>
				<li><a href="#"><i style="background-color: #25D366;" class="shadow fab fa-whatsapp"></i></a></li>
			</ul>
			<div class="mt-3">
				<textarea id="url" class="myselect"></textarea>
				<a class="btn btn-danger clipboard" href="">نسخ الرابط</a>
			</div>
			</div>
		 </div>

	</div>

	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.popup.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/rangeslider.js')}}"></script>
	<script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.js')}}"></script>
	<script src="{{asset('assets/js/slider-bg.js')}}"></script>
	<script src="{{asset('assets/js/lightbox.js')}}"></script>
	<script src="{{asset('assets/js/imagesloaded.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.js')}}"></script>

	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script src="{{asset('assets/js/add-listing.js')}}"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<!-- /GetButton.io widget -->
</body>

</html>
