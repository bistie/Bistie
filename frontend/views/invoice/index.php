<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Invoice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(['id' => 'form-order', 'enableClientValidation' => true, 'enableAjaxValidation' => false,

    'action' => ['/invoice/index'],

    'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nomer')->textInput() ?>
	
    <?= $form->field($model, 'summa')->textInput() ?>
	
    <?= $form->field($model, 'pay_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'naznachenie')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

$js = <<<JS
$('#form-order').on('beforeSubmit', function(e) {

    var form = $(this);

    var formData = form.serialize();

    $.ajax({

        url: form.attr("action"),

        type: form.attr("method"),

        data: formData,

        success: function (data) {

            alert('Sucess');

        },

        error: function () {

            alert("Something went wrong");

        }

    });

}).on('submit', function(e){

    e.preventDefault();

});
JS;

$this->registerJs($js);
?>
