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
                    <h3>Эл почта: <strong><?= $user_->username ?></strong></h3>
                    <h3>Платежная система: <strong><?= $user_->cache->cache_paysystem ?></strong></h3>
                    <h3>Счет №: <strong><?= $user_->cache->cache_number?></strong></h3>
                    <hr>

                    <h5>Собрано XMR на coinhive: <strong><?= $user_->earnings->coinhive_hash ?></strong></h5>
                    <h5>Собрано XMR на support: <strong><?= $user_->earnings->support_hash ?></strong></h5>
                    <h5>Собрано всего: <strong><?= $user_->earnings->total_hash ?></strong></h5>
                    <h5>Монетизировано всего: <strong><?= $user_->earnings->refferal_hash ?></strong></h5>
                    <h5>Выплачено: <strong><?= $user_->earnings->delta_hash ?></strong></h5>





                    <?
                }?>
            </div>
        </div>


    </div> <!--body--->
</div><!---panel--->
