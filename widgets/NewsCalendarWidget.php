<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use app\models\News;

class NewsCalendarWidget extends Widget {
    public function run()
    {
        $news = News::find()
                    ->orderBy('published_at')
                    ->all();

        $years = [];

        foreach ($news as $item) {
            $date  = new \DateTime($item->published_at);
            $year  = $date->format('Y');
            $month = $date->format('n');
            $monthName = $date->format('F');

            if (!isset($years[$year])) {
                $years[$year] = [
                    'id'     => (int) $year,
                    'count'  => 0,
                    'months' => [],
                ];
            }

            if (!isset($years[$year]['months'][$month])) {
                $years[$year]['months'][$month] = [
                    'id'     => (int) $month,
                    'name'   => (string) $monthName,
                    'count'  => 0,
                ];
            }

            $years[$year]['count']++;
            $years[$year]['months'][$month]['count']++;
        }

        return $this->render('news/calendar', [
            'years' => $years,
        ]);
    }
}