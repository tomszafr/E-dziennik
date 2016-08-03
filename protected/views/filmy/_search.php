<?php
/* @var $this FilmyController */
/* @var $model Filmy */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_filmu'); ?>
		<?php echo $form->textField($model,'id_filmu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tytul'); ?>
		<?php echo $form->textField($model,'tytul',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rok_produkcji'); ?>
		<?php echo $form->textField($model,'rok_produkcji'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cena'); ?>
		<?php echo $form->textField($model,'cena'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Szukaj'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->