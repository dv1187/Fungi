<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 13:17:03
         compiled from "templates/emberger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170947612358e3bfc10e66b3-16457640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f2ec9b1f20ec586cea29d6f0c511d90f9fa50b' => 
    array (
      0 => 'templates/emberger.tpl',
      1 => 1493140615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170947612358e3bfc10e66b3-16457640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58e3bfc10f4d24_34247016',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e3bfc10f4d24_34247016')) {function content_58e3bfc10f4d24_34247016($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"About"), 0);?>

<link href="css/emberger.css" type=text/css rel="stylesheet" />

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

			<div class="col-sm-8">

				<h2>Dr. Gary Emberger</h2>

				<p>I'm a professor of biology at Messiah College where I've taught since 1981. You can read more about the courses I teach, my interests,
				and other responsibilities at my Messiah College
					<a class="links" href="http://www.messiah.edu/a/academics/facultydir/faculty_profile.php?directoryID=9&entryID=430">home page</a>.
				</p>

				<p>My interest in fungi began in a formal manner through the introductory mycology course I took at Penn State.
					In spring term, 1974, I took BIOL 418 Mycology with Dr.
					C. Leonard Fergus as the instructor. Dr. Fergus loved the fungi	and during the course I caught some of his passion for this
					group of organisms. As a result, I'm quite certain I'd still be	involved with mushrooms as a hobby even if I did not teach
					mycology and biology as a profession. In any event, I combined my interest in plants with my new interest in mycology and
					completed graduate work in plant pathology at both Penn State and at North Carolina State University. While at NCSU, I took
					PP 625 Advanced Mycology in the fall of 1978, taught by Dr. Larry Grand. I still fondly remember staying up all night (the
					only time I ever did this) to complete a collection of fungal specimens to be turned in as part of the final grade. I
					reminded him of this at the 2004 NAMA meetings in North Carolina! In the plant pathology world of microscopic plant
					pathogens, PP 625 provided an interesting contrast in studying some of the macroscopic fungi. Larry is one of the contributing
					photographers for the site.</p>

				<p>In the early years of teaching mycology at Messiah College, my students collected a number of specimens which they could
				not identify. Neither could I with any confidence. Eastern Penn	Mushroomers did not exist and I turned to Dr. Fergus at Penn
				State for help. He graciously offered his assistance. Many of the specimens I took to him were wood decay species. As I
				became more proficient at identifying wood decay fungi I appreciated their usefulness in teaching a mycology course with
				a field collection requirement. Even when conditions were too dry for terrestrial fungi, my students could almost always find
				fungi on logs, stumps, and decaying wood. In addition, many of the species are simply beautiful and often spectacular. My
				appreciation for this group of fungi continues to deepen over the years.</p>

				<p>Because of my contact with Dr. Fergus, I was aware of his book <i>Illustrated Genera of Wood Decay Fungi</i>. I was intrigued by
				the concept of a key to fungi which are restricted to a	specific habitat, in this case, wood. The idea slowly developed
				in my mind that a web-based identification guide to fungi growing on wood would make for an interesting academic project.
				It would be an updated version of the out-of-print <i>Illustrated Genera of Wood Decay Fungi</i> - the need for which i still felt existed.
				And, can there ever be too many field guides to fungi? Following a time as department chair, the opportunity
				presented itself to pursue this project. I started work on the web site in 2003.</p>

				<p>Because Dr. Fergus had passed away some years earlier, I approached his son,
					Charles, with my idea of creating a web-based version of his father’s publication.
					Charles and his siblings graciously gave me permission to use and adapt material
					in <i>Illustrated Genera of Wood Decay Fungi</i>.
					Charles Fergus updated and republished one
					of his father's booklets dealing with mushrooms. It's called <i>Common Edible and
					Poisonous Mushrooms of the Northeast</i>. The book may be purchased through
					<a class="links" href="http://www.stackpolebooks.com/cgi-bin/stackpolebooks.storefront">Stackpole Books<a/>.
				</p>

				
					
				
				
					
				

			</div>
			<div class="col-sm-4">
				<img alt="" class="img-rounded img-responsive img-right" src="img/Emberger.jpg">
			</div>
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

		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		</div>


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
