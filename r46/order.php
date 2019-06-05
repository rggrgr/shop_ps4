<?php
	header('Location: http://dyachkovskiy/r46/main.php');
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'dyach_consutaltion');
	mysqli_query($connect, "INSERT INTO order_onlineshop(name, price, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['img'] . "') ");
?>