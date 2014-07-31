<?php
	session_start();

	if(!isset($_SESSION['oaruname']))
	{
		?>


		<form class="uk-form" method="post" action="login.php">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="passwd" placeholder="Password">
			<button type="submit" class="uk-button-small">Login</button><br>
			<font color="white">New user? <a href="register.php">register</a></font>
		</form>

		<?php
	}

	else
	{
		echo '<font color=white>You are logged in as '.$_SESSION['oaruname'].'</font>';
		echo ' <a href="logout.php"><button class="uk-button-small">Logout</button></a>';
	}

