<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Impress DS',
                'brandUrl' => ['/site/index'],
                'options' => [
                    'class' => 'navbar-default navbar-static-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'О приложении', 'url' => ['/site/about']],
                    ['label' => 'Обратная связь', 'url' => ['/site/contact']]

                ],
            ]);
            NavBar::end();
        ?>
        <?= $content ?>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Savvato, <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?>,
                <a href="https://github.com/impress/impress.js?utm_content=buffer4bb8d&utm_source=buffer&utm_medium=twitter&utm_campaign=Buffer">Impress.JS</a> ,
                <a href="http://imperavi.com/redactor/">Imperavi Redactor</a>
            </p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
