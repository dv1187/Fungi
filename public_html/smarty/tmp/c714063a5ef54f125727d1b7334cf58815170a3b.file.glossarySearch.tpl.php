<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-23 19:06:33
         compiled from "smarty\templates\glossarySearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1116258af24a9eb8349-51978519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c714063a5ef54f125727d1b7334cf58815170a3b' => 
    array (
      0 => 'smarty\\templates\\glossarySearch.tpl',
      1 => 1487873048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1116258af24a9eb8349-51978519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasTerms' => 0,
    'terms' => 0,
    'term' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58af24aa1599a7_55496367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58af24aa1599a7_55496367')) {function content_58af24aa1599a7_55496367($_smarty_tpl) {?>    <table class="table table-striped" id = "term">

        <thead class="thead-default">
            <tr class="row">
                <th class="col-md-3">Term</th>
                <th class="col-md-9">Definition</th>
            <tr>
        </thead>

        <tbody>
           <?php if ($_smarty_tpl->tpl_vars['hasTerms']->value==true) {?>
            <?php  $_smarty_tpl->tpl_vars['term'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['term']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['term']->key => $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->_loop = true;
?>

                <tr class="row">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['term']->value['Term'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['term']->value['Def'];?>
<br>

                        <table class="row">
                            <tr class="col-md-4">
                                    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['term']->value['Images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                        <?php if (!is_null($_smarty_tpl->tpl_vars['image']->value['Image_Name'])&&!empty($_smarty_tpl->tpl_vars['image']->value['Image_Name'])) {?>
                                            <th class="col-md-12 multiple-images">
                                                <img src="img/<?php echo $_smarty_tpl->tpl_vars['image']->value['Image_Name'];?>
" class="glossarypic"><br>
                                                <?php echo $_smarty_tpl->tpl_vars['image']->value['Caption'];?>

                                            </th>
                                        <?php }?>
                                    <?php } ?>
                            </tr>
                        </table>
                    </td>
                </tr>

            <?php } ?>
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['hasTerms']->value==false) {?>
              <p>Your search has no results</p>
           <?php }?>
        </tbody>
    </table>
<?php }} ?>
