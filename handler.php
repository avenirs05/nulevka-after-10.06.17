<?php session_start(); ?>

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
    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="functions.js"></script>
    <script src="events-general.js"></script>

    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45030163 = new Ya.Metrika({ id:45030163, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45030163" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = '2WsMo5ROvu';var d=document;var w=window;function l(){
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->
</head>
<body>

<?php require_once 'modals.php'; ?>
<?php require_once 'header.php'; ?> 
<?php require_once 'functions.php'; ?> 


<div class="container-fluid questions-wrapper">
    <div class="row">
        <div class="col-md-12">
        <form id="form-yandex" method="POST" action="https://money.yandex.ru/quickpay/confirm.xml"> 
            <input type="hidden" name="receiver" value="410015223277202"> 
            <input type="hidden" name="quickpay-form" value="small"> 
            <input type="hidden" name="targets" value="Заказ № <?php echo $_POST['inn']; ?>">
            <div>
                <span id="span-text-sum">Сумма</span><input name="sum" value="<?php echo $_POST['total-amount']; ?>" data-type="number"><span id="span-text-rub">руб.</span>
            </div> 
            <div class="way-of-payment">Выберите способ оплаты:</div>    
            <div class="way-of-payment">
                <label>
                    <input type="radio" name="paymentType" value="AC" checked>
                    <img src="/imgs/bank-card.png" alt="">
                </label>
            </div>
            <div class="way-of-payment">
                <label>
                    <input type="radio" name="paymentType" value="PC">
                    <img src="/imgs/yandex-money.png" alt="">
                </label>
            </div>
            <div class="way-of-payment">
                <label>
                    <input type="radio" name="paymentType" value="MC">
                    <img src="/imgs/mobile-payments.png" alt="">
                </label> 
            </div>
            <input type="submit" value="Оплатить">
        </form>
        </div>
    </div>
</div>

<?php 

d($_POST);

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'info@nulevka.online';
$subject = "Nulevka.online";

if (isset($_GET['submit-free-consult'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: бесплатная консультация</strong><br>' .
                        'Имя: ' . $_GET['name-free-consult'] . '<br>' .
                        'Телефон: ' . $_GET['phone-free-consult'] . '<br>' .
                        'Email: ' . $_GET['email-free-consult'] . '<br></body></html>' .
                        'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];  

    mail($to, $subject, $message, $headers);
    exit();
}

if (isset($_GET['submit-get-bonus'])) {  
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: бонус бухгалтеру</strong><br>' .
                        'Имя: ' . $_GET['name-of-buh'] . '<br>' .
                        'Телефон: ' . $_GET['phone-of-buh'] . '<br>' .
                        'Названия фирм: ' . $_GET['names-of-companies'] . '<br></body></html>' .
                        'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];  

    mail($to, $subject, $message, $headers);
    exit();
}

if (isset($_GET['submit-envd-ooo'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: ЕНВД - ООО</strong><br>' .
    'Имя: ' . $_GET['name-envd-ooo'] . '<br>' .
    'Телефон: ' . $_GET['phone-envd-ooo'] . '<br>' .
    'Email: ' . $_GET['email-envd-ooo'] . '<br></body></html>' .
    'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-not-know-ooo'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: Не знаю - ООО</strong><br>' .
            'Имя: ' . $_GET['name-not-know-ooo'] . '<br>' .
            'Телефон: ' . $_GET['phone-not-know-ooo'] . '<br>' .
            'Email: ' . $_GET['email-not-know-ooo'] . '<br></body></html>' .
            'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-envd-ip'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: ЕНВД - ИП</strong><br>' .
    'Имя: ' . $_GET['name-envd-ip'] . '<br>' .
    'Телефон: ' . $_GET['phone-envd-ip'] . '<br>' .
    'Email: ' . $_GET['email-envd-ip'] . '<br></body></html>' .
    'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-patent-ip'])) {
    $message = '<html><head><title></title></head><body>
    <strong>Тема: Патент - ИП</strong><br>' .
    'Имя: ' . $_GET['name-patent-ip'] . '<br>' .
    'Телефон: ' . $_GET['phone-patent-ip'] . '<br>' .
    'Email: ' . $_GET['email-patent-ip'] . '<br></body></html>' .
    'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];

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
    'Email: ' . $_GET['email-not-know-ip'] . '<br></body></html>' .
    'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'];

    mail($to, $subject, $message, $headers);
}


if (isset($_POST['submit-go-to-pay-ooo'])) {    
    $message = '<html><head><title></title></head><body>
    <b>Кто обращается:</b> ООО<br><br>' .
    isGeneralOrSimpleTaxSystem() .
    findQuart() .
    findUK() .
    showQuestTrans() .
    showBase() .
    showSzvQuest() .
    showCntWorkers() .
    showSnilsDir() .
    showNameOfCompany() .
    showInnOfCompany() .
    showOktmoOfCompany() .
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
    willSendRepWorkersCnt() .
    willSendDeclUsn() .
    showTotalAmount() .
    'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'] .
    '</body></html>';
    
    mail($to, $subject, $message, $headers);  
}


if (isset($_POST['submit-go-to-pay-ip'])) {   
    $message = '<html><head><title></title></head><body>
    <b>Кто обращается:</b> ИП<br><br>' .
    isGeneralOrSimpleTaxSystem() .
    showQuestTrans() .
    showBase() .
    findQuartIp() .
    findYearIfSimpleIp() .
    showNameOfIp() .
    showInnOfIp() .
    showOktmoOfIp() .
    showPhoneOfIP() .
    showEmailOfIp() .
    showPaspSerOfIp() .
    showPaspNumOfIp() .
    showPaspDateOfIssueOfIp() .
    showPaspWhoIssueOfIp() .
    showPaspKpOfIp() .
    '<span style="font-size: 20px;">Мы Вам подготовим:</span><br><br>' .
    willSendDeclNds() .
    willSendDeclNdfl() .
    willSendDeclOne() .
    willSendDeclUsn() .
    'Ip-адрес: ' . $_SERVER['REMOTE_ADDR'] .
    '</body></html>';
    
    mail($to, $subject, $message, $headers);  
}


//ИП Test
// echo isGeneralOrSimpleTaxSystem();
// echo showBase();
// echo showQuestTrans();
// echo findQuartIp();
// echo findYearIfSimpleIp();
// echo showNameOfIp();
// echo showInnOfIp();
// echo showOktmoOfIp();
// echo showPhoneOfIP();
// echo showEmailOfIp();
// echo showPaspSerOfIp();
// echo showPaspNumOfIp();
// echo showPaspDateOfIssueOfIp();
// echo showPaspWhoIssueOfIp();
// echo showPaspKpOfIp();
// echo willSendDeclNds();
// echo willSendDeclNdfl();
// echo willSendDeclUsn();

?>

</body>
</html>
