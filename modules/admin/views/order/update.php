<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Order $model */

$this->title = 'Редактирование заказа №: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Заказ № {$model->id}", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="order-update">


                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>

                </div>
            </div>

        </div>
    </div>
</div>