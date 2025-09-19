<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail

$pat_id = $_POST['pat_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$diag = $_POST['diag'];
$m1 = $_POST['m1'];
$d1 = $_POST['d1'];
$m2 = $_POST['m2'];
$d2 = $_POST['d2'];
$m3 = $_POST['m3'];
$d3 = $_POST['d3'];
$m4 = $_POST['m4'];
$d4 = $_POST['d4'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = ("UPDATE doc SET diag = '".$diag."', m1 = '".$m1."', d1 = '".$d1."', m2 = '".$m2."', d2 = '".$d2."', m3 = '".$m3."', d3 = '".$d3."', m4 = '".$m4."', d4 = '".$d4."' WHERE pat_id = '".$pat_id."'");

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record UPDATE Successfully'); window.location.href='doc_edit.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}

?>