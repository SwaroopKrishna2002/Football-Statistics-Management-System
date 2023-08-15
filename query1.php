<?php
$con = mysqli_connect('localhost','root','','football');

$try = "SELECT * FROM league";
        
$result = mysqli_query($con, $try);
    
while($row=mysqli_fetch_assoc($result))
{
    echo"<tr><td>".$row["sector1"]."</td><td>".$row["sector2"]. "</td><td>".$row["sector3"]. "</td></tr>";
}
    
?>