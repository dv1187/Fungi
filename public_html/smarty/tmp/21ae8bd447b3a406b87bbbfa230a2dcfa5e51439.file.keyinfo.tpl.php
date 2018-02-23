<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-19 23:41:58
         compiled from "templates\keyinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18372435065a8b60c6aa9aa7-66698443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ae8bd447b3a406b87bbbfa230a2dcfa5e51439' => 
    array (
      0 => 'templates\\keyinfo.tpl',
      1 => 1518713763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18372435065a8b60c6aa9aa7-66698443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a8b60c6b23e57_96995088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b60c6b23e57_96995088')) {function content_5a8b60c6b23e57_96995088($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"About"), 0);?>

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
			<div class="col-sm-8 collapse-group"

					<hr>

					<h2>Species Included in the Keys</h2>

					<p>A number of criteria were used to decide which species to include in the keys:</p>

					<p><strong>First</strong> - the fungus must display	macroscopic characters (features visible with the unaided
					eye or with a 10x loupe) that are sufficiently distinctive to allow identification with reasonable certainty. Species
					with obscure features, or which can only be identified with	the use of a microscope, are not included.</p>

					<p><strong>Second -</strong> preference was given to common species. I used cumulative species lists of Western Penn
					Mushroomers, Eastern Penn Mushroomers, New Jersey Mycological Association, field guides, my own collecting
					experience, and observations at NEMF and NAMA meetings to help determine which species to include. Although the
					emphasis is on common species, the keys do include some less commonly encountered species.</p>

					<p><strong>Third -</strong> the organism must utilize wood as a substrate. There is a degree of latitude with this
					criterion. Some species will be found only on living trees or on relatively intact dead wood. Others occur on wood
					that is quite decomposed (well-rotted) and just a few steps	away from becoming soil. Similarly, I included a number of
					species which regularly appear on landscape bark mulch or similar substrates. Finally, some species are included
					which are typically described as terrestrial (on soil) but which may also at times occur on well-rotted wood. Keep in
					mind that certain species may appear terrestrial but in	reality are attached to buried wood (e.g., roots) or to a
					tree trunk at the soil line.</p>

					<p><strong>Fourth -</strong> strictly resupinate poroid	species were not included. If poroid, the organism had to
					be at least partly reflexed.</p>

					<p><strong>Fifth</strong> - the species must occur in Northeast North America. I consulted various references to
					ensure that all the species included in the keys are reported to occur in N.E. North America.</p>

					<p><strong>Sixth</strong> - with a few exceptions, slime molds were not included. The slime molds I included are
					quite common and fairly conspicuous. Some of these are:
					<u data-toggle="tooltip" data-placement="top" title="A species of plasmodial slime mold, a member of
					the Myxomycetes class. Commonly known as scrambled egg slime"><em>Fuligo septica</em></u>,
						<u data-toggle="tooltip" data-placement="top" title="A genus of slime moulds characterised by tall
						brown sporangia, supported on slender stalks, grow on rotting wood"><em>Stemonitis</em> sp.</u>, and
					<u data-toggle="tooltip" data-placement="top" title="Known as wolf's milk, groening's slime is a cosmopolitan
					speies of plasmodial slime often mistaken for a fungus. The fruiting bodies occur on damp rotten wood">
						<em>Lycogala epidendrum</em></u>.</p>

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
