<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-18 21:37:55
         compiled from "templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17516443345a89f233dfe482-93989707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef32222fea5b3ad13e164ceac58a951b81dee494' => 
    array (
      0 => 'templates\\admin.tpl',
      1 => 1518713763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17516443345a89f233dfe482-93989707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'test' => 0,
    'resultCount' => 0,
    'newdata' => 0,
    'fungus' => 0,
    'info' => 0,
    'resultCount2' => 0,
    'data' => 0,
    'shape' => 0,
    'shapeinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a89f2340c9e14_26559752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89f2340c9e14_26559752')) {function content_5a89f2340c9e14_26559752($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Admin",'pageName'=>"Admin"), 0);?>

<!--Fungi Team 2015-->
<link rel="stylesheet" type="text/css" href="css/result.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/admin.css" />
<link rel="stylesheet" type="text/css" href="css/species.css" />

<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.14/js/jquery.dataTables.js"><?php echo '</script'; ?>
>

<body>

<div class="result-page-header">
    <h1 id="species-name">Administrator Settings</h1>
</div>
<div class="container">
    <div class="adminDiv">
        <a href="addSpecies.php">
            <div class="adminButton">
                Add Species <?php echo $_smarty_tpl->tpl_vars['test']->value;?>

            </div>
        </a>
        <a href="addShape.php">
            <div class="adminButton">
                Add Shape
            </div>
        </a>
    </div> <!-- end row -->

    <h1>Species Edit</h1>
    <table class="display" id="datatable" cellspacing="0" width="100%">
        <?php if ($_smarty_tpl->tpl_vars['resultCount']->value>0) {?>

        <thead>
        <tr>
            <th data-field="sci_name" data-sortable="true">Scientific Name</th>
            <th data-field="common_name" data-sortable="true">Common Name</th>
            <th data-field="phylum" data-sortable="true">Phylum</th>
            <th data-field="order" data-sortable="true">Order</th>
            <th data-field="family" data-sortable="true">Family</th>
            <th data-field="synonyms" data-sortable="true">Synonyms</th>
            <th data-field="synonyms" data-sortable="true">Delete</th>
	    <th data-field="synonyms" data-sortable="true">Edit</th>
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
    <?php } else { ?> No Species Found
    <?php }?>

    
    
        

    <br><br>
    <h1>Shapes Edit</h1>
    <table class="display" id="datatableShape" cellspacing="0" width="100%">
        <?php if ($_smarty_tpl->tpl_vars['resultCount2']->value>0) {?>

        <thead>
        <tr>
            <th data-field="sci_name" data-sortable="true">Shape Name</th>
            <th data-field="common_name" data-sortable="true">Description</th>
            <th data-field="synonyms" data-sortable="true">Delete</th>

        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['shape'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shape']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shape']->key => $_smarty_tpl->tpl_vars['shape']->value) {
$_smarty_tpl->tpl_vars['shape']->_loop = true;
?>

            <tr>
                <?php  $_smarty_tpl->tpl_vars['shapeinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shapeinfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shape']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shapeinfo']->key => $_smarty_tpl->tpl_vars['shapeinfo']->value) {
$_smarty_tpl->tpl_vars['shapeinfo']->_loop = true;
?>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['shapeinfo']->value;?>

                    </td>
                <?php } ?>
            </tr>

        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?> No Shapes Found
    <?php }?>

    </br>

    <a href="logout.php">
        <div class="adminButtonLogout">
            Logout
        </div>
    </a>

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php echo '<script'; ?>
>
    $(document).ready( function () {
        $('#datatable').DataTable();
    } );
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready( function () {
        $('#datatableShape').DataTable();
    } );
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	function deleteConfirm() {
		return confirm("This will permanently delete from the database and cannot be undone. Are you sure you want to delete this item?");
	}
<?php echo '</script'; ?>
>
</body><?php }} ?>
