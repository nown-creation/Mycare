<?php
	
	extract($_POST);
	if(isset($_POST['save']))
	{
		$servername='localhost';
		$username='root';
		$password='';
		$dbname = "mycare";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		  if(!$conn){
			  die('Could not Connect MySql Server:' .mysql_error());
			}
		$sql=mysqli_query($conn,"SELECT * FROM user where Email='$email'");
		if(mysqli_num_rows($sql)>0 && strcmp($email,null)==0)
		{
			echo "Email Id Already Exists"; 
			exit;
		}
		else
		{
			if(strcmp($pass,$cpass))
			{
				echo "Enter same password";
				exit;
			}
			else 
			{
				if(isset($_POST))
				{
					$query="INSERT INTO user(First_Name, City, Email, Password) VALUES ('$first_name', '$city', '$email', 'md5($pass)')";
					$sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
					header ("Location: login.php?status=success");

				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Finance Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<style>
	.signup-form
	{
		margin:50px;
		padding: 30%;
		
	}
</style>
<body>
<div class="signup-form">
    <form action="register.php" method="post" enctype="multipart/form-data">
		<h2>Mycare Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required" ></div>
				<div class="col"><input type="text" class="form-control" name="city" placeholder="City" required="required" ></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required" >
        </div>       
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>