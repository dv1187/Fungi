<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 13:11:15
         compiled from "templates/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96105910458c1a3d630f281-56324208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1840b57c8d937a27f14678068ffa0d1fbbbbc27a' => 
    array (
      0 => 'templates/result.tpl',
      1 => 1493140270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96105910458c1a3d630f281-56324208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c1a3d6329981_70340889',
  'variables' => 
  array (
    'sciNameNone' => 0,
    'admin' => 0,
    'authName' => 0,
    'nameDerivation' => 0,
    'syn' => 0,
    'commonName' => 0,
    'phylum' => 0,
    'spOrder' => 0,
    'family' => 0,
    'woodSubstrate' => 0,
    'dimensions' => 0,
    'description' => 0,
    'edib' => 0,
    'comment' => 0,
    'url' => 0,
    'photos' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c1a3d6329981_70340889')) {function content_58c1a3d6329981_70340889($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>

<!--Fungi Team 2015-->
<?php echo '<script'; ?>
 type="text/javascript" src="js/ImageChanger.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="css/result.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
<?php echo '<script'; ?>
 type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.6"><?php echo '</script'; ?>
>

<body>

<div class="result-page-header">
	<h1 id="species-name"><?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['admin']->value=="true") {?>
		<br>
		<div class="edit">
			<a href="speciesUpdate.php?name=<?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
"><button> Edit </button></a>
		</div>
	<?php }?>

</div>
<div class="containerResult">
    
    
    
	<div class="row">
		<div class="col-lg-7">
			<p><strong>Scientific Name:</strong> <i><?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
</i> <?php echo $_smarty_tpl->tpl_vars['authName']->value;?>
</p>
			<p><strong>Name Derivation:</strong> <?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
</p>
			<p><strong>Synonyms:</strong> <?php echo $_smarty_tpl->tpl_vars['syn']->value;?>
</p>
			<p><strong>Common name:</strong> <?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
</p>
			<p><strong>Phylum:</strong> <?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
</p>
			<p><strong>Order:</strong> <?php echo $_smarty_tpl->tpl_vars['spOrder']->value;?>
</p>
			<p><strong>Family:</strong> <?php echo $_smarty_tpl->tpl_vars['family']->value;?>
</p>
			<p><strong>Wood substrate:</strong> <?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
</p>
			<p><strong>Dimensions:</strong> <?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
</p>
			<p><strong>Description:</strong> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
			<p><strong>Edibility:</strong> <?php echo $_smarty_tpl->tpl_vars['edib']->value;?>
</p>
			<p><strong>Comment:</strong> <?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
			<p><strong>More information at:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" style="color:olivedrab;">The Oakes Museum</a></p>
			<br/>

		</div>
	</div> <!-- end row -->
</div>

<div class="imageCont">
	<div class="hs">
		<h3><strong>Photo Examples</strong></h3><br>
        <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
?>
			<a class="fancybox" data-fancybox-group="gallery">
				<img src="Images/<?php echo $_smarty_tpl->tpl_vars['pic']->value['Photo_Name'];?>
" id="mainImage" width="500" height="100%"/></a>
            <?php break 1;?>
        <?php } ?>
	</div>
	<p id="imageLink" align="center"><?php echo $_smarty_tpl->tpl_vars['pic']->value['Caption'];?>
</p>
	<div class="showcase" onclick="changeImageOnClick(event)">
        <?php  $_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->key => $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
?>
			<img class="scImage" src="Images/<?php echo $_smarty_tpl->tpl_vars['pic']->value['Photo_Name'];?>
" width="125" height="100" title="<?php echo $_smarty_tpl->tpl_vars['pic']->value['Caption'];?>
"/>
        <?php } ?>
	</div>

</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body><?php }} ?>
