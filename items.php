
<html>

<head>
<title>MEDICAL CAMP SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 
 
</head>

<body background="backg.jpg">

<table border="10" align="center">
  <tr>
    <td align="center"><b>Items Registration</b></td>
  </tr>
  <tr>
  <td>
  <table>
    <form action="itemslink.php" method="POST">
    
	<tr>
      <td>Item Name</td>
      <td><input type="text" name="med" size="50">
      </td>
</tr>
<tr>
	  <td>Status</td>
      <td><select name="status"><option value="Y">Active</option>
                  <option value="N">Deactive</option>
                  
      </select>
      
	<td>C-Code</td>
      <td><select name="camp">
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT * FROM `camp` WHERE status='Y'");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['id']."'>".$row['camp_name']."</option>";}?>	
</select>
      </td>
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="ADD"></td>
	  <td>
<input type="button" onclick="location.href='items.php';" value="Refresh" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="itemsupdate.php">Items Edit</a></th>
</tr>
<tr>
  <th colspan="2"><a href="items_view_all.php">Click to view all Registered Items</a></th>
</tr>
</table>