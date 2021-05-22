<?php 
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$email=$_POST['email'];
$dob=$_POST['dob'];


// if (!empty($name) && !empty($usermane) && !empty($password) &&!empty($confirm_password) && !empty($email) ) { 
//     echo " inserted Successfully";
// }
// else {
//     echo " each part is needed";
// }
$con=mysqli_connect("localhost", "root");
mysqli_select_db($con,'webdev');

if ($con) {
    echo "connection is stablished";
}


$q= "insert into user (name, username, password, confirm_password, email) values ($name, $username, $password, $confirm_password, $email)";

mysqli_query($con,$q);

echo " why this happening";


?>
