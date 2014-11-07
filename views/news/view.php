<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
?>
<div class="news-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p><b>Published at</b>: <?= Html::encode($model->published_at) ?></p>
    <p><b>Subject</b>: <?= Html::encode($model->subject->name) ?></p>
    <p><b>Content</b>: <?= Html::encode($model->content) ?></p>
</div>
