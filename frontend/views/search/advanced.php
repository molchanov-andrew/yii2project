<?php
/* @var $model frontend\models\forms\SearchForm 
  var $results aray
 *  */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use HighlightHelper

?>
<h1>SEARCH v.3</h1>

<div class="col-md-12">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keyword'); ?>
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>
    <?php ActiveForm::end(); ?>
</div>
<hr>
<div class="col-md-12">
    <?php if ($results): ?>
        <?php foreach ($results as $item): ?>
            <?= $item['title']; ?>
    <hr>
            <?= $item['content']; ?>
    <hr>
        <?php endforeach; ?>
    <?php endif; ?>
</div>