<?php
/* @var $this MatematykaController */
/* @var $model Matematyka */

$this->breadcrumbs=array(
	'Matematyka'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#matematyka-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj ocenami</h1>

<p class="bg-info">
Na początku pól wyszukiwania można wpisywać operatory porównania (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
lub <b>=</b>).
</p>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'matematyka-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'col-sm-10',
	'headerCssClass' => 'bg-primary tab-header',
	'columns'=>array(
			array(
					'name'=>'nazwisko',
					'filter' => CHtml::activeTextField($model, 'nazwisko', array('class'=>'form-control')),
					'value'=>'$data->idU->nazwisko'
			),
			array(
					'name'=>'imie',
					'filter' => CHtml::activeTextField($model, 'imie', array('class'=>'form-control')),
					'value'=>'$data->idU->imie'
			),
		'T1',
		'T2',
		'T3',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>