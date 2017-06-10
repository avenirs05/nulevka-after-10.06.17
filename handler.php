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

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'domosed365365@gmail.com, fricadelka78@gmail.com';
$subject = "Nulevka.online";


if (isset($_GET['submit-free-consult'])) {    
    echo '<strong>Тема: бесплатная консультация</strong><br>';
    echo 'Имя: ' . $_GET['name-free-consult'] . '<br>';
    echo 'Телефон: ' . $_GET['phone-free-consult'] . '<br>';
    echo 'Email: ' . $_GET['email-free-consult'] . '<br>';
    echo 'Спасибо за заявку!';
    
    $message = '<html><head><title></title></head><body>
                        <strong>Тема: бесплатная консультация</strong><br>' .
                        'Имя: ' . $_GET['name-free-consult'] . '<br>' .
                        'Телефон: ' . $_GET['phone-free-consult'] . '<br>' .
                        'Email: ' . $_GET['email-free-consult'] . '<br></body></html>';  

    mail($to, $subject, $message, $headers);
}


if (isset($_GET['submit-envd-ooo'])) {
    echo '<strong>Тема: ЕНВД - ООО</strong><br>';
    echo 'Имя: ' . $_GET['name-envd-ooo'] . '<br>';
    echo 'Телефон: ' . $_GET['phone-envd-ooo'] . '<br>';
    echo 'Email: ' . $_GET['email-envd-ooo'] . '<br>';
    echo 'Спасибо за заявку!';

    $message = '<html><head><title></title></head><body>
    <strong>Тема: ЕНВД - ООО</strong><br>' .
    'Имя: ' . $_GET['name-envd-ooo'] . '<br>' .
    'Телефон: ' . $_GET['phone-envd-ooo'] . '<br>' .
    'Email: ' . $_GET['email-envd-ooo'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-not-know-ooo'])) {
    echo '<strong>Тема: Не знаю - ООО</strong><br>';
    echo 'Имя: ' . $_GET['name-not-know-ooo'] . '<br>';
    echo 'Телефон: ' . $_GET['phone-not-know-ooo'] . '<br>';
    echo 'Email: ' . $_GET['email-not-know-ooo'] . '<br>';
    echo 'Спасибо за заявку!';

    $message = '<html><head><title></title></head><body>
<strong>Тема: Не знаю - ООО</strong><br>' .
            'Имя: ' . $_GET['name-not-know-ooo'] . '<br>' .
            'Телефон: ' . $_GET['phone-not-know-ooo'] . '<br>' .
            'Email: ' . $_GET['email-not-know-ooo'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
    }


if (isset($_GET['submit-envd-ip'])) {
    echo '<strong>Тема: ЕНВД - ИП</strong><br>';
    echo 'Имя: ' . $_GET['name-envd-ip'] . '<br>';
    echo 'Телефон: ' . $_GET['phone-envd-ip'] . '<br>';
    echo 'Email: ' . $_GET['email-envd-ip'] . '<br>';
    echo 'Спасибо за заявку!';

    $message = '<html><head><title></title></head><body>
    <strong>Тема: ЕНВД - ИП</strong><br>' .
    'Имя: ' . $_GET['name-envd-ip'] . '<br>' .
    'Телефон: ' . $_GET['phone-envd-ip'] . '<br>' .
    'Email: ' . $_GET['email-envd-ip'] . '<br></body></html>';

    mail($to, $subject, $message, $headers);
}

if (isset($_GET['submit-patent-ip'])) {
    echo '<strong>Тема: Патент - ИП</strong><br>';
    echo 'Имя: ' . $_GET['name-patent-ip'] . '<br>';
    echo 'Телефон: ' . $_GET['phone-patent-ip'] . '<br>';
    echo 'Email: ' . $_GET['email-patent-ip'] . '<br>';
    echo 'Спасибо за заявку!';

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
    
?>

</body>
</html>

