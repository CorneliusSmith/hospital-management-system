<?php require('connection.php');?>
<html>
 <head>
  <title>Add Appointments</title>
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
Appointments</font></td></tr>
<?php

$pat=trim($_POST["pat"]);
$doc=trim($_POST["doc"]);
$tim=trim($_POST["tim"]);
$dat=trim($_POST["dat"]);
$dur=trim($_POST["dur"]);
$id=strtotime($dat);
$error=0;
if ($pat=="") { $error=1; echo "<tr><td><font color=red size=4>Patient's Name
can't empty</font></td></tr>"; }
if ($doc=="") { $error=1; echo "<tr><td><font color=red
size=4>Employee Id can't empty</font></td></tr>"; }
if ($tim=="") { $error=1; echo "<tr><td><font color=red
size=4>Time can't empty</font></td></tr>"; }
if ($dat=="") { $error=1; echo "<tr><td><font color=red
size=4>Date can't empty</font></td></tr>"; }
if ($dur=="") { $error=1; echo "<tr><td><font color=red
size=4>Duration can't empty</font></td></tr>"; }
if ($error==0) {
 
 mysqli_query($con,"INSERT INTO appt(adoctor,apatient,atime,adate,aptime,aid,ashow)
VALUES('".$doc."','".$pat."','".$tim."','".$dat."','".$dur."','".$id."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Inserted</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=asave.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Patient Id</td><td><input type=text name=name
size=30 maxlength=30 value='".$pat."'></td></tr>";
 echo "<tr><td>Doctor Id</td><td><input type=text name=spec
size=30 maxlength=30 value='".$doc."'></td></tr>";
 echo "<tr><td>Time</td><td><input type=text name=spec
size=30 maxlength=30 value='".$tim."'></td></tr>";
echo "<tr><td>Date</td><td><input type=text name=spec
size=30 maxlength=30 value='".$dat."'></td></tr>";
echo "<tr><td>Date</td><td><input type=text name=spec
size=30 maxlength=30 value='".$dur."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=alist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";