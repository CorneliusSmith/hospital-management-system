<?php require('connection.php');?>
<html>
 <head>
  
   <title>Modify Patient Profile</title>
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
<?php

$rno=trim($_GET["rno"]);
$sql="SELECT * from patient where pno='".$rno."'";
$rs1=mysqli_query($con,$sql);
$sno=1;
while( $row=mysqli_fetch_array($rs1,MYSQLI_NUM)) {
 echo "<tr bgcolor=grey><td ><font size=4 color=white>Edit Patient
Details</font></td></tr>";
 echo "<form name=fpmod method=post action=pupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
echo "<tr><td>First Name</td><td><input type=text name=first
size=30 maxlength=30 value='".$row[1]."'></td></tr>";
 echo "<tr><td>Last Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$row[2]."'></td></tr>";
 echo "<tr><td>Address</td><td><input type=text name=spec
size=30 maxlength=30  value='".$row[3]."'></td></tr>";
 echo "<tr><td>Phone Number</td><td><input type=text name=phon
size=30 maxlength=30  value='".$row[4]."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table>
</body>
</html> 