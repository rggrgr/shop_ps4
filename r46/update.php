<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="direct.php" method="POST">
		<?php  
			echo '<input type="" name="name" value="' . $_POST['name'] . '">' ;
			echo '<input type="" name="price" value="' . $_POST['price'] . '">' ;
			echo '<input type="" name="img" value="' . $_POST['img'] . '">' ;
			echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">' ;
		?>
		<button>change</button>
	</form>
</body>
</html>