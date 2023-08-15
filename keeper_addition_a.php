<?php
// database connection code
if(isset($_POST['appearances']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','football');

// get the post records

$PlayerID = $_POST['player_id'];
//$ClubName = $_POST['club_name'];
//$Nationality = $_POST['nationality'];
//$Position = $_POST['position'];
//$Age = $_POST['age'];
//$MarketValue = $_POST['market_value'];
//$ManagerID = $_POST['mgr_id'];
//$PlayerName = $_POST['player_name'];



$Apps = $_POST['appearances'];
$Saves = $_POST['saves'];
$Fouls = $_POST['fouls'];
$Yellow = $_POST['yellow_cards'];
$Red = $_POST['red_cards'];
$CleanSheets = $_POST['clean_sheets'];
$PenSaved = $_POST['penalties_saved'];
$Conceded = $_POST['goals_conceded'];




// database insert SQL code
$sql = "INSERT INTO goalkeeper (`Player_id`,`Apps`,`Clean_Sheets`,`Saves`,`Penalties_saved`,`conceded_goals`,`fouls`,`yellow_cards`,`red_cards`) VALUES ('$PlayerID',$Apps, $CleanSheets, $Saves, $PenSaved, $Conceded, $Fouls, $Yellow, $Red)";

// insert in database 

if(mysqli_query($con, $sql))
    {
        header("Location: player_addition_success.html");
        exit();
    }
    else
    {
        echo "error: " .$sql. "" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>