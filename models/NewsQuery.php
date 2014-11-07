<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\Query;

class NewsQuery extends ActiveQuery {
    /**
     * @param $subject_id integer
     * @return $this
     */
    public function subject($subject_id = null)
    {
        return $this->andFilterWhere(['{{%news}}.subject_id' => $subject_id]);
    }

    /**
     * @param $year integer
     * @return $this
     */
    public function year($year)
    {
        $from = (new \DateTime())->setDate($year, 1, 1)->setTime(0, 0, 0);
        $to = (new \DateTime())->setDate($year + 1, 1, 1)->setTime(0, 0, 0);

        return $this->andWhere('{{%news}}.published_at >= :from AND {{%news}}.published_at < :to', [':from' => $from->format('Y-m-d H:i:s'), ':to' => $to->format('Y-m-d H:i:s')]);
    }

    /**
     * @param $year integer
     * @param $month integer
     * @return $this
     */
    public function month($year, $month)
    {
        $from = (new \DateTime())->setDate($year, $month, 1)->setTime(0, 0, 0);
        $to = (new \DateTime())->setDate($year, $month + 1, 1)->setTime(0, 0, 0);

        return $this->andWhere('{{%news}}.published_at >= :from AND {{%news}}.published_at < :to', [':from' => $from->format('Y-m-d H:i:s'), ':to' => $to->format('Y-m-d H:i:s')]);
    }
}