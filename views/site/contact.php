<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Обратная связь';

?>
<div class="container">
    <div class="well site-contact">
        <h1><?= Html::encode($this->title) ?></h1>
    
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    
        <div class="alert alert-success">
            Спасибо за обратную связь. Я отвечу Вам сразу, как только смогу.
        </div>
        <?php else: ?>
    
        <p>
            Если у вас есть какие-либо вопросы, пожалуйста заполните следующую форму для обратной связи. Спасибо.
        </p>
    
        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    
        <?php endif; ?>
    </div>
</div>

