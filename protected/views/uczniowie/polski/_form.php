<div style="margin-bottom: 20px; display: <?php echo!empty($display) ? $display : 'none'; ?>; width:100%; clear:left;" class="crow">

<div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']T1'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']T1'); ?>
        <?php echo CHtml::error($model, '[' . $index . ']T1'); ?>
    </div>
 
    <div class="row" style="width:200px;float: left;">
        <?php echo CHtml::activeLabelEx($model, '[' . $index . ']T2'); ?>
        <?php echo CHtml::activeTextField($model, '[' . $index . ']T2'); ?>
        <?php echo CHtml::error($model, '[' . $index . ']T2'); ?>
    </div>
    <div class="row" style="width:100px;float: left;">
        <br />
    </div>
</div>
