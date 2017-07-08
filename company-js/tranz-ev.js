$(function () {

	// Движения по расчетному счету - Ответ: Да 
	$("#tranz-yes").change(function() {
	     if ( $('#tranz-yes').prop('checked') ) {
	          $('#btn-next-tranz').show();
	     } 
	});


	// Движения по расчетному счету - Ответ: Нет 
	$("#tranz-no").change(function() {
	    if ( $('#tranz-no').prop('checked') ) {
	        $('#btn-next-tranz').show();
	    } 
	});


	// Кнопка Назад
	$("#btn-back-tranz").click(function() {
	    $('#div-tranz').hide();
	    $('#div-tax-system').show();
	    $('#btn-next-tax-system').show();
	});


	// Кнопка Дальше
	$("#btn-next-tranz").click(function() {
	    $('#div-one-face').show();
	    $('#div-tranz').hide();
	});



});