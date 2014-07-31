<!--Main PAGE-->
<!DOCTYPE html>
<?php
	session_start();
	require 'sqlconfig.php';
	
	
	if(isset($_SESSION['proj']))
	{
		$myrollno = $_SESSION['proj'];
		$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
				or die('Error connecting to database');
		$query = "SELECT * FROM register WHERE rollno='$myrollno';";
		$result = mysqli_query($dbc,$query)
			or die ('Error querying');
		$row = mysqli_fetch_array($result);
		if($row['admin']==1)
			header("location:adminpage");
		if($row['admin']==0&&$row['approved']==1)
			header("location:memberpage");	
	}
	
	

?>



<head>
	
	<link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.min.css">
	<link rel="stylesheet" href="css/docs.css">

</head>

<body class="tm-background">
	
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="../index.html"><img class="uk-margin uk-margin-remove" src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-active"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
					
                </ul>

        <!--        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->

                <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="images/clublogo.png" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>

 <div class="tm-middle">
	 <div class="uk-container uk-container-center">
		 <form class="uk-form uk-form-horizontal" method = "post" action="loggedin.php">
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Roll no</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="rno" placeholder="Rollno.">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Password</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-it" name="pwd" placeholder="Password">
				</div>
			</div>
			
			<div class="uk-form-row">
				<div class="uk-form-controls">
				<button type="submit" class="uk-button uk-margin-small-top">Login</button>
				
				</div>
			</div>
			<div class="uk-form-row">
				<div class="uk-form-controls">
				New user? <a href="register.php">Sign up</a>
				
				</div>
			</div>
		</form>
                            
     </div>
</div>

