<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Authors */
use frontend\models\Authors;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Update author #ID <?= $model->id;?></h1>


<?php $form = ActiveForm::begin();?>
<?php echo $form->field($model, 'first_name');?>
<?php echo $form->field($model, 'last_name');?>
<?php echo $form->field($model, 'birthdate');?>
<?php echo $form->field($model, 'rating');?>

<?php echo Html::submitButton('Submit', ['class'=>'btn btn-primary',]);?>

<?php ActiveForm::end();?>
