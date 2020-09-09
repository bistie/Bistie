<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Invoice Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class InvoiceController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\Invoice';    
}


