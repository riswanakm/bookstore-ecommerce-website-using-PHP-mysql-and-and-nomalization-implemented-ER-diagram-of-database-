<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  background: black;

}

#tablediv {
  overflow-x: auto;
}

#customers tr:nth-child(even){background-color: light-yellow;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: white;
  color: black;
  margin-bottom: 30px;
}
.fa {
	color: white;
}
i {
	cursor: pointer;
}
footer {
  background-color: #3A3845;
  text-align: center;
  font-weight: 600;
  text-align: center;
  height: 10rem;
  color: white;
  padding-top: 30px;
    margin-top: 110px;
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
        <h2>Customer Details</h2>
      </div>
<fieldset>
  <div id="tablediv">
  <table id="customers">
  <tr>
  	<th>Sl.No.</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php
    $con = mysqli_connect('localhost', 'root', '','Bookstore');
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
    	$count =1;
    	while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
  	<td><?php echo $count; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Address']; ?></td>
    <td><?php echo $row['Phone_Number']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><a onclick="editPost(<?php echo $row['Customer_id']; ?>)"><i class="fa fa-edit"></i></a></td>
    <td><a onclick="deletePost(<?php echo $row['Customer_id']; ?>)"> <i class="fa fa-trash"></i></a></td>
  </tr>
<?php $count = $count+1; }
  } else { ?>
<td colspan="7">No Records</td>
<?php } ?>

</table>
</div>
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

function deletePost(id) {
    var ask = window.confirm("Are you sure you want to delete this data?");
    if (ask) {

        window.location.href = "customerdelete.php?id="+id;

    }
}

function editPost(id) {

        window.location.href = "customeredit.php?id="+id;
}
</script>
</body>
<footer>
  <p> Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912</p>
  <p class="footer-text">Copyright 2022 All rights reserved</p>
</footer>
</html>
