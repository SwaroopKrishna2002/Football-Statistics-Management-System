<?php
// database connection code
if(isset($_POST['player_name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','football');

// get the post records

$PlayerID = $_POST['player_id'];
$ClubName = $_POST['club_name'];
$Nationality = $_POST['nationality'];
$Position = $_POST['position'];
$Age = $_POST['age'];
$MarketValue = $_POST['market_value'];
$ManagerID = $_POST['mgr_id'];
$PlayerName = $_POST['player_name'];



//$Apps = $_POST['appearances'];
//$Outfield = $_POST['Outfield_pos'];
//$Fouls = $_POST['fouls'];
//$Yellow = $_POST['yellow_cards'];
//$Red = $_POST['red_cards'];


// database insert SQL code
$sql = "INSERT INTO player (`Player_Name`,`Player_id`,`Club_Name`,`Nationality`,`Position`,`Age`,`Market_Value`,`Mgr_id`) VALUES ('$PlayerName','$PlayerID', '$ClubName', '$Nationality', '$Position', $Age, '$MarketValue', '$ManagerID')";


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