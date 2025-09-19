<?php
if(isset($_GET['cnic']))
{
include 'database.php';
$cnic1 = $_GET['cnic'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `reg` WHERE `cnic` = '$cnic1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    	?>
<table border="2px;">
	<tr><th colspan="2"><b>MEDICAL CAMP SYSTEM</b> </th></tr>
	<tr>
	<tr><th>Patient Id</th><td><b><h1> <?php echo $row["pat_id"]; ?> </h1></b></td></tr>
	<tr>
		<th>Name</th><td><?php echo $row["name"]; ?></td>
    </tr>
    <tr>
		<th>Father Name</th><td><?php echo $row["fname"]; ?></td>
    </tr>
    <tr>
    	 <tr>
		<th>CNIC</th><td><?php echo $row["cnic"]; ?></td>
    </tr>
    <tr>
		<th>Age</th><td><?php echo $row["age"]; ?></td>
    </tr>
    <tr>
		<th>Gender : </th><td><?php echo $row["gender"]; ?></td>
    </tr>
    <tr>
		<th>Address</th><td><?php echo $row["address"]; ?></td>
    </tr>
    <tr>
		<th>Contact : </th><td><?php echo $row["contact"]; ?></td>
    </tr>
    <tr><th colspan="2">
    	<button onclick="window.print()">Print</button>



    </th></tr>
</table>
       <p style="page-break-after: always;">&nbsp;</p>
<p style="page-break-before: always;">&nbsp;</p>

        <?php
    }
} else {
    echo "0 results<br> no patient Found";
}

mysqli_close($conn);
}
else {
	echo "You are not authorise to directly open via url hit";
}
?>