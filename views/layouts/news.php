<?php

use app\widgets\NewsSubjectWidget;
use app\widgets\NewsCalendarWidget;

?>
<?php $this->beginContent('@app/views/layouts/main.php'); ?>
    <div class="row">
        <div class="col-md-3">
            <?= NewsSubjectWidget::widget() ?>
            <?= NewsCalendarWidget::widget() ?>
        </div>
        <div class="col-md-9">
            <?= $content ?>
        </div>
    </div>
<?php $this->endContent(); ?>