<?php

function isGeneralOrSimpleTaxSystemCompany () {
    if ($_POST['tax-system'] == 'general') {
        return '<b>Система налогообложения:</b> общая<br><br>';
    } 
    if ($_POST['tax-system'] == 'simple') {
        return '<b>Система налогообложения:</b> упрощенная<br><br>';
    } 
}

function isGeneralOrSimpleTaxSystemIp () {
    if ($_POST['tax-system'] == 'general-ip') {
        return '<b>Система налогообложения:</b> общая<br><br>';
    } 
    if ($_POST['tax-system'] == 'simple-ip') {
        return '<b>Система налогообложения:</b> упрощенная<br><br>';
    } 
}

function findQuart () {
    if (isset($_POST['submit-go-to-pay-ip']) && ($_POST['tax-system'] == 'simple-ip')) {
        return null;
    }
    $str = '<b>Периоды:</b><br>';
    if (isset($_POST['qrt-2-2017'])) { $str = $str . '2-й квартал 2017 года' . '<br>'; }
    if (isset($_POST['qrt-1-2017'])) { $str = $str . '1-й квартал 2017 года' . '<br>'; }
    if (isset($_POST['qrt-4-2016'])) { $str = $str . '4-й квартал 2016 года' . '<br>'; }
    if (isset($_POST['qrt-3-2016'])) { $str = $str . '3-й квартал 2016 года' . '<br>'; }
    if (isset($_POST['qrt-2-2016'])) { $str = $str . '2-й квартал 2016 года' . '<br>'; }
    if (isset($_POST['qrt-1-2016'])) { $str = $str . '1-й квартал 2016 года' . '<br>'; }
    if (isset($_POST['qrt-4-2015'])) { $str = $str . '4-й квартал 2015 года' . '<br>'; }
    if (isset($_POST['qrt-3-2015'])) { $str = $str . '3-й квартал 2015 года' . '<br>'; }
    if (isset($_POST['qrt-2-2015'])) { $str = $str . '2-й квартал 2015 года' . '<br>'; } 
    if (isset($_POST['qrt-1-2015'])) { $str = $str . '1-й квартал 2015 года' . '<br>'; }
    if (isset($_POST['qrt-4-2014'])) { $str = $str . '4-й квартал 2014 года' . '<br>'; }
    if (isset($_POST['qrt-3-2014'])) { $str = $str . '3-й квартал 2014 года' . '<br>'; } 
    if (isset($_POST['qrt-2-2014'])) { $str = $str . '2-й квартал 2014 года' . '<br>'; }
    
    return $str . '<br>';   
}

function findYearIfSimpleIP () {
    if ($_POST['tax-system'] == 'general-ip') {
        return null;
    }
    $str = '<b>Периоды:</b><br>';
    if (isset($_POST['year-2016-ip-simple'])) { $str = $str . '2016 год' . '<br>'; }
    if (isset($_POST['year-2015-ip-simple'])) { $str = $str . '2015 год' . '<br>'; }
    if (isset($_POST['year-2014-ip-simple'])) { $str = $str . '2014 год' . '<br>'; }
    
    return $str . '<br>';   
}

function findUK () {
    $str = '';
    if (isset($_POST['deposit-uk-4-2016'])) {
        if ($_POST['deposit-uk-4-2016'] == 'money-0') {
            $str .= 'УК: Деньги-4-2016<br>';
        } else $str .= 'УК: Имущество-4-2016<br>';
    }
    if (isset($_POST['deposit-uk-4-2015'])) {
        if ($_POST['deposit-uk-4-2015'] == 'money-1') {
            $str .= 'УК: Деньги-4-2015<br>';
        } else $str .= 'УК: Имущество-4-2015<br>';
    }
    if (isset($_POST['deposit-uk-4-2014'])) {
        if ($_POST['deposit-uk-4-2014'] == 'money-2') {
            $str .= 'УК: Деньги-4-2014<br>';
        } else $str .= 'УК: Имущество-4-2014<br>';
    }
    return $str .= '<br>';  
}

