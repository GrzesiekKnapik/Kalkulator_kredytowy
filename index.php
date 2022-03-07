<!DOCTYPE HTML>
<html lang = "pl">

<head>
	<title>Kalkulator kredytowy</title>
</head>



<body>
	<style>
	*{text-align:center;}
	</style>
	<h1>Kalkulator kredytowy - oblicznie miesięcznej raty</h1>
	
	<form action="Kalkulator.php" method="post">
	
	
	Kwota kredytu <br>
	<input type="text" name ="kwota" 
	value="<?php 
	if(empty($kwota))
	{
		print(null);
	}else 
		print($kwota);?>" />PLN
	
	
	<br><br>
	
	Okres spłaty <br>
	<input type="range" min="3" max="48" name="czas" 
	value="<?php 
	if(empty($czas))
	{
		print(24);
	}else
		print($czas);	
	?>" oninput="nextElementSibling.value = value"/>
	<output><?php if(empty($czas))
	{
		print(24);
	}else
		print($czas)
	?></output> miesiące
		
	
	
	
	<br><br>
	Wysokość oprocentowania <br>
	<input type="text" name ="oprocentowanie" 
	value="<?php 
	if(empty($oprocentowanie))
	{
		print(null);
	}else
		print($oprocentowanie);
	?>"/>%
	
	<br><br>
	
	<input type="submit" value="Oblicz" style="border-radius: 15px;background-color:#04AA6D;"/> 
	</form>
	
<?php
if (isset($messages)) { ?>
<div style="margin-left: auto;margin-right:auto; margin-top: 20px; padding: 10px; border-radius: 5px; background-color: #fc2803; width:300px;">
<?php if($messages==1) echo 'Błąd: brak danych';
if($messages==2) echo 'Błąd: podano wartość 0';
?>
</div>
<?php } ?>
	
	
<?php if (isset($rata)) { ?>
<div style="margin-left: auto;margin-right:auto; margin-top: 20px; padding: 10px; border-radius: 5px; background-color: #04AA6D; width:300px;">
<?php echo 'Wynik: '.$rata; ?>
</div>
<?php } ?>	









</body>

</html>