<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-04 12:02:09
         compiled from "templates/updateSpeciesNew.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198599032358e3c381f20745-60760287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9cb073c536e79e03fb57341d7ae8f92016bf94' => 
    array (
      0 => 'templates/updateSpeciesNew.tpl',
      1 => 1490837919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198599032358e3c381f20745-60760287',
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
  'unifunc' => 'content_58e3c381f2be08_50306383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e3c381f2be08_50306383')) {function content_58e3c381f2be08_50306383($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

<body>

<div class="result-page-header">
    <h1 id="species-name">Update Species</h1>
</div>
<div class="container">
    <form name="form" id="form" action="updateSpecies.php" method="get" enctype="multipart/form-data">
        <h3>Choose Species:</h3><br>

        <select name="shape" class="form-control" id="shape" onChange="javascript:chgAction()">
            <!--THIS CODE BENEATH IS SUPPOSED TO SCAN DB FOR SHAPES AND MAKE IT AS A DROP DOWN MENU-->
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
            <!--<option value="cupAndSaucer">Cup and Saucer</option>
            <option value="temp">Temporary</option>-->
        </select><br>
        <input type="submit" value="Find" name="addSpecies">
    </form>
        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>


<?php echo '<script'; ?>
>
    var count = 0;
<?php echo '</script'; ?>
>

<!--- JQuery function to upload more images--->
<?php echo '<script'; ?>
>

    $("#addDiv").click(function() {
        count = count + 1;
        var uploadDiv = "<div class='uploadDiv'><input name='file[]' type='file' id='file'/></div>" +
            "Caption: <input type='text' class='form-control'  name='caption["+count+"]'/><br>";
        $("#addingImages").append(uploadDiv);
    });

<?php echo '</script'; ?>
>


</div>
</body>
</html><?php }} ?>
