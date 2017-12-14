<?php

use yii\helpers\Url;

$this->title = 'История платежей';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        Пользователь
    </div>
    <div class="panel-body">
        <div class="row ">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php
                        foreach ($AddUser as $user_) {
                            $url = Url::to(['/site/addpayment/', 'id' => $user_->id]);
                            ?>
                            <h3>email: <strong><?= $user_->username ?></strong></h3>
                            <h3>Кошелек: <strong><?= $user_->cache->cache_paysystem?></strong></h3>
                            <h3>Счет: <strong><?= $user_->cache->cache_number ?></strong></h3>
                        </div>
                        <div class="col-lg-6 col-md-6 jumbotron">
                            <a class="btn btn-info btn-block" href="<?= $url ?>" title="Добавить платеж">
                                <i class="glyphicon glyphicon-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover">
                                <tr>

                                    <th>Дата платежа</th>
                                    <th>Сумма платежа</th>
                                </tr>

                              <?php foreach ($user_->payment as $pay) { ?>
                                    <tr>
                                        <td><?= $pay->date_pay ?></td>
                                        <td><?= $pay->sum_pay ?></td>
                                    </tr>
                            <? } ?>

                        </table>
                    </div>
                </div><!---row-->
                <?
                }?>
            </div>
        </div>


    </div> <!--body--->
</div><!---panel--->

