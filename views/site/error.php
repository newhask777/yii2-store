<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar'); ?>
    <div class="w3l_banner_nav_right">
       <div style="padding: 0 1em;">
           <h1><?= Html::encode($this->title) ?></h1>

           <div class="alert alert-danger">
               <?= nl2br(Html::encode($message)) ?>
           </div>
       </div>

    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->

