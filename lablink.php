<?php

if(isset($_POST['submit'])){

include 'database.php'; //include database detail

$pat_id = $_POST['pat_id'];
$name = $_POST['name'];
$age = $_POST['age'];

$glu = $_POST['glu'];
$hepb = $_POST['hepb'];
$hepc = $_POST['hepc'];
$camp = $_POST['camp'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `lab` (`pat_id`, `name`, `age`, `glu`, `hepb`, `hepc`, `camp`) VALUES ( '$pat_id', '$name', '$age', '$glu', '$hepb', '$hepc', '$camp');";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Saved Successfully'); window.location.href='lab.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}

?>