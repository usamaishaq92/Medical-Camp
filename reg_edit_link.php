<?php
if(isset($_POST['submit'])){
include 'database.php'; //include database detail
$pat_id = $_POST['pat_id'];
$pat_mr = $_POST['pat_mr'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$cnic = $_POST['cnic'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact = $_POST['contact'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = ("UPDATE reg SET pat_mr = '".$pat_mr."', name = '".$name."', fname = '".$fname."', cnic = '".$cnic."', age = '".$age."', gender = '".$gender."', address = '".$address."', contact = '".$contact."' WHERE pat_id = '".$pat_id."'");

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