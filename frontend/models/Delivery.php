<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "delivery".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $intro
 */
class Delivery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'delivery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['name', 'intro'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'intro' => 'Intro',
        ];
    }
}
