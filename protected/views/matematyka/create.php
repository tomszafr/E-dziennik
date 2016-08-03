<?php
/* @var $this MatematykaController */
/* @var $model Matematyka */

$this->breadcrumbs=array(
	'Matematykas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Matematyka', 'url'=>array('index')),
	array('label'=>'Manage Matematyka', 'url'=>array('admin')),
);
?>

<h1>Create Matematyka</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>