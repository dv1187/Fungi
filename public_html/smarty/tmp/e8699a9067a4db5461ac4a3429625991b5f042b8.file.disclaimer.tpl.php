<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-20 00:15:39
         compiled from "templates\disclaimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18923827185a8b60cd532b71-61078309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8699a9067a4db5461ac4a3429625991b5f042b8' => 
    array (
      0 => 'templates\\disclaimer.tpl',
      1 => 1519085736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18923827185a8b60cd532b71-61078309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a8b60cd59ebb0_55117335',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b60cd59ebb0_55117335')) {function content_5a8b60cd59ebb0_55117335($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"About"), 0);?>

<link href="css/about.css" type=text/css rel="stylesheet" />

	<header class="business-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="tagline2"><strong>Messiah College</strong><br>Department of Biological Sciences</h2>
				</div>
			</div>
		</div>
	</header><!-- Page Content -->
<body>
	<div class="container">
		<hr>
		<div class="row">
			<div class="col-sm-8 collapse-group">
				<h2 class="mov">Disclaimer</h2>

				<p>Certain wood decay fungi are edible.
					Others are toxic and some are deadly. Individual allergic reactions are always possible even with mushrooms
					generally considered safe. While every effort has been made to provide accurate information regarding edibility,
					where such information is appropriate, the primary purpose of this web site is to identify wild mushrooms growing on wood,
					not to guide the user to edible wild mushrooms. If the user chooses to eat wild mushrooms, doing so is at his or her own risk.
					Neither the author nor the Oakes Museum or Messiah College is responsible for decisions made as a result of using the keys and
					information found at this site. It is the responsibility of the individual to know for certain which species are edible or poisonous.
					One of the very best ways of gaining this knowledge is by joining a local mushroom club.
					The North American Mycological Association <a class="links" href="http://www.namyco.org/" target = "_blank">(NAMA)</a>
					maintains links to local clubs throughout the country.</p>
				
				</div><!-- end collapsed group -->


			<div class="col-sm-4">
				<h2>Contact Us</h2>

				<address>
					<strong>Gary Emberger</strong><br>
					Professor of Botany<br>
					Specialty: Mycology; Plant Taxonomy<br>
					Education: Ph.D., North Carolina State University
				</address>

				<address>
					<abbr title="Phone">P:</abbr>(717)-796-1800 ext. 3390<br>
					<abbr title="Email">E:</abbr> <a href=
					"mailto:gemberg@messiah.edu">gemberg@messiah.edu</a>
				</address>
			</div>
		</div><!-- /.row -->
	</div>


		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div><!-- /.container -->
	<!-- jQuery -->
	<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
> <!-- Bootstrap Core JavaScript -->
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/read_more.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		<?php echo '</script'; ?>
>
	</body><?php }} ?>
