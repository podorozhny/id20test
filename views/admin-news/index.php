<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'title',
            'published_at',
            [
                'attribute' => 'subject_id',
                'label' => 'Subject',
                'value' => function($model, $index, $dataColumn) {
                    return $model->subject->name;
                },
            ],
            [
                'attribute' => 'content',
                'label' => 'Short content',
                'value' => function($model, $index, $dataColumn) {
                    return (strlen($model->content) > 50) ? substr($model->content, 0, 50) . '...' : $model->content;
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
