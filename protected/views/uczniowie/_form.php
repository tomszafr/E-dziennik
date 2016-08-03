<?php
/* @var $this UczniowieController */
/* @var $model Uczniowie */
/* @var $form CActiveForm */
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'uczniowie2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 
$subj = Yii::app()->user->subj;

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		Test 1
		<?php echo $form->numberField($model->$subj,'T1'); ?>
		<?php echo $form->error($model->$subj,'T1'); ?>
	</div>
	<div class="row">
		Test 2
		<?php echo $form->numberField($model->$subj,'T2'); ?>
		<?php echo $form->error($model->$subj,'T1'); ?>
	</div>
	<div class="row">
		Test 3
		<?php echo $form->numberField($model->$subj,'T3'); ?>
		<?php echo $form->error($model->$subj,'T1'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Dodaj' : 'Zapisz'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->