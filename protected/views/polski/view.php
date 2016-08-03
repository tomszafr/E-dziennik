<?php
/* @var $this PolskiController */
/* @var $model Polski */

$this->breadcrumbs=array(
	'Polski'=>array('index'),
	$model->id_u,
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
	array('label'=>'Zmień oceny', 'url'=>array('update', 'id'=>$model->id_u)),
	array('label'=>'Zarządzaj ocenami', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->idU->imie." ".$model->idU->nazwisko; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'col-sm-9'),
	'attributes'=>array(
		'T1',
		'T2',
		'T3',
	),
)); ?>
