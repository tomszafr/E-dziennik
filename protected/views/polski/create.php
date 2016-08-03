<?php
/* @var $this PolskiController */
/* @var $model Polski */

$this->breadcrumbs=array(
	'Polskis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Polski', 'url'=>array('index')),
	array('label'=>'Manage Polski', 'url'=>array('admin')),
);
?>

<h1>Create Polski</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>