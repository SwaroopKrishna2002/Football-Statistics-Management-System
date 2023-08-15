<?php
// database connection code
if(isset($_POST['club_name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','football');

// get the post records

$ClubName = $_POST['club_name'];
$ClubRanking = $_POST['club_ranking'];
$Stadium = $_POST['stadium'];
$Sponsor = $_POST['sponsor'];
$ClubValue = $_POST['club_value'];
$LeagueID = $_POST['league_id'];

// database insert SQL code
$sql = "INSERT INTO club ( `League_id`,`Club_Name`,`Ranking`,`Stadium`,`Sponsor`,`Club_Value`) VALUES ('$LeagueID','$ClubName', $ClubRanking, '$Stadium', '$Sponsor','$ClubValue')";

// insert in database 

if(mysqli_query($con, $sql))
    {
        header("Location: club_addition_success.html");
        exit();
    }
    else
    {
        echo "error: " .$sql. "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>