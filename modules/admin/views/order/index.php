<?php

use app\modules\admin\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Список заказов';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
            </div>

            <div class="box-body">
                <div class="order-index">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            //'created_at',
                            [
                                'attribute' => 'created_at',
                                'format' => ['datetime', 'php:d M Y H:i']
                            ],
                            //'updated_at',
                            'qty',
                            'total',
//                            'status',
                            [
                                'attribute' => 'status',
                                'value' => function($data){
                                    return $data->status ?  '<span class="text-green">Завершен</span>':'<span class="text-red">Новый</span>';
                                },
                                'format' => 'raw'
                            ],
                            'name',
                            'email:email',
                            'phone',
                            'address',
                            //'note:ntext',
                            [
                                'class' => ActionColumn::class,
                                'header' => 'Действие',
                                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                            ],
                        ],
                    ]); ?>


                </div>
            </div>


    </div>
</div>


