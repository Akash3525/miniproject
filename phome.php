<?php
include('pheader.php');
include('pnavadmin.php'); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<title>Plasma Donation | Welcome</title>
<link rel="stylesheet" href="pstyle.css">

</head>
<body style="background:#f5e642;">
<section id="boxes" align="center">
<table>
<tr>
<div class="container" align="center">
<div class="box">
   <a href="preg.php"><img src="regasdonor.jpeg" ALT="some text" WIDTH=80 HEIGHT=60></a>
      <ul style="list-style:none">
          <li><a href="preg.php">Add Donor</a></li>
      </ul>
  </div>
  <div class="box">
    <a href="plasmasearch.php"><img src="plasmasearch1.png" ALT="some text" WIDTH=80 HEIGHT=60></a>
    <ul style="list-style:none;">
     <li><a href="plasmasearch.php">Search for Plasma</a></li>
    </ul>
  </div>
  <div class="box">
    <a href="pdelete.php"><img src="deleted.png" ALT="some text" WIDTH=80 HEIGHT=60></a>
    <ul style="list-style:none;">
    <li><a href="pdelete.php">Delete Donor/Patient</a></li>
  </ul>
  </div>
</div>
</tr>
<tr>
<div class="container" align="center">
<div class="box">
   <a href="preg2.php"><img src="patient.png" ALT="some text" WIDTH=90 HEIGHT=70></a>
      <ul style="list-style:none">
          <li><a href="preg2.php">Add Patient</a></li>
      </ul>
  </div>
  <div class="box">
    <a href="pdonorlist.php"><img src="donorlist.png" ALT="some text" WIDTH=90 HEIGHT=70></a>
    <ul style="list-style:none;">
     <li><a href="pdonorlist.php">Donor list</a></li>
    </ul>
  </div>
  <div class="box">
    <a href="ppatientlist.php"><img src="patientlist.png" ALT="some text" WIDTH=90 HEIGHT=70></a>
    <ul style="list-style:none;">
    <li><a href="ppatientlist.php">Patient List</a></li>
  </ul>
  </div>
</div>
</tr>
</table>
 </section>
</body>
</html>