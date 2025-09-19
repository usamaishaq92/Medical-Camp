<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail

$pat_id = $_POST['pat_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$inv = $_POST['inv'];
$glu = $_POST['glu'];
$hepb = $_POST['hepb'];
$hepc = $_POST['hepc'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = ("UPDATE lab SET glu = '".$glu."', hepb = '".$hepb."', hepc = '".$hepc."' WHERE pat_id = '".$pat_id."'");

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record UPDATE Successfully'); window.location.href='lab_edit.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}

?>