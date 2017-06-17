<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no" />

    <title>Оплата</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="functions-company.js"></script>
    <script src="functions-general.js"></script>
    <script src="events-company.js"></script>
    <script src="events-general.js"></script>
</head>
<body>
<?php require_once 'header.php'; ?> 

<div class="container-fluid questions-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="thank-you text-center">
                <span>Спасибо за заявку! С вами свяжутся в ближайшее время!</span>
            </div>
        </div>
    </div>
</div>



<?php 
require_once 'functions.php';
// print_r($_POST);

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'domosed365365@gmail.com, fricadelka78@gmail.com, aceking2032@gmail.com, main@pretenzor.ru';
$subject = "Nulevka.online";

if (isset($_GET['submit-free-consult'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: бесплатная консультация</strong><br>' .
                        'Имя: ' . $_GET['name-free-consult'] . '<br>' .
                        'Телефон: ' . $_GET['phone-free-consult'] . '<br>' .
                        'Email: ' . $_GET['email-free-consult'] . '<br></body></html>';  

    mail($to, $subject, $message, $headers);
    exit();
}

if (isset($_GET['submit-get-bonus'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: бонус бухгалтеру</strong><br>' .
                        'Имя: ' . $_GET['name-of-buh'] . '<br>' .
                        'Телефон: ' . $_GET['phone-of-buh'] . '<br>' .
                        'Названия фирм: ' . $_GET['names-of-companies'] . '<br></body></html>';  

    mail($to, $subject, $message, $headers);
    exit();
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

if (isset($_POST['submit-go-to-pay-ooo'])) {    
    $message = '<html><head><title></title></head><body>
    <b>Кто обращается:</b> ООО<br><br>' .
    isGeneralOrSimpleTaxSystemCompany() .
    findQuart() .
    findUK() .
    showQuestTranz() .
    showBase() .
    showOneFace() .
    showSzvQuest() .
    showCntWorkers() .
    showSnilsDir() .
    showNameOfCompany() .
    showInnOfCompany() .
    showPhoneOfCompany() .
    showEmailOfCompany() .
    '<span style="font-size: 20px;">Мы Вам подготовим:</span><br><br>' .
    willSendDeclOne() .
    willSendDeclNds() .
    willSendDeclProfit() .
    willSendCountIns() .
    willSendCountFss() .
    willSendSzv() .
    willSendBuhRepIfns() .
    willSendBuhRepStat() .
    willSendWorkersCnt() .
    willSendDeclUsn() . 
    showTotalAmount() .
    '</body></html>';
    
    mail($to, $subject, $message, $headers);  
}

if (isset($_POST['submit-go-to-pay-ip'])) {   
    $message = '<html><head><title></title></head><body>
    <b>Кто обращается:</b> ИП<br><br>' .
    isGeneralOrSimpleTaxSystemIp() .
    findQuart() .
    findYearIfSimpleIP() .
    showNameOfIp() .
    showInnOfIp() .
    showPhoneOfIP() .
    showEmailOfIp() .
    showPaspSerOfIp() .
    showPaspNumOfIp() .
    showPaspDateOfIssueOfIp() .
    showPaspWhoIssueOfIp() .
    showPaspKpOfIp() . 
    '<span style="font-size: 20px;">Мы Вам подготовим:</span><br><br>' .
    willSendDeclNdsIp() .    
    willSendDeclNdflIp() .
    willSendDeclYearIp () . 
    showTotalAmount() .
    '</body></html>';
    
    mail($to, $subject, $message, $headers);  
}

?>

</body>
</html>