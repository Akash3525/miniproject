<?php
session_start();
include('pheader.php');
include('pconnection.php');
if(isset($_SESSION['loggedin'])==true){
	include('pnavadmin.php');
}
else {
	include('pnavuser.php');
}
?>

<!DOCTYPE html>
<head>
<title>Donor List | Welcome</title>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
	margin: 5px;
  text-align: center;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 18px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #FF5733;
  color: white;
}
</style>
</head>
  <br>
  <div class="blood">
    <label>Search The Donors</label>
    <br><br>
  <label>Blood Group: </label>
<form class="" action="" method="post">
  <select name="bgroup">
    <option>Select</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>AB+</option>
    <option>AB-</option>
    <option>O+</option>
    <option>O-</option>
    </select>
	<label>Select city</label>
    <select name="city" style="border-radius: 10px">
		<option>Visakhapatnam</option>
		<option>Krishna</option>
		<option>Guntur</option>
		<option>Kurnool</option>
		<option>Nellore</option>
		<option>chittoor</option>
		<option>kadapa</option>
		<option>Anantapur</option>
		<option>Vizianagaram</option>
        <option>Srikakulam</option>
		<option>East Godavari</option>
		<option>West Godavari</option>
		</select>
    <br>
	<br /><br />
        <input name="sub" type="submit" value="Submit" style="background-color:#1797DB;font-size:18px;" />
		<input type="reset" value="Reset" style="background-color:#ff0000;color:white;font-size:18px;" />
		<br /><br />
    </form>
</div>
<br></br>

<?php
if(isset($_POST['sub']))
{
  $bgroup=@$_POST['bgroup'];
  $city=@$_POST['city'];

	

?>
	<h1 align="center">Donor List</h1>
	<br>
	<table id="customers" style="margin: 0px auto;">

	  <tr>
			<th>ID</th>
	    <th>Name</th>
	    <th>Blood Group</th>
	    <th>Gender</th>
			<th>Age</th>
			<th>Weight</th>
			<th>Last Donated</th>
			<th>Phone Number</th>
			<th>Address</th>

	  </tr>
		<?php
		$ql=$db->query("SELECT id, city AS a FROM plocation ORDER BY a LIMIT 2");
		while ($pl=$ql->fetch(PDO::FETCH_OBJ)) {
		$id=$pl->id;

	$q=$db->query("SELECT * FROM pdonor WHERE bgroup='$bgroup' AND id='$id'");
	$count=0;
	while ($p=$q->fetch(PDO::FETCH_OBJ)) {
		?>
		<tr>

	    <?php

	        $d=$p->date;
	        $current=date("Y/m/d");
	        $month=((strtotime($current) - strtotime($d))/60/60/24)/30;

	     if($month>=3.0) {
	      ?>
	      <td><?= $p->id; ?></td>
	      <td><?= $p->name; ?></td>
	      <td><?= $p->bgroup; ?></td>
	  	  <td><?= $p->gender; ?></td>
	  	  <td><?= $p->age; ?></td>
	  	  <td><?= $p->weight; ?></td>
	      <td><?= $p->date; ?></td>
	      <td><?= $p->number; ?></td>
	    	<td><?= $p->address; ?></td>

	  <?php

	    }

	    ?>
	  </tr>
		<?php
}
	}
		 ?>
	</table>
	<?php

	}

 ?>

</body>
</html>