<?php
$this->title = 'Данные счета пользователя';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-success">
    <div class="panel-heading">
        Пользователь
    </div>
    <div class="panel-body">
        <div class="row ">
            <div class="col-lg-12">

                <? foreach ($userEarning as $user_) {
                    ?>
                    <div class="input-group">
                       <span class="input-group-addon" title="Эл почта"><i class="glyphicon glyphicon-user"></i></span>
                       <label class="form-control"> <strong><?= $user_->username ?></strong></label>
                     </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-magnet"></i></span>
                        <label class="form-control">Платежная система: <strong><?= $user_->cache->cache_paysystem ?></strong></label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-magnet"></i>

                        </span>
                        <label class="form-control"> <strong>   Счет:<?= $user_->cache->cache_paysystem ?></strong></label>
                    </div>

                    <hr>

                    <div class="bg bg-success">
                        <div class="col-lg-6 col-md-6">
                            <div class="input-group">
                                <label class="form-control">Собрано XMR на coinhive:</label>
                                <span class="input-group-addon">
                                    <strong>
                                        <?= $user_->earnings->coinhive_hash ?>
                                    </strong>
                                </span>
                            </div>
                            <div class="input-group">
                                <label class="form-control">Собрано XMR на support:</label>
                                <span class="input-group-addon">
                                    <strong>
                                        <?= $user_->earnings->support_hash ?>
                                    </strong>
                                </span>
                            </div>
                            <div class="input-group">
                                <label class="form-control">Собрано всего:</label>
                                <span class="input-group-addon">
                                    <strong>
                                        <?= $user_->earnings->total_hash ?>
                                    </strong>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-group">
                                <label class="form-control"> Монетизировано всего:</label>
                                <span class="input-group-addon">
                                    <strong>
                                        <?= $user_->earnings->total_hash ?>
                                    </strong>
                                </span>
                            </div>
                            <div class="input-group">
                                <label class="form-control">Выплачено:</label>
                                <span class="input-group-addon">
                                    <strong>
                                        <?= $user_->earnings->refferal_hash ?>
                                    </strong>
                                </span>
                            </div>
                            <div class="input-group">
                                <label class="form-control">Скорость:</label>
                                <span class="input-group-addon">
                                    <strong>
                                        <?= $user_->earnings->delta_hash ?>
                                    </strong>
                                </span>
                            </div>
                        </div>
                    </div>




                    <?
                }?>
            </div>
        </div>


    </div> <!--body--->
</div><!---panel--->
