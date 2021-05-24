<x-layout>


<section id="add-listing" dir="rtl">
            <div class="container">
                <div class="contents">
                    <div class="content-1">
                        <form id="form-1" action="">
                            <h3>نوع العقار و الموقع</h3>


                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="li-cat">تصنيف العرض</label>
                                        <select required name="li-cat" id="li-cat" class="myselect">
                                            <option value="">اختر</option>
                                            <option value="sakny">سكني</option>
                                            <option value="edary">اداري</option>
                                            <option value="togary">تجاري</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="Property-type">نوع العقار</label>
                                        <select required name="Property-type" id="Property-type" class="myselect">
                                            <option value="">اختر نوع العقار</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                </div>
                                <div class="form-group">
                                    <label for="">الموقع</label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select required name="country" id="country" class="myselect">
                                                <option value="">المحافظه</option>
                                                <option value="">القاهره</option>
                                                <option value="">الجيزه</option>
                                                <option value="">السويس</option>
                                                <option value="">القليوبيه</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4">
                                            <select required name="area" id="area" class="myselect">
                                                <option value="">الحي</option>
                                                <option value="">هليويليس</option>
                                                <option value="">زهراء مدينه نصر</option>

                                            </select>
                                        </div>
                                        <div class="col-lg-4">

                                            <input list="areas" name="area" id="area" class="myselect"
                                                placeholder="المنطقه">
                                            <datalist id="areas">
                                                <option value="مصر الجديده">
                                                <option value="زهراء المعادي">
                                                <option value="مدينه نصر">
                                                <option value="العجوزه">
                                                <option value="الدقي">

                                            </datalist>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3>التفاصيل</h3>
                                <div class="form-group">
                                    <label for="listing-name">اسم الاعلان</label>
                                    <input placeholder="عقار بالتجمع الخامس" required type="text" name="listing-name"
                                        id="listing-name" class="myselect">
                                </div>
                                <div class="form-group">
                                    <label for="listing-desc">وصف الاعلان</label>
                                    <textarea placeholder="اوصق اعلانك" required name="listing-desc" id="listing-desc"
                                        cols="30" class="myselect" rows="5"></textarea>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="phone">رقم الهاتف</label>
                                        <input disabled type="tel" name="phone" id="phone" placeholder="011000000411"
                                            class="myselect">
                                        <small>اذا ارد تغيير رقم الهاتف الرجاء الذهاب الى <a
                                                href="./profile.html">الاعدادات</a></small>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="call-times">الاوقات المتاحه للاتصال</label>
                                        <Select required class="myselect">
                                            <option value="none">اختر الوقت المناسب</option>
                                            <option value="am">من 9 صباحا الى 5 عصرا</option>
                                            <option value="pm">من 11 صباحا الى 7 مساء</option>
                                            <option value="pm-2">من 3 عصرا الى 11 مساء</option>
                                            <option value="other">جميع الاوقات</option>
                                        </Select>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn our-btn" value="اكمل">
                        </form>
                    </div>
                    <div class="content-2">
                        <h3>المواصفات</h3>

                        <form action="" id="form-2">
                            <div class="row">
                                <!-- offer type -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="offer-type">نوع العرض</label>
                                        <select required class="myselect" name="offer-type" id="offer-type">
                                            <option value="">اختر نوع العرض</option>
                                            <option value="cash">كاش</option>
                                            <option value="installment">تقسيط</option>
                                            <option value="new-rent">ايجار قانون جديد</option>
                                            <option value="rent-finished">ايجار مفروش</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- total area -->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="total-area">اجمالي المساحه</label>
                                        <input type="number" class="myselect" placeholder="120 mtr" min="0"
                                            name="total-area" id="total-area">
                                    </div>
                                </div>
                                <!-- finish type -->
                                <div class="col-lg-4" id="finish-type-div">
                                    <div class="form-group">
                                        <label for="finish-type">التشطيب</label>
                                        <select required class="myselect" name="finish-type" id="finish-type">
                                            <option value="">اختر نوع التشطيب</option>
                                            <option value="extra-super">اكسترا سوبرلوكس</option>
                                            <option value="super">سوبرلوكس</option>
                                            <option value="lux">لوكس</option>
                                            <option value="mid-finish">تشطيب متوسط</option>
                                            <option value="no-finish">بدون تشطيب</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- floors number -->
                                <div class="col-lg-3" id="floors-div">
                                    <div class="form-group">
                                        <label for="floors">عدد الطوابق</label>
                                        <input type="number" class="myselect" placeholder="12" min="0"
                                                name="floors" max="15" id="floors">
                                    </div>
                                </div>
                            

                                

                                
                                <!-- land area -->
                                <div class="col-lg-3" id="license-type-div">
                                    <div class="form-group">
                                        <label for="license-type">نوع الترخيص</label>
                                        <select name="license-type" class="myselect" id="license-type">
                                            <option value="">اختر نوع الترخيص</option>
                                            <option value="">سكني</option>
                                            <option value="">سكني و تجاري</option>
                                            <option value="">سكني و اداري</option>
                                            <option value="">صناعي</option>
                                            <option value="">زراعي</option>
                                            <option value="">مدارس</option>
                                            <option value="">لا يوجد</option>
                                        </select>
                                    </div>
                                </div>

              <!-- floor number -->
              <div class="col-lg-3" id="floor-div">
                <div class="form-group">
                    <label for="floor-number">الدور</label>
                    <select name="floor-number" id="floor-number" class="myselect">
                        <option value="">اختر</option>
                        <option value="">بيزمنت</option>
                        <option value="">ارضي</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                        <option value="">13</option>
                        <option value="">14</option>
                        <option value="">15+</option>
                    </select>
                </div>
            </div>
                                <!-- floor and property inners -->
                                <div id="inner-floor" class="row">
                      
                                    <!-- rooms -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="rooms">عدد الغرف</label>
                                            <input type="number" class="myselect" placeholder="12" min="0" name="rooms"
                                                max="15" id="rooms">
                                        </div>
                                    </div>
                                    <!-- bathrooms -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="baths">عدد الحمامات</label>
                                            <input type="number" class="myselect" placeholder="12" min="0" name="baths"
                                                max="15" id="baths">
                                        </div>
                                    </div>
                                </div>
                                <!-- boolean row -->
                                <div id="boolean-row" class="row">
                                    <!-- trade -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="trade">تصلح للبدل</label>
                                            <select name="trade" id="trade" class="myselect">
                                                <option value="">اختر</option>
                                                <option value="true">نعم</option>
                                                <option value="false">كلا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- bank-finance -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="bank-finance">تصلح تمويل عقاري</label>
                                            <select name="bank-finance" id="bank-finance" class="myselect">
                                                <option value="">اختر</option>
                                                <option value="true">نعم</option>
                                                <option value="false">كلا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- signed -->
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="signed">مسجله شعر عقاري</label>
                                            <select name="signed" id="signed" class="myselect">
                                                <option value="">اختر</option>
                                                <option value="true">نعم</option>
                                                <option value="false">كلا</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- total-price -->
                                <div class="col-lg-3" id="total-price-div">
                                    <div class="form-group">
                                        <label for="total-price">السعر الاجمالي</label>
                                        <input type="number" name="total-price" id="total-price" class="myselect"
                                            placeholder="500,000 L.E" min="0">
                                    </div>
                                </div>
                                <!-- installment row -->
                                <div id="installment-div" class="row">
                                    <!-- mtr price -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="mtr-price">سعر المتر</label>
                                            <input type="number" name="mtr-price" id="mtr-price" class="myselect"
                                                placeholder="500 L.E" min="0">
                                        </div>
                                    </div>
                                    <!-- down payment -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="down-payment">المقدم</label>
                                            <input type="number" name="down-payment" id="down-payment" class="myselect"
                                                placeholder="200,000 L.E">
                                        </div>
                                    </div>
                                    <!-- installment length -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="installment-time">مده الاقساط</label>
                                            <input type="number" name="installment-time" id="installment-time"
                                                class="myselect" placeholder="24 شهر" min="0">
                                        </div>
                                    </div>
                                    <!-- installment value -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="installment-value">قيمه القسط</label>
                                            <input type="number" name="installment-value" id="installment-value"
                                                class="myselect" placeholder="5000 L.E شهريا" min="0">
                                        </div>
                                    </div>
                                    <!-- installment time to recive -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="reciving">الاستلام</label>
                                            <select name="reciving" id="reciving" class="myselect">
                                                <option value="">اختر</option>
                                                <option value="fawry">فوري</option>
                                                <option value="not-fawry">غير فوري</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- installment time  -->
                                    <div class="col-lg-3" id="installment-date-div">
                                        <div class="form-group">
                                            <label for="installment-date">الاستلام</label>
                                            <input type="date" name="installment-date" id="installment-date"
                                                class="myselect">
                                        </div>
                                    </div>

                                </div>
                                <div class="row" id="rent-div">
                                    <!-- rent-value -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="rent-value">الايجار الشهري</label>
                                            <input type="number" name="rent-value" id="rent-value" class="myselect"
                                                placeholder="5000 L.E شهريا" min="0">
                                        </div>
                                    </div>
                              
                                </div>
                                <div class="mt-3 mb-3" id="mzaya-div">
                                    <h3>المزايا</h3>
                                    <small>يمكن اختيار اكثر من ميزه بالضغط عليها</small>

                                    <br>
                                    <br>
                                    <select id="mzaya" class="myselect" name="states[]" multiple="multiple">
                                        <option value="elev">اسانسير</option>
                                        <option value="security">امن</option>
                                        <option value="garage">جراج</option>
                                        <option value="garden">حديقه</option>
                                        <option value="pool">حمام سباحه</option>
                                        <option value="private-interance">مدخل خاص</option>
                                        <option value="camera">كاميرات مراقبه</option>
                                        <option value="furn">عفش</option>
                                        <option value="air-cond">تكييفات</option>
                                        <option value="kitchen">مطبخ</option>
                                        <option value="pets">مسموح حيوانات اليفه</option>
                                    </select>
                                </div>


                            </div>
                            <input type="submit" value="اكمل" class="btn our-btn">
                            <button id="back-form-1" class="btn btn-light">الرجوع</button>
                        </form>
                    </div>
                    <div class="content-3">
                        <h3>اضف صور</h3>
                        <Small>يمكنك اختيار الصور الرئيسيه عن طريق زر اجعلها رئيسه اسفل كل صوره</Small>
                        <form id="form-3">
                            <div class="dropzone needsclick mt-3" id="demo-upload" action="/image-upload">
                                <div class="dz-message needsclick">
                                    <br>
                                    <i class="fa fa-upload fa-7x"></i>
                                    <p class="mt-3">upload images here</p>
                                </div>
                            </div>

                            <div class="form-check form-switch mt-3">
                                <input class="form-check-input" type="checkbox" id="ekrar">
                                <label style="padding-right: 40px;" class="form-check-label" for="ekrar">
                                    اقر اني مالك الوحدة وليس وسيط عقاري وان جميع محتويات االعالن صحيحة وعلى مسؤوليتي
                                </label>
                            </div>

                            <input type="submit" value="اضف اعلان" class="btn our-btn">
                            <button id="back-form-2" class="btn btn-light">الرجوع</button>
                            <a href="./pricing.html" id="vip-listing" class="btn btn-outline-primary">ميز اعلانك</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>



        <x-call-to-action />





    </x-layout>