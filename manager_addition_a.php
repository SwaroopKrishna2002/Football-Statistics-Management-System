<?php
// database connection code
if(isset($_POST['mgr_name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','football');

// get the post records

$ManagerName = $_POST['mgr_name'];
$ManagerClub = $_POST['mgr_club'];
$MatchManaged = $_POST['mat_managed'];
$Wins = $_POST['won'];
$Losses = $_POST['lost'];
$Draw = $_POST['draw'];
$GoalsScored = $_POST['goals_scored'];
$GoalsConceded = $_POST['goals_conceded'];
$ManagerID = $_POST['mgr_id'];
$LeaguePos = $_POST['league_pos'];

// database insert SQL code
$sql = "INSERT INTO manager (`Club_Name`,`Mgr_Name`,`Mgr_id`,`Matches_Managed`,`Won`,`Lost`,`Draw`,`Goals_scored`,`Goals_conceded`, `League_pos`) VALUES ('$ManagerClub','$ManagerName','$ManagerID',  $MatchManaged , $Wins , $Losses , $Draw , $GoalsScored , $GoalsConceded , $LeaguePos)";

// insert in database 

if(mysqli_query($con, $sql))
    {
        header("Location: manager_addition_success.html");
        exit();
    }
    else
    {
        echo "error: " .$sql. "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>