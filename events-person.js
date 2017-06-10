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
        $('#btn-next-tax-system-ip').show();
    });

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
    })    

});