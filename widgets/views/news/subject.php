<?php

use yii\helpers\Html;

?>

<h3>Subjects</h3>
<?php if (count($subjects) > 0): ?>
    <?php foreach ($subjects as $subject): ?>
        <p>
            <?= Html::a($subject->name, ['news/index', 'subject' => $subject->id]) ?>
            <sup><?=count($subject->news)?></sup>
        </p>
    <?php endforeach ?>
<?php else: ?>
    <p>No subjects</p>
<?php endif ?>