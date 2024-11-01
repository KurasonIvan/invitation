<?php
/* @var $this yii\web\View */

use yii\bootstrap5\Html;
$this->title = 'Билеты';
?>

<div class="wrap main-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 date-block">
                <h5 class="">
                    15 ноября 2024 г.<br>10:32 мск
                </h5>
            </div>
            <div class="col-lg-6 place-block">
                <h5 class="">
                    г. Краснодар,<br>Привокзальная площадь, 1
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 name-block">
                <h1 class="">
                    Я знал, что Вы не сможете отказаться!
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-block">
                <p class="">
                    Сохраните на всякий случай билеты, <br>
                    и ожидайте дальнейших указаний.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ">
                <?= Html::a(
                    'Билет ко мне',
                    ['/site/open-ticket'],
                    [
                        'class' => 'btn btn-outline-warning',
                        'target' => '_blank'
                    ]
                ) ?>
            </div>
            <div class="col-lg-6">
                <?= Html::a(
                    'Билет обратно',
                    ['/site/open-return-ticket'],
                    [
                        'class' => 'btn btn-outline-warning',
                        'target' => '_blank'
                    ]
                ) ?>
            </div>
        </div>
    </div>
</div>