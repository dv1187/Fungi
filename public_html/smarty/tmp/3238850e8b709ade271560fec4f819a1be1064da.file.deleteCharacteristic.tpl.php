<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-10 03:06:22
         compiled from "smarty\templates\deleteCharacteristic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2762573131fe10d8d1-20073668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3238850e8b709ade271560fec4f819a1be1064da' => 
    array (
      0 => 'smarty\\templates\\deleteCharacteristic.tpl',
      1 => 1462842380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2762573131fe10d8d1-20073668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_573131fe16b511_82850227',
  'variables' => 
  array (
    'charArray' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573131fe16b511_82850227')) {function content_573131fe16b511_82850227($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>



<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!--Delete Shape-->
    <form action="deleteCharacteristic.php" method="post" enctype="multipart/form-data" id="deleteCharacteristic">
        <h3>Delete Characteristic:</h3>

        <select name="removedCharacteristic" class="form-control">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['charArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <input type="submit" class="btn btn-default btn-md add form-control" value="Delete" name="deleteCharacteristic">
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
