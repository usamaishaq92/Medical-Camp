<?php
if(isset($_POST['fetch'])){
$idf = $_POST['idf'];
$connect= mysqli_connect("localhost", "root", "", "induscamp");
$query= "SELECT * FROM `doc` WHERE `pat_id`=$idf";
$result= mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)){
$pat_id= $row['pat_id'];
$name= $row['name'];
$age= $row['age'];
$diag= $row['diag'];
$m1= $row['m1'];
$d1= $row['d1'];
$m2= $row['m2'];
$d2= $row['d2'];
$m3= $row['m3'];
$d3= $row['d3'];
$m4= $row['m4'];
$d4= $row['d4'];
$camp= $row['camp'];
}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$pat_id= "";
$name= "";
$age= "";
$diag= "";
$m1= "";
$d1= "";
$m2= "";
$d2= "";
$m3= "";
$d3= "";
$m4= "";
$d4= "";
$camp= "";
}
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 

<title>MEDICAL CAMP SYSTEM</title>
</head>

<body background="backg.jpg">

<table border="10" align="center">
  <tr>
    <td align="center"><font color="green"><b>OPD Medicine Dispensing</b></font></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="opd.php" method="POST">
  
   <table border="2" align="center">
   
      <td><font color="red"><b>Enter Patient ID & Fetch</B></font></td>
      <td><input type="text" name="idf" size="10">
      </td>
      <td align="right"><input type="submit" 
      name="fetch" value="Fetch"></td>
	  
<tr><td><font color="blue"><b>  </B></font></td></tr>

</form>


</table>

<table>

    <form action="opdlink.php" method="POST">
   <td>Patient ID</td>
      <td><input type="text" name="pat_id" value="<?php echo $pat_id;?> " size="20" readonly> 
      </td>
	  <td>C-Code</td>
      <td><input type="text" name="camp" value="<?php echo $camp;?> " size="1" readonly> 
      </td>
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?> " size="40" readonly >
      </td>
    </tr>
	<tr>
      <td>Age</td>
      <td><input type="text" name="age" value="<?php echo $age;?> " size="10" readonly>
      </td>
</tr>
	<tr>
      <td>Diagnose</td>
      <td><input type="text" name="diag" value="<?php echo $diag;?>" size="50" readonly>
      </td>
	  </tr>
	<tr>
	  <td>Medication 1</td>
      <td><input type="text" name="m1" value="<?php echo $m1;?>" size="30" readonly>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d1" value="<?php echo $d1;?>" size="20" readonly>
      </td>
	  <td>Dispensing Quantity</td>
      <td><input type="text" name="q1" size="10">
      </td>
	  
    </tr>
	<tr>
	  <td>Medication 2</td>
      <td><input type="text" name="m2" value="<?php echo $m2;?>" size="30" readonly>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d2" value="<?php echo $d2;?>" size="20" readonly>
      </td>
	  <td>Dispensing Quantity</td>
      <td><input type="text" name="q2" size="10">
      </td>
    </tr>
	<tr>
	  <td>Medication 3</td>
      <td><input type="text" name="m3" value="<?php echo $m3;?>" size="30" readonly>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d3" value="<?php echo $d3;?>" size="20" readonly>
      </td>
	  <td>Dispensing Quantity</td>
      <td><input type="text" name="q3" size="10">
      </td>
    </tr>
	<tr>
	  <td>Medication 4</td>
      <td><input type="text" name="m4" value="<?php echo $m4;?>" size="30" readonly>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d4" value="<?php echo $d4;?>" size="20" readonly>
      </td>
	  <td>Dispensing Quantity</td>
      <td><input type="text" name="q4" size="10">
      </td>
    </tr>
	
	
	
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Save"></td>
	  <td>
<input type="button" onclick="location.href='opd.php';" value="Refresh" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="opd_edit.php">Medicine Dispensing Edit</a></th>
</tr>
<tr>
  <th colspan="2"><a href="opd_view_all.php">Click to view all Patients Medicine Dispensing Record</a></th>
</tr>
<tr>
  <th colspan="2"><a href="items.php">Medication Items Setup</a></th>
</tr>
</table>