function showQuestTranz () {
    if (isset($_POST['tranz'])) {
        if ($_POST['tranz'] == 'tranz-yes') { 
            return '<b>Движения по р/с: </b>да<br><br>';
        }
        if ($_POST['tranz'] == 'tranz-no') { 
            return '<b>Движения по р/с: </b>нет<br><br>'; 
        }  
    } 
}

function showBase () {
    if (isset($_POST['base'])) {
        if ($_POST['base'] == 'base-inc') { 
            return '<b>База налогообложения: </b>Доходы<br><br>';
        }
        if ($_POST['base'] == 'base-inc-spent') { 
            return '<b>База налогообложения: </b>Доходы - Расходы<br><br>'; 
        }  
    } 
}

function showOneFace () {
    if (isset($_POST['one-face'])) {
        if ($_POST['one-face'] == 'one-face-yes') { 
            return '<b>Директор и учредитель в одном лице: </b>Да<br><br>';
        }
        if ($_POST['one-face'] == 'one-face-no') { 
            return '<b>Директор и учредитель в одном лице: </b>Нет<br><br>'; 
        }  
    } 
}

function showSzvQuest () {
    if (isset($_POST['szv-quest'])) {
        if ($_POST['szv-quest'] == 'szv-quest-yes') { 
            return '<b>Сдавали ли Вы форму СЗВ-М: </b>Да<br><br>';
        }
        if ($_POST['szv-quest'] == 'szv-quest-no') { 
            return '<b>Сдавали ли Вы форму СЗВ-М: </b>Нет<br><br>'; 
        }  
    } 
}

function showCntWorkers () {
    if (isset($_POST['cnt-workers-ooo'])) {
        return '<b>Количество работников: </b>' . $_POST['cnt-workers-ooo'] . 
               '<br><br>'; 
    } 
}

function showSnilsDir () {
    if (isset($_POST['snils-dir-ooo'])) {
        return '<b>СНИЛС директора: </b>' . $_POST['snils-dir-ooo'] . 
               '<br><br>'; 
    } 
}

function showNameOfCompany () {
    if (isset($_POST['name-ooo'])) {
        return '<b>Название компании: </b>' . $_POST['name-ooo'] . 
               '<br><br>'; 
    } 
}

function showNameOfIp () {
    if (isset($_POST['fio-ip'])) {
        return '<b>ФИО: </b>' . $_POST['fio-ip'] . 
               '<br><br>'; 
    } 
}

function showInnOfCompany () {
    if (isset($_POST['inn-ooo'])) {
        return '<b>ИНН: </b>' . $_POST['inn-ooo'] . 
               '<br><br>'; 
    } 
}

function showInnOfIp () {
    if (isset($_POST['inn-ip'])) {
        return '<b>ИНН: </b>' . $_POST['inn-ip'] . 
               '<br><br>'; 
    } 
}

function showPhoneOfCompany () {
    if (isset($_POST['phone-ooo'])) {
        return '<b>Телефон: </b>' . $_POST['phone-ooo'] . 
               '<br><br>'; 
    } 
}

function showPhoneOfIP () {
    if (isset($_POST['phone-ip'])) {
        return '<b>Телефон: </b>' . $_POST['phone-ip'] . 
               '<br><br>'; 
    } 
}

function showEmailOfCompany () {
    if (isset($_POST['email-ooo'])) {
        return '<b>Email: </b>' . $_POST['email-ooo'] . 
               '<br><br>'; 
    } 
}

function showEmailOfIp () {
    if (isset($_POST['email-ip'])) {
        return '<b>Email: </b>' . $_POST['email-ip'] . 
               '<br><br>'; 
    } 
}

function showPaspSerOfIp () {
    
    if (isset($_POST['pasp-ser-ip']) && $_POST['tax-system'] == 'general-ip') {
        return '<b>Паспорт серия: </b>' . $_POST['pasp-ser-ip'] . 
               '<br><br>'; 
    } 
}

