<?php
echo "<pre>";
print_r($_POST);


$father_name = $_POST['father_name'];
$full_name = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// DB connection

$servername = "localhost";
$username = "root";
$password = "";
$DB_Name = 'school_management_system';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DB_Name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{

echo "Connected successfully";
}


// Insertion Query
$sql = "INSERT INTO `student` (`id`, `full_name`, `email`, `phone`, `address`, `father_name`, `dob`, `gender`, `created_at`) VALUES (NULL, '{$full_name}', '{$email}', 
		   '{$phone}', '{$address}', '{$father_name}',
		   '{$dob}', '{$gender}', now())";



if (mysqli_query($conn, $sql)) {
	echo "Record successfully entered...";
}else{
	echo "there is an error....";
}














