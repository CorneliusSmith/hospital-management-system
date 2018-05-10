<?php 
session_start();
error_reporting(1);

if(!mysqli_connect("localhost","138168s","Kiobwuj8","138168s_db"))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 $con=mysqli_connect("localhost","138168s","Kiobwuj8","138168s_db"); 
if($_SESSION['admin']="")
{
header('index.php');
}
 
?>
<h3 style="background:darkblue;padding:20px;color:#FFFFFF;margin:0px">
	<span>Hello Admin !</span>
	<span style="float:right"><a style="color:#FFFFFF" href="logout.php">Logout</a></span>
</h3>