<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>

<div class="container">
    <div class="site-error">

        <h1><?= Html::encode($this->title) ?></h1>
    
        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>
    
        <p>
            Ошибка, приведенная выше, произошла когда веб-сервер обрабатывал ваш запрос.
        </p>
        <p>
            Пожалуйста, свяжитесь с разработчиком если вы считаете что это серверная ошибка. Спасибо.
        </p>

    </div>
</div>

