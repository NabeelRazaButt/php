<?php
session_start();
echo "<pre>";
print_r($_SERVER);

if (!isset($_SESSION['Username'])) {
	header("Location: login.php");
}

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
include 'config.php';
$sql = "SELECT * FROM `student`";
$results = mysqli_query($conn, $sql);
?>
<table class="table" width="75%">
	<tr>
		<th>S No</th>
		<th>Full Name</th>
		<th>Email</th>
		<th>PHone</th>
		<th>Address</th>
		<th>Father Name</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Actions</th>
	</tr>
	<?php while ($record = mysqli_fetch_array($results)) { ?>
	<tr>
		<td> 1 </td>
		<td> <?php echo $record['full_name']; ?>  </td>
		<td> <?php echo $record['email']; ?>  </td>
		<td> <?php echo $record['phone']; ?>  </td>
		<td> <?php echo $record['address']; ?>  </td>
		<td> <?php echo $record['father_name']; ?>  </td>
		<td> <?php echo $record['gender']; ?>  </td>
		<td> <?php echo $record['dob']; ?>  </td>
		<td>
			<a href="student_edit.php?id=<?php echo $record['id']; ?>">Edit</a> 
			<a href="student_delete.php?id=<?php echo $record['id']; ?>">Delete</a> 
		</td>
	</tr>
	<?php } ?>

</table>