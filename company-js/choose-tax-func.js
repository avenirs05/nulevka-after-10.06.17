var showAndHideUK = function () {
    if (($('#qrt-4-2016')).prop('checked')) {
         $('#uk-question-0').show();
    } else $('#uk-question-0').hide();
    
    if (($('#qrt-4-2015')).prop('checked')) {
         $('#uk-question-1').show();
    } else $('#uk-question-1').hide();
    
    if (($('#qrt-4-2014')).prop('checked')) {
         $('#uk-question-2').show();
    } else $('#uk-question-2').hide();
}

