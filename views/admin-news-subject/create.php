<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NewsSubject */

$this->title = 'Create News Subject';
$this->params['breadcrumbs'][] = ['label' => 'News Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-subject-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
