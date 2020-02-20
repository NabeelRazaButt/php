<?php 

$n=$_POST['fullname'];
$fn=$_POST['fathername'];
$em=$_POST['email'];
$ct=$_POST['city'];
$ph=$_POST['phone'];
$dob=$_POST['dob'];
$add=$_POST['address'];
$gen=$_POST['gender'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `student` (`roll_no`, `name`, `f_name`, `email`, `phone`, `city`, `address`, `gender`, `dob`, `created_at`, `updated_at`) VALUES (NULL, '{$n}', '{$fn}', '{$em}', '{$ph}', '{$ct}', '{$add}', '{$gen}', '{$dob}', CURRENT_TIMESTAMP(), NULL);";

if (mysqli_query($conn, $sql)) {
    header("Location: form_student.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>