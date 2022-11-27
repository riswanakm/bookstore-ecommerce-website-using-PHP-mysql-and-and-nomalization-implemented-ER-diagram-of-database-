<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php
// database connection code
if(isset($_POST['txtName']) && $_GET['id']!='')
{
	$book_id = $_GET['id'];
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');

// get the post records

$txtName = $_POST['txtName'];
$txtAuthor = $_POST['txtAuthor'];
$txtPrice = $_POST['txtPrice'];
$txtPublisher = $_POST['txtPublisher'];
$Edition = $_POST['Edition'];
$YearPublished = $_POST['YearPublished'];
$ISBN = $_POST['ISBN'];
$Bookinfo = $_POST['Bookinfo'];

// database insert SQL code
$sql = "UPDATE `book` SET `Name` = '$txtName', `Author`= '$txtAuthor', `Price` = '$txtPrice', `Publisher_id`='$txtPublisher',`Edition`='$Edition',`YearPublished`='$YearPublished',`ISBN`='$ISBN',`Bookinfo`='$Bookinfo' WHERE Book_id = '$book_id'";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>
alert('Book Record Updated Successfully');
window.location.href='bookview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Customer Records Inserted Successfully');</script>";
	// header('location: customerview.html');
}
}
else
{
	echo "<script>
alert('Error');
window.location.href='bookview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Error');</script>";
	// header('location: customer.html');

}
?>
