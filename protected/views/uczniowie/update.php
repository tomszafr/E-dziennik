<?php
/* @var $this UczniowieController */
/* @var $model Uczniowie */

$this->breadcrumbs=array(
	'Uczniowies'=>array('index'),
	$model->id_u=>array('view','id'=>$model->id_u),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uczniowie', 'url'=>array('index')),
	array('label'=>'Create Uczniowie', 'url'=>array('create')),
	array('label'=>'View Uczniowie', 'url'=>array('view', 'id'=>$model->id_u)),
	array('label'=>'Manage Uczniowie', 'url'=>array('admin')),
);
?>

<h1>Zmień oceny dla <?php echo $model->imie." ".$model->nazwisko; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>