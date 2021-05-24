<x-layout>




		<!-- ============================ Hero Banner  Start================================== -->
		<div class="hero-slide-1">
			<div class="image-cover hero-banner single-items"
				style="background:url('assets/img/NoPath.png') no-repeat;">
				<div class="container">

					<div class="row">
						<div class="col-lg-6 col-md-6">
							<form action="">

								<div class="hero-search-wrap">
									<div class="hero-search">
										<!-- <h1>البحث</h1> -->
									</div>
									<div class="hero-search-content side-form">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<div class="input-with-icon">
														<input required type="text" class="form-control"
															placeholder="بحث عن الموقع">
														<img src="assets/img/pin.svg" width="18" alt="" />
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="form-group">
													<label>اقل سعر</label>
													<select required id="minprice" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">LE500</option>
														<option value="2">LE1000</option>
														<option value="3">LE1500</option>
														<option value="4">2000</option>
														<option value="5">3000</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="form-group">
													<label>اعلى سعر</label>
													<select required id="maxprice" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1"> ج.م 1000</option>
														<option value="2"> ج.م 1500</option>
														<option value="3"> ج.م 2000</option>
														<option value="4"> ج.م 3000</option>
														<option value="5"> ج.م 5000</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class="form-group">
													<label>نوع العرض</label>
													<select required id="status" class="form-control">
														<option value="">اختر</option>
														<option value="1">عقارات للبيع</option>
														<option value="2">عقارات للايجار</option>
														<option value="3">عقارات تصلح تمويل عقاري</option>

													</select>
												</div>
											</div>
										</div>



									</div>
									<div class="hero-search-action mb-2">
										<button type="submit" class="btn search-btn">بحث</button>
									</div>
									<div class="hero-search-action searchDetails">
										<button type="submit" class="btn search-btn2">بحث مفصل</button>
									</div>
								</div>
							</form>

						</div>

						<div class="col-lg-6 col-md-12">
							<div class="hero__p">
								<h1>كافي يكفيك ..!</h1>
								<p>
									اول موقع متميز في مصر من البائع للمشتري مباشر بدون
									عموالات وخدمات متكاملة مع افضل الشركات

								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!--slide 2-->

			<!--slide 3-->


		</div>
		<!-- ============================ Hero Banner End ================================== -->

		<!-- ============================ Latest Property للبيع Start ================================== -->
		<section class="" dir="ltr">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div class="sec-heading center mb-4">
							<h2>اعلانات مميزه</h2>
							<p>
								لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="property-slide">
                        <x-card  />

						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================ Latest Property للبيع End ================================== -->


		<!-- ============================ All Property ================================== -->
		<section class="bg-light">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div class="sec-heading center">
							<h2>عقارات للبيع</h2>
							<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع

							</p>
						</div>
					</div>
				</div>


				<div class="row list-layout">
				<x-sale-card />
				

				</div>

				<!-- Pagination -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<a href="" class="btn btn-theme-light rounded">اعرض المزيد</a>
						<!-- <a href="listings-list-with-sidebar.html" class="btn btn-theme-light rounded">Browse More Properties</a> -->
					</div>
				</div>

			</div>
		</section>
		<!-- ============================ All Featured Property ================================== -->

		<!-- ============================ Latest Property للبيع Start ================================== -->
		<section class="" dir="ltr">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div class="sec-heading center mb-4">
							<h2>عقارات للايجار</h2>
							<p>
								لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="property-slide">
	<x-card />
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================ Latest Property للبيع End ================================== -->

		<!-- ============================ Price Table Start ================================== -->









		<!-- ============================ Step How To Use Start ================================== -->
		<section>

			<div class="container">

				<!-- row Start -->
				<div class="row align-items-center">

					<div class="col-lg-7 col-md-9">
						<iframe width="100%" height="400" src="https://www.youtube.com/embed/CyYe0_zOFjs"
							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>

					<div class="col-lg-5 col-md-3">
						<div class="story-wrap explore-content">

							<h2 class="text-right">الكافي جروب</h2>
							<p class="text-right">
								تضع الحلول السهله بين يديك في اختيار عقارك
								مع كافي جروب اختار عقارك
								بنفسك بدون وسطاء

							</p>

						</div>
					</div>

				</div>
				<!-- /row -->

			</div>

		</section>

		<!-- sections-->
		<section class="bg-light">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div class="sec-heading center">
							<h2>الاقسام المتاحه</h2>
							<p>
								لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="property-slide">
				

							<x-section-card />




						</div>
					</div>


				</div>



			</div>
		</section>
		<!-- ============================ Latest Property للبيع Start ================================== -->
		<section class="" dir="ltr">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10 text-center">
						<div class="sec-heading center mb-4">
							<h2>الاكثر بحثا</h2>
							<p>
								لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="property-slide">
				

							<x-card />

						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================ Latest Property للبيع End ================================== -->

		<section>

			<div class="container">

				<!-- row Start -->
				<div class="row align-items-center">

					<div class="col-lg-12 col-md-12">
						<div class="adv-slider">
					

						</div>


					</div>




				</div>
				<!-- /row -->

			</div>


		</section>

		<!-- ============================ Call To Action ================================== -->
								<x-call-to-action />
		<!-- ============================ Call To Action End ================================== -->

						</x-layout>