<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <Link href="/Public<?php echo ($web_icon); ?>" rel="Shortcut Icon">
    <meta content="IE=EmulateIE9" http-equiv="X-UA-Compatible">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="pragma" content="no-cache">-->
    <!--<meta http-equiv="cache-control" content="no-cache">-->
    <meta name="description" content="">
    <meta name="author" content="superredman">
    <title><?php echo ($web_title); ?></title>
    <link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/common.css" />

    <link href="/Public/css/bootstrap-table.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/layui/css/layui.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/extend/bootstrap-select-1.12.0/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>


    <script type="text/javascript" src="/Public/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/Public/js/jquery.form.js"></script>
    <script type="text/javascript" src="/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/js/layer-v2.4/layer/layer.js"></script>
    <script src="/Public/layui/layui.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Public/extend/My97DatePicker/WdatePicker.js"></script>
    <script src="/Public/extend/bootstrap-select-1.12.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="/Public/js/common.js"></script>

</head>


<!--css-->
<link rel="stylesheet" href="/Public/css/index/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="/Public/css/index/stylesheets/theme.css">
<link rel="stylesheet" type="text/css" href="/Public/css/index/stylesheets/premium.css">



<script src="/Public/js/bootstrap-table.min.js" type="text/javascript"></script>
<script src="/Public/js/bootstrap-table-zh-CN.js" type="text/javascript"></script>
<script src="/Public/js/bootstrap-table-export.js" type="text/javascript"></script>

<body>

    

    <div class="">
        <div class="col-md-2" style="padding-top: 15px">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="formId" method="post" name='formId' action='<?php echo U("AdminRole/edit");?>'>
                        <input type="hidden" name="id" value="<?=$vo['id']?>"/>
                        <div class="form-group">
                            <label>角色名</label>
                            <input type="text" readonly='true' name="name" value="<?=$vo['name']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <?php echo W('Select/business',array($vo['business_id']));?>
                        </div>
                        <div class="form-group">
                            <label>状态</label>
                                <span class="form-control">
                                <label style="width: 100px"><input type="radio" name="status" value="1" <?php if($vo['status']==1){echo 'checked="true"';}?>/>正常</label>
                                <label><input type="radio" name="status" value="0" <?php if($vo['status']==0){echo 'checked="true"';}?>/>禁用</label>
                                </span>
                        </div>

                    </form>
                </div>


            </div>
            <br/>
            <button class="ok-btn center-block" onclick="fromSubmit('formId')"></button>
        </div>
    </div>



</body>