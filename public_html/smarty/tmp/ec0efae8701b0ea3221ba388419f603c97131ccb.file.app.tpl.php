<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-20 00:13:08
         compiled from "templates\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3968178765a89f431ed5ad4-58527638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec0efae8701b0ea3221ba388419f603c97131ccb' => 
    array (
      0 => 'templates\\app.tpl',
      1 => 1519085587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3968178765a89f431ed5ad4-58527638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a89f43203c394_97455560',
  'variables' => 
  array (
    'shapeData' => 0,
    'shape' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89f43203c394_97455560')) {function content_5a89f43203c394_97455560($_smarty_tpl) {?><div class="nav">
	<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Select Shape"), 0);?>

</div>
<link href="css/application.css" type="text/css" rel="stylesheet" />
<div class="container">

	<div class="page-header">
		<h1 class="glossarytitle">Shape Key</h1>
	</div>
	<p class="or">The Fungi in this database are organized in 10 categories. Read and choose the descriptions and choose the shape
		that best fits your specimen.</p>
	<hr>
            <?php  $_smarty_tpl->tpl_vars['shape'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shape']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shapeData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shape']->key => $_smarty_tpl->tpl_vars['shape']->value) {
$_smarty_tpl->tpl_vars['shape']->_loop = true;
?>

				<div class="col-lg-6 shape">
					<div class="left">
						<img class="pic" src="Images/<?php echo $_smarty_tpl->tpl_vars['shape']->value['Image'];?>
">
					</div>
					<div class="right">

						<h2 class="app"><?php echo $_smarty_tpl->tpl_vars['shape']->value['Name'];?>
</h2>
						<p><?php echo $_smarty_tpl->tpl_vars['shape']->value['Description'];?>
</p>

					<div class="col-lg-6 paragraph_1">
						<a href="multiKey.php?id=<?php echo $_smarty_tpl->tpl_vars['shape']->value['Shape_Category_ID'];?>
" class="btn btn-default btn-md form-control space" id="but">Key</a>
                        
					</div>
					</br>
					</br>
					<div class="col-lg-6 paragraph_2">

						<a href="species.php?id=<?php echo $_smarty_tpl->tpl_vars['shape']->value['Shape_Category_ID'];?>
" class="btn btn-default btn-md form-control" id="but">
							Species List</a>
					</div>
					</div>
				</div>
            <?php } ?>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html><?php }} ?>
