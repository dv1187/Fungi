<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-10 10:59:02
         compiled from "smarty/templates/addShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1658150135731487c9d2f80-88496046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef8ea1ab7628b2b8c42d8752d6f30d3a304c6cdc' => 
    array (
      0 => 'smarty/templates/addShape.tpl',
      1 => 1462891165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1658150135731487c9d2f80-88496046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5731487c9f8b12_95249408',
  'variables' => 
  array (
    'msg' => 0,
    'shapeName' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5731487c9f8b12_95249408')) {function content_5731487c9f8b12_95249408($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3><?php }?>

    <!--Add new shape-->
    <form action="addShape.php" method="post" id="newShape" enctype="multipart/form-data">
        <h3>New Shape:</h3>
            Name:
        <input type="text" name="shapeName"
                <?php if (isset($_smarty_tpl->tpl_vars['shapeName']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['shapeName']->value;?>
"<?php }?>
               class="form-control"><br>
            Description:
        <textarea name="description"
                <?php if (isset($_smarty_tpl->tpl_vars['description']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"<?php }?>
                  class="form-control"></textarea><br>
            Image:
        <input type="file" name="myimage"><br>
        <input type="submit" name="addShape"  class="btn btn-default btn-md add form-control" value="Upload">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div><?php }} ?>
