<?php
// database connection code
if(isset($_POST['uname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$UserName = $_POST['uname'];
$Email = $_POST['email'];
$Password_1 = $_POST['password_1'];
$Password_2 = $_POST['password_2'];

// database insert SQL code
$sql = "INSERT INTO tbl_userlogin ( `UserName`, `Email`, `password_1`, `password_2`) VALUES ('$UserName', '$Email', '$Password_1', '$Password_2')";

// insert in database 

if(mysqli_query($con, $sql))
    {
        header("Location: registration_successful.html");
        exit();
    }
    else
    {
        echo "error: " .$sql. "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>