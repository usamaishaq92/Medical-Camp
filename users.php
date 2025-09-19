<html>

<head>
<title>MEDICAL CAMP SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 
 
</head>

<body background="backg.jpg">

<table border="10" align="center">
  <tr>
    <td align="center"><b>Users Registration</b></td>
  </tr>
  <tr>
  <td>
  <table>
    <form action="userslink.php" method="POST">
    
	<tr>
      <td>Name</td>
      <td><input type="text" name="name" size="40">
      </td>
</tr>
	<tr>
      <td>Username</td>
      <td><input type="text" name="user" size="40">
      </td>
    </tr>
	<tr>
      <td>Password</td>
      <td><input type="text" name="pass"  size="20">
      </td>
</tr>
	<tr>
	  <td>Rights Assign</td>
      <td><select name="rights"><option value="Admin">Admin</option>
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
      <td><select name="status"><option value="Y">Active</option>
                  <option value="N">Deactive</option>
                  
      </select>
      </td>
    </tr>
	
    <tr>
      <td></td>
      <td align="right"><input type="submit" 
      name="submit" value="Save"></td>
	  <td>
<input type="button" onclick="location.href='users.php';" value="Refresh" />	  
	  </td>
    </tr>
    </table>
  </td>
</tr>
<tr>
  <th colspan="2"><a href="userupdate.php">Edit Users Data</a></th>
</tr>
<tr>
  <th colspan="2"><a href="users_view_all.php">Click to view all Registered Users</a></th>
</tr>
</table>