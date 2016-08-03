<?php
/* @var $this UczniowieController */
/* @var $model Uczniowie */

$this->breadcrumbs=array(
	'Uczniowies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uczniowie', 'url'=>array('index')),
	array('label'=>'Manage Uczniowie', 'url'=>array('admin')),
);
?>

<h1>Create Uczniowie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>