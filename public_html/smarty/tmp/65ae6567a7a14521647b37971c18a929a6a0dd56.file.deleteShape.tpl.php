<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 01:04:02
         compiled from "smarty\templates\deleteShape.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774572fc5e2990b61-54237878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ae6567a7a14521647b37971c18a929a6a0dd56' => 
    array (
      0 => 'smarty\\templates\\deleteShape.tpl',
      1 => 1462743056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2774572fc5e2990b61-54237878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572fc5e2a09c48_42547931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572fc5e2a09c48_42547931')) {function content_572fc5e2a09c48_42547931($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Delete Shape-->
    <form action="deleteShape.php" method="post" id="deleteShape">
        <h3>Delete Shape:</h3>

        Shape Association:
        <select name="shapeID" class="form-control">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shapeArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteShape">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
