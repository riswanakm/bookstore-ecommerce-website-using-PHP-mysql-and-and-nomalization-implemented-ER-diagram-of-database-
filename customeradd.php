<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtAddress = $_POST['txtaddress'];

// database insert SQL code
$sql = "INSERT INTO `customer` (`Name`, `Address`, `Phone_Number`, `Email`) VALUES ( '$txtName', '$txtAddress', '$txtPhone', '$txtEmail')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>
alert('Customer Records Inserted Successfully');
window.location.href='customerview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Customer Records Inserted Successfully');</script>";
	// header('location: customerview.html');
}
}
else
{
	echo "<script>
alert('Error');
window.location.href='customer.html';
</script>";
	// echo "<script type='text/javascript'>alert('Error');</script>";
	// header('location: customer.html');

}
?>
