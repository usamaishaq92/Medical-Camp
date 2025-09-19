<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="leftlong"> 
<table>
 
<form action="doc_view_all.php" method="POST">
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
$sql = "SELECT * FROM `doc` WHERE camp=$campf";
$result = mysqli_query($conn, $sql);
 $rowcount=mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
echo " <table border='2px'>
        	<tr><th colspan='13'>Patients Treated at Camp</th></tr>
        	<th>Pat ID</th><th>Patient Name</th><th>Patient age</th><th>Diagnose</th><th>Medication 1</th><th>Days</th><th>Medication 2</th><th>Days</th><th>Medication 3</th><th>Days</th><th>Medication 4</th><th>Days</th><th>Category</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	?>

      <tr>
       
        	<td><?php echo $row['pat_id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['age']; ?></td>
        	<td><?php echo $row['diag']; ?></td>
        	<td><?php echo $row['m1']; ?></td>
        	<td><?php echo $row['d1']; ?></td>
        	<td><?php echo $row['m2']; ?></td>
        	<td><?php echo $row['d2']; ?></td>
        	<td><?php echo $row['m3']; ?></td>
        	<td><?php echo $row['d3']; ?></td>
			<td><?php echo $row['m4']; ?></td>
			<td><?php echo $row['d4']; ?></td>
			<td><?php echo $row['inv']; ?></td>
        	
      </tr>
        
       
        <?php 
       
    }
      echo  "</tr></table>";
} else {
    echo "0 results";
}
echo "<b><font color=red size='5pt'>Total Patients Checked: $rowcount</font></b>";

}

mysqli_close($conn);
?>