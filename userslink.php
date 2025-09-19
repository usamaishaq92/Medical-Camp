<?php



if(isset($_POST['submit'])){





include 'database.php'; //include database detail

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

$sql = "INSERT INTO `users` (`name`, `user`, `pass`, `rights`, `status`) VALUES ('$name', '$user', '$pass', '$rights', '$status');";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Saved Successfully'); window.location.href='users.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}



?>