<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 12:35:13
         compiled from "templates/speciesUpdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189655435858e3c3ea3338b8-98464292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3d3205beaa968edf6d3dfe529b71aab75954d2' => 
    array (
      0 => 'templates/speciesUpdate.tpl',
      1 => 1493136803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189655435858e3c3ea3338b8-98464292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58e3c3ea355384_64706310',
  'variables' => 
  array (
    'sciNameNone' => 0,
    'nameDerivation' => 0,
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
    'synArray' => 0,
    'syn' => 0,
    'synonyms' => 0,
    'synonyms_discoverer' => 0,
    'variableData' => 0,
    'data' => 0,
    'part' => 0,
    'photos' => 0,
    'pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e3c3ea355384_64706310')) {function content_58e3c3ea355384_64706310($_smarty_tpl) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
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
</div>
<div class="containerResult">
    
    
    
    <div class="row">
        <div class="col-lg-7">
            <form action="speciesUpdate.php" method="get">
                <p hidden><strong>Do Not Edit:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
" name="name"></p>
            </form>
            <form action="speciesUpdate.php" method="post">
                <p hidden><strong>Do Not Edit:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
" name="name"></p>
                <p><strong>Scientific Name:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['sciNameNone']->value;?>
" name="scientificName"></p>
                <p><strong>Name Derivation:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['nameDerivation']->value;?>
" name="nameDerivation"></p>
                <p><strong>Common name:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['commonName']->value;?>
" name="commonName"></p>
                <p><strong>Phylum:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['phylum']->value;?>
" name="phylum"></p>
                <p><strong>Order:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['spOrder']->value;?>
" name="order"></p>
                <p><strong>Family:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['family']->value;?>
" name="family"></p>
                <p><strong>Wood substrate:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['woodSubstrate']->value;?>
" name="woodSubstrate"></p>
                <p><strong>Dimensions:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value;?>
" name="dimensions"></p>
                <p><strong>Description:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" name="description"></p>
                <p><strong>Edibility:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['edib']->value;?>
" name="edib"></p>
                <p><strong>Comment:</strong> <textarea rows="3" cols="85" name="comments"><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</textarea> </p>
                <p><strong>More information at:</strong> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" name="url"></p>
                <strong>Update Synonyms:</strong>
                
                

                

                
                <?php  $_smarty_tpl->tpl_vars['syn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['syn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['synArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['syn']->key => $_smarty_tpl->tpl_vars['syn']->value) {
$_smarty_tpl->tpl_vars['syn']->_loop = true;
?>
                    <p><strong><?php echo $_smarty_tpl->tpl_vars['syn']->value[1];?>
 Scientific</strong>: <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['syn']->value[1];?>
" name="sci<?php echo $_smarty_tpl->tpl_vars['syn']->value[0];?>
"></br>
                        <strong><?php echo $_smarty_tpl->tpl_vars['syn']->value[1];?>
 Discoverer</strong>: <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['syn']->value[2];?>
" name="dis<?php echo $_smarty_tpl->tpl_vars['syn']->value[0];?>
"></br>
                        <strong>Delete <?php echo $_smarty_tpl->tpl_vars['syn']->value[1];?>
</strong>: <input type="radio" value="yes" name="del<?php echo $_smarty_tpl->tpl_vars['syn']->value[0];?>
"> Yes
                        <input type="radio" value="no" name="del<?php echo $_smarty_tpl->tpl_vars['syn']->value[0];?>
" checked> No

                    <p hidden> <input type="text" size="75" value="<?php echo $_smarty_tpl->tpl_vars['syn']->value[0];?>
" name="id<?php echo $_smarty_tpl->tpl_vars['syn']->value[0];?>
"></p>
                    </p>
                <?php } ?>

                <table>
                    <tbody>
                    <tr>
                        <td style="padding-right:10px;">
                            Synonyms:
                            <div id="addSyn">
                                <div class="more">
                                    <input type="text" class="form-control"
                                            <?php if (isset($_smarty_tpl->tpl_vars['synonyms']->value[0])) {?>
                                                value="<?php echo $_smarty_tpl->tpl_vars['synonyms']->value[0];?>
"<?php }?>
                                           name="synonyms[]"><br>
                                </div>
                            </div>
                        </td>

                        <td>

                            Synonym Authority Name:
                            <div id="addSynDisc">
                                <div class="more">
                                    <input type="text" class="form-control"
                                            <?php if (isset($_smarty_tpl->tpl_vars['synonyms_discoverer']->value[0])) {?>
                                                value="<?php echo $_smarty_tpl->tpl_vars['synonyms_discoverer']->value[0];?>
"<?php }?>
                                           name="synonyms_discoverer[]"><br>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="button" id="addSynonyms" class="btn btn-default form-control sub resetSpace" value="Add Synonym"/>

                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variableData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                    <p>
                        <?php  $_smarty_tpl->tpl_vars['part'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['part']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['part']->key => $_smarty_tpl->tpl_vars['part']->value) {
$_smarty_tpl->tpl_vars['part']->_loop = true;
?>
                            <?php echo $_smarty_tpl->tpl_vars['part']->value;?>

                        <?php } ?>
                    </p>
                <?php } ?>
                <button style="background-color:olivedrab;color:white;height:50px;width:100px" value="submit" name="submit"> Update</button>
            </form>


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
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['pic']->value['Photo_Name'];?>
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
            <img class="scImage" src="img/<?php echo $_smarty_tpl->tpl_vars['pic']->value['Photo_Name'];?>
" width="125" height="100" title="<?php echo $_smarty_tpl->tpl_vars['pic']->value['Caption'];?>
"/>
        <?php } ?>
    </div>
</div>



<?php echo '<script'; ?>
>
    var count = 0;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    $("#addSynonyms").click(function() {
        count = count + 1;
        var more = "<div class='more'><input type='text' class='form-control' name='synonyms[]'></div><br>";
        $("#addSyn").append(more);
    });

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $("#addSynonyms").click(function() {
        count = count + 1;
        var more = "<div class='more'><input type='text' class='form-control' name='synonyms_discoverer[]'></div><br>";
        $("#addSynDisc").append(more);
    });

<?php echo '</script'; ?>
>

</body><?php }} ?>
