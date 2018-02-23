<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 12:34:46
         compiled from "templates/adminLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120622485658c19c8fc24d06-57078116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd9c5d7f40278abfec0ea141fc432c75d0531484' => 
    array (
      0 => 'templates/adminLogin.tpl',
      1 => 1492980358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120622485658c19c8fc24d06-57078116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c19c8fc26851_89140755',
  'variables' => 
  array (
    'logout' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c19c8fc26851_89140755')) {function content_58c19c8fc26851_89140755($_smarty_tpl) {?><link rel="stylesheet" href="css/AdminLogin.css" />
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
