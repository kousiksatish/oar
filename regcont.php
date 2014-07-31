 <div class="uk-container uk-container-center">
		 
<?php
	require 'sqlconfig.php';
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$rollno = $_POST['rollno'];
		$dept = $_POST['dept'];
		$sex = $_POST['sex'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$outputform = true;
		
		function passwd($pass,$repass)
		{
			if($pass!=$repass)
			{
				echo 'Passwords do not match';
				$flag = false;
			}
			else
				$flag = true;
			return $flag;
			
		}
		function filled($name, $rollno, $dept, $sex, $pass, $repass, $contact)
		{
			if(!($name!=""&&$rollno!=""&&$dept!=""&&$sex!=""&&$pass!=""&&$repass!=""&&$contact!=""))
			{
				echo '<br>All required fields not filled!!!';
				$flag = false;
			}
			else
				$flag = true;
			return $flag;
		}
		
		function precedence_username($rollno,$db_host,$db_user,$db_pw)
		{
			$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
					or die ('Error connecting to the database server');
			$query="SELECT rollno FROM register;";
			$result=mysqli_query($dbc,$query);
			$flag=true;
			while($row=mysqli_fetch_array($result))
			{
				
				 if($row['rollno']==$rollno)
				 {
					echo "</br>".'Rollno already registered!!!';
					$flag=false;
					break;
				 }
			}
			return $flag;
		}
		
		function checkemail($email)
		{
			if($email!="")
			{
				if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					echo "<br>Email id not valid!!!";
					$flag = false;
				}
				else
					$flag = true;
			}
			else
				$flag = false;
			return $flag;
		}
		
		$p = passwd($pass, $repass);
		$f = filled($name, $rollno, $dept, $sex, $pass, $repass, $contact);
		$pre = precedence_username($rollno,$db_host,$db_user,$db_pw);
		$e = checkemail($email);
		$corr = $p && $f && $pre && $e;
		
		if($corr)
		{
			$dbc = mysqli_connect($db_host, $db_user, $db_pw, 'project')
					or die ('Error connecting to the database server');
			$query = "INSERT INTO register (name, rollno, dept, sex, password, contact, email, admin, approved) 
					VALUES ('$name', '$rollno', '$dept', '$sex','$pass',  '$contact', '$email', '$admin', '$approved');";
			if($flag1)
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],
				   $target_path . $rollno . '.png')
				  or die('Error');

			}
			$result = mysqli_query($dbc, $query)
				or die ('Error querying database');
			echo 'Successfully registered!!';
			echo ' <br><a href="index.php">Click here</a> to go to login page';
			mysqli_close($dbc);
			$outputform = false;
		}
		else
		{
			echo '<br>Please try again!!!';
			$outputform = true;
		}

	}
	else
	{
			$outputform = true;
	}


	
	//echo 'Successfully registered!!';
	//echo ' <br><a href="index1.php">Click here</a> to register once more!';
	mysqli_close($dbc);
	
	if($outputform)
	{
?>

		 <form class="uk-form uk-form-horizontal" method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Name *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-it" name="name" placeholder="Name">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Username *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="username" placeholder="Username">
				</div>
			</div>

			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-it">Password *</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-it" name="pass" placeholder="Password">
				</div>
			</div>
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Confirm password *</label>
				<div class="uk-form-controls">
					<input type="password" id="form-h-ip" name="repass" placeholder="Retype password">
				</div>
			</div>

			<div class="uk-form-row">
				<span class="uk-form-label">Sex *</span>
				<div class="uk-form-controls uk-form-controls-text">
				<!--	<input type="radio" id="form-h-r" name="radio"> <label for="form-h-r">Radio input</label><br>-->
					<input type="radio" id="form-h-r1" name="sex" value="M"> <label for="form-h-r1">Male</label>
					<label><input type="radio" name="sex" value="F">Female</label>
					
				</div>
			</div>
			

			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-s">Degree persued in NIT Trichy *</label>
				<div class="uk-form-controls">
					<select id="form-h-s" name="degree">
						<option value="btech">B.Tech</option>
						<option value="barch">B.Arch</option>
						<option value="mca">MCA</option>
						<option value="mtech">M.Tech</option>
						<option value="phd">PhD</option>
					</select>
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Department of study *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="dept" placeholder="Department">
				</div>
			</div>

			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Pass out year *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="year" placeholder="(e.g:1964,....,2014)">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Current place of work *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="place" placeholder="Place of work">
				</div>
			</div>

			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Contact number</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="contact" placeholder="Contact number">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label class="uk-form-label" for="form-h-ip">Email *</label>
				<div class="uk-form-controls">
					<input type="text" id="form-h-ip" name="email" placeholder="Email">
				</div>
			</div>
			
			<div class="uk-form-row">
				<div class="uk-form-controls">
				<button type="submit" name="submit" class="uk-button uk-margin-small-top">Submit</button>
				
				</div>
			</div>
             </form>
          <?php
	  }
	  ?>            
     </div>
