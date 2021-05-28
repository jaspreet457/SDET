<html>
<body>
Your order is: <?php echo $_POST["fname"]; ?><br>
Your have to pay : <?php 
$value =  $_POST['fname'];
if ($value =="pepperoni pizza")
{
echo 'Awesome Pizza Place, pepperoni pizza, $20';
}
elseif ($value =="wild burger joint"){
	echo'wild burger joint, burger, $15';
}
elseif ($value =="Fried Rice"){
	echo'Pappa rich, Fried Rice, $20';
}
else
{
	echo'Subway, Veggi Patty, $10';
}

 ?>

</body>
</html>