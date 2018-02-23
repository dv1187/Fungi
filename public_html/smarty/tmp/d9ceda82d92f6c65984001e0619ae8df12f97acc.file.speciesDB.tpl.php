<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-08 21:09:15
         compiled from "smarty\templates\speciesDB.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2501958a7637fc44189-76766912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ceda82d92f6c65984001e0619ae8df12f97acc' => 
    array (
      0 => 'smarty\\templates\\speciesDB.tpl',
      1 => 1489003752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501958a7637fc44189-76766912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a7637fe6e420_67074781',
  'variables' => 
  array (
    'name' => 0,
    'resultCount' => 0,
    'data' => 0,
    'newdata' => 0,
    'fungus' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7637fe6e420_67074781')) {function content_58a7637fe6e420_67074781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_table')) include 'C:\\xampp\\htdocs\\Fungi\\public_html\\smarty\\libs\\plugins\\function.html_table.php';
?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Species List"), 0);?>


<!--Fungi Team 2015-->
<link href="css/species.css" type=text/css rel="stylesheet" />


	<div class="container" id="container">
		<div class="page-header">

			<h1 id="species-list" class="speciesTitle"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 Species List</h1>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['resultCount']->value>0) {?>
		<!--<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>5,'table_attr'=>"class=table"),$_smarty_tpl);?>
 -->

		<table class="display" id="datatable" cellspacing="0" width="100%">
		<!--data-toggle="table" data-sort-name="sci_name"
			   data-sort-order="desc" class="table table-striped table-hover -->
		<thead>
			<tr>
				<th data-field="sci_name" data-sortable="true">Scientific Name</th>
				<th data-field="common_name" data-sortable="true">Common Name</th>
				<th data-field="phylum" data-sortable="true">Phylum</th>
				<th data-field="order" data-sortable="true">Order</th>
				<th data-field="family" data-sortable="true">Family</th>
				<th data-field="synonyms" data-sortable="true">Synonyms</th>
			</tr>
		</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['fungus'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fungus']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fungus']->key => $_smarty_tpl->tpl_vars['fungus']->value) {
$_smarty_tpl->tpl_vars['fungus']->_loop = true;
?>

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

				<?php } ?>
			</tbody>
		</table>
	</div>



			<!---
			<form>
				Search: <input placeholder="Scientific Name" type="text" onkeyup="doSearch(this.value)">
			</form>

			<table id="tableList" class="table table-striped table-hover">
			<thead>
				<tr>
					<th><button value="Scientific_Name" id="Scientific_Name" class="button" type="button" onclick="orderBy(this.id)">Scientific Name</button></th>
					<th><button value="Common_Name" id="Common_Name" class="button" type="button" onclick="orderBy(this.id)">Common Name</button></th>
					<th><button value="Phylum" id="Phylum" class="button" type="button" onclick="orderBy(this.id)">Phylum</button></th>
					<th><button value="Sp_Order" id="Sp_Order" class="button" type="button" onclick="orderBy(this.id)">Order</button></th>
					<th><button value="Family" id="Family" class="button" type="button" onclick="orderBy(this.id)">Family</button></th>
				</tr>
			</thead> <!--make into another tpl that gets called from this tpl, that way i can just change the tpl?-->
<!--
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
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

--->
	</div>
	<?php echo '<script'; ?>
>
		$(document).ready(function() {
			$('#datatable').DataTable();
		} );
	<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
 
	
		

			

			
			
				
					
				
			
			
			
		

		
			
				
				
				
					
						
					
				
				
				
			
				
				
				
					
						
					
				
				
				

			
		
	
</body><?php }} ?>
