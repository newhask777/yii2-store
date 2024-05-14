<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Order $model */

$this->title = 'Добавление заказа';
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
