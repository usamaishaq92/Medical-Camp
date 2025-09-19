<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail
$id = $_POST['id'];
$camp_name = $_POST['camp_name'];
$status = $_POST['status'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = ("UPDATE camp SET camp_name = '".$camp_name."', status = '".$status."' WHERE id = '".$id."'"); 

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record UPDATE Successfully'); window.location.href='campupdate.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}



?>