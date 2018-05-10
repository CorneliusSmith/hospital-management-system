<?php require('connection.php');?>
<html>
 <head>
  <title>Update Doctor</title>
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
<tr bgcolor=grey><td ><font size=4 color=white>Update
Employee</font></td></tr>

<?php

error_reporting(1);
$rno=trim($_POST["rno"]);
$first=trim($_POST["first"]);
$name=trim($_POST["name"]);
$spec=trim($_POST["spec"]);
$phon=trim($_POST["phon"]);
$bill=trim($_POST["bill"]);
$error=0; 
if ($first=="") { $error=1; echo "<tr><td><font color=red size=4>First Name
can't be empty</font></td></tr>"; }
if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Last Name
can't be empty</font></td></tr>"; }
if ($spec=="") { $error=1; echo "<tr><td><font color=red
size=4>Address can't be empty</font></td></tr>"; }
if ($phon=="") { $error=1; echo "<tr><td><font color=red size=4>Phone Number
can't empty</font></td></tr>"; }
if ($bill=="") { $error=1; echo "<tr><td><font color=red size=4>Billing Rate
can't be empty</font></td></tr>"; }
if ($error==0) {
 mysqli_query($con,"UPDATE doct SET dfirst='".$first."',dname='".$name."',dspec='".$spec."',dpho='".$phon."',dprice='".$bill."'
where dno='".$rno."'");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Updated Records</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=dupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>First Name</td><td><input type=text name=first
size=30 maxlength=30 value='".$first."'></td></tr>";
 echo "<tr><td>Last Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Address</td><td><input type=text name=spec
size=30 maxlength=30 value='".$spec."'></td></tr>";
echo "<tr><td>Phone Number</td><td><input type=text name=phon
size=30 maxlength=30 value='".$phon."'></td></tr>";
echo "<tr><td>Billing Rate</td><td><input type=text name=bill
size=30 maxlength=30 value='".$bill."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=hidden name=rno
value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=dlist.php>Continue...</a></td></tr>";
echo "</table>"; 
echo "</body></html>";