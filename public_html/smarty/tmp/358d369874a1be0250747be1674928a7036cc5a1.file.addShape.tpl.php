<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-17 21:51:53
         compiled from "templates/addShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102060141658f570fbaa5bc0-65254003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358d369874a1be0250747be1674928a7036cc5a1' => 
    array (
      0 => 'templates/addShape.tpl',
      1 => 1492480310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102060141658f570fbaa5bc0-65254003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f570fbabf9a3_84681325',
  'variables' => 
  array (
    'msg' => 0,
    'msg3' => 0,
    'dup' => 0,
    'shapeName' => 0,
    'description' => 0,
    'charName' => 0,
    'optName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f570fbabf9a3_84681325')) {function content_58f570fbabf9a3_84681325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />

<div class="result-page-header">
    <h1 id="species-name">Add New Shape</h1>
</div>
<div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['msg3']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg3']->value;?>
</h3><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['dup']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['dup']->value;?>
</h3><?php }?>
    <!--include "adminNav.tpl"}-->

    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName"
                <?php if (isset($_smarty_tpl->tpl_vars['shapeName']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['shapeName']->value;?>
"<?php }?>
               class="form-control" required><br>
            Description:
        <textarea name="description"
                  class="form-control" required><?php if (isset($_smarty_tpl->tpl_vars['description']->value)) {
echo $_smarty_tpl->tpl_vars['description']->value;
}?></textarea><br>
            Image:
        <input type="file" name="myimage" id="myimage"><br>

        <div id="char">
            <h4><strong>Shape Characteristic:</strong></h4>
        <input type="text" name="newCharName[]"
               <?php if (isset($_smarty_tpl->tpl_vars['charName']->value[0])) {?>
                   value="<?php echo $_smarty_tpl->tpl_vars['charName']->value[0];?>
"<?php }?>
                class="form-control"><br>
            <div class="opt">
                Characteristic Option:
                <input type="text" name="newOptName[0][]"
                        <?php if (isset($_smarty_tpl->tpl_vars['optName']->value[0][0])) {?>
                            value="<?php echo $_smarty_tpl->tpl_vars['optName']->value[0][0];?>
"<?php }?>
                       class="form-control"><br>
            </div>
        </div>
        <input type="button" id="addOption" class="btn btn-default form-control sub resetSpace" value="Add More Options"/>
        <input type="button" id="addChar" class="btn btn-default form-control sub resetSpace" value="Add New Characteristic"/>

        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Add New Shape">
    </form>


    <?php echo '<script'; ?>
>

        var charCount = 0;
        var optCount = 0;

        $("#addChar").click(function() {
            charCount++;
            optCount = 0;
            var more = "<h4><strong>Shape Characteristic:</strong></h4> <input type='text' name='newCharName[]' class='form-control'<br>" +
                    "<div class='opt'> Characteristic Option: <input type='text' name='newOptName["+charCount+"]'[] class='form-control'><br>";
            $("#char").append(more);
        });

        $("#addOption").click(function() {
            optCount++;
            var add = "<div class='opt'> Characteristic Option: <input type='text' name='newOptName["+charCount+"]["+optCount+"]' class='form-control'><br>";
            $("#char").append(add);
        });
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
