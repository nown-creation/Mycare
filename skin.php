<?php
//index.php

$error = '';
$name = '';
$email = '';
$city = '';
$mobile = '';
$service_person = '';
$date ='';
$timing='';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 
 if(empty($_POST["city"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your City</label></p>';
 }
 else
 {
  $city = clean_text($_POST["city"]);
 }
 
if(empty($_POST["mobile"]))
 {
  $error .= '<p><label class="text-danger">Mobile is required</label></p>';
 }
 else
 {
  $mobile = clean_text($_POST["mobile"]);
 }
 
 if(empty($_POST["service_person"]))
 {
  $error .= '<p><label class="text-danger">Service person name is required</label></p>';
 }
 else
 {
  $service_person = clean_text($_POST["service_person"]);
 }


if(empty($_POST["date"]))
 {
  $error .= '<p><label class="text-danger">your preferred date is required</label></p>';
 }
 else
 {
  $date = clean_text($_POST["date"]);
 }

if(empty($_POST["timing"]))
 {
  $error .= '<p><label class="text-danger">your preferred time is required</label></p>';
 }
 else
 {
  $timing = clean_text($_POST["timing"]);
 }





 if($error == '')
 {
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mycare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usertable (name, email, city, mobile, service_person, date, appointment, service_type )
VALUES ('$name', '$email', '$city', '$mobile', '$service_person', '$date', '$timing','Skin Treatment')";

if (mysqli_query($conn, $sql)) {
//   echo "Your response recorded successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

  $error = '<label class="text-success">Your response recorded successfully </label>';
  $name = '';
  $email = '';
  $city = '';
  $mobile = '';
  $service_person = '';
  $date='';
  $timing='';
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Real Programmer: User Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>
 <body>
 <div style="background-image: url('download.jpg');">
  <br />
  <div class="container">
   <h2 align="center"> Appointment for Skin Treatment</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <br />
     <?php if(!empty($error)) {
         echo '<div class="alert alert-success" role="alert">'.$error.'</div>';
     }
     ?>
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
     </div>
     <div class="form-group">
      <label>Enter City</label>
      <input type="text" name="city" class="form-control" placeholder="Enter City" value="<?php echo $city; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Mobile</label>
      <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $mobile; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Service person</label>
     <input type="text" name="service_person" class="form-control" placeholder="Enter Service person" value="<?php echo $service_person; ?>" />
     </div>
	 <div class="form-group">
	 <label>Enter your preferred date</label>
     <input type="date" name="date" class="form-control" placeholder="Enter Your preferred date" value="<?php echo $date; ?>" />
	 </div>
	 <div class="form-group">
	 <label>Enter your preferred Timings</label>
     <input type="time" name="timing" class="form-control" placeholder="Enter Your preferred time" value="<?php echo $timing; ?>" />
	 </div>
	  
	 
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     </div>
    </form>
   </div>
  </div>
  </div>
 </body>
</html>