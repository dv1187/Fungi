<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-19 23:55:08
         compiled from "templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18209733615a89f225855eb4-75492898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38fedceb1dabdd032a672c35817d12957f58a33d' => 
    array (
      0 => 'templates\\head.tpl',
      1 => 1519084506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18209733615a89f225855eb4-75492898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a89f225890058_01847609',
  'variables' => 
  array (
    'title' => 0,
    'pageName' => 0,
    'isAdmin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89f225890058_01847609')) {function content_5a89f225890058_01847609($_smarty_tpl) {?>	<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <link href="css/index.css" type=text/css rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.7.0/bootstrap-table.min.css">
    <!--Change stylesheet based on page-->
    <link href="css/application.css" type="text/css" rel="stylesheet" />
    <link href="css/about.css" type=text/css rel="stylesheet" />
    <link href="css/result.css" type=text/css rel="stylesheet" />
    
    
    <link href="css/head.css" type=text/css rel="stylesheet" />
    <link href="css/glossary.css" type=text/css rel="stylesheet" />
    <link href="css/admin.css" type=text/css rel="stylesheet" />
    
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
">
<!--navigation-->
<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container" id="top">
        <ul>
        <li class="main"><a href="index.php">Home</a></li>
        <li class="main"><a href="app.php">Application</a></li>
        <li class="main"><a href="species.php">Species</a></li>
        <li class="main"><a href="glossary.php">Glossary</a></li>
        <li class="about">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">About</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="about.php">About</a>
                    <a href="emberger.php">Dr. Emberger</a>
                    <a href="wood.php">Wood Decay</a>
                    <a href="keyinfo.php">Key Info</a>
                    <a href="acknowledge.php">Acknowledgements</a>
                    <a href="disclaimer.php"> Disclaimer</a>
                </div>
            </div>
            <div class="admin-link">
                <li class="push"><a href="adminLogin.php" class="admin-link">Admin</a></li>
            </div>
        </li>
        </ul>

    </div>

                
                
                
                
                
		
            </ul>
            <div>
                
                    
                    
                    
                        
                    
                    
                    
                
                <div>
                    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>

                        <div id="help"><?php echo $_smarty_tpl->getSubTemplate ("userGuide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>

                    <?php }?>
                </div>
            </div>
        </div>

    </div>

    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
> <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#helpBtn").click(function(){
            $("#help").toggle();
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    <?php echo '</script'; ?>
>

</nav>
<?php }} ?>
