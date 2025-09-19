<html>

<head>
<title>MEDICAL CAMP SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 
 
</head>

<body background="backg.jpg">

<table border="10" align="center">
  <tr>
    <td align="center"><b>Camp Registration</b></td>
  </tr>
  <tr>
  <td>
  <table>
    <form action="camplink.php" method="POST">
    
	<tr>
      <td>Camp Name</td>
      <td><input type="text" name="camp_name" size="50">
      </td>
</tr>
<tr>
	  <td>Status</td>
      <td><select name="status"><option value="Y">Active</option>
                  <option value="N">Deactive</option>
                  
      </select>
      </td>
    </tr>
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="ADD"></td>
	  <td>
<input type="button" onclick="location.href='camp.php';" value="Refresh" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="campupdate.php">Camps Edit</a></th>
</tr>
<tr>
  <th colspan="2"><a href="camp_view_all.php">Click to view all Registered Camp</a></th>
</tr>
</table>