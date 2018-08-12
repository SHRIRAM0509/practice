<?php  
 require('configdb.php');

if (isset($_POST['name']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['name'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM login WHERE name='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);