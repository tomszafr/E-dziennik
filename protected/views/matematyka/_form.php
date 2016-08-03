<?php
/* @var $this MatematykaController */
/* @var $model Matematyka */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'polski-form',
		'enableClientValidation'=>true,
		'htmlOptions' => array('class' => 'well col-sm-10'),
		'clientOptions'=>array(
				'validateOnSubmit'=>true,),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'T1'); ?>
		<?php echo $form->textField($model,'T1'); ?>
		<?php echo $form->error($model,'T1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'T2'); ?>
		<?php echo $form->textField($model,'T2'); ?>
		<?php echo $form->error($model,'T2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'T3'); ?>
		<?php echo $form->textField($model,'T3'); ?>
		<?php echo $form->error($model,'T3'); ?>
	</div>

	<div class="row">
		<?php 
			$this->widget(
    		'booster.widgets.TbButton',
    		array('buttonType' => 'submit', 'label' => 'Aktualizuj')
			); 
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->