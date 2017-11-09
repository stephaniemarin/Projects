
<?php

session_start();

$_SESSION['Shirts1'] = $_POST['snum1'];
$_SESSION['Shirts2'] = $_POST['snum2'];
$_SESSION['Shirts3'] = $_POST['snum3'];
$_SESSION['Shirts4'] = $_POST['snum4'];
$_SESSION['Shirts5'] = $_POST['snum5'];
$_SESSION['Shirts6'] = $_POST['snum6'];
$_SESSION['Shirts7'] = $_POST['snum7'];



echo"<center>";
echo "<h2> <p> This is working </p> </h2>";
echo "<table border=\"1\">";

if ($_SESSION['Shirts1'] > 0){
  echo "<tr><td width=\"400\"> Jacket 1 ".$_SESSION['Shirts1'] * 19.99."</td><t/r>";
}
if ($_SESSION['Shirts2'] > 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['Shirts2'] * 12.50."</td><t/r>";
}
if ($_SESSION['Shirts3'] >= 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['Shirts3'] * 9.99."</td><t/r>";
}
if ($_SESSION['Shirts4'] >= 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['Shirts4'] * 6.26."</td><t/r>";
}
if ($_SESSION['Shirts5'] >= 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['Shirts5'] * 11.99"</td><t/r>";
}
if ($_SESSION['Shirts6'] >= 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['Shirts6'] * 11.99."</td><t/r>";
}


?>