function showPaspNumOfIp () {
    if (isset($_POST['pasp-num-ip']) && $_POST['tax-system'] == 'general-ip') {
        return '<b>Паспорт номер: </b>' . $_POST['pasp-num-ip'] . 
               '<br><br>'; 
    } 
}

function showPaspDateOfIssueOfIp () {
    if (isset($_POST['pasp-date-issue-ip']) && $_POST['tax-system'] == 'general-ip') {
        return '<b>Дата выдачи: </b>' . $_POST['pasp-date-issue-ip'] . 
               '<br><br>'; 
    } 
}

function showPaspWhoIssueOfIp () {
    if (isset($_POST['email-ip']) && $_POST['tax-system'] == 'general-ip') {
        return '<b>Кем выдан: </b>' . $_POST['pasp-who-issue-ip'] . 
               '<br><br>'; 
    } 
}

function showPaspKpOfIp () {
    if (isset($_POST['pasp-kp-ip']) && $_POST['tax-system'] == 'general-ip') {
        return '<b>Код подразделения: </b>' . $_POST['pasp-kp-ip'] . 
               '<br><br>'; 
    } 
}

function willSendDeclOne () {
    $str = "";    
    if ( isset($_POST['decl-one']) && $_POST['tranz'] == 'tranz-no') {
        $str .= '<b>Единая Упрощенная Декларация: </b>' . '<br><br>';    
        if (isset($_POST['decl-one-final-2-17'])) { $str .= '2-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['decl-one-final-1-17'])) { $str .= '1-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['decl-one-final-4-16'])) { $str .= '4-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-one-final-3-16'])) { $str .= '3-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-one-final-2-16'])) { $str .= '2-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-one-final-1-16'])) { $str .= '1-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-one-final-4-15'])) { $str .= '4-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-one-final-3-15'])) { $str .= '3-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-one-final-2-15'])) { $str .= '2-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-one-final-1-15'])) { $str .= '1-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-one-final-4-14'])) { $str .= '4-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['decl-one-final-3-14'])) { $str .= '3-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['decl-one-final-2-14'])) { $str .= '2-й квартал 2014 года' . '<br>'; }
    
        return $str . '<br>' . '<br>';
    }
 }

function willSendDeclNds () {
    $str = "";
    if (isset($_POST['decl-nds']) && $_POST['tranz'] == 'tranz-yes') {
        $str .= '<b>Налоговая декларация по НДС: </b>' . '<br><br>';
        if (isset($_POST['decl-nds-final-2-17'])) { $str .= '2-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-1-17'])) { $str .= '1-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-4-16'])) { $str .= '4-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-3-16'])) { $str .= '3-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-2-16'])) { $str .= '2-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-1-16'])) { $str .= '1-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-4-15'])) { $str .= '4-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-3-15'])) { $str .= '3-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-2-15'])) { $str .= '2-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-1-15'])) { $str .= '1-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-4-14'])) { $str .= '4-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-3-14'])) { $str .= '3-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['decl-nds-final-2-14'])) { $str .= '2-й квартал 2014 года' . '<br>'; }
        
        return $str . '<br>' . '<br>';
    };
}

function willSendDeclProfit () {
    $str = "";
    if (isset($_POST['decl-profit']) && $_POST['tranz'] == 'tranz-yes') {
        $str .= '<b>Налоговая декларация по налогу на прибыль: </b>' . '<br><br>';
        if (isset($_POST['decl-profit-final-2-17'])) { $str .= '2-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-1-17'])) { $str .= '1-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-4-16'])) { $str .= '4-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-3-16'])) { $str .= '3-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-2-16'])) { $str .= '2-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-1-16'])) { $str .= '1-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-4-15'])) { $str .= '4-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-3-15'])) { $str .= '3-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-2-15'])) { $str .= '2-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-1-15'])) { $str .= '1-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-4-14'])) { $str .= '4-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-3-14'])) { $str .= '3-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['decl-profit-final-2-14'])) { $str .= '2-й квартал 2014 года' . '<br>'; }

        return $str . '<br>' . '<br>';
    };
}

