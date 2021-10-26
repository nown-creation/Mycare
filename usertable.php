<div class="card">
<div class="card-header"><h1>User Registration</h1></div>
<div class="card-body">
<p class="card-title"></p>
<table class="table table-hover" id="dataTables-example" width="100%">

<style>
table, th, td {
  border: 1.5px solid black;
}

th, td {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 35px;
  padding-right: 35px;
}
h1 {text-align: center;}
</style>



<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>City</th>

</tr>

</thead>



<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "mycare";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from user';

if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['id']; ?>

</th>

<td>

<?php echo $row['First_Name']; ?>

</td>

<td>

<?php echo $row['Email']; ?>

</td>

<td>

<?php echo $row['City']; ?>

</td>

</tr>

</tbody>

<?php

$count++;

}

} else {

echo '0 results';

}

?>

</table>


                          
