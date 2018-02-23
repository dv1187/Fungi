<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-09 17:22:32
         compiled from "templates/addSpeciesTemp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38874888158c19b716769a4-66291910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59410ca8f0e9b6375221684bc8e653231474a595' => 
    array (
      0 => 'templates/addSpeciesTemp.tpl',
      1 => 1489097834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38874888158c19b716769a4-66291910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c19b71687053_73616301',
  'variables' => 
  array (
    'msg' => 0,
    'msgSci' => 0,
    'msgAuth' => 0,
    'msgName' => 0,
    'msgSyn' => 0,
    'msgCom' => 0,
    'msgPhy' => 0,
    'msgOrder' => 0,
    'msgFamily' => 0,
    'msgWood' => 0,
    'msgDim' => 0,
    'msgEdi' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'item' => 0,
    'msgColor' => 0,
    'msgStalk' => 0,
    'msgHair' => 0,
    'msgFruit' => 0,
    'photoName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c19b71687053_73616301')) {function content_58c19b71687053_73616301($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

<body>

<div class="result-page-header">
    <h1 id="species-name">Add New Species</h1>
</div>
<div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3><?php }?>
    <!---->
    <!--<h3 id="warning"></h3>-->

    <!--Add new species-->
    <form action="addSpecies.php" method="get" enctype="multipart/form-data">
        <h3>New Species:</h3><br>

        Scientific Name:<?php if (isset($_smarty_tpl->tpl_vars['msgSci']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgSci']->value;?>
</strong></h3><?php }?>
        <input type="text" name="scientificName"
               value=""
               class="form-control"><br>
        Authority Name:<?php if (isset($_smarty_tpl->tpl_vars['msgAuth']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgAuth']->value;?>
</strong></h3><?php }?>
        <input type="text" name="authorityName"
               value=""
               class="form-control"><br>
        Name Derivation:<?php if (isset($_smarty_tpl->tpl_vars['msgName']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgName']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="nameDerivation"><br>
        Synonyms:<?php if (isset($_smarty_tpl->tpl_vars['msgSyn']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgSyn']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="synonyms"><br>
        Common Name(s):<?php if (isset($_smarty_tpl->tpl_vars['msgCom']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgCom']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="commonName"><br>
        Phylum:<?php if (isset($_smarty_tpl->tpl_vars['msgPhy']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgPhy']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="phylum"><br>
        Order:<?php if (isset($_smarty_tpl->tpl_vars['msgOrder']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgOrder']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="order"><br>
        Family:<?php if (isset($_smarty_tpl->tpl_vars['msgFamily']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgFamily']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="family"><br>
        Occurance on Wood Substrate:<?php if (isset($_smarty_tpl->tpl_vars['msgWood']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgWood']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="woodSubstrate"><br>
        Dimensions:<?php if (isset($_smarty_tpl->tpl_vars['msgDim']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgDim']->value;?>
</strong></h3><?php }?>
        <input type="text" class="form-control"
               value=""
               name="dimensions"><br>
        <!--- INSERT VARIABLE PORTION HERE ----->
        Edibility:<?php if (isset($_smarty_tpl->tpl_vars['msgEdi']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgEdi']->value;?>
</strong></h3><?php }?>
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
            <?php if (isset($_smarty_tpl->tpl_vars['msgColor']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgColor']->value;?>
</strong></h3><?php }?><br>Fertile surface color:<br><br>
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

            <?php if (isset($_smarty_tpl->tpl_vars['msgStalk']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgStalk']->value;?>
</strong></h3><?php }?><br>Conspicuous stalk present:<br><br>
            <input type="radio" name="conspicuousStalk" value="yes"> Yes<br>
            <input type="radio" name="conspicuousStalk" value="no"> No<br>

            <?php if (isset($_smarty_tpl->tpl_vars['msgHair']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgHair']->value;?>
</strong></h3><?php }?><br>Conspicuous hair present:<br><br>
            <input type="radio" name="conspicuousHair" value="margin"> Margin of fertile surface fringed with dark brown
            or blackish hairs<br>
            <input type="radio" name="conspicuousHair" value="stalk"> Stalk and outside of cup covered with white
            hairs<br>
            <input type="radio" name="conspicuousHair" value="outerSurface"> Outer surface of cup covered with brownish
            hairs<br>

            <?php if (isset($_smarty_tpl->tpl_vars['msgFruit']->value)) {?><h3 id="warning"><strong><?php echo $_smarty_tpl->tpl_vars['msgFruit']->value;?>
</strong></h3><?php }?><br>Size of individual fruit bodies:<br><br>
            <input type="radio" name="fruitBody" value="smaller"> Smaller than 1cm<br>
            <input type="radio" name="fruitBody" value="larger"> larger than 1cm<br>

            <br>Unusual Features:<br><br>
            <input type="radio" name="unusual" value="two-tone"> Fruit body two-toned with tan to reddish brown fertile
            surface and blackish-brown outer surface<br>
            <input type="radio" name="unusual" value="ear-shaped"> Fruit body ear-shaped to irregularly cup-shaped with
            portions of the fruit body irregularly wrinkled or with raised vein-like markings<br>
        </div>
<br><br>
        <input type="submit" value="Add" name="addSpecies">

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
