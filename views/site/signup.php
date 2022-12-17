<?php
 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">
 
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username')->label('Фамилия Имя Отчество')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email')->label('Почта')?>
                <?= $form->field($model, 'date_rozden')->label('Дата рождения')?>
                <?= $form->field($model, 'otdel')->label('Отдел')?>
                <?= $form->field($model, 'dostup')->label('Доступ')?>
                <?= $form->field($model, 'password')->passwordInput()?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
 
        </div>
    </div>
</div>