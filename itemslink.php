<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail

$med = $_POST['med'];
$status = $_POST['status'];
$camp = $_POST['camp'];




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `items` (`med`, `status`, `camp`) VALUES ('$med', '$status', '$camp');";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Saved Successfully'); window.location.href='items.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}



?>