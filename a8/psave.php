<?php require('connection.php');?>

<html>
 <head>
  <title>Save Patient</title>
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
<tr bgcolor=grey><td ><font size=4 color=white>Save
Patient</font></td></tr>
<?php

$first=trim($_POST["first"]);
$name=trim($_POST["name"]);
$spec=trim($_POST["spec"]);
$phon=trim($_POST["phon"]);
$patid=trim($_POST["patid"]);
$error=0;
if ($first=="") { $error=1; echo "<tr><td><font color=red size=4>First Name
can't be empty</font></td></tr>"; }
if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Last Name
can't be empty</font></td></tr>"; }
if ($spec=="") { $error=1; echo "<tr><td><font color=red
size=4>Address can't be empty</font></td></tr>"; }
if ($phon=="") { $error=1; echo "<tr><td><font color=red
size=4>Phone Number can't be empty</font></td></tr>"; }
if ($patid=="") { $error=1; echo "<tr><td><font color=red size=4>Patient ID
can't be empty</font></td></tr>"; }
if ($error==0) {
 
 mysqli_query($con,"INSERT INTO patient(pfirst,pname,paddr,ppho,pid,pshow)
VALUES('".$first."','".$name."','".$spec."','".$phon."','".$patid."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Inserted Patient</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=psave.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>First Name</td><td><input type=text name=first
size=30 maxlength=30 value='".$first."'></td></tr>";
 echo "<tr><td>Last Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Address</td><td><input type=text name=spec
size=30 maxlength=30 value='".$spec."'></td></tr>";
echo "<tr><td>Phone Number</td><td><input type=text name=phon
size=30 maxlength=30 value='".$phon."'></td></tr>";
echo "<tr><td>Patient ID</td><td><input type=text name=patid
size=30 maxlength=30 value='".$patid."'></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";