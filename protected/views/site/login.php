
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Logowanie';
?>

<h1 class="text-center">Logowanie</h1>
<div class="col-sm-2">
</div>
<div class="col-sm-8">
	
	<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
		'id'=>'login-form',
		'type'=>'vertical',
		'htmlOptions' => array('class' => 'well'),
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); 
	?>
	<p>
		<i>Pola oznaczone <span class="required">*</span> są wymagane.</i>
	</p>
	<?php

	echo $form->textFieldGroup($model,'username');
	echo $form->error($model,'username'); 

	echo $form->passwordFieldGroup($model,'password');
	echo $form->error($model,'password');

	echo $form->checkBoxGroup($model,'rememberMe');
	echo $form->error($model,'rememberMe');
	?>

	
	<p class="bg-info ">
		Możesz zalogować się podając w formularzu:<br/> <kbd><b>now1</b></kbd> / <kbd><b>klw13</b></kbd> (rodzic),<br/>  
		<kbd><b>orz1</b></kbd>  / <kbd><b>6lhf31</b></kbd> (rodzic),<br/> 
		<kbd><b>groc2</b></kbd> / <kbd><b>0iac92</b></kbd> (nauczyciel j. polskiego),<br/>
		<kbd><b>lask2</b></kbd> / <kbd><b>9kwt84</b></kbd> (nauczyciel matematyki)
	</p>

	<?php 
		$this->widget(
    	'booster.widgets.TbButton',
    	array('buttonType' => 'submit', 'label' => 'Zaloguj')
		); 
	?>
<?php $this->endWidget(); ?>
</div><!-- form -->
<div class="col-sm-2">
</div>
