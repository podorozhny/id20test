<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\models\NewsSubject;

class NewsSubjectWidget extends Widget {
    public function run()
    {
        $subjects = NewsSubject::find()
                               ->orderBy('name')
                               ->all();

        return $this->render('news/subject', [
            'subjects' => $subjects,
        ]);
    }
}