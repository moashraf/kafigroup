<x-layout>

<section id="sale-props">
<div class="container">
<h1>قسم البيع</h1>
  <br>
  <div class="row">
  <div class="col-lg-2"></div>
                    <div class="col-lg-3">
                        <a href="./favourites.html" class="btn btn-light ml-2"> قائمه المفضلات <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg></a>
                    </div>

                    <div class="col-lg-6">
                        <select onchange="sortList();" class="myselect" name=""
                            id="sorting">
                            <option value="">الترتيب</option>
                            <option value="maxPrice">التاريخ: الاحدث اولا</option>
                            <option value="minPrice">التاريخ: الاقدم اولا</option>
                            <option value="maxPrice">السعر: الاقل اولا</option>
                            <option value="minPrice">السعر: الاعلى اولا</option>
                            <option value="minArea">المساحه: الاقل اولا</option>
                            <option value="maxArea">المساحه: الاعلى اولا</option>
                        </select>
                    </div>




    <div class="row">
        <div class="col-lg-3 filter-props">
            <x-purchase-now/>
            <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <h5> الموقع</h5>
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="">
                                                    <fieldset>
                                                        <select class="myselect mt-3" name="location1" id="location1">
                                                            <option value="">المحافظه</option>
                                                            <option value="">القاهره</option>
                                                            <option value="">السويس</option>
                                                            <option value="">الجيزه</option>

                                                        </select>
                                                        <select class="myselect mt-3" name="location2" id="location2">
                                                            <option value="">الحي</option>
                                                            <option value="">مصر الجديده</option>
                                                            <option value="">مدينه نصر</option>
                                                            <option value="">الجيزه</option>
                                                            <option value="">اكتوبر</option>
                                                            <option value="">العبور</option>
                                                        </select>
                                                        <input list="areas" name="area" id="area" class="myselect mt-3"
                                                            placeholder="المنطقه">
                                                        <datalist id="areas">
                                                            <option value="مصر الجديده">
                                                            <option value="زهراء المعادي">
                                                            <option value="مدينه نصر">
                                                            <option value="العجوزه">
                                                            <option value="الدقي">

                                                        </datalist>
                                                    </fieldset>


                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <fieldset class="mt-5">
                                        <h5>تصنيفات العروض</h5>
                                        <div class="form-group">
                                            <label for="li-cat">تصنيف العرض</label>
                                            <select class="myselect" name="li-cat" id="li-cat">
                                                <option value="">اختر</option>
                                                <option value="">سكني</option>
                                                <option value="edary">اداري</option>
                                                <option value="togary">تجاري</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Property-type">نوع العقار</label>
                                            <select name="Property-type" id="Property-type" class="myselect">
                                                <option value="">اختر نوع العقار</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">نوع العرض</label>
                                            <select class="myselect" name="sale-type" id="sale-type">
                                                <option value="">اختر</option>
                                                <option value="">كاش</option>
                                                <option value="">تقسيط</option>
                                                <option value="">الكل</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="li-compound">الكومبوند (اختياري)</label>
                                            <input type="text" list="li-compound" class="myselect" />
                                            <datalist id="li-compound">
                                                <option>جوادن سيتس</option>
                                                <option>القرنفل</option>
                                                <option>الانكا بلازا</option>
                                                <option>الانكا بلازا</option>
                                                <option>الانكا بلازا</option>
                                            </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label for="li-finish">التشطيب</label>
                                            <select name="li-finish" id="li-finish" class="myselect">
                                                <option value="">اختر</option>
                                                <option value="">اكسترا سوبرلوكس</option>
                                                <option value="">سوبرلوكس</option>
                                                <option value="">لوكس</option>
                                                <option value="">تشطيب متوسط</option>
                                                <option value="">نص تشطيب</option>
                                                <option value="">بدون تشطيب</option>
                                                <option value="">الكل</option>

                                            </select>

                                        </div>

                                     
                                    </fieldset>
                                    <div class="accordion-item  mt-3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <h5>بحث مفصل</h5>
                                        </button>
                                        <div id="collapseTwo" class="accordion-collapse collapse">
                                            <div class="">
                                                <fieldset>
                                                    <div class="row mt-3">
                                                        <label for="area">المساحه</label>
                                                        <div class="col">
                                                            <input class="myselect" type="number" name="minArea"
                                                                id="area" placeholder="من">
                                                        </div>
                                                        <div class="col">
                                                            <input class="myselect" type="number" name="maxArea"
                                                                id="area" placeholder="الى">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <label for="area">السعر</label>
                                                        <div class="col">
                                                            <input class="myselect" type="number" name="minPrice"
                                                                id="area" placeholder="من">
                                                        </div>
                                                        <div class="col">
                                                            <input class="myselect" type="number" name="maxPrice"
                                                                id="area" placeholder="الى">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <label for="room">الغرف</label>
                                                        <div class="col">
                                                            <select class="myselect" name="" id="room">
                                                                <option value="">من</option>
                                                                <option value="">1</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select class="myselect" name="" id="room">
                                                                <option value="">الى</option>
                                                                <option value="">1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <label for="bathroom">الحمامات</label>
                                                        <div class="col">
                                                            <select class="myselect" name="" id="bathroom">
                                                                <option value="">من</option>
                                                                <option value="">1</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select class="myselect" name="" id="bathroom">
                                                                <option value="">الى</option>
                                                                <option value="">1</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item  mt-3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree">
                                            <h5>المزايا</h5>
                                        </button>
                                        <div id="collapseThree" class="accordion-collapse collapse">
                                            <div class="">
                                                <fieldset>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="secuirty">
                                                        <label class="form-check-label" for="secuirty">
                                                            امن
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="parking">
                                                        <label class="form-check-label" for="parking">
                                                            جراج
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="elevator">
                                                        <label class="form-check-label" for="elevator">
                                                            اسانسير
                                                        </label>
                                                    </div>
                                               
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="pool">
                                                        <label class="form-check-label" for="pool">
                                                            حمام سباحه
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            حديقه
                                                        </label>
                                                    </div>
                                                
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            مدخل خاص
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            كاميرات مراقبه
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            عفش
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            تكييفات
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            مطبخ
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            مسموح حيوانات اليفه
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="othrt">
                                                        <label class="form-check-label" for="other">
                                                            اخرى
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="submit-btns">
                                <a href="" class="btn btn-light">اعد الاعدادات</a>
                                <a href="" class="btn our-btn">بحث</a>
                            </div>
                        </form>

                        </div>
        </div>
        <div class="col-lg-9 col-cards-2">
            <div class="row">
                <x-vip-card/>
                <x-vip-card/>
                <x-property-card/>
                <x-pagination/>
            </div>
        </div>
    </div>

  </div>
</div>
</section>


</x-layout>