<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php
// database connection code
if(isset($_POST['txtName']) && $_GET['id']!='')
{
	$publisher_id = $_GET['id'];
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtURl = $_POST['txturl'];

// database insert SQL code
$sql = "UPDATE `publisher` SET `Name` = '$txtName', `Email`= '$txtEmail', `URL` = '$txtURl' WHERE Publisher_id = '$publisher_id'";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>
alert('Publisher Record Updated Successfully');
window.location.href='publisherview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Customer Records Inserted Successfully');</script>";
	// header('location: customerview.html');
}
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
?>
