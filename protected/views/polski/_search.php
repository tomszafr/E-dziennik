<?php
/* @var $this PolskiController */
/* @var $model Polski */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_u'); ?>
		<?php echo $form->textField($model,'id_u'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T1'); ?>
		<?php echo $form->textField($model,'T1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T2'); ?>
		<?php echo $form->textField($model,'T2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T3'); ?>
		<?php echo $form->textField($model,'T3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->