function willSendCountIns () {
    $str = "";
    if (isset($_POST['count-ins'])) {
        $str .= '<b>Расчет по страховым взносам: </b>' . '<br><br>';
        if (isset($_POST['count-ins-final-2-17'])) { $str .= '2-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['count-ins-final-1-17'])) { $str .= '1-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['count-ins-final-4-16'])) { $str .= '4-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-ins-final-3-16'])) { $str .= '3-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-ins-final-2-16'])) { $str .= '2-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-ins-final-1-16'])) { $str .= '1-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-ins-final-4-15'])) { $str .= '4-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-ins-final-3-15'])) { $str .= '3-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-ins-final-2-15'])) { $str .= '2-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-ins-final-1-15'])) { $str .= '1-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-ins-final-4-14'])) { $str .= '4-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['count-ins-final-3-14'])) { $str .= '3-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['count-ins-final-2-14'])) { $str .= '2-й квартал 2014 года' . '<br>'; }

        return $str . '<br>' . '<br>';
    }
}

function willSendCountFss () {
    $str = "";
    if (isset($_POST['count-fss'])) {
        $str .= '<b>Расчетная ведомость в ФСС: </b>' . '<br><br>';
        if (isset($_POST['count-fss-final-2-17'])) { $str .= '2-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['count-fss-final-1-17'])) { $str .= '1-й квартал 2017 года' . '<br>'; }
        if (isset($_POST['count-fss-final-4-16'])) { $str .= '4-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-fss-final-3-16'])) { $str .= '3-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-fss-final-2-16'])) { $str .= '2-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-fss-final-1-16'])) { $str .= '1-й квартал 2016 года' . '<br>'; }
        if (isset($_POST['count-fss-final-4-15'])) { $str .= '4-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-fss-final-3-15'])) { $str .= '3-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-fss-final-2-15'])) { $str .= '2-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-fss-final-1-15'])) { $str .= '1-й квартал 2015 года' . '<br>'; }
        if (isset($_POST['count-fss-final-4-14'])) { $str .= '4-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['count-fss-final-3-14'])) { $str .= '3-й квартал 2014 года' . '<br>'; }
        if (isset($_POST['count-fss-final-2-14'])) { $str .= '2-й квартал 2014 года' . '<br>'; }
        
        return $str . '<br>' . '<br>';
    };
}

