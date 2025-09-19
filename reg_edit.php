<?php
if(isset($_POST['fetch'])){
$idf = $_POST['idf'];
$connect= mysqli_connect("localhost", "root", "", "induscamp");
$query= "SELECT * FROM `reg` WHERE `pat_id`=$idf";
$result= mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)){
$pat_id= $row['pat_id'];
$pat_mr= $row['pat_mr'];
$name= $row['name'];
$fname= $row['fname'];
$age= $row['age'];
$cnic= $row['cnic'];
$gender1= $row['gender'];
$address= $row['address'];
$contact= $row['contact'];
}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$pat_id= "";
$pat_mr= "";
$name= "";
$fname= "";
$age= "";
$cnic= "";
$gender1= "";
$address= "";
$contact= "";
}
?>

<html>
<head>
<title>MEDICAL CAMP SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 
 
</head>

<body background="backg.jpg">
<table border="10" align="center">
  <tr>
    <td align="center"><b>Patient Registration Edit</b></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="reg_edit.php" method="POST">
  
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
    <form action="reg_edit_link.php" method="POST">
    
	<tr>
      <td>Patient ID:</td>
      <td><input type="text" name="pat_id" size="5" value="<?php echo $pat_id;?> " readonly>
      </td>
</tr>
	<tr>
      <td>Patient MR Number:</td>
      <td><input type="text" name="pat_mr" value="<?php echo $pat_mr;?> " size="20" maxlength="11"> <font color="red"><b>* If Patient Already Registered</B></font>
      </td>
</tr>
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?> " size="40" style="text-transform: uppercase">
      </td>
</tr>
	<tr>
      <td>Father Name</td>
      <td><input type="text" name="fname" value="<?php echo $fname;?> " size="40" style="text-transform: uppercase">
      </td>
    </tr>
	<tr>
      <td>CNIC</td>
      <td><input type="text" name="cnic" value="<?php echo $cnic;?> " size="20" maxlength="13">
      </td>
</tr>
	<tr>
      <td>Age</td>
      <td><input type="text" name="age" value="<?php echo $age;?> " size="10" maxlength="3">
      </td>
	  </tr>
	<tr>
	  <td>Gender</td>
      <td><select name="gender"><option value="<?php echo $gender1;?> "><?php echo $gender1;?></option>
	  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
      </select>
      </td>
    </tr>
	
	<tr>
      <td>Address</td>
      <td><input type="text" name="address" value="<?php echo $address;?> " size="60">
      </td>
</tr>
	<tr>
      <td>Contact#</td>
      <td><input type="text" name="contact" value="<?php echo $contact;?> " size="20" maxlength="11">
      </td>
    </tr>
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Update"></td>
	  <td>
<input type="button" onclick="location.href='reg_edit.php';" value="Refresh" />	  
	  </td>
	  <td>
<input type="button" onclick="location.href='regist.php';" value="Back" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="view_all.php">Click to view all Patient</a></th>
</tr>
</table>