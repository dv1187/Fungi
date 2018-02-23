<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-09 09:37:00
         compiled from "smarty/templates/addSpeciesTemp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128952066058c1688cc24b64-35971177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c91cf5e2e89d0bf8bdd0e3b4e46a7207babc36cd' => 
    array (
      0 => 'smarty/templates/addSpeciesTemp.tpl',
      1 => 1489029330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128952066058c1688cc24b64-35971177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
    'photoName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c1688cc36275_77279771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c1688cc36275_77279771')) {function content_58c1688cc36275_77279771($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Species</title>
</head>
<body>
<div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3><?php }?>
    <!---->
    <!--<h3 id="warning"></h3>-->

    <!--Add new species-->
    <form action="addSpecies.php" method="get" enctype="multipart/form-data">
        <h3>New Species:</h3>

        Scientific Name:
        <input type="text" name="scientificName"
               value=""
               class="form-control"><br>
        Authority Name:
        <input type="text" name="authorityName"
               value=""
               class="form-control"><br>
        Name Derivation:
        <input type="text" class="form-control"
               value=""
               name="nameDerivation"><br>
        Synonyms:
        <input type="text" class="form-control"
               value=""
               name="synonyms"><br>
        Common Name(s):
        <input type="text" class="form-control"
               value=""
               name="commonName"><br>
        Phylum:
        <input type="text" class="form-control"
               value=""
               name="phylum"><br>
        Order:
        <input type="text" class="form-control"
               value=""
               name="order"><br>
        Family:
        <input type="text" class="form-control"
               value=""
               name="family"><br>
        Occurance on Wood Substrate:
        <input type="text" class="form-control"
               value=""
               name="woodSubstrate"><br>
        Dimensions:
        <input type="text" class="form-control"
               value=""
               name="dimensions"><br>
        <!--- INSERT VARIABLE PORTION HERE ----->
        Edibility:
        <input type="text" class="form-control"
               value=""
               name="edibility"><br>
        Comment:
        <input type="text" class="form-control"
               value=""
               name="comments"><br>
        More information at:
        <input type="text" class="form-control"
               value=""
               name="moreInfo"><br>


        Shape Association:
        <select name="shape" class="form-control">
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

        <div class="cupAndSaucer">
            <br>Fertile surface color:<br>
            <input type="radio" name="fertileSurfaceColor" value="whitish"> Whitish<br>
            <input type="radio" name="fertileSurfaceColor" value="concetricallyZoned"> Concetrically zoned with white
            and brown<br>
            <input type="radio" name="fertileSurfaceColor" value="ashyGrey"> Ashy grey<br>
            <input type="radio" name="fertileSurfaceColor" value="blackish"> Blackish<br>
            <input type="radio" name="fertileSurfaceColor" value="paleBrownToTan"> Pale brown to tan to yellow-ish
            brown, reddish brown, or darker brown<br>
            <input type="radio" name="fertileSurfaceColor" value="greenToBlue"> Green to blue-green<br>
            <input type="radio" name="fertileSurfaceColor" value="purplish"> Purplish<br>
            <input type="radio" name="fertileSurfaceColor" value="yellow"> Yellow, orange-yellow to dull orange<br>
            <input type="radio" name="fertileSurfaceColor" value="red"> Red, orange-red to bright orange<br>

            <br>Conspicuous stalk present:<br>
            <input type="radio" name="conspicuousStalk" value="yes"> Yes<br>
            <input type="radio" name="conspicuousStalk" value="no"> No<br>

            <br>Conspicuous hair present:<br>
            <input type="radio" name="conspicuousHair" value="margin"> Margin of fertile surface fringed with dark brown
            or blackish hairs<br>
            <input type="radio" name="conspicuousHair" value="stalk"> Stalk and outside of cup covered with white
            hairs<br>
            <input type="radio" name="conspicuousHair" value="outerSurface"> Outer surface of cup covered with brownish
            hairs<br>

            <br>Size of individual fruit bodies:<br>
            <input type="radio" name="fruitBody" value="smaller"> Smaller than 1cm<br>
            <input type="radio" name="fruitBody" value="larger"> larger than 1cm<br>

            <br>Unusual Features:<br>
            <input type="radio" name="unusual" value="two-tone"> Fruit body two-toned with tan to reddish brown fertile
            surface and blackish-brown outer surface<br>
            <input type="radio" name="unusual" value="ear-shaped"> Fruit body ear-shaped to irregularly cup-shaped with
            portions of the fruit body irregularly wrinkled or with raised vein-like markings<br>
        </div>

        <!--Add Image:<br>-->
        <!--<?php if (isset($_smarty_tpl->tpl_vars['photoName']->value)) {?>-->
        <!--<img class="pic glossarypic" src="img/<?php echo $_smarty_tpl->tpl_vars['photoName']->value;?>
">-->
        <!--<?php }?>-->

        <!--<div id="addingImages">-->
        <!--<div class="uploadDiv">-->
        <!--<input name="file[]" type="file" id="file"/>-->
        <!--</div>-->
        <!--Caption: <input type="text" class="form-control" name="caption[0]"/><br>-->
        <!--</div>-->
        <!--<input type="button" id="addDiv" class="btn btn-default form-control sub resetSpace" value="Add More Photo"/>-->

        <input type="submit" value="Add" name="addSpecies">

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
    <!--<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
-->

</div>
</body>
</html><?php }} ?>
