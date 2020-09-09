<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property int $id
 * @property int $nomer
 * @property int $summa
 * @property string|null $created
 * @property string $pay_from
 * @property string $pay_to
 * @property string $naznachenie
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomer', 'summa', 'pay_from', 'pay_to', 'naznachenie'], 'required'],
            [['nomer', 'summa'], 'integer'],
            [['created'], 'safe'],
            [['pay_from', 'pay_to', 'naznachenie'], 'string', 'max' => 255],
            [['nomer'], 'unique'],
            [['naznachenie'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomer' => 'Nomer',
            'summa' => 'Summa',
            'created' => 'Created',
            'pay_from' => 'Pay From',
            'pay_to' => 'Pay To',
            'naznachenie' => 'Naznachenie',
        ];
    }
}
