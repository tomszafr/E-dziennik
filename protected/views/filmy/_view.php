<?php
/* @var $this FilmyController */
/* @var $data Filmy */
?>

<div class="view">
	<b><?php echo CHtml::link(CHtml::encode($data->tytul), array('view', 'id'=>$data->id_filmu)); ?></b>
</div>