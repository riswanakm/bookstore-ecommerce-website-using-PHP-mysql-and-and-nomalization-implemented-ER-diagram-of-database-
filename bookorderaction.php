<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php
// database connection code
if (isset($_POST['Submit']))
{

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');

// get the post records

$txtBook = $_POST['txtBook'];
$txtCustomer = $_POST['txtCustomer'];

// database insert SQL code
echo $sql = "INSERT INTO `orders` (`Book_id`, `Customer_id`, `timestamp`) VALUES ( '$txtBook', '$txtCustomer',  UNIX_TIMESTAMP())";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>
alert('Order Placed Successfully');
window.location.href='ordersview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Customer Records Inserted Successfully');</script>";
	// header('location: customerview.html');
}
}
else
{
	echo "<script>
alert('Error');
window.location.href='bookorder.php';
</script>";
	// echo "<script type='text/javascript'>alert('Error');</script>";
	// header('location: customer.html');

}
?>
