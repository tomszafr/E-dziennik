<?php
/* @var $this PolskiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Polski',
);

$this->menu=array(
	array('label'=>'Zarządzaj ocenami', 'url'=>array('admin')),
);
?>

<h1>Oceny: Język polski</h1>
<table class='table-striped col-sm-10 pull-left'>
	<thead>
	<tr>
		<td style="vertical-align:middle;"><strong>Imię</strong></td>
		<td style="vertical-align:middle;"><strong>Nazwisko</strong></td>
		<td style="vertical-align:middle;"><strong>Klasa</strong></td>
		<td><strong>Test 1</strong></td>
		<td><strong>Test 2</strong></td>
		<td><strong>Test 3</strong></td>
	</tr>
	</thead>
	<tbody>
	<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
	)); ?>
	</tbody>
</table>