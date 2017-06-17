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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="functions-company.js"></script>
    <script src="functions-person.js"></script>
    <script src="functions-general.js"></script>
    <script src="events-company.js"></script>
    <script src="events-person.js"></script>
    <script src="events-general.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>

<?php require_once 'header.php'; ?>

<div class="container-fluid main-screen visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <h1>Составление и сдача нулевой отчетности в 3 клика!</h1>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Нулевая отчетность вашей фирмы попадает в налоговую в течение 24 часов</h3>
        </div> 
    </div>
    <div class="row adv-ipad">
        <div class="col-md-5">
            <ul>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Все регионы России</span></li>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Займет не более 120 секунд</span></li>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Не нужно платить зарплату бухгалтеру</span></li>
                <li><img src="imgs/bullit-47x67.png" alt=""><span>Около 2 000 довольных клиентов</span></li>  
            </ul>            
        </div> 
        <div class="col-md-7">
            <div class="ipad">
                <a href="company.php" target="_blank"><button class="btn-inside-ipad-1">Сделать нулевку для ООО</button></a>
                <a href="person.php" target="_blank"><button class="btn-inside-ipad-1 btn-inside-ipad-2">Сделать нулевку для ИП</button></a>
                <a href="#" target="_blank"><button class="btn-inside-ipad-1 btn-inside-ipad-3">Сделать нулевку для ИП</button></a>
            </div>         
        </div>
    </div>
</div>

<div class="container-fluid for-whom">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Для кого наш сервис</h2>
                <img src="imgs/crowd-for-whom.jpg" width="400" alt="">            
                <p>•  Для юридических лиц и индивидуальных предпринимателей, которые только начинают свой бизнес и еще не имеют поступлений на расчетный счет или в кассу.</p>
                <p>• Для компаний и ИП, которые временно приостановили свою деятельность, но планируют ее возобновить в будущем</p>
                <p>• Для бухгалтеров, которые в отчетный период не успевают сдавать отчетность по всем своим организациям</p>          
        </div>
    </div>
</div>

<div class="container-fluid why-us">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Почему нулевую отчетность нужно отправлять через нас?</h2>            
            <div class="advantages-wrapper">
                <div class="advantage-item">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    <span  class="advantage-item-text">Это займет не более 120 секунд вашего времени</span> 
                </div>
                <div class="advantage-item">
                    <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> 
                    <span class="advantage-item-text">Не нужно платить зарплату бухгалтеру</span>
                </div>
                <div class="advantage-item">
                    <span class="glyphicon glyphicon-plane" aria-hidden="true"></span> 
                    <span class="advantage-item-text">«Нулевка» попадет в налоговую за 24 часа*</span>
                </div>
                <div class="advantage-item">
                    <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                    <span class="advantage-item-text">Мы напомним вам о сдаче отчетности в следующем квартале</span>
                </div>
                <div id="only-for-companies">
                    <span>*применимо только для юридических лиц</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid how-it-works">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Как это работает?</h2>       
            <div class="how-it-works-wrapper">
                <div class="for-ooo">
                    <h4 class="text-center">Для юридических лиц</h4>
                    <p>1. Отправьте <a href="company.php" target="_blank">заявку</a> на сдачу «нулевки».</p> 
                    <p>2. Оплатите выбранные услуги любым удобным способом. <a onclick="return false;" href="#"  data-toggle="tooltip" data-placement="right" title="Банковской картой, Яндекс-деньги, С баланса мобильного, Qiwi"><span class="glyphicon glyphicon-question-sign"></span></a></p> 
                    <p>3. Подпишите и отправьте нам любым способом доверенность, которую вы получите на E-mail. <a onclick="return false;" href="#" data-toggle="tooltip" data-placement="right" title="Email, WhatsApp, Viber, Telegram"><span class="glyphicon glyphicon-question-sign"></span></a></p> 
                    <p>4. Получите отчет о сдаче вашей «нулевки» в течение 24 часов! <a onclick="return false;" href="#" data-toggle="tooltip" data-placement="right" title='ФЗ "Об электронной подписи", ФЗ "О бухгалтерском учете", Налоговый кодекс РФ (ст. 80)'><span class="glyphicon glyphicon-question-sign"></span></a></p>         
                </div>
                <div class="for-ip">
                    <h4 class="text-center">Для ИП</h4> 
                    <p>1. Отправьте <a href="person.php" target="_blank">заявку</a> на составление «нулевки».</p> 
                    <p>2. Оплатите выбранные услуги любым удобным способом. <a onclick="return false;" href="#"  data-toggle="tooltip" data-placement="right" title="Банковской картой, Яндекс-деньги, С баланса мобильного, Qiwi"><span class="glyphicon glyphicon-question-sign"></span></a></p>
                    <p>3. Получите составленную отчетность на свой e-mail в течение 24 часов.</p> 
                    <p>4. Подпишите и подайте в налоговую в соответствии с прилагаемой инструкцией.</p>         
                </div>
            </div>
        </div>
    </div>
</div>












<!-- <script>
	jQuery(function () {

    	var location = window.location.href;		
 		jQuery('.menu a').each(function () {				
        	var link = jQuery(this).attr('href');			
        	if (location == link) { 				
            	jQuery(this).addClass('change-color');      
            }
    	});
			
	});
</script> -->

</body>
</html>