<?php 
	header('Location: http://dyachkovskiy/r46/index.php');
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'dyach_consutaltion');
	$query ="DELETE FROM onlineshop WHERE id = '" . $_POST['id'] . "' ";
	$result = mysqli_query($connect, $query);
?>