<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no" />
	
    <title>Сдать отчетность для ИП</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/jquery-ui.theme.css" rel="stylesheet">
    <link href="css/jquery-ui.structure.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="functions-general.js"></script>
    <script src="functions-person.js"></script>
    <script src="events-person.js"></script>
    <script src="events-general.js"></script>


<script>

$(function () {   
    

});

</script>    
    <style>

    </style>
</head>
<body>

    <div class="modal fade" id="modal-envd-ip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Согласно письму Минфина РФ от 01.01.2011г. № 777 нулевая отчетность по ЕНВД не предусмотрена. Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
                </div>
                <div class="modal-body">
                    <form method="get" action="handler.php">
                        <div><div>Имя</div><input id="name-envd" type="text" name="name-envd-ip"></div>
                        <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-envd-ip"></div>
                        <div><div>Email</div><input id="email-envd" type="text" name="email-envd-ip"></div>
                        <input type="submit" value="Отправить" name="submit-envd-ip">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-patent-ip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Согласно письму Минфина РФ от 01.01.2011г. № 777 при использовании данной системы налогообложения нулевая отчетность не предусмотрена. Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
                </div>
                <div class="modal-body">
                    <form method="get" action="handler.php">
                        <div><div>Имя</div><input id="name-envd" type="text" name="name-patent-ip"></div>
                        <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-patent-ip"></div>
                        <div><div>Email</div><input id="email-envd" type="text" name="email-patent-ip"></div>
                        <input type="submit" value="Отправить" name="submit-patent-ip">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-not-know-ip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
                </div>
                <div class="modal-body">
                    <form method="get" action="handler.php">
                        <div><div>Имя</div><input id="name-envd" type="text" name="name-not-know-ip"></div>
                        <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-not-know-ip"></div>
                        <div><div>Email</div><input id="email-envd" type="text" name="email-not-know-ip"></div>
                        <input type="submit" value="Отправить" name="submit-not-know-ip">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'header.php'; ?> 

<div class="container-fluid questions-wrapper">
<div class="row">
<div class="col-md-12 visible-md-block visible-lg-block">

