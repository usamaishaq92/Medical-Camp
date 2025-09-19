<?php
if(isset($_POST['fetch'])){
$idf = $_POST['idf'];
$connect= mysqli_connect("localhost", "root", "", "induscamp");
$query= "SELECT * FROM `lab` WHERE `pat_id`=$idf";
$result= mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)){
$pat_id= $row['pat_id'];
$name= $row['name'];
$age= $row['age'];
$inv= $row['inv'];
$glu= $row['glu'];
$hepb= $row['hepb'];
$hepc= $row['hepc'];
}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$pat_id= "";
$name= "";
$age= "";
$inv= "";
$glu= "";
$hepb= "";
$hepc= "";
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
    <td align="center"><font color="green"><b>Investigations View</b></font></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="lab_pat_wise.php" method="POST">
  
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

    <form action="lab_pat_wise.php" method="POST">
   <td>Patient ID</td>
      <td><input type="text" name="pat_id" value="<?php echo $pat_id;?> " size="10" readonly> 
      </td></td>
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?> " size="40" readonly >
      </td>
    </tr>
	<tr>
      <td>Age</td>
      <td><input type="text" name="age" value="<?php echo $age;?> " size="5" readonly >
      </td>
    </tr>
	<tr>
      <td>Investigations Status</td>
      <td><input type="text" name="inv" value="<?php echo $inv;?> " size="10" readonly> 
      </td>
</tr>
	<tr>
      <td>GLUCOMETER BLOOD SUGAR</td>
      <td><input type="text" name="glu" value="<?php echo $glu;?> " size="20" readonly>
      </td>
	  </tr>
	<tr>
	  <td>HEP B SURFACE ANTIGEN (ICT)</td>
      <td><input type="text" name="hepb" value="<?php echo $hepb;?> " size="20" readonly>
      </td>
    </tr>
	<tr>
	  <td>HEPATITS C VIRUS ANTIBODY</td>
      <td><input type="text" name="hepc" value="<?php echo $hepc;?> " size="20" readonly>
      </td>
    </tr>
	
	
	
	
	
    
<tr>
      <td></td>
      <td align="right"><input type="button" onclick="location.href='Doctors.php';" value="Back" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="lab_view_all.php">Click to view all Patients Investigations Record</a></th>
</tr>
</table>