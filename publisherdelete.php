<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php

if($_GET['id']!='')
{
	$publisher_id = $_GET['id'];
	// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');

$sql = "DELETE FROM book WHERE Publisher_id = '$publisher_id'";
$rs  =	mysqli_query($con, $sql);
$sql = "DELETE FROM publisher WHERE Publisher_id = '$publisher_id'";
$rs  =	mysqli_query($con, $sql);

if($rs)
{
	echo "<script>
alert('Publisher Record Deleted Successfully');
window.location.href='publisherview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Customer Records Inserted Successfully');</script>";
	// header('location: customerview.html');
}

else
{
	echo "<script>
alert('Error');
window.location.href='publisherview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Error');</script>";
	// header('location: customer.html');

}
}
else {
	echo "<script>
alert('Error');
window.location.href='publisherview.php';
</script>";
}
?>
