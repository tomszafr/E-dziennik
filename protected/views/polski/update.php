<?php
/* @var $this PolskiController */
/* @var $model Polski */

$this->breadcrumbs=array(
	'Polski'=>array('index'),
	$model->id_u=>array('view','id'=>$model->id_u),
	'Zmień oceny',
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
	array('label'=>'Powrót do zarządzania', 'url'=>array('admin')),
);
?>

<h1>Edytuj oceny: <?php echo $model->idU->imie." ".$model->idU->nazwisko; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>