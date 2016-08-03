<?php
/* @var $this FilmyController */
/* @var $model Filmy */

$this->breadcrumbs=array(
	'Filmy'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Lista filmów', 'url'=>array('index')),
	array('label'=>'Dodaj film', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#filmy-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj bazą filmów</h1>

<p>
Możesz poprzedzić wartość każdego z pól wyszukiwania operatorem porównania (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
lub <b>=</b>) aby określić metodę porównania.
</p>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'filmy-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_filmu',
		'tytul',
		'rok_produkcji',
		'cena',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
