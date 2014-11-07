<?php
use yii\helpers\Html;
?>
<div class="news-item">
    <h3><?= Html::a($model->title, ['news/view', 'id' => $model->id]) ?></h3>
    <p><b>Published at</b>: <?= Html::encode($model->published_at) ?></p>
    <p><b>Subject</b>: <?= Html::encode($model->subject->name) ?></p>
    <p><b>Short content</b>: <?= Html::encode((strlen($model->content) > 256) ? substr($model->content, 0, 256) . '...' : $model->content) ?></p>
</div>