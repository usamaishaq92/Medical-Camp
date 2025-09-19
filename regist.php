<html>

<head>
<title>MEDICAL CAMP SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 
 
</head>

<body background="backg.jpg">

<table border="10" align="center">
  <tr>
    <td align="center"><b>Patient Registration</b></td>
  </tr>
  <tr>
  <td>
  <table>
    <form action="input.php" method="POST">
    <tr>
      <td>Patient MR Number:</td>
      <td><input type="text" name="pat_mr" size="20" maxlength="11"> <font color="red"><b>* If Patient Already Registered</B></font>
      </td>
	  
	  <td>----Camp</td>
      <td><select name="camp">
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT * FROM `camp` WHERE status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['id']."'>".$row['camp_name']."</option>";}?>	
</select>
      </td>
	  
</tr>
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" size="40" style="text-transform: uppercase">
      </td>
</tr>
	<tr>
      <td>Father Name</td>
      <td><input type="text" name="fname" size="40" style="text-transform: uppercase">
      </td>
    </tr>
	<tr>
      <td>CNIC</td>
      <td><input type="text" name="cnic"  size="20" maxlength="13">
      </td>
</tr>
	<tr>
      <td>Age</td>
      <td><input type="text" name="age" size="10" maxlength="3">
      </td>
	  </tr>
	<tr>
	  <td>Gender</td>
      <td><select name="gender"><option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
      </select>
      </td>
    </tr>
	
	<tr>
      <td>Address</td>
      <td><input type="text" name="address" size="60">
      </td>
</tr>
	<tr>
      <td>Contact#</td>
      <td><input type="text" name="contact" size="20" maxlength="11">
      </td>
    </tr>
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Save"></td>
	  <td>
<input type="button" onclick="location.href='regist.php';" value="Refresh" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="reg_edit.php">Registration Edit</a></th>
</tr>
<tr>
  <th colspan="2"><a href="view_all.php">Click to view all Patient</a></th>
</tr>
</table>