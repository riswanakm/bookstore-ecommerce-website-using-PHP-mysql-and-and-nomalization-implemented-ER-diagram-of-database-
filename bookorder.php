<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Form</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
  body {
      background-image: url("background.jpg");
    }
  .font-btn{
    float: right;
  }
  h2{
      color: white;
    }
    .lead, .container{
      color: white;
    }
  footer {
    background-color: #3A3845;
    text-align: center;
    font-weight: 600;
    text-align: center;
    height: 10rem;
    color: white;
    padding-top: 30px;
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
        <h2>Book Order form</h2>
        <p class="lead">Fill in the details in the form given below</p>
      </div>
<fieldset>

  <form name="frmContact" class="needs-validation " method="post" action="bookorderaction.php">
    <p>
      <label for="message">Book Name</label>
      <select class="form-control" name="txtBook"id="txtBook"  required>
        <option value=''>
          --Select--
        </option>
        <?php
    $con = mysqli_connect('localhost', 'root', '','Bookstore');
    $sql = "SELECT Book_id,Name FROM book";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
  ?>
        <option value="<?php echo $row[0]; ?>">
         <?php echo $row[1]; ?>
        </option>
        <?php
      }
    } ?>
      </select>
    </p>
    <p>
      <label for="message">Customer Name</label>
      <select class="form-control" name="txtCustomer"id="txtCustomer"  required>
        <option value=''>
          --Select--
        </option>
        <?php
    $sql = "SELECT Customer_id,Name FROM customer";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
  ?>
        <option value="<?php echo $row[0]; ?>">
         <?php echo $row[1]; ?>
        </option>
        <?php
      }
    } ?>
      </select>
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
<footer>
  <p> Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912</p>
  <p class="footer-text">Copyright 2022 All rights reserved</p>
</footer>
</html>
