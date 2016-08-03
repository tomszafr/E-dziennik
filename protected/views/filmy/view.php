<?php
/* @var $this FilmyController */
/* @var $model Filmy */

$this->breadcrumbs=array(
	'Filmy'=>array('index'),
	$model->tytul,
);

$this->menu=array(
	array('label'=>'Lista filmów', 'url'=>array('index')),
	array('label'=>'Dodaj film', 'url'=>array('create')),
	array('label'=>'Zmień dane o filmie', 'url'=>array('update', 'id'=>$model->id_filmu)),
	array('label'=>'Usuń film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_filmu),'confirm'=>'Czy na pewno chcesz usunąć ten film z bazy?')),
	array('label'=>'Zarządzaj bazą filmów', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->tytul; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_filmu',
		'tytul',
		'rok_produkcji',
		'cena',
	),
)); ?>
