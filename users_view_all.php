<link rel="stylesheet" type="text/css" href="style.css">
 <img src="img.jpg" alt="Indus Image" class="leftlong"> 
<?php 
include 'database.php';



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
echo " <table border='2px'>
        	<tr><th colspan='13'>Registered Users</th></tr>
        	<th>ID</th><th>Name</th><th>Username</th><th>Password</th><th>Rights</th><th>Status</th><th>Date&Time</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
    	?>

      <tr>
       
        	<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['user']; ?></td>
        	<td><?php echo $row['pass']; ?></td>
        	<td><?php echo $row['rights']; ?></td>
        	<td><?php echo $row['status']; ?></td>
        	<td><?php echo $row['date_time']; ?></td>
       
        	
      </tr>
        
       
        <?php 
       
    }
      echo  "</tr></table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>