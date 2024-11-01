<?php
/* @var $this yii\web\View */

use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Приглашение';
?>

<div class="wrap main-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 date-block">
                <h5 class="">
                    19 октября 2024 г.<br>10:32 мск
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
                    Надежда Геннадьевна,
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-block">
                <p class="">
                    очень хочется увидеть Вас снова.
                    <br>Прошу, не откажите во встрече.
                    <br>С нетерпением буду надеяться и ждать Вас
                    <br>на уже родном мне вокзале.
                    <br><br>всегда Ваш, Иван Андреевич И.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ">
                <?= Html::a(
                    'Принять',
                    ['site/tickets'],
                    [
                        'class' => 'btn btn-outline-warning',
                    ]
                ) ?>
            </div>
            <div class="col-lg-6">
                <?= Html::a(
                    'Отказаться',
                    '#',
                    [
                        'class' => 'btn btn-outline-warning disabled'
                    ]
                ) ?>
            </div>
        </div>
    </div>

    <video id="butterflyVideo" class="butterfly-overlay" muted playsinline>
        <source src="<?php Yii::getAlias('@web/video/butterFly') ?>" type="video/mp4">
        Ваш браузер не поддерживает видео.
    </video>
</div>