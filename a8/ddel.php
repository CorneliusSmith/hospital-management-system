<?php require('connection.php');?>
<html>
 <head>
  <title>Delete Doctors</title>
 <link rel="stylesheet" href="css/bootstrap.css"/>
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=lightblue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=grey><td ><font size=4 color=white>Doctors
List</font></td></tr>
<tr><td><a href=dadd.php>Add New Record</a></td></tr>
<tr><td><table width=900 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>First Name</td><td align=center>Last
Name</td><td align=center>Address</td><td align="center">Phone Number</td><td align="center">Billing Rate</td><td
align=center>Employee Id</td></tr>
<?php

error_reporting(1);
$todel=$_GET['rno'];
mysqli_query($con,"UPDATE doct SET dshow='N' WHERE dno='$todel' ;");
$sql1="SELECT * from doct where dshow='Y' order by
dname;";
$rs1=mysqli_query($con,$sql1);
$sno=1;
while( $row=mysqli_fetch_array($rs1,MYSQLI_NUM)) {
 echo "<tr><td align=center>$sno</td><td align=center>$row[1]</td><td align=center>$row[2]</td><td align=center>$row[3]</td><td align=center>$row[4]</td>
 <td align=center>$row[5]</td><td align=center>$row[6]</td><td><a
href=dmod.php?rno=".$row[0].">Modify</a> | <a
href=ddel.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=grey><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=900 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>First Name</td><td align=center>Last
Name</td><td align=center>Address</td><td align="center">Phone Number</td><td align="center">Billing Rate</td>
<td align="center">Employee Id</td></tr>
<?php
$sql2="SELECT * FROM doct WHERE dshow='N' ORDER BY
dname;";
$rs2=mysqli_query($con,$sql2);
$sno=1;
while( $row=mysqli_fetch_array($rs2,MYSQLI_NUM)) {
 echo "<tr><td align=center>$sno</td><td align=center>$row[1]</td><td align=center>$row[2]</td><td align=center>$row[3]</td><td align=center>$row[4]</td>
 <td align=center>$row[5]</td><td align=center>$row[6]</td><td><a
href=dundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr> 
</table>
</body>
</html> 