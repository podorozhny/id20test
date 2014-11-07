<?php

namespace app\controllers;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    public $layout = 'news';

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex($subject = null, $year = null, $month = null)
    {
        $searchModel = new NewsSearch();
        $newsQuery = NewsSearch::find();

        if (!is_null($year) && !is_null($month)) {
            $newsQuery = $newsQuery->month($year, $month);
        } else if (!is_null($year)) {
            $newsQuery = $newsQuery->year($year);
        }

        if (!is_null($subject)) {
            $newsQuery = $newsQuery->subject($subject);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $newsQuery,
            'sort' => ['defaultOrder' => ['published_at' => SORT_DESC]],
            'pagination' => ['pageSize' => 5],
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}