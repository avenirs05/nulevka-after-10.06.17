$(function () {

    $("#general-ip").change(function () {
        $('.tax-answer-0').after( $('#choice-quarters') );
        $('.tax-answer-0').show();
        $('#choice-quarters').show();
        $('#btn-next-tax-system-ip').show();
        $('#choice-years').hide();
    });
    
    $("#simple-ip").change(function () {
        $('#choice-quarters').hide();
        $('.tax-answer-1').show();
        $('#choice-years').show();
    });

    $('#year-2016-ip-simple').change(showHideBtnNextSimpleIp);
    $('#year-2015-ip-simple').change(showHideBtnNextSimpleIp);
    $('#year-2014-ip-simple').change(showHideBtnNextSimpleIp);

    $("#envd-ip").change(function () {
        $('#choice-quarters').hide();
        $('#modal-envd-ip').modal('show');
        $('#btn-next-tax-system-ip').hide();
    });

    $("#patent-ip").change(function () {
        $('#choice-quarters').hide();
        $('#modal-patent-ip').modal('show');
        $('#btn-next-tax-system-ip').hide();
    });

    $("#not-know-ip").change(function () {
        $('#choice-quarters').hide();
        $('#modal-not-know-ip').modal('show');
        $('#btn-next-tax-system-ip').hide();
    });

    $("#btn-next-tax-system-ip").click(function() {
        if ( $('#simple-ip').prop('checked') ) {
            $('#div-tax-system').hide();
            insertNalogDecl();
            $('#div-from-customer-ip').show();
            $('#pasp-ser-ip').parent().hide();
            $('#pasp-num-ip').parent().hide();
            $('#pasp-date-issue-ip').parent().hide(); 
            $('#pasp-who-issue-ip').parent().hide(); 
            $('#pasp-kp-ip').parent().hide(); 
        }
        if ( $('#general-ip').prop('checked') ) {
            if ( $("#qrt-4-2016").prop('checked') || 
                 $("#qrt-4-2015").prop('checked') || 
                 $("#qrt-4-2014").prop('checked') ) 
            {                
                $('#decl-nds').parent().parent().show();
                showInputsWillSend('#decl-nds');
                insertDeclNdflIfIpIfQuartIs4();
                $('#div-tax-system').hide();
                $('#div-will-send').show();
                $('#span-we-will-send').show();                
                $('#div-from-customer-ip').show();

                $('#pasp-ser-ip').parent().show();
                $('#pasp-num-ip').parent().show();
                $('#pasp-date-issue-ip').parent().show(); 
                $('#pasp-who-issue-ip').parent().show(); 
                $('#pasp-kp-ip').parent().show();             
            } 
            else {
                $('#decl-nds').parent().parent().show();
                showInputsWillSend('#decl-nds');
                $('#div-tax-system').hide();                
                $('#div-will-send').show();
                $('#span-we-will-send').show();                
                $('#div-from-customer-ip').show();
                $('#pasp-ser-ip').parent().hide();
                $('#pasp-num-ip').parent().hide();
                $('#pasp-date-issue-ip').parent().hide(); 
                $('#pasp-who-issue-ip').parent().hide(); 
                $('#pasp-kp-ip').parent().hide(); 
            }
        }

        $('#div-from-customer-ip').before( $('#div-final-sum') );
        $('#div-final-sum').show();
        $('#final-sum-text').show();
        $('#final-sum-digits').text( calculateFinalSum() );
    });

    $("#btn-back-will-send-ip").click(function() {
        $('#div-will-send').hide();
        $('#div-from-customer-ip').hide();
        $(".periods-will-send").remove();          
        $('#span-we-will-send').hide(); 
        $('label:contains("3-НДФЛ")').parent().remove();
        $('#div-tax-system').show();
        $("#will-prepare-email").remove();
        $('.nalog-decl').remove();

        $('#div-final-sum').hide();
        $('#final-sum-text').hide();
        $('#final-sum-digits').text('');
    });

    $("#decl-nds").change(function() { showAndHideChildChecks (this); });

    $("#another-periods").click(function () {
        var anotherPeriodsColl = $('#another-periods').siblings('div').children('label').children('input:not(#qrt-2-2017)');     
        for (var i = 0; i < $(anotherPeriodsColl).length; i++) {
            var anotherPeriodsInput = anotherPeriodsColl.eq(i).parent();
            if (anotherPeriodsInput.css('display') == "none") {
               anotherPeriodsInput.show(); 
            } else 
                anotherPeriodsInput.hide();
                $('#uk-question-0').hide();
                $('#uk-question-1').hide();
                $('#uk-question-2').hide();
        }            
    });

    $('#div-will-send').on("change", ".periods-will-send label input", showAndHideParentCheckbox);

    $('#years-simple').click(function() {
        if ( $('#div-years').css('display') == 'block') {
            $('#div-years').hide();
        } else $('#div-years').show();
    });


    $("html").on('change', '.nalog-decl', function() {
        j = 0;        
        for (var i = 0; i < $('.nalog-decl').length; i++) {
            if ( $('.nalog-decl').eq(i).children('label').children('input').prop('checked') ) {
                j++;
            } 
        }
        if (j === 0) {
            $('#final-sum-digits').text('0');
        } 
        if (j === 1) {
            $('#final-sum-digits').text('299');
        } 
        if (j === 2) {
            $('#final-sum-digits').text('598');
        } 
        if (j === 3) {
            $('#final-sum-digits').text('897');
        } 
    }); 

    $('#submit-go-to-pay-ip').click(function() {
        var totalAmount = $('#final-sum-digits').text();
        $('#total-amount').val(totalAmount);
    })    
});