function willSendSzv () {
    $str = "";
    if (isset($_POST['szv-m']) && $_POST['one-face'] == 'one-face-no') {
        $str .= '<b>СЗВ-М: </b>' . '<br><br>';
        if (isset($_POST['final-szv-apr-2017'])) { $str .= '<i style="color: #66CCCC">2-й квартал 2017 года</i><br>Апрель<br>'; }
        if (isset($_POST['final-szv-may-2017'])) { $str .= 'Май<br>'; }
        if (isset($_POST['final-szv-jun-2017'])) { $str .= 'Июнь<br><br>'; }

        if (isset($_POST['final-szv-jan-2017'])) { $str .= '<i style="color: #66CCCC">1-й квартал 2017 года</i><br>Январь<br>'; }
        if (isset($_POST['final-szv-feb-2017'])) { $str .= 'Февраль<br>'; }
        if (isset($_POST['final-szv-mar-2017'])) { $str .= 'Март<br><br>'; }

        if (isset($_POST['final-szv-oct-2016'])) { $str .= '<i style="color: #66CCCC">4-й квартал 2016 года</i><br>Октябрь<br>'; }
        if (isset($_POST['final-szv-nov-2016'])) { $str .= 'Ноябрь<br>'; }
        if (isset($_POST['final-szv-dec-2016'])) { $str .= 'Декабрь<br><br>'; }

        if (isset($_POST['final-szv-jul-2016'])) { $str .= '<i style="color: #66CCCC">3-й квартал 2016 года</i><br>Июль<br>'; }
        if (isset($_POST['final-szv-aug-2016'])) { $str .= 'Август<br>'; }
        if (isset($_POST['final-szv-sep-2016'])) { $str .= 'Сентябрь<br><br>'; }

        if (isset($_POST['final-szv-apr-2016'])) { $str .= '<i style="color: #66CCCC">2-й квартал 2016 года</i><br>Апрель<br>'; }
        if (isset($_POST['final-szv-may-2016'])) { $str .= 'Май<br>'; }
        if (isset($_POST['final-szv-jun-2016'])) { $str .= 'Июнь<br><br>'; }

        if (isset($_POST['final-szv-jan-2016'])) { $str .= '<i style="color: #66CCCC">1-й квартал 2016 года</i><br>Январь<br>'; }
        if (isset($_POST['final-szv-feb-2016'])) { $str .= 'Февраль<br>'; }
        if (isset($_POST['final-szv-mar-2016'])) { $str .= 'Март<br><br>'; }

        if (isset($_POST['final-szv-oct-2015'])) { $str .= '<i style="color: #66CCCC">4-й квартал 2015 года</i><br>Октябрь<br>'; }
        if (isset($_POST['final-szv-nov-2015'])) { $str .= 'Ноябрь<br>'; }
        if (isset($_POST['final-szv-dec-2015'])) { $str .= 'Декабрь<br><br>'; }

        if (isset($_POST['final-szv-jul-2015'])) { $str .= '<i style="color: #66CCCC">3-й квартал 2015 года</i><br>Июль<br>'; }
        if (isset($_POST['final-szv-aug-2015'])) { $str .= 'Август<br>'; }
        if (isset($_POST['final-szv-sep-2015'])) { $str .= 'Сентябрь<br><br>'; }

        if (isset($_POST['final-szv-apr-2015'])) { $str .= '<i style="color: #66CCCC">2-й квартал 2015 года</i><br>Апрель<br>'; }
        if (isset($_POST['final-szv-may-2015'])) { $str .= 'Май<br>'; }
        if (isset($_POST['final-szv-jun-2015'])) { $str .= 'Июнь<br><br>'; }

        if (isset($_POST['final-szv-jan-2015'])) { $str .= '<i style="color: #66CCCC">1-й квартал 2015 года</i><br>Январь<br>'; }
        if (isset($_POST['final-szv-feb-2015'])) { $str .= 'Февраль<br>'; }
        if (isset($_POST['final-szv-mar-2015'])) { $str .= 'Март<br><br>'; }

        if (isset($_POST['final-szv-oct-2014'])) { $str .= '<i style="color: #66CCCC">4-й квартал 2014 года</i><br>Октябрь<br>'; }
        if (isset($_POST['final-szv-nov-2014'])) { $str .= 'Ноябрь<br>'; }
        if (isset($_POST['final-szv-dec-2014'])) { $str .= 'Декабрь<br><br>'; }

        if (isset($_POST['final-szv-jul-2014'])) { $str .= '<i style="color: #66CCCC">3-й квартал 2014 года</i><br>Июль<br>'; }
        if (isset($_POST['final-szv-aug-2014'])) { $str .= 'Август<br>'; }
        if (isset($_POST['final-szv-sep-2014'])) { $str .= 'Сентябрь<br><br>'; }

        if (isset($_POST['final-szv-apr-2014'])) { $str .= '<i style="color: #66CCCC">2-й квартал 2014 года</i><br>Апрель<br>'; }
        if (isset($_POST['final-szv-may-2014'])) { $str .= 'Май<br>'; }
        if (isset($_POST['final-szv-jun-2014'])) { $str .= 'Июнь<br><br>'; }
        
        return $str . '<br>' . '<br>';
    };
}

