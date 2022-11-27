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
$txtURl = $_POST['txturl'];


// database insert SQL code
$sql = "INSERT INTO `publisher` (`Name`, `Email`, `URL`) VALUES ('$txtName', '$txtEmail', '$txtURl')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<script>
alert('Publisher Records Inserted Successfully');
window.location.href='publisherview.php';
</script>";
}
}
else
{
	echo "<script>
alert('Error');
window.location.href='publisher.html';
</script>";

}
?>
