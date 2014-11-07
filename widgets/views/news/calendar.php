<?php

use yii\helpers\Html;

?>

<h3>Calendar</h3>
<?php if (count($years) > 0): ?>
    <?php foreach ($years as $year): ?>
        <p><b>
            <?= Html::a($year['id'], ['news/index', 'year' => $year['id']]) ?>
            <sup><?=$year['count']?></sup>
        </b></p>
        <?php foreach ($year['months'] as $month): ?>
            <p>
                <?= Html::a($month['name'], ['news/index', 'year' => $year['id'], 'month' => $month['id']]) ?>
                <sup><?=$month['count']?></sup>
            </p>
        <?php endforeach ?>
    <?php endforeach ?>
<?php else: ?>
    <p>No subjects</p>
<?php endif ?>