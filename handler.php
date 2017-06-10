<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="format-detection" content="telephone=no" />

        <title>Nulevka.online</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet">
        <link href="css/jquery-ui.theme.css" rel="stylesheet">
        <link href="css/jquery-ui.structure.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
<body>
<?php

//print_r($_POST);

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'domosed365365@gmail.com, fricadelka78@gmail.com';
$subject = "Nulevka.online";


if (isset($_GET['submit-free-consult'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: бесплатная консультация</strong><br>' .
                        'Имя: ' . $_GET['name-free-consult'] . '<br>' .
                        'Телефон: ' . $_GET['phone-free-consult'] . '<br>' .
                        'Email: ' . $_GET['email-free-consult'] . '<br></body></html>';  

    mail($to, $subject, $message, $headers);
}


if (isset($_GET['submit-envd-ooo'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: ЕНВД - ООО</strong><br>' .
    'Имя: ' . $_GET['name-envd-ooo'] . '<br>' .
    'Телефон: ' . $_GET['phone-envd-ooo'] . '<br>' .
    'Email: ' . $_GET['email-envd-ooo'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-not-know-ooo'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: Не знаю - ООО</strong><br>' .
            'Имя: ' . $_GET['name-not-know-ooo'] . '<br>' .
            'Телефон: ' . $_GET['phone-not-know-ooo'] . '<br>' .
            'Email: ' . $_GET['email-not-know-ooo'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
    }


if (isset($_GET['submit-envd-ip'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: ЕНВД - ИП</strong><br>' .
    'Имя: ' . $_GET['name-envd-ip'] . '<br>' .
    'Телефон: ' . $_GET['phone-envd-ip'] . '<br>' .
    'Email: ' . $_GET['email-envd-ip'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-patent-ip'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: Патент - ИП</strong><br>' .
    'Имя: ' . $_GET['name-patent-ip'] . '<br>' .
    'Телефон: ' . $_GET['phone-patent-ip'] . '<br>' .
    'Email: ' . $_GET['email-patent-ip'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
}


if (isset($_GET['submit-not-know-ip'])) {
    echo '<strong>Тема: Не знаю - ИП</strong><br>';
    echo 'Имя: ' . $_GET['name-not-know-ip'] . '<br>';
    echo 'Телефон: ' . $_GET['phone-not-know-ip'] . '<br>';
    echo 'Email: ' . $_GET['email-not-know-ip'] . '<br>';
    echo 'Спасибо за заявку!';

    $message = '<html><head><title></title></head><body>
    <strong>Тема: Не знаю - ИП</strong><br>' .
    'Имя: ' . $_GET['name-not-know-ip'] . '<br>' .
    'Телефон: ' . $_GET['phone-not-know-ip'] . '<br>' .
    'Email: ' . $_GET['email-not-know-ip'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
}


function findQuart () {
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

function showQuestOOO () {
    if ($_POST['tranz'] == 'tranz-yes') { echo '<b>Движения по р/с: </b>да<br>'; }
    if ($_POST['tranz'] == 'tranz-no') { echo '<b>Движения по р/с: </b>нет<br>'; }    
}

function isGeneralOrSimpleTaxSystem () {
    if ($_POST['tax-system'] == 'general') {
        return '<b>Система налогообложения:</b> общая<br><br>';
    } else return '<b>Система налогообложения:</b> упрощенная<br><br>';
}

if (isset($_POST['submit-go-to-pay-ooo'])) {
    echo 'Спасибо за заявку!'; 
    
    $message = '<html><head><title></title></head><body>
    <b>Кто обращается:</b> ООО<br><br>' .
    isGeneralOrSimpleTaxSystem() .
    findQuart() .
    findUK () .

    '</body></html>';

    mail($to, $subject, $message, $headers);
    
//        echo '<b>Кто обращается:</b> ООО<br><br>';
//        if ($_POST['tax-system'] == 'general') {        
//        echo '<b>Система налогообложения:</b> общая<br><br>';
//        findQuart();
//        findUK ();
//    }
//    showQuestOOO ();    
}
    

?>
    


</body>
</html>

