<?php 
	header('Location: http://dyachkovskiy/r46/index.php');
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'dyach_consutaltion');
	$query ="UPDATE onlineshop SET name = ' " . $_POST['name'] .  " ',
	  price = '" . $_POST['price'] .  "',
	  img = '" . $_POST['img'] .  "'
	  WHERE id= '" . $_POST['id'] . "' ";
	$result = mysqli_query($connect, $query);
?>