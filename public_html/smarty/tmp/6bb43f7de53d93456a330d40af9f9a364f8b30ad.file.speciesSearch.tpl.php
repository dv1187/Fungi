<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-22 04:05:34
         compiled from "smarty\templates\speciesSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1220358acffb6aeea99-28310280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb43f7de53d93456a330d40af9f9a364f8b30ad' => 
    array (
      0 => 'smarty\\templates\\speciesSearch.tpl',
      1 => 1487732730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1220358acffb6aeea99-28310280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58acffb6bc7814_29032693',
  'variables' => 
  array (
    'resultCount' => 0,
    'data' => 0,
    'newdata' => 0,
    'fungus' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58acffb6bc7814_29032693')) {function content_58acffb6bc7814_29032693($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_table')) include 'C:\\xampp\\htdocs\\Fungi\\public_html\\smarty\\libs\\plugins\\function.html_table.php';
?><link href="css/species.css" type=text/css rel="stylesheet" />

<?php if ($_smarty_tpl->tpl_vars['resultCount']->value>0) {?>
    <!--<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>5,'table_attr'=>"class=table"),$_smarty_tpl);?>
 -->
    <!--
    <table data-toggle="table" data-sort-name="sci_name"
           data-sort-order="desc" class="table table-striped table-hover">
    <thead>
        <tr>
            <th data-field="sci_name" data-sortable="true">Scientific Name</th>
            <th data-field="common_name" data-sortable="true">Common Name</th>
            <th data-field="phylum" data-sortable="true">Phylum</th>
            <th data-field="order" data-sortable="true">Order</th>
            <th data-field="family" data-sortable="true">Family</th>
        </tr>
    </thead> -->

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Scientific Name</th>
            <th>Common Name</th>
            <th>Phylum</th>
            <th>Order</th>
            <th>Family</th>
        </tr>
        </thead> <!--make into another tpl that gets called from this tpl, that way i can just change the tpl?-->
        <div id="search">
            <?php  $_smarty_tpl->tpl_vars['fungus'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fungus']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fungus']->key => $_smarty_tpl->tpl_vars['fungus']->value) {
$_smarty_tpl->tpl_vars['fungus']->_loop = true;
?>
                <tbody>
                <tr>
                    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fungus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

                        </td>
                    <?php } ?>
                </tr>
                </tbody>
            <?php } ?>
    </table>
<?php } else { ?> No Species Found
<?php }?>
</div><?php }} ?>
