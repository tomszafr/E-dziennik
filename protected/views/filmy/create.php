<?php
/* @var $this FilmyController */
/* @var $model Filmy */

$this->breadcrumbs=array(
	'Filmy'=>array('index'),
	'Dodaj',
);

$this->menu=array(
	array('label'=>'Lista filmów', 'url'=>array('index')),
	array('label'=>'Zarządzaj bazą filmów', 'url'=>array('admin')),
);
?>

<h1>Dodaj film</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>