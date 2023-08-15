<!DOCTYPE html>
<html>
<?php 


	//Create Connection
	$con = mysqli_connect('localhost','root','', 'football') or die($con->connect_error);

 ?>
<head>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dbms proj.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>⚽ Player Table - Football Statistics Management System</title>
	<script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
	</script>
</head>
<body style="background-image: url('/damn/uefa-champions-league-2013.jpg');background-size: cover;">
<?php
// Storing Session
$sql = "SELECT * FROM player;";
$result = mysqli_query($con,$sql);
?>
		<div class="header" style="background-color:#AD2E24;">
<br>
<h1 style="color: white;text-align: center ; "><font face="Arial">  FOOTBALL STATISTICS MANAGEMENT SYSTEM </font></h1>
<br>
<a href="logout.html" style="color: white;float: right;" align="right"><b style="float: right;background-color: black;padding: 10px 10px;" align="right">LOGOUT</b></a>
</div>
<div class="nav" style="background-color:black;">
<a href="table_selection.html" style="color: white;"><b>HOME</b></a>
<a href="about.html" style="color: white;"><b>ABOUT</b></a>

<a href="club_Table.php" style="color: white;"><b>CLUB</b></a>
<a href="player_table.php" style="color: white;"><b>PLAYER</b></a>
</div>

<br>
<br>
<br>

<p><b style="color:white;">  Filters   :</b>
	<select id="list" name="list" accesskey="target">
		<option value="query_6_table.php">Most Goals</option>
		<option value="query_7_table.php">xG(Expected Goals)</option>
		<option value="query_8_table.php">Most Assists</option>
		<option value="query_9_table.php">Most Clean Sheets</option>
		<option value="query_10_table.php">Most Fouls</option>
	</select>
		<input type=button value="Go" onclick="goToNewPage()" />
</p>
<br>
<br>
<br>
<div class="col-md-12" style="background-color:#f1f1f1f1;">
	<p><h2 align="center"><b>Player Details</b></h2></p>
	<table align="center" style="color:black;border-color: black;" border="4px" cellpadding="10px" width="95%" >
		<tr>
			<th align="center"><b>PLAYER ID</b></th>
			<th align="center"><b>PLAYER NAME</b></th>
			<th align="center"><b>CLUB NAME</b></th>
			<th align="center"><b>NATIONALITY</b></th>
			<th align="center"><b>POSITION</b></th>
			<th align="center"><b>AGE</b></th>
			<th align="center"><b>MARKET VALUE</b></th>
			<th align="center"><b>MANAGER ID</b></th>
		</tr>
		<?PHP
     //OUTPUT DATA OF EACH ROW
     
	if ($result = $con->query($sql))
 	{
 		while($row = $result->fetch_array(MYSQLI_ASSOC))
 		{
    	?>
		<tr>
			<td><?php echo $row["Player_id"]; ?></td>
			<td><?php echo $row["Player_Name"]; ?></td>
			<td><?php echo $row["Club_Name"]; ?></td>
			<td><?php echo $row["Nationality"]; ?></td>
			<td><?php echo $row["Position"]; ?></td>
			<td><?php echo $row["Age"]; ?></td>
			<td><?php echo $row["Market_value"]; ?></td>
			<td><?php echo $row["Mgr_id"]; ?></td>
		</tr>
		<?php
		}
 		$result->close();
 	}
?>
	</table>
	<br>
</div>
<br>
<br>
<br>
<br>
<div class="nav" style="background-color:black;">
<a href="attacking_table.php" style="color: white;"><b>CLICK TO VIEW ATTACKING STATS</b></a>
<a href="teamplay_table.php" style="color: white;"><b>CLICK TO VIEW TEAMPLAY STATS</b></a>

<a href="defense_table.php" style="color: white;"><b>CLICK TO VIEW DEFENSIVE STATS</b></a>
<a href="goalkeep_table.php" style="color: white;"><b>CLICK TO VIEW GOALKEEPING STATS</b></a>
<a href="player_table.php" style="color: white;"><b>CLICK TO VIEW PLAYER DETAILS</b></a>
</div>
<br>
<br>
<br>
<br>
</body>
</html>