<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    echo "<pre>";
    print_r($model->getErrors());
    echo "</pre>";
}
?>
<h1>Welcome to our company</h1>

<!--<form method="post">
    <p>First name</p>
    <input type="text" name="firstName"/>
    <br>
    <br>

    <p>Last name</p>
    <input type="text" name="lastName" />
    <br>
    <br>

    <p>Middle name</p>
    <input type="text" name="middleName" />
    <br>
    <br>

    <p>Email</p>
    <input type="text" name="email" />
    <br>
    <br>

    <input type="submit" />


</form>-->

<!--использование ActionForm виджета-->
<?php $form = ActiveForm::begin();?>

<?php echo $form->field($model, 'firstName');?>
<?php echo $form->field($model, 'lastName');?>
<?php echo $form->field($model, 'middleName');?>
<?php echo $form->field($model, 'birthDate');?>
<?php echo $form->field($model, 'hiringDate');?>
<?php echo $form->field($model, 'position');?>
<?php echo $form->field($model, 'idCode');?>
<?php echo $form->field($model, 'city')->dropDownList($model->getCityesList()
);?>
<?php echo $form->field($model, 'email');?>

<?php echo Html::submitButton('Отправить', ['class'=>'btn btn-primary']);?>

<?php ActiveForm::end();?>

