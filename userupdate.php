<?php
if(isset($_POST['fetch'])){
$idf = $_POST['idf'];
$connect= mysqli_connect("localhost", "root", "", "induscamp");
$query= "SELECT * FROM `users` WHERE `id`=$idf";
$result= mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)){
$id= $row['id'];
$name= $row['name'];
$user= $row['user'];
$pass= $row['pass'];
$right= $row['rights'];
$sts= $row['status'];
}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$id= "";
$name= "";
$user= "";
$pass= "";
$right= "";
$sts= "";
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
    <td align="center"><font color="green"><b><b>Users Update</b></B></font></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="userupdate.php" method="POST">
  
   <table border="2" align="center">
   
      <td><font color="red"><b>Enter Patient ID & Fetch</B></font></td>
      <td><input type="text" name="idf" size="10">
      </td>
      <td align="right"><input type="submit" 
      name="fetch" value="Fetch"></td>
	  
<tr><td><font color="blue"><b>  </B></font></td></tr>

</form>


</table>

<table border="5" align="center">
  
  <tr>
  <td>
  <table>
    <form action="user_up_link.php" method="POST">
    
	<tr>
      <td>User ID</td>
      <td><input type="text" name="id" value="<?php echo $id;?> " size="10" readonly>
      </td>
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?> " size="40">
      </td>
</tr>
	<tr>
      <td>Username</td>
      <td><input type="text" name="user" value="<?php echo $user;?> " size="40">
      </td>
    </tr>
	<tr>
      <td>Password</td>
      <td><input type="text" name="pass" value="<?php echo $pass;?> " size="20">
      </td>
</tr>
	<tr>
	  <td>Rights Assign</td>
      <td><select name="rights"><option value="<?php echo $right;?> "><?php echo $right;?></option>
					<option value="Admin">Admin</option>
                  <option value="reg">Registration</option>
                  <option value="doc">Medical Officers</option>
				  <option value="opd">OPD</option>
				  <option value="lab">LAB</option>
				  <option value="rep">Reports</option>
				  
      </select>
      </td>
    </tr>
	
	</tr>
	<tr>
	  <td>Status</td>
      <td><select name="status"><option value="<?php echo $sts;?> "><?php echo $sts;?></option>
					<option value="Y">Active</option>
                  <option value="N">Deactive</option>
                  
      </select>
      </td>
    </tr>
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Update"></td>
	  <td>
<input type="button" onclick="location.href='userupdate.php';" value="Refresh" />	  
	  </td>
	  <td>
<input type="button" onclick="location.href='users.php';" value="Back" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="users_view_all.php">Click to view all Registered Users</a></th>
</tr>
</table>