<?php
/* @var $this PolskiController */
/* @var $data Polski */
?>

<tr>
	<td><?php echo CHtml::encode($data->idU->imie); ?></td>
	<td><?php echo CHtml::encode($data->idU->nazwisko); ?></td>
	<td><?php echo CHtml::encode($data->idU->klasa); ?></td>
	<td><?php echo CHtml::encode($data->T1); ?></td>
	<td><?php echo CHtml::encode($data->T2); ?></td>
	<td><?php echo CHtml::encode($data->T3); ?></td>
</tr>