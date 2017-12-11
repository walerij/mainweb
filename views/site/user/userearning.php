<?php
$this->title = 'Информация о пользователе';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-success">
    <div class="panel-heading">
        Пользователь
    </div>
    <div class="panel-body">
        <div class="row ">
            <div class="col-lg-12">

                <? foreach ($AddUser as $user_) {
                ?>
                <h3>email: <strong><?= $user_->email ?></strong></h3>
                <h3>Кошелек: <strong><?= $user_->cashetype ?></strong></h3>
                <h3>Счет: <strong><?= $user_->cashenumber ?></strong></h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 thumbnail jumbotron ">
                            <div>
                                <h3>
                                    <i class="glyphicon glyphicon-flash"></i>
                                </h3>
                                <h4>Скорость<br>
                                    <span class="badge"><?= $user_->earnings->hash_rate ?></span>
                                    H/s</h4>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 thumbnail jumbotron " >
                            <div>
                                <h3>
                                    <i class="glyphicon glyphicon-bitcoin"></i>
                                </h3>
                                <h4>Всего хешей <br>
                                    <span class="badge"><?= $user_->earnings->total_hashes ?></span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 thumbnail jumbotron ">
                            <div>
                                <h3>
                                    <i class="glyphicon glyphicon-euro"></i>
                                </h3>
                                <h4>Total due <br> 
                                    <span class="badge"><?= $user_->earnings->total_due ?></span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 thumbnail jumbotron ">
                            <div>
                                <h3>
                                    <i class="glyphicon glyphicon-rub"></i>
                                </h3>
                                <h4>Total paid <br>
                                    <span class="badge"><?= $user_->earnings->total_paid ?></span>
                                </h4>
                            </div>
                        </div>
                    </div><!---col12--->
                </div><!---row-->
                <?
                }?>
            </div>
        </div>


    </div> <!--body--->
</div><!---panel--->
