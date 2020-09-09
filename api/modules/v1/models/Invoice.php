<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Invoice Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Invoice extends ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'invoice';
	}

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['nomer'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['nomer', 'summa', 'created', 'paying_from', 'paying_to', 'naznachenie'], 'required']
        ];
    }
}
