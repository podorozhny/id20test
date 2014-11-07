<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NewsSubject */

$this->title = 'Update News Subject: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'News Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-subject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
