<?php
/* @var $this UczniowieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oceny',
);
$this->menu=array(
	array('label'=>'Zarządzaj ocenami', 'url'=>array('admin'), 'htmlOptions'=>array('class'=>'list-group-item')),
);
?>

<h1>Oceny</h1>
<?php 
	if($this->allowTeacher()) {
		echo "<table class='table-striped col-sm-10 pull-left'>";
	} else {
		echo "<table class='table-striped col-sm-12 pull-left'>";
	}
?>
	<thead>
	<tr>
		<td rowspan="2" style="vertical-align:middle;"><strong>Imię</strong></td>
		<td rowspan="2" style="vertical-align:middle;"><strong>Nazwisko</strong></td>
		<?php 
			$level = Yii::app()->user->level;
			if ($this->allowTeacher()) {
				$subj = Yii::app()->user->subj;
				$cols="";
				$cols="<td class='text-center' colspan='3'><strong>";
 				$cols.=$this->getSubjLabel($subj);
				$cols.="</strong></td>";
			} else {
				$cols="<td class='text-center' colspan='3'><strong>";
				$cols.="Matematyka <a href='mailto:".$this->getMail('Matematyka')."'>Kontakt</a>";
				$cols.="</strong></td>";
				$cols.="<td class='text-center' colspan='3'><strong>";
				$cols.="J. polski <a href='mailto:".$this->getMail('J. polski')."'>Kontakt</a>";
				$cols.="</strong></td>";
			}
			echo $cols;
		?>
	</tr>
	<tr>
		<?php 
			if ($this->allowTeacher()) {
				$cols="<td>Test 1</td><td>Test 2</td><td>Test 3</td>";
			} else {
				$cols="<td>Test 1</td><td>Test 2</td><td>Test 3</td><td>Test 1</td><td>Test 2</td><td>Test 3</td>";
			}
			echo $cols;
		?>
	</tr>
	</thead>
	<tbody>

<?php
$dataProvider->pagination=false;
$level = Yii::app()->user->level;
if ($level == 'r') {
	$dataProvider->criteria=array(
			'condition' => 't.id_u = :id_u',
			'params' => array(':id_u' => Yii::app()->user->id_u ),
	);
}
		
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


	</tbody>
</table>
