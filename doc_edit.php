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
$m1e= $row['m1'];
$d1= $row['d1'];
$m2e= $row['m2'];
$d2= $row['d2'];
$m3e= $row['m3'];
$d3= $row['d3'];
$m4e= $row['m4'];
$d4= $row['d4'];

}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$pat_id= "";
$name= "";
$age= "";
$diag= "";
$m1e= "";
$d1= "";
$m2e= "";
$d2= "";
$m3e= "";
$d3= "";
$m4e= "";
$d4= "";

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
    <td align="center"><font color="green"><b>P.M.R Edit</b></font></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="doc_edit.php" method="POST">
  
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

    <form action="doc_edit_link.php" method="POST" >
   <td>Patient ID</td>
      <td><input type="text" name="pat_id" value="<?php echo $pat_id;?> " size="5" readonly> 
      </td></td>
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?> " size="30" readonly >
      </td>
    </tr>
	<tr>
      <td>Age</td>
      <td><input type="text" name="age" value="<?php echo $age;?> " size="5" readonly>
      </td>
</tr>
	<tr>
      <td>Diagnose</td>
      <td><input type="text" name="diag" value="<?php echo $diag;?> " size="30">
      </td>
	  </tr>
	<tr>
	  
	  <td>Medication 1</td>
      <td><select name="m1">
	  <option value="<?php echo $m1e;?> "><?php echo $m1e;?></option>
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d1" size="30" value="<?php echo $d1;?> ">
      </td>
    </tr>
	<tr>
	  <td>Medication 2</td>
      <td><select name="m2">
	  <option value="<?php echo $m2e;?> "><?php echo $m2e;?></option>
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  
	  <td>Days</td>
      <td><input type="text" name="d2" size="30" value="<?php echo $d2;?> ">
      </td>
    </tr>
	<tr>
	  <td>Medication 3</td>
      <td><select name="m3">
	  <option value="<?php echo $m3e;?> "><?php echo $m3e;?></option>
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  
	  <td>Days</td>
      <td><input type="text" name="d3" size="30" value="<?php echo $d3;?> ">
      </td>
    </tr>
	<tr>
	  <td>Medication 4</td>
      <td><select name="m4">
	  <option value="<?php echo $m4e;?> "><?php echo $m4e;?></option>
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  
	  <td>Days</td>
      <td><input type="text" name="d4" size="30" value="<?php echo $d4;?> ">
      </td>
    </tr>
	
	
	
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Update"></td>
	  <td>
<input type="button" onclick="location.href='doc_edit.php';" value="Refresh" />	  
	  </td>
	  <td>
<input type="button" onclick="location.href='Doctors.php';" value="Back" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="doc_view_all.php">Click to view all Patients Medical Record Data</a></th>
</tr>
</table>