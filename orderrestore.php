<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php

if($_GET['id']!='')
{
	$order_id = $_GET['id'];
	// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');

$sql = "UPDATE orders SET status = 1 WHERE Order_id = '$order_id'";
$rs  =	mysqli_query($con, $sql);

if($rs)
{
	echo "<script>
alert('Order Re-stored Successfully');
window.location.href='ordersview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Customer Records Inserted Successfully');</script>";
	// header('location: customerview.html');
}

else
{
	echo "<script>
alert('Error');
window.location.href='ordersview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Error');</script>";
	// header('location: customer.html');

}
}
else {
	echo "<script>
alert('Error');
window.location.href='ordersview.php';
</script>";
}
?>
