<?php
/* @var $this FilmyController */
/* @var $model Filmy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filmy-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tytul'); ?>
		<?php echo $form->textField($model,'tytul',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tytul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rok_produkcji'); ?>
		<?php echo $form->textField($model,'rok_produkcji'); ?>
		<?php echo $form->error($model,'rok_produkcji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cena'); ?>
		<?php echo $form->textField($model,'cena'); ?>
		<?php echo $form->error($model,'cena'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->