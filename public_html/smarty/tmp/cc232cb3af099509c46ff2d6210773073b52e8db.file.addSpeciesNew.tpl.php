<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 13:57:30
         compiled from "templates/addSpeciesNew.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48118739858e3c238639b86-60562348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc232cb3af099509c46ff2d6210773073b52e8db' => 
    array (
      0 => 'templates/addSpeciesNew.tpl',
      1 => 1493143042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48118739858e3c238639b86-60562348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58e3c2386a63c5_14855519',
  'variables' => 
  array (
    'msg3' => 0,
    'msg' => 0,
    'dup' => 0,
    'msgSci' => 0,
    'msgChar' => 0,
    'scientificName' => 0,
    'authorityName' => 0,
    'nameDerivation' => 0,
    'synonyms' => 0,
    'synonyms_discoverer' => 0,
    'commonName' => 0,
    'phylum' => 0,
    'order' => 0,
    'family' => 0,
    'woodSubstrate' => 0,
    'dimensions' => 0,
    'edibility' => 0,
    'description' => 0,
    'comments' => 0,
    'moreInfo' => 0,
    'shapeArray' => 0,
    'key' => 0,
    'shape' => 0,
    'item' => 0,
    'color' => 0,
    'stalk' => 0,
    'hair' => 0,
    'fruit' => 0,
    'unusual' => 0,
    'photoName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e3c2386a63c5_14855519')) {function content_58e3c2386a63c5_14855519($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"admin"), 0);?>


<link rel="stylesheet" type="text/css" href="css/addSpecies.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

<body>
<div id="enter">
<div class="result-page-header">
    <h1 id="species-name">Add New Species</h1>
