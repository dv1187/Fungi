<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 22:09:14
         compiled from "smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:592730552573140473eadb4-45695011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '882627ac3997e1aa944fa104fc5319372a4bdf98' => 
    array (
      0 => 'smarty/templates/index.tpl',
      1 => 1462846510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '592730552573140473eadb4-45695011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5731404742bb54_10862636',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5731404742bb54_10862636')) {function content_5731404742bb54_10862636($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Fungi",'pageName'=>"home"), 0);?>


<header class="index-header">
    <link href="css/index.css" type=text/css rel="stylesheet" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <h2 class="tagline"><strong>Fungi Growing on Wood</strong><br>
                    Keys,Photographs, and Descriptions<br>of fungi utilizing wood as a substrate
                    </h2>
            </div>
        </div>
    </div>
</header>

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <h2>Introduction</h2>
                <p> Fungi Growing on Wood is a website devoted to the identification and appreciation of fungi growing in
                    close association with living and dead wood. The fungi described here are those in a parasitic or
                    <u data-toggle="tooltip" data-placement="top" title="Myco-heterotrophs that parasitize fungi rather
                    than dead organic matter directly">saprophytic</u> relationship with trees.
                    <u data-toggle="tooltip" data-placement="top" title="Filaments of root systems that are more effective in
                    absorbing nutrients and water">Mycorrhizal fungi</u>, also in close association with trees, are not strongly
                    represented here even though some of them may be found on well-rotted wood. The organisms described on this
                    website are often referred to as <u data-toggle="tooltip" data-placement="top" title="Fungi that decays wood
                    by attacking the carbohydrates in wood and decaying lignin">lignicolous fungi</u>.
                    Most species are illustrated with multiple images to show as many diagnostic details as possible.</p>
                <p><a class="btn btn-default btn-lg" href="app.php">Choose Shape
                        &raquo;</a></p>

                
                    

                    
                        
                        
                        
                         
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                    
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                        
                            
                                
                                
                                
                                
                                

                            

                            

                            
                                
                                 
                                

                            
                                

                            
                                
                                
                                
                                
                                
                                
                                

                            
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                            
                                
                                
                                
                                
                                
                        

                        
                            
                            
                            
                            

                        
                            
                        
                    
                    
                
            
                </div>
            <div class="col-sm-4">
                <h2>Messiah College</h2>
                <h4>Department of Biological Sciences</h4>
                <p>Fungi Growing On Wood is the work of Dr. Gary Emberger, a professor of Botany at Messiah College.</p>
                <p><a class="btn btn-default btn-md" href="about.php">Learn More
                        &raquo;</a></p>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </div>
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

</body>
<?php }} ?>
