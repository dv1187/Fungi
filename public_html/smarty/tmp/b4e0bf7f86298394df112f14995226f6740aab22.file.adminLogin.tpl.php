<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-09 21:59:57
         compiled from "templates\adminLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293135a7e0bcd57a166-42620362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e0bf7f86298394df112f14995226f6740aab22' => 
    array (
      0 => 'templates\\adminLogin.tpl',
      1 => 1492023048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293135a7e0bcd57a166-42620362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logout' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a7e0bcd630e44_74969676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7e0bcd630e44_74969676')) {function content_5a7e0bcd630e44_74969676($_smarty_tpl) {?><link rel="stylesheet" href="css/AdminLogin.css" />
<div class="login-page">
	<div class="form">

		<?php if ($_smarty_tpl->tpl_vars['logout']->value=="false") {?>
		<p class="message">Admin Login </p>
		<form class="login-form" action="adminLogin.php" method="post">
			<input type="text" placeholder="Admin username" name="username" autofocus required/>
			<input type="password" placeholder="Password" name="password" required/>
			<button>login</button>
			<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

		</form>
		</ br>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['logout']->value=="true") {?>
			<p class="message">Admin Logout </p>
			<form class="login-form" action="logout.php" method="post">
			<button> logout </button>
		</form>
		<?php }?>
	</div>
</div><?php }} ?>
