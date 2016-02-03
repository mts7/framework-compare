<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_registration".
 *
 * @property integer $id
 * @property integer $event_id
 * @property string $name
 * @property integer $guests
 * @property string $add_date
 * @property string $edit_date
 *
 * @property Event $event
 */
class EventRegistration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'name', 'add_date'], 'required'],
            [['event_id', 'guests'], 'integer'],
            [['add_date', 'edit_date'], 'safe'],
            [['name'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_id' => 'Event ID',
            'name' => 'Name',
            'guests' => 'Guests',
            'add_date' => 'Add Date',
            'edit_date' => 'Edit Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }
}
