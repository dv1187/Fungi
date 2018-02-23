<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-10 10:57:56
         compiled from "smarty/templates/addSpecies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16599578655731526c9c9446-05911685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4451395caa3c8fd7b962700ab9535cdb8fd1a24' => 
    array (
      0 => 'smarty/templates/addSpecies.tpl',
      1 => 1462891165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16599578655731526c9c9446-05911685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5731526ca26bc8_59509857',
  'variables' => 
  array (
    'msg' => 0,
    'commonName' => 0,
    'nameDerivation' => 0,
    'scientificName' => 0,
    'phylum' => 0,
    'order' => 0,
    'family' => 0,
    'comments' => 0,
    'woodSubstrate' => 0,
    'dimensions' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
    'photoName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5731526ca26bc8_59509857')) {function content_5731526ca26bc8_59509857($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<div class="container">

    <?php echo $_smarty_tpl->getSubTemplate ("adminNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3><?php }?>

    <!--Add new species-->
    <form action="addSpecies.php" method="post" id="newSpecies" enctype="multipart/form-data">
        <h3>New Species:</h3>

        Scientific Name:
        <input type="text" name="commonName"
                <?php if (isset($_smarty_tpl->tpl_vars['commonName']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
"<?php }?>
               class="form-control"><br>
        Common Name:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['nameDerivation']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
"<?php }?>
               name="nameDerivation"><br>
        Name Derivation:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['scientificName']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['scientificName']->value;?>
"<?php }?>
               name="scientificName"><br>
        Phylum:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['phylum']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
"<?php }?>
               name="phylum"><br>
        Order:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
"<?php }?>
               name="order"><br>
        Family:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['family']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['family']->value;?>
"<?php }?>
               name="family"><br>
        Comment:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
"<?php }?>
               name="comments"><br>
        Wood Substrate:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['woodSubstrate']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
"<?php }?>
               name="woodSubstrate"><br>
        Dimensions:
        <input type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
"<?php }?>
               name="dimensions"><br>
        Shape Association:
        <select name="shape" class="form-control">
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
        </select><br>

        Add Image:<br>
        <?php if (isset($_smarty_tpl->tpl_vars['photoName']->value)) {?>
            <img class="pic glossarypic" src="img/<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
">
        <?php }?>

        <div id="addingImages">
            <div class="uploadDiv">
                <input name="file[]" type="file" id="file"/>
            </div>
            Caption: <input type="text" class="form-control" name="caption[0]"/><br>
        </div>
        <input type="button" id="addDiv" class="btn btn-default form-control sub resetSpace" value="Add More Photo"/>

        <input type="submit" class="btn btn-default btn-md add form-control" value="Add" name="addSpecies">

    </form>
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
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>


<?php }} ?>
