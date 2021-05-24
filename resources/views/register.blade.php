<x-layout>
<section id="register" class="bg-light">
		
				<div class="container">

				
						<div class="row">
                        <div class="col-lg-4">
        <x-vertical-adv/>
                    </div>
                    <div class="col-lg-8">
								<h2 class="mb-5">سجل الان مجانا</h2>
								<form>
									<div class="form-group">
										<label for="name">الاسم كاملا</label>
										<input type="text" class="form-control" id="name" aria-describedby="emailHelp"
											placeholder="علي حسن">
									</div>
						
									<div class="form-group">
										<label for="email">البريد الاكتروني</label>
										<input type="email" class="form-control" id="email" aria-describedby="emailHelp"
											placeholder="ialyzaafan@gmail.com">
									</div>
									<div class="form-group">
                                        <label for="inputState">العمر</label>
                                <select id="inputState" class="form-control">
									<option selected>اختر العمر</option>
                                  <option>من 18 - الى 25</option>
                                  <option>من 26 الى 35</option>
                                  <option>من 36 الى 45</option>
                                  <option>من 46 الى 60</option>
                                  <option>اكثر من 60</option>
                                </select>
                                    </div>
									<div class="form-group">
										<label for="user-type">نوع المستخدم</label>
										<select id="user-type" class="form-control">
											<option selected>اختر نوع المستخدم</option>
											<option>بائع</option>
											<option>مشتري</option>
											<option>بائع و مشتري</option>

										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">كلمه المرور</label>
										<input type="password" class="form-control" id="exampleInputPassword1"
											placeholder="كلمه المرور">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">اعد ادخال كلمه المرور</label>
										<input type="password" class="form-control" id="exampleInputPassword1"
											placeholder="كلمه المرور">
									</div>
									<div class="form-group">
										<label for="phone">رقم الهاتف</label>
										<input id="phone" placeholder="11100000000" type="tel" name="phone"
											class="myselect" />

									</div>
									
									<div class="form-check form-group">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label style="padding-right: 30px;" class="form-check-label"
											for="exampleCheck1">اوافق على <a href="">شروط واحكام</a> كافي جروب, و اوافق على تلقي اشعارات على البريد الاكتروني</label>
									</div>
									<button type="submit" class="btn our-btn">سجل</button>
								</form>
							</div>
                        </div>
			</div>
        
</section>

</x-layout>