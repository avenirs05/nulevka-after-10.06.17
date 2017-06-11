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
    
    return $str;   
}

function findYearIfSimpleIP () {
    $str = '<b>Периоды:</b><br>';
    if (isset($_POST['year-2016-ip-simple'])) { $str = $str . '2016 год' . '<br>'; }
    if (isset($_POST['year-2015-ip-simple'])) { $str = $str . '2015 год' . '<br>'; }
    if (isset($_POST['year-2014-ip-simple'])) { $str = $str . '2014 год' . '<br>'; }
    
    return $str;   
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

function showInnOfCompany () {
    if (isset($_POST['inn-ooo'])) {
        return '<b>ИНН: </b>' . $_POST['inn-ooo'] . 
               '<br><br>'; 
    } 
}

function showPhoneOfCompany () {
    if (isset($_POST['phone-ooo'])) {
        return '<b>Телефон: </b>' . $_POST['phone-ooo'] . 
               '<br><br>'; 
    } 
}

function showEmailOfCompany () {
    if (isset($_POST['email-ooo'])) {
        return '<b>Email: </b>' . $_POST['email-ooo'] . 
               '<br><br>'; 
    } 
}

