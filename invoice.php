<!--  Riswana K Muhammed Kunju Rawther - 8805477
Gayathri Anil - 8758738
Jaise Babu - 8773912-->
<?php
if($_GET['id']!='')
{
  $orderid= $_GET['id'];
  $con = mysqli_connect('localhost', 'root', '','Bookstore');
  $sql = "SELECT b.Name, c.Name,b.Address,b.Phone_Number, FROM_UNIXTIME(a.`timestamp`,'%D %M %Y'), FROM_UNIXTIME(a.`timestamp`,'%h:%i %p'),a.status,a.Order_id,b.Customer_id,c.PRice FROM orders a LEFT OUTER JOIN customer b ON a.Customer_id=b.Customer_id LEFT OUTER JOIN book c ON a.Book_id=c.Book_id WHERE a.Order_id='$orderid'";
  $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_array($result)){
  $cusname = $row[0];
  $bookname = $row[1];
  $addr = $row[2];
  $phno = $row[3];
  $date = $row[4];
  $time = $row[5];
  $ordid = $row[7];
  $cusid = $row[8];
  $price = $row[9];
  $stat = $row[6];
  $tax = $price * (5/100);
  $subtotal = $price + $tax;
  }



  ob_start();
/*call the FPDF library*/
require('fpdf184/fpdf.php');

$image1 = "logo.png";

  class PDF extends FPDF
{
  function Header()
{
  // $pdf->Image($image1, 79, 17, 33.78);
  $this->Image('logo.png',79, 17, 33.78);
}
  function Footer()
{
    $this->SetY(-25);
    $this->Cell(150);
    $this->Cell(80,10,'By,',0,0,'L');
    $this->SetY(-22);
    $this->Cell(150);
    $this->Cell(80,11,'Akshay Tom: 8754186',0,0,'L');
    $this->SetY(-19);
    $this->Cell(150);
    $this->Cell(80,11,'Amal Jose: 8767417',0,0,'L');
    $this->SetY(-16);
    $this->Cell(150);
    $this->Cell(80,11,'Nivya Ann Philip: 8749152',0,0,'L');
}
}
/*A4 width : 219mm*/

$pdf = new PDF('P','mm','A4');

$pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','B',20);

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(71 ,5,'Shipment',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,'Name: '.$cusname,0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,'CUS'.$cusid,0,1);

$pdf->Cell(130 ,5,'Address: '.$addr,0,0);
$pdf->Cell(25 ,5,'Ordered on:',0,0);
$pdf->Cell(34 ,5,$date,0,1);

$pdf->Cell(130 ,5,'Contact: '.$phno,0,0);
$pdf->Cell(25 ,5,'Ordered at:',0,0);
$pdf->Cell(34 ,5,$time,0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Order No:',0,0);
$pdf->Cell(34 ,5,'ORD'.$ordid,0,1);


// $pdf->SetFont('Arial','B',15);
// $pdf->Cell(130 ,5,'Bill To',0,0);
// $pdf->Cell(59 ,5,'',0,0);
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);
$pdf->Cell(50 ,11,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(255,255,0);
/*Heading Of the table*/
$pdf->Cell(10 ,6,'Sl',1,0,'C',true);
$pdf->Cell(80 ,6,'Description',1,0,'C',true);
$pdf->Cell(23 ,6,'Qty',1,0,'C',true);
$pdf->Cell(30 ,6,'Unit Price',1,0,'C',true);
$pdf->Cell(20 ,6,'Sales Tax',1,0,'C',true);
$pdf->Cell(25 ,6,'Total',1,1,'C',true);/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
    $pdf->Cell(10 ,6,'1',1,0);
    $pdf->Cell(80 ,6,$bookname,1,0);
    $pdf->Cell(23 ,6,'1',1,0,'R');
    $pdf->Cell(30 ,6,$price,1,0,'R');
    $pdf->Cell(20 ,6,$tax,1,0,'R');
    $pdf->Cell(25 ,6,$subtotal,1,1,'R');


$pdf->SetFont('Arial','B',12);
$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'$'.$subtotal,1,1,'R');

$pdf->SetFont('Arial','B',9);
if($stat==1){
$pdf->Cell(130 ,10,'Thank you for shopping with us. Your order is confirmed.',0,0);
}
else {
  $pdf->Cell(130 ,10,'Sorry, You cancelled the order. Hope you shop with us again!',0,0);
}


$pdf->Output();
ob_end_flush(); 
}
else {
  echo "<script>
alert('Error');
window.location.href='ordersview.php';
</script>";
}
?>
