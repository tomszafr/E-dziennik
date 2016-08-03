<?php
/* @var $this UczniowieController */
/* @var $model Uczniowie */
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
		<?php echo $form->label($model,'imie'); ?>
		<?php echo $form->textArea($model,'imie',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazwisko'); ?>
		<?php echo $form->textArea($model,'nazwisko',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klasa'); ?>
		<?php echo $form->textField($model,'klasa',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->