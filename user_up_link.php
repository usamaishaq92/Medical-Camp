<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail
$id = $_POST['id'];
$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$rights = $_POST['rights'];
$status = $_POST['status'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = ("UPDATE users SET name = '".$name."', user = '".$user."', pass = '".$pass."', rights = '".$rights."', status = '".$status."' WHERE id = '".$id."'"); 

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record UPDATE Successfully'); window.location.href='userupdate.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}



?>