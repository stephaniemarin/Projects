<!DOCTYPE html>
<html>
<head>

</head>



<body>

<h1>This is your shopping Cart </h1>

<?php

session_start();


$_SESSION['RainJacket1'] = $_POST['num1'];
$_SESSION['RainJacket2'] = $_POST['num2'];
$_SESSION['RainJacket3'] = $_POST['num3'];
$_SESSION['RainJacket4'] = $_POST['num4'];
$_SESSION['RainJacket5'] = $_POST['num5'];
$_SESSION['RainJacket6'] = $_POST['num6'];


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

if ($_SESSION['RainJacket1'] > 0){
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['RainJacket1'] * 15.99."</td><t/r>";
}
if ($_SESSION['RainJacket2'] > 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['RainJacket2'] * 12.50."</td><t/r>";
}
if ($_SESSION['RainJacket3'] > 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['RainJacket3'] * 9.99."</td><t/r>";
}
if ($_SESSION['RainJacket4'] > 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['RainJacket4'] * 6.26."</td><t/r>";
}
if ($_SESSION['RainJacket5'] > 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['RainJacket5']* 11.99."</td><t/r>";
}
if ($_SESSION['RainJacket6'] > 0)
{
  echo "<tr><td width=\"400\"> Jacket ".$_SESSION['RainJacket6'] *11.99."</td><t/r>";
}


if ($_SESSION['Shirts1'] > 0){
  echo "<tr><td width=\"400\"> Sweater1 ".$_SESSION['Shirts1'] * 5.99."</td><t/r>";
}
if ($_SESSION['Shirts2'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts2'] * 15.99."</td><t/r>";
}
if ($_SESSION['Shirts3']  > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts3'] * 5.99."</td><t/r>";
}
if ($_SESSION['Shirts4'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts4'] * 5.99."</td><t/r>";
}
if ($_SESSION['Shirts5'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts5'] * 5.99."</td><t/r>";
}
if ($_SESSION['Shirts6'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts6'] * 15.99."</td><t/r>";
}
if ($_SESSION['Shirts7'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts7'] *5.99."</td><t/r>";
}
if ($_SESSION['Shirts8'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts8'] *12.50."</td><t/r>";
}
if ($_SESSION['Shirts9'] > 0)
{
  echo "<tr><td width=\"400\"> Sweater".$_SESSION['Shirts9'] *15.50."</td><t/r>";
}

?>
</dody>
</html>
