<?php if (!defined('THINK_PATH')) exit();?><select class="selectpicker form-inline" name="firstArea" id="firstArea<?=$widgetName?>" class="form-control" data-width="120"
        data-live-search="true">
    <option value="0">--请选择--</option>
    <?php foreach($firstList as $value){?>
    <option value="<?=$value['id']?>"
    <?php if($value['id']==$selectFirst){echo 'selected="true"';}?>><?=$value['name']?></option>
    <?php }?>
</select>
<select class="selectpicker form-inline" name="secondArea" id="secondArea<?=$widgetName?>" class="form-control" data-width="120"
        data-live-search="true">
    <option value="0">--请选择--</option>
    <?php foreach($secondList as $value){?>
    <option value="<?=$value['id']?>"
    <?php if($value['id']==$selectSecond){echo 'selected="true"';}?>><?=$value['name']?></option>
    <?php }?>
</select>
<select class="selectpicker form-inline" name="thirdArea" id="thirdArea<?=$widgetName?>" class="form-control" data-width="120"
        data-live-search="true">
    <option value="0">--请选择--</option>
    <?php foreach($thirdList as $value){?>
    <option value="<?=$value['id']?>"
    <?php if($value['id']==$selectThird){echo 'selected="true"';}?>><?=$value['name']?></option>
    <?php }?>
</select>