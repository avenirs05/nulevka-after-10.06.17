function insertDeclNdflIfIpIfQuartIs4 () {
    if ( $('#general-ip').prop('checked') && 
        ( $('#qrt-4-2014').prop('checked') || 
          $('#qrt-4-2015').prop('checked') || 
          $('#qrt-4-2016').prop('checked') ) )  
    {
        if ( $('#qrt-4-2016').prop('checked') ) {
            $('#div-from-customer-ip').before('<div><label id="label-decl-ndfl-ip-4-2016" for="decl-ndfl-ip-4-2016"><input id="decl-ndfl-ip-4-2016" type="checkbox" name="decl-ndfl-ip-4-2016" checked>Налоговая декларация 3-НДФЛ за 2016 год</label></div>');
        }
        if ( $('#qrt-4-2015').prop('checked') ) {
            $('#div-from-customer-ip').before('<div><label id="label-decl-ndfl-ip-4-2015" for="decl-ndfl-ip-4-2015"><input id="decl-ndfl-ip-4-2015" type="checkbox" name="decl-ndfl-ip-4-2015" checked>Налоговая декларация 3-НДФЛ за 2015 год</label></div>');
        }
        if ( $('#qrt-4-2014').prop('checked') ) {
            $('#div-from-customer-ip').before('<div><label id="label-decl-ndfl-ip-4-2014" for="decl-ndfl-ip-4-2014"><input id="decl-ndfl-ip-4-2015" type="checkbox" name="decl-ndfl-ip-4-2014" checked>Налоговая декларация 3-НДФЛ за 2014 год</label></div>');
        }
    }  
}

function insertNalogDecl () {
    if ( $('#simple-ip').prop('checked') && 
        ( $('#year-2016-ip-simple').prop('checked') || 
          $('#year-2015-ip-simple').prop('checked') || 
          $('#year-2014-ip-simple').prop('checked') ) )  
    {
        $('#div-from-customer-ip').before('<div id="will-prepare-email"><span>Мы подготовим Вам и отправим на email:</span></div>');
        if ( $('#year-2016-ip-simple').prop('checked') ) {
            $('#div-from-customer-ip').before('<div class="nalog-decl"><label id="label-year-2016-ip-simple" for="year-2016-ip-simple"><input id="year-2016-ip-simple" type="checkbox" name="year-2016-ip-simple" checked>Налоговая декларация за 2016 год</label></div>');
        }
        if ( $('#year-2015-ip-simple').prop('checked') ) {
            $('#div-from-customer-ip').before('<div class="nalog-decl"><label id="label-year-2015-ip-simple" for="year-2015-ip-simple"><input id="year-2015-ip-simple" type="checkbox" name="year-2015-ip-simple" checked>Налоговая декларация за 2015 год</label></div>');
        }
        if ( $('#year-2014-ip-simple').prop('checked') ) {
            $('#div-from-customer-ip').before('<div class="nalog-decl"><label id="label-year-2014-ip-simple" for="year-2014-ip-simple"><input id="year-2014-ip-simple" type="checkbox" name="year-2014-ip-simple" checked>Налоговая декларация за 2014 год</label></div>');
        }
    }  
}



