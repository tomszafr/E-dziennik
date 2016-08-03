<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Skontaktuj się z nami';
?>
<div class="container-fluid">
<h1 class="text-center">Formularz kontaktowy</h1>
<div class="col-sm-2">
</div>
<div class="col-sm-8">

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'htmlOptions' => array('class' => 'well'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p><i>Pola oznaczone <span class="required">*</span> są wymagane.</i></p>

		<?php echo $form->textFieldGroup($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>

		<?php echo $form->textFieldGroup($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>

		<?php echo $form->textFieldGroup($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>

		<?php echo $form->textAreaGroup($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
	
		<div class="form-group">
		<?php echo $form->labelEx($model,'verifyCode'); ?><br>
		<?php $this->widget('CCaptcha'); ?><br>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>
		<p><i>Wielkość liter nie ma znaczenia.</i></p>
		</div>
		
	<?php endif; ?>

	<?php 
		$this->widget(
    	'booster.widgets.TbButton',
    	array('buttonType' => 'submit', 'label' => 'Wyślij')
		); 
	?>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>

<?php endif; ?>
