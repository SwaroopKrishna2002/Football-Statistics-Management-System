<!DOCTYPE html>
<html>
<?php 


	//Create Connection
	$con = mysqli_connect('localhost','root','', 'football') or die($con->connect_error);

 ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dbms proj.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>⚽ League Table - Football Statistics Management System</title>
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
$sql = "SELECT * FROM league;";
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

<a href="club_table.php" style="color: white;"><b>CLUB</b></a>
<a href="player_table.php" style="color: white;"><b>PLAYER</b></a>
</div>

<br>
<br>
<br>

<p><b style="color:white;">  Filters   :</b>
	<select id="filters" name="Filters" accesskey="target">
		<option value="Player_id">Player ID</option>
		<option value="COUNTRY">Player's Country</option>
		<option value="CLUB">Club</option>
		<option value="position">Position</option>
		<option value="LEAGUE">League</option>
	</select>
	<input type=button value="Go" onclick="goToNewPage()" />
</p>
<br>
<br>
<div class="col-md-12" style="background-color:#f1f1f1f1;">
		<p><h2 align="center"><b>League Details</b></h2></p>
	<table align="center" style="color:black;border-color: black;" border="4px" cellpadding="10px" width="80%" >
		<tr>
			<th align="center"><b>LEAGUE ID</b></th>
			<th align="center"><b>LEAGUE NAME</b></th>
			<th align="center"><b>COUNTRY</b></th>
			<th align="center"><b>ASSOCIATION</b></th>
			<th align="center"><b>DIVISION</b></th>
		</tr>
		<?PHP
     //OUTPUT DATA OF EACH ROW
     
	if ($result = $con->query($sql))
 	{
 		while($row = $result->fetch_array(MYSQLI_ASSOC))
 		{
    	?>
		<tr>
			<td><?php echo $row["League_id"]; ?></td>
			<td><?php echo $row["LName"]; ?></td>
			<td><?php echo $row["Country"]; ?></td>
			<td><?php echo $row["Association"]; ?></td>
			<td><?php echo $row["Division"]; ?></td>
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
<br>
<br>
<br>
<br>
</body>
</html>