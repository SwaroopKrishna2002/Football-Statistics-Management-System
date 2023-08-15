<?php
// database connection code
if(isset($_POST['league_name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','football statistics');

// get the post records

$LeagueName = $_POST['league_name'];
$LeagueCountry = $_POST['league_country'];
$Association = $_POST['association'];
$Division = $_POST['division'];
$LeagueID = $_POST['league_id'];

// database insert SQL code
$sql = "INSERT INTO league (`League_id`,`LName`,`Country`,`Association`,`Division`) VALUES ('$LeagueID','$LeagueName', '$LeagueCountry', '$Association', $Division)";

// insert in database 

if(mysqli_query($con, $sql))
    {
        header("Location: league_addition_success.html");
        exit();
    }
    else
    {
        echo "error: " .$sql. "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>