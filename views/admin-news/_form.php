<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'published_at')->widget(DateTimePicker::className(), [
        'language' => 'en',
//        'size' => 'ms',
//        'template' => '{input}',
        'pickButtonIcon' => 'glyphicon glyphicon-time',
//        'inline' => true,
        'clientOptions' => [
//            'startView' => 1,
//            'minView' => 0,
//            'maxView' => 1,
            'autoclose' => true,
            'todayBtn' => true
        ]
    ]);?>

    <?= $form->field($model, 'content')->textArea(['maxlength' => 4096]) ?>

    <?= $form->field($model, 'subject_id')->dropDownList(
        ArrayHelper::map(\app\models\NewsSubject::find()->asArray()->all(), 'id', 'name'),
        ['prompt'=>'']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
