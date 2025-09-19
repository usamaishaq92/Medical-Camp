<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail

$camp_name = $_POST['camp_name'];
$status = $_POST['status'];




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `camp` (`camp_name`, `status`) VALUES ('$camp_name', '$status');";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Saved Successfully'); window.location.href='camp.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}



?>