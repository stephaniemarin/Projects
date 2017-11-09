<?php

$db = new mysqli('127.0.0.1', 'root', '', 'Petshop');

if (mysqli_connect_errno())
{
	echo "Could not connect to database!";
	exit;
}

define('SHOES_PRICE', 49.99);
define('PANTS_PRICE', 24.99);
define('TSHIRT_PRICE', 12.99);

$numShoes = $_POST['shoesTB'];
$numPants = $_POST['pantsTB'];
$numTshirts = $_POST['tshirtsTB'];
$address = $_POST['addressTB'];
$date = date('jS F Y, H:i');
$orderTotal = ($numShoes * SHOES_PRICE) + ($numPants * PANTS_PRICE) + ($numTshirts * TSHIRT_PRICE);
$orderID = uniqid();


$sql = "insert into tblOrders values ($orderID, $orderTotal, $date, $address)";

$result = $db->query($sql);


$outputString1 = "\n".$date;
$outputString2 = "\nOrder Details:\t".$numShoes." Shoes\t".$numPants." Pants\t".$numTshirts." Tshirts";
$outputString3 = "\nOrder Total: $".round($orderTotal, 2);
$outputString4 = "\nAddress: ".$address."\n\n";

echo "<p></p>";
echo "<br>Order ID#: \t".$orderID;
echo "<br>".$outputString1;
echo "<br>".$outputString2;
echo "<br>".$outputString3;
echo "<br>".$outputString4;


$db->close();

?>
