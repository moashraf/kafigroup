
$(function () {
	"use strict";

	
$('.content-2').hide();
$('.content-3').hide();

$('#form-1').submit(function (e) {
	e.preventDefault();
	$('.content-1').hide();
	$('.content-2').show();
	$('.content-3').hide();
	$("html, body").animate({scrollTop: 0}, 1000);

});
$('#form-2').submit(function (e) {
	e.preventDefault();
	$('.content-1').hide();
	$('.content-2').hide();
	$('.content-3').show();
	$("html, body").animate({scrollTop: 0}, 1000);

});
$('#back-form-1').on('click', function (e) {
	e.preventDefault();
	$('.content-1').show();
	$('.content-2').hide();
	$('.content-3').hide();
	$("html, body").animate({scrollTop: 0}, 1000);

});
$('#back-form-2').on('click', function (e) {
	e.preventDefault();
	$('.content-1').hide();
	$('.content-2').show();
	$('.content-3').hide();
	$("html, body").animate({scrollTop: 0}, 1000);

});
// Select mzaya
$('#mzaya').select2({
	placeholder: "اهم المزايا",
	allowClear: true,
	closeOnSelect:false
}).on('select2:selecting', e => $(e.currentTarget).data('scrolltop', $('.select2-results__options').scrollTop()))
.on('select2:select', e => $('.select2-results__options').scrollTop($(e.currentTarget).data('scrolltop')));



$('#li-cat').on('change', function () {
	if ($(this).val() == "togary") {
		$('#Property-type').html(`
		<option value="">اختر نوع العقار</option>
		<option value="">محلات</option>
		<option value="">حضانات</option>
		<option value="">مخازن</option>
		<option value="">كافيهات</option>
		<option value="">عيادات</option>
		<option value="">مولات</option>
		<option value="">صيدليه</option>
		<option value="">معرض</option>
		<option value="">مطاعم</option>
		<option value="">حضانه اطفال</option>
		<option value="schools">مدارس</option>
		<option value="factory">مصانع</option>
		
		`);
		$('#floor-div').hide();
		$('#floor-div input').prop('required',false);
	
		
	} else if ($(this).val() == "edary") {
		$('#Property-type').html(`
		<option value="">اختر نوع العقار</option>
		<option value="">شقق</option>
		<option value="building">عمارات</option>
		<option value="">عيادات</option>
		<option value="">دور كامل</option>
		`);
		$('#floor-div').show();
		$('#floor-div input').prop('required',true);
	
	} else {
		$('#Property-type').html(`
		<option value="">اختر نوع العقار</option>
		<option value="">شقق</option>
		<option value="villa">فلل خاصه</option>
		<option value="">روف</option>
		<option value="">استديو</option>
		<option value="">شاليهات</option>
		<option value="shared-rooms">غرف مشاركه</option>
		<option value="building">عمارات</option>
		<option value="">شقه دوبلكس</option>
		<option value="land">اراضي</option>
		<option value="">توين هاوس</option>
		<option value="">بنتاهاوس</option>
		`);
		$('#floor-div').show();
		$('#floor-div input').prop('required',true);

	}
});
$('#installment-div').hide();

$('#offer-type').on('change', function () {
	if ($(this).val() == "installment") {
		
		$('#installment-div').show();
		$('#installment-div input').prop('required',true);
		$('#boolean-row').show();
		$('#boolean-row input').prop('required',true);
		$('#total-price-div').show();
		$('#total-price-div input').prop('required',true);
		$('#rent-div').hide();
	}else if ($(this).val() == "new-rent" || $(this).val() == "rent-finished"){
		
		
		$('#total-price-div').hide();
		$('#total-price-div input').prop('required',false);

		$('#rent-div').show();
		$('#rent-div input').prop('required',true);

		$('#installment-div').hide();
		$('#installment-div input').prop('required',false);
		
		$('#boolean-row').hide();
		$('#boolean-row input').prop('required',false);
		
	}else{
		$('#total-price-div').show();
		$('#total-price-div input').prop('required',true);
		$('#installment-div').hide();
		$('#rent-div').hide();
		$('#installment-div input').prop('required',false);
		$('#rent-div input').prop('required',false);
		$('#boolean-row').show();
		$('#boolean-row input').prop('required',true);

	}
});
$('#rent-div').hide();
$('#license-type-div').hide();
$('#bulding-area-div').hide();

$('#floors-div').hide();
$('#installment-date-div').hide();
$('#reciving').on('change',function(){
	if ($(this).val() == "fawry"){
		$('#installment-date-div').hide();
		$('#installment-date-div input').prop('required',true);


	}else {
		$('#installment-date-div').show();
		$('#installment-date-div input').prop('required',false);


	}
});

$('#Property-type').on('change', function () {
	if ($(this).val() == "land") {
		
		$('#license-type-div').show();
		$('#license-type-div input').prop('required',true);
		$('#finish-type-div').hide();
		$('#floors-div').hide();
		$('#floors-div input').prop('required',false);
		$('#bulding-area-div').hide();
		$('#bulding-area-div input').prop('required',false);
		$('#inner-floor').hide();
		$('#inner-floor input').prop('required',false);

		
	
	}
	else if ($(this).val() == "building" || $(this).val() == "schools" || $(this).val() == "factory" ){
		$('#license-type-div').hide();
		$('#license-type-div input').prop('required',false);
		$('#floors-div').show();
		$('#floors-div input').prop('required',true);
		$('#bulding-area-div').show();
		$('#bulding-area-div input').prop('required',true);
		$('#inner-floor').hide();
		$('#inner-floor input').prop('required',false);
		

		
	}else if ($(this).val() == "villa"){
		$('#license-type-div').hide();
		$('#license-type-div input').prop('required',false);

	}
	else{
		$('#license-type-div').hide();
		$('#license-type-div input').prop('required',false);
		$('#finish-type-div').show();

		$('#floors-div').hide();
		$('#floors-div input').prop('required',false);
		$('#bulding-area-div').hide();
		$('#bulding-area-div input').prop('required',false);
		$('#inner-floor').show();
		$('#inner-floor input').prop('required',true);
	

		
	}
});
});

