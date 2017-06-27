<div class="modal fade" id="modal-free-consult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы свяжемся с Вами в течение часа</h4>
            </div>
            <div class="modal-body">
                <form action="handler-free.php" method="get">
                    <div><div>Имя<span class="red">*</span></div><input id="name-envd" type="text" name="name-free-consult" required></div>
                    <div><div>Телефон<span class="red">*</span></div><input id="phone-envd" type="text" name="phone-free-consult" required></div>
                    <div><div>E-mail</div><input id="email-envd" type="text" name="email-free-consult"></div>
                    <input type="submit" value="Отправить" name="submit-free-consult">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-free-consult-mob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы свяжемся с Вами в течение часа</h4>
            </div>
            <div class="modal-body">
                <form action="handler-free.php" method="get">
                    <div><div>Имя<span class="red">*</span></div><input id="name-envd" type="text" name="name-free-consult" required></div>
                    <div><div>Телефон<span class="red">*</span></div><input id="phone-envd" type="text" name="phone-free-consult" required></div>
                    <div><div>E-mail</div><input id="email-envd" type="text" name="email-free-consult"></div>
                    <input type="submit" value="Отправить" name="submit-free-consult">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-free-consult-footer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы свяжемся с Вами в течение часа</h4>
            </div>
            <div class="modal-body">
                <form action="handler-free.php" method="get">
                    <div><div>Имя<span class="red">*</span></div><input id="name-envd" type="text" name="name-free-consult" required></div>
                    <div><div>Телефон<span class="red">*</span></div><input id="phone-envd" type="text" name="phone-free-consult" required></div>
                    <div><div>E-mail</div><input id="email-envd" type="text" name="email-free-consult"></div>
                    <input type="submit" value="Отправить" name="submit-free-consult">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-for-accountants" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Для получения бонуса заполните данные ниже</h4>
            </div>
            <div class="modal-body">
                <form action="handler-free.php" method="get">
                    <div><div>Названия Ваших фирм</div><input id="names-of-companies" type="text" name="names-of-companies"></div>
                    <div><div>Имя<span class="red">*</span></div><input id="name-of-buh" type="text" name="name-of-buh" required></div>
                    <div><div>Телефон<span class="red">*</span></div><input id="phone-of-buh" type="text" name="phone-of-buh" required></div>
                    <input type="submit" value="Отправить" name="submit-get-bonus">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-for-accountants-mob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Для получения бонуса заполните данные ниже</h4>
            </div>
            <div class="modal-body">
                <form action="handler-free.php" method="get">
                    <div><div>Названия Ваших фирм</div><input id="names-of-companies" type="text" name="names-of-companies"></div>
                    <div><div>Имя<span class="red">*</span></div><input id="name-of-buh" type="text" name="name-of-buh" required></div>
                    <div><div>Телефон<span class="red">*</span></div><input id="phone-of-buh" type="text" name="phone-of-buh" required></div>
                    <input type="submit" value="Отправить" name="submit-get-bonus">
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    $path = "clickfrogru_tcp.php";
    include_once($path);
?>

<div class="container-fluid header visible-md-block visible-lg-block">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php"><img src="imgs/logo.png" alt=""></a>
            <div class="right-side">
                <button id="btn-free-consult">Бесплатная консультация</button>
                <div class="cons-phone">
                    <span class="call-free"></span> 
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                    <span class="phone-digits">8 800 22 22 943</span> 
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="container-fluid visible-xs-block visible-sm-block header-mob">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php"><div class="logo-wrapper-mob"></div></a>
            <div class="right-side">
                <span class="call-free-mob"></span>
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                <span class="phone-digits">8 800 22 22 943</span> 
                <!-- <button id="btn-free-consult-mob">Бесплатная консультация</button> -->
            </div> 
        </div>
    </div>
</div>

