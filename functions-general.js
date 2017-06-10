function showAndHideParentCheckbox () {
    var divs = $(this).parent().parent().siblings();
    var childrElem = $(this).parent().parent().parent().children();
    if ( $(this).prop('checked') ) {
        divs.eq(0).children('input').prop('checked', true);
    }         
    for (var i = 1; i < childrElem.length; i++) {
        if ( childrElem.eq(i).children('label').children('input').prop('checked') ) {
            break;
        }
        if ( i == (childrElem.length - 1) ) {
            if ( childrElem.eq(i).children('label').children('input').prop('checked') == false ) {
                divs.eq(0).children('input').prop('checked', false);
            }
        }
    }
}

function showInputsWillSend (idOfReport) {
    var periods = $('#choice-quarters > div > label');
    var inputs = $('#choice-quarters > div > label > input');
    var cntQrt = 0;
    
    for (var i = 0; i < periods.length; i++) {                    
        if (inputs.eq(i).prop('checked')) {
            cntQrt = cntQrt + 1;
        }
    }

    if (cntQrt > 1) {
        for (var i = 0; i < periods.length; i++) {                    
            if (inputs.eq(i).prop('checked')) {
                $(idOfReport)
                    .parent()
                    .parent()
                    .append("<div class='periods-will-send'><label><input type='checkbox' checked>" + periods.eq(i).text() + "</input></label></div>");
            }
        }
    } else if (cntQrt < 2) { 
        $("#span-we-will-send").show();
    };

    diffHeaderWeWillSend ();

}

function showAndHideChildChecks (reportId) {
    if ( $(reportId).prop('checked') == false ) {
        var quarter = $(reportId).parent().siblings();
        for (var i = 0; i < quarter.length; i++) {
            quarter.children('label').children('input').eq(i).prop("checked", false);
        }
    }
    if ( $(reportId).prop('checked')) {
        var quarter = $(reportId).parent().siblings();
        for (var i = 0; i < quarter.length; i++) {
            quarter.children('label').children('input').eq(i).prop("checked", true);
        }
    }
}

function diffHeaderWeWillSend () {
    var periods = $('#choice-quarters > div > label');
    var inputs = $('#choice-quarters > div > label > input');
    var cntQrt = 0;
    var singleQrt = '';
    for (var i = 0; i < periods.length; i++) {                    
        if (inputs.eq(i).prop('checked')) {
            cntQrt = cntQrt + 1;
        }
    }
    if (cntQrt < 2) {            
        for (var i = 0; i < periods.length; i++) {                    
            if (inputs.eq(i).prop('checked')) {
               singleQrt = inputs.eq(i).parent('label').text();
            }
        }
        $("#span-we-will-send").text( 'Мы подготовим за Вас' + ' за ' + singleQrt);
    } else $("#span-we-will-send").text( 'Мы подготовим за Вас:');
}  