<form id="form-tax-system" action="handler.php" method="post" novalidate>
    <div id="div-tax-system">
        <span id="span-choice-tax-system" class="question" >Выберите систему налогообложения:</span><br>
        <label id="label-choice-tax-system" class="tax-system-answer" for="simple-ip"><input id="simple-ip" type="radio" name="tax-system" value="simple-ip">Упрощенная</label><br>
        <div style="display: none" class="tax-answer-1"></div>
        <div id="choice-years" style="display: none">
            <i><a id="years-simple" href="#" onclick="return false;">Выберите период</a></i><br>
            <div id="div-years">
                <div><label for="year-2016-ip-simple"><input id="year-2016-ip-simple" type="checkbox" name="year-2016-ip-simple">2016 год</label></div>
                <div><label for="year-2015-ip-simple"><input id="year-2015-ip-simple" type="checkbox" name="year-2015-ip-simple">2015 год</label></div>      
                <div><label for="year-2014-ip-simple"><input id="year-2014-ip-simple" type="checkbox" name="year-2014-ip-simple">2014 год</label></div>
            </div> 
        </div>    
        <label class="tax-system-answer" for="general-ip"><input id="general-ip" type="radio" name="tax-system" value="general-ip">Общая</label><br>        
        <div style="display: none" class="tax-answer-0"></div>  
        <div id="choice-quarters" style="display: none"><i><span>Выберите период</span></i><br>
            <div><label for="qrt-2-2017"><input id="qrt-2-2017" type="checkbox" name="qrt-2-2017" checked>2-й квартал 2017 года</label></div>            
            <a id="another-periods" href="#" onclick="return false;">Другие периоды</a><br>
            <div id="first-another-period"><label style="display: none;" for="qrt-1-2017"><input id="qrt-1-2017" type="checkbox" name="qrt-1-2017">1-й квартал 2017 года</label></div>
            <div><label style="display: none;" for="qrt-4-2016"><input id="qrt-4-2016" type="checkbox" name="qrt-4-2016">4-й квартал 2016 года</label></div>      
            <div><label style="display: none;" for="qrt-3-2016"><input id="qrt-3-2016" type="checkbox" name="qrt-3-2016">3-й квартал 2016 года</label></div>
            <div><label style="display: none;" for="qrt-2-2016"><input id="qrt-2-2016" type="checkbox" name="qrt-2-2016">2-й квартал 2016 года</label></div>
            <div><label style="display: none;" for="qrt-1-2016"><input id="qrt-1-2016" type="checkbox" name="qrt-1-2016">1-й квартал 2016 года</label></div>
            <div><label style="display: none;" for="qrt-4-2015"><input id="qrt-4-2015" type="checkbox" name="qrt-4-2015">4-й квартал 2015 года</label></div>     
            <div><label style="display: none;" for="qrt-3-2015"><input id="qrt-3-2015" type="checkbox" name="qrt-3-2015">3-й квартал 2015 года</label></div>
            <div><label style="display: none;" for="qrt-2-2015"><input id="qrt-2-2015" type="checkbox" name="qrt-2-2015">2-й квартал 2015 года</label></div>
            <div><label style="display: none;" for="qrt-1-2015"><input id="qrt-1-2015" type="checkbox" name="qrt-1-2015">1-й квартал 2015 года</label></div>
            <div><label style="display: none;" for="qrt-4-2014"><input id="qrt-4-2014" type="checkbox" name="qrt-4-2014">4-й квартал 2014 года</label></div>       
            <div><label style="display: none;" for="qrt-3-2014"><input id="qrt-3-2014" type="checkbox" name="qrt-3-2014">3-й квартал 2014 года</label></div>
            <div><label style="display: none;" for="qrt-2-2014"><input id="qrt-2-2014" type="checkbox" name="qrt-2-2014">2-й квартал 2014 года</label></div>
        </div>  
      
        <label class="tax-system-answer" for="envd-ip"><input id="envd-ip" type="radio" name="tax-system" value="envd-ip">ЕНВД<br></label><br>
        <div style="display: none" class="tax-answer-2"></div>    

        <label class="tax-system-answer" for="patent-ip"><input id="patent-ip" type="radio" name="tax-system" value="patent-ip">Патент</label><br>
        <div style="display: none" class="tax-answer-3"></div>    

        <label class="tax-system-answer" for="not-know-ip"><input id="not-know-ip" type="radio" name="tax-system" value="not-know-ip">Я не знаю</label><br>
        <div style="display: none" class="tax-answer-4"></div><br>

        <button id="btn-next-tax-system-ip" style="display: none;" onclick="return false;">Дальше</button>
    </div>
    
    <div id="div-will-send" style="display: none">
        <span id="span-we-will-send">Мы за Вас подготовим:</span>
        <div style="display: none;">
            <label for='decl-nds'><input id='decl-nds' type='checkbox' name='decl-nds' checked><strong>Налоговая декларация по НДС</strong></label>
        </div>
        <div style="display: none;">
            <label for='decl-profit'><input id='decl-profit' type='checkbox' name='decl-profit' checked><strong>Налоговая декларация по налогу на прибыль</strong></label>
        </div>
        <div style="display: none;">
            <label for='decl-one'><input id='decl-one' type='checkbox' name='decl-one' checked><strong>Единая упрощенная декларация</strong></label>
        </div>
        <div style="display: none;">
            <label for='count-ins'><input id='count-ins' type='checkbox' name='count-ins' checked><strong>Расчет по страховым взносам</strong></label>
        </div>
        <div style="display: none;">
            <label for='count-fss'><input id='count-fss' type='checkbox' name='count-fss' checked><strong>Расчетная ведомость в ФСС</strong></label>
        </div>
        <div style="display: none;">
            <label for='szv-m'><input id='szv-m' type='checkbox' name='szv-m' checked><strong>СЗВ-М</strong></label>
        </div>
    </div>

    <div id="div-from-customer-ip" style="display: none;">
        <div><div>ФИО</div><input id="fio-ip" type="text" name="fio-ip"></div>
        <div><div>Инн</div><input id="inn-ip" type="text" name="inn-ip"></div>
        <div><div>Телефон</div><input id="phone-ip" type="text" name="phone-ip"></div>
        <div><div>Email</div><input id="email-ip" type="text" name="email-ip"></div>
        <div><div>Паспорт серия</div><input id="pasp-ser-ip" type="text" name="pasp-ser-ip"></div>
        <div><div>Паспорт №</div><input id="pasp-num-ip" type="text" name="pasp-num-ip"></div>
        <div><div>Дата выдачи</div><input id="pasp-date-issue-ip" type="text" name="pasp-date-issue-ip"></div>
        <div><div>Кем выдан</div><input id="pasp-who-issue-ip" type="text" name="pasp-who-issue-ip"></div>
        <div><div>Код подразделения</div><input id="pasp-kp-ip" type="text" name="pasp-kp-ip"></div>        
        <button id="btn-back-will-send-ip" onclick="return false;">Назад</button>
        <input type="submit" value="Перейти к оплате" name="submit-go-to-pay-ip">
    </div>

    <div id="dialog-callback" title="" style="display: none;">
        <form action="">
                <span class="title-input">Имя:</span>
                <input type="text" name="name" placeholder="Введите имя">
                <span class="title-input">Телефон: <span class="red">*</span></span>
                <input type="text" name="phone" placeholder="Введите номер телефона" required>
                <input type="submit" value="Отправить">
        </form>
    </div>

</form>
</div>
</div>
</div>

</body>
</html>