</div>
<div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['msg3']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg3']->value;?>
</h3><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['dup']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['dup']->value;?>
</h3><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['msgSci']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msgSci']->value;?>
</h3><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['msgChar']->value)) {?><h3 id="warning"><?php echo $_smarty_tpl->tpl_vars['msgChar']->value;?>
</h3><?php }?>

    <!--Add new species-->
    <form name="form" id="form" action="addSpecies.php" method="get" enctype="multipart/form-data" onsubmit="return confirm
    ('Select OK to confirm submission or Cancel to make changes.')">
        <h3>New Species:</h3><br>

        Scientific Name:
	
        <textarea type="text" name="scientificName"
            <?php if (isset($_smarty_tpl->tpl_vars['scientificName']->value)) {?>
               value="<?php echo $_smarty_tpl->tpl_vars['scientificName']->value;?>
"<?php }?>
               class="form-control" required></textarea>
        Authority Name:
        <textarea type="text" name="authorityName"
                <?php if (isset($_smarty_tpl->tpl_vars['authorityName']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['authorityName']->value;?>
"<?php }?>
               class="form-control"></textarea>
        Name Derivation:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['nameDerivation']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
"<?php }?>
               name="nameDerivation"></textarea>

	<table>
	<tr>
	<td>Synonyms:
	        <div id="addSyn">
	            <div class="more">
	        <textarea type="text" class="form-control space"
	                <?php if (isset($_smarty_tpl->tpl_vars['synonyms']->value[0])) {?>
	                    value="<?php echo $_smarty_tpl->tpl_vars['synonyms']->value[0];?>
"<?php }?>
	               name="synonyms[]"></textarea>
	            </div>
	        </div>
	</td>
	 
	<td>Synonym Authority Name:
	        <div id="addSynDisc">
	            <div class="more">

	        <textarea type="text" class="form-control space"
	                <?php if (isset($_smarty_tpl->tpl_vars['synonyms_discoverer']->value[0])) {?>
	                    value="<?php echo $_smarty_tpl->tpl_vars['synonyms_discoverer']->value[0];?>
"<?php }?>
	               name="synonyms_discoverer[]"></textarea>
	            </div>
	        </div>
	</td>
	</tr>
	</table>

        <input type="button" id="addSynonyms" class="btn btn-default form-control sub resetSpace" value="Add Synonym"/>
	
	<br>
        Common Name(s):
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['commonName']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
"<?php }?>
               name="commonName"></textarea>
        Phylum:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['phylum']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
"<?php }?>
               name="phylum"></textarea>
        Order:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
"<?php }?>
               name="order"></textarea>
        Family:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['family']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['family']->value;?>
"<?php }?>
               name="family"></textarea>
        Occurance on Wood Substrate:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['woodSubstrate']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
"<?php }?>
               name="woodSubstrate"></textarea>
        Dimensions:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
"<?php }?>
               name="dimensions"></textarea>
        <!--- INSERT VARIABLE PORTION HERE ----->
        Edibility:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['edibility']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['edibility']->value;?>
"<?php }?>
               name="edibility"></textarea>

	Description:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['description']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"<?php }?>
               name="description"></textarea>

        Comments:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
"<?php }?>
               name="comments"></textarea>
        More information at:
        <textarea type="text" class="form-control"
                <?php if (isset($_smarty_tpl->tpl_vars['moreInfo']->value)) {?>
                    value="<?php echo $_smarty_tpl->tpl_vars['moreInfo']->value;?>
"<?php }?>
               name="moreInfo"></textarea>


        Shape Association:
        <select name="shape" class="form-control" id="shape" onChange="javascript:chgAction()" >
            <!--THIS CODE BENEATH IS SUPPOSED TO SCAN DB FOR SHAPES AND MAKE IT AS A DROP DOWN MENU-->
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shapeArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['shape']->value)&&$_smarty_tpl->tpl_vars['shape']->value==$_tmp1) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
            <?php } ?>
            <!--<option value="cupAndSaucer">Cup and Saucer</option>
            <option value="temp">Temporary</option>-->
        </select><br>

        <div id="cupAndSaucer">
            <br>Fertile surface color:<br><br>
            <input type="radio" name="fertileSurfaceColor" value="108" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='108') {?> checked="checked"<?php }?>> Whitish<br>
            <input type="radio" name="fertileSurfaceColor" value="109" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='109') {?> checked="checked"<?php }?>> Concetrically zoned with white
            and brown<br>
            <input type="radio" name="fertileSurfaceColor" value="110" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='110') {?> checked="checked"<?php }?>> Ashy grey<br>
            <input type="radio" name="fertileSurfaceColor" value="111" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='111') {?> checked="checked"<?php }?>> Blackish<br>
            <input type="radio" name="fertileSurfaceColor" value="112" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='112') {?> checked="checked"<?php }?>> Pale brown to tan to yellow-ish
            brown, reddish brown, or darker brown<br>
            <input type="radio" name="fertileSurfaceColor" value="113" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='113') {?> checked="checked"<?php }?>> Green to blue-green<br>
            <input type="radio" name="fertileSurfaceColor" value="114" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='114') {?> checked="checked"<?php }?>> Purplish<br>
            <input type="radio" name="fertileSurfaceColor" value="115" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='115') {?> checked="checked"<?php }?>> Yellow, orange-yellow to dull orange<br>
            <input type="radio" name="fertileSurfaceColor" value="116" <?php if (isset($_smarty_tpl->tpl_vars['color']->value)&&$_smarty_tpl->tpl_vars['color']->value=='116') {?> checked="checked"<?php }?>> Red, orange-red to bright orange<br>

            <br>Conspicuous stalk present:<br><br>
            <input type="radio" name="conspicuousStalk" value="117" <?php if (isset($_smarty_tpl->tpl_vars['stalk']->value)&&$_smarty_tpl->tpl_vars['stalk']->value=='117') {?> checked="checked"<?php }?>> Yes<br>
            <input type="radio" name="conspicuousStalk" value="118" <?php if (isset($_smarty_tpl->tpl_vars['stalk']->value)&&$_smarty_tpl->tpl_vars['stalk']->value=='118') {?> checked="checked"<?php }?>> No<br>

            <br>Conspicuous hair present:<br><br>
            <input type="radio" name="conspicuousHair" value="119" <?php if (isset($_smarty_tpl->tpl_vars['hair']->value)&&$_smarty_tpl->tpl_vars['hair']->value=='119') {?> checked="checked"<?php }?>> Margin of fertile surface fringed with dark brown
            or blackish hairs<br>
            <input type="radio" name="conspicuousHair" value="120" <?php if (isset($_smarty_tpl->tpl_vars['hair']->value)&&$_smarty_tpl->tpl_vars['hair']->value=='120') {?> checked="checked"<?php }?>> Stalk and outside of cup covered with white
            hairs<br>
            <input type="radio" name="conspicuousHair" value="121" <?php if (isset($_smarty_tpl->tpl_vars['hair']->value)&&$_smarty_tpl->tpl_vars['hair']->value=='121') {?> checked="checked"<?php }?>> Outer surface of cup covered with brownish
            hairs<br>

            <br>Size of individual fruit bodies:<br><br>
            <input type="radio" name="fruitBody" value="122" <?php if (isset($_smarty_tpl->tpl_vars['fruit']->value)&&$_smarty_tpl->tpl_vars['fruit']->value=='122') {?> checked="checked"<?php }?>> Smaller than 1cm<br>
            <input type="radio" name="fruitBody" value="123" <?php if (isset($_smarty_tpl->tpl_vars['fruit']->value)&&$_smarty_tpl->tpl_vars['fruit']->value=='123') {?> checked="checked"<?php }?>> larger than 1cm<br>

            <br>Unusual Features:<br><br>
            <input type="radio" name="unusual" value="124" <?php if (isset($_smarty_tpl->tpl_vars['unusual']->value)&&$_smarty_tpl->tpl_vars['unusual']->value=='124') {?> checked="checked"<?php }?>> Fruit body two-toned with tan to reddish brown fertile
            surface and blackish-brown outer surface<br>
            <input type="radio" name="unusual" value="125" <?php if (isset($_smarty_tpl->tpl_vars['unusual']->value)&&$_smarty_tpl->tpl_vars['unusual']->value=='125') {?> checked="checked"<?php }?>> Fruit body ear-shaped to irregularly cup-shaped with
            portions of the fruit body irregularly wrinkled or with raised vein-like markings<br>
        </div>
<br><br>
        <input type="submit" value="Add" name="addSpecies">

        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
    <!-- DYNAMIC DROP DOWN MENU SCRIPT -->
    <?php echo '<script'; ?>
>
        $('#name').on('change', function() {
            var val = $(this).val();
            $('#cupAndSaucer').hide();
            $('#' + val).show();

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var count = 0;
    <?php echo '</script'; ?>
>

    <!--- JQuery function to upload more images--->
    <?php echo '<script'; ?>
>

        $("#addSynonyms").click(function() {
            count = count + 1;
            var more = "<div class='more'><textarea type='text' class='form-control space' name='synonyms[]'></textarea></div>";
            $("#addSyn").append(more);
        });

    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>

        $("#addSynonyms").click(function() {
            count = count + 1;
            var more = "<div class='more'><textarea type='text' class='form-control space' name='synonyms_discoverer[]'></textarea></div>";
            $("#addSynDisc").append(more);
        });

    <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	document.querySelector('#txtSearch').addEventListener('keypress', function (e) {
    var key = e.which || e.keyCode;
    if (key === 13) { // 13 is enter
       
    }
});

<?php echo '</script'; ?>
>
</div>
</div>
</body>
</html><?php }} ?>
