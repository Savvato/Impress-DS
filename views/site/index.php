<?php
/* @var $this yii\web\View */
$this->title = 'Impress DS';
use yii\helpers\Url;
?>
<div class="container">
    <div class="site-index">

        <div class="jumbotron">
            <h1>Добро пожаловать!</h1>
    
            <p class="lead">Impress DS - веб-приложение для создания презентаций online. Основано на библиотеке Impress.JS</p>
    
            <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['site/app']); ?>">Создать презентацию</a></p>
        </div>

    </div>
</div>

