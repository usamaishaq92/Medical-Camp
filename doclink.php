<?php





if(isset($_POST['submit'])){





include 'database.php'; //include database detail

$pat_id = $_POST['pat_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$inv = $_POST['inv'];
$diag = $_POST['diag'];
$m1 = $_POST['m1'];
$d1 = $_POST['d1'];
$m2 = $_POST['m2'];
$d2 = $_POST['d2'];
$m3 = $_POST['m3'];
$d3 = $_POST['d3'];
$m4 = $_POST['m4'];
$d4 = $_POST['d4'];

$camp = $_POST['camp'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `doc` (`pat_id`, `name`, `age`, `inv`, `diag`, `m1`, `d1`, `m2`, `d2`, `m3`, `d3`, `m4`, `d4`, `camp`) VALUES ( '$pat_id', '$name', '$age', '$inv', '$diag', '$m1', '$d1', '$m2', '$d2', '$m3', '$d3', '$m4', '$d4', '$camp');";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Saved Successfully'); window.location.href='Doctors.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}

?>