<?php
require('connection.php');
error_reporting(1);
?>
<html>
 <head>
  <title>HOSPITAL MANAGEMENT SYSTEM</title>
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
<tr bgcolor=grey><td ><font size=4 color=white>Appointments
List</font></td></tr>
<tr><td><a href=app.php>Add New Appointments</a></td></tr>
<tr><td><table width=900 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Patient
Name</td><td align=center>Doctor Name</td><td align=center>Appointment Type</td><td align=center>Time</td>
<td align=center>Date</td><td align=center>Duration(hours)</td><td align=center>Cost</td><td
align=center>Appointment ID</td></tr>
<?php

if($_GET['rno']!=null)
{
$todel=$_GET['rno'];
mysqli_query($con,"UPDATE appt SET ashow='N' WHERE ano='$todel' ;");
}
$sql="SELECT * FROM appt WHERE ashow='Y' ORDER BY atime";
$rs1=mysqli_query($con,$sql);
$sno=1;
while( $row=mysqli_fetch_array($rs1,MYSQLI_NUM)) {

$sql="SELECT pname FROM patient WHERE pno='$row[2]'";
$rs=mysqli_query($con,$sql);
$sql2="SELECT pfirst FROM patient WHERE pno='$row[2]'";
$rs2=mysqli_query($con,$sql2);
$sql3="SELECT dname FROM doct WHERE dno='$row[1]'";
$rs3=mysqli_query($con,$sql3);
$sql4="SELECT dprice FROM doct WHERE dno='$row[1]'";
$rs4=mysqli_query($con,$sql4);
$sql5="SELECT dfirst FROM doct WHERE dno='$row[1]'";
$rs5=mysqli_query($con,$sql5);
$rs11=mysqli_fetch_assoc($rs);
$rs22=mysqli_fetch_assoc($rs2);
$rs33=mysqli_fetch_assoc($rs3);
$rs44=mysqli_fetch_assoc($rs4);
$rs55=mysqli_fetch_assoc($rs5);
$price=$rs44[dprice] * $row[7];
mysqli_query($con,"UPDATE price SET price='rs44[dprice]' WHERE ashow='Y' ;");
 echo "<tr><td align=center>$sno</td><td align=center>$rs22[pfirst] $rs11[pname]</td><td align=center>$rs55[dfirst] $rs33[dname]</td><td align=center>$row[3]</td><td align=center>$row[4]</td><td align=center>$row[6]</td><td align=center>$row[7]</td><td align=center>$$price</td><td align=center>$row[8]</td><td><a
href=alist.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";?>
</table></td></tr>
</table></td></tr>
</table>
</body>
</html> 