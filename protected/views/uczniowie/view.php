<?php
/* @var $this UczniowieController */
/* @var $model Uczniowie */

$this->breadcrumbs=array(
	'Uczniowies'=>array('index'),
	$model->id_u,
);

$this->menu=array(
	array('label'=>'List Uczniowie', 'url'=>array('index')),
	array('label'=>'Create Uczniowie', 'url'=>array('create')),
	array('label'=>'Update Uczniowie', 'url'=>array('update', 'id'=>$model->id_u)),
	array('label'=>'Delete Uczniowie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_u),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uczniowie', 'url'=>array('admin')),
);
?>

<h1>View Uczniowie #<?php echo $model->id_u; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_u',
		'imie',
		'nazwisko',
		'klasa',
	),
)); ?>
