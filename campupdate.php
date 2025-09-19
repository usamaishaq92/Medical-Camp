<?php
if(isset($_POST['fetch'])){
$idf = $_POST['idf'];
$connect= mysqli_connect("localhost", "root", "", "induscamp");
$query= "SELECT * FROM `camp` WHERE `id`=$idf";
$result= mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result)){
$id= $row['id'];
$camp_name= $row['camp_name'];
$sts= $row['status'];
}
mysqli_free_result($result);
mysqli_close($connect);
}
else {
$id= "";
$camp_name= "";
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
    <td align="center"><font color="green"><b><b>Camp Edit</b></B></font></td>
  </tr>
  <tr>
  <td>
  <table>
  <form action="campupdate.php" method="POST">
  
   <table border="2" align="center">
   
      <td><font color="red"><b>Enter Item ID & Fetch</B></font></td>
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
    <form action="camp_up_link.php" method="POST">
    
	<tr>
      <td>Camp ID</td>
      <td><input type="text" name="id" value="<?php echo $id;?> " size="10" readonly>
      </td>
	<tr>
      <td>Camp Name</td>
      <td><input type="text" name="camp_name" value="<?php echo $camp_name;?> " size="40">
      </td>
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
<input type="button" onclick="location.href='campupdate.php';" value="Refresh" />	  
	  </td>
	  <td>
<input type="button" onclick="location.href='camp.php';" value="Back" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="camp_view_all.php">Click to view all Registered Camps</a></th>
</tr>
</table>