<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php

if($_GET['id']!='')
{
	$customer_id = $_GET['id'];
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','Bookstore');


// database select SQL code
$sql = "SELECT  `Name`, `Address`, `Phone_Number`, `Email` FROM `customer` WHERE `Customer_id` = '$customer_id'";
$rs = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($rs)){
	$name = $row['Name'];
	$addr = $row['Address'];
	$phno = $row['Phone_Number'];
	$email = $row['Email'];
	}
?>


<!-- Amal Jose - 8767417 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Form</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
  body {
      background-image: url("background.jpg");
    }
    h2{
      color: white;
    }
    .lead, .container{
      color: white;
    }
  .font-btn{
    float: right;
  }
</style>
</head>

<body>
<button id="font-inc" class="font-btn">A+</button>
  <button id="font-nor" class="font-btn">A</button>
  <button id="font-dec" class="font-btn">A-</button>
<div class="container" id="details-data">

<div class="py-5 text-center" >
        <a href="index.html"><img class="d-block mx-auto mb-4" src="logo.png" alt="" width="300" height="180"></a>
        <h2>Customer Information form</h2>
        <p class="lead">Edit the details in the form given below</p>
      </div>
<fieldset>

  <form name="frmContact" class="needs-validation " method="post" action="customereditaction.php?id=<?php echo $customer_id; ?>">
    <p>
      <label for="Name">Name</label>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder="John Dave" value="<?php echo $name; ?>" required>
	  <div class="invalid-feedback">
                  Valid full name is required.
                </div>
    </p>
    <p>
      <label for="email">Email-Id</label>
      <input type="text"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="johndave@gmail.com" value="<?php echo $email; ?>" required>
    </p>
    <p>
      <label for="phone">Phone number</label>
      <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="568-785-8989" value="<?php echo $phno; ?>" required>
    </p>
    <p>
      <label for="message">Address</label>
      <textarea name="txtaddress" class="form-control"  id="txtaddress"  placeholder="101 King street west, Brampton" required><?php echo $addr; ?></textarea>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Submit"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script type="text/javascript">
  var min = 8;
var max = 50;

function increaseFontSize() {
  var elems = document.querySelectorAll('label');
  var elemh = document.querySelectorAll('h2');
  var elemp = document.querySelectorAll('p');
  for (i = 0; i < elems.length; i++) {
    if (elems[i].style.fontSize) {
      var s = parseInt(elems[i].style.fontSize.replace("px", ""));
    } else {
      var s = 16;
    } if (s != max) {
      s += 1;
    }
    elems[i].style.fontSize = s + "px"
  }
  for (i = 0; i < elemp.length; i++) {
    if (elemp[i].style.fontSize) {
      var s = parseInt(elemp[i].style.fontSize.replace("px", ""));
    } else {
      var s = 19;
    } if (s != max) {
      s += 1;
    }
    elemp[i].style.fontSize = s + "px"
  }
  for (i = 0; i < elemh.length; i++) {
    if (elemh[i].style.fontSize) {
      var s = parseInt(elemh[i].style.fontSize.replace("px", ""));
    } else {
      var s = 32;
    } if (s != max) {
      s += 1;
    }
    elemh[i].style.fontSize = s + "px"
  }
}

function decreaseFontSize() {
  var elems = document.querySelectorAll('label');
  var elemh = document.querySelectorAll('h2');
  var elemp = document.querySelectorAll('p');
  for (i = 0; i < elems.length; i++) {
    if (elems[i].style.fontSize) {
      var s = parseInt(elems[i].style.fontSize.replace("px", ""));
    } else {
      var s = 13;
    } if (s != max) {
      s -= 1;
    }
    elems[i].style.fontSize = s + "px"
  }
  for (i = 0; i < elemp.length; i++) {
    if (elemp[i].style.fontSize) {
      var s = parseInt(elemp[i].style.fontSize.replace("px", ""));
    } else {
      var s = 17;
    } if (s != max) {
      s -= 1;
    }
    elemp[i].style.fontSize = s + "px"
  }
  for (i = 0; i < elemh.length; i++) {
    if (elemh[i].style.fontSize) {
      var s = parseInt(elemh[i].style.fontSize.replace("px", ""));
    } else {
      var s = 30;
    } if (s != max) {
      s -= 1;
    }
    elemh[i].style.fontSize = s + "px"
  }
}

function normalFontSize() {
  var elems = document.querySelectorAll('label');
  var elemh = document.querySelectorAll('h2');
  var elemp = document.querySelectorAll('p');
  for (i = 0; i < elems.length; i++) {

    elems[i].style.fontSize ="16px"
  }
  for (i = 0; i < elemp.length; i++) {

    elemp[i].style.fontSize = "20px"
  }
  for (i = 0; i < elemh.length; i++) {

    elemh[i].style.fontSize = "31px"
  }
}



document.querySelector('#font-inc').addEventListener('click', increaseFontSize);


document.querySelector('#font-dec').addEventListener('click', decreaseFontSize);

document.querySelector('#font-nor').addEventListener('click', normalFontSize);
</script>
</body>
</html>



<?php }
else
{
	echo "<script>
alert('Error');
window.location.href='customerview.php';
</script>";
	// echo "<script type='text/javascript'>alert('Error');</script>";
	// header('location: customer.html');

}
?>
