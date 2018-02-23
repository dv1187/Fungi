<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-18 21:46:40
         compiled from "templates\glossary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3875082765a89f440032cd8-70620759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a414a8a2f02df196d27ed5be5444f83d5123c601' => 
    array (
      0 => 'templates\\glossary.tpl',
      1 => 1518713763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3875082765a89f440032cd8-70620759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'terms' => 0,
    'term' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a89f4400e0442_78711109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89f4400e0442_78711109')) {function content_5a89f4400e0442_78711109($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Glossary",'pageName'=>"glossary"), 0);?>


<body>

<div class="container">
    <div class="page-header">
        <h1 class="glossarytitle">Glossary</h1>
    </div>

    <p>As with any specialized area of study,
        mycology employs specialized words to convey
        specific meanings. While highly technical language
        is minimized in the keys, the user should understand
        the specialized terms that are used. Taking the time
        to do this will greatly facilitate the use of the keys
        and understanding of the species descriptions.
        The specialized terms found in the keys are defined here and,
        in cases where a picture is worth a thousand words,
        the term is illustrated as well.
    </p><hr>


    <form action="" method="post">
        Search: <input type="text" name="search" placeholder="search for fungi" onkeyup="doSearch(this.value)"/>
    </form>


    <table class="table table-striped" id = "term">

        <thead class="thead-default">
            <tr class="row">
                <th class="col-md-3">Term</th>
                <th class="col-md-9">Definition</th>
            <tr>
        </thead>

        <tbody>
            <?php  $_smarty_tpl->tpl_vars['term'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['term']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['terms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['term']->key => $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->_loop = true;
?>
                <tr class="row">
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['term']->value['Term'];?>
</strong></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['term']->value['Def'];?>
<br>

                        <table class="row">
                            <tr class="col-md-4">
                                    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['term']->value['Images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                        <?php if (!is_null($_smarty_tpl->tpl_vars['image']->value['Image_Name'])&&!empty($_smarty_tpl->tpl_vars['image']->value['Image_Name'])) {?>
                                            <th class="col-md-12 multiple-images">
                                                <img src="img/<?php echo $_smarty_tpl->tpl_vars['image']->value['Image_Name'];?>
" class="glossarypic"><br>
                                                <?php echo $_smarty_tpl->tpl_vars['image']->value['Caption'];?>

                                            </th>
                                        <?php }?>
                                    <?php } ?>
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo '<script'; ?>
>

    function doSearch(str) {

        if(str.length == 0){
            document.getElementById("term").innerHTML = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("term").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "glossary.php?q=" + str, true);
            xmlhttp.send();
        }else{
            document.getElementById("term").innerHTML = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("term").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "glossary.php?q=" + str, true);
            xmlhttp.send();
        }

    }

<?php echo '</script'; ?>
>

</body>

<?php }} ?>
