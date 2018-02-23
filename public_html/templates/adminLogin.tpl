<link rel="stylesheet" href="css/AdminLogin.css" />
<div class="login-page">
	<div class="form">

		{if $logout == "false"}
		<p class="message">Admin Login </p>
		<form class="login-form" action="adminLogin.php" method="post">
			<input type="text" placeholder="Admin username" name="username" autofocus required/>
			<input type="password" placeholder="Password" name="password" required/>
			<button>login</button>
			{$errors}
		</form>
		</ br>
		{/if}

		{if $logout == "true"}
			<p class="message">Admin Logout </p>
			<form class="login-form" action="logout.php" method="post">
			<button> logout </button>
		</form>
		{/if}
	</div>
</div>