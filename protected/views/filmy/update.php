<?php
/* @var $this FilmyController */
/* @var $model Filmy */

$this->breadcrumbs=array(
	'Filmy'=>array('index'),
	$model->tytul=>array('view','id'=>$model->id_filmu),
	'Zmień',
);

$this->menu=array(
	array('label'=>'Lisa filmów', 'url'=>array('index')),
	array('label'=>'Dodaj film', 'url'=>array('create')),
	array('label'=>'Podgląd danych o filmie', 'url'=>array('view', 'id'=>$model->id_filmu)),
	array('label'=>'Zarządzaj bazą filmów', 'url'=>array('admin')),
);
?>

<h1>Zmień dane filmu <?php echo $model->tytul; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>