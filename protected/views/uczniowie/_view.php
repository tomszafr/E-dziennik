<?php
/* @var $this UczniowieController */
/* @var $data Uczniowie */
?>

<tr>
	<td><?php echo CHtml::encode($data->imie); ?></td>
	<td><?php echo CHtml::encode($data->nazwisko); ?></td>
	<?php 
	$level = Yii::app()->user->level;
	if ($level == 'n') {
		$subj = Yii::app()->user->subj;
		$cols="<td>";
		$cols.=CHtml::encode($data->$subj->T1);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->$subj->T2);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->$subj->T3);
		$cols.="</td>";
		echo $cols;
	} else {
		$cols="<td>";
		$cols.=CHtml::encode($data->matematyka->T1);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->matematyka->T2);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->matematyka->T3);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->polski->T1);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->polski->T2);
		$cols.="</td>";
		$cols.="<td>";
		$cols.=CHtml::encode($data->polski->T3);
		$cols.="</td>";
		echo $cols;
	}
	
	?>
</tr>