<?php
    require 'include/databaseconnect.php';
session_start();

if (isset($_SESSION['users'])) {
	header("Location: home.php"); 
}

else {
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Incorrect Username or Password";
 }
 else
 {
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 
 $sql = ("SELECT id, username, password
          FROM users 
          WHERE username = '$user' AND password = '$pass'");

$result=$mysqli->query($sql);

if ($result-> num_rows>0){
    while($row=$result->fetch_assoc()){
 echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
 }
    
}
 else
 {
 $error = "Incorrect Username or Password";
 }
 
 }
}
}
mysqli_close($mysqli); // Closing connection 
?>