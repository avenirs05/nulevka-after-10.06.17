<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="format-detection" content="telephone=no" />

    <title>Сдать отчетность для ООО</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="functions-company.js"></script>
    <script src="functions-general.js"></script>
    <script src="events-general.js"></script>
    <script src="events-company.js"></script>
</head>
<body>

<div class="modal fade" id="modal-envd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Представление нулевых деклараций по единому налогу на вмененный доход главой 26.3 НК РФ не предусмотрено (Определение ВАС РФ от 26.02.2014 г. № ВАС-1903/14). Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
            </div>
            <div class="modal-body">
                <form action="handler.php" method="get">
                    <div><div>Имя</div><input type="text" id="name-envd" name="name-envd-ooo"></div>
                    <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-envd-ooo"></div>
                    <div><div>Email</div><input id="email-envd" type="text" name="email-envd-ooo"></div>
                    <input type="submit" value="Отправить" name="submit-envd-ooo">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-not-know" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
            </div>
            <div class="modal-body">
                <form action="handler.php" method="get">
                    <div><div>Имя</div><input id="name-envd" type="text" name="name-not-know-ooo"></div>
                    <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-not-know-ooo"></div>
                    <div><div>Email</div><input id="email-envd" type="text" name="email-not-know-ooo"></div>
                    <input type="submit" value="Отправить" name="submit-not-know-ooo">
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
        <span class="question">Выберите систему налогообложения:</span><br>        
        <label id="label-choice-tax-system" class="tax-system-answer" for="general"><input id="general" type="radio" name="tax-system" value="general">Общая</label><br>
        <div style="display: none" class="tax-answer-0"></div>  
        <div id="choice-quarters" style="display: none"><i><span>Выберите период</span></i><br>
            <div data-is-four="no" class="div-quarters"><label for="qrt-2-2017"><input id="qrt-2-2017" type="checkbox" name="qrt-2-2017" checked>2-й квартал 2017 года</label></div>            
            <a id="another-periods" href="#" onclick="return false;">Другие периоды</a><br>
            <div data-is-four="no" class="div-quarters" id="first-another-period"><label style="display: none;" for="qrt-1-2017"><input id="qrt-1-2017" type="checkbox" name="qrt-1-2017">1-й квартал 2017 года</label></div>
            <div data-is-four="yes" class="div-quarters"><label style="display: none;" for="qrt-4-2016"><input id="qrt-4-2016" type="checkbox" name="qrt-4-2016">4-й квартал 2016 года</label></div>
            <p style="display: none" id="uk-question-0"><strong>Как внесен уставной капитал?</strong><br>
                <label for="money-0"><input id="money-0" type="radio" name="deposit-uk-4-2016" value="money-0">Деньгами</label><br>
                <label for="things-0"><input id="things-0" type="radio" name="deposit-uk-4-2016" value="things-0">Имуществом</label><br>
            </p>        
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-3-2016"><input id="qrt-3-2016" type="checkbox" name="qrt-3-2016">3-й квартал 2016 года</label></div>
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-2-2016"><input id="qrt-2-2016" type="checkbox" name="qrt-2-2016">2-й квартал 2016 года</label></div>
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-1-2016"><input id="qrt-1-2016" type="checkbox" name="qrt-1-2016">1-й квартал 2016 года</label></div>
            <div data-is-four="yes" class="div-quarters"><label style="display: none;" for="qrt-4-2015"><input id="qrt-4-2015" type="checkbox" name="qrt-4-2015">4-й квартал 2015 года</label></div>
            <p style="display: none" id="uk-question-1"><strong>Как внесен УК?</strong><br>
                <label for="money-1"><input id="money-1" type="radio" name="deposit-uk-4-2015" value="money-1">Деньгами</label><br>
                <label for="things-1"><input id="things-1" type="radio" name="deposit-uk-4-2015" value="things-1">Имуществом</label><br>
            </p>        
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-3-2015"><input id="qrt-3-2015" type="checkbox" name="qrt-3-2015">3-й квартал 2015 года</label></div>
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-2-2015"><input id="qrt-2-2015" type="checkbox" name="qrt-2-2015">2-й квартал 2015 года</label></div>
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-1-2015"><input id="qrt-1-2015" type="checkbox" name="qrt-1-2015">1-й квартал 2015 года</label></div>
            <div data-is-four="yes" class="div-quarters"><label style="display: none;" for="qrt-4-2014"><input id="qrt-4-2014" type="checkbox" name="qrt-4-2014">4-й квартал 2014 года</label></div>
            <p style="display: none" id="uk-question-2"><strong>Как внесен УК?</strong><br>
                <label for="money-2"><input id="money-2" type="radio" name="deposit-uk-4-2014" value="money-2">Деньгами</label><br>
                <label for="things-2"><input id="things-2" type="radio" name="deposit-uk-4-2014" value="things-2">Имуществом</label><br>
            </p>        
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-3-2014"><input id="qrt-3-2014" type="checkbox" name="qrt-3-2014">3-й квартал 2014 года</label></div>
            <div data-is-four="no" class="div-quarters"><label style="display: none;" for="qrt-2-2014"><input id="qrt-2-2014" type="checkbox" name="qrt-2-2014">2-й квартал 2014 года</label></div>
        </div>  
        <label class="tax-system-answer" for="simple"><input id="simple" type="radio" name="tax-system" value="simple">Упрощенная</label><br>
        <div style="display: none" class="tax-answer-1"></div>        
        <label class="tax-system-answer" for="envd"><input id="envd" type="radio" name="tax-system" value="envd">ЕНВД<br></label><br>
        <div style="display: none" class="tax-answer-2">Контент если выбрано ЕНВД</div>        
        <label class="tax-system-answer" for="not-know"><input id="not-know" type="radio" name="tax-system" value="not-know">Я не знаю</label><br>
        <div style="display: none" class="tax-answer-3">Контент если выбрано Я не знаю какая система налоговая</div>        
        <button id="btn-next-tax-system" style="display: none;" onclick="return false;">Дальше</button>
    </div>
    
    <div id="div-tranz" style="display: none">
        <span class="question">Были ли движения по расчетному счету?</span><br>
        <label id="label-tranz-yes" for="tranz-yes"><input id="tranz-yes" type="radio" name="tranz" value="tranz-yes">Да</label><br>
        <label id="label-tranz-no" for="tranz-no"><input id="tranz-no" type="radio" name="tranz" value="tranz-no">Нет</label><br>
        <button id="btn-back-tranz" onclick="return false;">Назад</button> 
        <button id="btn-next-tranz" style="display: none;" onclick="return false;">Дальше</button> 
    </div>

    <div id="div-base" style="display: none">
        <span class="question">Какая у Вас база налогообложения?</span><br>
        <label id="label-base-inc" for="base-inc"><input id="base-inc" type="radio" name="base" value="base-inc">Доходы</label><br>
        <label id="label-base-inc-spent" for="base-inc-spent"><input id="base-inc-spent" type="radio" name="base" value="base-inc-spent">Доходы минус расходы</label><br>
        <button id="btn-back-base" onclick="return false;">Назад</button> 
        <button id="btn-next-base" style="display: none;" onclick="return false;">Дальше</button> 
    </div>

    <div id="div-one-face" style="display: none">
        <span class="question">У Вас единственный учредитель и он же директор (генеральный директор)?</span><br>        
        <label id="label-one-face-yes" for="one-face-yes"><input id="one-face-yes" type="radio" name="one-face" value="one-face-yes">Да</label><br>
        <label id="label-one-face-no" for="one-face-no"><input id="one-face-no" type="radio" name="one-face" value="one-face-no">Нет</label><br>
        <button id="btn-back-one-face" onclick="return false;">Назад</button>
        <button id="btn-next-one-face" style="display: none;" onclick="return false;">Дальше</button>  
    </div>

    <div id="div-szv-quest" style="display: none">
        <span class="question">Сдавали ли Вы форму СЗВ-М?</span><br>        
        <label id="label-szv-quest-yes" for="szv-quest-yes"><input id="szv-quest-yes" type="radio" name="szv-quest" value="szv-quest-yes">Да</label><br>
        <label id="label-szv-quest-no" for="szv-quest-no"><input id="szv-quest-no" type="radio" name="szv-quest" value="szv-quest-no">Нет</label><br>
        <div id="choice-months" style="display: none">
            <i><span>Выберите период, за который сдавался отчет:</span></i><br>
        </div> 
        <button id="btn-back-szv-quest" onclick="return false;">Назад</button>
        <button id="btn-next-szv-quest" style="display: none;" onclick="return false;" >Дальше</button>  
    </div>

    <div id="div-final-sum" style="display: none;">
        <span id="final-sum-text" style="display: none;">Итоговая сумма составляет 
            <span id="final-sum-digits">1 499</span> руб. 
        </span>
        <span id="discount-text" style="display: none;">Скидка составляет 
            <span id="discount-digits"></span> руб.
        </span>
    </div>

    <div id="div-will-send" style="display: none">
        <span id="span-we-will-send">Мы за Вас подготовим</span>
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

    <div id="div-from-customer" style="display: none;">
        <input id="total-amount" type="hidden" name="total-amount" value="122">
        <div style="display: none;"><div>Количество работников</div><input id="cnt-workers" type="text" name="cnt-workers-ooo"></div>
        <div style="display: none;"><div>СНИЛС директора</div><input id="snils-dir" type="text" name="snils-dir-ooo"></div>
        <div><div>Название компании</div><input id="company-name" type="text" name="name-ooo"></div>
        <div><div>Инн</div><input id="inn" type="text" name="inn-ooo"></div>
        <div><div>Телефон</div><input id="phone" type="text" name="phone-ooo"></div>
        <div><div>Email</div><input id="email" type="text" name="email-ooo"></div>
        <button id="btn-back-will-send" onclick="return false;">Назад</button>
        <input id="submit-go-to-pay-ooo" type="submit" value="Перейти к оплате" name="submit-go-to-pay-ooo">
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