<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 13:14:39
         compiled from "templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78041175458c19b43ce7ba1-03899072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f7d35d332f41042385654f800ac220a6c1bff57' => 
    array (
      0 => 'templates/about.tpl',
      1 => 1493140474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78041175458c19b43ce7ba1-03899072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c19b43cef749_85785494',
  'variables' => 
  array (
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c19b43cef749_85785494')) {function content_58c19b43cef749_85785494($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"About"), 0);?>

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
				<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>
				<button type = "button"> EDIT</button>
				<?php }?>
				<h2>Fungi Growing on Wood</h2>

				<p>Fungi much more widely than the indicated area.</p>

				<p><strong>Approach to Identification:</strong> Identification of lignicolous fungi at this site requires the use of
				keys based on macroscopic characters. By restricting the web site to lignicolous fungi, many, many other
				fungi are excluded. By excluding terrestrial fungi and fungi restricted to other substrates, a much smaller subset of
				organisms is defined. Consequently, the identification process is simplified.</p>

				<p><strong>Importance of Fungi on Wood:</strong> Lignicolous fungi are important. As a group, they play a vital role in
				recycling the nutrients locked up in wood. Economically, some species are capable of killing or damaging valuable timber and
				landscape trees. From a hobbyist perspective, no matter what time of year or the weather, it is almost always possible to
				find fungi on wood and they have saved many a foray from coming	up empty handed. Some are edible and highly prized. Many are
				beautiful, serving as subjects for photographers and artists. All of them are useful in teaching aspects of mycology.</p>
				
				<p><strong>More Information:</strong> If you are unfamiliar	with fungi and using keys, be sure to review the
					information on keys, the glossary, and some of the particulars about the species included in these keys.</p>
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
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>

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
