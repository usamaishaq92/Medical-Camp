<?php



if(isset($_POST['submit'])){





include 'database.php'; //include database detail

$pat_mr = $_POST['pat_mr'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$cnic = $_POST['cnic'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$camp = $_POST['camp'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `reg` (`pat_id`, `pat_mr`, `cnic`, `name`, `fname`, `age`, `address`, `gender`, `contact`, `camp`) VALUES (NULL, '$pat_mr', '$cnic', '$name', '$fname', '$age', '$address', '$gender', '$contact', '$camp');";

if (mysqli_query($conn, $sql)) {
    echo "<script>location.href = 'print.php?cnic=".$cnic."'</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


} else {
	echo "You are not allow to open this page";
}

?>