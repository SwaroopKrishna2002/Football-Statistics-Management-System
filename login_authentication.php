<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$stmt ;


if (isset($_POST['uname'])) {

$con = mysqli_connect('localhost', 'root', '','db_contact');

// Define $username and $password
$username = $_POST['uname'];
$password = $_POST['psw'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter



// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT UserName, password_1 FROM tbl_userlogin WHERE UserName=? AND password_1=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $con->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
    $_SESSION['login_authentication']=$username; // Initializing Session
    header("location: table_selection.html"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}

?>