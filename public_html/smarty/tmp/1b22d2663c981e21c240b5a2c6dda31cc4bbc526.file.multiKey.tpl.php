<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 10:25:54
         compiled from "templates/multiKey.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207874239358c1a4d7c9f5f1-04449820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b22d2663c981e21c240b5a2c6dda31cc4bbc526' => 
    array (
      0 => 'templates/multiKey.tpl',
      1 => 1492192189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207874239358c1a4d7c9f5f1-04449820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c1a4d7cd6522_77507507',
  'variables' => 
  array (
    'id' => 0,
    'charList' => 0,
    'charID' => 0,
    'char' => 0,
    'opt' => 0,
    'success' => 0,
    'scientificName' => 0,
    'i' => 0,
    'urlToBePassed' => 0,
    'sciName' => 0,
    'url' => 0,
    'consId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c1a4d7cd6522_77507507')) {function content_58c1a4d7cd6522_77507507($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Key",'pageName'=>"query"), 0);?>

<link href="css/query.css" type=text/css rel="stylesheet" />

	<div class="container">
		<div class="row">
		<h3>Choose the characteristics that best describe your specimen.</h3>
			<hr>
	</div>
		<div class="row">

			<div class="col-md-8">

		<form action="multiKey.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
			<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charID']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['char']->value['ID']==$_smarty_tpl->tpl_vars['id']->value) {?>
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" aria-expanded="true"><span class="glyphicon glyphicon-th-list">
									</span> <?php echo $_smarty_tpl->tpl_vars['char']->value['Name'];?>

									</a>
								<?php }?>
							<?php } ?>

						</h4>
					</div>
					<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['charID']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['char']->value['ID']==$_smarty_tpl->tpl_vars['id']->value) {?>
					<div id="collapse<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  class="panel-collapse collapse in" aria-expanded="true">
						<?php }?>
						<?php } ?>
						<div class="list-group">
							<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['char']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
								<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_ID'];?>
" name=<?php echo $_smarty_tpl->tpl_vars['char']->value['Name'];?>
 value=<?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_ID'];?>
 onchange="keyChoices(this.value)"> <?php echo $_smarty_tpl->tpl_vars['opt']->value['Opt_Name'];?>
<br>

							<?php } ?>
						</div>

					</div>

				</div>
			<?php } ?>

		</form>
			</div>
			<div class="col-md-4">
		<?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</h3><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['scientificName']->value)) {?>
			<h3>Species:</h3> <ul>
			<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['scientificName']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['urlToBePassed']->value[$_tmp2];?>
' class="nothing"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['scientificName']->value[$_tmp3];?>
 </a>

				</li>
			<?php }} ?>
		</ul>
		<?php }?>

				<p id="demo"></p>
		<p id="populate"></p>
				<div id="setup">
						<?php if (isset($_smarty_tpl->tpl_vars['sciName']->value)) {?>
					<h3>Species:</h3> <ul>

					<?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['sciName']->value);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp4+1 - (1) : 1-($_tmp4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
						<li><a href='result.php?name=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['url']->value[$_tmp5];?>
'> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['sciName']->value[$_tmp6];?>
 </a>
						</li>
					<?php }} ?>
				</ul>
				<?php }?>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo '<script'; ?>
>

	$('input:checkbox').change(function() {
		var selectedOptions = [];
		var count = 0;
		$(':checked').each(function(){
			selectedOptions[count] = $(this).attr("id");
			count++;
		});

		if(count > 0) {
			document.getElementById("setup").innerHTML = "";

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("populate").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "multiKeyList.php?val=" + selectedOptions + "&id=" + <?php echo $_smarty_tpl->tpl_vars['consId']->value;?>
, true);
			xhttp.send();
		} else {
			document.getElementById("populate").innerHTML = "";

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("populate").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "multiKeyList.php?val=none&id=" + <?php echo $_smarty_tpl->tpl_vars['consId']->value;?>
, true);
			xhttp.send();
		}
	})
<?php echo '</script'; ?>
>

</html><!-- 11 on
$("input:checkbox").change(function(){
	var selectedOptions
	$(':checkd').each(function(){
		build selected list
	}

}--><?php }} ?>
