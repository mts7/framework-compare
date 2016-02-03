<?php
/**
 * Created by PhpStorm.
 * User: mrodarte
 * Date: 2/3/2016
 * Time: 2:33 PM
 */

namespace app\controllers;


use app\models\Event;
use yii\data\Pagination;
use yii\rest\Controller;

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