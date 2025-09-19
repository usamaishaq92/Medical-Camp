<?php
if(isset($_POST['fetch'])){
$idf = $_POST['idf'];
$connect= mysqli_connect("localhost", "root", "", "induscamp");
$query= "SELECT * FROM `reg` WHERE `pat_id`=$idf";
$result= mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)){
$pat_id= $row['pat_id'];
$name= $row['name'];
$age= $row['age'];
$camp= $row['camp'];
}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$pat_id= "";
$name= "";
$age= "";
$camp= "";
}
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="MCS Image" class="center"> 

<title>MEDICAL CAMP SYSTEM</title>
</head>

<body background="backg.jpg">

<table border="10" align="center">
  <tr>
    <td align="center"><font color="green"><b>Patient Medical Record - For Babies</b></font></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="baby.php" method="POST">
  
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

    <form action="doclink.php" method="POST" >
   <td>Patient ID</td>
      <td><input type="text" name="pat_id" value="<?php echo $pat_id;?> " size="5" readonly> 
      </td>
	  <td>C-Code</td>
      <td><input type="text" name="camp" value="<?php echo $camp;?> " size="1" readonly> 
      </td>
	  
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?> " size="30" readonly >
      </td>
    
      <td>Age</td>
      <td><input type="text" name="age" value="<?php echo $age;?> " size="5" readonly>
      </td>
	  <td>CAT</td>
      <td><input type="text" name="inv" value="BABY" size="2" readonly>
      </td>
	  
</tr>
	<tr>
      <td>Diagnose</td>
      <td><input type="text" name="diag" size="30">
      </td>
	  </tr>
	<tr>
	  
	  <td>Medication 1</td>
      <td><select name="m1">
	  <option value='-'>-</option><?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  
	  <td>Days</td>
      <td><input type="text" name="d1" size="30">
      </td>
    </tr>
	<tr>
	  <td>Medication 2</td>
      <td><select name="m2">
	  <option value='-'>-</option><?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  
	  <td>Days</td>
      <td><input type="text" name="d2" size="30">
      </td>
    </tr>
	<tr>
	  <td>Medication 3</td>
      <td><select name="m3">
	  <option value='-'>-</option><?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d3" size="30">
      </td>
    </tr>
	<tr>
	  <td>Medication 4</td>
      <td><select name="m4">
	  <option value='-'>-</option><?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT i.id, i.med, i.status FROM items i, camp c 
WHERE i.status='Y' and c.id=i.camp
and c.status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['med']."'>".$row['med']."</option>";}?>	
</select>
      </td>
	  <td>Days</td>
      <td><input type="text" name="d4" size="30">
      </td>
    </tr>
	

	
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Save"></td>
	  <td>
<input type="button" onclick="location.href='baby.php';" value="Refresh" />	  
	  </td>
	  <td>
<input type="button" onclick="location.href='Doctors.php';" value="Back" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="doc_edit.php">P.M.R Edit</a></th>
</tr>
<tr>
  <th colspan="2"><a href="doc_view_all.php">Click to view all Patients Medical Record Data</a></th>
</tr>
<tr>
  <th colspan="2"><a href="lab_pat_wise.php">Investigations View (Patient Wise)</a></th>
</tr>
</table>