<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>



<div class="container-fluid">
	<div class="container-fluid">
	<div class="row">
		<?php echo $content; ?>
		<!-- content -->
		<?php
			if (Yii::app ()->user->isTeacher) {
				echo "<div class='col-xs-12 col-sm-2 col-md-2 text-center'>";
				$this->beginWidget('zii.widgets.CPortlet', array(
					'title'=>'Menu',
				));
				$this->widget('booster.widgets.TbMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'list-group',),
					'itemCssClass'=>'list-group-item',
				));
				$this->endWidget();
				echo "</div>";
			}
		?>
	</div>
	</div>
</div>
<?php $this->endContent(); ?>