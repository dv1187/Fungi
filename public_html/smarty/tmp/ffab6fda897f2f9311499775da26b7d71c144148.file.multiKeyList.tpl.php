<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 10:27:47
         compiled from "templates/multiKeyList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156688448558f62263241e43-74323951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffab6fda897f2f9311499775da26b7d71c144148' => 
    array (
      0 => 'templates/multiKeyList.tpl',
      1 => 1492109836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156688448558f62263241e43-74323951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sciName' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f62263256f32_52347784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f62263256f32_52347784')) {function content_58f62263256f32_52347784($_smarty_tpl) {?><div>
    
        <h3>Species:</h3> <ul>

        <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['sciName']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['url']->value[$_tmp2];?>
'> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sciName']->value[$_tmp3];?>
 </a>
            </li>
        <?php }} ?>
    </ul>
    
</div>
<?php }} ?>
