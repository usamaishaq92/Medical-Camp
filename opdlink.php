<?php





if(isset($_POST['submit'])){





include 'database.php'; //include database detail

$pat_id = $_POST['pat_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$m1 = $_POST['m1'];
$q1 = $_POST['q1'];
$m2 = $_POST['m2'];
$q2 = $_POST['q2'];
$m3 = $_POST['m3'];
$q3 = $_POST['q3'];
$m4 = $_POST['m4'];
$q4 = $_POST['q4'];
$camp = $_POST['camp'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `opd` (`pat_id`, `name`, `age`,  `m1`, `q1`, `m2`, `q2`, `m3`, `q3`, `m4`, `q4`, `camp`) VALUES ( '$pat_id', '$name', '$age', '$m1', '$q1', '$m2', '$q2', '$m3', '$q3', '$m4', '$q4', '$camp');";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Saved Successfully'); window.location.href='opd.php';  </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}

?>