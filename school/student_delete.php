<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id = ".$id;


if (mysqli_query($conn, $sql)) {
	echo "Record deleted successfully...";
}else{
	echo "there is an error";
}