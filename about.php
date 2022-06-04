<?php
session_start();
include('header.php');
include('connection.php');
if(isset($_SESSION['loggedin'])==true){
	include('navadmin.php');
}
else {
	include('navuser.php');
}
?>
<!DOCTYPE html>
<html>

<section id="">
<div class="">
  <div class=""align="center">
    <img src="vision.jpg" ALT="some text" WIDTH=180 HEIGHT=160>
      <ul style="list-style:none;">
          <li><a href=""><u>Our Vision</u></a></li>
        </ul>
<p>A Centre of Excellence in Blood Banking, Committed to Safe and High Quality Blood for Thalassemia and Leukemia Children, free of cost , thereby enabling them an opportunity for a normal and holistic life, while canvassing Blood Donation, as only Voluntary, and, at all times, guided by principles of Compassion, Care and uncompromising adherence to Integrity.</p>
  </div>
  <br><br>
  <div class=""align="center">
    <img src="target.jpg" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
    <li><a href=""><u>Our Goal</u></a></li>
    <p>To wipe off the scarcity of blood and ensure availability of safe and quality blood and other blood components, round the clock and throughout the year. This will lead to alleviation of human sufferings, even to the far-flung remote areas in the country.

Objective: Voluntary blood donation is perhaps one of the most perfect examples of altruism in action. The objective of collecting blood through voluntary blood donation are:
Provide safe and quality blood and blood components collected from voluntary donors, round the clock, at affordable cost to the general public and free of cost to the poor.
Ensure safety and quality of blood.</p>
  </ul>
  </div>
  <br><br>
  <div class=""align="center">
    <img src="mission1.jpg" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
  <li><a href=""><u>Our Mission</u></a></li>
  <p>1. To provide the high quality and safe blood and related blood products to children suffering from Thalassemia and Leukemia primarily in the Greater Hyderabad Municipality area.
2. To make blood donation 100% voluntary without any replacement donor by building individual or institutional alliances.
3. To create awareness about Thalassemia so that the incidence decreases over time.
4. To motivate and train the next generation youth leaders to ensure sustainability of the mission of Voluntary Blood Donation.</p>
</ul>
  </div>

      <br><br>
</div>
</section>
</html>