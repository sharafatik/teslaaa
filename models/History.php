<?php

namespace app\models;

use Yii;


class History extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'history';
    }

    
    public function rules()
    {
        return [
            [['date', 'discription'], 'required'],
            [['date'], 'safe'],
            [['discription'], 'string'],
        ];
    }

   
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'discription' => 'Discription',
        ];
    }
}
