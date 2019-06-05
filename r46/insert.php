<?php 
	header('Location: http://dyachkovskiy/r46/index.php');
	$filePath  = $_FILES['pic']['tmp_name'];
	$errorCode = $_FILES['pic']['error'];

	$name = md5_file($filePath);
	$image = getimagesize($filePath);
	$extension = image_type_to_extension($image[2]);
	move_uploaded_file($filePath, '/1/' . $name);
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'dyach_consutaltion');
	mysqli_query($connect, "INSERT INTO onlineshop(name, price, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['img'] . "') ");
?>