<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Event;

class EventController extends Controller
{
    public function actionIndex()
    {
        $query = Event::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $events = $query->orderBy('date')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'events' => $events,
            'pagination' => $pagination,
        ]);
    }
}