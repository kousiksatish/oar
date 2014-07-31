<?php
	require "sqlconfig.php";
	session_start();
	// Define $myrollno and $mypassword 
	$myusername=$_POST['username']; 
	$mypassword=$_POST['passwd']; 
	

	// To protect MySQL injection
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'oar')
			or die ('Error connecting to the database server');		
	
	$query="SELECT username,password FROM register;"
		or die('Error querying');
	$result=mysqli_query($dbc,$query);
	$check=false;
	while($row=mysqli_fetch_array($result))
	{	
		if($row['password']==$mypassword&&$row['username']==$myusername)
		{
			$check=true;
			break;
		}		
	}   
	if($check)
	{
		$_SESSION['oaruname']=$myusername;
		header("location:index1.php");
	}
	else
	{
		header("location:index1.php?err=1");
	}

	mysqli_close($dbc);
	
?>