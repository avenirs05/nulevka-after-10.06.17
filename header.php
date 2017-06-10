<div class="modal fade" id="modal-free-consult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Заполните данные ниже и мы вас проконсультируем по этому вопросу.</h4>
            </div>
            <div class="modal-body">
                <form action="handler.php" method="get">
                    <div><div>Имя</div><input id="name-envd" type="text" name="name-free-consult"></div>
                    <div><div>Телефон</div><input id="phone-envd" type="text" name="phone-free-consult"></div>
                    <div><div>Email</div><input id="email-envd" type="text" name="email-free-consult"></div>
                    <input type="submit" value="Отправить" name="submit-free-consult">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid header">
    <div class="row">
        <div class="col-md-12 visible-md-block visible-lg-block">
            <a href="index.php"><img src="imgs/logo.png" alt=""></a>
            <div class="right-side">
                <button id="btn-free-consult">Бесплатная консультация</button>
                <div class="cons-phone">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;
                    <span class="phone-digits">8 800 350 84 70</span> 
                </div>
            </div> 
        </div>
    </div>
</div>

