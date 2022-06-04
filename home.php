<?php
include('header.php');
include('navadmin.php'); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<title>Blood Donation | Welcome</title>
<link rel="stylesheet" href="style.css">
</head>
<body style>
<section id="boxes" align="center">
<table>
<tr>
<div class="container" align="center">
<div class="box">
    <img src="regasdonor.jpeg" ALT="some text" WIDTH=80 HEIGHT=60>

      <ul style="list-style:none;">
          <li><a href="reg.php">Add Donor</a></li>
        </ul>

  </div>
  <div class="box">
    <img src="search4blood.jpeg" ALT="some text" WIDTH=80 HEIGHT=60>
    <ul style="list-style:none;">
    <li><a href="blood.php">Search for Blood</a></li>
  </ul>
  </div>
  <div class="box">
    <img src="deleted.png" ALT="some text" WIDTH=80 HEIGHT=60>
    <ul style="list-style:none;">
  <li><a href="delete.php">Delete Donor/Patient</a></li>
</ul>
  </div>
</div>
</tr>
<tr>
<div class="container" align="center">
<div class="box">
  <img src="patient.png" ALT="some text" WIDTH=90 HEIGHT=70>
  <ul style="list-style:none;">
<li><a href="reg2.php">Add Patient</a></li>
</ul>
  </div>
  <div class="box">
    <img src="donorlist.png" ALT="some text" WIDTH=90 HEIGHT=70>
  	<ul style="list-style:none;">
  <li><a href="donorlist.php">Donor List</a></li>
	</ul>
	  </div>
      <div class="box">
  		<img src="patientlist.png" ALT="some text" WIDTH=90 HEIGHT=70>
  		<ul style="list-style:none;">
  	<li><a href="patientlist.php">Patient List</a></li>
  	</ul>
  	  </div>
</div>
</tr>
</table>
 </section>
</body>
</html>