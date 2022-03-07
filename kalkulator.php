<!DOCTYPE HTML>
<html lang = "pl">

<head>

</head>


<body>


<?php

$kwota = $_REQUEST["kwota"];
$oprocentowanie = ($_REQUEST["oprocentowanie"]);
$czas = $_REQUEST["czas"];

if ($kwota == "" || $oprocentowanie==""){
	$messages = 1;
}else if($kwota == "0" || $oprocentowanie=="0"){
	$messages = 2;

}else 
{
$rata = $kwota/$czas + $kwota/$czas*$oprocentowanie/100;
$rata = round($rata,2);
}




include 'index.php';

?>

</body>

</html>