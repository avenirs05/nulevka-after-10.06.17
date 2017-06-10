$(function () {

    $("#general").change(function () {
        $('.tax-answer-0').after( $('#choice-quarters') );
        $('.tax-answer-0').show();
        $('#choice-quarters').show();
        $('#btn-next-tax-system').show();
    });
    
    $("#simple").change(function () {
        $('.tax-answer-1').after( $('#choice-quarters') );
        $('.tax-answer-1').show();
        $('#choice-quarters').show();
        $('#btn-next-tax-system').show();
    });
    
    $("#envd").change(function () {
        $('#choice-quarters').hide();
        $('#modal-envd').modal('show');
        $('#btn-next-tax-system').hide();
    });
    

    $("#not-know").change(function () {
        $('#choice-quarters').hide();
        $('#modal-not-know').modal('show')
        $('#btn-next-tax-system').hide();
    });
    
    $("#qrt-4-2016, #qrt-4-2015, #qrt-4-2014").change(showAndHideUK);
    $("#szv-quest-no").change(function () {
        $('#choice-months').hide();
        $('.month').hide();
    });
    $("#szv-quest-yes").change(showAndHideSzvMonths);

    $("html").on('change', '#qrt-2-2017', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-1-2017', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-4-2016', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-3-2016', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-2-2016', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-1-2016', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-4-2015', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-3-2015', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-2-2015', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-1-2015', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-4-2014', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-3-2014', function () { $('.month').remove(); });
    $("html").on('change', '#qrt-2-2014', function () { $('.month').remove(); });

    $("html").on('change', '.month', function () { 
        var inputs = $('.month').children('div').children('label').children('input');
        for (var i = 0; i < inputs.length; i++) {
            if ( inputs.eq(i).prop('checked') ) {
                $('#szv-m').prop('checked', true);
                break;
            }  
            $('#szv-m').prop('checked', false);       
        }
    });

    $("#btn-next-tax-system").click(function() {
        if ( $('#general').prop('checked') ) {
            $('#div-tranz').show();
            $('#div-tax-system').hide();
        }
        if ( $('#simple').prop('checked') ) {
            if ( $("#qrt-4-2016").prop('checked') || 
                 $("#qrt-4-2015").prop('checked') || 
                 $("#qrt-4-2014").prop('checked') ) 
            {
                $('#div-base').show();
                $('#div-tax-system').hide();              
            } 
            else {
                $('#div-tax-system').hide();
                $('#div-one-face').show(); 
            }
        }
    });

    $("#btn-back-tranz").click(function() {
        $('#div-tranz').hide();
        $('#div-tax-system').show();
        $('#btn-next-tax-system').show();
    });

    $("#btn-back-base").click(function() {
        $('#div-base').hide();
        $('#div-tax-system').show();
        $('#btn-next-tax-system').show();
    });

    $("#base-inc").change(function() {
         if (($('#base-inc')).prop('checked')) {
              $('#btn-next-base').show();
         } 
    });

    $("#base-inc-spent").change(function() {
        if (($('#base-inc-spent')).prop('checked')) {
            $('#btn-next-base').show();
        } 
    });

    $("#btn-next-base").click(function() {
        $('#div-one-face').show();
        $('#div-base').hide();
    });

    $("#tranz-yes").change(function() {
         if (($('#tranz-yes')).prop('checked')) {
              $('#btn-next-tranz').show();
         } 
    });

    $("#tranz-no").change(function() {
        if (($('#tranz-no')).prop('checked')) {
            $('#btn-next-tranz').show();
        } 
    });

    $("#btn-next-tranz").click(function() {
        $('#div-one-face').show();
        $('#div-tranz').hide();
    });

    $("#btn-back-one-face").click(function() {
        if ( $('#general').prop('checked') ) {
             $('#div-tranz').show();
             $('#div-one-face').hide();
        }
        if ( $('#simple').prop('checked') ) {
            if ( $("#qrt-4-2016").prop('checked') || 
                 $("#qrt-4-2015").prop('checked') || 
                 $("#qrt-4-2014").prop('checked') ) 
            {
                $('#div-one-face').hide();
                $('#div-base').show();
            } 
            else 
            {
                $('#div-one-face').hide();
                $('#div-tax-system').show();
                $('#btn-next-tax-system').show();
            }
        }                
    });

    $("#one-face-yes").change(function() {
         if (($('#one-face-yes')).prop('checked')) {
              $('#btn-next-one-face').show();
         } 
    });

    $("#one-face-no").change(function() {
        if (($('#one-face-no')).prop('checked')) {
            $('#btn-next-one-face').show();
        } 
    });

    $("#szv-quest-yes").change(function() {
         if (($('#szv-quest-yes')).prop('checked')) {
              $('#choice-months').show();
              $('#btn-next-szv-quest').show();
         } 
    });

    $("#szv-quest-no").change(function() {
        if (($('#szv-quest-no')).prop('checked')) {
            $('#choice-months').hide();
            $('#btn-next-szv-quest').show();
        } 
    });

    $("#btn-next-one-face").click(function() {
        if ( $('#one-face-yes').prop('checked') ) {
            $('#div-one-face').hide();
            $('#btn-next-szv-quest').trigger('click');    
        }
        else {
            $('#div-one-face').hide();
            $('#div-szv-quest').show();       
            showAndHideSzvMonths(); 
        }

    });

    $("#btn-back-szv-quest").click(function() {
        $('#div-szv-quest').hide();
        $('#div-one-face').show();         
    });

    $("#btn-next-szv-quest").click(function() {
        if ( $('#szv-quest-no').prop('checked') ) { 
            $('.month').remove(); 
        }
        
        $('#div-szv-quest').hide();
        $('#div-will-send').show();
        $('#span-we-will-send').show();
        $('#div-from-customer').show();
        $('#snils-dir').parent('div').show();

        if ( $('#tranz-yes').prop('checked') && $('#one-face-yes').prop('checked') ) {            
            hideAllInputsWillSend();

            if ( $('#general').prop('checked') ) {
                $('#decl-nds').parent().parent().show();
                showInputsWillSend('#decl-nds');
                $('#decl-profit').parent().parent().show();
                showInputsWillSend('#decl-profit');
            }

            $('#count-ins').parent().parent().show();
            showInputsWillSend('#count-ins');
            $('#count-fss').parent().parent().show();
            showInputsWillSend('#count-fss');            
        }

        if ( $('#tranz-yes').prop('checked') && $('#one-face-yes').prop('checked') == false ) {
            hideAllInputsWillSend();

            if ( $('#general').prop('checked') ) {
                $('#decl-nds').parent().parent().show();
                showInputsWillSend('#decl-nds');
                $('#decl-profit').parent().parent().show();
                showInputsWillSend('#decl-profit');
            }

            $('#count-ins').parent().parent().show();
            showInputsWillSend('#count-ins');
            $('#count-fss').parent().parent().show();
            showInputsWillSend('#count-fss');
            $('#szv-m').parent().parent().show();
            showInputsWillSendSzv();
        }

        if ( $('#tranz-yes').prop('checked') == false && $('#one-face-yes').prop('checked') ) {
            hideAllInputsWillSend();
            
            if ( $('#general').prop('checked') ) {
                $('#decl-one').parent().parent().show();
                showInputsWillSend('#decl-one');
            }

            $('#count-ins').parent().parent().show();
            showInputsWillSend('#count-ins');
            $('#count-fss').parent().parent().show();
            showInputsWillSend('#count-fss');

        }

        if ( $('#tranz-yes').prop('checked') == false && $('#one-face-yes').prop('checked') == false ) {
            hideAllInputsWillSend ();
            
            if ( $('#general').prop('checked') ) {
                $('#decl-one').parent().parent().show();
                showInputsWillSend('#decl-one');
            }
            
            $('#count-ins').parent().parent().show();
            showInputsWillSend('#count-ins');
            $('#count-fss').parent().parent().show();
            showInputsWillSend('#count-fss');
            $('#szv-m').parent().parent().show();
            showInputsWillSendSzv();
        }
       
        insertDeclUsnIfQuartIs4 ();
        insertDiffReportsIfQuartIs4 ();

        if ( $('#qrt-4-2016').prop('checked') || 
             $('#qrt-4-2015').prop('checked') ||
             $('#qrt-4-2014').prop('checked') ) 
        {
            $('#cnt-workers').parent().show();
        } 

        if ( $('#one-face-yes').prop('checked') ) {
            $('#snils-dir').parent('div').hide();
        }

    });

    $("#btn-back-will-send").click(function() {
        $('#snils-dir').parent('div').hide();
        $('#cnt-workers').parent('div').hide();
        if ( ($('#szv-quest-no').prop('checked')) && ($('#one-face-yes').prop('checked') == false) ) {
            $('#div-will-send').hide();
            $('#div-from-customer').hide();
            $(".periods-will-send").remove();
            $('#div-szv-quest').show();  
            $('#span-we-will-send-2017').hide();  
            $('#div-szv-quest > span').show();
            $('#choice-months span').show();
            $('#div-szv-quest br').show();
            $('#szv-quest-yes').parent('label').show();
            $('#szv-quest-no').parent('label').show(); 
            $('#btn-back-szv-quest').show();
            $('#btn-next-szv-quest').show(); 
            $('#choice-months').hide();
            $('.month').remove();
        } 
        if ( ($('#szv-quest-yes').prop('checked')) && ($('#one-face-yes').prop('checked') == false) ) {
            $('#div-will-send').hide();
            $('#div-from-customer').hide();
            $(".periods-will-send").remove();
            $('#div-szv-quest').show();  
            $('#span-we-will-send-2017').hide();  
            $('#div-szv-quest > span').show();
            $('#choice-months span').show();
            $('#div-szv-quest br').show();
            $('#szv-quest-yes').parent('label').show();
            $('#szv-quest-no').parent('label').show(); 
            $('#btn-back-szv-quest').show();
            $('#btn-next-szv-quest').show(); 

            var inputs = $('.month').children('div').children('label').children('input');
            for (var i = 0; i < inputs.length; i++) {
                inputs.eq(i).parent('label').parent('div').parent('div').css('display', 'block');
                if ( inputs.eq(i).parent('label').parent('div').css('display') == 'none' ) {
                    inputs.eq(i).parent('label').parent('div').css('display', 'block');
                    inputs.eq(i).prop('checked', true);
                } else inputs.eq(i).prop('checked', false);              
            }
        }

        if ( ($('#one-face-yes').prop('checked')) ) {
            $('#div-will-send').hide();
            $('#div-from-customer').hide();
            $(".periods-will-send").remove();
            $('#div-one-face').show();  
            $('#span-we-will-send-2017').hide(); 
            $('#choice-months').hide();
            $('.month').remove();
        }

        $('#decl-usn-4-2016').parent('label').parent('div').remove();
        $('#decl-usn-4-2015').parent('label').parent('div').remove();
        $('#decl-usn-4-2014').parent('label').parent('div').remove();

        $('#buh-rep-ifns-4-2016').parent('label').parent('div').remove();
        $('#buh-rep-ifns-4-2015').parent('label').parent('div').remove();
        $('#buh-rep-ifns-4-2014').parent('label').parent('div').remove();

        $('#buh-rep-stat-4-2016').parent('label').parent('div').remove();
        $('#buh-rep-stat-4-2015').parent('label').parent('div').remove();
        $('#buh-rep-stat-4-2014').parent('label').parent('div').remove();        

        $('#workers-cnt-4-2016').parent('label').parent('div').remove();
        $('#workers-cnt-4-2015').parent('label').parent('div').remove();
        $('#workers-cnt-4-2014').parent('label').parent('div').remove();        
    });

    $("#another-periods").click(function() {
        var anotherPeriodsColl = $('#another-periods').siblings('div').children('label').children('input:not(#qrt-2-2017)');     
        for (var i = 0; i < $(anotherPeriodsColl).length; i++) {
            var anotherPeriodsInput = anotherPeriodsColl.eq(i).parent();
            if (anotherPeriodsInput.css('display') == "none") {
               anotherPeriodsInput.show(); 
            } 
            else 
                anotherPeriodsInput.hide();
                $('#uk-question-0').hide();
                $('#uk-question-1').hide();
                $('#uk-question-2').hide();
        }            
    });

    $("#decl-nds").change(function() { showAndHideChildChecks (this); });
    $("#decl-profit").change(function() { showAndHideChildChecks (this); });
    $("#count-ins").change(function() { showAndHideChildChecks (this); });
    $("#count-fss").change(function() { showAndHideChildChecks (this); });
    $("#decl-one").change(function() { showAndHideChildChecks (this); });
    $("#szv-m").change(function() { showAndHideChildChecksSzv (this); });

    $('#div-will-send').on("change", ".periods-will-send label input", showAndHideParentCheckbox);

    $('#inn').blur(function() {
        if ( $(this).val().match(regExpInn) == null ) {
            $(this).css('color', 'red');
        } else $(this).css('color', '#000000');
    });

    $('#inn').focus(function() {
        $(this).css('color', '#000000');
    });

});