<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dbms proj.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>⚽ Player Table - Football Statistics Management System</title>
</head>
<body style="background-image: url('/damn/uefa-champions-league-2013.jpg');background-size: cover;">
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
<p><b style="color:white;">Search     :</b><input type="text" placeholder="Enter player/club Name" name="search" style="position: relative;"></p>
<p><b style="color:white;">  Filters   :</b>
	<select id="filters" name="Filters">
		<option value="Player_id">Player ID</option>
		<option value="COUNTRY">Player's Country</option>
		<option value="CLUB">Club</option>
		<option value="position">Position</option>
		<option value="LEAGUE">League</option>
	</select>
</p>
<br>
<br>
<br>
<div class="col-md-12" style="background-color:#f1f1f1f1;">
	<br>
	<table align="center" style="color:black;border-color: black;" border="4px" cellpadding="10px" width="95%" >
		<tr>
			<th align="center"><b>PLAYER ID</b></th>
			<th align="center"><b>CLUB NAME</b></th>
			<th align="center"><b>NATIONALITY</b></th>
			<th align="center"><b>POSITION</b></th>
			<th align="center"><b>AGE</b></th>
			<th align="center"><b>MARKET VALUE</b></th>
			<th align="center"><b>GOALS</b></th>
			<th align="center"><b>SHOTS</b></th>
			<th align="center"><b>xG</b></th>
			<th align="center"><b>OFFSIDES</b></th>
			<th align="center"><b>TOUCHES IN OPPOSITION BOX</b></th>
		</tr>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
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