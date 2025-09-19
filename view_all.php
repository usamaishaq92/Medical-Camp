
<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="center"> 
<table>
 
<form action="view_all.php" method="POST">
<table border="2" align="center">
<td><font color="red"><b>Select Camp Name:</B></font></td>
 <td><select name="campf">
	  <?php
	$connect2= mysqli_connect("localhost", "root", "", "induscamp");
$res=mysqli_query($connect2, "SELECT * FROM `camp`");
while ($row=mysqli_fetch_array($res)){
echo "<option value='".$row['id']."'>".$row['camp_name']."</option>";}?>	
</select>
      </td>
 <td><input type="submit" name="fetch" value="Fetch"> </td>
	  </form></table>
	  
<?php 
include 'database.php';



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['fetch'])){
$campf = $_POST['campf'];
$sql = "SELECT * FROM `reg` WHERE camp=$campf";
$result = mysqli_query($conn, $sql);
 $rowcount=mysqli_num_rows($result);
  

if (mysqli_num_rows($result) > 0) {
    // output data of each row

	echo " <table border='2px'>
	        
        	<tr><th colspan='10'>Patients Registration Details</th></tr>
        	<th>Pat ID</th><th>Patient MR</th><th>Patient Name</th><th>Father Name</th><th>CNIC</th><th>Age</th><th>Gender</th><th>Address</th><th>contact</th><th>Date&Time</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	?>

      <tr>
       
        	<td><?php echo $row['pat_id']; ?></td>
			<td><?php echo $row['pat_mr']; ?></td>
        	<td><?php echo $row['name']; ?></td>
        	<td><?php echo $row['fname']; ?></td>
        	<td><?php echo $row['cnic']; ?></td>
        	<td><?php echo $row['age']; ?></td>
        	<td><?php echo $row['gender']; ?></td>
        	<td><?php echo $row['address']; ?></td>
        	<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['date_time']; ?></td>
        	
      </tr>
        
       
        <?php 
       
    }
      echo  "</tr></table>";
} else {
    echo "0 results";
}
echo "<b><font color=red size='5pt'>Total Patients Registered: $rowcount</font></b>";

}
mysqli_close($conn);
?>