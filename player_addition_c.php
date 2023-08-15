<?php
// database connection code
if(isset($_POST['goals']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','football');

// get the post records


$Goals = $_POST['goals'];
$Shots = $_POST['shots'];
$xG = $_POST['xG'];
$Offsides = $_POST['offsides'];
$Touches = $_POST['touches'];
$PlayerID = $_POST['player_id'];
$Outfield = $_POST['Outfield_pos'];


//$Passes = $_POST['passes'];
//$PassesComp = $_POST['comp_passes'];
//$Accuracy = $_POST['accuracy'];
//$Crosses = $_POST['crosses'];
//$Dribbles = $_POST['dribbles'];
//$Duels = $_POST['duels'];
//$Assists = $_POST['assists'];


//$Tackles = $_POST['tackles'];
//$Blocks = $_POST['blocks'];
//$Aerial = $_POST['aerial_d'];
//$Interceptions = $_POST['interceptions'];
//$OwnGoals = $_POST['own_goals'];


// database insert SQL code


$sql = "INSERT INTO attacking_stats (`Outfield_pos`,`Goals`,`Shots`,`xG`,`Offsides`,`Touches_opp_box`,`Player_id`) VALUES ('$Outfield', $Goals, $Shots, $xG, $Offsides, $Touches, '$PlayerID');";

//$sql4 = "INSERT INTO teamplay (`Outfield_pos`,`Assists`,`Passes`,`Passes_completed`,`Crosses`,`Passing_accuracy`,`Dribbles`,`Duels_won`) VALUES ('$Outfield', $Assists, $Passes, $PassesComp, $Crosses, '$Accuracy', $Dribbles, $Duels)";

//$sql5 = "INSERT INTO defensive_stats (`Outfield_pos`,`Tackles`,`Blocks`,`Aerial_Duels`,`Interceptions`,`Own_Goals`) VALUES ('$Outfield', $Tackles, $Blocks, $Aerial, $Interceptions, $OwnGoals)";

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